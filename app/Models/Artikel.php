<?php

namespace App\Models;

use App\Traits\DeletesFileOnModelDeletion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory, DeletesFileOnModelDeletion;
    protected $table = 'artikel';
    protected $fillable = [
        'image','judul', 'tanggal', 
        'deskripsi', 'content'
    ];
}
