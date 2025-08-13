<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\kegiatan;

class tag extends Model
{
    use HasFactory;
    protected $table = 'tag';
    protected $fillable = [
        'nama'
    ];
    public function kegiatan()
    {
        return $this->hasMany(kegiatan::class);
    }
    public function gambar()
    {
        return $this->hasMany(gambar::class);
    }
}