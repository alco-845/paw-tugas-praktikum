<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = "tbl_mahasiswa_laravel";
    protected $primaryKey = 'id';
    
    protected $fillable = ['nim', 'nama', 'email', 'alamat'];
}
