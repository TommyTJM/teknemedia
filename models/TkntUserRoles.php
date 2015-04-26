<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tknt_user_roles".
 *
 * @property integer $role_id
 * @property string $role_desc
 * @property string $role_long_desc
 * @property string $user_created
 * @property string $dt_created
 * @property string $user_modified
 * @property string $dt_modified
 */
class TkntUserRoles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tknt_user_roles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role_id'], 'required'],
            [['role_id'], 'integer'],
            [['dt_created', 'dt_modified'], 'safe'],
            [['role_desc', 'role_long_desc', 'user_created', 'user_modified'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'role_id' => 'Role ID',
            'role_desc' => 'Role Desc',
            'role_long_desc' => 'Role Long Desc',
            'user_created' => 'User Created',
            'dt_created' => 'Dt Created',
            'user_modified' => 'User Modified',
            'dt_modified' => 'Dt Modified',
        ];
    }
}
