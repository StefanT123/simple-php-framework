<?php

use App\Core\Router;
use App\Core\Database\DB;

require 'vendor/autoload.php';
$config = require 'config.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

$db = DB::connect($config['database']);
$router = new Router;
