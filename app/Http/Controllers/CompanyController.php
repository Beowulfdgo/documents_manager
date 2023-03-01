<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;

class CompanyController extends Controller
{
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

        return redirect()->route('companies.index')->with('success', 'Company updated successfully.');
    }

    public function destroy(Companies $company)
    {
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'Company deleted successfully.');
    }
}