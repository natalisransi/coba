<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mb_kabupaten_kota".
 *
 * @property int $mb_kabupaten_kota_id
 * @property int $mb_provinsi_id
 * @property string $mb_kabupaten_kota_kode
 * @property string $mb_kabupaten_nama
 *
 * @property MbProvinsi $mbProvinsi
 * @property MbKecamatan[] $mbKecamatans
 */
class MbKabupatenKota extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mb_kabupaten_kota';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mb_provinsi_id'], 'required'],
            [['mb_provinsi_id'], 'integer'],
            [['mb_kabupaten_kota_kode'], 'string', 'max' => 45],
            [['mb_kabupaten_nama'], 'string', 'max' => 145],
            [['mb_provinsi_id'], 'exist', 'skipOnError' => true, 'targetClass' => MbProvinsi::className(), 'targetAttribute' => ['mb_provinsi_id' => 'mb_provinsi_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mb_kabupaten_kota_id' => 'Mb Kabupaten Kota ID',
            'mb_provinsi_id' => 'Mb Provinsi ID',
            'mb_kabupaten_kota_kode' => 'Mb Kabupaten Kota Kode',
            'mb_kabupaten_nama' => 'Mb Kabupaten Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMbProvinsi()
    {
        return $this->hasOne(MbProvinsi::className(), ['mb_provinsi_id' => 'mb_provinsi_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMbKecamatans()
    {
        return $this->hasMany(MbKecamatan::className(), ['mb_kabupaten_kota_id' => 'mb_kabupaten_kota_id']);
    }
}
