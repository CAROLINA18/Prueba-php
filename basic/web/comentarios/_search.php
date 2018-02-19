<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ComentariosBusqueda */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comentarios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idcomentario') ?>

    <?= $form->field($model, 'contenido') ?>

    <?= $form->field($model, 'idproducto') ?>

    <?= $form->field($model, 'votar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
