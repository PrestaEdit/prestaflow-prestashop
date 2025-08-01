<?php

namespace Tests;

use PrestaFlow\Library\Tests\TestsSuite;

class First extends TestsSuite
{
    public function init()
    {
        $this
        ->describe('PrestaFlow: my first scenario')
        ->todo('will do nothing (again)', function () {
        })
        ->skip('will do nothing (again)', function () {
        })
        ;
    }
}
