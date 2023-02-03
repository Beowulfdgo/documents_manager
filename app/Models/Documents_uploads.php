<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents_uploads extends Model
{
    use HasFactory;
    protected $fillable = ['name','path','users_id','status','departments_id'];
    
   // public function departments()
   // {
    //    return $this->belongsToMany(Documents_uploads::class, 'department_document');
    //}


    public function user() {
        return $this->belongsTo(User::class);
    }

    public function departments() {
        return $this->belongsTo(Documents_uploads::class);
    }
  
}
