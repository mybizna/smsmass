<?php

namespace Modules\Smsmass\Models;

use Modules\Base\Models\BaseModel;
use Illuminate\Database\Schema\Blueprint;

class Autoresponder extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['subject', 'body', 'wait_period', 'table_name', 'email_field',
        'date_field', 'start_date', 'end_date', 'published'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "smsmass_autoresponder";


    public function migration(Blueprint $table): void
    {


        $table->string('name');
        $table->string('subject');
        $table->text('body');
        $table->integer('wait_period');
        $table->string('table_name', 255);
        $table->string('email_field', 255);
        $table->string('date_field', 255);
        $table->dateTime('start_date');
        $table->dateTime('end_date');
        $table->tinyInteger('published')->default(true);

    }
}
