<?php

declare(strict_types=1);

namespace Modules\MediaCurator\Filament\Resources;

use Awcodes\Curator\Resources\MediaResource;
use Modules\MediaCurator\Filament\Resources\CuratorMediaResource\Pages;
use Modules\MediaCurator\Models\CuratorMedia;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;

class CuratorMediaResource extends MediaResource
{
    use NavigationLabelTrait;
    protected static bool $shouldRegisterNavigation = true;
    protected static ?string $model = CuratorMedia::class;

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCuratorMedia::route('/'),
            'create' => Pages\CreateCuratorMedia::route('/create'),
            'edit' => Pages\EditCuratorMedia::route('/{record}/edit'),
        ];
    }
}
