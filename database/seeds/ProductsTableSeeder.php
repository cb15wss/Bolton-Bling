<?php

use App\Products;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'name' => 'Gold Ring',
            'slug' => 'Gold Ring',
            'details' => '14K Yellow Gold Ring',
            'Price' => '49999',
            'image' => 'img/products/medium/elvis_medium.jpg',
            'description' => '14K Yellow Gold Ring with 2ct Diamond ',
            'categories_id' => '1',
        ]);

        Products::create([
            'name' => 'Diamond Ring',
            'slug' => 'Diamond Ring',
            'details' => '10K Gold-Diamond Ring',
            'Price' => '59999',
            'image' => 'img/products/medium/elvis_medium.jpg',
            'description' => '10K Diamond Ring with 1ct Diamond ',
            'categories_id' => '1',
        ]);


        Products::create([
            'name' => 'Silver Ring',
            'slug' => 'Silver Ring',
            'details' => ' 925 Silver Ring',
            'Price' => '24999',
            'image' => 'img/products/medium/elvis_medium.jpg',
            'description' => '925 Silver Ring, approximately 4mm wide ',
            'categories_id' => '1',
        ]);

        Products::create([
            'name' => 'Personalised Pendant',
            'slug' => 'Personalised Pendant',
            'details' => ' unique granddaughter-inspired pendant necklace with a genuine diamond',
            'Price' => '12999',
            'image' => 'img/products/medium/elvis_medium.jpg',
            'description' => 'A solid sterling silver heart at the bottom is set with a genuine diamond 
            and is personalised FREE with your granddaughter’s name.
            Pendant measures 0.8 inch (2.2 cm) in height. Matching chain measures 18 inches (45.7 cm) in length',
            'categories_id' => '2',
        ]);

        Products::create([
            'name' => 'Gold Pendant',
            'slug' => 'Gold Pendant',
            'details' => '14-carat gold-plating and clear cubic zirconium crystal accent',
            'Price' => '18999',
            'image' => 'img/products/medium/elvis_medium.jpg',
            'description' => 'Handcrafted to capture every detail of Pooh dipping into the hunny pot, this solid 
            sterling silver pendant is plated with 14-carat gold,
            Pendant measures 0.78 inch (2 cm) in height, Singapore chain measures 18 inches (45.7 cm) in length',
            'categories_id' => '2',
        ]);

        Products::create([
            'name' => 'Personalised Ring',
            'slug' => 'Personalised Ring',
            'details' => 'Handcrafted in solid sterling silver with 18-carat gold-plated accents',
            'Price' => '38999',
            'image' => 'img/products/medium/elvis_medium.jpg',
            'description' => 'Solid sterling silver ring with 18-carat gold-plating sparkles with 12 mocha diamonds 
            and 12 white diamonds. Optional engraving of 2 names',
            'categories_id' => '1',
        ]);

        Products::create([
            'name' => 'Diamond Earrings',
            'slug' => 'Diamond Earrings',
            'details' => 'Silver-plated earrings feature a pavé of 12 diamonds and engraved inside with I Love You',
            'Price' => '14999',
            'image' => 'img/products/medium/elvis_medium.jpg',
            'description' => 'Handcrafted with silver-plating in a unique wrap-around, inside-out design',
            'categories_id' => '3',
        ]);

        Products::create([
            'name' => 'Personalised Birthstone Bracelet',
            'slug' => 'Personalised Birthstone Bracelet',
            'details' => 'Three-strand stainless steel twisted cable bracelet with 24-carat gold ion-plating, up to 10 engraved names 
            and Swarovski® crystal birthstones. Gift box',
            'Price' => '34999',
            'image' => 'img/products/medium/elvis_medium.jpg',
            'description' => 'Handcrafted of solid stainless steel and ion plated with gleaming 24-carat gold, this bracelet features a 
            stylish twisted cable triple-strand design',
            'categories_id' => '2',
        ]);

    }

}
