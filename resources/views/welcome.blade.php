<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Kpop Pocket - High Energy Merch</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@400;700;800;900&amp;family=Plus+Jakarta+Sans:wght@400;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-family: 'Material Symbols Outlined';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
        }

        /* === Premium Dark Mode Holographic System === */
        :root {
            --primary: #FF2E93;
            --secondary: #FF5DB1;
            --dark-accent: #D81B72;
            --tertiary: #FFB7DA;
            --text-main: #FFFFFF;
            --text-muted: #A0A0AB;
            --text-inverse: #121217;
            --bg-main: #1D1014;
            --bg-secondary: #25181C;
            --bg-card: rgba(255, 255, 255, 0.04);
            --border-color: rgba(255, 255, 255, 0.1);
            --glass-bg: rgba(15, 15, 18, 0.72);
            --shadow-soft: 0 20px 60px rgba(0,0,0,0.3);
            --shadow-floating: 0 10px 40px rgba(255, 46, 147, 0.20);
            --hover-glow: 0 0 30px rgba(255,46,147,0.3);
            --holo-glow: linear-gradient(135deg, rgba(255,46,147,0.2), rgba(255,93,177,0.1));
        }

        body {
            background-color: var(--bg-main);
            color: var(--text-main);
            transition: background-color 0.4s ease, color 0.4s ease;
        }

        /* Holographic Glass Card */
        .glass-card {
            background-color: var(--glass-bg);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid var(--border-color);
            transition: all 0.4s ease;
        }

        .glass-card:hover {
            box-shadow: var(--hover-glow);
        }

        .holo-glow {
            background: var(--holo-glow);
        }

        /* Hide scrollbar for horizontal scroll */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "tertiary-fixed": "#7dfe5d",
                      "outline": "#a78992",
                      "inverse-surface": "#f6dce3",
                      "secondary-fixed-dim": "#e6b4ff",
                      "tertiary-container": "#25ab02",
                      "error": "#ffb4ab",
                      "surface-container": "#2a1c20",
                      "on-secondary-fixed": "#30004a",
                      "on-background": "#f6dce3",
                      "on-error-container": "#ffdad6",
                      "on-primary-container": "#5d0034",
                      "surface": "#1d1014",
                      "on-primary-fixed": "#3e0021",
                      "tertiary-fixed-dim": "#61e143",
                      "on-error": "#690005",
                      "inverse-on-surface": "#3c2c31",
                      "on-tertiary-container": "#053500",
                      "surface-dim": "#1d1014",
                      "secondary": "#e6b4ff",
                      "on-tertiary-fixed": "#022100",
                      "primary-fixed": "#ffd9e4",
                      "on-secondary-container": "#dea1ff",
                      "error-container": "#93000a",
                      "on-secondary": "#4f0077",
                      "outline-variant": "#584048",
                      "primary-fixed-dim": "#ffb0cc",
                      "background": "#1d1014",
                      "tertiary": "#61e143",
                      "primary-container": "#ff4fa3",
                      "surface-container-high": "#35262b",
                      "on-primary-fixed-variant": "#8d0051",
                      "secondary-container": "#7401ab",
                      "surface-variant": "#403036",
                      "surface-container-highest": "#403036",
                      "surface-container-low": "#25181c",
                      "on-surface-variant": "#dfbec8",
                      "surface-container-lowest": "#170a0f",
                      "on-tertiary": "#063900",
                      "on-secondary-fixed-variant": "#7000a6",
                      "surface-bright": "#45353a",
                      "inverse-primary": "#b7046c",
                      "on-surface": "#f6dce3",
                      "on-tertiary-fixed-variant": "#0d5300",
                      "secondary-fixed": "#f5d9ff",
                      "primary": "#ffb0cc",
                      "surface-tint": "#ffb0cc",
                      "on-primary": "#640038"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "xs": "8px",
                      "container-padding": "32px",
                      "gutter": "24px",
                      "sm": "16px",
                      "md": "24px",
                      "xl": "80px",
                      "unit": "4px",
                      "lg": "48px"
              },
              "fontFamily": {
                      "h1": [
                              "Epilogue"
                      ],
                      "label-caps": [
                              "Plus Jakarta Sans"
                      ],
                      "h2": [
                              "Epilogue"
                      ],
                      "h3": [
                              "Epilogue"
                      ],
                      "body-md": [
                              "Plus Jakarta Sans"
                      ],
                      "body-lg": [
                              "Plus Jakarta Sans"
                      ]
              },
              "fontSize": {
                      "h1": [
                              "64px",
                              {
                                      "lineHeight": "1.1",
                                      "letterSpacing": "-0.04em",
                                      "fontWeight": "800"
                              }
                      ],
                      "label-caps": [
                              "12px",
                              {
                                      "lineHeight": "1",
                                      "letterSpacing": "0.1em",
                                      "fontWeight": "700"
                              }
                      ],
                      "h2": [
                              "48px",
                              {
                                      "lineHeight": "1.2",
                                      "letterSpacing": "-0.03em",
                                      "fontWeight": "700"
                              }
                      ],
                      "h3": [
                              "32px",
                              {
                                      "lineHeight": "1.2",
                                      "letterSpacing": "-0.02em",
                                      "fontWeight": "700"
                              }
                      ],
                      "body-md": [
                              "16px",
                              {
                                      "lineHeight": "1.6",
                                      "fontWeight": "400"
                              }
                      ],
                      "body-lg": [
                              "18px",
                              {
                                      "lineHeight": "1.6",
                                      "fontWeight": "400"
                              }
                      ]
              }
            }
          }
        }
    </script>
