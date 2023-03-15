<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230314013302 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE consumer_review (id INT AUTO_INCREMENT NOT NULL, product_id VARCHAR(40) NOT NULL, cons_reviews LONGTEXT DEFAULT NULL, cons_score INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE products (id INT AUTO_INCREMENT NOT NULL, product_id VARCHAR(40) NOT NULL, scale VARCHAR(10) NOT NULL, brand VARCHAR(40) DEFAULT NULL, description VARCHAR(255) NOT NULL, type VARCHAR(40) NOT NULL, tags LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', add_description LONGTEXT DEFAULT NULL, stock INT NOT NULL, price DOUBLE PRECISION NOT NULL, image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE consumer_review');
        $this->addSql('DROP TABLE products');
    }
}
