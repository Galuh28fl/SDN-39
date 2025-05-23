<?php

namespace App\Models;

use App\Traits\DeletesFileOnModelDeletion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    use HasFactory, DeletesFileOnModelDeletion;
    protected $table = 'extras';
    protected $fillable = [
        'image','judul','deskripsi','ketentuan',
        'siswa','jadwal','waktu'
    ];
}
