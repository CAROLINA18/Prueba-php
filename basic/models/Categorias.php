<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categorias".
 *
 * @property int $idcategoria
 * @property string $nombre
 * @property string $descripcion
 * @property string $imagencategoria
 *
 * @property Productos[] $productos
 */
class Categorias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categorias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion'], 'required'],
            [['nombre', 'descripcion', 'imagencategoria'], 'string', 'max' => 800],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcategoria' => 'Idcategoria',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'imagencategoria' => 'Imagencategoria',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductos()
    {
        return $this->hasMany(Productos::className(), ['idcategoria' => 'idcategoria']);
    }
}
