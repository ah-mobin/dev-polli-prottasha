<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentaryYtLink extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title','yt_vide_id'];

}
