<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250203133239 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE advertisement (id SERIAL NOT NULL, editor_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description TEXT NOT NULL, price VARCHAR(100) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_C95F6AEE6995AC4C ON advertisement (editor_id)');
        $this->addSql('COMMENT ON COLUMN advertisement.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE advertisement ADD CONSTRAINT FK_C95F6AEE6995AC4C FOREIGN KEY (editor_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE advertisement DROP CONSTRAINT FK_C95F6AEE6995AC4C');
        $this->addSql('DROP TABLE advertisement');
    }
}
