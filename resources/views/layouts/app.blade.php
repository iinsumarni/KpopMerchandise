<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
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
        
        /* Holographic Shimmer Animation Base (Simulated with hover utilities below where needed, keeping CSS clean) */
        .glass-card {
            background-color: rgba(15, 15, 18, 0.72);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 4px 24px rgba(0,0,0,0.2);
        }
        
        .holo-glow {
            background: linear-gradient(135deg, rgba(255,46,147,0.2), rgba(255,93,177,0.1));
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .holo-glow-hover:hover {
            box-shadow: 0 0 30px rgba(255, 46, 147, 0.12);
            transform: scale(1.02);
            background: rgba(255, 241, 247, 0.5);
        }

        .primary-btn-gradient {
            background: linear-gradient(135deg, #FF2E93 0%, #FF5DB1 100%);
            position: relative;
            overflow: hidden;
        }
        .primary-btn-gradient::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.2), transparent);
            transform: rotate(45deg);
            transition: 0.5s;
        }
        .primary-btn-gradient:hover::after {
            left: 100%;
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
    <body class="font-body-md antialiased" style="background-color: #0F0F12; color: #FFFFFF;">
        <x-public-nav />
        <div class="min-h-screen pt-32 pb-24 flex flex-col gap-xl relative">

            <!-- Page Heading -->
            @isset($header)
                <header class="relative z-20 w-full mb-8">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <x-public-footer />
    </body>
</html>
