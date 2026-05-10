<x-guest-layout>
    <div class="mb-6 text-sm text-gray-400 leading-relaxed">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-6 font-medium text-sm text-pink-400">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-8 flex flex-col gap-4">
        <form method="POST" action="{{ route('verification.send') }}" class="w-full">
            @csrf
            <button type="submit" class="w-full bg-gradient-to-r from-[#FF2E93] to-[#FF5DB1] text-white font-bold py-3 px-6 rounded-full shadow-lg shadow-pink-500/20 hover:scale-[1.02] transition-transform">
                {{ __('Resend Verification Email') }}
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}" class="w-full text-center">
            @csrf
            <button type="submit" class="text-sm text-gray-400 hover:text-white transition-colors underline decoration-gray-600 underline-offset-4">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
