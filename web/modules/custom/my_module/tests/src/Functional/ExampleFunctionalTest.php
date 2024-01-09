<?php

namespace Drupal\Tests\my_module\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Test Functional description.
 *
 * @group my_module
 */
class ExampleFunctionalTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  public static $modules = ['node', 'block'];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $this->drupalPlaceBlock('page_title_block');
  }

  /**
   * Tests Homepage.
   */
  public function testHomepage() {
    // Test homepage.
    $this->drupalGet('<front>');
    $this->assertSession()->statusCodeEquals(200);

    // Minimal homepage title.
    $this->assertSession()->pageTextContains('Log in');
  }

  // phpcs:disable
  // public function testFailDemo() {
  //   $this->drupalGet('/do-not-exist');
  //   $this->assertSession()->statusCodeEquals(200);
  // }

}
