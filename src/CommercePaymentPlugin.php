<?php

namespace JeffersonGoncalves\FilamentCommerce\Payment;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentCommerce\Payment\Concerns\HasCommercePaymentPluginConfig;
use JeffersonGoncalves\FilamentCommerce\Payment\Resources\PaymentCollection\PaymentCollectionResource;

class CommercePaymentPlugin implements Plugin
{
    use HasCommercePaymentPluginConfig;

    public function getId(): string
    {
        return 'filament-commerce-payment';
    }

    public function register(Panel $panel): void
    {
        $panel->resources($this->resolveResources([
            'payment' => PaymentCollectionResource::class,
        ]));

        $panel->widgets($this->resolveWidgets());
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
