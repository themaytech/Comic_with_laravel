<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'category_id',
        'category_name',
        'description',
    ];
}
