<?php

use yii\db\Migration;

/**
 * Class m190103_094412_urunler
 */
class m190103_094412_urunler extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
     $this->createTable('urunler', [
            'UrunID' => $this->integer(100),
            'UrunAdi' => $this->string(100),
            'UrunFiyat' => $this->double(),
            'UrunAdet' => $this->integer(100),
            'PRIMARY KEY(UrunID)',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190103_094412_urunler cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190103_094412_urunler cannot be reverted.\n";

        return false;
    }
    */
}
