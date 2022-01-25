<?php

namespace Drupal\drupal_bot\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Drupal Bot Message type configuration entity.
 *
 * @ConfigEntityType(
 *   id = "drupal_bot_message_type",
 *   label = @Translation("Drupal Bot Message type"),
 *   label_collection = @Translation("Drupal Bot Message types"),
 *   label_singular = @Translation("drupal bot message type"),
 *   label_plural = @Translation("drupal bot messages types"),
 *   label_count = @PluralTranslation(
 *     singular = "@count drupal bot messages type",
 *     plural = "@count drupal bot messages types",
 *   ),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\drupal_bot\Form\DrupalBotMessageTypeForm",
 *       "edit" = "Drupal\drupal_bot\Form\DrupalBotMessageTypeForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm",
 *     },
 *     "list_builder" = "Drupal\drupal_bot\DrupalBotMessageTypeListBuilder",
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     }
 *   },
 *   admin_permission = "administer drupal bot message types",
 *   bundle_of = "drupal_bot_message",
 *   config_prefix = "drupal_bot_message_type",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/drupal_bot_message_types/add",
 *     "edit-form" = "/admin/structure/drupal_bot_message_types/manage/{drupal_bot_message_type}",
 *     "delete-form" = "/admin/structure/drupal_bot_message_types/manage/{drupal_bot_message_type}/delete",
 *     "collection" = "/admin/structure/drupal_bot_message_types"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "uuid",
 *   }
 * )
 */
class DrupalBotMessageType extends ConfigEntityBundleBase {

  /**
   * The machine name of this drupal bot message type.
   *
   * @var string
   */
  protected $id;

  /**
   * The human-readable name of the drupal bot message type.
   *
   * @var string
   */
  protected $label;

}
