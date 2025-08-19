<?php

namespace Shop\Tests\Scenarios;

use PrestaFlow\Library\Expects\Expect;
use PrestaFlow\Library\Scenarios\Scenario;

class DoNothing extends Scenario
{
    public function steps($testSuite)
    {
        $testSuite
        ->todo('a todo step', function () {
        })
        ->skip('a skip step', function () {
        })
        ->it('a failed step', function () {
            Expect::that(true)->isTheSameAs(false);
        })
        ;

        return $testSuite;
    }
}
