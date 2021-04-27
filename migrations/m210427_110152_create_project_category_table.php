<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%project_category}}`.
 */
class m210427_110152_create_project_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%project_category}}', [
            'id'          => $this->primaryKey(), // id
            'project_id'  => $this->integer(),    // id Проекта
            'category_id' => $this->integer(),    // id Категории
        ]);

        // создание индекса для столбца project_id
        // creates index for column 'project_id'
        $this->createIndex(
            'idx-project_id',
            'project_category',
            'project_id',
        );

        // добавление внешнего ключа для таблицы 'projects'
        $this->addForeignKey(
            'fk-project_id',    // это "условное имя" ключа
            'project_category', // это название текущей таблицы
            'project_id',       // это имя поля в текущей таблице, которое будет ключом
            'category',         // это имя таблицы, с которой хотим связаться
            'id',               // это поле таблицы, с которым хотим связаться
            'CASCADE',
        );

        // создание индекса для столбца 'article_id'
        // creates index for column 'article_id'
        $this->createIndex(
            'idx-category_id',
            'project_category',
            'category_id',
        );

        // добавление внешнего ключа для таблицы 'category'
        $this->addForeignKey(
            'fk-category_id',   // это "условное имя" ключа
            'project_category', // это название текущей таблицы
            'category_id',      // это имя поля в текущей таблице, которое будет ключом
            'project',          // это имя таблицы, с которой хотим связаться
            'id',               // это поле таблицы, с которым хотим связаться
            'CASCADE',
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%project_category}}');
    }
}
