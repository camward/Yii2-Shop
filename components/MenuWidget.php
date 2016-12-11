<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11.12.16
 * Time: 23:15
 */

namespace app\components;

use yii\base\Widget;

class MenuWidget extends Widget
{
    public $tpl;

    public function init(){
        parent::init();

        if($this->tpl === null){
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';
    }

    public function run(){
        return 'MENU';
    }
}