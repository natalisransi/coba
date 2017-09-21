<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mb_kecamatan".
 *
 * @property int $mb_kecamatan_id
 * @property int $mb_kabupaten_kota_id
 * @property string $mb_kecamatan_kode
 * @property string $mb_kecamatan_nama
 *
 * @property MbKabupatenKota $mbKabupatenKota
 */
class MbKecamatan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mb_kecamatan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mb_kabupaten_kota_id'], 'required'],
            [['mb_kabupaten_kota_id'], 'integer'],
            [['mb_kecamatan_kode'], 'string', 'max' => 45],
            [['mb_kecamatan_nama'], 'string', 'max' => 145],
            [['mb_kabupaten_kota_id'], 'exist', 'skipOnError' => true, 'targetClass' => MbKabupatenKota::className(), 'targetAttribute' => ['mb_kabupaten_kota_id' => 'mb_kabupaten_kota_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mb_kecamatan_id' => 'Mb Kecamatan ID',
            'mb_kabupaten_kota_id' => 'Mb Kabupaten Kota ID',
            'mb_kecamatan_kode' => 'Mb Kecamatan Kode',
            'mb_kecamatan_nama' => 'Mb Kecamatan Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMbKabupatenKota()
    {
        return $this->hasOne(MbKabupatenKota::className(), ['mb_kabupaten_kota_id' => 'mb_kabupaten_kota_id']);
    }
}
