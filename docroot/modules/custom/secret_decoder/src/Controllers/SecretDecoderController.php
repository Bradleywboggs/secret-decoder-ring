<?php

namespace Drupal\secret_decoder\Controllers;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines SecretDecoderController class
 */

class SecretDecoderController extends ControllerBase {
  /**
   * Display the markup
   *
   * @return array
   *  Return markup array
   */

  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Enter Your Secret Key:______')
    ];
  }
}
