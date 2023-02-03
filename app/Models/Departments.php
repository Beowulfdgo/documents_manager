<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Departments extends Model
{
    use HasFactory;
    protected $fillable =['name'];
    
    public $timestamps = false;

    public function user()
    {
      //return $this->hasOne(Departments::class,'departments_id','id');
      return $this->belongsTo(User::class);
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class, 'department_document');
    }
}
