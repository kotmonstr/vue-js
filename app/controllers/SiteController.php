<?php

namespace app\controllers;

use yii\helpers\VarDumper;
use yii\web\Controller;

class SiteController extends Controller{

    public function actionIndex()
    {
        VarDumper::dump('1');die(2);
        //return parent::actions(); // TODO: Change the autogenerated stub
        return $this->render('index',['oleg'=> true]);
    }
}