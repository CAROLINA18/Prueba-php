<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Categorias;
use app\models\Comentarios;


/* @var $this yii\web\View */
/* @var $model app\models\Productos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productos-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imagenproducto')->fileInput() ?>

    <?= $form->field($model, 'idcategoria')->listBox(\yii\helpers\ArrayHelper::map(app\models\Categorias::find()->all(),'idcategoria','nombre') ,['multiple' => false]) ?>

    <?= $form->field($model_comentario, 'contenido')->textarea(['rows' => '6'])->label('Comenta Este Producto') ?>

    <?= $form->field($model_comentario, 'votar')->checkboxList(array( "1" , "2","3","4","5"), ['unselect'=>NULL]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
