<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $patronymic
 * @property string $login
 * @property string $email
 * @property string $password
 * @property int $admin
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'patronymic', 'login', 'email', 'password'], 'required'],
            ['name', 'match', 'pattern'=>'/^[А-Яа-я\s\-]{3,}$/u', 'message'=>'Только кириллица, пробелы и дефис'],
            ['surname', 'match', 'pattern'=>'/^[А-Яа-я\s\-]{3,}$/u', 'message'=>'Только кириллица, пробелы и дефис'],
            ['patronymic', 'match', 'pattern'=>'/^[А-Яа-я\s\-]{3,}$/u', 'message'=>'Только кириллица, пробелы и дефис'],
            ['login', 'match', 'pattern'=>'/^[a-zA-Z]{1,}$/u', 'message'=>'Только латиница'],
            ['login', 'unique', 'message'=>'Такой логин уже есть'],
            ['email', 'email', 'message'=>'Некоректный email'],
            [['admin'], 'integer'],
            [['name', 'surname', 'patronymic', 'login', 'email', 'password'], 'string', 'max' => 255],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'patronymic' => 'Отчество',
            'login' => 'Логин',
            'email' => 'Email',
            'password' => 'Пароль',
            'admin' => 'Admin',
        ];
    }
}
