<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property integer $id
 * @property string $name
 * @property string $about_event
 * @property integer $event_time
 * @property integer $user_id
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'about_event', 'event_time', 'user_id'], 'required'],
            [['event_time', 'user_id'], 'integer'],
            [['name', 'about_event'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'about_event' => 'About Event',
            'event_time' => 'Event Time',
            'user_id' => 'User ID',
        ];
    }
}
