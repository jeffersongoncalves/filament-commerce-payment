<?php

namespace JeffersonGoncalves\FilamentCommerce\Payment;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCommercePaymentServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-commerce-payment';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile();
    }
}
