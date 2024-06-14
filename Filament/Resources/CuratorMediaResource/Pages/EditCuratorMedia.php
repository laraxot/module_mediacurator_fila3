<?php

declare(strict_types=1);

namespace Modules\MediaCurator\Filament\Resources\CuratorMediaResource\Pages;

use Awcodes\Curator\Resources\MediaResource\EditMedia;
use Filament\Actions;
use Modules\MediaCurator\Filament\Resources\CuratorMediaResource;

class EditCuratorMedia extends EditMedia
{
    protected static string $resource = CuratorMediaResource::class;

    public function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
            ...parent::getHeaderActions(),
        ];
    }
}
