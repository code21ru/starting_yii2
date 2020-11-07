<?php
namespace app\models;

use iyy\base\Model;
/**
 * Class description
 */
class EntryForm extends Model
{
    // объявляем свойства класса - переменные $name $email - публичные
    public $name;
    public $email;

    // объявляем методы класса - метод rules() - возвращает набор правил проверки введенных данных
    // https://yiiframework.com.ua/ru/doc/guide/2/input-validation/
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}
