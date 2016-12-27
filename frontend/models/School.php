<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "school".
 *
 * @property integer $id
 * @property string $name
 * @property string $logo
 * @property string $about
 * @property string $contact_number
 * @property string $address
 * @property integer $registered_at
 * @property integer $user_id
 *
 * @property User $user
 */
class School extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
     
     public $file;
     
    public static function tableName()
    {
        return 'school';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'about', 'contact_number', 'address'], 'required'],
            [['id', 'registered_at', 'user_id'], 'integer'],
            [['name', 'logo', 'about', 'contact_number', 'address'], 'string', 'max' => 255],
            [['name'], 'unique'],
           //[['logo'], 'unique'],
            [['user_id'], 'unique'],
            [['file'],'file'],
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
            'file' => 'Logo',
            'about' => 'About',
            'contact_number' => 'Contact Number',
            'address' => 'Address',
            'registered_at' => 'Registered At',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
