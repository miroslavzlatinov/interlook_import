<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180126110542 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE voucher_services (id INT AUTO_INCREMENT NOT NULL, voucher_id INT DEFAULT NULL, check_in_date DATE NOT NULL, check_out_date DATE NOT NULL, service_type TINYTEXT NOT NULL, service_id TINYTEXT NOT NULL, service_count INT NOT NULL, service_name TINYTEXT NOT NULL, service_max_pax INT NOT NULL, service_code SMALLINT NOT NULL, service_code1 TINYTEXT NOT NULL, service_code2 TINYTEXT NOT NULL, INDEX IDX_ED95B9E028AA1B6F (voucher_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tourist (id INT AUTO_INCREMENT NOT NULL, name TINYTEXT NOT NULL, sex TINYTEXT NOT NULL, age INT NOT NULL, date_of_birth DATE NOT NULL, pax_comment LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE voucher_services ADD CONSTRAINT FK_ED95B9E028AA1B6F FOREIGN KEY (voucher_id) REFERENCES voucher (id)');
        $this->addSql('ALTER TABLE voucher ADD voucher_no INT NOT NULL, ADD record_type TINYTEXT NOT NULL, ADD partner TINYTEXT NOT NULL, ADD comment_booking TINYTEXT NOT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE voucher_services');
        $this->addSql('DROP TABLE tourist');
        $this->addSql('ALTER TABLE voucher DROP voucher_no, DROP record_type, DROP partner, DROP comment_booking');
    }
}
