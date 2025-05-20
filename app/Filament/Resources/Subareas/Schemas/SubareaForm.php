<?php

namespace App\Filament\Resources\Subareas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SubareaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('area_id')
                    ->required()
                    ->numeric(),
                Toggle::make('hidden')
                    ->required(),
            ]);
    }
}
