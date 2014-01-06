<?php
namespace Drupal\at_pdb;

use DebugBar\DebugBar;
use DebugBar\JavascriptRenderer;
use DebugBar\DataCollector\PhpInfoCollector;
use DebugBar\DataCollector\MessagesCollector;
use DebugBar\DataCollector\TimeDataCollector;
use DebugBar\DataCollector\RequestDataCollector;
use DebugBar\DataCollector\MemoryCollector;
use DebugBar\DataCollector\ExceptionsCollector;

class PHPDebugBar extends DebugBar {
  /**
   * {@inheritDoc}
   */
  public function __construct() {
    $this->addCollector(new PhpInfoCollector());
    $this->addCollector(new MessagesCollector());
    $this->addCollector(new RequestDataCollector());
    $this->addCollector(new TimeDataCollector());
    $this->addCollector(new MemoryCollector());
    $this->addCollector(new ExceptionsCollector());
  }
}
