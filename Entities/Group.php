<?php

namespace Modules\Smsmass\Entities;

use Illuminate\Database\Schema\Blueprint;
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
     * The fields that are to be render when performing relationship queries.
     *
     * @var array<string>
     */
    public $rec_names = ['name'];

    /**
     * List of tables names that are need in this model during migration.
     *
     * @var array<string>
     */
    public array $migrationDependancy = [];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "smsmass_group";

    /**
     * List of fields to be migrated to the datebase when creating or updating model during migration.
     *
     * @param Blueprint $table
     * @return void
     */
    public function fields(Blueprint $table = null): void
    {
        $this->fields = $table ?? new Blueprint($this->table);

        $this->fields->increments('id')->html('hidden');
        $this->fields->char('name', 255)->html('text');
        $this->fields->string('description')->html('textarea');
        $this->fields->integer('ordering')->html('number');
        $this->fields->tinyInteger('published')->default(true)->html('switch');
    }

    /**
     * List of structure for this model.
     */
    public function structure($structure): array
    {
        $structure['table'] = ['name', 'ordering', 'published'];
        $structure['form'] = [
            ['label' => 'Group Name', 'class' => 'col-span-full', 'fields' => ['name']],
            ['label' => 'Group Published', 'class' => 'col-span-full  md:col-span-6 md:pr-2', 'fields' => ['ordering', 'published']],
            ['label' => 'Group Description', 'class' => 'col-span-full', 'fields' => ['description']],
        ];
        $structure['filter'] = ['name', 'published'];

        return $structure;
    }


    /**
     * Define rights for this model.
     *
     * @return array
     */
    public function rights(): array
    {
        $rights = parent::rights();

        $rights['staff'] = ['view' => true];
        $rights['registered'] = ['view' => true];
        $rights['guest'] = [];

        return $rights;
    }
}
