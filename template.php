<?php

function drunove_process_html(&$vars) {
  $vars['ie_styles'] = '<!--[if lt IE 7]><style type="text/css" media="screen">@import ' . path_to_theme() . '/bp/ie.css";</style><![endif]-->';
}

function drunove_preprocess_search_block_form(&$variables) {
	
  $variables['search'] = array();
  $variables['form']['search_block_form']['#attributes'] = array('class' => 'search-input');
  $variables['form']['submit']['#attributes'] = array('class' => 'search');
  $variables['form']['submit']['#value'] = t('');
  $hidden = array();
  // Provide variables named after form keys so themers can print each element independently.
  foreach (element_children($variables['form']) as $key) {
    $type = $variables['form'][$key]['#type'];
    if ($type == 'hidden' || $type == 'token') {
      $hidden[] = drupal_render($variables['form'][$key]);
    }
    else {
      $variables['search'][$key] = drupal_render($variables['form'][$key]);
    }
  }
  // Hidden form elements have no value to themers. No need for separation.
  $variables['search']['hidden'] = implode($hidden);
  // Collect all form elements to make it easier to print the whole form.
  $variables['search_form'] = drupal_render($variables['form']);  
}