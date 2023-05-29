<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Storage;
use Session;
use DB;


class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        
    }

   
  
public function index()
    {
        $employees = Employee::latest()->paginate(5);
    
        return view('employee.employee_list',compact('employees'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        // dd('10');
        return view('employee.create');
    }

     public function store(Request $request)
    {
        //dd('10');
        $request->validate([
            'name' => 'required',
            'email'  => 'required',
            'address'  => 'required',
            'phone'  => 'required',
            
           
        ]);
     Employee::create($request->post());
      
        return redirect()->route('employees')
                        ->with('success','Employee created successfully.');
    }







     public function show($id='' )
    {
        
        
         $employees =Employee::where('id', $id)->first();
        // dd($employees);
        return view('employee.show', compact('employees'));
    } 

    // public function show($id = '')
    // {
    //     $employee = Employee::has('email')->where('id', $id)->get();
    //     return view('employee.show', compact('employee'));
    // }
    





    public function edit($id='')
    {                                                                     
        $employees =Employee::where('id', $id)->first();
        return view('employee.edit', compact('employees'));
    }


    

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'address' => 'required',
        'phone' => 'required',
    ]);

    $employees = Employee::find($id);
    $employees->name = $request->get('name');
    $employees->email = $request->get('email');
    $employees->address = $request->get('address');
    $employees->phone = $request->get('phone');
    $employees->save();

    return redirect()->route('employees')->with('success', 'Employee has been updated!');



}














// public function update(Request $request, $id)
// {
//     $employees = Employee::findOrFail($id);
//     $employees->update($request->all());
//     return redirect()->route('employees.index')->with('success', 'Employee updated successfully');
// }











    public function destroy($id)
    {
        $employee = Employee::find($id);
       
        DB::table('employees')->where('id', $id)->delete();
       
      
       
        return back();
    }


    
     
   
}
