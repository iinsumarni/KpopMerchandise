<x-guest-layout>
    <div class="mb-6 text-sm text-gray-400 leading-relaxed">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div class="space-y-2">
            <x-input-label for="password" :value="__('Password')" class="text-gray-300" />
            <input id="password" class="block mt-1 w-full bg-white/5 border-white/10 rounded-xl p-3 text-white focus:border-[#FF2E93] focus:ring-1 focus:ring-[#FF2E93] outline-none transition-all" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-8">
            <button type="submit" class="bg-gradient-to-r from-[#FF2E93] to-[#FF5DB1] text-white font-bold py-3 px-8 rounded-full shadow-lg shadow-pink-500/20 hover:scale-105 transition-transform">
                {{ __('Confirm') }}
            </button>
        </div>
    </form>
</x-guest-layout>
