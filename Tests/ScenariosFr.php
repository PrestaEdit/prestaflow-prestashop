<?php

namespace Tests;

use PrestaFlow\Library\Tests\TestsSuite;
use Shop\Tests\Scenarios\DoNothing;
use Shop\Tests\Scenarios\ModuleCustom;

class ScenariosFr extends TestsSuite
{
    public $draft = false;
    public $groups = ['scenarios', 'fr'];

    public function init()
    {
        $this
        ->describe('PrestaShop 9.0.0 : scenarios (FR)')
        ->scenario(DoNothing::class)
        ->scenario(ModuleCustom::class, [
            'locale' => 'fr',
        ])
        ;
    }
}