</head>
<body class="font-body-md antialiased transition-colors duration-300" style="background-color: #1D1014; color: #FFFFFF;">
<x-public-nav />
<main class="pt-32 pb-24 flex flex-col gap-xl">
<!-- Hero Banner Slider -->
<section class="relative w-full px-md max-w-[1600px] mx-auto min-h-[716px] flex items-center">
<div class="glass-card hero-bg w-full h-full min-h-[716px] rounded-3xl relative overflow-hidden flex flex-col md:flex-row items-center p-container-padding lg:p-xl gap-lg holo-glow">
<!-- Decorative glow blobs -->
<div class="absolute -top-40 -right-40 w-96 h-96 rounded-full blur-3xl pointer-events-none" style="background: radial-gradient(circle, rgba(255,46,147,0.18), transparent 70%);"></div>
<div class="absolute -bottom-20 -left-20 w-80 h-80 rounded-full blur-3xl pointer-events-none" style="background: radial-gradient(circle, rgba(255,93,177,0.12), transparent 70%);"></div>
<div class="w-full md:w-1/2 z-10 flex flex-col items-start gap-md">
<span class="font-label-caps text-label-caps px-4 py-2 rounded-full border" style="color: var(--primary); background: linear-gradient(135deg, rgba(255,46,147,0.12), rgba(255,93,177,0.06)); border-color: var(--border-color);">✦ LATEST DROP — MAY 2026</span>
<h1 class="font-h1 text-h1 max-w-2xl leading-tight" style="color: var(--text-main); letter-spacing: -0.04em;">
  Collector's Edition<br/><span style="background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">K-pop Merch Drop</span>
