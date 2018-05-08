<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180208143710 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX IDX_7E91F7C2289F53C8 ON airport');
        $this->addSql('ALTER TABLE airport ADD region_id INT DEFAULT NULL, CHANGE airport_id city_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE airport ADD CONSTRAINT FK_7E91F7C28BAC62AF FOREIGN KEY (city_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE airport ADD CONSTRAINT FK_7E91F7C298260155 FOREIGN KEY (region_id) REFERENCES region (id)');
        $this->addSql('CREATE INDEX IDX_7E91F7C28BAC62AF ON airport (city_id)');
        $this->addSql('CREATE INDEX IDX_7E91F7C298260155 ON airport (region_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE airport DROP FOREIGN KEY FK_7E91F7C28BAC62AF');
        $this->addSql('ALTER TABLE airport DROP FOREIGN KEY FK_7E91F7C298260155');
        $this->addSql('DROP INDEX IDX_7E91F7C28BAC62AF ON airport');
        $this->addSql('DROP INDEX IDX_7E91F7C298260155 ON airport');
        $this->addSql('ALTER TABLE airport ADD airport_id INT DEFAULT NULL, DROP city_id, DROP region_id');
        $this->addSql('CREATE INDEX IDX_7E91F7C2289F53C8 ON airport (airport_id)');
    }
}
