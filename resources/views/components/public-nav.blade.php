<!-- TopNavBar (Shared Component) -->
<nav class="fixed top-6 left-1/2 -translate-x-1/2 w-[92%] max-w-7xl rounded-full border border-white/10 z-50 bg-slate-950/40 backdrop-blur-xl shadow-[0_8px_32px_0_rgba(0,0,0,0.3)] backdrop-saturate-150">
    <div class="flex justify-between items-center px-8 py-3 w-full">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
        </style>
        <a href="/" class="text-3xl bg-gradient-to-r from-[#FF4FA3] to-purple-500 bg-clip-text text-transparent select-none pb-1" style="font-family: 'Pacifico', cursive; line-height: 1.2; letter-spacing: 1px;">
            Kpop Pocket
        </a>
        <div class="flex items-center gap-4">
            @guest
                <a href="{{ route('login') }}" class="text-white font-['Epilogue'] tracking-widest uppercase text-xs font-bold px-4 py-2 hover:bg-white/10 rounded-full transition-colors">
                    Log In
                </a>
                <a href="{{ route('register') }}" class="bg-gradient-to-r from-[#FF4FA3] to-purple-500 text-white font-['Epilogue'] tracking-widest uppercase text-xs font-bold px-5 py-2 hover:scale-105 transition-transform duration-300 rounded-full shadow-[0_4px_16px_rgba(255,79,163,0.3)]">
                    Sign Up
                </a>
            @else
                <!-- Trailing Icons -->
                <button aria-label="shopping_cart" class="text-pink-500 font-['Epilogue'] tracking-widest uppercase text-xs font-bold hover:scale-105 hover:bg-white/5 transition-all duration-300 scale-95 active:scale-90 flex items-center justify-center p-2 rounded-full">
                    <span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
                </button>
                
                <a href="{{ route('profile.edit') }}" aria-label="person" class="text-pink-500 font-['Epilogue'] tracking-widest uppercase text-xs font-bold hover:scale-105 hover:bg-white/5 transition-all duration-300 scale-95 active:scale-90 flex items-center justify-center p-2 rounded-full">
                    <span class="material-symbols-outlined" data-icon="person">person</span>
                </a>
                
                <button aria-label="menu" class="text-pink-500 font-['Epilogue'] tracking-widest uppercase text-xs font-bold hover:scale-105 hover:bg-white/5 transition-all duration-300 scale-95 active:scale-90 flex items-center justify-center p-2 rounded-full">
                    <span class="material-symbols-outlined" data-icon="menu">menu</span>
                </button>
            @endguest
        </div>
    </div>
</nav>
