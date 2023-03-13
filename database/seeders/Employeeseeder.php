<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Employeeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'nama' =>'Daffa Ramadhan',
            'jeniskelamin' => 'cowo',
            'notelepon' => '08283848',

        ]);
    }
}
