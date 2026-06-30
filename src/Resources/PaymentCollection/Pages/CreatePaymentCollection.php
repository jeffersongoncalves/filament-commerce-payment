<?php

namespace JeffersonGoncalves\FilamentCommerce\Payment\Resources\PaymentCollection\Pages;

use Filament\Resources\Pages\CreateRecord;
use JeffersonGoncalves\FilamentCommerce\Payment\Resources\PaymentCollection\PaymentCollectionResource;

class CreatePaymentCollection extends CreateRecord
{
    protected static string $resource = PaymentCollectionResource::class;
}
