<?php

namespace Database\Seeders;

use App\Models\UserModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        UserModel::firstOrCreate(['ACCT'=>'testing'],[
          'NAME'=>'testing',
          'ACCT'=>'testing',
          'PWD'=>'testing',
          'SEX'=>'1',
          'EMAIL'=>'testing@gmail.com',
          'IDENTITY_ID' => 1,
        ]);
        UserModel::firstOrCreate(['ACCT'=>'admin'],[
          'NAME'=>'admin',
          'ACCT'=>'admin',
          'PWD'=>'admin',
          'SEX'=>'1',
          'EMAIL'=>'admin@gmail.com',
          'IDENTITY_ID' => 1,
        ]);
        UserModel::factory(20)->create();
    }
}
