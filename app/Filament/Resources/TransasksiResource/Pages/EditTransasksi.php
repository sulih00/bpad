<?php

namespace App\Filament\Resources\TransasksiResource\Pages;

use App\Filament\Resources\TransasksiResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTransasksi extends EditRecord
{
    protected static string $resource = TransasksiResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
