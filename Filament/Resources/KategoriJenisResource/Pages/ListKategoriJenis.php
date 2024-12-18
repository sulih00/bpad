<?php

namespace App\Filament\Resources\KategoriJenisResource\Pages;

use App\Filament\Resources\KategoriJenisResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriJenis extends ListRecords
{
    protected static string $resource = KategoriJenisResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
