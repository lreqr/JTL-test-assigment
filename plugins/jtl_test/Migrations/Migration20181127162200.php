<?php

declare(strict_types=1);

namespace Plugin\jtl_test\Migrations;

use JTL\Plugin\Migration;
use JTL\Update\IMigration;

/**
 * Class Migration20181127162200
 * @package Plugin\jtl_test\Migrations
 */
class Migration20181127162200 extends Migration implements IMigration
{
    /**
     * @inheritdoc
     */
    public function up(): void
    {
        $this->execute(
            'CREATE TABLE IF NOT EXISTS `jtl_test_foo` (
                `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                `foo` INT NOT NULL,
                `bar` TINYINT NOT NULL,
                `text` TEXT
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci'
        );
        $this->execute(
            'CREATE TABLE IF NOT EXISTS `jtl_test_bar` (
                `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                `foo` INT NOT NULL,
                `bar` TINYINT NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci'
        );
        $this->execute(
            "INSERT INTO `jtl_test_foo` (`id`, `foo`, `bar`, `text`)
                VALUES (1, 22, 1, 'Foobar!') ON DUPLICATE KEY UPDATE `text` = 'Duplicate!';
            INSERT INTO `jtl_test_foo` (`id`, `foo`, `bar`, `text`)
                VALUES (2, 44, 3, 'Foobar text 2!') ON DUPLICATE KEY UPDATE `text` = 'Duplicate!';
            INSERT INTO `jtl_test_bar` (`foo`, `bar`) VALUES (123456, 2);"
        );
    }

    /**
     * @inheritdoc
     */
    public function down(): void
    {
        if ($this->doDeleteData()) {
            $this->execute('DROP TABLE IF EXISTS `jtl_test_foo`');
            $this->execute('DROP TABLE IF EXISTS `jtl_test_bar`');
        }
    }
}
