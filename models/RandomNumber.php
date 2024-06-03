<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class RandomNumber extends ActiveRecord
{
    public static function tableName()
    {
        return 'random_numbers';
    }

    public function rules()
    {
        return [
            [['number'], 'required'],
            [['number'], 'integer']
        ];
    }
}
