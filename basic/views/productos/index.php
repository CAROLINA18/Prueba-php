<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Categorias;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductosBusqueda */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productos'; 
$this->params['breadcrumbs'][] = $this->title;

?>
 <p>
        <?= Html::a('Crear Producto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<div class="productos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php  echo $this->render('search', ['model' => $searchModel]); ?>

</div>




    <?= GridView::widget([
        'dataProvider' => $dataProvider,

        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
           

            'idproducto',
            'nombre',
            'descripcion',
            
            

  
            
            [
        'attribute' => 'imagenproducto',
        'format' => 'html',    
        'value' => function ($dataProvider) {
            return Html::img(Yii::getAlias('@web').'/images/'. $dataProvider['imagenproducto'],
                ['width' => '70px']);
        },
    ],
                  ['class' => 'yii\grid\ActionColumn'],
          
        ],
    ]); ?>

        
 

       


</div>
