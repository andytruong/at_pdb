<?php
namespace Drupal\at_pdb;

use Drupal\at_base\Autoloader;

class PHPDebugBar_Factory {
  public function __construct() {
    $dir = at_library('psr.log') . '/Psr/Log';
    at_id(new Autoloader('Psr\Log', $dir))->register();

    $dir = at_library('phpdebugbar') . '/src/DebugBar';
    at_id(new Autoloader('DebugBar', $dir))->register();
  }

  public function getInstance() {
    return new PHPDebugBar();
  }
}
