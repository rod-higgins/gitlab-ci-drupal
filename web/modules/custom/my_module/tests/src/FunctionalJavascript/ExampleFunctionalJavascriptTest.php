<?php

namespace Drupal\Tests\my_module\FunctionalJavascript;

use Drupal\FunctionalJavascriptTests\WebDriverTestBase;

/**
 * Tests Functional Javascript.
 *
 * @group action
 */
class ExampleFunctionalJavascriptTest extends WebDriverTestBase {

  /**
   * {@inheritdoc}
   */
  public static $modules = ['node'];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests the homepage, no specific js here.
   */
  public function testHomepage() {
    $this->drupalGet('<front>');
    $this->createScreenshot('public://screenshot.jpg');
    $this->assertFileExists('public://screenshot.jpg');
  }

  /**
   * Tests failing for demo.
   */
  // public function testFailDemo() {
  //   $this->drupalGet('<front>');
  //   $page = $this
  //     ->getSession()
  //     ->getPage();
  //   $style_selector = $page
  //     ->find('css', '.do-not-exist');
  //   $this
  //     ->assertTrue($style_selector->isVisible());
  // }

}
