<?php

class FamilyController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

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
		/*return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);*/
		
		
		return array(
			array(
				'allow',
				'actions' => array('index','view'),
				'roles' => array('reader'),
			),
			array(
				'allow',
				'actions' => array('create', 'update'),
				'roles' => array('editor'),
			),
			array(
				'allow',
				'actions' => array('delete','admin','report'),
				'roles' => array('administrator'),
			),
			array('deny'),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		//get the name of the DistrictLeader for this family 
		//$sqla = "SELECT district_id FROM tbl_family WHERE tbl_family.id=$id";
		//$rowa = Yii::app()->db->createCommand($sqla)->queryAll();
		//$sqlb = "SELECT district_leaders_id FROM tbl_district WHERE tbl_district.id=$rowa";
		//$sql = "SELECT name FROM tbl_district_leader WHERE tbl_district_leader.id=2";
		//$row = Yii::app()->db->createCommand($sql)->queryAll();
		//$dlDataProvider = new CArrayDataProvider($row);
		
		//get the people associated with this family
		$peopleDataProvider = new CActiveDataProvider('People', array
		(
			'criteria'=>array
			(
				//the condition is the WHERE clause of the SQL statement
				//here i want all the People where the family_id interger in tbl_people is = to :famId
				//:famId is a placeholder identified in the params array on the next line
				//this is = to the $id variable passed to the actionView method
				'condition'=>'family_id=:famId', 
				'params'=>array
				(
					':famId'=>$id,
				),
			),
			'pagination'=>array
				(
				'pageSize'=>5,
				),
		)
		);
			
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'peopleDataProvider'=>$peopleDataProvider,
			//'dlDataProvider'=>$dlDataProvider,		
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Family;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Family']))
		{
			$model->attributes=$_POST['Family'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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

		if(isset($_POST['Family']))
		{
			$model->attributes=$_POST['Family'];
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
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		// the following 4 lines represent the original actionIndex method
		//$dataProvider=new CActiveDataProvider('Family');
		//$this->render('index',array(
		//	'dataProvider'=>$dataProvider,
		//));
		
		$model=new Family('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Family']))
			$model->attributes=$_GET['Family'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		
		$model=new Family('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Family']))
			$model->attributes=$_GET['Family'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Family::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='family-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	/*public function actionReport()
	{
		$dataProvider=new CActiveDataProvider('Family', array(
			'pagination'=>array(
				'pageSize'=>5,
			),
			'sort'=>array(
				//'defaultOrder'=>array('family_name'=>false),
				'defaultOrder'=>array('district_id'=>false),
			)
			));
		$this->render('report',array(
			'dataProvider'=>$dataProvider,
		));
	}*/
}
