<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PageAbout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['history','mission','vision'];
    
}
