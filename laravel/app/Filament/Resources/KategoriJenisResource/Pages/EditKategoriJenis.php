<?php

namespace App\Filament\Resources\KategoriJenisResource\Pages;

use App\Filament\Resources\KategoriJenisResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriJenis extends EditRecord
{
    protected static string $resource = KategoriJenisResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
