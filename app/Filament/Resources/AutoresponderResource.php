<?php

namespace Modules\Smsmass\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Smsmass\Models\Autoresponder;

class AutoresponderResource extends BaseResource
{
    protected static ?string $model = Autoresponder::class;

    protected static ?string $slug = 'smsmass/autoresponder';

    protected static ?string $navigationGroup = 'SMS';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
}
