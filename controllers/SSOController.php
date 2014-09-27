<?php

/**
 * SsoController allows you to use humhub as an sso authentication system
 *
 * @package humhub.modules.sso.controllers
 * @since 0.5
 */
class SsoController extends Controller
{

    /**
     * @var String sublayout view to use
     */
    public $subLayout = "_layout";

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Overview of all messages
     */
    public function actionSignOn()
    {

        if(Yii::app()->user->id) {
            $user = Yii::app()->user->getModel();

            $user = array(
                'id' => $user->guid,
                'username' => $user->username,
                'name' => $user->displayName,
                'email' => $user->email,
                'group' => $user->group_id,
                'admin' => $user->super_admin
            );

            $redirectUrl = Yii::app()->request->getQuery('redirectUrl');
            $redirectParams = Yii::app()->request->getQuery('redirectParams', '');

            $url = parse_url($redirectUrl);

            if($url === false || !isset($url['host'])) {
                print "Invalid redirect URL: \"$redirectUrl\"";
                Yii::app()->end();
            }

            Yii::app()->getRequest()->redirect($redirectUrl . '?' . http_build_query($user) . $redirectParams);
            Yii::app()->end();
        }
    }

    /**
     * Overview of all messages
     */
    public function actionActiveSession()
    {
        print "true";
        Yii::app()->end();
    }

}