<?php

namespace Modules\Smsmass\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Smsmass\Models\Group;

class GroupResource extends BaseResource
{
    protected static ?string $model = Group::class;

    protected static ?string $slug = 'smsmass/blacklist';

    protected static ?string $navigationGroup = 'SMS';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}
