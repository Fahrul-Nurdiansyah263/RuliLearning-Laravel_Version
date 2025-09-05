<?php

namespace App\Filament\Resources\KategoriMateriResource\Pages;

use App\Filament\Resources\KategoriMateriResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriMateris extends ListRecords
{
    protected static string $resource = KategoriMateriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
