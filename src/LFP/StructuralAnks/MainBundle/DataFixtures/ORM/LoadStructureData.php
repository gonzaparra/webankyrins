<?php

namespace LFP\StructuralAnks\MainBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use LFP\StructuralAnks\MainBundle\Entity\Structure;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * @author Jorge Cares <reaperjc@gmail.com>
 */
class LoadStructureData implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    
    
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $em = $this->container->get('doctrine')->getManager();

        
        //Gender Table
        // Purge (truncate the table of this entity)
        $tableName = $em->getClassMetadata('LFPStructuralAnksMainBundle:Chain')->getTableName();
        $em->getConnection()->exec("
            SET foreign_key_checks = 0;
            TRUNCATE $tableName;
            SET foreign_key_checks = 1;
        ");

        // Reset ID column
        $em->getConnection()->exec("ALTER TABLE $tableName AUTO_INCREMENT = 1;");

//        $g = new Structure(); $g->setAcademicManagement('Decano'); $manager->persist($g);
//        
//       $manager->flush();

    }

    public function getOrder() {
        return 1;
    }
}