<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240308094259 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prescription_meds DROP FOREIGN KEY FK_6CD7CBD993DB413D');
        $this->addSql('ALTER TABLE prescription_meds DROP FOREIGN KEY FK_6CD7CBD9A30CAE6F');
        $this->addSql('DROP TABLE prescription_meds');
        $this->addSql('ALTER TABLE prescription ADD user_id INT DEFAULT NULL, ADD medication VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE prescription ADD CONSTRAINT FK_1FBFB8D9A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_1FBFB8D9A76ED395 ON prescription (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE prescription_meds (prescription_id INT NOT NULL, meds_id INT NOT NULL, INDEX IDX_6CD7CBD993DB413D (prescription_id), INDEX IDX_6CD7CBD9A30CAE6F (meds_id), PRIMARY KEY(prescription_id, meds_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE prescription_meds ADD CONSTRAINT FK_6CD7CBD993DB413D FOREIGN KEY (prescription_id) REFERENCES prescription (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE prescription_meds ADD CONSTRAINT FK_6CD7CBD9A30CAE6F FOREIGN KEY (meds_id) REFERENCES meds (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE prescription DROP FOREIGN KEY FK_1FBFB8D9A76ED395');
        $this->addSql('DROP INDEX IDX_1FBFB8D9A76ED395 ON prescription');
        $this->addSql('ALTER TABLE prescription DROP user_id, DROP medication');
    }
}
