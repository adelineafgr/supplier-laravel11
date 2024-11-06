<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = ['id_user', 'nama', 'username', 'password', 'level'];
}
