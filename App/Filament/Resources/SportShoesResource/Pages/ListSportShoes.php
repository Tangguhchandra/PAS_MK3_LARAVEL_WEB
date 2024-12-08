<?php

namespace App\Filament\Resources\SportShoesResource\Pages;

use App\Filament\Resources\SportShoesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSportShoes extends ListRecords
{
    protected static string $resource = SportShoesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
