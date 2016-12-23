<?php

use Illuminate\Database\Seeder;
use App\CartographicMaterial;

class CartographicMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=11; $i <= 15 ; $i++) { 
         CartographicMaterial::Create([
                'cartographic_format_id' => $i,
                'dimension' => rand(10,800) . " x ". rand(10,800),
             	]);
        }
    }
}
