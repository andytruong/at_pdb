<?php
namespace Drupal\at_pdb\Hook;

class Page_Alter {
  /**
   * DebugBar
   * @var \DebugBar\DebugBar
   */
  private $debug_bar;

  private $page;

  /**
   * @param \DebugBar\DebugBar $debug_bar
   */
  public function __construct($debug_bar) {
    $this->debug_bar = $debug_bar;
  }

  public function setPage(&$page) {
    $this->page = &$page;
    return $this;
  }

  public function execute() {
    $dir  = trim(substr(at_library('phpdebugbar'), strlen(DRUPAL_ROOT)), DIRECTORY_SEPARATOR);
    $dir .= '/src/DebugBar/Resources';

    $this->page['content']['at_pdb'] = array(
      '#markup' => $this->debug_bar->getJavascriptRenderer()->render(),
      '#attached' => array(
        'css' => array(
          $dir . '/vendor/font-awesome/css/font-awesome.min.css',
          $dir . '/debugbar.css',
          $dir . '/widgets.css',
          $dir . '/openhandler.css',
        ),
        'js' => array(
          $dir . '/vendor/jquery/jquery.min.js', array('weight' => 100),
          $dir . '/debugbar.js', array('weight' => 100),
          $dir . '/widgets.js', array('weight' => 100),
          $dir . '/openhandler.js', array('weight' => 100),
        ),
      ),
    );
  }
}
