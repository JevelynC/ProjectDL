<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise1 extends Model
{
    use HasFactory;

    protected $table = 'exercise1';
    public $timestamps = false;

    protected $fillable = ['answer', 'answer_desc'];

    // Ensure that the $primaryKey is 'id' and it is auto-incrementing
    protected $primaryKey = 'id';
    public $incrementing = true;
}
