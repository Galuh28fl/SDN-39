<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tag;
use App\Traits\DeletesFileOnModelDeletion;

class kegiatan extends Model
{
    use HasFactory, DeletesFileOnModelDeletion;
    protected $table = 'kegiatan';
    protected $fillable = [
        'image','judul','tanggal','deskripsi', 'tag_id'
    ];

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
