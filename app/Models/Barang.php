<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'gudangbarangproduction';
    protected $primaryKey = 'id'; // Menentukan primary key
    protected $fillable = ['nama_barang', 'harga', 'stok', 'id_supplier'];
}
