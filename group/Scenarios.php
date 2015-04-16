<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Install Joomla CMS');
$I->amOnPage('http://localhost/installation/index.php');
// I Wait for the text Main Configuration, meaning that the page is loaded
$I->waitForText('Main Configuration', 10, 'h3');
$I->click(JoomlaInstallationConfigurationPage::$elements['Language Selector']);
$I->click(JoomlaInstallationConfigurationPage::$elements['English (United Kingdom)']);
$I->fillField('Site Name', 'weblinks');
$I->fillField('Description', 'Site for testing Weblinks component');
$I->fillField('Admin Email', $cfg['Admin email']);
$I->fillField('Admin Username', $cfg['username']);
$I->fillField('Admin Password', $cfg['password']);
$I->fillField('Confirm Admin Password', $cfg['password']);
$I->click('Next');
...
>