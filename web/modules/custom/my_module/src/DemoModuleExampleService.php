<?php

namespace Drupal\my_module;

/**
 * Demo Class for tests demo.
 */
class DemoModuleExampleService {

  /**
   * Dummy thing.
   *
   * @var bool
   */
  protected $dummy;

  /**
   * Constructs a DemoModuleExampleService object.
   *
   * @codeCoverageIgnore
   */
  public function __construct(bool $dummy) {
    $this->dummy = $dummy;
  }

  /**
   * Retrieves the dummy!
   *
   * @return bool
   *   The dummy!
   */
  public function isDummy() {
    return $this->dummy;
  }

}
