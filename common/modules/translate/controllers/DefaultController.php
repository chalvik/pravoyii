<?php

namespace common\modules\translate\controllers;

use yii\rest\Controller;

/**
 * Default controller for the `translate` module
 */
class DefaultController extends Controller
{

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['corsFilter' ] = [
            'class' => \yii\filters\Cors::class,
        ];
        $behaviors['contentNegotiator'] = [
            'class' => \yii\filters\ContentNegotiator::class,
            'formats' => [
                'application/json' => \yii\web\Response::FORMAT_JSON,
            ],
        ];
        $behaviors['access'] = [
            'class' => \yii\filters\AccessControl::className(),
            'only' => ['index'],
            'rules' => [
                [
                    'actions' => ['index'],
                    'allow' => true,
                    'roles' => ['*'],
                ],
            ],
        ];
        return $behaviors;
    }

    public function actionIndex()
    {
        return 'Test';
    }
}
