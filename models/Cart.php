<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 14.12.16
 * Time: 22:08
 */

namespace app\models;
use yii\db\ActiveRecord;

class Cart extends ActiveRecord{

    public function addToCart($product, $qty = 1){
        echo 'Worked!';
    }

}