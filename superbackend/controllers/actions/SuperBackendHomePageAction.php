<?php
/**
 * Controller action representing the act of home page rendering on backend.
 *
 * Everything which should be done when user opens the backend landing page is here.
 *
 * @package YiiBoilerplate\Backend
 */
class SuperBackendHomePageAction extends CAction
{
    /**
     * We render the homepage as a controller action here.
     */
    public function run()
    {
        if(Yii::app()->user->isGuest)
            $this->controller->redirect('site/login');


        $this->controller->render('index');
    }
} 