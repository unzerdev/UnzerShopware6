<?php

declare(strict_types=1);

namespace UnzerPayment6\Components\Struct\PageExtension\Checkout\Confirm;

use Shopware\Core\Framework\Struct\Struct;

class ApplePayV2PageExtension extends Struct
{
    public const EXTENSION_NAME = 'unzerApplePayV2';

    /** @var string[] */
    protected $supportedNetworks = ['masterCard', 'visa'];
    protected $merchantCapabilities = ['supports3DS'];

    public function getSupportedNetworks(): array
    {
        return $this->supportedNetworks;
    }
    public function getMerchantCapabilities(): array
    {
        return $this->merchantCapabilities;
    }
}
