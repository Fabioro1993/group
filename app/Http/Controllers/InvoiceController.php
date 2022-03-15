<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Product;

class InvoiceController extends Controller
{
    public function index()
    {
        //Desafio 1
        //2.Obtener todos id de las facturas que tengan productos con cantidad mayor a 100.

        $invoice = Invoice::select('id')->whereHas('product', function ($query){
                            $query->where('quantity', '>', 100);
                        })->get();

        $products = Product::select('name')->where('price', '>', 1000000)->get();

        $invoice_all = Invoice::all();
        $product_all = Product::all();

        return view('invoice.index', compact('invoice', 'products', 'invoice_all', 'product_all'));
    }

    public function total(Invoice $invoice)
    {
        //Desafio 1
        //1.Obtener precio total de la factura.
        //Ruta directa
        $invoice->load('product');

        $total = $invoice->product->sum('price_products');
        $invoice['total_desafio_one'] = $total;
        return $invoice;
    }

    public function show(Invoice $invoice)
    {
        //Desafio 1
        //1.Obtener precio total de la factura.
        //Para la tabla
        $invoice->load('product');

        $total = $invoice->product->sum('price_products');
        $invoice['total_desafio_one'] = $total;
        return $invoice;
    }
}
