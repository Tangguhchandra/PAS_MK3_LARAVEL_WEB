<?php

namespace App\Filament\Resources\NewCollectionResource\Pages;

use App\Filament\Resources\NewCollectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNewCollections extends ListRecords
{
    protected static string $resource = NewCollectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
