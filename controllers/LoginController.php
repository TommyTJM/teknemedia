<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\RegisterForm;
use app\models\ContactForm;
use app\models\MainForm;
use app\models\TkntUsers;
use app\utils\Constants;

class LoginController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        //return $this->render('index');
        
        $model=new LoginForm();        	
        return $this->renderPartial('home',array('model'=>$model));
    }    
    
    /**
     * Action method to View the Registration Page.
     */    
    public function actionView()
    {
    	$model=new RegisterForm();
    	return $this->renderPartial('/login/login',array('model'=>$model));
    }    

    /**
     * Action method to Save Registration information entered by User.
     */
    public function actionLogin()
    {    
    	$model=new LoginForm();
    	
    	//Load form parameters into model and validate form data
		if($model->load(Yii::$app->request->post()) && $model->validate())
		{
    		Yii::trace('Validation failed. Redirecting to login page.');
    		//$this->displayErrorView($model);
    		//exit;
    	}
    	
    	//Get user
    	$currentUsr = new TkntUsers();
    	$currentUsr = $model->getUser();
    	
    	//Create MainForm
    	$mainModel = new MainForm();
    	
    	$mainModel->firstNm = "Tommy";//$currentUsr->first_nm;
    	$mainModel->welcomeMsg = $model->welcomeMsg;
    	
    	return $this->renderPartial('/site/main',array('model'=>$mainModel));
    }    

    /**
     * Private method to createUser in the Database and store user information in session.
     */
	private function createUser($model)
	{
	  Yii::trace("Start RegisterController.createUser()");		
	
	  //create user object
	  $user = new TkntUsers();	  

	  //create user
	  $user->first_nm = $model->name;
	  $user->last_nm = "";
	  $user->email = $model->email;
	  $user->password = $model->password;	  
	  $user->role_id = Constants::CUSTOMER_ID;
	  $user->address_id = "";
	  $user->ip_address = "";
	  $user->browser = "";
	  $user->status_id = Constants::ACTIVE;
	  $user->user_created = Constants::WEB_USER;
	  $user->dt_created = date("Y-m-d H:i:s");
	  $user->user_modified = Constants::WEB_USER;
	  $user->dt_modified = date("Y-m-d H:i:s");
	  $user->last_login_dt = date("Y-m-d H:i:s");  
	
	  try {
	    $user->save();
	  } catch (Exception $e) {
	    Yii::trace("Error saving User: ".$e->getMessage);
	  }
	
	  Yii::trace("RegisterController.createUser().......Created User and placing in session.");
	  //Creates User session
	  //$this->createUserSession($model);
	
	  Yii::trace("End RegisterController.createUser()");	
	}

}
