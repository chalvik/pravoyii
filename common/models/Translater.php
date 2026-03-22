<?php

namespace common\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "translaters".
 *
 * @property int $id
 * @property string $fio
 * @property string|null $city
 * @property string $phone
 * @property int|null $time_zone
 * @property int|null $status
 * @property int|null $deleted_at
 * @property int $created_at
 * @property int $updated_at
 */
class Translater extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'translaters';
    }

    public function behaviors(): array
    {
        return [
            TimestampBehavior::class,
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['city', 'deleted_at'], 'default', 'value' => null],
            [['time_zone'], 'default', 'value' => 3],
            [['status'], 'default', 'value' => 0],
            [['fio', 'phone'], 'required'],
            [['time_zone', 'status', 'deleted_at', 'created_at', 'updated_at'], 'integer'],
            [['fio', 'city', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Fio',
            'city' => 'City',
            'phone' => 'Phone',
            'time_zone' => 'Time Zone',
            'status' => 'Status',
            'deleted_at' => 'Deleted At',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getSchedulers(): ActiveQuery
    {
        return $this->hasMany(TranslaterShedulers::class, ['translater_id' => 'id']);
    }

}
