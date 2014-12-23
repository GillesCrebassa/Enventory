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
            array(
            'label' => 'Target',
            'route' => 'target',
            'icon' => 'target.gif'
            ),
            array(
            'label' => 'SubMenu1',
            'uri' => '#',
            'pages' => array(
                array(
                        'label' => 'Sub1',
                        'route' => 'home',
                        'icon' => 'environment.gif'
                    
                    ),
                array(
                        'label' => 'Sub2',
                        'route' => 'home',
                        'icon' => 'environment.gif'
                    
                    ),
                )
            ),
            array(
            'label' => 'Contact',
            'uri' => 'http://be.linkedin.com/in/crebassagilles/',
            'icon' => 'glyphicon glyphicon-info-sign'
            ),
        ),
    ),
);
