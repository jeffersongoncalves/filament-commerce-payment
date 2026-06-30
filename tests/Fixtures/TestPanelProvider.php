<?php

namespace JeffersonGoncalves\FilamentCommerce\Payment\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\FilamentCommerce\Payment\CommercePaymentPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                CommercePaymentPlugin::make(),
            ]);
    }
}
