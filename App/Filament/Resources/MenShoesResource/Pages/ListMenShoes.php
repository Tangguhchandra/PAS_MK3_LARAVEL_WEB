<?php

namespace App\Filament\Resources\MenShoesResource\Pages;

use App\Filament\Resources\MenShoesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMenShoes extends ListRecords
{
    protected static string $resource = MenShoesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
