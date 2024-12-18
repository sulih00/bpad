<?php

namespace App\Filament\Resources\KategoriKendaraanResource\Pages;

use App\Filament\Resources\KategoriKendaraanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKategoriKendaraan extends CreateRecord
{
    protected static string $resource = KategoriKendaraanResource::class;

    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}
