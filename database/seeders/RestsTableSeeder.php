<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'member_id' => '1',
            'attended_id' => '1'
        ];
        DB::table('rests')->insert($param);
        $param = [
            'member_id' => '2',
            'attended_id' => '1'
        ];
        DB::table('rests')->insert($param);
    }
}
