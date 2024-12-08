<?php

namespace App\Filament\Resources\NewCollectionResource\Pages;

use App\Filament\Resources\NewCollectionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNewCollection extends CreateRecord
{
    public function mount(): void
{
   
}

    protected static string $resource = NewCollectionResource::class;
    
}

