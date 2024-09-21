@extends('layouts.app')

@section('content')
    <h1>商品一覧</h1>

    <a href="{{ route('products.create') }}" class="btn btn-primary">商品を追加</a>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>商品名</th>
                <th>価格</th>
                <th>販売者</th>
                <th>アクション</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}円</td>
                    <td>{{ $product->seller->name }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">編集</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">削除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
