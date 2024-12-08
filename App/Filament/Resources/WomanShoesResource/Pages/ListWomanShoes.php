<?php

namespace App\Filament\Resources\WomanShoesResource\Pages;

use App\Filament\Resources\WomanShoesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWomanShoes extends ListRecords
{
    protected static string $resource = WomanShoesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
