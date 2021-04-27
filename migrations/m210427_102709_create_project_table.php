<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%project}}`.
 */
class m210427_102709_create_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%project}}', [
            'id'          => $this->primaryKey(), // id
            'title'       => $this->string(),     // Заголовок
            'description' => $this->text(),       // Описание
            'content'     => $this->date(),       // Содержимое
            'image'       => $this->string(),     // Изображение
            'viewed'      => $this->integer(),    // Просмотры
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%project}}');
    }
}
