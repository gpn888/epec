<?php

function arkyepec_preprocess_maintenance_page(&$variables) { 
  arkyepec_preprocess_html($variables);
}

function arkyepec_preprocess_page(&$vars) {
  if (isset($vars['node']->type)) { 
    array_splice($vars['theme_hook_suggestions'], -1, 0, 'page__'.$vars['node']->type);
    $url_alias = drupal_get_path_alias($_GET['q']);
    $split_url = explode('/', $url_alias);
    $cumulative_path = '';
    foreach ($split_url as $path) {
      $cumulative_path .= '__' . $path;
      $path_name = 'page' . $cumulative_path;
      array_splice($vars['theme_hook_suggestions'], -1, 0, str_replace('-','_',$path_name));
    }
    if (count($split_url) > 1) {
      $page_name = end($split_url);
      array_splice($vars['theme_hook_suggestions'], -1, 0, 'page__'.str_replace('-','_',$page_name));
    }
  }
  if($vars['page']['sidebar_first'] && $vars['page']['sidebar_second']) { 
      $vars['sf_class'] = 'kols kol-600-25 kol-900-15';
      $vars['pg_class'] = 'kols kol-600-75 kol-900-60';
      $vars['ss_class'] = 'kols kol-900-25';
    } 
    elseif ($vars['page']['sidebar_first'] && !$vars['page']['sidebar_second']) {
      $vars['sf_class'] = 'kols kol-600-25 kol-900-15';
      $vars['pg_class'] = 'kols kol-600-75 kol-900-85';
    } 
    elseif (!$vars['page']['sidebar_first'] && $vars['page']['sidebar_second']) {
      $vars['pg_class'] = 'kols kol-600-70 kol-900-75';
      $vars['ss_class'] = 'kols kol-600-30 kol-900-25';        
    } 
    else {
      $vars['sf_class'] = '';
      $vars['pg_class'] = 'kols';
      $vars['ss_class'] = '';            
    }
}

function arkyepec_preprocess_html(&$vars) {

  drupal_add_css('https://fonts.googleapis.com/css?family=Maven+Pro|Open+Sans', array('type' => 'external'));
  drupal_add_css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array('type' => 'external'));

  $reset = drupal_get_path('theme', 'arkyepec') . '/css/awstyles.css';
  //$reset2 = drupal_get_path('theme', 'arkyepec') . '/css/arky-stuff.css';
  //$reset3 = drupal_get_path('theme', 'arkyepec') . '/css/arky-style.css';

  $options = array(
    'group' => CSS_SYSTEM,
    'weight' => -1002,
  );

/*
  $options2 = array(
    'group' => CSS_SYSTEM,
    'weight' => -1001,
  );

  $options3 = array(
    'group' => CSS_SYSTEM,
    'weight' => -1000,
  );
*/

  drupal_add_css($reset, $options);
  //drupal_add_css($reset2, $options2);
  //drupal_add_css($reset3, $options3);

  foreach($vars['user']->roles as $role){
    $vars['classes_array'][] = 'role-' . drupal_html_class($role);
  }
  if (!empty($vars['page']['sidebar_first']) && !empty($vars['page']['sidebar_second'])) {
    $vars['classes_array'][] = 'sidebar-twice flexside';
  }
  elseif (!empty($vars['page']['sidebar_first'])) {
    $vars['classes_array'][] = 'sidebar-1 flexside';
  }
  elseif (!empty($vars['page']['sidebar_second'])) {
    $vars['classes_array'][] = 'sidebar-2 flexside';
  }
  else {
    $vars['classes_array'][] = 'sidebar-no';
  }
}

function arkyepec_menu_tree($variables) {

      if (preg_match("/\bchildren\b/i", $variables['tree'])){
       return '<ul class="menu nav nav-pills nav-stacked nav-bracket">' . $variables['tree']    . '</ul>';
      } else {
        return '<ul class="children menu">' . $variables['tree'] . '</ul>';
      }
  }

function arkyepec_menu_link(array $variables) {
$element = $variables['element'];
$sub_menu = '';

$element['#attributes']['id'][] = 'menu-' . $element['#original_link']['mlid'];

if ($element['#below']) { 
  $sub_menu = drupal_render($element['#below']);
}
$output = l($element['#title'], $element['#href'], $element['#localized_options']);
return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}


?>