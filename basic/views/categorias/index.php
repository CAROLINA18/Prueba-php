<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategoriasBusqueda */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categorias';
$this->params['breadcrumbs'][] = $this->title;
?>
 <p>
        <?= Html::a('Crear Categoria', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<div class="categorias-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

   

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idcategoria',
            'nombre',
            'descripcion',
            'imagencategoria',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
