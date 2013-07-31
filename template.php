<?php

/**
 * Implements hook_html_head_alter()
 * Removes the "Drupal 7" generator metatag.
 */

function tbr_bootstrap_html_head_alter(&$head_elements) {
  unset($head_elements['metatag_generator']);
}

/**
 * Add subdomain class to body eg. policies-tbr-edu 
 */
 
 function tbr_bootstrap_preprocess_html(&$variables) {
 
  $tbr_host = str_replace('.', '-', $_SERVER['SERVER_NAME']);

  //add host class in the body
  $variables['classes_array'][] = $tbr_host;

  $filename = "host-{$tbr_host}.css";
  $path = drupal_get_path("theme", "tbr_bootstrap");

  //if the site specific style exists, then load it VERY last
  if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/{$path}/css/{$filename}")) {
    drupal_add_css("{$path}/css/{$filename}", array('group' => CSS_THEME, 'every_page' => true, 'weight' => 9999));
  }

}
/* function tbr_bootstrap_preprocess_html(&$variables) {
  $variables['classes_array'][] = str_replace('.', '-', $_SERVER['SERVER_NAME']);
} */

/**
* Allow themable breadcrumbs

function tbr_bootstrap_breadcrumb($variables) {
   
   $tbr_host = str_replace('.', '-', $_SERVER['SERVER_NAME']);
   
   if (count($variables['breadcrumb']) > 0) {
     $lastitem = sizeof($variables['breadcrumb']);
     $title = drupal_get_title();
     $crumbs = '<ul class="breadcrumb">';
     $a=1;
     foreach($variables['breadcrumb'] as $value) {
         if ($a!=$lastitem){
          $crumbs .= '<li class="breadcrumb-'.$a.'">'. $value . ' ' . '<span class="divider">/</span></li>';
          $a++;
         }
         else {
             $crumbs .= '<li class="breadcrumb-last">'.$value.'</li>';
         }
     }
     $crumbs .= '</ul>';
   return $crumbs;
   }   
   else if ($tbr_host == "policies-tbr-edu") {
   	$crumbs = '<ul class="breadcrumb">';
   	$crumbs .= '<li class="breadcrumb-1"><a href="/">Home</a> <span class="divider">/</span></li>';
   	$crumbs .= '<li class="breadcrumb-2"><a href="http://tbr.edu/offices/generalcounsel.aspx?id=1118">Office of General Counsel</a></li>';
   	$crumbs .= '</ul>';
   return $crumbs;
   }
   else {
     return t("");
   }   
   
 }
*/
?>