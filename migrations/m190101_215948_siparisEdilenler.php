<?php

use yii\db\Migration;

/**
 * Class m190101_215948_siparisEdilenler
 */
class m190101_215948_siparisEdilenler extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$this->createTable('siparisEdilenler', [
            'UrunID' => $this->integer(100),
            'UserID' => $this->integer(100),
            'UrunAdi' => $this->string(100),
            'UrunFiyat' => $this->integer(100),
			'SiparisID' => $this->integer(100),
            'PRIMARY KEY(siparisID)',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190101_215948_siparisEdilenler cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190101_215948_siparisEdilenler cannot be reverted.\n";

        return false;
    }
    */
}
