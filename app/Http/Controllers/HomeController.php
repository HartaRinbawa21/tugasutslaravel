<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class HomeController extends Controller
{
    public function index($name)
    {
        return view('home')->with(compact('name'));
    }

    public function get_employee(Request $request)
    {
        if(empty($request->id))
            $data = Employee::all(); // get semua data employee
        else
            $data = Employee::find($request->id); // get data employee dengan id 1
        return json_encode($data);
    }

    public function post_employee(Request $request)
    {
        $employee = new employee;
        $employee->nip = $request->nip;
        $employee->name = $request->name;
        $employee->date_of_birth = $request->date_of_birth;
        $employee->place_of_birth = $request->place_of_birth;
        $employee->address = $request->address;
        $employee->email = $request->email;
        $employee->phone_number = $request->phone_number;
        $employee->salary = $request->salary;
        $employee->status = $request->status;
        
        if($employee->save()){
            return json_encode([
                'message' => 'Success'
            ]);
        }else{
            return json_encode([
                'message' => 'Fail'
            ]);
        }
    }
}
