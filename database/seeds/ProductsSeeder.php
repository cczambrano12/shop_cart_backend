<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(array(
            array(
                "name" => "Martillo",
                "sku" => "MART-MAD-13OZ",
                "description" => "Martillo uña 13 onzas amango madera",
                "imageUrl" => "https://www.albanycountyfasteners.com/mm5/graphics/00000001/Curved-Claw-Hammer-PRODUCT-1_300x300.jpg",
                "price"=> 25000
            ),
            array(
                "name" => "Destornillador de Pala",
                "sku" => "DEST-PALA-4IN",
                "description" => "Destornillador Great Neck de pala 1/4 x 4\" ",
                "imageUrl" => "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTOPW0jH2rRj4bI2z2-v5LDLOYmZvYl9hwF0Q&usqp=CAU",
                "price" => 12000
            ),
            array(
                "name"=> "Tornillo",
                "sku"=> "TORN-ACER-2IN",
                "description"=> "Tornillo cabeza hexagonal acero inoxidable 1/2 x 2\"",
                "imageUrl"=> "https://static.grainger.com/rp/s/is/image/Grainger/36LM49_AS01?\$mdmain$",
                "price"=>1100
            ),
            array(
                "name"=> "Cinta de Enmascarar",
                "sku"=> "CINT-ENM-40M",
                "description"=> "Cinta de enmascarar 24mm x 40 m",
                "imageUrl"=> "https://homecenterco.scene7.com/is/image//SodimacCO/206845",
                "price"=>8700
            ),
            array(
                "name"=> "Pintura blanca",
                "sku"=> "PINT-BL-1GAL",
                "description"=> "Pintura para interior marca Kolor 1 Gl",
                "imageUrl"=> "https://homecenterco.scene7.com/is/image//SodimacCO/135123",
                "price"=>68000
            ),
            array(
                "name"=> "Taladro inalámbrico",
                "sku"=> "TALD-INAL-DWALT",
                "description"=> "Taladro percutor inalámbrico DeWalt 1/2\" 20V",
                "imageUrl"=> "https://homecenterco.scene7.com/is/image//SodimacCO/301039",
                "price"=>340000
            ),
            array(
                "name"=> "Tubo PVC",
                "sku"=> "TUBO-PVC-3IN6M",
                "description"=> "Tubo sanitario en PVC PAVCO 3\" x 6 m",
                "imageUrl"=> "https://homecenterco.scene7.com/is/image//SodimacCO/65853",
                "price"=>9500
            ),
          ));
    }
}
