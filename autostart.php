<?php

Yii::app()->moduleManager->register(array(
    'id' => 'sso',
    'class' => 'application.modules.sso.SsoModule',
    'import' => array(
        'application.modules.sso.*'
    ),
    // Events to Catch 
    'events' => array(
    ),
));
?>