<x-guest-layout>
<div class="max-w-md mx-auto">
    <div class="card bg-base-100/50 backdrop-blur-lg shadow-xl border border-base-content/10">
        <div class="card-body">
            <h2 class="card-title text-2xl font-bold text-center mb-2">Forgot Password?</h2>
            <p class="text-sm text-center mb-6 text-base-content/80">
                Enter your email address and we'll send you a link to reset your password.
            </p>

            @if (session('status'))
                <div class="alert alert-success mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ session('status') }}</span>
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
                @csrf

                <div class="form-control">
                    <label class="label">
                        <span class="label-text font-medium">Email</span>
                    </label>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="input input-bordered bg-base-200/50 w-full @error('email') input-error @enderror focus:input-primary"
                        placeholder="your@email.com" required />
                    @error('email')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-full">
                    Send Reset Link
                </button>
            </form>

            <div class="text-center mt-4">
                <a href="{{ route('login') }}" class="link link-primary text-sm">
                    Back to login
                </a>
            </div>
        </div>
    </div>
</div>
</x-guest-layout>
