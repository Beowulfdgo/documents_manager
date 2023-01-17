<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents_uploads extends Model
{
    use HasFactory;
    protected $fillable = ['name','path'];
}
