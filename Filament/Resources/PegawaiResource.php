<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Pegawai;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PegawaiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PegawaiResource\RelationManagers;

class PegawaiResource extends Resource
{
    protected static ?string $model = Pegawai::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('foto')->required(),
                TextInput::make('nama')->required(),
                TextInput::make('nip')->required(),
                TextInput::make('tempat_lahir')->required(),
                DatePicker::make('tgl_lahir')->required(),
                TextInput::make('alamat')->required(),
                TextInput::make('telp')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')->width(50),
                TextColumn::make('nip'),
                TextColumn::make('nama'),
                TextColumn::make('tempat_lahir'),
                TextColumn::make('tgl_lahir'),
                TextColumn::make('alamat'),
                TextColumn::make('telp'),
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
            'index' => Pages\ListPegawais::route('/'),
            'create' => Pages\CreatePegawai::route('/create'),
            'edit' => Pages\EditPegawai::route('/{record}/edit'),
        ];
    }
}
