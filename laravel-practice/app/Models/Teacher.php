<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory;
    use SoftDeletes;

    
  

    protected $fillable = [
        'name', 'class_allocated'
        ];
        protected $hidden = [
        'created_at', 'updated_at',
        ];
}
