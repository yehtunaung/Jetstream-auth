<x-form-section submit="updatePassword">
    <x-slot name="title">
        <div class="text-black dark:text-white">
            {{ __('Update Password') }}
        </div>
    </x-slot>

    <x-slot name="description">
        <div class="text-black dark:text-white">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </div>
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="current_password" class="text-black dark:text-white" value="{{ __('Current Password') }}" />
            <x-input id="current_password" type="password" class="mt-1 block w-full text-black" wire:model="state.current_password" autocomplete="current-password" />
            <x-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password" class="text-black dark:text-white" value="{{ __('New Password') }}" />
            <x-input id="password" type="password" class="mt-1 block w-full text-black" wire:model="state.password" autocomplete="new-password" />
            <x-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password_confirmation" class="text-black dark:text-white" value="{{ __('Confirm Password') }}" />
            <x-input id="password_confirmation" type="password" class="mt-1 block w-full text-black" wire:model="state.password_confirmation" autocomplete="new-password" />
            <x-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button>
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
