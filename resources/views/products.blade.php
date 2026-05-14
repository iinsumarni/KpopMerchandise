<x-app-layout>

<main class="pt-32 pb-24 flex flex-col gap-xl">
<!-- Search -->
<section class="max-w-5xl mx-auto px-4 w-full -mt-6">
    <div class="relative">
        <span class="material-symbols-outlined absolute left-5 top-1/2 -translate-y-1/2 text-white/50 z-10">
            search
        </span>

        <input
            id="searchInput"
            type="text"
            placeholder="Search albums, photocards, lightsticks..."
            class="w-full h-16 pl-14 pr-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-pink-500/20 text-white placeholder:text-white/40 focus:outline-none focus:border-pink-400 focus:ring-4 focus:ring-pink-500/10 transition-all duration-300 shadow-[0_0_40px_rgba(255,0,128,0.08)]"
        >
    </div>
</section>

    <!-- Categories Filter Section -->
    <section class="max-w-7xl mx-auto px-md w-full">
        <h2 class="font-h2 text-h2 text-on-background mb-8 text-center">Categories</h2>
        <div class="flex flex-wrap justify-center gap-4 md:gap-6">
            <div class="category-btn glass-card rounded-full px-6 py-3 flex items-center gap-3 cursor-pointer hover:bg-primary-container/20 hover:scale-[1.02] transition-all duration-300 border border-white/5 hover:border-primary-container/50 active-category" data-category="album">
                <span class="material-symbols-outlined text-primary-container" data-icon="album" style="font-variation-settings: 'FILL' 1;">album</span>
                <span class="font-label-caps text-label-caps text-on-surface">Album</span>
            </div>
            <div class="category-btn glass-card rounded-full px-6 py-3 flex items-center gap-3 cursor-pointer hover:bg-secondary-container/20 hover:scale-[1.02] transition-all duration-300 border border-white/5 hover:border-secondary-container/50" data-category="photocard">
                <span class="material-symbols-outlined text-secondary" data-icon="style" style="font-variation-settings: 'FILL' 1;">style</span>
                <span class="font-label-caps text-label-caps text-on-surface">Photocard</span>
            </div>
            <div class="category-btn glass-card rounded-full px-6 py-3 flex items-center gap-3 cursor-pointer hover:bg-tertiary-container/20 hover:scale-[1.02] transition-all duration-300 border border-white/5 hover:border-tertiary-fixed/50" data-category="lightstick">
                <span class="material-symbols-outlined text-tertiary-fixed" data-icon="flashlight_on" style="font-variation-settings: 'FILL' 1;">flashlight_on</span>
                <span class="font-label-caps text-label-caps text-on-surface">Lightstick</span>
            </div>
            <div class="category-btn glass-card rounded-full px-6 py-3 flex items-center gap-3 cursor-pointer hover:bg-primary-fixed/20 hover:scale-[1.02] transition-all duration-300 border border-white/5 hover:border-primary-fixed/50" data-category="apparel">
                <span class="material-symbols-outlined text-primary-fixed" data-icon="checkroom" style="font-variation-settings: 'FILL' 1;">checkroom</span>
                <span class="font-label-caps text-label-caps text-on-surface">Apparel</span>
            </div>
            <div class="category-btn glass-card rounded-full px-6 py-3 flex items-center gap-3 cursor-pointer hover:bg-secondary-fixed/20 hover:scale-[1.02] transition-all duration-300 border border-white/5 hover:border-secondary-fixed/50" data-category="accessories">
                <span class="material-symbols-outlined text-secondary-fixed" data-icon="shopping_bag" style="font-variation-settings: 'FILL' 1;">shopping_bag</span>
                <span class="font-label-caps text-label-caps text-on-surface">Accessories</span>
            </div>
            <div class="category-btn glass-card rounded-full px-6 py-3 flex items-center gap-3 cursor-pointer hover:bg-tertiary/20 hover:scale-[1.02] transition-all duration-300 border border-white/5 hover:border-tertiary/50" data-category="vinyl">
                <span class="material-symbols-outlined text-tertiary" data-icon="music_note" style="font-variation-settings: 'FILL' 1;">music_note</span>
                <span class="font-label-caps text-label-caps text-on-surface">Vinyl</span>
            </div>
        </div>
    </section>

    <!-- Products -->
