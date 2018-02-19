<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Productos */

$this->title = 'Crear Producto';
$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'model_categoria'=> $model_categoria,
        'model_comentario'=> $model_comentario,


        
    ]) ?>

</div>
