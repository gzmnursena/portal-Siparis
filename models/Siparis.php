<?php

namespace kouosl\siparis\models;

use Yii;

/**
 * This is the model class for table "siparis".
 *
 * @property int $UrunID
 * @property int $UserID
 * @property string $UrunAdi
 * @property int $UrunFiyat
 * @property int $SiparisID
 */
class Siparis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'siparisEdilenler';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['UrunID', 'UserID', 'UrunAdi', 'UrunFiyat'], 'required'],
            [['UrunID', 'UserID', 'UrunFiyat'], 'integer'],
            [['UrunAdi'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'UrunID' => 'Urun ID',
            'UserID' => 'User ID',
            'UrunAdi' => 'Urun Adi',
            'UrunFiyat' => 'Urun Fiyat',
            'SiparisID' => 'Siparis ID',
        ];
    }
}
