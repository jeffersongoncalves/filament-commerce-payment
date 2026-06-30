<?php

namespace JeffersonGoncalves\FilamentCommerce\Payment\Resources\PaymentCollection\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class PaymentCollectionForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Details')
                    ->schema([
                        TextInput::make('amount')
                            ->numeric(),
                        TextInput::make('currency_code'),
                    ])->columns(2),
            ]);
    }
}
