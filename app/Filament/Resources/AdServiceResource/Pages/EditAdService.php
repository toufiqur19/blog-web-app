<?php

namespace App\Filament\Resources\AdServiceResource\Pages;

use App\Filament\Resources\AdServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdService extends EditRecord
{
    protected static string $resource = AdServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
