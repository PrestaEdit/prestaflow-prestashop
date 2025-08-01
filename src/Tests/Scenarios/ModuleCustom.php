<?php

namespace Shop\Tests\Scenarios;

use PrestaFlow\Library\Expects\Expect;
use PrestaFlow\Library\Scenarios\Scenario;

class ModuleCustom extends Scenario
{
    public function steps($testSuite)
    {
        $this->importPage('Modules\Custom', domain: 'Shop\Tests');
        $this->importPage('FrontOffice\Category');

        extract($this->pages);

        $testSuite
        ->it('should go to page', function () use ($modulesCustomPage) {
            $modulesCustomPage->goToPage($modulesCustomPage);

            Expect::that($modulesCustomPage->getPageTitle())->contains($modulesCustomPage->pageTitle());
        })

        ;

        return $testSuite;
    }
}
