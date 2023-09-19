<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adress".
 *
 * @property int $id
 * @property string $adress
 * @property string $phone
 * @property string $social
 */
class Adress extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adress';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adress', 'phone', 'social'], 'required'],
            [['adress', 'phone', 'social'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'adress' => 'Adress',
            'phone' => 'Phone',
            'social' => 'Social',
        ];
    }
}
