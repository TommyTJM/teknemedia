<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tknt_users".
 *
 * @property integer $user_id
 * @property string $first_nm
 * @property string $last_nm
 * @property string $email
 * @property string $password
 * @property integer $role_id
 * @property integer $address_id
 * @property string $ip_address
 * @property string $browser
 * @property string $last_login_dt
 * @property integer $status_id
 * @property string $user_created
 * @property string $dt_created
 * @property string $user_modified
 * @property string $dt_modified
 *
 * @property TkntAddress[] $tkntAddresses
 */
class TkntUsers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tknt_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role_id', 'last_login_dt', 'status_id'], 'required'],
            [['role_id', 'address_id', 'status_id'], 'integer'],
            [['last_login_dt', 'dt_created', 'dt_modified'], 'safe'],
            [['first_nm', 'last_nm', 'email', 'password', 'ip_address', 'browser', 'user_created', 'user_modified'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'first_nm' => 'First Nm',
            'last_nm' => 'Last Nm',
            'email' => 'Email',
            'password' => 'Password',
            'role_id' => 'Role ID',
            'address_id' => 'Address ID',
            'ip_address' => 'Ip Address',
            'browser' => 'Browser',
            'last_login_dt' => 'Last Login Dt',
            'status_id' => 'Status ID',
            'user_created' => 'User Created',
            'dt_created' => 'Dt Created',
            'user_modified' => 'User Modified',
            'dt_modified' => 'Dt Modified',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTkntAddresses()
    {
        return $this->hasMany(TkntAddress::className(), ['user_id' => 'user_id']);
    }
}
