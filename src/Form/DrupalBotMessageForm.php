<?php

namespace Drupal\drupal_bot\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the drupal bot entity edit forms.
 */
class DrupalBotMessageForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $result = parent::save($form, $form_state);

    $entity = $this->getEntity();

    $message_arguments = ['%label' => $entity->toLink()->toString()];
    $logger_arguments = [
      '%label' => $entity->label(),
      'link' => $entity->toLink($this->t('View'))->toString(),
    ];

    switch ($result) {
      case SAVED_NEW:
        $this->messenger()->addStatus($this->t('New drupal bot %label has been created.', $message_arguments));
        $this->logger('drupal_bot')->notice('Created new drupal bot %label', $logger_arguments);
        break;

      case SAVED_UPDATED:
        $this->messenger()->addStatus($this->t('The drupal bot %label has been updated.', $message_arguments));
        $this->logger('drupal_bot')->notice('Updated drupal bot %label.', $logger_arguments);
        break;
    }

    $form_state->setRedirect('entity.drupal_bot_message.canonical', ['drupal_bot_message' => $entity->id()]);

    return $result;
  }

}
