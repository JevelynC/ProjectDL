<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Exercise4 extends Model
{
    use HasFactory;
    protected $table = 'exercise4';
    public $timestamps = false;
}
