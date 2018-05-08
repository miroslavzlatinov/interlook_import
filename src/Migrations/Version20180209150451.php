<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180209150451 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE accommodation_age (id INT AUTO_INCREMENT NOT NULL, accommodation_id INT DEFAULT NULL, interlook_id INT NOT NULL, age_from INT NOT NULL, age_to INT NOT NULL, count_man INT NOT NULL, is_main TINYINT(1) NOT NULL, interlook_update_date DATETIME NOT NULL, INDEX IDX_2FBEF0BE8F3692CD (accommodation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE accommodation_age ADD CONSTRAINT FK_2FBEF0BE8F3692CD FOREIGN KEY (accommodation_id) REFERENCES accommodation (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE accommodation_age');
    }
}
