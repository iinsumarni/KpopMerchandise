<section style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255,77,109,0.25); border-radius: 24px; padding: 32px; box-shadow: 0 4px 24px rgba(0,0,0,0.2);">
    <header class="flex items-center gap-4 mb-8">
        <div style="padding: 12px; border-radius: 16px; background: rgba(255,77,109,0.15); color: #FF4D6D;">
            <span class="material-symbols-outlined">person_remove</span>
        </div>
        <div>
            <h3 style="font-size: 20px; font-weight: 700; color: #FFFFFF;">
                {{ __('Delete Account') }}
            </h3>
            <p style="font-size: 14px; color: #A0A0AB; margin-top: 4px;">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted.') }}
            </p>
        </div>
    </header>

    <div class="flex justify-end pt-4">
        <button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')" style="display: inline-flex; align-items: center; justify-content: center; background: rgba(255,77,109,0.15); color: #FF4D6D; border: 1px solid rgba(255,77,109,0.3); font-size: 12px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; padding: 12px 24px; border-radius: 9999px; cursor: pointer; transition: all 0.3s;" onmouseenter="this.style.background='rgba(255,77,109,0.2)'" onmouseleave="this.style.background='rgba(255,77,109,0.15)'">
            {{ __('Delete Account') }}
        </button>
    </div>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" style="padding: 32px; background: #0F0F12; border-radius: 24px; border: 1px solid rgba(255,255,255,0.08);">
            @csrf
            @method('delete')

            <h2 style="font-size: 18px; font-weight: 600; color: #FFFFFF;">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p style="margin-top: 8px; font-size: 14px; color: #A0A0AB;">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
                <input id="password" name="password" type="password" style="width: 100%; background: rgba(255,255,255,0.02); border: 1.5px solid rgba(255,255,255,0.08); border-radius: 14px; padding: 14px 20px; font-size: 15px; color: #FFFFFF; font-family: 'Inter', sans-serif; outline: none; transition: all 0.3s;" onfocus="this.style.borderColor='#FF4D6D'; this.style.boxShadow='0 0 0 4px rgba(255,77,109,0.12)'" onblur="this.style.borderColor='rgba(255,255,255,0.08)'; this.style.boxShadow='none'" placeholder="{{ __('Password') }}" />
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" style="color: #FF4D6D;" />
            </div>

            <div class="mt-6 flex justify-end gap-4">
                <button x-on:click="$dispatch('close')" type="button" style="display: inline-flex; align-items: center; justify-content: center; background: rgba(255,255,255,0.04); color: #FFFFFF; border: 1.5px solid rgba(255,255,255,0.08); font-size: 12px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; padding: 12px 24px; border-radius: 9999px; cursor: pointer; transition: all 0.3s;">
                    {{ __('Cancel') }}
                </button>

                <button type="submit" style="display: inline-flex; align-items: center; justify-content: center; background: #FF4D6D; color: white; font-size: 12px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; padding: 12px 24px; border-radius: 9999px; border: none; cursor: pointer; box-shadow: 0 4px 16px rgba(255,77,109,0.25); transition: all 0.3s;" onmouseenter="this.style.transform='scale(1.02)'" onmouseleave="this.style.transform='scale(1)'">
                    {{ __('Delete Account') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>