<section class="max-w-7xl mx-auto px-4 w-full">

    <div
        id="productsGrid"
        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-7"
    >
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Dummy product data - 48 Premium Kpop Merchandise Items (8 per category)
        const productsData = [
            // ALBUMS (8 products)
            { id: 1, name: 'Dreamscape Album Vol. 1', category: 'album', price: '$24.00', badge: 'IN STOCK', image: 'https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=700&h=700&fit=crop' },
            { id: 2, name: 'Ethereal Echoes Deluxe Box', category: 'album', price: '$39.99', badge: 'EXCLUSIVE', image: 'https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=700&h=700&fit=crop' },
            { id: 3, name: 'Neon Nights Standard Edition', category: 'album', price: '$22.00', badge: 'BESTSELLER', image: 'https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=700&h=700&fit=crop' },
            { id: 4, name: 'Stellar Genesis Collector Set', category: 'album', price: '$49.99', badge: 'LIMITED', image: 'https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=700&h=700&fit=crop' },
            { id: 5, name: 'Luminescence Complete Collection', category: 'album', price: '$64.99', badge: 'NEW', image: 'https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=700&h=700&fit=crop' },
            { id: 6, name: 'Prismatic Paradise Album', category: 'album', price: '$34.00', badge: 'HOT', image: 'https://images.unsplash.com/photo-1514320291840-2e0a9bf2a9ae?w=700&h=700&fit=crop' },
            { id: 7, name: 'Aurora Eclipse Standard', category: 'album', price: '$28.50', badge: 'IN STOCK', image: 'https://images.unsplash.com/photo-1506157786151-b8491531f063?w=700&h=700&fit=crop' },
            { id: 8, name: 'Midnight Reflections Vinyl', category: 'album', price: '$45.00', badge: 'RARE', image: 'https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=700&h=700&fit=crop' },
            
            // PHOTOCARDS (8 products)
            { id: 9, name: 'Mystery Photocard Pack', category: 'photocard', price: '$12.00', badge: 'BESTSELLER', image: 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=700&h=700&fit=crop' },
            { id: 10, name: 'Elite Member Signature Set', category: 'photocard', price: '$28.00', badge: 'LIMITED', image: 'https://images.unsplash.com/photo-1516979187457-637abb4f9353?w=700&h=700&fit=crop' },
            { id: 11, name: 'Holographic Rare Edition', category: 'photocard', price: '$42.00', badge: 'RARE', image: 'https://images.unsplash.com/photo-1611162617213-7d7a39e9b1d7?w=700&h=700&fit=crop' },
            { id: 12, name: 'Vintage Polaroid Collection', category: 'photocard', price: '$18.00', badge: 'IN STOCK', image: 'https://images.unsplash.com/photo-1503451671872-63d8e4d34b69?w=700&h=700&fit=crop' },
            { id: 13, name: 'Crystalline GlitterCard Box', category: 'photocard', price: '$35.00', badge: 'NEW', image: 'https://images.unsplash.com/photo-1542112051-1ca1c0ddd759?w=700&h=700&fit=crop' },
            { id: 14, name: 'Velvet Dream Card Collection', category: 'photocard', price: '$24.99', badge: 'HOT', image: 'https://images.unsplash.com/photo-1533107862143-f3fde44f8f5d?w=700&h=700&fit=crop' },
            { id: 15, name: 'Luminous Premium Photoset', category: 'photocard', price: '$32.00', badge: 'EXCLUSIVE', image: 'https://images.unsplash.com/photo-1546868871-7041f2a55e12?w=700&h=700&fit=crop' },
            { id: 16, name: 'Nebula Collector Cards', category: 'photocard', price: '$26.50', badge: 'LIMITED', image: 'https://images.unsplash.com/photo-1552035082-5b300ace878d?w=700&h=700&fit=crop' },
            
            // LIGHTSTICKS (8 products)
            { id: 17, name: 'Official Tour Lightstick V2', category: 'lightstick', price: '$45.00', badge: 'LOW STOCK', image: 'https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=700&h=700&fit=crop' },
            { id: 18, name: 'Aurora LED Gen 3', category: 'lightstick', price: '$58.00', badge: 'NEW', image: 'https://images.unsplash.com/photo-1511707267537-b85faf00021e?w=700&h=700&fit=crop' },
            { id: 19, name: 'Neon Prism Light Wand', category: 'lightstick', price: '$52.99', badge: 'BESTSELLER', image: 'https://images.unsplash.com/photo-1511379938547-c1f69b13441a?w=700&h=700&fit=crop' },
            { id: 20, name: 'Stellar RGB Sync Stick', category: 'lightstick', price: '$72.00', badge: 'LIMITED', image: 'https://images.unsplash.com/photo-1513373533050-7952c3efee56?w=700&h=700&fit=crop' },
            { id: 21, name: 'Luminous Crown Edition', category: 'lightstick', price: '$85.00', badge: 'EXCLUSIVE', image: 'https://images.unsplash.com/photo-1520523839897-bd0b52aaf081?w=700&h=700&fit=crop' },
            { id: 22, name: 'Rainbow Spectrum Light', category: 'lightstick', price: '$48.00', badge: 'IN STOCK', image: 'https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=700&h=700&fit=crop' },
            { id: 23, name: 'Crystalline Glow Stick Pro', category: 'lightstick', price: '$62.00', badge: 'HOT', image: 'https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=700&h=700&fit=crop' },
            { id: 24, name: 'Holographic Ultra Stick', category: 'lightstick', price: '$78.00', badge: 'RARE', image: 'https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=700&h=700&fit=crop' },
            
            // APPAREL (8 products)
            { id: 25, name: 'Holographic Hoodie', category: 'apparel', price: '$65.00', badge: 'NEW', image: 'https://images.unsplash.com/photo-1445205170230-053b83016050?w=700&h=700&fit=crop' },
            { id: 26, name: 'Premium Oversized Tee Black', category: 'apparel', price: '$38.00', badge: 'BESTSELLER', image: 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=700&h=700&fit=crop' },
            { id: 27, name: 'Luxury Crop Top Pink', category: 'apparel', price: '$42.00', badge: 'HOT', image: 'https://images.unsplash.com/photo-1595777707802-52ba1cfe23f7?w=700&h=700&fit=crop' },
            { id: 28, name: 'Concert Tour Jacket', category: 'apparel', price: '$89.99', badge: 'LIMITED', image: 'https://images.unsplash.com/photo-1484521369050-38614808ae38?w=700&h=700&fit=crop' },
            { id: 29, name: 'Athleisure Sports Bra', category: 'apparel', price: '$54.00', badge: 'IN STOCK', image: 'https://images.unsplash.com/photo-1506215316996-1e1d4c3e48aa?w=700&h=700&fit=crop' },
            { id: 30, name: 'Silk Sleep Set', category: 'apparel', price: '$76.00', badge: 'EXCLUSIVE', image: 'https://images.unsplash.com/photo-1490527029433-42582973f56f?w=700&h=700&fit=crop' },
            { id: 31, name: 'Premium Tank Top White', category: 'apparel', price: '$32.00', badge: 'IN STOCK', image: 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=700&h=700&fit=crop' },
            { id: 32, name: 'Velvet Crop Jacket', category: 'apparel', price: '$72.00', badge: 'NEW', image: 'https://images.unsplash.com/photo-1551028719-00167b16ebc5?w=700&h=700&fit=crop' },
            
            // ACCESSORIES (8 products)
            { id: 33, name: 'Kpop Accessories Set', category: 'accessories', price: '$18.00', badge: 'IN STOCK', image: 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=700&h=700&fit=crop' },
            { id: 34, name: 'Premium Lightstick Case Gold', category: 'accessories', price: '$22.00', badge: 'NEW', image: 'https://images.unsplash.com/photo-1542272604-787c62d465d1?w=700&h=700&fit=crop' },
            { id: 35, name: 'Crystal Keychain Duo', category: 'accessories', price: '$15.00', badge: 'HOT', image: 'https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?w=700&h=700&fit=crop' },
            { id: 36, name: 'Luxury Pen Set Silver', category: 'accessories', price: '$32.00', badge: 'BESTSELLER', image: 'https://images.unsplash.com/photo-1550663527-36b5d2ec92f6?w=700&h=700&fit=crop' },
            { id: 37, name: 'Velvet Phone Charm', category: 'accessories', price: '$12.50', badge: 'LIMITED', image: 'https://images.unsplash.com/photo-1523293182086-7651a899d37f?w=700&h=700&fit=crop' },
            { id: 38, name: 'Premium Badge Collection', category: 'accessories', price: '$28.00', badge: 'EXCLUSIVE', image: 'https://images.unsplash.com/photo-1599599810694-e3007edd8d5d?w=700&h=700&fit=crop' },
            { id: 39, name: 'Holographic Sticker Pack', category: 'accessories', price: '$8.99', badge: 'IN STOCK', image: 'https://images.unsplash.com/photo-1524634126163-8650a7262b90?w=700&h=700&fit=crop' },
            { id: 40, name: 'Luminous Hair Clip Set', category: 'accessories', price: '$19.50', badge: 'NEW', image: 'https://images.unsplash.com/photo-1535632066927-ab7c9ab60908?w=700&h=700&fit=crop' },
            
            // VINYL (8 products)
            { id: 41, name: 'Limited Edition Vinyl', category: 'vinyl', price: '$89.00', badge: 'LIMITED', image: 'https://images.unsplash.com/photo-1511376777868-611b54f68947?w=700&h=700&fit=crop' },
            { id: 42, name: 'Vintage Vinyl Reissue', category: 'vinyl', price: '$75.00', badge: 'RARE', image: 'https://images.unsplash.com/photo-1511379938547-c1f69b13441a?w=700&h=700&fit=crop' },
            { id: 43, name: 'Crystalline LP Special', category: 'vinyl', price: '$95.00', badge: 'EXCLUSIVE', image: 'https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=700&h=700&fit=crop' },
            { id: 44, name: 'Holographic Vinyl Edition', category: 'vinyl', price: '$105.00', badge: 'NEW', image: 'https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=700&h=700&fit=crop' },
            { id: 45, name: 'Double Album Gatefold', category: 'vinyl', price: '$78.00', badge: 'BESTSELLER', image: 'https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=700&h=700&fit=crop' },
            { id: 46, name: 'Anniversary Vinyl Boxset', category: 'vinyl', price: '$120.00', badge: 'LIMITED', image: 'https://images.unsplash.com/photo-1514320291840-2e0a9bf2a9ae?w=700&h=700&fit=crop' },
            { id: 47, name: 'Neon Transparent Vinyl', category: 'vinyl', price: '$98.00', badge: 'IN STOCK', image: 'https://images.unsplash.com/photo-1506157786151-b8491531f063?w=700&h=700&fit=crop' },
            { id: 48, name: 'Deluxe Collector Vinyl', category: 'vinyl', price: '$115.00', badge: 'HOT', image: 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=700&h=700&fit=crop' }
        ];

        const grid = document.getElementById('productsGrid');
        const searchInput = document.getElementById('searchInput');
        const categoryButtons = document.querySelectorAll('.category-btn');
        let activeCategory = 'album';

        // Render products function
        function renderProducts(products) {
            if (products.length === 0) {
                grid.innerHTML = `
                    <div class="col-span-full flex flex-col items-center justify-center py-20">
                        <span class="material-symbols-outlined text-6xl text-white/20 mb-4">search_off</span>
                        <h3 class="text-2xl font-bold text-white/40 mb-2">No Products Found</h3>
                        <p class="text-on-surface-variant">Try adjusting your search or filter criteria</p>
                    </div>
                `;
                return;
            }

            grid.innerHTML = products.map(product => `
                <div class="glass-card rounded-3xl p-5 flex flex-col group hover:scale-105 hover:bg-white/10 transition-all duration-500 holo-glow shadow-lg hover:shadow-[0_20px_40px_rgba(255,79,163,0.2)]">
                    <div class="relative mb-4 overflow-hidden rounded-2xl h-56">
                        <img src="${product.image}" alt="${product.name}" class="w-full h-full object-cover group-hover:scale-125 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute top-3 right-3">
                            <span class="bg-gradient-to-r from-pink-500 to-purple-600 text-white font-bold text-xs px-3 py-1 rounded-full">${product.badge}</span>
                        </div>
                    </div>
                    <div class="flex flex-col flex-grow">
                        <h3 class="font-bold text-white text-lg mb-1 line-clamp-2 group-hover:text-pink-400 transition-colors">${product.name}</h3>
                        <p class="text-on-surface-variant text-sm mb-4 flex-grow">Premium Kpop Merchandise</p>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="text-2xl font-bold bg-gradient-to-r from-pink-400 to-purple-400 bg-clip-text text-transparent">${product.price}</span>
                           <button
                        class="add-to-cart-btn bg-gradient-to-r from-primary-container to-secondary-container text-white font-label-caps text-sm px-4 py-2 rounded-full hover:scale-105 transition-transform"
                        data-id="${product.id}"
                        data-name="${product.name}"
                        data-price="${product.price}"
                        data-image="${product.image}"
                            >
                                Add
                            </button>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        // Filter and render products
        function filterAndRender() {
            const searchTerm = searchInput.value.toLowerCase().trim();
            const filtered = productsData.filter(product => {
                const matchesCategory = product.category === activeCategory;
                const matchesSearch = product.name.toLowerCase().includes(searchTerm) || 
                                    product.category.toLowerCase().includes(searchTerm);
                return matchesCategory && matchesSearch;
            });
            renderProducts(filtered);
        }

        // Category button click handlers
        categoryButtons.forEach(button => {
            button.addEventListener('click', function() {
                categoryButtons.forEach(btn => btn.classList.remove('active-category', 'bg-white/10'));
                this.classList.add('active-category', 'bg-white/10');
                activeCategory = this.dataset.category;
                filterAndRender();
            });
        });

        // Search input handler
        searchInput.addEventListener('input', filterAndRender);

        // Initial render
        filterAndRender();
    });

    //add to cart button handler
document.addEventListener('click', function (e) {

    if (e.target.classList.contains('add-to-cart-btn')) {

        const product = {
            id: e.target.dataset.id
        };

        window.location.href = "/cart/add/" + product.id;
    }

});

</script>

</x-app-layout>
