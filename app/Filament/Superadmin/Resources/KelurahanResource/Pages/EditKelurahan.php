<?php

namespace App\Filament\Superadmin\Resources\KelurahanResource\Pages;

use App\Filament\Superadmin\Resources\KelurahanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelurahan extends EditRecord
{
    protected static string $resource = KelurahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
