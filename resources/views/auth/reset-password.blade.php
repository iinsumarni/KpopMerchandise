<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="space-y-2">
            <x-input-label for="email" :value="__('Email')" class="text-gray-300" />
            <input id="email" class="block mt-1 w-full bg-white/5 border-white/10 rounded-xl p-3 text-white focus:border-[#FF2E93] focus:ring-1 focus:ring-[#FF2E93] outline-none transition-all" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 space-y-2">
            <x-input-label for="password" :value="__('Password')" class="text-gray-300" />
            <input id="password" class="block mt-1 w-full bg-white/5 border-white/10 rounded-xl p-3 text-white focus:border-[#FF2E93] focus:ring-1 focus:ring-[#FF2E93] outline-none transition-all" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4 space-y-2">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-300" />
            <input id="password_confirmation" class="block mt-1 w-full bg-white/5 border-white/10 rounded-xl p-3 text-white focus:border-[#FF2E93] focus:ring-1 focus:ring-[#FF2E93] outline-none transition-all" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-8">
            <button type="submit" class="bg-gradient-to-r from-[#FF2E93] to-[#FF5DB1] text-white font-bold py-3 px-8 rounded-full shadow-lg shadow-pink-500/20 hover:scale-105 transition-transform">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
</x-guest-layout>
