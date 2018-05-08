<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180207143114 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE hotel ADD city_id INT DEFAULT NULL, ADD region_id INT DEFAULT NULL, ADD price_type TINYTEXT DEFAULT NULL, ADD count_costs INT NOT NULL');
        $this->addSql('ALTER TABLE hotel ADD CONSTRAINT FK_3535ED98BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE hotel ADD CONSTRAINT FK_3535ED998260155 FOREIGN KEY (region_id) REFERENCES region (id)');
        $this->addSql('CREATE INDEX IDX_3535ED98BAC62AF ON hotel (city_id)');
        $this->addSql('CREATE INDEX IDX_3535ED998260155 ON hotel (region_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE hotel DROP FOREIGN KEY FK_3535ED98BAC62AF');
        $this->addSql('ALTER TABLE hotel DROP FOREIGN KEY FK_3535ED998260155');
        $this->addSql('DROP INDEX IDX_3535ED98BAC62AF ON hotel');
        $this->addSql('DROP INDEX IDX_3535ED998260155 ON hotel');
        $this->addSql('ALTER TABLE hotel DROP city_id, DROP region_id, DROP price_type, DROP count_costs');
    }
}
