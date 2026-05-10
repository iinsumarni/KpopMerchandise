<form id="send-verification" method="post" action="{{ route('verification.send') }}">
    @csrf
</form>

<form method="post" action="{{ route('profile.update') }}" class="space-y-6">
    @csrf
    @method('patch')

    <!-- Section 1: Personal Info -->
    <section style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 24px; padding: 32px; box-shadow: 0 4px 24px rgba(0,0,0,0.2);">
        <div class="flex items-center gap-4 mb-8">
            <div style="padding: 12px; border-radius: 16px; background: rgba(255,46,147,0.15); color: #FF2E93;">
                <span class="material-symbols-outlined">person_edit</span>
            </div>
            <div>
                <h3 style="font-size: 20px; font-weight: 700; color: #FFFFFF; letter-spacing: -0.01em;">{{ __('Personal Information') }}</h3>
                <p style="font-size: 14px; color: #A0A0AB;">{{ __("Update your account's profile information and email address.") }}</p>
            </div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-6">
            <div class="space-y-2">
                <label for="name" style="font-size: 12px; font-weight: 600; letter-spacing: 0.06em; text-transform: uppercase; color: #A0A0AB; margin-left: 4px;">{{ __('Name') }}</label>
                <input id="name" name="name" type="text" style="width: 100%; background: rgba(255,255,255,0.02); border: 1.5px solid rgba(255,255,255,0.08); border-radius: 14px; padding: 14px 20px; font-size: 15px; color: #FFFFFF; font-family: 'Inter', sans-serif; outline: none; transition: all 0.3s;" onfocus="this.style.borderColor='#FF2E93'; this.style.boxShadow='0 0 0 4px rgba(255,46,147,0.12)'" onblur="this.style.borderColor='rgba(255,255,255,0.08)'; this.style.boxShadow='none'" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>
            
            <div class="space-y-2">
                <label for="email" style="font-size: 12px; font-weight: 600; letter-spacing: 0.06em; text-transform: uppercase; color: #A0A0AB; margin-left: 4px;">{{ __('Email') }}</label>
                <input id="email" name="email" type="email" style="width: 100%; background: rgba(255,255,255,0.02); border: 1.5px solid rgba(255,255,255,0.08); border-radius: 14px; padding: 14px 20px; font-size: 15px; color: #FFFFFF; font-family: 'Inter', sans-serif; outline: none; transition: all 0.3s;" onfocus="this.style.borderColor='#FF2E93'; this.style.boxShadow='0 0 0 4px rgba(255,46,147,0.12)'" onblur="this.style.borderColor='rgba(255,255,255,0.08)'; this.style.boxShadow='none'" value="{{ old('email', $user->email) }}" required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                
                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div>
                        <p style="font-size: 13px; color: #A0A0AB; margin-top: 8px;">
                            {{ __('Your email address is unverified.') }}
                            <button form="send-verification" style="text-decoration: underline; color: #FF2E93; background: none; border: none; cursor: pointer; font-size: 13px;">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>
                        @if (session('status') === 'verification-link-sent')
                            <p style="margin-top: 8px; font-size: 13px; font-weight: 600; color: #FF6F91;">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>

            <div class="space-y-2">
                <label for="phone" style="font-size: 12px; font-weight: 600; letter-spacing: 0.06em; text-transform: uppercase; color: #A0A0AB; margin-left: 4px;">{{ __('Phone Number') }}</label>
                <input id="phone" name="phone" type="tel" style="width: 100%; background: rgba(255,255,255,0.02); border: 1.5px solid rgba(255,255,255,0.08); border-radius: 14px; padding: 14px 20px; font-size: 15px; color: #FFFFFF; font-family: 'Inter', sans-serif; outline: none; transition: all 0.3s;" onfocus="this.style.borderColor='#FF2E93'; this.style.boxShadow='0 0 0 4px rgba(255,46,147,0.12)'" onblur="this.style.borderColor='rgba(255,255,255,0.08)'; this.style.boxShadow='none'" value="{{ old('phone', $user->phone) }}" autocomplete="tel" />
                <x-input-error class="mt-2" :messages="$errors->get('phone')" />
            </div>
        </div>
    </section>

    <!-- Section 2: Address Book -->
    <section style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 24px; padding: 32px; box-shadow: 0 4px 24px rgba(0,0,0,0.2);">
        <div class="flex items-center gap-4 mb-8">
            <div style="padding: 12px; border-radius: 16px; background: rgba(255,46,147,0.15); color: #FF2E93;">
                <span class="material-symbols-outlined">location_on</span>
            </div>
            <h3 style="font-size: 20px; font-weight: 700; color: #FFFFFF;">{{ __('Address Book') }}</h3>
        </div>
        
        <div class="space-y-2">
            <label for="address" style="font-size: 12px; font-weight: 600; letter-spacing: 0.06em; text-transform: uppercase; color: #A0A0AB; margin-left: 4px;">{{ __('Shipping Address') }}</label>
            <textarea id="address" name="address" rows="3" style="width: 100%; background: rgba(255,255,255,0.02); border: 1.5px solid rgba(255,255,255,0.08); border-radius: 16px; padding: 14px 20px; font-size: 15px; color: #FFFFFF; font-family: 'Inter', sans-serif; outline: none; resize: vertical; transition: all 0.3s;" onfocus="this.style.borderColor='#FF2E93'; this.style.boxShadow='0 0 0 4px rgba(255,46,147,0.12)'" onblur="this.style.borderColor='rgba(255,255,255,0.08)'; this.style.boxShadow='none'">{{ old('address', $user->address) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>
    </section>

    <!-- Save Button -->
    <div class="flex justify-end pt-2 items-center gap-4">
        @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" style="font-size: 13px; font-weight: 600; color: #FF6F91;">
                {{ __('Saved.') }}
            </p>
        @endif
        
        <button type="submit" style="background: linear-gradient(135deg, #FF2E93, #FF5DB1); color: white; font-weight: 700; padding: 14px 36px; border-radius: 9999px; border: none; cursor: pointer; font-size: 14px; box-shadow: 0 4px 20px rgba(255,46,147,0.25); transition: transform 0.3s, box-shadow 0.3s;" onmouseenter="this.style.transform='scale(1.02)'" onmouseleave="this.style.transform='scale(1)'">
            {{ __('Save Profile & Address') }}
        </button>
    </div>
</form>
