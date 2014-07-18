<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
        $stdnews = Stdnews::model()->findAll('`id`>0 ORDER BY `id` DESC LIMIT 4');
        $schnews = Schnews::model()->findAll('`id`>0 ORDER BY `id` DESC LIMIT 4');
        $schpic = Schpic::model()->findAll('`id`>0 ORDER BY `id` DESC LIMIT 4');
		$this->render('index', array('stdnews'=>$stdnews,'schnews'=>$schnews,'schpic'=>$schpic));
	}
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionIntro()
	{
		$model = Siteinfo::model()->findByPk('1');
        
		$this->render('intro',array('model'=>$model));
	}
	public function actionAdminsion()
	{
		$model = Siteinfo::model()->findByPk('2');
        
		$this->render('adminsion',array('model'=>$model));
	}

	public function actionMember()
	{   
		$this->render('member');
	}

	public function actionPurchase()
	{   
		$this->render('purchase');
	}

	public function actionBand($code='',$openid='')
	{
        if(isset($_POST['sid']))
        {
            $m=Std::model()->findByAttributes(array('sid'=>strtoupper($_POST['sid'])));
            if(empty($m))
            {
                p()->user->setFlash('err','学生信息不存在,请重新输入');
                $openid = $_POST['openid'];
                $this->render('band',array('openid'=>$openid,'code'=>$code));
                exit;
            }
            
            $model = new User;
            $model->sid = $_POST['sid'];
            $model->openid = $_POST['openid'];

            if($model->save())
                $this->redirect(array('/grade/view','openid'=>$_POST['openid']));
            exit;
        }
        $openid = empty($openid)?getopenid($code):$openid;
		$this->render('band',array('openid'=>$openid,'code'=>$code));
	}

    public function actionDeband($code='')
    {
        $openid = getopenid($code);
        p()->user->setFlash('err','无法解除，请先绑定手机');
        if(p()->db->createCommand("delete from `user` where `openid`='$openid'")->execute())
            p()->user->setFlash('err','解除绑定，请重新输入学生身份证号');
        $this->redirect(array('band','openid'=>$openid));
    }
        
	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}