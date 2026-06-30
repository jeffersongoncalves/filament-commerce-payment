<?php

namespace JeffersonGoncalves\FilamentCommerce\Payment\Concerns;

use JeffersonGoncalves\FilamentCommerce\Core\Concerns\HasCommercePluginConfig;

trait HasCommercePaymentPluginConfig
{
    use HasCommercePluginConfig;

    protected function getConfigKey(): string
    {
        return 'filament-commerce-payment';
    }

    protected function getDefaultNavigationGroup(): string
    {
        return 'Commerce — Sales';
    }
}
