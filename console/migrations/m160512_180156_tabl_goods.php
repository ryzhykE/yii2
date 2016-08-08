<?php

use yii\db\Migration;

class m160512_180156_tabl_goods extends Migration
{
    public function up()
    {
        $this->execute("
        CREATE TABLE IF NOT EXISTS `goods` (
  `id_goods` int(11) NOT NULL AUTO_INCREMENT,
  `town` varchar(25) NOT NULL,
  `location` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `tovar` varchar(255) NOT NULL,
  `prise` mediumint(11) NOT NULL,
  `bye` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `client` mediumint(11) NOT NULL,
  `general_image` varchar(200) NOT NULL,
  `properties` varchar(255) NOT NULL,
  `discription` text NOT NULL,
  `delivery` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `contacts` varchar(255) NOT NULL,
  `visible` smallint(1) NOT NULL,
  `hot` smallint(1) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id_goods`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;");
    }

    public function down()
    {
        echo "m160512_180156_tabl_goods cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
