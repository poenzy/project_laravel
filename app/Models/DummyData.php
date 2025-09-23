<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// app/Models/DummyData.php
// ...
class DummyData extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'city'];
}
