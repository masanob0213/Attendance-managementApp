<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '大森',
            'e_mail' => 'ohmori@gmail',
            'password' => '111111'
        ];
        DB::table('members')->insert($param);
        $param = [
            'name' => '長嶋',
            'e_mail' => 'nagashima@gmail',
            'password' => '111111'
        ];
        DB::table('members')->insert($param);
        $param = [
            'name' => '林',
            'e_mail' => 'hayashi@gmail',
            'password' => '111111'
        ];
        DB::table('members')->insert($param);
        $param = [
            'name' => '板本',
            'e_mail' => 'itamoto@gmail',
            'password' => '111111'
        ];
        DB::table('members')->insert($param);
        $param = [
            'name' => '山田',
            'e_mail' => 'yamada@gmail',
            'password' => '111111'
        ];
        DB::table('members')->insert($param);
        $param = [
            'name' => '田中',
            'e_mail' => 'tanaka@gmail',
            'password' => '111111'
        ];
        DB::table('members')->insert($param);
    }
}
