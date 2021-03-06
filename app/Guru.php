<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guru extends Model
{
    use SoftDeletes;

    protected $table = "guru";
    protected $fillable = ['nama','umur'];
    protected $dates = ['deleted_at'];
}
