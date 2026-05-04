<form id="send-verification" method="post" action="{{ route('verification.send') }}">
    @csrf
</form>

<form method="post" action="{{ route('profile.update') }}" class="space-y-6">
    @csrf
    @method('patch')

    <!-- Section 1: Personal Info -->
    <section class="glass-card rounded-3xl p-6 md:p-10 holo-glow transition-all duration-300">
        <div class="flex items-center gap-4 mb-8">
            <div class="p-3 rounded-2xl bg-secondary-container/20 text-secondary">
                <span class="material-symbols-outlined" data-icon="person_edit">person_edit</span>
            </div>
            <div>
                <h3 class="font-h3 text-h3 text-white leading-tight">{{ __('Personal Information') }}</h3>
                <p class="font-body-md text-on-surface-variant opacity-70">{{ __("Update your account's profile information and email address.") }}</p>
            </div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-6">
            <div class="space-y-2">
                <x-input-label for="name" :value="__('Name')" class="font-label-caps text-label-caps text-on-surface-variant ml-4" />
                <input id="name" name="name" type="text" class="w-full bg-white/5 border-none focus:ring-2 focus:ring-primary-container rounded-full px-6 py-4 text-white transition-all" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>
            
            <div class="space-y-2">
                <x-input-label for="email" :value="__('Email')" class="font-label-caps text-label-caps text-on-surface-variant ml-4" />
                <input id="email" name="email" type="email" class="w-full bg-white/5 border-none focus:ring-2 focus:ring-primary-container rounded-full px-6 py-4 text-white transition-all" value="{{ old('email', $user->email) }}" required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                
                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-on-surface-variant">
                            {{ __('Your email address is unverified.') }}

                            <button form="send-verification" class="underline text-sm text-primary hover:text-white rounded-md focus:outline-none">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 font-medium text-sm text-tertiary-fixed">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>

            <div class="space-y-2">
                <x-input-label for="phone" :value="__('Phone Number')" class="font-label-caps text-label-caps text-on-surface-variant ml-4" />
                <input id="phone" name="phone" type="tel" class="w-full bg-white/5 border-none focus:ring-2 focus:ring-primary-container rounded-full px-6 py-4 text-white transition-all" value="{{ old('phone', $user->phone) }}" autocomplete="tel" />
                <x-input-error class="mt-2" :messages="$errors->get('phone')" />
            </div>
        </div>
    </section>

    <!-- Section 2: Address Book -->
    <section class="glass-card rounded-3xl p-6 md:p-10 flex flex-col holo-glow transition-all duration-300">
        <div class="flex items-center gap-4 mb-8">
            <div class="p-3 rounded-2xl bg-primary-container/20 text-primary-container">
                <span class="material-symbols-outlined" data-icon="location_on">location_on</span>
            </div>
            <h3 class="font-h3 text-h3 text-white">Address Book</h3>
        </div>
        
        <div class="space-y-6 flex-grow">
            <div class="space-y-2">
                <x-input-label for="address" :value="__('Shipping Address')" class="font-label-caps text-label-caps text-on-surface-variant ml-4" />
                <textarea id="address" name="address" class="w-full bg-white/5 border-none focus:ring-2 focus:ring-primary-container rounded-3xl px-6 py-4 text-white transition-all resize-none" rows="3">{{ old('address', $user->address) }}</textarea>
                <x-input-error class="mt-2" :messages="$errors->get('address')" />
            </div>
        </div>
    </section>

    <!-- Global Action for Personal Info & Address -->
    <div class="flex justify-end pt-4 items-center gap-4">
        @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-tertiary-fixed font-bold">
                {{ __('Saved.') }}
            </p>
        @endif
        
        <button type="submit" class="primary-btn-gradient text-white font-bold py-4 px-10 rounded-full text-md shadow-[0_10px_40px_rgba(255,79,163,0.3)] transition-transform hover:scale-105 active:scale-95">
            {{ __('Save Profile & Address') }}
        </button>
    </div>
</form>
