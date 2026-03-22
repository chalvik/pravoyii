<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Translater $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Translaters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="translater-view">

    <h1><?= Html::encode($this->title) ?></h1>




</div>
