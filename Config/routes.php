<?php

Router::connect('/', array('controller' => 'pages', 'action' => 'home'));

CakePlugin::routes();

require CAKE . 'Config' . DS . 'routes.php';
