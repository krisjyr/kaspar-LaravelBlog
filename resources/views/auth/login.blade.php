@extends('partials.layout')
@section('title', 'Login')
@section('content')
<div class="max-w-md mx-auto">
    <div class="card bg-base-100/50 backdrop-blur-lg shadow-xl border border-base-content/10">
        <div class="card-body">
            <h2 class="card-title text-2xl font-bold text-center mb-6">Welcome Back</h2>

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div class="form-control">
                    <label class="label">
                        <span class="label-text font-medium">Email</span>
                    </label>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="input input-bordered bg-base-200/50 w-full @error('email') input-error @enderror focus:input-primary"
                        placeholder="your@email.com" required autofocus />
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

                <div class="flex items-center justify-between">
                    <label class="label cursor-pointer gap-2">
                        <input type="checkbox" name="remember" class="checkbox checkbox-primary checkbox-sm" />
                        <span class="label-text">Remember me</span>
                    </label>
                    <a href="{{ route('password.request') }}" class="text-sm link link-primary">
                        Forgot password?
                    </a>
                </div>

                <button type="submit" class="btn btn-primary w-full">
                    Sign in
                </button>
            </form>

            <div class="divider text-base-content/60 text-sm">or</div>

            <p class="text-center text-sm">
                Don't have an account?
                <a href="{{ route('register') }}" class="link link-primary">Create account</a>
            </p>
        </div>
    </div>
</div>
@endsection