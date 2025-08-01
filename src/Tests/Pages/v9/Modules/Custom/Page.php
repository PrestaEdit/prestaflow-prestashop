<?php

namespace Shop\Tests\Pages\v9\Modules\Custom;

use PrestaFlow\Library\Pages\v9\FrontOffice\Page as BasePage;

class Page extends BasePage
{
    public string $url = 'guest-tracking';
    public string $pageTitle = 'Guest Order Tracking';

    public function defineMessages()
    {
        return [
            'addedToCart' => $this->translate('Product successfully added to your shopping cart'),
        ];
    }

    public function getPrice()
    {
        return $this->getTextContent($this->getSelector('currentProductPrice'));
    }

    public function addToCart(int $quantity = 1)
    {
        $this->setValue($this->getSelector('quantityWantedInput'), $quantity);

        $this->click($this->getSelector('addToCartButton'));

        return ltrim($this->getTextContent($this->getSelector('modalTitle')));
    }
}
