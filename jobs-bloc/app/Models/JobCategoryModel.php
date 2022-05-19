<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategoryModel extends Model
{
    use HasFactory;
    protected $fillable = [       
        'title','is_active'
    ];
    protected $table = "job_categories";
    protected $primaryKey ="id";
    public $timestamps =true;
}
