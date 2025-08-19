<?php

namespace Tests;

use PrestaFlow\Library\Tests\TestsSuite;
use Shop\Tests\Scenarios\DoNothing;
use Shop\Tests\Scenarios\ModuleCustom;

class ScenariosEn extends TestsSuite
{
    public $draft = false;
    public $groups = ['scenarios', 'en'];

    public function init()
    {
        $this
        ->describe('PrestaShop 9.0.0 : scenarios (EN)')
        ->scenario(DoNothing::class)
        ->scenario(ModuleCustom::class, [
            'locale' => 'en',
            'useIsoCode' => true,
        ])
        ;
    }
}
