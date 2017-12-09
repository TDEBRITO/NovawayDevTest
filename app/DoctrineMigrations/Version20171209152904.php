<?php

namespace Application\Migrations;

use AdminBundle\Entity\ProductType;
use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171209152904 extends AbstractMigration implements ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $em = $this->container->get('doctrine')->getManager();

        $productType = new ProductType();
        $productType->setName('book');
        $em->persist($productType);

        $productType = new ProductType();
        $productType->setName('dvd');
        $em->persist($productType);

        $productType = new ProductType();
        $productType->setName('blueray');
        $em->persist($productType);

        $em->flush();


    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
