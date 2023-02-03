<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departments;
use App\Models\Documents_uploads;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    //

    
    public function index()
    {
        
        $departments = Departments::all();
        return view('layouts.departments.index', compact('departments'));
    }

    public function create()
    {
        return view('layouts.departments.create');
    }

    public function store(Request $request)
    {
        $department = new Departments;
        $department->name = $request->name;
        $department->save();
        //return redirect()->route('/dashboard/department/create'); 
        return redirect()->action([DepartmentController::class, 'index']);
    }

    public function show($id)
    {
        $department = Departments::find($id);
        return view('layouts.departments.show', compact('department'));
    }

    public function edit($id)
    {
        $department = Departments::find($id);
        return view('layouts.departments.edit', compact('department'));
    }

    public function update(Request $request, $id)
    {
        $department = Departments::find($id);
        $department->name = $request->name;
        $department->save();
        //return redirect()->route('layouts.departments.index');
        return redirect()->action([DepartmentController::class, 'index']);
    }

    public function destroy($id)
    {
        $department = Departments::find($id);
        $department->delete();
        return redirect()->route('department.index');
    }
    public function allDepartments() {
        //$documents = \App\Models\documents_uploads::with('departments')->get();
        $documents= Documents_uploads::find(1);
        //dd($documents->departments);
        //$documents->departments;
        $departments = DB::table('departments')->get(); 
        return view('welcome',['departments'=>$departments,'documents'=>$documents]); 
           }
    public static function department($id) {
            $department = Departments::find($id);
            return $department; 
    }  
    
    public static function documentsDepartment() {
        $documents= Documents_uploads::find(1);
        //dd($documents->departments);
        $documents->departments;
        return $documents; 
}  
}
