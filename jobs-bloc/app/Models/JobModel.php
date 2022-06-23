<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobModel extends Model
{
    use HasFactory;

    protected $table = "job";
    protected $primaryKey ="id";
    public $timestamps =true;
}
