<?php
/**
 * @file
 * breadcrumb.func.php
 */

/**
 * Overrides theme_breadcrumb().
 *
 * Print breadcrumbs as an ordered list.
 */
function bootstrap_breadcrumb($variables) {
  $output = '';
  $breadcrumb = $variables['breadcrumb'];
 
  // Determine if we are to display the breadcrumb.
  $bootstrap_breadcrumb = theme_get_setting('bootstrap_breadcrumb');
  if (($bootstrap_breadcrumb == 1 || ($bootstrap_breadcrumb == 2 && arg(0) == 'admin')) && !empty($breadcrumb)) {
   $icon[] = array(
     '#theme' => 'icon',
     '#bundle' => 'fontawesome',
     '#icon' => 'home',
   );
   $breadcrumb[0] = l(drupal_render($icon) . t('Home'),'',array('html' => 'true'));
   $output = theme('item_list', array(
      'attributes' => array(
        'class' => array('breadcrumb'),
      ),
      'items' => $breadcrumb,
      'type' => 'ol',
    ));
  }
  return $output;
}