</h1>
<p class="font-body-lg max-w-lg mb-4" style="color: var(--text-muted);">Exclusive photobooks, limited lightsticks, and holographic photocards direct from Seoul. Secure yours before they sell out.</p>
<div class="flex gap-4 flex-wrap">
@guest
<a href="{{ route('login') }}" class="inline-flex items-center gap-2 font-label-caps text-label-caps text-white px-8 py-4 rounded-full hover:scale-[1.02] transition-transform duration-300 relative overflow-hidden group" style="background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%); box-shadow: var(--shadow-floating);">
<span class="relative z-10">Shop the Drop</span>
<span class="material-symbols-outlined relative z-10 text-sm">arrow_forward</span>
<div class="absolute inset-0 bg-white/20 -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700 ease-out z-0"></div>
</a>
<a href="#" class="inline-flex items-center gap-2 font-label-caps text-label-caps px-8 py-4 rounded-full border-2 hover:scale-[1.02] transition-all duration-300" style="color: var(--primary); border-color: var(--primary); background: transparent;">View Lookbook</a>
@else
<button class="inline-flex items-center gap-2 font-label-caps text-label-caps text-white px-8 py-4 rounded-full hover:scale-[1.02] transition-transform duration-300 relative overflow-hidden group" style="background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%); box-shadow: var(--shadow-floating);">
<span class="relative z-10">Shop the Drop</span>
<span class="material-symbols-outlined relative z-10 text-sm">arrow_forward</span>
<div class="absolute inset-0 bg-white/20 -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700 ease-out z-0"></div>
</button>
<a href="#" class="inline-flex items-center gap-2 font-label-caps text-label-caps px-8 py-4 rounded-full border-2 hover:scale-[1.02] transition-all duration-300" style="color: var(--primary); border-color: var(--primary); background: transparent;">View Lookbook</a>
@endguest
</div>
<!-- Trust badges -->
<div class="flex gap-6 mt-2">
<div class="flex items-center gap-2" style="color: var(--text-muted);"><span class="material-symbols-outlined text-base" style="color: var(--primary);">verified</span><span class="text-xs font-semibold">100% Official</span></div>
<div class="flex items-center gap-2" style="color: var(--text-muted);"><span class="material-symbols-outlined text-base" style="color: var(--primary);">local_shipping</span><span class="text-xs font-semibold">Free Intl. Shipping</span></div>
<div class="flex items-center gap-2" style="color: var(--text-muted);"><span class="material-symbols-outlined text-base" style="color: var(--primary);">lock</span><span class="text-xs font-semibold">Secure Checkout</span></div>
</div>
</div>
<div class="w-full md:w-1/2 h-full min-h-[400px] relative z-10 flex justify-center items-center">
<div class="relative w-full max-w-md aspect-square rounded-3xl overflow-hidden" style="box-shadow: var(--shadow-floating);">
<img alt="Holographic kpop merch drop" class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCkCFOa9lYc5Cc-a2V4oxjDEBBPLwPDdaf4-g4dGbx4S712yASQiWTsh6yShn-_-1qYMZBo8dEaWtsLOW4Inxs1OZrZ2gMqW2h3efVNKrpYtZbMR5Vp6yBOQwJUyPiMo26hOS7tTrvs99VX5Is1_9ieTRv8DAP6go-66zSm6ptQ0NJdQ-BS7mm14BJl9jeJ-D2lOO8TY8YfYIfg12qkeCtUQzsNgkdrleLoffrW7RJTHdaJbmdC_q0lIK6Bz6GxR7UyEPpHXPhkijg"/>
<div class="absolute bottom-4 left-4 right-4 glass-card rounded-2xl p-4">
<div class="flex items-center justify-between">
<div><p class="text-xs font-bold" style="color: var(--primary);">NEW DROP</p><p class="font-bold" style="color: var(--text-main);">Midnight Sun EP — Holo Ver.</p><p class="text-xs" style="color: var(--text-muted);">Only 500 units worldwide</p></div>
<div class="text-right"><p class="font-bold text-lg" style="color: var(--primary);">Rp 450K</p><div class="w-24 h-1.5 rounded-full mt-1" style="background: var(--border-color);"><div class="h-full rounded-full" style="width: 78%; background: linear-gradient(90deg, var(--primary), var(--secondary));"></div></div><p class="text-xs mt-1" style="color: var(--text-muted);">78% sold</p></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Categories Section -->
<section class="max-w-7xl mx-auto px-md w-full">
<div class="flex flex-wrap justify-center gap-sm md:gap-gutter">
<div class="glass-card rounded-full px-6 py-3 flex items-center gap-3 cursor-pointer hover:scale-[1.02] transition-all duration-300" style="border-color: var(--border-color);">
<span class="material-symbols-outlined" style="color: var(--primary); font-variation-settings: 'FILL' 1;">album</span>
<span class="font-label-caps text-label-caps" style="color: var(--text-main);">Album</span>
</div>
<div class="glass-card rounded-full px-6 py-3 flex items-center gap-3 cursor-pointer hover:scale-[1.02] transition-all duration-300" style="border-color: var(--border-color);">
<span class="material-symbols-outlined" style="color: var(--secondary); font-variation-settings: 'FILL' 1;">style</span>
<span class="font-label-caps text-label-caps" style="color: var(--text-main);">Photocard</span>
</div>
<div class="glass-card rounded-full px-6 py-3 flex items-center gap-3 cursor-pointer hover:scale-[1.02] transition-all duration-300" style="border-color: var(--border-color);">
<span class="material-symbols-outlined" style="color: var(--dark-accent); font-variation-settings: 'FILL' 1;">flashlight_on</span>
<span class="font-label-caps text-label-caps" style="color: var(--text-main);">Lightstick</span>
</div>
<div class="glass-card rounded-full px-6 py-3 flex items-center gap-3 cursor-pointer hover:scale-[1.02] transition-all duration-300" style="border-color: var(--border-color);">
<span class="material-symbols-outlined" style="color: var(--primary); font-variation-settings: 'FILL' 1;">checkroom</span>
<span class="font-label-caps text-label-caps" style="color: var(--text-main);">Apparel</span>
</div>
<div class="glass-card rounded-full px-6 py-3 flex items-center gap-3 cursor-pointer hover:scale-[1.02] transition-all duration-300" style="border-color: var(--border-color);">
<span class="material-symbols-outlined" style="color: var(--secondary); font-variation-settings: 'FILL' 1;">favorite</span>
<span class="font-label-caps text-label-caps" style="color: var(--text-main);">Accessories</span>
</div>
<div class="glass-card rounded-full px-6 py-3 flex items-center gap-3 cursor-pointer hover:scale-[1.02] transition-all duration-300" style="border-color: var(--border-color);">
<span class="material-symbols-outlined" style="color: var(--dark-accent); font-variation-settings: 'FILL' 1;">speaker</span>
<span class="font-label-caps text-label-caps" style="color: var(--text-main);">Vinyl</span>
</div>
</div>
</section>
<!-- Bento Grid Promo Section -->
<section class="max-w-7xl mx-auto px-md w-full">
<div class="flex items-end justify-between mb-10">
<h2 class="font-h2 text-h2" style="color: var(--text-main);">Featured Drops</h2>
<span class="font-label-caps text-label-caps" style="color: var(--primary);">05 / 2026</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter auto-rows-[250px]">
<!-- Bento Cell 1: Large span with real product -->
<div class="glass-card rounded-2xl p-container-padding relative overflow-hidden group col-span-1 md:col-span-2 row-span-2 flex flex-col justify-end transition-all duration-500 hover:scale-[1.01]">
<div class="absolute inset-0 z-0">
<img alt="Midnight Sun EP Holo" class="w-full h-full object-cover opacity-50 group-hover:opacity-70 transition-opacity duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAdH3ZJMaqsdf4mWe1peLC1ZiNRqLg-t495vlrdMjn4VlTev8jUa-V76nlHO1xesjaYFgNtaJkXbt60klwYU9pLO51bM9Tg3Xd5vRDNFepvNCQU_cqHLwoZ0YoCOCBNz0uKENonemrCmvdHkUPRGEImNfrixq3Sq-8GfP8pc_eSsLW36H-O7h68X9nLg_LTsmZlwWBwoM8vzpUT2kwzy4ggAGLNJMgMBIv0C1Vjg4qSMywLjeTKSgpOnkHOUXR8suHE5i3AdLUEvOU"/>
</div>
<div class="absolute inset-0 z-0" style="background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, transparent 60%);"></div>
<div class="relative z-10">
<span class="inline-block font-label-caps text-label-caps text-white px-3 py-1 rounded-full mb-3" style="background: linear-gradient(135deg, var(--primary), var(--secondary));">Pre-order Open</span>
<h3 class="font-h3 text-h3 text-white mb-1">Midnight Sun EP</h3>
<p class="font-body-md text-sm mb-4" style="color: rgba(255,255,255,0.7);">Holographic sleeve + 3 random photocards. Limited to 500 units.</p>
<div class="flex items-center justify-between">
<span class="text-white font-bold text-xl">Rp 450.000</span>
            <button class="font-label-caps text-label-caps text-white px-6 py-2 rounded-full hover:scale-[1.02] transition-transform duration-300 relative overflow-hidden group" style="background: linear-gradient(135deg, var(--primary), var(--secondary));">
                <span class="relative z-10">Pre-order</span>
                <div class="absolute inset-0 bg-white/20 -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700 ease-out z-0"></div>
            </button>
