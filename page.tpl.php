<?php
// $Id: page.tpl.php,v 1.6 2009/10/17 01:15:40 webchick Exp $
?>

  <div id="page" class="container">
  
  	<div id="header" class="span-24 last">
  		<div id="logo-floater"><div class="padall20">
        <?php if ($logo || $site_title): ?>
          <h1><a href="<?php print $front_page ?>" title="<?php print $site_name ?>">
         <?php print $site_name ?>
          </a></h1>
        <?php endif; ?>
        <h6 class="slogan"><?php print $site_slogan ?></h6>
      </div></div>
      <?php print render($page['header']); ?>
  	</div>
  	
  	<div class="span-24 last menu-search bordertopbottom">
	    <div id="menu" class="span-18"><div class="main-menu-inner">
	      <?php if ($main_menu): ?>
	        <div id="navigation"><div class="section">
	          <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'clearfix')), 'heading' => t(''))); ?>
	        </div></div> <!-- /.section, /#navigation -->
	      <?php endif; ?>
	    </div></div>
	    <div id="search-box" class="span-6 last"><div class="search-box-inner">
	      <?php if($page['search_box']) :?> 
          <?php print render($page['search_box']);?>
	      <?php endif; ?>
	    </div></div>
    </div>
    <div id="content" class="clearfix span-24 last">
      <div class="span-18 middle-content"><div class="middle-content-inner padall10">
        <?php print $breadcrumb; ?>
        <?php if ($page['highlight']): ?><div id="highlight"><?php render($page['highlight']); ?></div><?php endif; ?>
        <?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>
        <?php if ($title): ?><h2<?php print $tabs ? ' class="with-tabs"' : '' ?>><?php print $title ?></h2><?php endif; ?>
        <?php if ($tabs): ?><ul class="tabs primary"><?php print render($tabs) ?></ul></div><?php endif; ?>
        <?php if (menu_secondary_local_tasks()): ?><ul class="tabs secondary"><?php print render(menu_secondary_local_tasks()) ?></ul><?php endif; ?>
        <?php if ($show_messages && $messages): print $messages; endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <div class="clearfix">
          <?php print render($page['content']); ?>
        </div>
      </div></div>
      <div class="span-6 last sidebar-second"><div class="sidebar-second-inner padall10">
        <div id="sidebar-second" class="sidebar">
          <?php if ($page['sidebar_second']): ?>
            <?php print render($page['sidebar_second']); ?>
          <?php endif; ?>
        </div>&nbsp;
      </div></div>
    </div>

    <div id="footer" class="span-24 last"><div class="footer-inner padall10">
      <?php print render($page['footer']) ?>
    </div></div>

  </div>
