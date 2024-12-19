<section class="space-y-6">
    <label for="delete-account-modal" class="btn btn-error">
        {{ __('Delete Account') }}
    </label>

    <input type="checkbox" id="delete-account-modal" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box">
            <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                @csrf
                @method('delete')

                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __('Are you sure you want to delete your account?') }}
                </h2>

                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                </p>

                <div class="mt-4">
                    <label for="password" class="sr-only">
                        {{ __('Password') }}
                    </label>
                    <input id="password" name="password" type="password" class="input input-bordered w-full"
                        placeholder="{{ __('Password') }}" />

                    @error('password')
                        <p class="mt-2 text-sm text-error">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mt-6 flex justify-end gap-3">
                    <label for="delete-account-modal" class="btn btn-outline">
                        {{ __('Cancel') }}
                    </label>

                    <button type="submit" class="btn btn-error">
                        {{ __('Delete Account') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>