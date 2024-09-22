<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('平泉とれたて市場') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto p-6 lg:p-8 text-center">
        <!-- バナーセクション -->
        <div class="banner text-center mx-auto">
            <img src="{{ asset('images/hiraizumi_top3.png') }}" alt="平泉とれたて市場" class="mx-auto mb-8">
            <h1 class="text-4xl font-bold mb-4"></h1>
        </div>

        <!-- 商品リストセクション -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($products as $product)
            <!-- 商品カード -->
            <div class="product bg-white p-6 shadow rounded-lg text-center">
                <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}" class="w-full h-64 object-cover mb-4">
                <h2 class="text-xl font-semibold mb-2">{{ $product->name }}</h2>
                <p class="mb-4">{{ $product->description }}</p> <!-- 商品説明 -->
                <p class="text-lg font-bold text-red-600">{{ number_format($product->price) }}円（税込）</p>
                <button class="mt-4 bg-orange-500 text-white py-2 px-4 rounded">カートに追加</button>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
