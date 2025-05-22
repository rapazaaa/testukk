<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PklResource\Pages;
use App\Filament\Resources\PklResource\RelationManagers;
use App\Models\Pkl;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PklResource extends Resource
{
    protected static ?string $model = Pkl::class;

    protected static ?string $navigationGroup = 'System Management';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Data Siswa PKL';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\Select::make('siswa_id')
                ->relationship('siswa', 'nama')
                ->searchable()
                ->required()
                ->label('Nama Siswa'),

            Forms\Components\Select::make('industri_id')
                ->relationship('industri', 'nama')
                ->searchable()
                ->required()
                ->label('Nama Industri'),

            Forms\Components\Select::make('guru_id')
                ->relationship('guru', 'nama')
                ->searchable()
                ->required()
                ->label('Nama Guru Pembimbing'),

            Forms\Components\DatePicker::make('mulai')
                ->required(),

            Forms\Components\DatePicker::make('selesai')
                ->required(),
        ]); 
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\TextColumn::make('siswa.nama')
                ->label('Nama Siswa')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('industri.nama')
                ->label('Nama Industri')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('guru.nama')
                ->label('Nama Guru Pembimbing')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('mulai')
                ->date()
                ->sortable(),

            Tables\Columns\TextColumn::make('selesai')
                ->date()
                ->sortable(),

            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),

            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListPkls::route('/'),
            'create' => Pages\CreatePkl::route('/create'),
            'edit' => Pages\EditPkl::route('/{record}/edit'),
        ];
    }
}