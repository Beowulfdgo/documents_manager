<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documents_uploads;
use App\Models\TemporaryFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UploadController extends Controller
{

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
                Storage::copy('files/tmp/'.$temp_file->folder. '/'.$temp_file->file,'posts/'.Auth::user()->departments_id. '/'.$temp_file->file);
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
                'path'=> 'posts/'. $request->departments_id,
                'name'=>$temp_file->file,
                'users_id'=>Auth::user()->id,
                'status'=>1,
                'departments_id'=> Auth::user()->departments_id,
            ]);
            Storage::deleteDirectory('files/tmp/'.$temp_file->folder);
            $temp_file->delete();
         return redirect('/dashboard/')-> with('sucess','Archivo upload');
         }
         return redirect('/dashboard/')-> with('danger','please upload correct file');
        //dd($request);
    }

    public function tmpUpload (Request $request) {
        $project_pdf = $request->file('file');
         $folder =uniqid('file',true);
        $filename = time() . '.' . $project_pdf->getClientOriginalName();
        $path = $project_pdf->storeAs('files/tmp/'. $folder, $filename);
       // dd($request);    
        TemporaryFile::create([
            'users_id'=>Auth::user()->id,
            'status'=>1,
            'departments_id'=> Auth::user()->departments_id,
            'folder'=> $folder,
          'file'=> $filename
       ]);
      // dd($folder);
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

    public static function allFiles($id) {
        //return all documents $documents = DB::table('Documents_uploads')->get();
        //ok $documents=Documents_uploads::where('departments_id',$id)->get();
        $documentsbyid=Documents_uploads::where('departments_id',$id)->simplePaginate(3);
        //dd($documents );
        return $documentsbyid;
    }

    public static function allFilesbyid($id) {
        //return all documents $documents = DB::table('Documents_uploads')->get();
        //ok $documents=Documents_uploads::where('departments_id',$id)->get();
        $documentsbyid=Documents_uploads::where('departments_id',$id)->simplePaginate(3);
        //dd($documents );
        return view($documentsbyid);
    }

    public static function download(Request $request)
    {
//no funciona
        $path =$request->path;
        $file_name= $request->file_name;
        $file_path = public_path('posts/'.$path.'/'.$file_name);
       return response()->download($file_path);
       //return Response::download('posts/'.$path.'/', $file_name, ['Content-Type: application/zip']);
     }

}
