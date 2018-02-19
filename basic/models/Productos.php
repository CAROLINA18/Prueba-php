<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;
use yii\data\Pagination;
/**
 * This is the model class for table "productos".
 *
 * @property int $idproducto
 * @property string $nombre
 * @property string $descripcion
 * @property string $comentario
 * @property int $Votos
 * @property string $imagenproducto
 * @property int $idcategoria
 * @property string $imagen
 * @property Categorias $categoria
 */


class Productos extends \yii\db\ActiveRecord 
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'productos';
    }

    /**
     * @inheritdoc
     */
   // public $imageFile;


    public function rules()
    {
        return [
            [['nombre', 'descripcion', 'idcategoria'], 'required'],
            [['nombre', 'descripcion'], 'string', 'max' => 300],
            [['imagenproducto'], 'file', 'extensions' => 'png, jpg'],
            [['idcategoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categorias::className(), 'targetAttribute' => ['idcategoria' => 'idcategoria']],
        ];
    }

     public function upload()
    {
        if ($this->validate()) {
            $this->imagenproducto->saveAs('images/' . $this->imagenproducto->baseName . '.' . $this->imagenproducto->extension);
            return true;
        } else {
            return false;
        }
    }
     
      /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoria()
    {
        return $this->hasOne(Categorias::className(), ['idcategoria' => 'idcategoria']);
    }

     public function getComentario()
    {
        return $this->hasMany(Productos::className(), ['idproducto' => 'idproducto']);
    }
    
   /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idproducto' => 'Idproducto',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'imagenproducto' => 'Imagenproducto',
            'idcategoria' => 'Idcategoria',
            
            
        
        ];
    }


}
