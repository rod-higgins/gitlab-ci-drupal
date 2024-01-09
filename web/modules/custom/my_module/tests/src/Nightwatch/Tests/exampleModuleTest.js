module.exports = {
  '@tags': ['my_module'],
  before: function(browser) {
    browser
      .drupalInstall({
        setupFile:
          'core/tests/Drupal/TestSite/TestSiteOliveroInstallTestScript.php',
        installProfile: 'minimal',
      });
  },
  after: function(browser) {
    browser
      .drupalUninstall();
  },
  'Demo test landing page': (browser) => {
    browser
      .drupalRelativeURL('/')
      // .waitForElementVisible('body')
      // Let take a screenshot here for demo.
      .resizeWindow(1920, 1080)
      .saveScreenshot(`${browser.screenshotsPath}/Desktop_There_is_no_place_like_home.jpg`)
      // Screenshot mobile.
      .resizeWindow(375, 812)
      .saveScreenshot(`${browser.screenshotsPath}/Mobile_There_is_no_place_like_home.jpg`)
      // Screenshot tablet.
      .resizeWindow(768, 1280)
      .saveScreenshot(`${browser.screenshotsPath}/Tablet_There_is_no_place_like_home.jpg`)
      .end();
  },
  // 'Failing test': (browser) => {
  //   browser
  //     .drupalRelativeURL('/')
  //     .waitForElementVisible('body')
  //     .assert.containsText('body', 'Failing test')
  //     .end();
  // },
};
