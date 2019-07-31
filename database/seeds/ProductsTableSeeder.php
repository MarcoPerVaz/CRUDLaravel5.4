<?php

use Illuminate\Database\Seeder;
// Importado CRUDLaravel5.4
use CRUDLaravel54\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 80)->create();
    }
}
