<!-- TopNavBar (Shared Component) -->
<nav class="fixed top-6 left-1/2 -translate-x-1/2 w-[92%] max-w-7xl rounded-full border border-white/10 z-50 bg-slate-950/40 backdrop-blur-xl shadow-[0_8px_32px_0_rgba(0,0,0,0.3)] backdrop-saturate-150">
    <div class="flex justify-between items-center px-8 py-3 w-full">
        <div class="text-2xl font-black italic tracking-tighter bg-gradient-to-r from-[#FF4FA3] to-purple-500 bg-clip-text text-transparent">
            Kpop Pocket
        </div>
        <div class="flex items-center gap-6">
            <!-- Trailing Icons -->
            <button aria-label="shopping_cart" class="text-pink-500 dark:text-pink-400 font-['Epilogue'] tracking-widest uppercase text-xs font-bold hover:scale-105 hover:bg-white/5 transition-all duration-300 scale-95 active:scale-90 flex items-center justify-center p-2 rounded-full">
                <span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
            </button>
            
            <a href="{{ route('login') }}" aria-label="person" class="text-pink-500 dark:text-pink-400 font-['Epilogue'] tracking-widest uppercase text-xs font-bold hover:scale-105 hover:bg-white/5 transition-all duration-300 scale-95 active:scale-90 flex items-center justify-center p-2 rounded-full">
                <span class="material-symbols-outlined" data-icon="person">person</span>
            </a>
            
            <button aria-label="menu" class="text-pink-500 dark:text-pink-400 font-['Epilogue'] tracking-widest uppercase text-xs font-bold hover:scale-105 hover:bg-white/5 transition-all duration-300 scale-95 active:scale-90 flex items-center justify-center p-2 rounded-full">
                <span class="material-symbols-outlined" data-icon="menu">menu</span>
            </button>
        </div>
    </div>
</nav>
