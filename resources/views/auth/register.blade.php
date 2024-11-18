@extends('partials.layout')
@section('title', 'Register')
@section('content')
<div class="max-w-md mx-auto">
    <div class="card bg-base-100/50 backdrop-blur-lg shadow-xl border border-base-content/10">
        <div class="card-body">
            <h2 class="card-title text-2xl font-bold text-center mb-6">Create Account</h2>

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <div class="form-control">
                    <label class="label">
                        <span class="label-text font-medium">Full Name</span>
                    </label>
                    <input type="text" name="name" value="{{ old('name') }}"
                        class="input input-bordered bg-base-200/50 w-full @error('name') input-error @enderror focus:input-primary"
                        placeholder="John Doe" required />
                    @error('name')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

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

                <div class="form-control">
                    <label class="label">
                        <span class="label-text font-medium">Password</span>
                    </label>
                    <input type="password" name="password"
                        class="input input-bordered bg-base-200/50 w-full @error('password') input-error @enderror focus:input-primary"
                        placeholder="Password1234" required />
                    @error('password')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text font-medium">Confirm Password</span>
                    </label>
                    <input type="password" name="password_confirmation"
                        class="input input-bordered bg-base-200/50 w-full focus:input-primary" placeholder="Password1234"
                        required />
                </div>

                <button type="submit" class="btn btn-primary w-full">
                    Create Account
                </button>
            </form>

            <div class="divider text-base-content/60 text-sm">or</div>

            <p class="text-center text-sm">
                Already have an account?
                <a href="{{ route('login') }}" class="link link-primary">Sign in</a>
            </p>
        </div>
    </div>
</div>
@endsection