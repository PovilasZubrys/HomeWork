<?php
define('DOOR_BELL', 'ring');
define('INSTALL_FOLDER', '/HomeWork/agurkai-obj/');
define('URL', 'http://localhost/HomeWork/agurkai-obj/');
define('DIR', __DIR__);

use Sodas\App;
use Cucumber\Agurkas;
use Tomato\Pomidoras;

include __DIR__.'/bootstrap.php';

App::route();

