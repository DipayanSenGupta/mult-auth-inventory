<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    protected $toTruncate = ['products','admins','users','sales','writers','histories'];
    public function run()
    {
        Model::unguard();
        foreach($this->toTruncate as $table) {
            DB::table($table)->truncate();
        }
        $this->call(UsersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);

        Model::reguard();    
    }
}
