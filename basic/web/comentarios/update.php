<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Comentarios */

$this->title = 'Update Comentarios: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Comentarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcomentario, 'url' => ['view', 'id' => $model->idcomentario]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comentarios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
