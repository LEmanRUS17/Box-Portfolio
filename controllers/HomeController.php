<?php

namespace app\controllers;

use app\models\Project;

class HomeController extends AppController
{
    public function actionIndex()
    {
        $projects = Project::find()->all();

        $this->view->title ='Главная'; // Заголовок страницы
        return $this->render('index', compact('projects'));
    }

    public function actionProject($id)
    {
        $project = Project::findOne($id); // Получение проекта по id

        return $this->render('project', compact('project'));
    }
}