<?php

use yii\helpers\Html;
use app\models\ProductosBusqueda;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductosBusqueda */
/* @var $form ActiveForm */
?>
<div class="buscar-producto">

     <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<?= $form->field($model, 'nombre') ?>

    

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
       
    </div>

    <?php ActiveForm::end(); ?>


</div><!-- productos-search -->
