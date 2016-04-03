<?php

class unencryptionCest
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

        $I->sendGET('unencryption.php?v=j3wLEV');
        $I->seeResponseContainsJson(['value' => '1']);
        $I->seeResponseCodeIs(200);
    }
}
