<?php

namespace frontend\modules\translate\controllers;

use common\enums\TranslatorStatusEnum;
use common\models\Translater;
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
        return $behaviors;
    }

    public function actionIndex()
    {
        $w = date('w');

        $count = Translater::find()
            ->select(['translaters.id', 's.weekday'])
            ->leftJoin('translater_shedulers as s', 's.translater_id = translaters.id')
            ->where(['s.weekday' => $w])
            ->groupBy('id')
            ->count();

            $message=  ($count > 0) ?'«Список переводчиков готов»':'«Нет свободных переводчиков»';

        return ['message' => $message];
    }
}
