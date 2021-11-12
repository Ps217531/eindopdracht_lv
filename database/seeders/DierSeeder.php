<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('dieren')->insert([
            'dier' => 'poes',
            'chipnummer' => '56765',
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now()
        ]);
    }
}
