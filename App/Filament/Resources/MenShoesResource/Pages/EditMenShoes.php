<?php

namespace App\Filament\Resources\MenShoesResource\Pages;

use App\Filament\Resources\MenShoesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMenShoes extends EditRecord
{
    protected static string $resource = MenShoesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
