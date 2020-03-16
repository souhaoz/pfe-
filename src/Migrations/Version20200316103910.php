<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200316103910 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE document_message CHANGE message_id message_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE documents CHANGE share_document_id share_document_id INT DEFAULT NULL, CHANGE publicity_id publicity_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE emoji CHANGE message_id message_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE publicity CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD user_name VARCHAR(255) DEFAULT NULL, DROP login, CHANGE roles roles JSON NOT NULL, CHANGE api_token api_token VARCHAR(255) DEFAULT NULL, CHANGE logo logo VARCHAR(255) DEFAULT NULL, CHANGE activated activated TINYINT(1) DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE document_message CHANGE message_id message_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE documents CHANGE share_document_id share_document_id INT DEFAULT NULL, CHANGE publicity_id publicity_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE emoji CHANGE message_id message_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE publicity CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD login VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, DROP user_name, CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, CHANGE api_token api_token VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE logo logo VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE activated activated TINYINT(1) DEFAULT \'NULL\', CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\', CHANGE created_at created_at DATETIME DEFAULT \'NULL\'');
    }
}
