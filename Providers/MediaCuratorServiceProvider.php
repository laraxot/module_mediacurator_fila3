<?php

declare(strict_types=1);

namespace Modules\MediaCurator\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

class MediaCuratorServiceProvider extends XotBaseServiceProvider
{
    public string $module_name = 'mediacurator';
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public function bootCallback(): void
    {
        // BladeService::registerComponents($this->module_dir.'/../View/Components', 'Modules\\Media');
    }
}
