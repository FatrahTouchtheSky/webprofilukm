<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'nim', 'department', 'program_of_study', 'gender', 'address', 'email', 'phone_number', 'unit_of_activity', 'photo'];
}
