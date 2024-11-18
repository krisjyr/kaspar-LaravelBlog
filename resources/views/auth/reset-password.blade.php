<x-guest-layout>
<div class="max-w-md mx-auto">
    <div class="card bg-base-100/50 backdrop-blur-lg shadow-xl border border-base-content/10">
        <div class="card-body">
            <h2 class="card-title text-2xl font-bold text-center mb-6">Set New Password</h2>

            <form method="POST" action="{{ route('password.store') }}" class="space-y-6">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="form-control">
                    <label class="label">
                        <span class="label-text font-medium">Email</span>
                    </label>
                    <input type="email" name="email" value="{{ old('email', $request->email) }}"
                        class="input input-bordered bg-base-200/50 w-full @error('email') input-error @enderror focus:input-primary"
                        required readonly />
                    @error('email')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text font-medium">New Password</span>
                    </label>
                    <input type="password" name="password"
                        class="input input-bordered bg-base-200/50 w-full @error('password') input-error @enderror focus:input-primary"
                        placeholder="••••••••" required />
                    @error('password')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text font-medium">Confirm New Password</span>
                    </label>
                    <input type="password" name="password_confirmation"
                        class="input input-bordered bg-base-200/50 w-full focus:input-primary" placeholder="••••••••"
                        required />
                </div>

                <button type="submit" class="btn btn-primary w-full">
                    Reset Password
                </button>
            </form>
        </div>
    </div>
</div>
</x-guest-layout>
