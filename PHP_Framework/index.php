<?php

$app = new Applcation();

$app->router->get('/', function (){
  return 'Hello world';
});

$app->run();
