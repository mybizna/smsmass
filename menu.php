<?php

$this->add_menu("sms", "smsmass", "Mass Sms", "/smsmass/admin/autoresponder", "fas fa-cogs", 5);

$this->add_submenu("sms", "smsmass", "Autoresponder", "/smsmass/admin/autoresponder", 5);
$this->add_submenu("sms", "smsmass", "Campaign", "/smsmass/admin/campaign", 5);
$this->add_submenu("sms", "smsmass", "Group", "/smsmass/admin/group", 5);


