<?php

namespace Modules\Smsmass\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Classes\Views\FormBuilder;
use Modules\Base\Classes\Views\ListTable;
use Modules\Base\Entities\BaseModel;

class Campaign extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['subject', 'body', 'send_date', 'is_sent', 'published'];

    /**
     * The fields that are to be render when performing relationship queries.
     *
     * @var array<string>
     */
    public $rec_names = ['subject'];

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
    protected $table = "smsmass_campaign";

    /**
     * Function for defining list of fields in table view.
     *
     * @return ListTable
     */
    public function listTable(): ListTable
    {
        // listing view fields
        $fields = new ListTable();

        $fields->name('subject')->html('text')->ordering(true);
        $fields->name('body')->html('text')->ordering(true);
        $fields->name('send_date')->html('date')->ordering(true);
        $fields->name('is_sent')->html('switch')->ordering(true);
        $fields->name('published')->html('switch')->ordering(true);

        return $fields;

    }

    /**
     * Function for defining list of fields in form view.
     *
     * @return FormBuilder
     */
    public function formBuilder(): FormBuilder
    {
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('subject')->html('text')->group('w-1/2');
        $fields->name('body')->html('text')->group('w-1/2');
        $fields->name('send_date')->html('date')->group('w-1/2');
        $fields->name('is_sent')->html('switch')->group('w-1/2');
        $fields->name('published')->html('switch')->group('w-1/2');

        return $fields;

    }

    /**
     * Function for defining list of fields in filter view.
     *
     * @return FormBuilder
     */
    public function filter(): FormBuilder
    {
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('subject')->html('text')->group('w-1/6');
        $fields->name('body')->html('text')->group('w-1/6');
        $fields->name('send_date')->html('date')->group('w-1/6');
        $fields->name('is_sent')->html('switch')->group('w-1/6');
        $fields->name('published')->html('switch')->group('w-1/6');

        return $fields;

    }
    /**
     * List of fields to be migrated to the datebase when creating or updating model during migration.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table): void
    {
        $this->fields->increments('id');
        $this->fields->string('subject');
        $this->fields->string('body');
        $this->fields->datetime('send_date');
        $this->fields->tinyInteger('is_sent')->nullable()->default(0);
        $this->fields->tinyInteger('published')->nullable()->default(1);
    }
}
