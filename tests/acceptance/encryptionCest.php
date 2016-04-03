<?php

class encryptionCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->sendGET('encryption.php?v=1');
        $I->seeResponseContainsJson(['value' => 'j3wLEV']);
        $I->seeResponseCodeIs(200);
    }
}
