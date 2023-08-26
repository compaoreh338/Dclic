<?php

namespace App\Filament\Resources\CohorteResource\Pages;

use App\Filament\Resources\CohorteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCohortes extends ListRecords
{
    protected static string $resource = CohorteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
