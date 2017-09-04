<?php

/**
 * @file
 * Definition of Drupal\morecare_employee\Plugin\views\field\EmployeeWorkload
 */

namespace Drupal\morecare_employee\Plugin\views\field;

use Drupal\Core\Form\FormStateInterface;
use Drupal\views\Plugin\views\field\FieldPluginBase;
use Drupal\views\ResultRow;

/**
 * Field handler for views.
 *
 * @ingroup views_field_handlers
 *
 * @ViewsField("pseudoexample")
 */
class PseudoExampleWorkload extends FieldPluginBase {

  /**
   * @{inheritdoc}
   */
  public function query() {
    // Leave empty to avoid a query on this field.
  }

  /**
   * Define the available options
   * @return array
   */
  protected function defineOptions() {
    $options = parent::defineOptions();
    $options['option_example'] = TRUE;

    return $options;
  }

  /**
   * Provide the options form.
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    $form['option_example'] = array(
      '#title' => $this->t('Option example'),
      '#type' => 'checkbox',
      '#default_value' => TRUE,
    );

    parent::buildOptionsForm($form, $form_state);
  }

  /**
   * @{inheritdoc}
   */
  public function render(ResultRow $values) {
    $node = $values->_entity;
    if ($node->bundle() == 'page') {
      // Usage of your custom options ...
      // $option_example = $this->options['option_example'];
      return t('Lorem ipsum dolor example text');
    }
  }
}
