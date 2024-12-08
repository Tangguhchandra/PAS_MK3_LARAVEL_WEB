<?php

namespace App\Filament\Resources\SportShoesResource\Pages;

use App\Filament\Resources\SportShoesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSportShoes extends EditRecord
{
    protected static string $resource = SportShoesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
