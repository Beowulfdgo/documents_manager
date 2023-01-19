<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documents_uploads;
use App\Models\TemporaryFile;
use Illuminate\Support\Facades\Storage;

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
        //dd($request);
        $temp_file=TemporaryFile::where('folder',$request->file)->first();

        //*if($request->hasFile('file')){
            if($temp_file){
                Storage::copy('files/tmp/'.$temp_file->folder. '/'.$temp_file->file,'posts/'.$request->name. '/'.$temp_file->file);
           //* $project_pdf = $request->file('file');
           //*$filename = time() . '.' . $project_pdf->getClientOriginalName();
           //$folder =uniqid('file',true);
           //$project_pdf->storeAs('files/tmp'. $folder, $filename);
           //*$folder='uploads/tmp';
           //$path = $project_pdf->store($request->name.'/'.$folder, $filename);
           //*$path = $project_pdf->storeAs('files/tmp/'. $request->name, $filename);
           Documents_uploads::create([
                //*'path'=> 'files/tmp/'. $request->name,
                //*'name'=>$filename
                'path'=> 'posts/'. $request->name,
                'name'=>$temp_file->file
            ]);
            Storage::deleteDirectory('files/tmp/'.$temp_file->folder);
            $temp_file->delete();
         return redirect('/')-> with('sucess','Post created');
         }
         return redirect('/')-> with('danger','please upload image');
    }

    public function tmpUpload (Request $request) {
        $project_pdf = $request->file('file');
        $folder =uniqid('file',true);
        $filename = time() . '.' . $project_pdf->getClientOriginalName();
        $path = $project_pdf->storeAs('files/tmp/'. $folder, $filename);
        TemporaryFile::create([
          'folder'=> $folder,
          'file'=> $filename
        ]);
        return $folder;
    }
    public function tmpDelete (Request $request) { 
        $temp_file=TemporaryFile::where('folder',request()->getContent())->first();
    if($temp_file){
        Storage::deleteDirectory('files/tmp/'.$temp_file->folder);
        $temp_file->delete();
        return response('');
    }
    }

}
