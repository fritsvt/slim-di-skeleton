<?php

$app->get('/', ['App\Controllers\HomeController', 'index'])->setName('home');

$app->get('/test', function() {
   phpinfo();
});