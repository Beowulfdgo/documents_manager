<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;

class CompanyController extends Controller
{ 
    public  function updateStatus($status,$id)
    {  //dd($id);
        $company = Companies::find($id);

        if ($company) {
            // Si el nuevo estado es "true", desactivamos todos los demás registros primero
            if ($status== 'true') {
                Companies::where('id', '!=', $id)->update(['status' => 'false']);
            }

            // Actualizamos el estado de la empresa seleccionada
            $company->status = $status;
            $company->save();
        }

     
    }
    public function index()
    {
        $companies = Companies::all();
        return view('layouts.companies.index', compact('companies'));
    }

    public function create()
    {
        return view('layouts.companies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:companies,name',
        ]);
///aqui checando el valor de null  de status
//if($request->status) {$status=false}         

     Companies::create([
            'name' => $request->name,
            'description' => $request->description,
            'file' => $request->file,
            'status'=> $request->status
        ]);

        if ($request->status === 'true') {
            Companies::query()->update(['status' => 'false']);
    }
       // dd(Companies::all()->last()->id);
       // $this->updateStatus($request->status,Companies::all()->last()->id);
        return redirect()->route('companies.index')->with('success', 'Company created successfully.');
    }

    public function show(Companies $company)
    {
        return view('layouts.companies.show', compact('company'));
    }

    public function edit(Companies $company)
    {
        return view('layouts.companies.edit', compact('company'));
    }

    public function update(Request $request, Companies $company)
    {
        $request->validate([
            'name' => 'required|unique:companies,name,' . $company->id,
        ]);

        $company->update([
            'name' => $request->name,
            'description' => $request->description,
            'file' => $request->file,
            'status'=> $request->status
        ]);
        //dd(Companies::find($company->id));
        $this->updateStatus($request->status,$company->id);

        return redirect()->route('companies.index')->with('success', 'Company updated successfully.');
    }

    public function destroy(Companies $company)
    {
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'Company deleted successfully.');
    }
}