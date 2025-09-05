<?php

namespace App\Filament\Resources\IsiMateriResource\Pages;

use App\Filament\Resources\IsiMateriResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIsiMateris extends ListRecords
{
    protected static string $resource = IsiMateriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
