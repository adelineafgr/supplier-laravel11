<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $table = 'suplier';
    protected $primaryKey = 'id';
    protected $fillable = ['id_suplier', 'nama_suplier', 'alamat_suplier', 'telp_suplier'];
}
