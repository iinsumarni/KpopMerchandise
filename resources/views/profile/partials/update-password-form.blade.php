<form method="post" action="{{ route('password.update') }}" class="space-y-6">
    @csrf
    @method('put')

    <section style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 24px; padding: 32px; box-shadow: 0 4px 24px rgba(0,0,0,0.2);">
        <div class="flex items-center gap-4 mb-8">
            <div style="padding: 12px; border-radius: 16px; background: rgba(255,46,147,0.15); color: #FF2E93;">
                <span class="material-symbols-outlined">shield_lock</span>
            </div>
            <h3 style="font-size: 20px; font-weight: 700; color: #FFFFFF;">{{ __('Security') }}</h3>
        </div>
        
        <div class="space-y-4">
            <div class="space-y-2">
                <label for="update_password_current_password" style="font-size: 12px; font-weight: 600; letter-spacing: 0.06em; text-transform: uppercase; color: #A0A0AB; margin-left: 4px;">{{ __('Current Password') }}</label>
                <input id="update_password_current_password" name="current_password" type="password" style="width: 100%; background: rgba(255,255,255,0.02); border: 1.5px solid rgba(255,255,255,0.08); border-radius: 14px; padding: 14px 20px; font-size: 15px; color: #FFFFFF; font-family: 'Inter', sans-serif; outline: none; transition: all 0.3s;" onfocus="this.style.borderColor='#FF2E93'; this.style.boxShadow='0 0 0 4px rgba(255,46,147,0.12)'" onblur="this.style.borderColor='rgba(255,255,255,0.08)'; this.style.boxShadow='none'" autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>

            <div class="space-y-2">
                <label for="update_password_password" style="font-size: 12px; font-weight: 600; letter-spacing: 0.06em; text-transform: uppercase; color: #A0A0AB; margin-left: 4px;">{{ __('New Password') }}</label>
                <input id="update_password_password" name="password" type="password" style="width: 100%; background: rgba(255,255,255,0.02); border: 1.5px solid rgba(255,255,255,0.08); border-radius: 14px; padding: 14px 20px; font-size: 15px; color: #FFFFFF; font-family: 'Inter', sans-serif; outline: none; transition: all 0.3s;" onfocus="this.style.borderColor='#FF2E93'; this.style.boxShadow='0 0 0 4px rgba(255,46,147,0.12)'" onblur="this.style.borderColor='rgba(255,255,255,0.08)'; this.style.boxShadow='none'" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>

            <div class="space-y-2">
                <label for="update_password_password_confirmation" style="font-size: 12px; font-weight: 600; letter-spacing: 0.06em; text-transform: uppercase; color: #A0A0AB; margin-left: 4px;">{{ __('Confirm New Password') }}</label>
                <input id="update_password_password_confirmation" name="password_confirmation" type="password" style="width: 100%; background: rgba(255,255,255,0.02); border: 1.5px solid rgba(255,255,255,0.08); border-radius: 14px; padding: 14px 20px; font-size: 15px; color: #FFFFFF; font-family: 'Inter', sans-serif; outline: none; transition: all 0.3s;" onfocus="this.style.borderColor='#FF2E93'; this.style.boxShadow='0 0 0 4px rgba(255,46,147,0.12)'" onblur="this.style.borderColor='rgba(255,255,255,0.08)'; this.style.boxShadow='none'" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        <div class="flex justify-between items-center mt-8">
            <div class="flex items-center gap-4">
                @if (session('status') === 'password-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" style="font-size: 13px; font-weight: 600; color: #FF6F91;">
                        {{ __('Saved.') }}
                    </p>
                @endif
            </div>

            <button type="submit" style="background: rgba(255,255,255,0.04); color: #FF2E93; font-weight: 700; padding: 14px 28px; border-radius: 9999px; border: 1.5px solid rgba(255,255,255,0.08); cursor: pointer; font-size: 14px; transition: all 0.3s;" onmouseenter="this.style.borderColor='#FF2E93'; this.style.background='rgba(255,46,147,0.08)'" onmouseleave="this.style.borderColor='rgba(255,255,255,0.08)'; this.style.background='rgba(255,255,255,0.04)'">
                {{ __('Change Password') }}
            </button>
        </div>
    </section>
</form>
