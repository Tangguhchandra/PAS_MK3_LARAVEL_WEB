<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SportShoesResource\Pages;
use App\Filament\Resources\SportShoesResource\RelationManagers;
use App\Models\SportShoes;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput\Mask;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class SportShoesResource extends Resource
{
    protected static ?string $model = SportShoes::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Shoes(Sepatu)';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('name')
                ->label('Nama')
                ->required(),

            Forms\Components\Textarea::make('description')
                ->label('Deskripsi')
                ->required(),

                    TextInput::make('price')
                    ->label('Price')
                    ->rules(['numeric', 'min:0'])
                    ->required(),
                

                    TextInput::make('rating')
                    ->label('Rating')
                    ->numeric()
                    ->step(0.1)
                    ->rules([
                        'numeric',
                        'min:0',
                        'max:5',
                    ])
                    ->required()
                    ->helperText('Ratting harus di atas 0 tidak boleh lebih dari 5'),

                FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->directory('sport_shoes')
                    ->required(),
                    ]);
    }
    public static function canCreate(): bool
    {
        return true;  // Pastikan bisa membuat data
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('name')
                ->label('Name')
                ->searchable()
                ->sortable()
                ->searchable()
                ,

            TextColumn::make('price')
                ->label('Price')
                ->money('idr', true)
                ->sortable(),
                

            TextColumn::make('rating')
                ->label('Rating')
                ->sortable(),
                

            ImageColumn::make('image')
                ->label('Image'),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListSportShoes::route('/'),
            'create' => Pages\CreateSportShoes::route('/create'),
            'edit' => Pages\EditSportShoes::route('/{record}/edit'),
        ];
    }
}
