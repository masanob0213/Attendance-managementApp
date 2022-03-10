<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendancesTableSeeder extends Seeder
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
            'attended_day' => '2022-02-03',
            'started_at' => ' 08:00:00',
            'ended_at' => '20:00:00'

        ];
        DB::table('attendances')->insert($param);
        $param = [
            'member_id' => '1',
            'attended_day' => '2022-02-03',
            'started_at' => ' 08:00:00',
            'ended_at' => '20:00:00'

        ];
        DB::table('attendances')->insert($param);
        $param = [
            'member_id' => '1',
            'attended_day' => '2022-02-03',
            'started_at' => ' 08:00:00',
            'ended_at' => '20:00:00'

        ];
        DB::table('attendances')->insert($param);
        $param = [
            'member_id' => '1',
            'attended_day' => '2022-02-03',
            'started_at' => ' 08:00:00',
            'ended_at' => '20:00:00'

        ];
        DB::table('attendances')->insert($param);
        $param = [
            'member_id' => '1',
            'attended_day' => '2022-02-03',
            'started_at' => ' 08:00:00',
            'ended_at' => '20:00:00'

        ];
        DB::table('attendances')->insert($param);
        $param = [
            'member_id' => '1',
            'attended_day' => '2022-02-03',
            'started_at' => ' 08:00:00',
            'ended_at' => '20:00:00'

        ];
        DB::table('attendances')->insert($param);
    }
}
