<?php

App::bind('config', $config = require 'config.php');
$config = App::get('config');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
//$app = [];
//
//$app['config'] = require 'config.php';
//
//$app['database'] =  new QueryBuilder(
//    Connection::make($app['config']['database'])
//);