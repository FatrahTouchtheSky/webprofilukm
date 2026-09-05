<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    protected $fillable = ['title', 'time', 'image'];
    use HasFactory;
    protected $table = 'galerys';
}
