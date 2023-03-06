<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject_content extends Model
{
    use HasFactory;
    protected $fillable = ['id_title','id_subtitle','content'];
}
