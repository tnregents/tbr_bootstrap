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

  $options = array();

  if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/{$path}/css/{$filename}")) {
    drupal_add_css("{$path}/css/{$filename}", $options);
  }

}

/* function tbr_bootstrap_preprocess_html(&$variables) {
  $variables['classes_array'][] = str_replace('.', '-', $_SERVER['SERVER_NAME']);
} */

/**
* Allow themable breadcrumbs
*/
function tbr_bootstrap_breadcrumb($variables) {
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
   else {
     return t("Home");
   }   
   
 }

?>