<?php

namespace App\Filament\Superadmin\Resources\PasienResource\Pages;

use App\Filament\Superadmin\Resources\PasienResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPasiens extends ListRecords
{
    protected static string $resource = PasienResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
