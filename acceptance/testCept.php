<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/domains');
$I->dontSeeCurrentUrlEquals('/404/');
$I->amOnPage('/hosting');
$I->dontSeeCurrentUrlEquals('/404/');
$I->amOnPage('/vps');
$I->dontSeeCurrentUrlEquals('/404/');
$I->amOnPage('/vps/windows');
$I->click('.mark.m3');
$I->click('.mark.m2.m2-backup');
$I->click('.dk_toggle');
$I->click('Windows Server 2012 R2 Standart');
$I->click("#dk_container_vps-support-select > a.dk_toggle");
$I->click('Базовая поддержка');
$I->click('.item.novip.js-item-4.selected');
$I->click('.but.buybutton');