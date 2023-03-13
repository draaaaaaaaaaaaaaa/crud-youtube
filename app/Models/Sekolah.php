<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sekolah extends Model
{
    protected $table = 'sekolahs';
    protected $guarded = [];
    protected $dates = ['created_at'];
}
