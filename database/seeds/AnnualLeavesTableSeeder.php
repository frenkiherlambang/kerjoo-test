<?php

use Illuminate\Database\Seeder;

class AnnualLeavesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create 100 annual leaves
        factory(App\AnnualLeave::class, 100)->create();
    }
}
