<?php

namespace App\Filament\Resources\TransasksiResource\Pages;

use App\Filament\Resources\TransasksiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTransasksis extends ListRecords
{
    protected static string $resource = TransasksiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
