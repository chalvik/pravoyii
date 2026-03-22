<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Translater $model */

$this->title = 'Create Translater';
$this->params['breadcrumbs'][] = ['label' => 'Translaters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="translater-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
