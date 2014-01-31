<?php

return array(
    'navigation' => array(
        'default' => array(
            array(
            'label' => 'Home',
            'route' => 'home',
            'icon' => 'glyphicon glyphicon-home'
            ),
            array(
            'label' => 'User',
            'route' => 'zfcuser/login',
            'icon' => 'glyphicon glyphicon-user'
            ),
            array(
            'label' => 'Env',
            'route' => 'environment',
            'icon' => 'environment.gif'
            ),
/*
            array(
            'label' => 'Param',
            'route' => 'parameter/list',
            'icon' => 'parameter.gif'
            ),
*/
        ),
    ),
);
