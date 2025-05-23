<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tag;
use App\Traits\DeletesFileOnModelDeletion;
use Illuminate\Support\Facades\Storage;

class gambar extends Model
{
    use HasFactory, DeletesFileOnModelDeletion;
    protected $table = 'gambar';
    protected $fillable = [
        'image','tag_id'
    ];
    public function tag()
    {
        return $this->belongsTo(tag::class);
    }
}
