<?php

namespace App\Filament\Resources\ScientificWorks\Pages;

use App\Filament\Resources\ScientificWorks\ScientificWorkResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListScientificWorks extends ListRecords
{
    protected static string $resource = ScientificWorkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
