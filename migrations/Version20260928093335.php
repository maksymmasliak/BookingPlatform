<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260928093335 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE "user" ADD business_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE "user" ADD CONSTRAINT FK_8D93D649A89DB457 FOREIGN KEY (business_id) REFERENCES business (id) NOT DEFERRABLE');
        $this->addSql('CREATE INDEX IDX_8D93D649A89DB457 ON "user" (business_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE "user" DROP CONSTRAINT FK_8D93D649A89DB457');
        $this->addSql('DROP INDEX IDX_8D93D649A89DB457');
        $this->addSql('ALTER TABLE "user" DROP business_id');
    }
}
