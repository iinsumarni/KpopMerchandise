<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors duration-200">
                <span class="material-symbols-outlined" style="font-size: 24px; vertical-align: middle;">arrow_back</span> Back
            </a>
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Profile') }}
            </h2>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-12 gap-gutter">
        <!-- Profile Sidebar -->
        <aside class="md:col-span-3 space-y-6">
            <div class="glass-card rounded-3xl p-8 flex flex-col items-center text-center">
                <div class="relative group">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-2 border-primary-container p-1">
                        <img alt="User Profile" class="w-full h-full object-cover rounded-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCPlyzZoHmH33mLHp6EmKuzfrR5oErt6d_HVlE-h1GCQmiqqSsVhFQItuZuhBdAhwx-hQt5HY8b-pbqQU22xPQhIeW0jyno_PpRz5b7DyLgz6A_5OvaDyyBZQq2FYf_ryTa72sjpciwXoYt47h0umcbGkuGkALFPKbf_iZrZ17BMqlV5GFv129daC_Vnh2CjuZPE2dQo0jVVSzyHdx4aPGLXxBMZGH92VBGm4i3gquKuYhnHbSILaQ4cst5yBF3w7RNnQ97g41okSg"/>
                    </div>
                    <button class="absolute bottom-0 right-0 bg-primary-container p-2 rounded-full scale-90 hover:scale-100 transition-transform">
                        <span class="material-symbols-outlined text-white text-sm" data-icon="edit">edit</span>
                    </button>
                </div>
                <h2 class="font-h3 text-h3 mt-4 text-white">{{ Auth::user()->name }}</h2>
                <p class="font-label-caps text-label-caps text-primary mt-1">Diamond Member</p>
            </div>
            
            <nav class="glass-card rounded-3xl p-4 flex flex-col gap-2">
                <a class="flex items-center gap-4 px-6 py-4 rounded-2xl bg-primary-container/10 text-primary border border-primary-container/20 font-semibold transition-all" href="#">
                    <span class="material-symbols-outlined" data-icon="account_circle" style="font-variation-settings: 'FILL' 1;">account_circle</span>
                    Account
                </a>
                <a class="flex items-center gap-4 px-6 py-4 rounded-2xl text-on-surface-variant hover:bg-white/5 transition-all holo-glow-hover" href="#">
                    <span class="material-symbols-outlined" data-icon="package_2">package_2</span>
                    Orders
                </a>
                <a class="flex items-center gap-4 px-6 py-4 rounded-2xl text-on-surface-variant hover:bg-white/5 transition-all holo-glow-hover" href="#">
                    <span class="material-symbols-outlined" data-icon="favorite">favorite</span>
                    Wishlist
                </a>
                <a class="flex items-center gap-4 px-6 py-4 rounded-2xl text-on-surface-variant hover:bg-white/5 transition-all holo-glow-hover" href="#">
                    <span class="material-symbols-outlined" data-icon="settings">settings</span>
                    Settings
                </a>
                <div class="h-px bg-white/5 my-2"></div>
                
                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-4 px-6 py-4 rounded-2xl text-error hover:bg-error/10 transition-all">
                        <span class="material-symbols-outlined" data-icon="logout">logout</span>
                        Sign Out
                    </button>
                </form>
            </nav>
        </aside>

        <!-- Profile Content Grid -->
        <div class="md:col-span-9 grid grid-cols-1 gap-gutter">
            <!-- Partials Container -->
            @include('profile.partials.update-profile-information-form')

            @include('profile.partials.update-password-form')

            @include('profile.partials.delete-user-form')
        </div>
    </div>
</x-app-layout>
