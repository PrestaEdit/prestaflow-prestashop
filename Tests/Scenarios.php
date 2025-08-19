<?php

namespace Tests;

use PrestaFlow\Library\Tests\TestsSuite;
use Shop\Tests\Scenarios\BackOfficeCustom;
use Shop\Tests\Scenarios\DoNothing;
use Shop\Tests\Scenarios\ModuleCustom;

class Scenarios extends TestsSuite
{
    public $draft = true;
    public $groups = 'scenarios';

    public function init()
    {
        $this
        ->describe('PrestaShop 9.0.0 : scenarios (Use globals)')
        ->scenario(DoNothing::class)
        ->scenario(ModuleCustom::class)
        ->scenario(BackOfficeCustom::class)
        ;
    }
}
