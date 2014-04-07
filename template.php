<?php

/** 
 * Remove the Drupal-related CSS includes 
 */
function stressfree_css_alter(&$css)
{
    unset($css[drupal_get_path('module', 'system').'/system.theme.css']);
    unset($css[drupal_get_path('module', 'system').'/system.menus.css']);
    unset($css[drupal_get_path('module','system').'/system.base.css']);
    unset($css[drupal_get_path('module', 'system').'/system.messages.css']);
    unset($css[drupal_get_path('module', 'comment').'/comment.css']);
    unset($css[drupal_get_path('module', 'field').'/theme/field.css']);
    unset($css[drupal_get_path('module', 'mollom').'/mollom.css']);
    unset($css[drupal_get_path('module', 'node').'/node.css']);
    unset($css[drupal_get_path('module', 'search').'/search.css']);
    unset($css[drupal_get_path('module', 'user').'/user.css']);
    unset($css[drupal_get_path('module', 'views').'/css/views.css']);
    unset($css[drupal_get_path('module', 'ctools').'/css/ctools.css']);
    unset($css[drupal_get_path('module', 'panels').'/css/panels.css']);
    unset($css[drupal_get_path('module', 'book').'/book.css']);
    unset($css[drupal_get_path('module', 'fences').'/field.css']);
}

/** 
 * Remove the Drupal-related JS includes 
 */
function stressfree_js_alter(&$js)
{
    unset($js[drupal_get_path('module', 'panels').'/js/panels.js']);
    unset($js[drupal_get_path('module', 'views').'/js/views.js']);
    unset($js[drupal_get_path('module', 'views').'/js/ajax_view.js']);
    unset($js[drupal_get_path('module', 'views').'/js/base.js']);
}

/** 
 * Remove the Drupal generator meta tag 
 */
function stressfree_html_head_alter(&$head_elements) {
  unset($head_elements['system_meta_generator']);
}

/**
 * Change the node submitted text output and read more link text.
 */
function stressfree_preprocess_node(&$vars, $hook) {
    $vars['submitted'] = t('@date', array('@date' => date("jS M Y", $vars['created'])));
}