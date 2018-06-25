<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sexes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('sexes')->insert(
            ['name' => 'Male',]
        );
        DB::table('sexes')->insert(
            ['name' => 'Female',]
        );

    }
}
