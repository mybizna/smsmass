<?php

/** @var \Modules\Base\Classes\Fetch\Rights $this */

$this->add_right("smsmass", "autoresponder", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("smsmass", "autoresponder", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("smsmass", "autoresponder", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("smsmass", "autoresponder", "staff", view:true, add:true, edit:true);
$this->add_right("smsmass", "autoresponder", "registered", view:true, add:true);
$this->add_right("smsmass", "autoresponder", "guest", view:true, );

$this->add_right("smsmass", "campaign", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("smsmass", "campaign", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("smsmass", "campaign", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("smsmass", "campaign", "staff", view:true, add:true, edit:true);
$this->add_right("smsmass", "campaign", "registered", view:true, add:true);
$this->add_right("smsmass", "campaign", "guest", view:true, );

$this->add_right("smsmass", "group", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("smsmass", "group", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("smsmass", "group", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("smsmass", "group", "staff", view:true, add:true, edit:true);
$this->add_right("smsmass", "group", "registered", view:true, add:true);
$this->add_right("smsmass", "group", "guest", view:true, );
