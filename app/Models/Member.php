<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'nim', 'jurusan', 'prodi', 'jenis_kelamin', 'alamat', 'email', 'phone', 'unit_kegiatan', 'image'];
    protected $table = 'members';
}
