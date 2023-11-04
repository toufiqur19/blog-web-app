<?php

namespace App\Filament\Resources\AdServiceResource\Pages;

use App\Filament\Resources\AdServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdServices extends ListRecords
{
    protected static string $resource = AdServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
