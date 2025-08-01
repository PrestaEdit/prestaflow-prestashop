<?php

namespace Shop\Tests\Scenarios;

use PrestaFlow\Library\Scenarios\Scenario;

class DoNothing extends Scenario
{
    public function steps($testSuite)
    {
        $testSuite
        ->todo('will do nothing (again)', function () {
        })
        ;

        return $testSuite;
    }
}
