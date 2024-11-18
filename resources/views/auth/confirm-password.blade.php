<x-guest-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="card bg-base-300 max-w-md mx-auto shadow-xl">
            <div class="card-body">
                <p class="text-sm mb-4">
                    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                </p>

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">{{ __('Password') }}</span>
                        </label>
                        <input type="password" name="password"
                            class="input input-bordered w-full @error('password') input-error @enderror" required
                            autocomplete="current-password" />
                        @error('password')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <div class="flex justify-end mt-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Confirm') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
