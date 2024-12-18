<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Transaksi;
use App\Models\Pegawai;
use App\Models\KategoriInstansi;
use App\Models\KategoriKendaraan;
use App\Models\KategoriJenis;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MultiSelect;
use App\Filament\Resources\TransaksiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TransaksiResource\RelationManagers;

class TransaksiResource extends Resource
{
    protected static ?string $model = Transaksi::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('foto')->required(),
                TextInput::make('nopol')->required(),
                TextInput::make('merk')->required(),

                Select::make('user_id')
                ->label('Pegawai')
                ->options(Pegawai::all()->pluck('nama', 'id'))
                ->searchable(),

                Select::make('instansi_id')
                ->label('Instansi')
                ->options(KategoriInstansi::all()->pluck('nama', 'id'))
                ->searchable(),

                Select::make('kendaraan_id')
                ->label('Kendaraan')
                ->options(KategoriInstansi::all()->pluck('nama', 'id'))
                ->searchable(),

                Select::make('jenis_id')
                ->label('Jenis')
                ->options(KategoriJenis::all()->pluck('nama', 'id'))
                ->searchable(),

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
            'index' => Pages\ListTransaksis::route('/'),
            'create' => Pages\CreateTransaksi::route('/create'),
            'edit' => Pages\EditTransaksi::route('/{record}/edit'),
        ];
    }
}
