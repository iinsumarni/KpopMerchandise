<!-- TopNavBar — Premium Dark Mode -->
<nav class="fixed top-6 left-1/2 -translate-x-1/2 w-[92%] max-w-7xl rounded-full z-50 backdrop-blur-xl backdrop-saturate-150 transition-colors duration-300" style="background: rgba(15, 15, 18, 0.72); border: 1px solid rgba(255, 255, 255, 0.08); box-shadow: 0 10px 40px rgba(0,0,0,0.3);">
    <div class="flex justify-between items-center px-8 py-3 w-full">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
        </style>
        <a href="/" class="text-3xl bg-gradient-to-r from-[#FF2E93] to-[#FF5DB1] bg-clip-text text-transparent select-none pb-1" style="font-family: 'Pacifico', cursive; line-height: 1.2; letter-spacing: 1px;">
            Kpop Pocket
        </a>
        <div class="flex items-center gap-4">
            @guest
                <a href="{{ route('login') }}" class="font-['Inter'] tracking-wide uppercase text-xs font-semibold px-4 py-2 rounded-full transition-colors" style="color: #FFFFFF;">
                    Log In
                </a>
                <a href="{{ route('register') }}" class="text-white font-['Inter'] tracking-wide uppercase text-xs font-semibold px-5 py-2 rounded-full transition-transform duration-300 hover:scale-105" style="background: linear-gradient(135deg, #FF2E93, #FF5DB1); box-shadow: 0 4px 16px rgba(255,46,147,0.25);">
                    Sign Up
                </a>
            @else
                <a href="/cart" aria-label="Cart" class="flex items-center justify-center p-2 rounded-full transition-all duration-300 hover:scale-105" style="color: #FF2E93;">
                    <span class="material-symbols-outlined">shopping_cart</span>
                </a>
                <a href="{{ route('profile.edit') }}" aria-label="Profile" class="flex items-center justify-center p-2 rounded-full transition-all duration-300 hover:scale-105" style="color: #FF2E93;">
                    <span class="material-symbols-outlined">person</span>
                </a>
                <form method="POST" action="{{ route('logout') }}" class="m-0 p-0 flex">
                    @csrf
                    <button type="submit" aria-label="Logout" class="flex items-center justify-center p-2 rounded-full transition-all duration-300 hover:scale-105" style="color: #A0A0AB;">
                        <span class="material-symbols-outlined">logout</span>
                    </button>
                </form>
            @endguest
        </div>
    </div>
</nav>
