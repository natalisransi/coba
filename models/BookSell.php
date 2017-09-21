<?php

namespace app\models;

use Yii;
use app\models\Author;
use yii\filters\AccessControl;

/**
 * This is the model class for table "book_sell".
 *
 * @property int $id
 * @property int $book_id
 * @property string $ket
 *
 * @property Book $book
 */
class BookSell extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book_sell';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['book_id', 'ket'], 'required'],
            [['book_id'], 'integer'],
            [['ket'], 'string'],
            [['book_id'], 'exist', 'skipOnError' => true, 'targetClass' => Book::className(), 'targetAttribute' => ['book_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'book_id' => 'Book ID',
            'ket' => 'Ket',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBook()
    {
        return $this->hasOne(Book::className(), ['id' => 'book_id']);
    }
    
    public function getBookAuthor()
    {
        $query = (new \yii\db\Query())
                    ->select(['*'])
                    ->from('book')
                     ->leftJoin('author', 'book.author_id= author.id')
                    ->all();
        return $this->render('book-sell/index', ['query'=>$query]);
     
    }
}
