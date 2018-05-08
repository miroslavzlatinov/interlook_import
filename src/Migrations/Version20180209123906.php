<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180209123906 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE room_category (id INT AUTO_INCREMENT NOT NULL, interlook_id INT NOT NULL, name TINYTEXT NOT NULL, name_lat TINYTEXT DEFAULT NULL, description TINYTEXT DEFAULT NULL, code TINYTEXT DEFAULT NULL, code_lat TINYTEXT DEFAULT NULL, unicode TINYTEXT DEFAULT NULL, main_places INT NOT NULL, extra_places INT NOT NULL, is_main TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pansion (id INT AUTO_INCREMENT NOT NULL, interlook_id INT NOT NULL, name TINYTEXT NOT NULL, name_lat TINYTEXT DEFAULT NULL, description TINYTEXT DEFAULT NULL, code TINYTEXT DEFAULT NULL, code_lat TINYTEXT DEFAULT NULL, unicode TINYTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE room_type (id INT AUTO_INCREMENT NOT NULL, interlook_id INT NOT NULL, name TINYTEXT NOT NULL, name_lat TINYTEXT DEFAULT NULL, description TINYTEXT DEFAULT NULL, code TINYTEXT DEFAULT NULL, code_lat TINYTEXT DEFAULT NULL, unicode TINYTEXT DEFAULT NULL, places INT NOT NULL, ext_paces INT NOT NULL, print_order INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE room_description (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE accommodation (id INT AUTO_INCREMENT NOT NULL, interlook_id INT NOT NULL, name TINYTEXT NOT NULL, name_lat TINYTEXT DEFAULT NULL, description TINYTEXT DEFAULT NULL, code TINYTEXT DEFAULT NULL, code_lat TINYTEXT DEFAULT NULL, unicode TINYTEXT DEFAULT NULL, is_per_room TINYINT(1) NOT NULL, count_adult_main INT NOT NULL, count_child_main INT NOT NULL, count_adult_extra INT NOT NULL, count_child_extra INT NOT NULL, children_ages TINYTEXT DEFAULT NULL, is_web TINYINT(1) NOT NULL, is_package TINYINT(1) NOT NULL, update_date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE room_category');
        $this->addSql('DROP TABLE pansion');
        $this->addSql('DROP TABLE room_type');
        $this->addSql('DROP TABLE room_description');
        $this->addSql('DROP TABLE accommodation');
    }
}
