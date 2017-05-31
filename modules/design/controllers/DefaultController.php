<?php

namespace app\modules\design\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
	public $layout = 'main';
    public function actionIndex()
    {
        return $this->redirect ( array ( // redirecting to admin page
						'/admin/dashboard' 
				) );
    }
    
    public function actionManageadminusers()
    {
    	return $this->render('adminusers');
    }
}
