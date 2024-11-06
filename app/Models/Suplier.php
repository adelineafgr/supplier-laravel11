<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Suplier extends Model
{
    use HasFactory;
    protected $table = 'suplier';
    protected $primaryKey = 'id';
    protected $fillable = ['id_suplier', 'nama_suplier', 'alamat_suplier', 'telp_suplier'];
}
