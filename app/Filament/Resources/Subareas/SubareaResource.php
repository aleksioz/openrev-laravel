<?php

namespace App\Filament\Resources\Subareas;

use App\Filament\Resources\Subareas\Pages\CreateSubarea;
use App\Filament\Resources\Subareas\Pages\EditSubarea;
use App\Filament\Resources\Subareas\Pages\ListSubareas;
use App\Filament\Resources\Subareas\Schemas\SubareaForm;
use App\Filament\Resources\Subareas\Tables\SubareasTable;
use App\Models\Subarea;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SubareaResource extends Resource
{
    protected static ?string $model = Subarea::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return SubareaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SubareasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSubareas::route('/'),
            'create' => CreateSubarea::route('/create'),
            'edit' => EditSubarea::route('/{record}/edit'),
        ];
    }
}
