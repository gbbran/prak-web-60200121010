<?php

namespace app\controllers;

class KrsMahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionDetail($id)
    {
        return "<h1>detail?id=</h1>".$id."</h1";
    }

}
