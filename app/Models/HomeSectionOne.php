<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeSectionOne extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['item_one','item_two','item_three'];
}
