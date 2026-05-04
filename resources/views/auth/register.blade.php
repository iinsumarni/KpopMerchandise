<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Register - KPOP POCKET</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@400;700;800&amp;family=Plus+Jakarta+Sans:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
    </style>

    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-surface": "#f6dce3",
                        "inverse-on-surface": "#3c2c31",
                        "surface-variant": "#403036",
                        "tertiary-fixed-dim": "#61e143",
                        "on-surface-variant": "#dfbec8",
                        "on-error-container": "#ffdad6",
                        "error-container": "#93000a",
                        "tertiary": "#61e143",
                        "surface-dim": "#1d1014",
                        "primary-fixed": "#ffd9e4",
                        "on-secondary-fixed-variant": "#7000a6",
                        "on-error": "#690005",
                        "on-tertiary": "#063900",
                        "inverse-primary": "#b7046c",
                        "surface": "#1d1014",
                        "surface-container-high": "#35262b",
                        "on-secondary": "#4f0077",
                        "on-tertiary-container": "#053500",
                        "primary-fixed-dim": "#ffb0cc",
                        "secondary": "#e6b4ff",
                        "inverse-surface": "#f6dce3",
                        "outline-variant": "#584048",
                        "on-primary-container": "#5d0034",
                        "surface-tint": "#ffb0cc",
                        "secondary-fixed-dim": "#e6b4ff",
                        "surface-container-low": "#25181c",
                        "on-secondary-fixed": "#30004a",
                        "secondary-container": "#7401ab",
                        "on-primary-fixed-variant": "#8d0051",
                        "error": "#ffb4ab",
                        "on-tertiary-fixed-variant": "#0d5300",
                        "on-background": "#f6dce3",
                        "secondary-fixed": "#f5d9ff",
                        "tertiary-fixed": "#7dfe5d",
                        "surface-container": "#2a1c20",
                        "primary-container": "#ff4fa3",
                        "on-tertiary-fixed": "#022100",
                        "on-primary-fixed": "#3e0021",
                        "background": "#1d1014",
                        "surface-container-lowest": "#170a0f",
                        "tertiary-container": "#25ab02",
                        "outline": "#a78992",
                        "on-secondary-container": "#dea1ff",
                        "surface-container-highest": "#403036",
                        "primary": "#ffb0cc",
                        "surface-bright": "#45353a",
                        "on-primary": "#640038"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "xs": "8px",
                        "lg": "48px",
                        "md": "24px",
                        "unit": "4px",
                        "xl": "80px",
                        "sm": "16px",
                        "container-padding": "32px"
                    },
                    "fontFamily": {
                        "h2": ["Epilogue"],
                        "h1": ["Epilogue"],
                        "label-caps": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "h3": ["Epilogue"],
                        "body-lg": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "h2": ["48px", { "lineHeight": "1.2", "letterSpacing": "-0.03em", "fontWeight": "700" }],
                        "h1": ["64px", { "lineHeight": "1.1", "letterSpacing": "-0.04em", "fontWeight": "800" }],
                        "label-caps": ["12px", { "lineHeight": "1", "letterSpacing": "0.1em", "fontWeight": "700" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "h3": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }]
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background text-on-background min-h-screen flex flex-col font-body-md overflow-x-hidden selection:bg-primary-container selection:text-white">

<main class="flex-grow flex w-full min-h-screen">
    <!-- Left Side: Immersive Imagery -->
    <section class="hidden lg:flex w-1/2 relative bg-surface-container-low items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" data-alt="vibrant abstract blurry stage lights and neon pink and purple gradients creating an energetic concert atmosphere" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBroQNFQ4bYmHAFIwGzxwQrxxhOfRcgdsmRQ9RpJL1rh5YCjzCriPsBpSUe5kDkQZ7irvkH90aPtnY9omFkEz74X3qVOMDe4IaVnyvmCK7UGiKOy9XRsXFhKPcO3aLIC-3q6B8OgvKcqoaiRDqjgt8xKPTUxwO1qZoRCb03MSnzY3YW2cZp54pXiicHIquvBdkLlVq6-9nqunbRIAfJHXYpSA_ocLojTg0U2eF_L62SB03NLHRzaRXRY5x7HsMVReR7AlL8IK8B-RE');"></div>
        <!-- Dark Glassmorphic Overlay -->
        <div class="absolute inset-0 bg-background/60 backdrop-blur-sm"></div>
        <!-- Content over imagery -->
        <div class="relative z-10 p-container-padding max-w-lg flex flex-col gap-lg items-start">
            
            <a href="/" class="text-4xl bg-gradient-to-r from-[#FF4FA3] to-purple-500 bg-clip-text text-transparent select-none pb-1" style="font-family: 'Pacifico', cursive; line-height: 1.2; letter-spacing: 1px;">
                Kpop Pocket
            </a>

            <div>
                <h1 class="font-h1 text-h1 text-white mb-sm drop-shadow-lg">ENTER THE DIGITAL ETHER.</h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-md border-l-2 border-primary-container pl-sm">
                    Connect with the ultimate rhythm. Your gateway to exclusive collections, trends, and idol moments.
                </p>
            </div>
        </div>
        <!-- Subtle glowing holographic accent -->
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary-container/20 blur-[100px] rounded-full translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>
        <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-secondary-container/20 blur-[100px] rounded-full -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>
    </section>

    <!-- Right Side: Register Form -->
    <section class="w-full lg:w-1/2 flex items-center justify-center p-gutter relative bg-[#0B0B0F]">
        <!-- Background glow for depth -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[300px] h-[300px] bg-primary-container/10 blur-[80px] rounded-full pointer-events-none"></div>
        
        <!-- Register Card -->
        <div class="w-full max-w-md bg-[#14141B] rounded-xl border border-white/10 p-container-padding shadow-[0_30px_60px_rgba(255,79,163,0.05)] backdrop-blur-xl relative z-10 flex flex-col gap-lg">
            <div class="text-center flex flex-col gap-xs">
                <h2 class="font-h2 text-h2 text-white">Join the Club</h2>
                <p class="font-body-md text-body-md text-on-surface-variant">Create your account to access your Pocket.</p>
            </div>
            
            <div class="flex flex-col gap-md">

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Traditional Form -->
                <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-md">
                    @csrf
                    
                    <!-- Name -->
                    <div class="flex flex-col gap-xs">
                        <label for="name" class="font-label-caps text-label-caps text-on-surface-variant pl-unit">FULL NAME</label>
                        <input id="name" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" class="w-full bg-surface-container-low border border-white/10 rounded-lg px-4 py-3 font-body-md text-body-md text-white placeholder-outline focus:outline-none focus:border-primary-container focus:ring-1 focus:ring-primary-container transition-all" placeholder="Your Name" type="text"/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2 text-error" />
                    </div>

                    <!-- Email -->
                    <div class="flex flex-col gap-xs">
                        <label for="email" class="font-label-caps text-label-caps text-on-surface-variant pl-unit">EMAIL ADDRESS</label>
                        <input id="email" name="email" value="{{ old('email') }}" required autocomplete="username" class="w-full bg-surface-container-low border border-white/10 rounded-lg px-4 py-3 font-body-md text-body-md text-white placeholder-outline focus:outline-none focus:border-primary-container focus:ring-1 focus:ring-primary-container transition-all" placeholder="idol@kpoppocket.com" type="email"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-error" />
                    </div>

                    <!-- Password -->
                    <div class="flex flex-col gap-xs">
                        <label for="password" class="font-label-caps text-label-caps text-on-surface-variant pl-unit">PASSWORD</label>
                        <input id="password" name="password" required autocomplete="new-password" class="w-full bg-surface-container-low border border-white/10 rounded-lg px-4 py-3 font-body-md text-body-md text-white placeholder-outline focus:outline-none focus:border-primary-container focus:ring-1 focus:ring-primary-container transition-all" placeholder="••••••••" type="password"/>
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-error" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="flex flex-col gap-xs">
                        <label for="password_confirmation" class="font-label-caps text-label-caps text-on-surface-variant pl-unit">CONFIRM PASSWORD</label>
                        <input id="password_confirmation" name="password_confirmation" required autocomplete="new-password" class="w-full bg-surface-container-low border border-white/10 rounded-lg px-4 py-3 font-body-md text-body-md text-white placeholder-outline focus:outline-none focus:border-primary-container focus:ring-1 focus:ring-primary-container transition-all" placeholder="••••••••" type="password"/>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-error" />
                    </div>

                    <button type="submit" class="w-full py-4 mt-sm rounded-full bg-gradient-to-r from-primary-container to-secondary-container font-label-caps text-label-caps text-white hover:scale-[1.02] transition-transform duration-300 shadow-[0_0_20px_rgba(255,79,163,0.3)] relative overflow-hidden group">
                        <span class="relative z-10">SIGN UP</span>
                        <!-- Holographic Shimmer -->
                        <div class="absolute inset-0 bg-white/20 -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700 ease-out z-0"></div>
                    </button>
                </form>
            </div>
            
            <div class="text-center mt-sm">
                <p class="font-body-md text-body-md text-on-surface-variant text-sm">
                    Already have an account? <a class="text-primary-container hover:text-white transition-colors underline underline-offset-4 decoration-primary-container/30" href="{{ route('login') }}">Sign In</a>
                </p>
            </div>
        </div>
    </section>
</main>
</body>
</html>
