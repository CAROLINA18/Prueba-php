<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comentarios".
 *
 * @property int $idcomentario
 * @property string $contenido
 * @property int $idproducto
 * @property int $votar
 *
 * @property Productos $producto
 */
class Comentarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comentarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idproducto'], 'required'],
            [['idproducto', 'votar'], 'integer'],
            [['contenido'], 'string', 'max' => 900],
            [['idproducto'], 'exist', 'skipOnError' => true, 'targetClass' => Productos::className(), 'targetAttribute' => ['idproducto' => 'idproducto']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcomentario' => 'Idcomentario',
            'contenido' => 'Contenido',
            'idproducto' => 'Idproducto',
            'votar' => 'Votar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducto()
    {
        return $this->hasOne(Productos::className(), ['idproducto' => 'idproducto']);
    }
}
