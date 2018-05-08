<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180207080431 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE country CHANGE name_lat name_lat TINYTEXT DEFAULT NULL, CHANGE description description TINYTEXT DEFAULT NULL, CHANGE code code TINYTEXT DEFAULT NULL, CHANGE code_lat code_lat TINYTEXT DEFAULT NULL, CHANGE unicode unicode TINYTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE city CHANGE name_lat name_lat TINYTEXT DEFAULT NULL, CHANGE description description TINYTEXT DEFAULT NULL, CHANGE code code TINYTEXT DEFAULT NULL, CHANGE code_lat code_lat TINYTEXT DEFAULT NULL, CHANGE unicode unicode TINYTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE region CHANGE name_lat name_lat TINYTEXT DEFAULT NULL, CHANGE description description TINYTEXT DEFAULT NULL, CHANGE code code TINYTEXT DEFAULT NULL, CHANGE code_lat code_lat TINYTEXT DEFAULT NULL, CHANGE unicode unicode TINYTEXT DEFAULT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE city CHANGE name_lat name_lat TINYTEXT NOT NULL COLLATE utf8_unicode_ci, CHANGE description description TINYTEXT NOT NULL COLLATE utf8_unicode_ci, CHANGE code code TINYTEXT NOT NULL COLLATE utf8_unicode_ci, CHANGE code_lat code_lat TINYTEXT NOT NULL COLLATE utf8_unicode_ci, CHANGE unicode unicode TINYTEXT NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE country CHANGE name_lat name_lat TINYTEXT NOT NULL COLLATE utf8_unicode_ci, CHANGE description description TINYTEXT NOT NULL COLLATE utf8_unicode_ci, CHANGE code code TINYTEXT NOT NULL COLLATE utf8_unicode_ci, CHANGE code_lat code_lat TINYTEXT NOT NULL COLLATE utf8_unicode_ci, CHANGE unicode unicode TINYTEXT NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE region CHANGE name_lat name_lat TINYTEXT NOT NULL COLLATE utf8_unicode_ci, CHANGE description description TINYTEXT NOT NULL COLLATE utf8_unicode_ci, CHANGE code code TINYTEXT NOT NULL COLLATE utf8_unicode_ci, CHANGE code_lat code_lat TINYTEXT NOT NULL COLLATE utf8_unicode_ci, CHANGE unicode unicode TINYTEXT NOT NULL COLLATE utf8_unicode_ci');
    }
}
