<?php

namespace app\controllers;

use Yii;
use yii\rest\Controller;
use app\models\RandomNumber;
use yii\web\NotFoundHttpException;

class RandomController extends Controller
{
    public function generate()
    {
        $randomModel = new RandomNumber();
        $randomModel->number = rand();
        if ($randomModel->save()) {
            return ['id' => $randomModel->id];
        } else {
            return ['error' => 'Ошибка генерации'];
        }
    }

    public function retrieve($id)
    {
        $randomModel = $this->findModel($id);
        return ['id' => $randomModel->id, 'number' => $randomModel->number];
    }

    protected function modelFind($id)
    {
        if ($model = RandomNumber::findOne($id) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Запрашиваемое число не было найдено');
    }
}
