<?php

namespace App\Filament\Superadmin\Resources\PasienResource\Pages;

use App\Filament\Superadmin\Resources\PasienResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPasien extends EditRecord
{
    protected static string $resource = PasienResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
