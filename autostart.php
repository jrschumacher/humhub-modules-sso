<?php

Yii::app()->moduleManager->register(array(
    'id' => 'sso',
    'class' => 'application.modules.sso.SSOModule',
    'import' => array(
        'application.modules.sso.*'
    ),
    // Events to Catch 
    'events' => array(
    ),
));
?>