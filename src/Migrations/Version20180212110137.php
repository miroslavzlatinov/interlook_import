<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180212110137 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE accommodation_age DROP FOREIGN KEY FK_2FBEF0BE8F3692CD');
        $this->addSql('DROP INDEX IDX_2FBEF0BE8F3692CD ON accommodation_age');
        $this->addSql('ALTER TABLE accommodation_age DROP accommodation_id');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE accommodation_age ADD accommodation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE accommodation_age ADD CONSTRAINT FK_2FBEF0BE8F3692CD FOREIGN KEY (accommodation_id) REFERENCES accommodation (id)');
        $this->addSql('CREATE INDEX IDX_2FBEF0BE8F3692CD ON accommodation_age (accommodation_id)');
    }
}
