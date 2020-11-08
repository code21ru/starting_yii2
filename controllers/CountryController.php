<?php
namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;

// пишем свой класс для вывода всех записей таблицы в алфавитном порядке с пагинацией

class CountryController extends Controller
{
    public function actionIndex ()
    {
        $query = Country::find(); // Аналог SELECT * FROM 'Country'

        $pagination = new Pagination([              //Новый объект пагинации с массивом параметров...
            'defaultPageSize' => 5,                 //...Количество записей на страницу - 5...
            'totalCount' => $query->count(),        //...Всего записей столько, сколько их в таблице Country
        ]);

        $countries = $query->orderBy('name') // SELECT * FROM 'Country' ORDERED BY 'name'
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index',[
            'countries' => $countries,
            'pagination' => $pagination
        ]);

    }
}
