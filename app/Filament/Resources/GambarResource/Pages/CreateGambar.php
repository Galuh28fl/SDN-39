<?php

namespace App\Filament\Resources\GambarResource\Pages;

use App\Filament\Resources\GambarResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGambar extends CreateRecord
{
    protected static string $resource = GambarResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
