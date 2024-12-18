<?php

namespace App\Filament\Resources\KategoriJenisResource\Pages;

use App\Filament\Resources\KategoriJenisResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKategoriJenis extends CreateRecord
{
    protected static string $resource = KategoriJenisResource::class;

    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}
