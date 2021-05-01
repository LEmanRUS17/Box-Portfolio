<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $content
 * @property int|null $viewed
 *
 * @property ProjectCategory[] $projectCategories
 */
class Project extends \yii\db\ActiveRecord
{
    public $image;
    public $gallery;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['content'], 'safe'],
            [['viewed'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png, jpg'],
            [['gallery'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 8],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'          => 'ID Проекта',
            'title'       => 'Заголовок',
            'description' => 'Описание',
            'content'     => 'Содержимое',
            'image'       => 'Титульное изображение',
            'gallery'     => 'Галерея',
            'viewed'      => 'Кол. просмотров',
        ];
    }

    /**
     * Gets query for [[ProjectCategories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectCategories()
    {
        return $this->hasMany(ProjectCategory::className(), ['category_id' => 'id']);
    }

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public function upload(){
        if ($this->validate()) {
            $path = 'upload/store/' . $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path, true);
            unlink($path); // Удаление картинки
            return true;
        } else {
            return false;
        }
    }

    public function uploadGallery(){
        if ($this->validate()) {
            foreach($this->gallery as $file) {
                $path = 'upload/store/' . $file->baseName . '.' . $file->extension;
                $file->saveAs($path);
                $this->attachImage($path);
                unlink($path); // Удаление картинки                
            }
            return true;
        } else {
            return false;
        }
    }    
}
