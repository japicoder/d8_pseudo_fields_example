<?php

/**
 * Implements hook_views_data_alter().
 */
function pseudo_field_example_views_data_alter(array &$data) {
  $data['node'][PSEUDO_EXAMPLE_FIELD_NAME] = array(
    'title' => t('Pseudo example field'),
    'field' => array(
      'title' => t('Pseudo example field'),
      'help' => t('Pseudo example field help.'),
      'id' => PSEUDO_EXAMPLE_FIELD_NAME,
    ),
  );
}
