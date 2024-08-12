<?php

namespace Modules\Smsmass\Filament\Resources\AutoresponderResource\Pages;

use Modules\Smsmass\Filament\Resources\AutoresponderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAutoresponders extends ListRecords
{
    protected static string $resource = AutoresponderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
