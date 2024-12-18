<?php

namespace App\Filament\Resources\KategoriInstansiResource\Pages;

use App\Filament\Resources\KategoriInstansiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKategoriInstansi extends CreateRecord
{
    protected static string $resource = KategoriInstansiResource::class;

    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}
