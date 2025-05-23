<?php

namespace App\Filament\Resources\GambarResource\Pages;

use App\Filament\Resources\GambarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGambar extends EditRecord
{
    protected static string $resource = GambarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
