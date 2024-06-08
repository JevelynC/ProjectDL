<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Exercise3 extends Model
{
    use HasFactory;
    protected $table = 'exercise3';
    public $timestamps = false;
}
