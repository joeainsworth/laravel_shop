<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('en_EN');
    	foreach (range(1,8) as $index) {
            
            $word = $faker->word;

    		DB::table('products')->insert([
				'name' => $word,
	        	'slug' => $word,
	    		'description' => $faker->paragraph,
                'stock' => $faker->randomNumber(1),
	    		'price' => $faker->randomNumber(2),
	    		'image' => 'http://placehold.it/600x400/efefef/?text='.$word ,
    		]);
    	}
    }
}
