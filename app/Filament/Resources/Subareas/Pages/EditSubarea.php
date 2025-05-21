<?php

namespace App\Filament\Resources\Subareas\Pages;

use App\Filament\Resources\Subareas\SubareaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSubarea extends EditRecord
{
    protected static string $resource = SubareaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
