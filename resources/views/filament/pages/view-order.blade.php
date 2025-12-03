<x-filament-panels::page>
    @php
        $expiryDate = \Carbon\Carbon::parse($this->record->created_at)->addDays($record->plan->duration);
        $isActive = \Carbon\Carbon::now()->lessThanOrEqualTo($expiryDate);
        $badgeColor = $isActive ? 'success' : ($isActive === false ? 'gray' : 'danger');
        $badgeText = $isActive ? 'Active' : ($isActive === false ? 'Expired' : 'Unknown');
    @endphp

    <x-filament::section>
        <div class="space-y-4">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-bold tracking-tight">Order Details</h2>
                <h5>Order ID #{{ $this->record->id }}</h5>
                <x-filament::badge :color="$badgeColor" size="lg">
                    {{ $badgeText }}
                </x-filament::badge>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <x-filament::fieldset>
                    <x-slot name="heading">
                        <h3 class="text-base font-medium">
                            Order Information
                        </h3>
                    </x-slot>

                    <dl class="space-y-3">
                        <div class="grid grid-cols-3 gap-4 py-1">
                            <dt class="text-sm font-medium text-gray-500">Order Date</dt>
                            <dd class="col-span-2 text-sm text-gray-900">{{ $this->record->created_at->format('M d, Y h:i A') }}</dd>
                        </div>
                        <div class="grid grid-cols-3 gap-4 py-1">
                            <dt class="text-sm font-medium text-gray-500">Plan Expires</dt>
                            <dd class="col-span-2 text-sm text-gray-900">{{ $expiryDate->format('M d, Y h:i A') }}</dd>
                        </div>
                        <div class="grid grid-cols-3 gap-4 py-1">
                            <dt class="text-sm font-medium text-gray-500">Total Mail</dt>
                            <dd class="col-span-2 text-sm text-gray-900">{{ $record->MailAvailable['total_mail'] ?? '0' }}</dd>
                        </div>
                        <div class="grid grid-cols-3 gap-4 py-1">
                            <dt class="text-sm font-medium text-gray-500">Available Mail</dt>
                            <dd class="col-span-2 text-sm text-gray-900">{{ $record->mailAvailable['available_mail'] ?? '0' }}</dd>
                        </div>
                    </dl>
                </x-filament::fieldset>

                <x-filament::fieldset>
                    <x-slot name="heading">
                        <h3 class="text-base font-medium">
                            Order Summary
                        </h3>
                    </x-slot>

                    <dl class="space-y-3">
                        <div class="grid grid-cols-3 gap-4 py-1">
                            <dt class="text-sm font-medium text-gray-500">Customer ID</dt>
                            <dd class="col-span-2 text-sm text-gray-900">{{ $this->record->user_id }}</dd>
                        </div>
                        <div class="grid grid-cols-3 gap-4 py-1">
                            <dt class="text-sm font-medium text-gray-500">Plan Name</dt>
                            <dd class="col-span-2 text-sm text-gray-900">{{ $this->record->plan->name ?? 'N/A' }}</dd>
                        </div>
                        <div class="grid grid-cols-3 gap-4 py-1">
                            <dt class="text-sm font-medium text-gray-500">Amount</dt>
                            <dd class="col-span-2 text-sm font-medium text-gray-900">${{ number_format($this->record->amount, 2) }}</dd>
                        </div>
                        <div class="grid grid-cols-3 gap-4 py-1">
                            <dt class="text-sm font-medium text-gray-500">Payment</dt>
                            <dd class="col-span-2">
                                <x-filament::badge
                                    :color="match($this->record->status) {
                                        'completed' => 'success',
                                        'pending' => 'warning',
                                        default => 'danger',
                                    }"
                                    size="sm"
                                >
                                    {{ ucfirst($this->record->status) }}
                                </x-filament::badge>
                            </dd>
                        </div>
                        <div class="grid grid-cols-3 gap-4 py-1">
                            <dt class="text-sm font-medium text-gray-500">Transaction ID</dt>
                            <dd class="col-span-2 text-sm text-gray-900">{{ $this->record->transaction_id ?? 'N/A' }}</dd>
                        </div>
                    </dl>
                </x-filament::fieldset>
            </div>
        </div>
    </x-filament::section>

    <x-filament::section>
        <x-slot name="heading">
            <h2 class="text-lg font-medium">
                Billing Information
            </h2>
        </x-slot>

        <div class="space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="space-y-3">
                    <h3 class="text-sm font-medium text-gray-900">Contact Information</h3>
                    <div class="space-y-1">
                        <p class="text-sm text-gray-900">
                            {{ ($this->record->billing_info['first_name'] ?? '') . ' ' . ($this->record->billing_info['last_name'] ?? '') }}
                        </p>
                        <p class="text-sm text-gray-500">{{ $this->record->billing_info['email'] ?? 'N/A' }}</p>
                        <p class="text-sm text-gray-500">{{ $this->record->billing_info['phone'] ?? 'N/A' }}</p>
                    </div>
                </div>
                <div class="space-y-3">
                    <h3 class="text-sm font-medium text-gray-900">Billing Address</h3>
                    <div class="space-y-1">
                        <p class="text-sm text-gray-500">{{ $this->record->billing_info['address1'] ?? 'N/A' }}</p>
                        <p class="text-sm text-gray-500">
                            {{ ($this->record->billing_info['city'] ?? '') . ', ' . ($this->record->billing_info['state'] ?? '') . ' ' . ($this->record->billing_info['zip'] ?? '') }}
                        </p>
                        <p class="text-sm text-gray-500">{{ $this->record->billing_info['country'] ?? 'N/A' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </x-filament::section>
</x-filament-panels::page>
