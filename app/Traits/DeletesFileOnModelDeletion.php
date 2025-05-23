<?php
namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait DeletesFileOnModelDeletion
{
    protected static function bootDeletesFileOnModelDeletion()
    {
        static::deleting(function ($model) {
            $fileColumn = $model->fileColumn ?? 'image';
            $disk = $model->fileDisk ?? 'public';

            if ($model->$fileColumn && Storage::disk($disk)->exists($model->$fileColumn)) {
                Storage::disk($disk)->delete($model->$fileColumn);
            }
        });
    }
}
