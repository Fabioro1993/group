<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'invoice_id' => 1,
            'name'       => "Smart Tv 55",
            'quantity'   => 2,
            'price'      => 389990,
        ]);
        Product::create([
            'invoice_id' => 1,
            'name'       => "Impresora a color",
            'quantity'   => 10,
            'price'      => 155190,
        ]);
        Product::create([
            'invoice_id' => 1,
            'name'       => "Audífonos True",
            'quantity'   => 250,
            'price'      => 54990,
        ]);
        Product::create([
            'invoice_id' => 1,
            'name'       => "Disco duro externo",
            'quantity'   => 106,
            'price'      => 90990,
        ]);
        Product::create([
            'invoice_id' => 1,
            'name'       => "Apple iPad",
            'quantity'   => 78,
            'price'      => 1252990,
        ]);


        Product::create([
            'invoice_id' => 2,
            'name'       => "Tío Nacho Engrosador Shampoo",
            'quantity'   => 100,
            'price'      => 7690,
        ]);
        Product::create([
            'invoice_id' => 2,
            'name'       => "Dove Jabón Líquido Original 700ml",
            'quantity'   => 440,
            'price'      => 3790,
        ]);
        Product::create([
            'invoice_id' => 2,
            'name'       => "Shampoo Pantene",
            'quantity'   => 458,
            'price'      => 2331,
        ]);
        Product::create([
            'invoice_id' => 2,
            'name'       => "Jabón Barra",
            'quantity'   => 600,
            'price'      => 2390,
        ]);
        Product::create([
            'invoice_id' => 2,
            'name'       => "Crema Corporal",
            'quantity'   => 380,
            'price'      => 6590,
        ]);
        Product::create([
            'invoice_id' => 2,
            'name'       => "Mascarilla Hidratante",
            'quantity'   => 485,
            'price'      => 6990,
        ]);

        Product::create([
            'invoice_id' => 3,
            'name'       => "Refigerador French",
            'quantity'   => 1,
            'price'      => 1999990,
        ]);
        Product::create([
            'invoice_id' => 3,
            'name'       => "Secadora Fdv",
            'quantity'   => 1,
            'price'      => 454990,
        ]);
        Product::create([
            'invoice_id' => 3,
            'name'       => "Calefon Gas Licuado",
            'quantity'   => 1,
            'price'      => 409990,
        ]);

        Product::create([
            'invoice_id' => 4,
            'name'       => "Lavadora-secadora",
            'quantity'   => 1,
            'price'      => 399990,
        ]);
        Product::create([
            'invoice_id' => 4,
            'name'       => "Refrigerador",
            'quantity'   => 1,
            'price'      => 369990,
        ]);
        Product::create([
            'invoice_id' => 4,
            'name'       => "Lavavajillas 14",
            'quantity'   => 1,
            'price'      => 359990,
        ]);
        Product::create([
            'invoice_id' => 4,
            'name'       => "Horno Eléctrico",
            'quantity'   => 1,
            'price'      => 343990,
        ]);


        Product::create([
            'invoice_id' => 5,
            'name'       => "Polera Nike",
            'quantity'   => 700,
            'price'      => 65006,
        ]);
        Product::create([
            'invoice_id' => 5,
            'name'       => "Cortaviento Hombre",
            'quantity'   => 250,
            'price'      => 405990,
        ]);
        Product::create([
            'invoice_id' => 5,
            'name'       => "Cortaviento Mujer adidas",
            'quantity'   => 400,
            'price'      => 404990,
        ]);
        Product::create([
            'invoice_id' => 5,
            'name'       => "Jockey Unisex",
            'quantity'   => 1000,
            'price'      => 29990,
        ]);
        Product::create([
            'invoice_id' => 5,
            'name'       => "Mochila Maleta",
            'quantity'   => 1000,
            'price'      => 23990,
        ]);

    }
}
