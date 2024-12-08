<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewCollectionResource\Pages;
use App\Models\NewCollection;
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

class NewCollectionResource extends Resource
{
    protected static ?string $model = NewCollection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Collections';

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
                    ->directory('new_collections')
                    ->required(),
                    ]);
                    
           
    }
    public static function canCreate(): bool
{
    return true;  // Pastikan bisa membuat data
}
    
public static function save(array $data) {
    \Log::info('Data input:', $data);

    try {
        $newCollection = NewCollection::create($data);
        \Log::info('Data disimpan:', $newCollection->toArray());

        dd($newCollection);
    } catch (\Exception $e) {
        \Log::error('Gagal menyimpan data:', ['error' => $e->getMessage()]);
    }
}

    
    
    public static function table(Tables\Table $table): Tables\Table
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNewCollections::route('/'),
            'create' => Pages\CreateNewCollection::route('/create'),
            'edit' => Pages\EditNewCollection::route('/{record}/edit'),
        ];
    }
}
