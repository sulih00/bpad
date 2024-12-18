<?php

namespace App\Filament\Resources\KategoriInstansiResource\Pages;

use App\Filament\Resources\KategoriInstansiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriInstansis extends ListRecords
{
    protected static string $resource = KategoriInstansiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
