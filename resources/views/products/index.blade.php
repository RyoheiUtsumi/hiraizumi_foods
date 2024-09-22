<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('平泉とれたて市場') }}
        </h2>
    </x-slot>

    <div class="container mx-auto text-center">
        <h1 class="text-3xl font-bold mt-6">商品一覧</h1>

        <div class="mt-4">
            <a href="{{ route('products.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">商品を追加</a>
        </div>

        <div class="mt-6 flex justify-center">
            <table class="table-auto border-collapse border border-gray-400 w-full md:w-3/4">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2">商品名</th>
                        <th class="border border-gray-300 px-4 py-">商品画像</th>
                        <th class="border border-gray-300 px-4 py-2">価格</th>
                        <th class="border border-gray-300 px-4 py-2">販売者</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $product->name }}</td>
                            <!-- ここで image_url を asset 関数で正しいパスにする -->
                            <td class="border border-gray-300 px-4 py-2">
                                <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}"
                                    class="w-16 h-16">
                            </td>
                            <td class="border border-gray-300 px-4 py-2">{{ $product->price }}円</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $product->seller->name }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <form action="{{ route('products.edit', $product->id) }}" method="GET"
                                    class="inline-block">
                                    @csrf
                                    <button type="submit"
                                        class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">編集</button>
                                </form>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                    class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">削除</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</x-app-layout>
