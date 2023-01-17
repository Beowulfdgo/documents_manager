<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documents_uploads;

class UploadController extends Controller
{
    //
    public function upload (Request $request) {
        if($request->hasFile('file')){
            $project_pdf = $request->file('file');
            $filename = time() . '.' . $project_pdf->getClientOriginalExtension();

         }
    }

    public function store (Request $request) {
        if($request->hasFile('file')){
            $project_pdf = $request->file('file');
           $filename = time() . '.' . $project_pdf->getClientOriginalExtension();
           //$folder =uniqid('file',true);
           //$project_pdf->storeAs('files/tmp'. $folder, $filename);
           $folder='uploads/tmp';
           $path = $project_pdf->store($request->name.'/'.$folder);
           Documents_uploads::create([
                'path'=> $request->name.'/'.$folder,
                'name'=>$filename
            ]);
         return redirect('/')-> with('sucess','Post created');
         }
         return redirect('/')-> with('danger','please upload image');
    }

}
