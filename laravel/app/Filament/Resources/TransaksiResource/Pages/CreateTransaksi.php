<?php

namespace App\Filament\Resources\TransaksiResource\Pages;

use App\Filament\Resources\TransaksiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTransaksi extends CreateRecord
{
    protected static string $resource = TransaksiResource::class;

    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}
