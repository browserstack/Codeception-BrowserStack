<?php
  // @group single
  $I = new AcceptanceTester($scenario);
  $I->wantTo('Test Google\'s Search Functionality');
  $I->amOnPage('/ncr');
  $I->fillField('q', 'BrowserStack');
  $I->click('btnG');
  $I->seeInTitle('BrowserStack - Google Search');
?>
