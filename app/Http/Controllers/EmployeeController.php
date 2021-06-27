<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Employee;
use App\Http\Requests\StoreMember;
use App\Http\Requests\UpdateMember;





class EmployeeController extends Controller
{
    public function index()
    {
    //memberテーブルからname,telephone,emailを$membersに格納
    $employees=DB::table('employees')
      ->select('id', 'name', 'telephone', 'email')
      // ->get();
      //↓ 1ページに表示する件数を指定
      ->paginate(5);

    //viewを返す(compactでviewに$membersを渡す)
    return view('employee/index', compact('employees'));
    }

    public function create()
    {
      return view('employee/create');
    }



    //public function store(Request $request)
    //↓変更
    public function store(StoreMember $request)
    {

        $employee=new Employee;
          
        $employee->name=$request->input('name');
        $employee->telephone=$request->input('telephone');
        $employee->email=$request->input('email');
          
        $employee->save();
            
        //一覧表示画面にリダイレクト
        return redirect('employee/index');
    }

    public function show($id)
    {
      $employee=Employee::find($id);
  
      return view('employee/show', compact('employee'));
    }

    
    public function edit($id)
    {
      $employee=Employee::find($id);
  
      return view('employee/edit', compact('employee'));

    }

    public function update(UpdateMember $request, $id )
    {
        $employee = Employee::find($id);
        $employee->name = $request->input('name');
        $employee->telephone = $request->input('telephone');
        $employee->email = $request->input('email');

        $employee->save();

        return redirect('employee/index');

    }

    public function destroy($id)
    {
      $employee=Employee::find($id);
      $employee->delete();
  
      return redirect('employee/index');

    }
}
