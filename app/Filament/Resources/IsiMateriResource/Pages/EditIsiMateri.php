<?php

namespace App\Filament\Resources\IsiMateriResource\Pages;

use App\Filament\Resources\IsiMateriResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIsiMateri extends EditRecord
{
    protected static string $resource = IsiMateriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
