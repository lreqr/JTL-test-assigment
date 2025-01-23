<?php

declare(strict_types=1);

namespace Plugin\jtl_test\Migrations;

use JTL\Plugin\Migration;
use JTL\Update\IMigration;

/**
 * Class Migration20181112155500
 * @package Plugin\jtl_test\Migrations
 */
class Migration20181112155500 extends Migration implements IMigration
{
    /**
     * @inheritdoc
     */
    public function up(): void
    {
        $this->execute(
            'CREATE TABLE IF NOT EXISTS `jtl_test_tableone` (
                  `id` int(10) NOT NULL AUTO_INCREMENT,
                  `test` int(10) unsigned NOT NULL,
                  `language_id` int(10) unsigned NOT NULL,
                  `date_test` datetime NOT NULL,
                  PRIMARY KEY (`id`)
            )  ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci'
        );
    }

    /**
     * @inheritdoc
     */
    public function down(): void
    {
        if ($this->doDeleteData()) {
            $this->execute('DROP TABLE IF EXISTS `jtl_test_tableone`');
        }
    }
}
