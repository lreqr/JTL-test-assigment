<?php

declare(strict_types=1);

namespace Plugin\landswitcher\Migrations;

use JTL\Plugin\Migration;
use JTL\Update\IMigration;

/**
 * Class Migration20220908154300
 * @package Plugin\jtl_test\Migrations
 */
class Migration20250124143600 extends Migration implements IMigration
{
    /**
     * @inheritdoc
     */
    public function up(): void
    {
        $this->execute(
            'CREATE TABLE IF NOT EXISTS `landswitcher_tland` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `url` VARCHAR(255) NOT NULL,
              `cISO` VARCHAR(255) NOT NULL,
              PRIMARY KEY (`id`)
              ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci'
        );
    }

    /**
     * @inheritdoc
     */
    public function down(): void
    {
        if ($this->doDeleteData()) {
            $this->execute('DROP TABLE IF EXISTS `landswitcher_tland`');
        }
    }
}
