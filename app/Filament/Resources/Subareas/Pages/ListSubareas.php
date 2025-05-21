<?php

namespace App\Filament\Resources\Subareas\Pages;

use App\Filament\Resources\Subareas\SubareaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSubareas extends ListRecords
{
    protected static string $resource = SubareaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
