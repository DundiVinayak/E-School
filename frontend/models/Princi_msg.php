<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "princi_msg".
 *
 * @property integer $id
 * @property string $message
 * @property integer $user_id
 */
class Princi_msg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'princi_msg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['message', 'user_id'], 'required'],
            [['message'], 'string'],
            [['user_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'message' => 'Message',
            'user_id' => 'User ID',
        ];
    }
}
