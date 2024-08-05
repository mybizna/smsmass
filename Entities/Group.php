<?php

namespace Modules\Smsmass\Entities;

use Modules\Base\Entities\BaseModel;

class Group extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['name', 'description', 'ordering', 'published'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "smsmass_group";

}
