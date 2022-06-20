<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategoryModel extends Model
{
    use HasFactory;

    protected $fillable = [       
        'title','parent_id','slug','order','is_featured','is_active'
    ];

    protected $table = "job_categories";
    protected $primaryKey ="id";
    public $timestamps =true;


    public function children(){

        return $this->hasMany(JobCategoryModel::class ,'parent_id')->with('children');
    }

}
