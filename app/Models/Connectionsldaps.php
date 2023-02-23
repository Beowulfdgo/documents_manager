<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class connectionsldaps extends Model
{
    use HasFactory;
    protected $fillable =['name','description','server','port','username','password','base_dn'];
}
