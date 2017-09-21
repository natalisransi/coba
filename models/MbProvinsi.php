<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mb_provinsi".
 *
 * @property int $mb_provinsi_id
 * @property string $mb_provinsi_kode
 * @property string $mb_provinsi_nama
 *
 * @property MbKabupatenKota[] $mbKabupatenKotas
 */
class MbProvinsi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mb_provinsi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mb_provinsi_kode'], 'string', 'max' => 45],
            [['mb_provinsi_nama'], 'string', 'max' => 145],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mb_provinsi_id' => 'Mb Provinsi ID',
            'mb_provinsi_kode' => 'Mb Provinsi Kode',
            'mb_provinsi_nama' => 'Mb Provinsi Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMbKabupatenKotas()
    {
        return $this->hasMany(MbKabupatenKota::className(), ['mb_provinsi_id' => 'mb_provinsi_id']);
    }
}
