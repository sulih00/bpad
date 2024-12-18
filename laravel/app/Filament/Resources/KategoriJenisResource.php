<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use App\Models\KategoriJenis;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KategoriJenisResource\Pages;
use App\Filament\Resources\KategoriJenisResource\RelationManagers;

class KategoriJenisResource extends Resource
{
    protected static ?string $model = KategoriJenis::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')->required(),
                TextInput::make('ket')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama'),
                TextColumn::make('ket'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKategoriJenis::route('/'),
            'create' => Pages\CreateKategoriJenis::route('/create'),
            'edit' => Pages\EditKategoriJenis::route('/{record}/edit'),
        ];
    }
}
