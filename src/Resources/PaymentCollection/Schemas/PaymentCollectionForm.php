<?php

namespace JeffersonGoncalves\FilamentCommerce\Payment\Resources\PaymentCollection\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PaymentCollectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->components([
                Section::make('Details')
                    ->schema([
                        TextInput::make('amount')
                            ->numeric(),
                        TextInput::make('currency_code'),
                    ])->columns(2),
            ]);
    }
}
