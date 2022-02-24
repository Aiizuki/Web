<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220214134309 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_AC74095A7F05C301');
        $this->addSql('CREATE TEMPORARY TABLE __temp__activity AS SELECT id, animateur_id, nom, description FROM activity');
        $this->addSql('DROP TABLE activity');
        $this->addSql('CREATE TABLE activity (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, animateur_id INTEGER NOT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, CONSTRAINT FK_AC74095A7F05C301 FOREIGN KEY (animateur_id) REFERENCES user (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO activity (id, animateur_id, nom, description) SELECT id, animateur_id, nom, description FROM __temp__activity');
        $this->addSql('DROP TABLE __temp__activity');
        $this->addSql('CREATE INDEX IDX_AC74095A7F05C301 ON activity (animateur_id)');
        $this->addSql('DROP INDEX IDX_8E570DDBA76ED395');
        $this->addSql('DROP INDEX IDX_8E570DDB81C06096');
        $this->addSql('CREATE TEMPORARY TABLE __temp__activity_user AS SELECT activity_id, user_id FROM activity_user');
        $this->addSql('DROP TABLE activity_user');
        $this->addSql('CREATE TABLE activity_user (activity_id INTEGER NOT NULL, user_id INTEGER NOT NULL, PRIMARY KEY(activity_id, user_id), CONSTRAINT FK_8E570DDB81C06096 FOREIGN KEY (activity_id) REFERENCES activity (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_8E570DDBA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO activity_user (activity_id, user_id) SELECT activity_id, user_id FROM __temp__activity_user');
        $this->addSql('DROP TABLE __temp__activity_user');
        $this->addSql('CREATE INDEX IDX_8E570DDBA76ED395 ON activity_user (user_id)');
        $this->addSql('CREATE INDEX IDX_8E570DDB81C06096 ON activity_user (activity_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_AC74095A7F05C301');
        $this->addSql('CREATE TEMPORARY TABLE __temp__activity AS SELECT id, animateur_id, nom, description FROM activity');
        $this->addSql('DROP TABLE activity');
        $this->addSql('CREATE TABLE activity (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, animateur_id INTEGER NOT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO activity (id, animateur_id, nom, description) SELECT id, animateur_id, nom, description FROM __temp__activity');
        $this->addSql('DROP TABLE __temp__activity');
        $this->addSql('CREATE INDEX IDX_AC74095A7F05C301 ON activity (animateur_id)');
        $this->addSql('DROP INDEX IDX_8E570DDB81C06096');
        $this->addSql('DROP INDEX IDX_8E570DDBA76ED395');
        $this->addSql('CREATE TEMPORARY TABLE __temp__activity_user AS SELECT activity_id, user_id FROM activity_user');
        $this->addSql('DROP TABLE activity_user');
        $this->addSql('CREATE TABLE activity_user (activity_id INTEGER NOT NULL, user_id INTEGER NOT NULL, PRIMARY KEY(activity_id, user_id))');
        $this->addSql('INSERT INTO activity_user (activity_id, user_id) SELECT activity_id, user_id FROM __temp__activity_user');
        $this->addSql('DROP TABLE __temp__activity_user');
        $this->addSql('CREATE INDEX IDX_8E570DDB81C06096 ON activity_user (activity_id)');
        $this->addSql('CREATE INDEX IDX_8E570DDBA76ED395 ON activity_user (user_id)');
    }
}
