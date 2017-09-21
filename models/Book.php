<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $isbn
 * @property int $author_id
 *
 * @property Author $author
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['author_id'], 'required'],
            [['author_id'], 'integer'],
            [['title', 'isbn'], 'string', 'max' => 45],
            [['rank'], 'integer'],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => Author::className(), 'targetAttribute' => ['author_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'isbn' => 'Isbn',
            'rank' => 'Rank',
            'author_id' => 'Author Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Author::className(), ['id' => 'author_id']);
    }
    
    public static function getBookList($auth_id)
    {
        $authorId = self::find()
                ->select('id','title')
                ->where(['author_id' => $auth_id])
                ->asArray()
                ->all();
        return $authorId; 
    }
}
