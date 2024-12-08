<?php

namespace App\Filament\Resources\WomanShoesResource\Pages;

use App\Filament\Resources\WomanShoesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWomanShoes extends EditRecord
{
    protected static string $resource = WomanShoesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
