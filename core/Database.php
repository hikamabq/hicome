<?php 
use Illuminate\Database\Capsule\Manager as Capsule;
require_once __DIR__.'../../../../../config.php';

$capsule = new Capsule;
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => $config['db']['host'],
    'database' => $config['db']['database'],
    'username' => $config['db']['username'],
    'password' => $config['db']['password'],
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();