<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Register - KPOP POCKET</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Inter', -apple-system, sans-serif; background: #1D1014; color: #FFFFFF; -webkit-font-smoothing: antialiased; }
        ::selection { background: rgba(255,46,147,0.3); color: white; }
        .kp-input { width: 100%; background: rgba(255, 255, 255, 0.02); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 14px 18px; font-size: 15px; color: #FFFFFF; font-family: 'Inter', sans-serif; outline: none; transition: all 0.3s; }
        .kp-input:focus { border-color: #FF2E93; box-shadow: 0 0 0 4px rgba(255,46,147,0.15); }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex">

<main class="flex-grow flex w-full min-h-screen">
    <!-- Left Side -->
    <section class="hidden lg:flex w-1/2 relative items-center justify-center overflow-hidden" style="background: #170A0F;">
        <div class="absolute inset-0 bg-cover bg-center opacity-40" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBroQNFQ4bYmHAFIwGzxwQrxxhOfRcgdsmRQ9RpJL1rh5YCjzCriPsBpSUe5kDkQZ7irvkH90aPtnY9omFkEz74X3qVOMDe4IaVnyvmCK7UGiKOy9XRsXFhKPcO3aLIC-3q6B8OgvKcqoaiRDqjgt8xKPTUxwO1qZoRCb03MSnzY3YW2cZp54pXiicHIquvBdkLlVq6-9nqunbRIAfJHXYpSA_ocLojTg0U2eF_L62SB03NLHRzaRXRY5x7HsMVReR7AlL8IK8B-RE');"></div>
        <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(255,46,147,0.4) 0%, rgba(15, 15, 18, 0.95) 100%);"></div>
        <div class="relative z-10 p-12 max-w-lg flex flex-col gap-10 items-start">
            <a href="/" class="text-5xl bg-gradient-to-r from-[#FF2E93] to-[#FF5DB1] bg-clip-text text-transparent select-none pb-1" style="font-family: 'Pacifico', cursive; line-height: 1.2;">
                Kpop Pocket
            </a>
            <div>
                <h1 style="font-size: 48px; font-weight: 700; letter-spacing: -0.04em; line-height: 1.1; color: #FFFFFF; margin-bottom: 16px;">Join the<br>Community.</h1>
                <p style="font-size: 16px; line-height: 1.7; color: #A0A0AB; max-width: 380px; border-left: 3px solid #FF2E93; padding-left: 16px;">
                    Create your account and unlock exclusive drops, limited editions, and member-only perks.
                </p>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] rounded-full translate-y-1/2 -translate-x-1/4 pointer-events-none" style="background: radial-gradient(circle, rgba(255,46,147,0.2), transparent 70%); filter: blur(60px);"></div>
    </section>

    <!-- Right Side: Register Form -->
    <section class="w-full lg:w-1/2 flex items-center justify-center p-6 relative" style="background: #1D1014;">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[300px] h-[300px] rounded-full pointer-events-none" style="background: radial-gradient(circle, rgba(255,46,147,0.15), transparent 70%); filter: blur(80px);"></div>
        
        <div class="w-full max-w-md relative z-10 flex flex-col gap-7" style="background: rgba(255, 255, 255, 0.04); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border-radius: 28px; border: 1px solid rgba(255, 255, 255, 0.1); padding: 44px; box-shadow: 0 20px 60px rgba(0,0,0,0.4);">
            <div class="text-center flex flex-col gap-2">
                <h2 style="font-size: 32px; font-weight: 700; letter-spacing: -0.02em; color: #FFFFFF;">Join the Club</h2>
                <p style="font-size: 15px; color: #A0A0AB;">Create your account to access your Pocket.</p>
            </div>
            
            <div class="flex flex-col gap-5">
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-4">
                    @csrf
                    <div class="flex flex-col gap-2">
                        <label for="name" style="font-size: 12px; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; color: #A0A0AB; padding-left: 4px;">Full Name</label>
                        <input id="name" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" class="kp-input" placeholder="Your Name" type="text"/>
                        <x-input-error :messages="$errors->get('name')" class="mt-1" style="color: #FF4D6D; font-size: 13px;" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="email" style="font-size: 12px; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; color: #A0A0AB; padding-left: 4px;">Email Address</label>
                        <input id="email" name="email" value="{{ old('email') }}" required autocomplete="username" class="kp-input" placeholder="idol@kpoppocket.com" type="email"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-1" style="color: #FF4D6D; font-size: 13px;" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="password" style="font-size: 12px; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; color: #A0A0AB; padding-left: 4px;">Password</label>
                        <input id="password" name="password" required autocomplete="new-password" class="kp-input" placeholder="••••••••" type="password"/>
                        <x-input-error :messages="$errors->get('password')" class="mt-1" style="color: #FF4D6D; font-size: 13px;" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="password_confirmation" style="font-size: 12px; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; color: #A0A0AB; padding-left: 4px;">Confirm Password</label>
                        <input id="password_confirmation" name="password_confirmation" required autocomplete="new-password" class="kp-input" placeholder="••••••••" type="password"/>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" style="color: #FF4D6D; font-size: 13px;" />
                    </div>
                                        <button type="submit" class="relative overflow-hidden group hover:scale-[1.02] transition-all duration-300" style="width: 100%; padding: 16px; margin-top: 8px; border-radius: 9999px; background: linear-gradient(135deg, #FF2E93, #FF5DB1); color: white; font-size: 13px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; border: none; cursor: pointer; box-shadow: 0 4px 20px rgba(255,46,147,0.3);">
                        <span class="relative z-10">SIGN UP</span>
                        <div class="absolute inset-0 bg-white/20 -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700 ease-out z-0"></div>
                    </button>
                </form>
            </div>
            
            <div class="text-center">
                <p style="font-size: 14px; color: #A0A0AB;">
                    Already have an account? <a style="color: #FF2E93; font-weight: 600; text-decoration: none;" href="{{ route('login') }}">Sign In</a>
                </p>
            </div>
        </div>
    </section>
</main>
</body>
</html>
