<?php

namespace App\Filament\Superadmin\Resources\KelurahanResource\Pages;

use App\Filament\Superadmin\Resources\KelurahanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKelurahans extends ListRecords
{
    protected static string $resource = KelurahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
