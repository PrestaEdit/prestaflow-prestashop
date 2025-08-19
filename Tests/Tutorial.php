<?php

namespace Tests;

use PrestaFlow\Library\Tests\TestsSuite;
use Shop\Tests\Scenarios\DoNothing;

class Tutorial extends TestsSuite
{
    public $draft = true;
    public $groups = 'tutorial';

    public function init()
    {
        $this
        ->describe('PrestaFlow: Tutorial')
        ->todo('will do nothing (again)', function () {
        })
        ->skip('will do nothing (again)', function () {
        })
        ->scenario(DoNothing::class)
        ;
    }
}
