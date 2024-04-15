<?php

namespace frontend\controllers;

use common\models\Educations;
use common\models\Info;
use common\models\Portfolio;
use common\models\Skills;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        $info = Info::find()->one();

        return [
            'info' => $info,
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $info = Info::find()->one();
        $skills = Skills::find()->one();
        $educations = Educations::find()->all();
        $portfolio = Portfolio::find()->all();

        $this->view->params['info'] = $info;

        $data = [
            'info' => $info,
            'skills' => $skills,
            'educations' => $educations,
            'portfolio' => $portfolio,
        ];
        return $this->render('index', $data);
    }
}
