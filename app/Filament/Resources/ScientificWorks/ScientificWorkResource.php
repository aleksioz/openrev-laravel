<?php

namespace App\Filament\Resources\ScientificWorks;

use App\Filament\Resources\ScientificWorks\Pages\CreateScientificWork;
use App\Filament\Resources\ScientificWorks\Pages\EditScientificWork;
use App\Filament\Resources\ScientificWorks\Pages\ListScientificWorks;
use App\Filament\Resources\ScientificWorks\Schemas\ScientificWorkForm;
use App\Filament\Resources\ScientificWorks\Tables\ScientificWorksTable;
use App\Models\ScientificWork;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ScientificWorkResource extends Resource
{
    protected static ?string $model = ScientificWork::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ScientificWorkForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ScientificWorksTable::configure($table);
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
            'index' => ListScientificWorks::route('/'),
            'create' => CreateScientificWork::route('/create'),
            'edit' => EditScientificWork::route('/{record}/edit'),
        ];
    }
}
