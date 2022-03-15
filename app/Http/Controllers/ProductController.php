<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        //Desafio 1
        //3.Obtener todos los nombres de los productos cuyo valor final sea superior a $1.000.000 CLP.

        $products = Product::select('name')->where('price', '>', 1000000)->get();
        return $products;
    }

    public function create($id)
    {
        $products = Product::where('invoice_id', $id)->get();
        return view('invoice.create', compact('products'));
    }

    public function store(ProductRequest $request)
    {
        $all = $request->validated();
        $product = Product::create($all);

        return Redirect::to('invoice');
    }
}