<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('home') }}" style="color: #A0A0AB; text-decoration: none; display: flex; align-items: center; gap: 4px; transition: color 0.2s;" onmouseenter="this.style.color='#FF2E93'" onmouseleave="this.style.color='#A0A0AB'">
                <span class="material-symbols-outlined" style="font-size: 20px;">arrow_back</span> Back
            </a>
            <h2 style="font-size: 24px; font-weight: 700; color: #FFFFFF; letter-spacing: -0.01em;">
                {{ __('Profile') }}
            </h2>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-12 gap-6">
        <!-- Profile Sidebar -->
        <aside class="md:col-span-3 space-y-5">
            <div style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 24px; padding: 32px; box-shadow: 0 4px 24px rgba(0,0,0,0.2); text-align: center;">
                <div class="relative inline-block">
                    <div style="width: 80px; height: 80px; border-radius: 50%; overflow: hidden; border: 3px solid rgba(255, 255, 255, 0.08); padding: 2px; margin: 0 auto;">
                        <img alt="User Profile" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCPlyzZoHmH33mLHp6EmKuzfrR5oErt6d_HVlE-h1GCQmiqqSsVhFQItuZuhBdAhwx-hQt5HY8b-pbqQU22xPQhIeW0jyno_PpRz5b7DyLgz6A_5OvaDyyBZQq2FYf_ryTa72sjpciwXoYt47h0umcbGkuGkALFPKbf_iZrZ17BMqlV5GFv129daC_Vnh2CjuZPE2dQo0jVVSzyHdx4aPGLXxBMZGH92VBGm4i3gquKuYhnHbSILaQ4cst5yBF3w7RNnQ97g41okSg"/>
                    </div>
                    <button style="position: absolute; bottom: 0; right: 0; background: linear-gradient(135deg, #FF2E93, #FF5DB1); padding: 6px; border-radius: 50%; border: 2px solid #0F0F12; cursor: pointer; display: flex; align-items: center; justify-content: center;">
                        <span class="material-symbols-outlined" style="font-size: 14px; color: white;">edit</span>
                    </button>
                </div>
                <h2 style="font-size: 20px; font-weight: 700; color: #FFFFFF; margin-top: 16px;">{{ Auth::user()->name }}</h2>
                <p style="font-size: 12px; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; color: #FF2E93; margin-top: 4px;">Diamond Member</p>
            </div>
            
            <nav style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 20px; padding: 12px; box-shadow: 0 4px 24px rgba(0,0,0,0.2); display: flex; flex-direction: column; gap: 4px;">
                <a style="display: flex; align-items: center; gap: 12px; padding: 12px 16px; border-radius: 14px; background: rgba(255,46,147,0.15); color: #FF2E93; font-weight: 600; font-size: 14px; text-decoration: none; border: 1px solid rgba(255,46,147,0.1);" href="#">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1; font-size: 20px;">account_circle</span>
                    Account
                </a>
                <a style="display: flex; align-items: center; gap: 12px; padding: 12px 16px; border-radius: 14px; color: #A0A0AB; font-size: 14px; text-decoration: none; transition: all 0.2s;" href="#" onmouseenter="this.style.background='rgba(255,46,147,0.08)'; this.style.color='#FFFFFF'" onmouseleave="this.style.background='transparent'; this.style.color='#A0A0AB'">
                    <span class="material-symbols-outlined" style="font-size: 20px;">package_2</span>
                    Orders
                </a>
                <a style="display: flex; align-items: center; gap: 12px; padding: 12px 16px; border-radius: 14px; color: #A0A0AB; font-size: 14px; text-decoration: none; transition: all 0.2s;" href="#" onmouseenter="this.style.background='rgba(255,46,147,0.08)'; this.style.color='#FFFFFF'" onmouseleave="this.style.background='transparent'; this.style.color='#A0A0AB'">
                    <span class="material-symbols-outlined" style="font-size: 20px;">favorite</span>
                    Wishlist
                </a>
                <a style="display: flex; align-items: center; gap: 12px; padding: 12px 16px; border-radius: 14px; color: #A0A0AB; font-size: 14px; text-decoration: none; transition: all 0.2s;" href="#" onmouseenter="this.style.background='rgba(255,46,147,0.08)'; this.style.color='#FFFFFF'" onmouseleave="this.style.background='transparent'; this.style.color='#A0A0AB'">
                    <span class="material-symbols-outlined" style="font-size: 20px;">settings</span>
                    Settings
                </a>
                <div style="height: 1px; background: rgba(255, 255, 255, 0.08); margin: 4px 0;"></div>
                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <button type="submit" style="width: 100%; display: flex; align-items: center; gap: 12px; padding: 12px 16px; border-radius: 14px; color: #FF4D6D; font-size: 14px; background: none; border: none; cursor: pointer; transition: all 0.2s;" onmouseenter="this.style.background='rgba(255,77,109,0.06)'" onmouseleave="this.style.background='transparent'">
                        <span class="material-symbols-outlined" style="font-size: 20px;">logout</span>
                        Sign Out
                    </button>
                </form>
            </nav>
        </aside>

        <!-- Profile Content -->
        <div class="md:col-span-9 grid grid-cols-1 gap-6">
            @include('profile.partials.update-profile-information-form')
            @include('profile.partials.update-password-form')
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</x-app-layout>
