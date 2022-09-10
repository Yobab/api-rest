<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getAll()
    {
        return Product::all();
    }
    public function getOne($id)
    {
        return Product::find($id);
    }
    public function create(Request $request)
    {
        $data = $request->validate([
            'code' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);

        Product::insert($data);
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'code' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);

        Product::find($id)->update($data);
    }
    public function delete($id)
    {
        return Product::find($id)->delete();
    }

    public function table()
    {
        $products = Product::all();
        return view('welcome', compact('products'));
    }
    public function registerForm()
    {
        return view('newProduct');
    }
    public function editForm($id)
    {
        $product = Product::find($id);
        return view('editProduct', compact('product'));
    }
}
