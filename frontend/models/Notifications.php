<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "notifications".
 *
 * @property integer $id
 * @property string $header
 * @property string $desc
 * @property integer $time
 * @property integer $user_id
 */
class Notifications extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notifications';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['header', 'desc', 'time', 'user_id'], 'required'],
            [['desc'], 'string'],
            [['time', 'user_id'], 'integer'],
            [['header'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'header' => 'Header',
            'desc' => 'Desc',
            'time' => 'Time',
            'user_id' => 'User ID',
        ];
    }
}
