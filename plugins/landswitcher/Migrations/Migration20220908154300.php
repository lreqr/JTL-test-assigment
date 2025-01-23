<?php

declare(strict_types=1);

namespace Plugin\jtl_test\Migrations;

use JTL\Plugin\Migration;
use JTL\Update\IMigration;

/**
 * Class Migration20220908154300
 * @package Plugin\jtl_test\Migrations
 */
class Migration20220908154300 extends Migration implements IMigration
{
    /**
     * @inheritdoc
     */
    public function up(): void
    {
        $this->execute(
            'CREATE TABLE IF NOT EXISTS `jtl_test_items` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `slug` VARCHAR(255) NOT NULL,
              `description` VARCHAR(255) NOT NULL,
              `name` VARCHAR(255) NOT NULL,
              PRIMARY KEY (`id`)
              ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci'
        );
        $this->execute(
            "INSERT INTO `jtl_test_items` (`slug`, `description`, `name`)
                VALUES ('foo', 'Example description', 'Item 1');
            INSERT INTO `jtl_test_items` (`slug`, `description`, `name`)
                VALUES ('bar', 'Another example', 'Item 2');
            INSERT INTO `jtl_test_items` (`slug`, `description`, `name`)
                VALUES ('baz', 'Third example', 'Item Three');
            INSERT INTO `jtl_test_items` (`slug`, `description`, `name`)
                VALUES ('item4', 'Yet another demo item', 'Item Four');"
        );
    }

    /**
     * @inheritdoc
     */
    public function down(): void
    {
        if ($this->doDeleteData()) {
            $this->execute('DROP TABLE IF EXISTS `jtl_test_items`');
        }
    }
}
