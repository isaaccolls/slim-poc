<?php
$database_config = [
  'driver' => 'mysql',
  'host' => 'mysql',
  'port' => '3306',
  'database' => 'slim-poc',
  'username' => 'api',
  'password' => '1234',
  'charset' => 'utf8',
  'collation' => 'utf8_unicode_ci',
  'prefix' => '',
];

$capsule = new Illuminate\Database\Capsule\Manager;
$capsule->addConnection($database_config);
$capsule->setAsGlobal();
$capsule->bootEloquent();

return $capsule;