</div>
</div>
</div>
<!-- Bento Cell 2: Photocard set -->
<div class="glass-card rounded-2xl p-container-padding relative overflow-hidden group col-span-1 md:col-span-2 row-span-1 flex flex-col justify-between transition-all duration-500 hover:scale-[1.02]">
<div class="absolute inset-0 z-0">
<img alt="Holo Photocard Set" class="w-full h-full object-cover opacity-30 group-hover:opacity-50 transition-opacity duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCWSc-HDeBOr-Y59vtsCHQThyU_2ojCeOr8_OD1lL27w2pfv0DkyQB-IuxF1ethbdiCeWXrOe0C8j-ALHC0J4kU8r-q7Dge-akD6kf3HxjBCvoZ7-HaaHl-cvqw9QgnjcBH0T9N6_OU1-wzBZBC9UvHfpFEKl94TjzZIMg3B2fpMCTzYhW1dKa_k1BANDY-bKf0UikHFMAT7esLSODlTUm33fj8ybKt4-C-hQrqFj-CmmLJ6_LyPX_SPogFt6pmd9FIaIh-CfZsTxk"/>
</div>
<div class="relative z-10 flex justify-between items-start">
<span class="font-label-caps text-label-caps px-3 py-1 rounded-full" style="background: linear-gradient(135deg, rgba(255,46,147,0.15), rgba(255,93,177,0.08)); color: var(--primary); border: 1px solid var(--border-color);">Limited Photocard</span>
<span class="material-symbols-outlined group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" style="color: var(--primary);">arrow_outward</span>
</div>
<div class="relative z-10 mt-auto">
<h3 class="font-h3 text-2xl font-bold" style="color: var(--text-main);">Holo Set Vol. 4</h3>
<p class="text-sm mt-1" style="color: var(--text-muted);">12 cards · SSR Foil Edition · Rp 250.000</p>
</div>
</div>
<!-- Bento Cell 3: Best seller badge -->
<div class="glass-card rounded-2xl p-container-padding relative overflow-hidden group col-span-1 md:col-span-1 row-span-1 flex flex-col justify-center items-center text-center transition-all duration-500 hover:scale-[1.02]" style="background: linear-gradient(135deg, rgba(255,46,147,0.12), rgba(255,93,177,0.06));">
<span class="material-symbols-outlined text-4xl mb-3" style="color: var(--primary); font-variation-settings: 'FILL' 1;">star</span>
<h3 class="font-label-caps text-label-caps tracking-widest" style="color: var(--primary);">BEST SELLER</h3>
<p class="text-xs mt-2" style="color: var(--text-muted);">Tour Lightstick V2</p>
<p class="font-bold mt-1" style="color: var(--text-main);">Rp 850.000</p>
</div>
<!-- Bento Cell 4: Coming soon -->
<div class="glass-card rounded-2xl p-container-padding relative overflow-hidden group col-span-1 md:col-span-1 row-span-1 flex flex-col justify-end transition-all duration-500 hover:scale-[1.02]">
<div class="absolute inset-0 bg-cover bg-center opacity-40 group-hover:opacity-60 transition-opacity duration-700 z-0" style="background-image: url('https://images.unsplash.com/photo-1557672172-298e090bd0f1?auto=format&fit=crop&q=80&w=800');"></div>
<div class="absolute inset-0 z-0" style="background: linear-gradient(to top, rgba(0,0,0,0.6) 0%, transparent 70%);"></div>
<div class="relative z-10">
<span class="font-label-caps text-label-caps text-white text-xs">COMING SOON</span>
<h3 class="font-h3 text-xl font-bold text-white mt-1">Winter Tour Merch</h3>
<p class="text-xs text-white/60 mt-1">Dec 2026 · Pre-register</p>
</div>
</div>
</div>
</section>
<!-- Product Summary: Horizontal scrolling "New Arrivals" -->
<section class="w-full px-md pl-md md:pl-[max(1.5rem,calc((100%-80rem)/2))] overflow-hidden">
<div class="flex items-end justify-between mb-8 pr-md md:pr-[max(1.5rem,calc((100%-80rem)/2))]">
<h2 class="font-h2 text-h2" style="color: var(--text-main);">New Arrivals</h2>
<a class="font-label-caps text-label-caps flex items-center gap-1" href="#" style="color: var(--primary);">VIEW ALL <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
</div>
<div class="flex overflow-x-auto snap-x snap-mandatory gap-gutter pb-8 no-scrollbar pr-8">
<!-- Product Card 1 -->
<div class="glass-card min-w-[280px] max-w-[280px] aspect-[3/4] rounded-2xl p-4 flex flex-col snap-start group hover:bg-white/5 transition-all duration-300">
<div class="w-full h-[65%] rounded-xl overflow-hidden relative mb-4">
<img alt="Minimalist pastel album packaging" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="Minimalist soft pink and white kpop album box on a clean dark surface with soft lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB8ExMWdHP_HFqvtNSH7Tmf3WaiaiL9hlvEL0cXjo7n7csmde__3dzHLjyrWRA-8rsMaJJBWj0DT9VlgO1EIFLJ5saGuHFrAKC2qbn_QFP-6nQ63EZrcDLy8W5BBbPU-0Db4mhg5N1yXR1fNEEkv0SClg0basKbECOk7LpcQmgp39g_oaOqJyau8IeKGm7tEkLeeqczkJspiXi9_b1ZgXcZqZzFlEpcpQ0wViDw6PMli7SbNE0yzpEYk0HLitqdwsXtTUDfCB_F2co"/>
<div class="absolute top-3 left-3">
<span class="font-label-caps text-[10px] px-2 py-1 rounded-full font-bold text-white" style="background: linear-gradient(135deg, var(--primary), var(--secondary));">IN STOCK</span>
</div>
</div>
<div class="flex flex-col flex-grow justify-between">
<div>
<div class="flex items-center gap-1 mb-1">
<span class="material-symbols-outlined text-primary text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<h4 class="font-body-lg font-bold line-clamp-1" style="color: var(--text-main);">Dreamscape Album Vol. 1</h4>
<p class="font-body-md text-sm line-clamp-1" style="color: var(--text-muted);">Standard Edition · Rp 320.000</p>
</div>
<div class="flex justify-between items-center mt-2">
<span class="font-bold text-lg" style="color: var(--primary);">Rp 320.000</span>
@guest
<a href="{{ route('login') }}" aria-label="Login to add to cart" class="inline-flex rounded-full p-2.5 bg-white/5 border border-white/10 text-white hover:bg-[#FF2E93] hover:border-[#FF2E93] hover:scale-110 transition-all duration-300">
<span class="material-symbols-outlined text-sm">add</span>
</a>
@else
<button aria-label="Add to cart" class="rounded-full p-2.5 bg-white/5 border border-white/10 text-white hover:bg-[#FF2E93] hover:border-[#FF2E93] hover:scale-110 transition-all duration-300">
<span class="material-symbols-outlined text-sm">add</span>
</button>
@endguest
</div>
</div>
</div>
<!-- Product Card 2 -->
<div class="glass-card min-w-[280px] max-w-[280px] aspect-[3/4] rounded-2xl p-4 flex flex-col snap-start group hover:bg-white/5 transition-all duration-300">
<div class="w-full h-[65%] rounded-xl overflow-hidden relative mb-4">
<img alt="Holographic lightstick design" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="Glowing futuristic kpop lightstick with pink and purple led lights in a dark room" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBkO9KXcIIykpA49e68MklXrChLpJd3XEzqvoctFjriJtOL7idk9YnUxqDpJWjVn9oQaVxjvKS4f6IGx13de9GsBot8JkuJAReqS2_oMtIJiwWTW6bZZhZ27s8oms-I1aC4FD8GWa_aT_qwDrBgvhEHU5YJB0eOfvWXbjWDaWfYSS9nHNloFBC2yoJmOjd7E3mEL07_jHIg1MT2qlaWLdBJlaGt6JMsTAgmFf7eGAdTr095SNHQFJ15XOJG0-L4TPhHqkqc_JX2WyU"/>
<div class="absolute top-3 left-3">
<span class="font-label-caps text-[10px] px-2 py-1 rounded-full font-bold text-white" style="background: rgba(255,77,109,0.85);">LOW STOCK</span>
</div>
</div>
<div class="flex flex-col flex-grow justify-between">
<div>
<div class="flex items-center gap-1 mb-1">
<span class="material-symbols-outlined text-primary text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-outline-variant text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<h4 class="font-body-lg font-bold line-clamp-1" style="color: var(--text-main);">Official Tour Lightstick V2</h4>
<p class="font-body-md text-sm line-clamp-1" style="color: var(--text-muted);">Bluetooth Sync · Rp 850.000</p>
</div>
<div class="flex justify-between items-center mt-2">
<span class="font-bold text-lg" style="color: var(--primary);">Rp 850.000</span>
@guest
<a href="{{ route('login') }}" aria-label="Login to add to cart" class="inline-flex rounded-full p-2.5 bg-white/5 border border-white/10 text-white hover:bg-[#FF2E93] hover:border-[#FF2E93] hover:scale-110 transition-all duration-300">
<span class="material-symbols-outlined text-sm">add</span>
</a>
@else
<button aria-label="Add to cart" class="rounded-full p-2.5 bg-white/5 border border-white/10 text-white hover:bg-[#FF2E93] hover:border-[#FF2E93] hover:scale-110 transition-all duration-300">
<span class="material-symbols-outlined text-sm">add</span>
</button>
@endguest
</div>
</div>
</div>
<!-- Product Card 3 -->
<div class="glass-card min-w-[280px] max-w-[280px] aspect-[3/4] rounded-2xl p-4 flex flex-col snap-start group hover:bg-white/5 transition-all duration-300">
<div class="w-full h-[65%] rounded-xl overflow-hidden relative mb-4">
<img alt="Stack of glossy photocards" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="Stack of glossy kpop photocards with holographic edges sitting on a black reflective surface" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCWSc-HDeBOr-Y59vtsCHQThyU_2ojCeOr8_OD1lL27w2pfv0DkyQB-IuxF1ethbdiCeWXrOe0C8j-ALHC0J4kU8r-q7Dge-akD6kf3HxjBCvoZ7-HaaHl-cvqw9QgnjcBH0T9N6_OU1-wzBZBC9UvHfpFEKl94TjzZIMg3B2fpMCTzYhW1dKa_k1BANDY-bKf0UikHFMAT7esLSODlTUm33fj8ybKt4-C-hQrqFj-CmmLJ6_LyPX_SPogFt6pmd9FIaIh-CfZsTxk"/>
<div class="absolute top-3 left-3">
<span class="bg-primary-container text-on-primary-container font-label-caps text-[10px] px-2 py-1 rounded-full font-bold">IN STOCK</span>
</div>
</div>
<div class="flex flex-col flex-grow justify-between">
<div>
<div class="flex items-center gap-1 mb-1">
<span class="material-symbols-outlined text-primary text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<h4 class="font-body-lg font-bold text-on-surface line-clamp-1">Mystery Card Pack</h4>
<p class="font-body-md text-on-surface-variant text-sm line-clamp-1">3 Random Holo Cards</p>
</div>
<div class="flex justify-between items-center mt-2">
<span class="font-h3 text-lg text-white">$12.00</span>
@guest
<a href="{{ route('login') }}" aria-label="Login to add to cart" class="inline-flex rounded-full p-2.5 bg-white/5 border border-white/10 text-white hover:bg-[#FF2E93] hover:border-[#FF2E93] hover:scale-110 transition-all duration-300">
<span class="material-symbols-outlined text-sm">add</span>
</a>
@else
<button aria-label="Add to cart" class="rounded-full p-2.5 bg-white/5 border border-white/10 text-white hover:bg-[#FF2E93] hover:border-[#FF2E93] hover:scale-110 transition-all duration-300">
<span class="material-symbols-outlined text-sm">add</span>
</button>
@endguest
</div>
</div>
</div>
<!-- Product Card 4 -->
<div class="glass-card min-w-[280px] max-w-[280px] aspect-[3/4] rounded-2xl p-4 flex flex-col snap-start group hover:bg-white/5 transition-all duration-300">
<div class="w-full h-[65%] rounded-xl overflow-hidden relative mb-4">
<img alt="Stylized fashion photography" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="High fashion photography of a black hoodie with neon pink graphic text on a dark atmospheric background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCq27i3QxYt5D47s9wpYV0NhNPJAX07iAasNmvtxtjWEifg83vR8SYU681d_qU7am19qJoc5i8sa7cTRUKmx0M2J6O9Vjx4OnDYtX1tDudl4PnSy4lGsdzJFDC9yRzjdKyghkP1FldnZgc-LwyJfkYifM7o0G9hk3iAj6cAe2_KQiF60W-p-keNDkU7KIidI_fco5cNVXIMzUX4N7G59QwGzzrYB2VUyOmibrSowCL9uebnOTN0dFu_XBAuaQDCqCXCseDyYa_sdoQ"/>
<div class="absolute top-3 left-3">
<span class="bg-secondary-container text-white font-label-caps text-[10px] px-2 py-1 rounded-full font-bold">NEW</span>
</div>
</div>
<div class="flex flex-col flex-grow justify-between">
<div>
<div class="flex items-center gap-1 mb-1">
<span class="material-symbols-outlined text-primary text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary text-sm" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<h4 class="font-body-lg font-bold text-on-surface line-clamp-1">Tour Hoodie '24</h4>
<p class="font-body-md text-on-surface-variant text-sm line-clamp-1">Oversized Fit</p>
</div>
<div class="flex justify-between items-center mt-2">
<span class="font-h3 text-lg text-white">$65.00</span>
@guest
<a href="{{ route('login') }}" aria-label="Login to add to cart" class="inline-flex rounded-full p-2.5 bg-white/5 border border-white/10 text-white hover:bg-[#FF2E93] hover:border-[#FF2E93] hover:scale-110 transition-all duration-300">
<span class="material-symbols-outlined text-sm">add</span>
</a>
@else
<button aria-label="Add to cart" class="rounded-full p-2.5 bg-white/5 border border-white/10 text-white hover:bg-[#FF2E93] hover:border-[#FF2E93] hover:scale-110 transition-all duration-300">
<span class="material-symbols-outlined text-sm">add</span>
</button>
@endguest
</div>
</div>
</div>
</div>
</section>
<!-- Trending Products Section -->
<section class="max-w-7xl mx-auto px-md w-full mt-10">
    <div class="flex items-end justify-between mb-8">
        <h2 class="font-h2 text-h2" style="color: var(--text-main);">Trending Now</h2>
        <a class="font-label-caps text-label-caps flex items-center gap-1" href="#" style="color: var(--primary);">VIEW ALL <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-gutter">
        <div class="glass-card aspect-[3/4] rounded-2xl p-4 flex flex-col group transition-all duration-300">
            <div class="w-full h-[65%] rounded-xl overflow-hidden relative mb-4">
                <img alt="Retro Cassette" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="https://images.unsplash.com/photo-1611078720138-038753232ea2?auto=format&fit=crop&q=80&w=400"/>
                <div class="absolute top-3 left-3"><span class="font-label-caps text-[10px] px-2 py-1 rounded-full font-bold text-white" style="background: var(--primary);">HOT</span></div>
            </div>
            <div class="flex flex-col flex-grow justify-between">
                <div><h4 class="font-body-lg font-bold line-clamp-1" style="color: var(--text-main);">Retro Cassette Ver.</h4><p class="text-sm line-clamp-1" style="color: var(--text-muted);">Limited Edition</p></div>
                <div class="flex justify-between items-center mt-2">
                    <span class="font-bold text-lg" style="color: var(--primary);">Rp 380.000</span>
                                        <button class="rounded-full p-2.5 bg-white/5 border border-white/10 text-white hover:bg-[#FF2E93] hover:border-[#FF2E93] hover:scale-110 transition-all duration-300"><span class="material-symbols-outlined text-sm">add</span></button>
                </div>
            </div>
        </div>
        <div class="glass-card aspect-[3/4] rounded-2xl p-4 flex flex-col group transition-all duration-300">
            <div class="w-full h-[65%] rounded-xl overflow-hidden relative mb-4">
                <img alt="Poster Set" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="https://images.unsplash.com/photo-1557672172-298e090bd0f1?auto=format&fit=crop&q=80&w=400"/>
                <div class="absolute top-3 left-3"><span class="font-label-caps text-[10px] px-2 py-1 rounded-full font-bold text-white" style="background: var(--primary);">HOT</span></div>
            </div>
            <div class="flex flex-col flex-grow justify-between">
                <div><h4 class="font-body-lg font-bold line-clamp-1" style="color: var(--text-main);">Aesthetic Poster Set</h4><p class="text-sm line-clamp-1" style="color: var(--text-muted);">Set of 5 · A3 Size</p></div>
                <div class="flex justify-between items-center mt-2">
                    <span class="font-bold text-lg" style="color: var(--primary);">Rp 200.000</span>
                                        <button class="rounded-full p-2.5 bg-white/5 border border-white/10 text-white hover:bg-[#FF2E93] hover:border-[#FF2E93] hover:scale-110 transition-all duration-300"><span class="material-symbols-outlined text-sm">add</span></button>
                </div>
            </div>
        </div>
        <div class="glass-card aspect-[3/4] rounded-2xl p-4 flex flex-col group transition-all duration-300">
            <div class="w-full h-[65%] rounded-xl overflow-hidden relative mb-4">
                <img alt="Enamel Pin Set" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="https://images.unsplash.com/photo-1516280440502-29bc62757271?auto=format&fit=crop&q=80&w=400"/>
            </div>
            <div class="flex flex-col flex-grow justify-between">
                <div><h4 class="font-body-lg font-bold line-clamp-1" style="color: var(--text-main);">Enamel Pin Set</h4><p class="text-sm line-clamp-1" style="color: var(--text-muted);">Mascot Series · 4 pcs</p></div>
                <div class="flex justify-between items-center mt-2">
                    <span class="font-bold text-lg" style="color: var(--primary);">Rp 240.000</span>
                                        <button class="rounded-full p-2.5 bg-white/5 border border-white/10 text-white hover:bg-[#FF2E93] hover:border-[#FF2E93] hover:scale-110 transition-all duration-300"><span class="material-symbols-outlined text-sm">add</span></button>
                </div>
            </div>
        </div>
        <div class="glass-card aspect-[3/4] rounded-2xl p-4 flex flex-col group transition-all duration-300">
            <div class="w-full h-[65%] rounded-xl overflow-hidden relative mb-4">
                <img alt="Mini Crossbody" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="https://images.unsplash.com/photo-1542204165-65bf26472b9b?auto=format&fit=crop&q=80&w=400"/>
            </div>
            <div class="flex flex-col flex-grow justify-between">
                <div><h4 class="font-body-lg font-bold line-clamp-1" style="color: var(--text-main);">Mini Crossbody Bag</h4><p class="text-sm line-clamp-1" style="color: var(--text-muted);">Tour Merch · Pink</p></div>
                <div class="flex justify-between items-center mt-2">
                    <span class="font-bold text-lg" style="color: var(--primary);">Rp 600.000</span>
                                        <button class="rounded-full p-2.5 bg-white/5 border border-white/10 text-white hover:bg-[#FF2E93] hover:border-[#FF2E93] hover:scale-110 transition-all duration-300"><span class="material-symbols-outlined text-sm">add</span></button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Limited Stock Items Section -->
