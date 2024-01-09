module.exports = {
  '@tags': ['my_theme'],
  before: function(browser) {
    browser
      .drupalInstall();
  },
  after: function(browser) {
    browser
      .drupalUninstall();
  },
  'Demo theme test': (browser) => {
    browser
      .resizeWindow(1920, 1080)
      .drupalRelativeURL('/')
      .waitForElementVisible('body', 1000)
      .saveScreenshot(`${browser.screenshotsPath}/Theme_desktop_There_is_no_place_like_home.jpg`)
      .end();
  },
  // 'Failing theme test': (browser) => {
  //   browser
  //     .drupalRelativeURL('/')
  //     .waitForElementVisible('body', 1000)
  //     .assert.containsText('body', 'Failing test')
  //     .end();
  // },
};
