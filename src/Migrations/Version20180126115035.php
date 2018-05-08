<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180126115035 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE voucher_tourist_services (voucher_services_id INT NOT NULL, tourist_id INT NOT NULL, INDEX IDX_E53D507A7AC16747 (voucher_services_id), INDEX IDX_E53D507AEC61B273 (tourist_id), PRIMARY KEY(voucher_services_id, tourist_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE voucher_tourist_services ADD CONSTRAINT FK_E53D507A7AC16747 FOREIGN KEY (voucher_services_id) REFERENCES voucher_services (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE voucher_tourist_services ADD CONSTRAINT FK_E53D507AEC61B273 FOREIGN KEY (tourist_id) REFERENCES tourist (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE voucher_tourist_services');
    }
}
