<?php

namespace common\models;

use yii\db\ActiveQuery;
use common\models\Translater;
/**
 * This is the model class for table "translater_shedulers".
 *
 * @property int $id
 * @property int $translater_id
 * @property int $weekday
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Translater $translater
 */
class TranslaterShedulers extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'translater_shedulers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['translater_id', 'weekday', 'created_at', 'updated_at'], 'required'],
            [['translater_id', 'weekday', 'created_at', 'updated_at'], 'integer'],
            [['translater_id'], 'exist', 'skipOnError' => true, 'targetClass' => Translater::class, 'targetAttribute' => ['translater_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'translater_id' => 'Translater ID',
            'weekday' => 'Weekday',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Translater]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTranslater():ActiveQuery
    {
        return $this->hasOne(Translater::class, ['id' => 'translater_id']);
    }

}
