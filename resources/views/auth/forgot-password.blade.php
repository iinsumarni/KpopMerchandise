<x-guest-layout>
    <div class="mb-4 text-sm text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="space-y-2">
            <x-input-label for="email" :value="__('Email')" class="text-gray-300" />
            <input id="email" class="block mt-1 w-full bg-white/5 border-white/10 rounded-xl p-3 text-white focus:border-[#FF2E93] focus:ring-1 focus:ring-[#FF2E93] outline-none transition-all" type="email" name="email" value="{{ old('email') }}" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-6">
            <button type="submit" class="bg-gradient-to-r from-[#FF2E93] to-[#FF5DB1] text-white font-bold py-3 px-6 rounded-full shadow-lg shadow-pink-500/20 hover:scale-105 transition-transform">
                {{ __('Email Password Reset Link') }}
            </button>
        </div>
    </form>
</x-guest-layout>
