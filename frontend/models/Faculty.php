<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "faculty".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property integer $joined_at
 * @property integer $experience
 * @property integer $user_id
 */
class Faculty extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faculty';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'joined_at', 'experience'], 'required'],
            [['joined_at', 'experience', 'user_id'], 'integer'],
            [['name', 'email'], 'string', 'max' => 255],
            [['email'], 'unique']
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
            'email' => 'Email',
            'joined_at' => 'Joined At',
            'experience' => 'Experience',
            'user_id' => 'User ID',
        ];
    }
}
