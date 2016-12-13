<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 13.12.16
 * Time: 20:10
 */

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use Yii;

class CategoryController extends AppController
{
    public function actionIndex(){
        $this->setMeta('E-SHOPPER');
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        return $this->render("index", compact('hits'));
    }

    public function actionView($id){
        $category = Category::findOne($id);
        $this->setMeta('E-SHOPPER | ' . $category->name, $category->keywords, $category->description);
        $id = Yii::$app->request->get('id');
        $products = Product::find()->where(['category_id' => $id])->all();
        return $this->render('view', compact('products', 'category'));
    }
}