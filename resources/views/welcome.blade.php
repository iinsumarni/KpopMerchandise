<x-app-layout>
    <main class="pt-32 pb-24 flex flex-col gap-xl">
        <!-- Hero Banner Slider -->
        <section class="relative w-full px-md max-w-[1600px] mx-auto min-h-[716px] flex items-center">
            <div class="glass-card w-full h-full min-h-[716px] rounded-3xl relative overflow-hidden flex flex-col md:flex-row items-center p-container-padding lg:p-xl gap-lg holo-glow">
                <!-- Background decorative elements -->
                <div class="absolute -top-40 -right-40 w-96 h-96 bg-primary-container/20 rounded-full blur-3xl mix-blend-screen pointer-events-none"></div>
                <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-secondary-container/20 rounded-full blur-3xl mix-blend-screen pointer-events-none"></div>
                <div class="w-full md:w-1/2 z-10 flex flex-col items-start gap-md">
                    <span class="font-label-caps text-label-caps text-primary-fixed bg-primary-container/20 px-4 py-2 rounded-full border border-primary-container/30">LATEST DROP</span>
                    <h1 class="font-h1 text-h1 text-on-background max-w-2xl leading-tight">
                        Limited Kpop Merch Drop
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-lg mb-4">
                        Exclusive photobooks, lightsticks, and holographic photocards straight from Seoul. Secure your bias before they sell out.
                    </p>
                    <button class="relative overflow-hidden bg-gradient-to-r from-primary-container to-secondary-container text-white font-label-caps text-label-caps px-8 py-4 rounded-full transition-all duration-300 hover:scale-[1.02] active:scale-95 group shadow-[0_8px_32px_rgba(255,79,163,0.3)]">
                        <span class="relative z-10">Shop Now</span>
                        <!-- Holographic Shimmer Effect -->
                        <div class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/40 to-transparent group-hover:animate-[shimmer_1.5s_infinite] skew-x-12"></div>
                    </button>
                </div>
                <div class="w-full md:w-1/2 h-full min-h-[400px] relative z-10 flex justify-center items-center">
                    <div class="relative w-full max-w-md aspect-square rounded-2xl overflow-hidden glass-card shadow-[0_20px_50px_rgba(116,1,171,0.2)]">
                        <img alt="3D style holographic pop merch boxes and floating CDs in vibrant lighting" class="w-full h-full object-cover mix-blend-luminosity opacity-80 hover:opacity-100 transition-opacity duration-500" data-alt="3D render of vibrant holographic kpop album packaging and floating CDs with neon pink and purple studio lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCkCFOa9lYc5Cc-a2V4oxjDEBBPLwPDdaf4-g4dGbx4S712yASQiWTsh6yShn-_-1qYMZBo8dEaWtsLOW4Inxs1OZrZ2gMqW2h3efVNKrpYtZbMR5Vp6yBOQwJUyPiMo26hOS7tTrvs99VX5Is1_9ieTRv8DAP6go-66zSm6ptQ0NJdQ-BS7mm14BJl9jeJ-D2lOO8TY8YfYIfg12qkeCtUQzsNgkdrleLoffrW7RJTHdaJbmdC_q0lIK6Bz6GxR7UyEPpHXPhkijg"/>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Categories Section -->
        <section class="max-w-7xl mx-auto px-md w-full">
            <div class="flex flex-wrap justify-center gap-sm md:gap-gutter">
                <div class="glass-card rounded-full px-6 py-3 flex items-center gap-3 cursor-pointer hover:bg-white/5 hover:scale-[1.02] transition-all duration-300 border border-white/5 hover:border-primary-container/50">
                    <span class="material-symbols-outlined text-primary-container" data-icon="album" style="font-variation-settings: 'FILL' 1;">album</span>
                    <span class="font-label-caps text-label-caps text-on-surface">Album</span>
                </div>
                <div class="glass-card rounded-full px-6 py-3 flex items-center gap-3 cursor-pointer hover:bg-white/5 hover:scale-[1.02] transition-all duration-300 border border-white/5 hover:border-secondary-container/50">
                    <span class="material-symbols-outlined text-secondary" data-icon="style" style="font-variation-settings: 'FILL' 1;">style</span>
                    <span class="font-label-caps text-label-caps text-on-surface">Photocard</span>
                </div>
                <div class="glass-card rounded-full px-6 py-3 flex items-center gap-3 cursor-pointer hover:bg-white/5 hover:scale-[1.02] transition-all duration-300 border border-white/5 hover:border-tertiary-fixed/50">
                    <span class="material-symbols-outlined text-tertiary-fixed" data-icon="flashlight_on" style="font-variation-settings: 'FILL' 1;">flashlight_on</span>
                    <span class="font-label-caps text-label-caps text-on-surface">Lightstick</span>
                </div>
                <div class="glass-card rounded-full px-6 py-3 flex items-center gap-3 cursor-pointer hover:bg-white/5 hover:scale-[1.02] transition-all duration-300 border border-white/5 hover:border-primary-fixed/50">
                    <span class="material-symbols-outlined text-primary-fixed" data-icon="checkroom" style="font-variation-settings: 'FILL' 1;">checkroom</span>
                    <span class="font-label-caps text-label-caps text-on-surface">Apparel</span>
                </div>
            </div>
        </section>

        <!-- Bento Grid Promo Section -->
        <section class="max-w-7xl mx-auto px-md w-full">
            <h2 class="font-h2 text-h2 text-on-background mb-10 text-center">Featured Drops</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-gutter auto-rows-[250px]">
                <!-- Bento Cell 1: Large Span -->
                <div class="glass-card rounded-2xl p-container-padding relative overflow-hidden group col-span-1 md:col-span-2 row-span-2 flex flex-col justify-end transition-all duration-500 hover:scale-[1.01]">
                    <div class="absolute inset-0 z-0">
                        <img alt="Abstract fluid holographic waves" class="w-full h-full object-cover opacity-40 group-hover:opacity-60 transition-opacity duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAdH3ZJMaqsdf4mWe1peLC1ZiNRqLg-t495vlrdMjn4VlTev8jUa-V76nlHO1xesjaYFgNtaJkXbt60klwYU9pLO51bM9Tg3Xd5vRDNFepvNCQU_cqHLwoZ0YoCOCBNz0uKENonemrCmvdHkUPRGEImNfrixq3Sq-8GfP8pc_eSsLW36H-O7h68X9nLg_LTsmZlwWBwoM8vzpUT2kwzy4ggAGLNJMgMBIv0C1Vjg4qSMywLjeTKSgpOnkHOUXR8suHE5i3AdLUEvOU"/>
                    </div>
                    <!-- Hover Holographic Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-container/0 to-transparent group-hover:from-primary-container/30 transition-all duration-500 z-0 mix-blend-overlay"></div>
                    <div class="relative z-10">
                        <span class="inline-block bg-surface-container/80 backdrop-blur-md font-label-caps text-label-caps text-primary px-3 py-1 rounded-full mb-4 border border-white/10">Pre-order Open</span>
                        <h3 class="font-h3 text-h3 text-white mb-2">Midnight Sun EP</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant max-w-sm">Exclusive holographic sleeve + 3 random photocards. Secure yours now.</p>
                    </div>
                </div>
                <!-- Bento Cell 2 -->
                <div class="glass-card rounded-2xl p-container-padding relative overflow-hidden group col-span-1 md:col-span-2 row-span-1 flex flex-col justify-between transition-all duration-500 hover:scale-[1.02]">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-container/0 to-transparent group-hover:from-secondary-container/20 transition-all duration-500 z-0"></div>
                    <div class="relative z-10 flex justify-between items-start">
                        <span class="bg-surface-container/80 backdrop-blur-md font-label-caps text-label-caps text-secondary px-3 py-1 rounded-full border border-white/10">Limited Photocard</span>
                        <span class="material-symbols-outlined text-outline-variant group-hover:text-secondary transition-colors" data-icon="arrow_outward">arrow_outward</span>
                    </div>
                    <div class="relative z-10 mt-auto">
                        <h3 class="font-h3 text-h3 text-white text-2xl">Holo Set Vol. 4</h3>
                    </div>
                </div>
                <!-- Bento Cell 3 -->
                <div class="glass-card rounded-2xl p-container-padding relative overflow-hidden group col-span-1 md:col-span-1 row-span-1 flex flex-col justify-center items-center text-center transition-all duration-500 hover:scale-[1.02] bg-gradient-to-b from-surface-container to-surface-container-low">
                    <div class="absolute inset-0 bg-primary-container/0 group-hover:bg-primary-container/10 transition-all duration-500 z-0 mix-blend-screen"></div>
                    <div class="relative z-10">
                        <span class="material-symbols-outlined text-4xl text-primary mb-3 block" data-icon="star" style="font-variation-settings: 'FILL' 1;">star</span>
                        <h3 class="font-label-caps text-label-caps text-white tracking-widest">BEST SELLER</h3>
                    </div>
                </div>
                <!-- Bento Cell 4 -->
                <div class="glass-card rounded-2xl p-container-padding relative overflow-hidden group col-span-1 md:col-span-1 row-span-1 flex flex-col justify-end transition-all duration-500 hover:scale-[1.02]">
                    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1557672172-298e090bd0f1?auto=format&amp;fit=crop&amp;q=80&amp;w=800')] bg-cover bg-center opacity-30 group-hover:opacity-50 transition-opacity duration-700 z-0"></div>
                    <div class="relative z-10">
                        <h3 class="font-h3 text-h3 text-white text-xl mb-1">Coming Soon</h3>
                        <p class="font-label-caps text-label-caps text-on-surface-variant">Winter Tour Merch</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Product Summary: Horizontal scrolling "New Arrivals" -->
        <section class="w-full px-md pl-md md:pl-[max(1.5rem,calc((100%-80rem)/2))] overflow-hidden">
            <div class="flex items-end justify-between mb-8 pr-md md:pr-[max(1.5rem,calc((100%-80rem)/2))]">
                <h2 class="font-h2 text-h2 text-on-background">New Arrivals</h2>
                <a class="font-label-caps text-label-caps text-primary hover:text-primary-fixed transition-colors flex items-center gap-1" href="#">
                    VIEW ALL <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
                </a>
            </div>
            
            <div class="flex overflow-x-auto snap-x snap-mandatory gap-gutter pb-8 no-scrollbar pr-8">
                <!-- Product Card 1 -->
                <div class="glass-card min-w-[280px] max-w-[280px] aspect-[3/4] rounded-2xl p-4 flex flex-col snap-start group hover:bg-white/5 transition-all duration-300">
                    <div class="w-full h-[65%] rounded-xl overflow-hidden relative mb-4">
                        <img alt="Album packaging" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB8ExMWdHP_HFqvtNSH7Tmf3WaiaiL9hlvEL0cXjo7n7csmde__3dzHLjyrWRA-8rsMaJJBWj0DT9VlgO1EIFLJ5saGuHFrAKC2qbn_QFP-6nQ63EZrcDLy8W5BBbPU-0Db4mhg5N1yXR1fNEEkv0SClg0basKbECOk7LpcQmgp39g_oaOqJyau8IeKGm7tEkLeeqczkJspiXi9_b1ZgXcZqZzFlEpcpQ0wViDw6PMli7SbNE0yzpEYk0HLitqdwsXtTUDfCB_F2co"/>
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
                            <h4 class="font-body-lg font-bold text-on-surface line-clamp-1">Dreamscape Album Vol. 1</h4>
                            <p class="font-body-md text-on-surface-variant text-sm line-clamp-1">Standard Edition</p>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <span class="font-h3 text-lg text-white">.00</span>
                            <button aria-label="Add to cart" class="bg-surface-container border border-white/10 rounded-full p-2 hover:bg-primary-container hover:text-on-primary-container transition-colors">
                                <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="glass-card min-w-[280px] max-w-[280px] aspect-[3/4] rounded-2xl p-4 flex flex-col snap-start group hover:bg-white/5 transition-all duration-300">
                    <div class="w-full h-[65%] rounded-xl overflow-hidden relative mb-4">
                        <img alt="Holographic lightstick design" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBkO9KXcIIykpA49e68MklXrChLpJd3XEzqvoctFjriJtOL7idk9YnUxqDpJWjVn9oQaVxjvKS4f6IGx13de9GsBot8JkuJAReqS2_oMtIJiwWTW6bZZhZ27s8oms-I1aC4FD8GWa_aT_qwDrBgvhEHU5YJB0eOfvWXbjWDaWfYSS9nHNloFBC2yoJmOjd7E3mEL07_jHIg1MT2qlaWLdBJlaGt6JMsTAgmFf7eGAdTr095SNHQFJ15XOJG0-L4TPhHqkqc_JX2WyU"/>
                        <div class="absolute top-3 left-3">
                            <span class="bg-surface-container/80 backdrop-blur text-white font-label-caps text-[10px] px-2 py-1 rounded-full border border-white/20">LOW STOCK</span>
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
                            <h4 class="font-body-lg font-bold text-on-surface line-clamp-1">Official Tour Lightstick V2</h4>
                            <p class="font-body-md text-on-surface-variant text-sm line-clamp-1">Bluetooth Sync Enabled</p>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <span class="font-h3 text-lg text-white">.00</span>
                            <button aria-label="Add to cart" class="bg-surface-container border border-white/10 rounded-full p-2 hover:bg-primary-container hover:text-on-primary-container transition-colors">
                                <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="glass-card min-w-[280px] max-w-[280px] aspect-[3/4] rounded-2xl p-4 flex flex-col snap-start group hover:bg-white/5 transition-all duration-300">
                    <div class="w-full h-[65%] rounded-xl overflow-hidden relative mb-4">
                        <img alt="Stack of glossy photocards" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCWSc-HDeBOr-Y59vtsCHQThyU_2ojCeOr8_OD1lL27w2pfv0DkyQB-IuxF1ethbdiCeWXrOe0C8j-ALHC0J4kU8r-q7Dge-akD6kf3HxjBCvoZ7-HaaHl-cvqw9QgnjcBH0T9N6_OU1-wzBZBC9UvHfpFEKl94TjzZIMg3B2fpMCTzYhW1dKa_k1BANDY-bKf0UikHFMAT7esLSODlTUm33fj8ybKt4-C-hQrqFj-CmmLJ6_LyPX_SPogFt6pmd9FIaIh-CfZsTxk"/>
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
                            <span class="font-h3 text-lg text-white">.00</span>
                            <button aria-label="Add to cart" class="bg-surface-container border border-white/10 rounded-full p-2 hover:bg-primary-container hover:text-on-primary-container transition-colors">
                                <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="glass-card min-w-[280px] max-w-[280px] aspect-[3/4] rounded-2xl p-4 flex flex-col snap-start group hover:bg-white/5 transition-all duration-300">
                    <div class="w-full h-[65%] rounded-xl overflow-hidden relative mb-4">
                        <img alt="Stylized fashion photography" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCq27i3QxYt5D47s9wpYV0NhNPJAX07iAasNmvtxtjWEifg83vR8SYU681d_qU7am19qJoc5i8sa7cTRUKmx0M2J6O9Vjx4OnDYtX1tDudl4PnSy4lGsdzJFDC9yRzjdKyghkP1FldnZgc-LwyJfkYifM7o0G9hk3iAj6cAe2_KQiF60W-p-keNDkU7KIidI_fco5cNVXIMzUX4N7G59QwGzzrYB2VUyOmibrSowCL9uebnOTN0dFu_XBAuaQDCqCXCseDyYa_sdoQ"/>
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
                            <span class="font-h3 text-lg text-white">.00</span>
                            <button aria-label="Add to cart" class="bg-surface-container border border-white/10 rounded-full p-2 hover:bg-primary-container hover:text-on-primary-container transition-colors">
                                <span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="max-w-4xl mx-auto px-md w-full mt-10">
            <div class="glass-card rounded-3xl p-10 md:p-16 flex flex-col items-center text-center holo-glow border-t border-white/10 shadow-[0_20px_60px_-15px_rgba(255,79,163,0.1)]">
                <span class="material-symbols-outlined text-4xl text-primary-container mb-4" data-icon="mail">mail</span>
                <h2 class="font-h2 text-h2 text-white mb-4">Join the Inner Circle</h2>
                <p class="font-body-lg text-on-surface-variant max-w-lg mb-8">Get early access to exclusive drops, limited photocards, and secret sales before they hit the main store.</p>
                <form class="w-full max-w-md relative flex items-center">
                    <input class="w-full bg-surface-container/50 border border-white/10 rounded-full py-4 pl-6 pr-32 font-body-md text-white placeholder:text-on-surface-variant focus:outline-none focus:border-primary-container focus:ring-1 focus:ring-primary-container transition-colors backdrop-blur-sm" placeholder="Enter your email" type="email"/>
                    <button class="absolute right-2 top-2 bottom-2 bg-white text-surface-container-highest font-label-caps text-label-caps px-6 rounded-full hover:bg-primary-fixed transition-colors shadow-sm" type="submit">
                        SUBSCRIBE
                    </button>
                </form>
            </div>
        </section>
    </main>
                        </x-app-layout>
                        
