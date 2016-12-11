<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11.12.16
 * Time: 23:06
 */

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName(){
        return "product";
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}