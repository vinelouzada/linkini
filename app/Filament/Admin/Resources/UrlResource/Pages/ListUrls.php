<?php

namespace App\Filament\Admin\Resources\UrlResource\Pages;

use App\Filament\Admin\Resources\UrlResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUrls extends ListRecords
{
    protected static string $resource = UrlResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
