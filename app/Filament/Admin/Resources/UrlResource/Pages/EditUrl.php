<?php

namespace App\Filament\Admin\Resources\UrlResource\Pages;

use App\Filament\Admin\Resources\UrlResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUrl extends EditRecord
{
    protected static string $resource = UrlResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
