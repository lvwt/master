<?php

class GradeController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Grade;


		if(isset($_POST['Grade']))
		{
			$model->attributes=$_POST['Grade'];

            $file=CUploadedFile::getInstance($model,'times');
            if(isset($file->extensionName)){
            $filename=$file->getName();
            $filesize=$file->getSize();
            $filetype=$file->getType();
                //$model->times=$filename;
                //$filename1=iconv("utf-8", "gb2312", $filename);
            $uploadfile=dirname(Yii::app()->basePath)."/uploads/".'1.'.$file->extensionName;
            $file->saveAs($uploadfile,true);
            }

        if($file->extensionName=="xls"||$file->extensionName=="xlsx"){
        $sheet = Yii::app()->yexcel->readActiveSheet($uploadfile);
        $sql = "INSERT INTO `grade`(`times`,`sid`,`考号`,`姓名`,`班级`,`总分`,`标准分`,`班名`,`校名`,`语文`,`班名1`,`校名1`,`数学`,`班名2`,`校名2`,`英语`,`班名3`,`校名3`,`物理`,`班名4`,`校名4`,`化学`,`班名5`,`校名5`,`生物`,`班名6`,`校名6`,`政治`,`班名7`,`校名7`,`历史`,`班名8`,`校名8`,`地理`,`班名9`,`校名9`) VALUES ";
        $i = 0;
        foreach($sheet as $row){
            $i++;
            if($i==1) continue;
            $sql=$sql.(($i==2)?'':',')."(NULL"; 
            foreach($row as $colum){
                $sql=$sql.",'$colum'";
            }
            $sql=$sql.')';
        }
        $res = Yii::app()->db->createCommand($sql)->execute();
        }
			if($res)
				$this->redirect(array('admin'));
            else
                echo '导入失败';exit;
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Grade']))
		{
			$model->attributes=$_POST['Grade'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Grade');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Grade('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Grade']))
			$model->attributes=$_GET['Grade'];
		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Grade the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Grade::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Grade $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='grade-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
