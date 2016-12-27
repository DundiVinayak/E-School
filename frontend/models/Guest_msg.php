<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "guest_msg".
 *
 * @property integer $id
 * @property string $message
 * @property string $guest_name
 * @property integer $user_id
 */
class Guest_msg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guest_msg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['message', 'guest_name', 'user_id'], 'required'],
            [['message'], 'string'],
            [['user_id'], 'integer'],
            [['guest_name'], 'string', 'max' => 255]
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
            'guest_name' => 'Guest Name',
            'user_id' => 'User ID',
        ];
    }
}
