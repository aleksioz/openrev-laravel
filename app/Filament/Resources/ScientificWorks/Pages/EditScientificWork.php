<?php

namespace App\Filament\Resources\ScientificWorks\Pages;

use App\Filament\Resources\ScientificWorks\ScientificWorkResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditScientificWork extends EditRecord
{
    protected static string $resource = ScientificWorkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
