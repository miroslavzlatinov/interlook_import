<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180208124732 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE flight ADD flight_airport_from_id INT DEFAULT NULL, ADD flight_airport_to_id INT DEFAULT NULL, DROP airport_from, DROP airport_to');
        $this->addSql('ALTER TABLE flight ADD CONSTRAINT FK_C257E60E4963F764 FOREIGN KEY (flight_airport_from_id) REFERENCES airport (id)');
        $this->addSql('ALTER TABLE flight ADD CONSTRAINT FK_C257E60E9C3B4598 FOREIGN KEY (flight_airport_to_id) REFERENCES airport (id)');
        $this->addSql('CREATE INDEX IDX_C257E60E4963F764 ON flight (flight_airport_from_id)');
        $this->addSql('CREATE INDEX IDX_C257E60E9C3B4598 ON flight (flight_airport_to_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE flight DROP FOREIGN KEY FK_C257E60E4963F764');
        $this->addSql('ALTER TABLE flight DROP FOREIGN KEY FK_C257E60E9C3B4598');
        $this->addSql('DROP INDEX IDX_C257E60E4963F764 ON flight');
        $this->addSql('DROP INDEX IDX_C257E60E9C3B4598 ON flight');
        $this->addSql('ALTER TABLE flight ADD airport_from TINYTEXT NOT NULL COLLATE utf8_unicode_ci, ADD airport_to TINYTEXT NOT NULL COLLATE utf8_unicode_ci, DROP flight_airport_from_id, DROP flight_airport_to_id');
    }
}
