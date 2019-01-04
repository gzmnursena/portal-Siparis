<?php

namespace kouosl\siparis\models;

use Yii;

/**
 * This is the model class for table "urunler".
 *
 * @property int $UrunID
 * @property string $UrunAdi
 * @property double $UrunFiyat
 * @property int $UrunAdet
 */
class Urunler extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'urunler';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['UrunID'], 'required'],
            [['UrunID', 'UrunAdet'], 'integer'],
            [['UrunFiyat'], 'number'],
            [['UrunAdi'], 'string', 'max' => 100],
            [['UrunID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'UrunID' => 'Urun ID',
            'UrunAdi' => 'Urun Adi',
            'UrunFiyat' => 'Urun Fiyat',
            'UrunAdet' => 'Urun Adet',
        ];
    }
}
