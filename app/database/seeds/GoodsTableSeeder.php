<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class GoodsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Good::create([
				'no'=>'5D1A2375-'.$index,
				'name'=>'5D1A2375-'.$index,
				'price'=>'12.00',
				'image'=>'medium.5D1A2375-'.$index.'.jpg',
				'web_price'=>'12.00',
			]);

			Good::create([
				'no'=>'t22'.$index,
				'name'=>'t22'.$index,
				'price'=>'15.00',
				'image'=>'medium.t22-'.$index.'.jpg',
				'web_price'=>'15.00',
			]);
			
			Good::create([
				'no'=>'118-1B'.$index,
				'name'=>'118-1B'.$index,
				'price'=>'10.00',
				'image'=>'medium.118-1B-'.$index.'.jpg',
				'web_price'=>'10.00',
			]);
		}
	}

}