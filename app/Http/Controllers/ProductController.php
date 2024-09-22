<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Seller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sellers = Seller::all();
        return view('products.create', compact('sellers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'seller_id' => 'required|exists:sellers,id',
        ]);

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'seller_id' => $request->seller_id,
        ]);
        return redirect()->route('products.index')->with('success', '商品が登録されました');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $sellers = Seller::all();
        return view('products.edit', compact('product', 'sellers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'seller_id' => 'required|exists:sellers,id',
        ]);

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'seller_id' => $request->seller_id,
        ]);
        return redirect()->route('products.index')->with('success', '商品が更新されました');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', '商品が削除されました');
    }
    
    public function home()
    {
        // products テーブルから全商品を取得
        $products = Product::all();

        // home ビューに products を渡す
        return view('home', compact('products'));
    }
}
