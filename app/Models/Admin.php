<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Admin extends Authenticatable implements AuthenticatableContract
{
    use HasFactory;
    protected $table = 'admins';
    protected $fillable = [
        'name', 'email', 'password',
    ];

    // Metode dari Authenticatable yang harus diimplementasikan
    public function getAuthIdentifierName()
    {
        return 'id'; // Atur sesuai dengan primary key Anda
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}
