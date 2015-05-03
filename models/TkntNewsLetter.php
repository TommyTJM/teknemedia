<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tknt_news_letter".
 *
 * @property string $email
 * @property string $createdate
 */
class TkntNewsLetter extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tknt_news_letter';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            
            [['email'], 'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            
        ];
    }
}
