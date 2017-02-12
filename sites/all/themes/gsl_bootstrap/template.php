<?php

/**
 * @file
 * template.php
 */
// Remove Height and Width Inline Styles from Drupal Images
function gsl_bootstrap_preprocess_image(&$variables) {
 foreach (array('width', 'height') as $key) {
  unset($variables[$key]);
 }
}
/*function gsl_bootstrap_preprocess_field(&$variables, $hook) {
dpm($variables['element']);
 if($variables['element']['#field_name'] == 'form-item-field-instrument-images-und-0-field-instrument-image-und-5 ') {
  $variables['element']['#field_name']['label'] = t("your label name");
 }

}*/