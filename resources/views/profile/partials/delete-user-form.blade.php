<section class="glass-card rounded-3xl p-6 md:p-10 flex flex-col holo-glow transition-all duration-300 border-error/30">
    <header class="flex items-center gap-4 mb-8">
        <div class="p-3 rounded-2xl bg-error/20 text-error">
            <span class="material-symbols-outlined" data-icon="person_remove">person_remove</span>
        </div>
        <div>
            <h3 class="font-h3 text-h3 text-white">
                {{ __('Delete Account') }}
            </h3>
            <p class="mt-1 text-sm text-on-surface-variant opacity-70">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted.') }}
            </p>
        </div>
    </header>

    <div class="flex justify-end pt-4">
        <button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')" class="inline-flex items-center justify-center bg-error/20 text-error border border-error/50 font-label-caps text-[12px] tracking-widest px-6 py-3 rounded-full hover:bg-error/30 hover:scale-105 transition-all shadow-[0_8px_32px_rgba(255,180,171,0.1)] uppercase focus:outline-none">
            {{ __('Delete Account') }}
        </button>
    </div>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 bg-surface-container-high rounded-3xl border border-white/10">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-white">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-on-surface-variant">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <input id="password" name="password" type="password" class="w-full bg-white/5 border-none focus:ring-2 focus:ring-error rounded-full px-6 py-4 text-white transition-all" placeholder="{{ __('Password') }}" />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2 text-error" />
            </div>

            <div class="mt-6 flex justify-end gap-4">
                <button x-on:click="$dispatch('close')" type="button" class="inline-flex items-center justify-center bg-surface-container text-white border border-white/20 font-label-caps text-[12px] tracking-widest px-6 py-3 rounded-full hover:bg-white/10 transition-colors uppercase focus:outline-none">
                    {{ __('Cancel') }}
                </button>

                <button type="submit" class="inline-flex items-center justify-center bg-error text-white font-label-caps text-[12px] tracking-widest px-6 py-3 rounded-full hover:scale-105 transition-all shadow-[0_8px_32px_rgba(255,180,171,0.3)] uppercase focus:outline-none">
                    {{ __('Delete Account') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>
