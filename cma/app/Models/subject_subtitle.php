<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject_subtitle extends Model
{
    use HasFactory;
    
    protected $fillable = ['id_title','subtitle'];
}
