<?php

use Illuminate\Database\Seeder;
use App\Models\admins;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Admins::class,1)->create();
    }
}
