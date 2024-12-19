<section>
    <header>
        <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>
        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <label for="update_password_current_password" class="block text-sm font-medium">
                {{ __('Current Password') }}
            </label>
            <input id="update_password_current_password" name="current_password" type="password"
                class="input input-bordered w-full mt-1" autocomplete="current-password" />
            @if($errors->updatePassword->get('current_password'))
                <div class="text-error text-sm mt-2">
                    @foreach($errors->updatePassword->get('current_password') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>

        <div>
            <label for="update_password_password" class="block text-sm font-medium">
                {{ __('New Password') }}
            </label>
            <input id="update_password_password" name="password" type="password"
                class="input input-bordered w-full mt-1" autocomplete="new-password" />
            @if($errors->updatePassword->get('password'))
                <div class="text-error text-sm mt-2">
                    @foreach($errors->updatePassword->get('password') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>

        <div>
            <label for="update_password_password_confirmation" class="block text-sm font-medium">
                {{ __('Confirm Password') }}
            </label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password"
                class="input input-bordered w-full mt-1" autocomplete="new-password" />
            @if($errors->updatePassword->get('password_confirmation'))
                <div class="text-error text-sm mt-2">
                    @foreach($errors->updatePassword->get('password_confirmation') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>