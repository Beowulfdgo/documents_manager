<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
//use Illuminate\Support\Facades\DB;


class Departments extends Model
{
    use HasFactory;
    protected $fillable =['name'];
    
    public $timestamps = false;
     
    //$documents = DB::table('documents_uploads')->join('departments', 'documents_uploads.departments_id', '=', 'departments.id')->select('documents_uploads.*')->get();
    
    
    //SELECT * from documents_uploads INNER JOIN departments on documents_uploads.departments_id=departments.id;
   

    public function user()
    {
      //return $this->hasOne(Departments::class,'departments_id','id');
      return $this->belongsTo(User::class);
    }

   // public function departments()
    //{
    //    return $this->belongsToMany(Department::class, 'department_document');
    //}

    public function documents_dep() {
      return $this->hasMany(Documents_uploads::class);
  }

  
}
