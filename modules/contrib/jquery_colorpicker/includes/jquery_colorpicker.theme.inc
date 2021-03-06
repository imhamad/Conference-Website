<?php

/**
 * @file
 * Holds preprocess functions for the jQuery colorpicker module.
 */

use Drupal\Core\Field\FieldStorageDefinitionInterface;

/**
 * Implements hook_preprocess_jquery_colorpicker().
 */
function template_preprocess_jquery_colorpicker(&$vars) {
  $element = $vars['element'];

  $vars['id'] = $element['#id'];
  $vars['name'] = isset($element['#name']) ? $element['#name'] : $element['#id'];
  $vars['value'] = isset($element['#value']) ? $element['#value'] : '';

  $default_color = '';
  if (isset($element['#value'])) {
    if (is_string($element['#value']) && strlen($element['#value'])) {
      $default_color = '#' . $element['#value'];
    }
  }
  elseif (isset($element['#default_value']) && strlen($element['#default_value']) == 6 && preg_match('/^[0-9a-f]{6}$/i', $element['#default_value'])) {
    $default_color = '#' . strtolower($element['#default_value']);
  }

  $vars['default_color'] = $default_color;

  $vars['additional'] = '';
  $vars['show_remove'] = FALSE;
  $vars['show_clear'] = FALSE;

  if (isset($element['#cardinality'])) {
    if ($element['#cardinality'] == FieldStorageDefinitionInterface::CARDINALITY_UNLIMITED) {
      $vars['show_remove'] = TRUE;
    }
    else {
      $vars['show_clear'] = TRUE;
    }
  }
}