<section class="max-w-7xl mx-auto px-md w-full mt-16 mb-8">
    <div class="glass-card rounded-3xl p-10 md:p-16 flex flex-col md:flex-row items-center justify-between holo-glow gap-8" style="border: 1px solid var(--border-color); box-shadow: var(--shadow-floating);">
        <div class="flex-1 text-center md:text-left">
            <span class="font-label-caps text-[12px] px-3 py-1 rounded-full border mb-4 inline-block" style="color: var(--primary); border-color: var(--border-color); background: linear-gradient(135deg, rgba(255,46,147,0.1), rgba(255,93,177,0.05));">⚡ LIMITED STOCK — 47 LEFT</span>
            <h2 class="font-h2 text-h2 mb-4" style="color: var(--text-main);">Collector's Edition Vinyl</h2>
            <p class="font-body-lg max-w-lg mb-6" style="color: var(--text-muted);">Only 500 copies pressed worldwide. Features exclusive translucent pink vinyl and holographic gatefold. Ships with signed insert card.</p>
            <div class="flex items-center gap-4 flex-wrap justify-center md:justify-start">
                                <button class="font-label-caps text-label-caps text-white px-8 py-4 rounded-full hover:scale-[1.02] transition-transform duration-300 relative overflow-hidden group" style="background: linear-gradient(135deg, var(--primary), var(--secondary)); box-shadow: var(--shadow-floating);">
                    <span class="relative z-10">Grab Yours Now</span>
                    <div class="absolute inset-0 bg-white/20 -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-700 ease-out z-0"></div>
                </button>
                <span class="font-bold text-2xl" style="color: var(--primary);">Rp 1.200.000</span>
            </div>
        </div>
        <div class="flex-1 flex justify-center md:justify-end">
            <div class="w-64 h-64 md:w-80 md:h-80 rounded-full overflow-hidden border-4" style="border-color: var(--border-color); box-shadow: var(--shadow-floating);">
                <img alt="Pink Translucent Vinyl" class="w-full h-full object-cover animate-[spin_20s_linear_infinite]" src="https://images.unsplash.com/photo-1538370965046-79c0d6907d47?auto=format&fit=crop&q=80&w=600"/>
            </div>
        </div>
    </div>
</section>
</main>
<x-public-footer />
</body></html>
