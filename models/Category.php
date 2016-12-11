<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11.12.16
 * Time: 23:06
 */

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName(){
        return "category";
    }

    public function getProducts(){
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }
}