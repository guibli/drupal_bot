<?php

namespace Drupal\drupal_bot;

use Drupal\Core\Config\Entity\ConfigEntityListBuilder;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of drupal bot message type entities.
 *
 * @see \Drupal\drupal_bot\Entity\DrupalBotMessageType
 */
class DrupalBotMessageTypeListBuilder extends ConfigEntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['title'] = $this->t('Label');

    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    $row['title'] = [
      'data' => $entity->label(),
      'class' => ['menu-label'],
    ];

    return $row + parent::buildRow($entity);
  }

  /**
   * {@inheritdoc}
   */
  public function render() {
    $build = parent::render();

    $build['table']['#empty'] = $this->t(
      'No drupal bot message types available. <a href=":link">Add drupal bot message type</a>.',
      [':link' => Url::fromRoute('entity.drupal_bot_message_type.add_form')->toString()]
    );

    return $build;
  }

}
