<?php

namespace app\controllers;


class HomeController extends AppController
{
    public function actionIndex()
    {
        $this->setMeta('Главная'); // Заголовок страницы
        return $this->render('index');
    }

    public function actionProject()
    {
        return $this->render('project');
    }
}