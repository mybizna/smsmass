<?php

namespace Modules\Smsmass\Models;

use Modules\Base\Models\BaseModel;

class Campaign extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['subject', 'body', 'send_date', 'is_sent', 'published'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "smsmass_campaign";

}
