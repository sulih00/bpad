<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Transaksi;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TransasksiResource\Pages;
use App\Filament\Resources\TransasksiResource\RelationManagers;

class TransasksiResource extends Resource
{
    protected static ?string $model = Transasksi::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('foto')->required(),
                TextInput::make('nopol')->required(),
                TextInput::make('merk')->required(),
                TextInput::make('user_id')->required(),
                TextInput::make('kendaraans_id')->required(),
                TextInput::make('jenis_id')->required(),
                TextInput::make('instansi_id')->required(),
                TextInput::make('tahun')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')->width(50),
                TextColumn::make('nopol'),
                TextColumn::make('merk'),
                TextColumn::make('user_id'),
                TextColumn::make('kendaraans_id'),
                TextColumn::make('jenis_id'),
                TextColumn::make('instansi_id'),
                TextColumn::make('tahun'),
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
            'index' => Pages\ListTransasksis::route('/'),
            'create' => Pages\CreateTransasksi::route('/create'),
            'edit' => Pages\EditTransasksi::route('/{record}/edit'),
        ];
    }
}
