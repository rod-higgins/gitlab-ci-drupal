<?php

namespace Drupal\Tests\my_module\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\my_module\DemoModuleExampleService;

/**
 * @coversDefaultClass \Drupal\my_module\DemoModuleExampleService
 *
 * @group my_module
 */
class ExampleUnitTest extends UnitTestCase {

  /**
   * Dummy thing.
   *
   * @var bool
   */
  protected $dummy;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {

    $this->dummy = new DemoModuleExampleService(TRUE);
  }

  /**
   * @covers ::isDummy
   */
  public function testIsDummy() {
    // Dummy test.
    $this->assertEquals($this->dummy->isDummy(), TRUE);
  }

  /**
   * {@inheritdoc}
   */
  protected function tearDown(): void {
    parent::tearDown();
    unset($this->dummy);
  }

  // phpcs:disable
  // public function testFailDemo() {
  //   $this->assertEquals($this->dummy->isDummy(), FALSE);
  // }
}
