<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class todoUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $useradmin=User::create([

            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'puesto'=>'jefe',
            'area_id'=>'200',
            'password'=>Hash::make('admin'),

        ]);



    }
}
