<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="card bg-base-100 dark:bg-gray-800 shadow-xl">
                <div class="card-body">
                    <h1 class="card-title text-2xl font-semibold text-gray-800 dark:text-gray-200">
                        {{ __('Update Profile Information') }}
                    </h1>
                    <div class="divider"></div>
                    <div class="form-control">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            <div class="card bg-base-100 dark:bg-gray-800 shadow-xl">
                <div class="card-body">
                    <h1 class="card-title text-2xl font-semibold text-gray-800 dark:text-gray-200">
                        {{ __('Update Password') }}
                    </h1>
                    <div class="divider"></div>
                    <div class="form-control">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            <div class="card bg-base-100 dark:bg-gray-800 shadow-xl">
                <div class="card-body">
                    <h1 class="card-title text-2xl font-semibold text-gray-800 dark:text-gray-200">
                        {{ __('Delete Account') }}
                    </h1>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please download any data or information that you wish to retain before proceeding.') }}
                    </p>
                    <div class="form-control">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>