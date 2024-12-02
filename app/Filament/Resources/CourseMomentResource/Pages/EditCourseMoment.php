<?php

namespace App\Filament\Resources\CourseMomentResource\Pages;

use App\Filament\Resources\CourseMomentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCourseMoment extends EditRecord
{
    protected static string $resource = CourseMomentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
