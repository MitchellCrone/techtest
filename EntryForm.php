<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $amount;
    public $payee;
    public $date;
    public $memo;

    public function rules()
    {
        return [
            [['name', 'amount', 'payee', 'date', 'memo'], 'required'] //,
            // ['name', 'amount', 'payee', 'date'],
        ];
    }
}
