<?php

namespace App\Observers;
use App\Models\Product;
use App\Models\Invoice;

class ProductObserver
{
    public function created(Product $product)
    {
        $invoice = Invoice::find($product->invoice_id);

        $total_sum = $invoice->product->sum('price_products');

        $invoice->total = $total_sum;
        $invoice->save();
    }
}
