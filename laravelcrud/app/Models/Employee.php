<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    // fungsinya $guarded adalah memasukan semua data dan kalau pakai fillnabel harus masukan satu2 datanya
    protected $guarded = [];
}
