<?php

namespace Drupal\drupal_bot\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Drupal Bot routes.
 */
class DrupalBotController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
