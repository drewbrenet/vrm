<?php

// autoload.php @generated by Composer

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

$app->get('/hello', function() {
	return 'Hello world!';
});

$app->run();