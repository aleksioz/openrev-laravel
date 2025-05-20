<?php

namespace App\Filament\Resources\ScientificWorks\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ScientificWorkForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('subarea_id')
                    ->required()
                    ->numeric(),
                Textarea::make('title')
                    ->required()
                    ->columnSpanFull(),
                DateTimePicker::make('publish_date')
                    ->required(),
                Textarea::make('abstract')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('keywords')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('pdf_url')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
