<?php

	function drunove_process_html(&$vars) {
	  $vars['ie_styles'] = '<!--[if lt IE 7]><style type="text/css" media="screen">@import ' . path_to_theme() . '/bp/ie.css";</style><![endif]-->';
	}
	
	function drunove_preprocess_search_block_form(&$variables) {
	  $variables['form']['search_block_form']['#attributes']['class'] = array('search-input');
	  $variables['form']['submit']['#attributes']['class'] = array('search');
	  $variables['form']['submit']['#value'] = '';
	  $variables['form']['search_block_form']['#title'] = '';
	  // Hidden form elements have no value to themers. No need for separation.
	  unset($variables['form']['search_block_form']['#printed']);
	  $variables['search']['search_block_form'] = drupal_render($variables['form']['search_block_form']);
	  unset($variables['form']['submit']['#printed']);
	  $variables['search']['submit'] = drupal_render($variables['form']['submit']);
	  // Collect all form elements to make it easier to print the whole form.
	  $variables['search_form'] = implode($variables['search']);  
	}