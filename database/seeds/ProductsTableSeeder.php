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
        $faker = Faker::create('en_GB');
    	foreach (range(1,8) as $index) {
    		DB::table('products')->insert([
				'name' => $faker->word,
	        	'slug' => $faker->word,
	    		'description' => $faker->paragraph,
	    		'price' => $faker->randomNumber(2),
	    		'image' => $faker->imageUrl(600, 400, 'abstract') ,
    		]);
    	}
    }
}
