<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index(){
        $products = Products::all();
        return view('admin.products.list_products',['products' => $products]);
    }
    public function renderiza_tela(){
        return view('admin.products.create_product');
    }
    public function create(Request $request){
        $validator = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric'],
            'product_img' => ['required', 'image', 'mimes:webp,jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
                    
        $file = rand(0, 9999) . '-' . $request->file('product_img')->getClientOriginalName();
        $public_file = public_path("/upload/$file");
        copy($request->file("product_img")->getRealPath(),$public_file);

        $product = Products::create([
            'name' => $request->name,
            'price' => $request->price,
            'product_img' => "upload/$file"
        ]);
            
        return redirect()->route('products.index')->with('success', 'Produto salvo com sucesso!'); 
    }

    public function detail($id){
        $product = Products::findOrFail($id);
        return view('admin.products.detail_product',['product' => $product]);        
    }
    
    public function update(Request $request, $id){
        $product = Products::findorFail($id);
        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Produto atualizado com sucesso!');  
    }

    public function delete($id){
        $product = Products::findorFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produto excluido com sucesso!');  
    }
    public function render_products() {
        return view('page.products.products', ['products' => Products::all()]);
    }
}