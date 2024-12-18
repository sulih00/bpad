<?php

namespace App\Filament\Resources\KategoriKendaraanResource\Pages;

use App\Filament\Resources\KategoriKendaraanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriKendaraan extends EditRecord
{
    protected static string $resource = KategoriKendaraanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
