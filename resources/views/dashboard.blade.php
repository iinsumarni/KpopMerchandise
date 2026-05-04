<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h3 class="text-lg font-bold mb-4">Produk</h3>

                    <!-- TEST PRODUK -->
                    <div class="border p-4 rounded mb-4">
                        <h4 class="font-semibold">Album BTS</h4>
                        <p class="text-sm text-gray-600 mb-2">Harga: Rp 100.000</p>

                        <a href="/cart/add/1"
                           class="bg-black text-white px-4 py-2 rounded">
                           + Add to Cart
                        </a>
                    </div>

                    <!-- INFO -->
                    <p class="text-green-600 mt-4">
                        {{ __("You're logged in!") }}
                    </p>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>