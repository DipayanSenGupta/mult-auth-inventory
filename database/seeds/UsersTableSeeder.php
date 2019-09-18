<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Admin::class)->create();
        for ($x = 0; $x <= 0; $x++) {
            factory(App\Writer::class)->create();
            // factory(App\Item::class, 5)->create(['category_id' => $category->id])
        }
    }
}
