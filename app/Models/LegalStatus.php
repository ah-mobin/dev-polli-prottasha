<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LegalStatus extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['department_name','registration_no','registration_link','registration_date'];
}
