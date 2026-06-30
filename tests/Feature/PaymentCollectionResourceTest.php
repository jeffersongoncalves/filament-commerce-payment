<?php

use JeffersonGoncalves\Commerce\Payment\Models\PaymentCollection;
use JeffersonGoncalves\FilamentCommerce\Payment\Resources\PaymentCollection\Pages\CreatePaymentCollection;
use JeffersonGoncalves\FilamentCommerce\Payment\Resources\PaymentCollection\Pages\ListPaymentCollection;
use Livewire\Livewire;

it('renders the payment list page', function () {
    PaymentCollection::factory()->count(2)->create();

    Livewire::test(ListPaymentCollection::class)->assertOk();
});

it('creates a payment record through the panel', function () {
    Livewire::test(CreatePaymentCollection::class)
        ->fillForm([
            'amount' => 1000,
            'currency_code' => 'usd',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(PaymentCollection::query()->count())->toBe(1);
});
