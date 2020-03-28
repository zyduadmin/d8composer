<?php

namespace Drupal\pdb\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Property Database routes.
 */
class PdbController extends ControllerBase {

  /**
   * PDB admin homepage
   * @return string
   */
  public function index() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
