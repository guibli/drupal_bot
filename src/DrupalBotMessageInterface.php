<?php

namespace Drupal\drupal_bot;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a drupal bot entity type.
 */
interface DrupalBotMessageInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
