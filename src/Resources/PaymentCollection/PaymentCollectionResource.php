<?php

namespace JeffersonGoncalves\FilamentCommerce\Payment\Resources\PaymentCollection;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use JeffersonGoncalves\Commerce\Payment\Models\PaymentCollection;
use JeffersonGoncalves\FilamentCommerce\Payment\CommercePaymentPlugin;
use JeffersonGoncalves\FilamentCommerce\Payment\Resources\PaymentCollection\Pages\CreatePaymentCollection;
use JeffersonGoncalves\FilamentCommerce\Payment\Resources\PaymentCollection\Pages\EditPaymentCollection;
use JeffersonGoncalves\FilamentCommerce\Payment\Resources\PaymentCollection\Pages\ListPaymentCollection;
use JeffersonGoncalves\FilamentCommerce\Payment\Resources\PaymentCollection\Schemas\PaymentCollectionForm;
use JeffersonGoncalves\FilamentCommerce\Payment\Resources\PaymentCollection\Tables\PaymentCollectionTable;

class PaymentCollectionResource extends Resource
{
    protected static ?string $model = PaymentCollection::class;

    public static function getNavigationGroup(): ?string
    {
        try {
            return CommercePaymentPlugin::get()->getNavigationGroup();
        } catch (\Throwable) {
            return config('filament-commerce-payment.navigation_group', 'Commerce — Sales');
        }
    }

    public static function form(Form $form): Form
    {
        return PaymentCollectionForm::configure($form);
    }

    public static function table(Table $table): Table
    {
        return PaymentCollectionTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPaymentCollection::route('/'),
            'create' => CreatePaymentCollection::route('/create'),
            'edit' => EditPaymentCollection::route('/{record}/edit'),
        ];
    }
}
