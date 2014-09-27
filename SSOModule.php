<?php

/**
 * SsoModule creates a hook to allow humhub to be your sso provider
 *
 * @package humhub.modules.sso
 * @since 0.5
 */
class SsoModule extends HWebModule
{

    public function init()
    {

        $this->setImport(array(
            'sso.models.*',
            'sso.controllers.*',
            'sso.behaviors.*',
            'sso.forms.*',
        ));
    }

    /**
     * On run of integrity check command, validate all module data
     *
     * @param type $event
     */
    public static function onIntegrityCheck($event)
    {

        $integrityChecker = $event->sender;
    }

}
