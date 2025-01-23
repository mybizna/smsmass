<?php

namespace Modules\Smsmass\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Smsmass\Models\Campaign;

class CampaignResource extends BaseResource
{
    protected static ?string $model = Campaign::class;

    protected static ?string $slug = 'smsmass/campaign';

    protected static ?string $navigationGroup = 'SMS';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


}
