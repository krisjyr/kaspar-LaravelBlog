<x-guest-layout>
<div class="max-w-md mx-auto">
    <div class="card bg-base-100/50 backdrop-blur-lg shadow-xl border border-base-content/10">
        <div class="card-body">
            <h2 class="card-title text-2xl font-bold text-center mb-2">Verify Your Email</h2>
            <p class="text-sm text-center mb-6 text-base-content/80">
                Thanks for signing up! Before getting started, could you verify your email address by clicking on the
                link we just emailed to you?
            </p>

            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>A new verification link has been sent to your email address.</span>
                </div>
            @endif

            <div class="flex flex-col gap-4">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary w-full">
                        Resend Verification Email
                    </button>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-ghost btn-sm w-full">
                        Log Out
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
</x-guest-layout>
