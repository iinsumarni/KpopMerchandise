<form method="post" action="{{ route('password.update') }}" class="space-y-6">
    @csrf
    @method('put')

    <section class="glass-card rounded-3xl p-6 md:p-10 flex flex-col holo-glow transition-all duration-300">
        <div class="flex items-center gap-4 mb-8">
            <div class="p-3 rounded-2xl bg-on-secondary-fixed-variant/20 text-secondary">
                <span class="material-symbols-outlined" data-icon="shield_lock">shield_lock</span>
            </div>
            <h3 class="font-h3 text-h3 text-white">{{ __('Security') }}</h3>
        </div>
        
        <div class="space-y-4">
            <div class="space-y-2">
                <x-input-label for="update_password_current_password" :value="__('Current Password')" class="font-label-caps text-label-caps text-on-surface-variant ml-4" />
                <input id="update_password_current_password" name="current_password" type="password" class="w-full bg-white/5 border-none focus:ring-2 focus:ring-secondary-container rounded-full px-6 py-4 text-white transition-all" autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>

            <div class="space-y-2">
                <x-input-label for="update_password_password" :value="__('New Password')" class="font-label-caps text-label-caps text-on-surface-variant ml-4" />
                <input id="update_password_password" name="password" type="password" class="w-full bg-white/5 border-none focus:ring-2 focus:ring-secondary-container rounded-full px-6 py-4 text-white transition-all" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>

            <div class="space-y-2">
                <x-input-label for="update_password_password_confirmation" :value="__('Confirm New Password')" class="font-label-caps text-label-caps text-on-surface-variant ml-4" />
                <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="w-full bg-white/5 border-none focus:ring-2 focus:ring-secondary-container rounded-full px-6 py-4 text-white transition-all" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        <div class="flex justify-between items-center mt-8">
            <div class="flex items-center gap-4">
                @if (session('status') === 'password-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-tertiary-fixed font-bold">
                        {{ __('Saved.') }}
                    </p>
                @endif
            </div>

            <button type="submit" class="border border-white/20 hover:border-secondary hover:text-secondary text-white font-bold py-4 px-8 rounded-full transition-all active:scale-95">
                {{ __('Change Password') }}
            </button>
        </div>
    </section>
</form>
