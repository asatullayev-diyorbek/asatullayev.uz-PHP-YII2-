<?php

namespace frontend\controllers;

use common\models\Educations;
use common\models\Info;
use common\models\Portfolio;
use common\models\Skills;
use common\models\Xabarlar;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\db\ActiveRecord;

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
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at'],
                ],
                'value' => function ($event) {
                    return date('Y-m-d H:i:s');
                },
            ],
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
        $this->view->params['info'] = $info;

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

        $xabarlar = new Xabarlar();

        if ($this->request->isPost) {
            if ($xabarlar->load($this->request->post()) && $xabarlar->save()) {
                return $this->redirect(['view', 'id' => $xabarlar->id]);
            }
        } else {
            $xabarlar->loadDefaultValues();
        }

        $data = [
            'info' => $info,
            'skills' => $skills,
            'educations' => $educations,
            'portfolio' => $portfolio,
            'xabarlar' => $xabarlar,
        ];
        return $this->render('index', $data);
    }

    public function actionXabar()
    {
        $xabarlar = new Xabarlar();
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
            'xabarlar' => $xabarlar,
        ];

        if ($this->request->isPost) {
            $xabarlar->created_at = time();
            $xabarlar->status = 1;
            if ($xabarlar->load($this->request->post()) && $xabarlar->save()) {
                Yii::$app->session->setFlash('success', ['flash'=>'Thank you for message.', 'name' => $xabarlar->name]);
                return $this->redirect(['index', $data]);
            }
        } else {
            $xabarlar->loadDefaultValues();
        }

        return $this->render('index', $data);
    }
}
