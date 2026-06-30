<?php

namespace JeffersonGoncalves\FilamentCommerce\Payment\Resources\PaymentCollection\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use JeffersonGoncalves\FilamentCommerce\Payment\Resources\PaymentCollection\PaymentCollectionResource;

class EditPaymentCollection extends EditRecord
{
    protected static string $resource = PaymentCollectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
