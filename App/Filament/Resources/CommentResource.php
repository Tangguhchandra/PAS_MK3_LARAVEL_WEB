<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentResource\Pages;
use App\Filament\Resources\CommentResource\RelationManagers;
use App\Models\Comment;
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

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Comment';

    public static function form(Forms\Form $form): Forms\Form
{
    return $form
        ->schema([
            Forms\Components\TextInput::make('name')
                ->label('Nama Pengulas')
                ->required(),

            Forms\Components\Textarea::make('description')
                ->label('Komentar')
                ->required(),

            Forms\Components\TextInput::make('rating')
                ->label('Rating')
                ->numeric()
                ->step(0.1)
                ->rules([
                    'numeric',
                    'min:0',
                    'max:5',
                ])
                ->required()
                ->helperText('Rating harus antara 0 hingga 5'),

            Forms\Components\FileUpload::make('image')
                ->label('Foto Pengulas')
                ->image()
                ->directory('comment_images')
                ->required(),
                
        ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('name')
                ->label('Nama Pengulas')
                ->searchable()
                ->sortable(),

            TextColumn::make('description')
                ->label('Komentar')
                ->searchable(),

            TextColumn::make('rating')
                ->label('Rating')
                ->sortable(),

            ImageColumn::make('image')
                ->label('Gambar'),
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
            'index' => Pages\ListComments::route('/'),
            'create' => Pages\CreateComment::route('/create'),
            'edit' => Pages\EditComment::route('/{record}/edit'),
        ];
    }
}
