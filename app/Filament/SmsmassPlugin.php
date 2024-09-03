<?php

namespace Modules\Smsmass\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class SmsmassPlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'Smsmass';
    }

    public function getId(): string
    {
        return 'smsmass';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
