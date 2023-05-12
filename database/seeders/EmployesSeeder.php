<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class EmployesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = new employee;
        $employee->nip = '22000918';
        $employee->name = 'Gus Purwania1';
        $employee->date_of_birth = '1995-04-14';
        $employee->place_of_birth ='Gianyar';
        $employee->address = 'Gianyar';
        $employee->email = 'guspurwania@gmail.com';
        $employee->phone_number = '081292102901';
        $employee->salary = '100.000';
        $employee->status =  'active';
        $employee->save();
        
        // DB::table('employees')->insert([
        //     'nip'  => '22000918',
        //     'name' => 'Gus Purwania',
        //     'date_of_birth' => '1995-04-14',
        //     'place_of_birth' => 'Gianyar',
        //     'address' => 'Gianyar',
        //     'email' => 'guspurwania@gmail.com',
        //     'phone_number' => '081292102901',
        //     'salary' => '100.000',
        //     'status' => 'active'
        // ]);
    
    
        // DB::table('employees')->insert([
        //     'nip'  => '22000918',
        //     'name' => 'Gus Purwania2',
        //     'date_of_birth' => '1995-04-14',
        //     'place_of_birth' => 'Gianyar',
        //     'address' => 'Gianyar',
        //     'email' => 'guspurwania@gmail.com',
        //     'phone_number' => '081292102901',
        //     'salary' => '150.000',
        //     'status' => 'inactive'
        // ]);
    }
}
