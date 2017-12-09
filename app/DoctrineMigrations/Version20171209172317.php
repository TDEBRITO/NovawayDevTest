<?php

namespace Application\Migrations;

use AdminBundle\Entity\Actor;
use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171209172317 extends AbstractMigration implements ContainerAwareInterface
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
        // this up() migration is auto-generated, please modify it to your needs
        $em = $this->container->get('doctrine')->getManager();

        $actor = new Actor();
        $actor->setActorFirstname('Bob');
        $actor->setActorLastname('Eponge');
        $em->persist($actor);

        $actor = new Actor();
        $actor->setActorFirstname('Acteur');
        $actor->setActorLastname('2');
        $em->persist($actor);

        $actor = new Actor();
        $actor->setActorFirstname('Acteur');
        $actor->setActorLastname('3');
        $em->persist($actor);

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
