<?php

	namespace LFP\StructuralAnks\MainBundle\DataFixtures\ORM;

	use Doctrine\Common\DataFixtures\FixtureInterface;
	use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use LFP\StructuralAnks\MainBundle\Entity\StructuralRepModif;
	use Symfony\Component\DependencyInjection\ContainerAwareInterface;
	use Symfony\Component\DependencyInjection\ContainerInterface;

	/**
	 * @author Jorge Cares <reaperjc@gmail.com>
	 */
	class LoadStructuralRepModifData implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
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
			$tableName = $em->getClassMetadata('LFPStructuralAnksMainBundle:StructuralRepModif')->getTableName();
			$em->getConnection()->exec("
				SET foreign_key_checks = 0;
				TRUNCATE $tableName;
				SET foreign_key_checks = 1;
			");

			// Reset ID column
			$em->getConnection()->exec("ALTER TABLE $tableName AUTO_INCREMENT = 1;");
			$doctrine = $this->container->get('doctrine');

	
			//-0-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(16);
			$s->setLength(5);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2V4H', 'C', 1));
			$manager->persist($s);
	
			//-1-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(16);
			$s->setLength(5);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3HG0', 'D', 1));
			$manager->persist($s);
	
			//-2-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(3);
			$s->setLength(8);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1N0Q', 'A', 1));
			$manager->persist($s);
	
			//-3-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(26);
			$s->setLength(6);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2ZGG', 'A', 1));
			$manager->persist($s);
	
			//-4-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(16);
			$s->setLength(5);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2V5Q', 'C', 1));
			$manager->persist($s);
	
			//-5-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(2);
			$s->setLength(6);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1N0R', 'A', 1));
			$manager->persist($s);
	
			//-6-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(16);
			$s->setLength(5);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2BKK', 'B', 1));
			$manager->persist($s);
	
			//-7-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(16);
			$s->setLength(2);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2P2C', 'P', 1));
			$manager->persist($s);
	
			//-8-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(16);
			$s->setLength(5);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2BKG', 'A', 1));
			$manager->persist($s);
	
			//-9-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(16);
			$s->setLength(4);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1MJ0', 'A', 1));
			$manager->persist($s);
	
			//-10-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(16);
			$s->setLength(5);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2JAB', 'A', 1));
			$manager->persist($s);
	
			//-11-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(16);
			$s->setLength(6);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2XEN', 'A', 1));
			$manager->persist($s);
	
			//-12-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(16);
			$s->setLength(6);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2QYJ', 'A', 1));
			$manager->persist($s);
	
			//-13-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(16);
			$s->setLength(6);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2XEE', 'A', 1));
			$manager->persist($s);
	
			//-14-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(16);
			$s->setLength(5);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1SVX', 'A', 1));
			$manager->persist($s);
	
			//-15-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(115);
			$s->setLength(4);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2NYJ', 'A', 1));
			$manager->persist($s);
	
			//-16-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(166);
			$s->setLength(3);
			$s->setRepNum(2);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2NYJ', 'A', 2));
			$manager->persist($s);
	
			//-17-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(196);
			$s->setLength(4);
			$s->setRepNum(3);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2NYJ', 'A', 3));
			$manager->persist($s);
	
			//-18-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(233);
			$s->setLength(8);
			$s->setRepNum(4);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2NYJ', 'A', 4));
			$manager->persist($s);
	
			//-19-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(296);
			$s->setLength(9);
			$s->setRepNum(5);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2NYJ', 'A', 5));
			$manager->persist($s);
	
			//-20-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(115);
			$s->setLength(5);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2PNN', 'A', 1));
			$manager->persist($s);
	
			//-21-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(166);
			$s->setLength(3);
			$s->setRepNum(2);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2PNN', 'A', 2));
			$manager->persist($s);
	
			//-22-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(196);
			$s->setLength(4);
			$s->setRepNum(3);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2PNN', 'A', 3));
			$manager->persist($s);
	
			//-23-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(233);
			$s->setLength(14);
			$s->setRepNum(4);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2PNN', 'A', 4));
			$manager->persist($s);
	
			//-24-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(296);
			$s->setLength(9);
			$s->setRepNum(5);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2PNN', 'A', 5));
			$manager->persist($s);
	
			//-25-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(7);
			$s->setLength(2);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1TR4', 'A', 1));
			$manager->persist($s);
	
			//-26-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(213);
			$s->setLength(3);
			$s->setRepNum(7);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1TR4', 'A', 7));
			$manager->persist($s);
	
			//-27-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(254);
			$s->setLength(14);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1SW6', 'A', 1));
			$manager->persist($s);
	
			//-28-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(362);
			$s->setLength(7);
			$s->setRepNum(3);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1SW6', 'A', 3));
			$manager->persist($s);
	
			//-29-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(400);
			$s->setLength(8);
			$s->setRepNum(4);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1SW6', 'A', 4));
			$manager->persist($s);
	
			//-30-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(405);
			$s->setLength(8);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1N11', 'A', 1));
			$manager->persist($s);
	
			//-31-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(129);
			$s->setLength(5);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1K1A', 'A', 1));
			$manager->persist($s);
	
			//-32-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(265);
			$s->setLength(1);
			$s->setRepNum(5);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1K1A', 'A', 5));
			$manager->persist($s);
	
			//-33-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(342);
			$s->setLength(3);
			$s->setRepNum(7);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1K1A', 'A', 7));
			$manager->persist($s);
	
			//-34-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(73);
			$s->setLength(6);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1IKN', 'D', 1));
			$manager->persist($s);
	
			//-35-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(131);
			$s->setLength(1);
			$s->setRepNum(2);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1IKN', 'D', 2));
			$manager->persist($s);
	
			//-36-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(215);
			$s->setLength(1);
			$s->setRepNum(5);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1IKN', 'D', 5));
			$manager->persist($s);
	
			//-37-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(53);
			$s->setLength(1);
			$s->setRepNum(2);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1DC2', 'A', 2));
			$manager->persist($s);
	
			//-38-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(75);
			$s->setLength(1);
			$s->setRepNum(3);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1DC2', 'A', 3));
			$manager->persist($s);
	
			//-39-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(6);
			$s->setLength(3);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1BU9', 'A', 1));
			$manager->persist($s);
	
			//-40-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(46);
			$s->setLength(1);
			$s->setRepNum(2);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1BU9', 'A', 2));
			$manager->persist($s);
	
			//-41-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(4);
			$s->setLength(6);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1WG0', 'A', 1));
			$manager->persist($s);
	
			//-42-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(216);
			$s->setLength(3);
			$s->setRepNum(7);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1WG0', 'A', 7));
			$manager->persist($s);
	
			//-43-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(47);
			$s->setLength(1);
			$s->setRepNum(2);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1D9S', 'A', 2));
			$manager->persist($s);
	
			//-44-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(69);
			$s->setLength(1);
			$s->setRepNum(3);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1D9S', 'A', 3));
			$manager->persist($s);
	
			//-45-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(50);
			$s->setLength(1);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1BD8', 'A', 1));
			$manager->persist($s);
	
			//-46-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(6);
			$s->setLength(7);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3AAA', 'C', 1));
			$manager->persist($s);
	
			//-47-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(109);
			$s->setLength(3);
			$s->setRepNum(4);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3AAA', 'C', 4));
			$manager->persist($s);
	
			//-48-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(4);
			$s->setLength(6);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1MYO', 'A', 1));
			$manager->persist($s);
	
			//-49-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(8);
			$s->setLength(6);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1AWC', 'B', 1));
			$manager->persist($s);
	
			//-50-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(27);
			$s->setLength(3);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1WDY', 'A', 1));
			$manager->persist($s);
	
			//-51-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(56);
			$s->setLength(1);
			$s->setRepNum(2);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1WDY', 'A', 2));
			$manager->persist($s);
	
			//-52-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(157);
			$s->setLength(10);
			$s->setRepNum(5);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1WDY', 'A', 5));
			$manager->persist($s);
	
			//-53-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(213);
			$s->setLength(4);
			$s->setRepNum(6);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1WDY', 'A', 6));
			$manager->persist($s);
	
			//-54-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(1);
			$s->setLength(8);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2KBX', 'A', 1));
			$manager->persist($s);
	
			//-55-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(329);
			$s->setLength(7);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1YCS', 'B', 1));
			$manager->persist($s);
	
			//-56-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(425);
			$s->setLength(1);
			$s->setRepNum(4);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1YCS', 'B', 4));
			$manager->persist($s);
	
			//-57-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(442);
			$s->setLength(10);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3JUE', 'B', 1));
			$manager->persist($s);
	
			//-58-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(581);
			$s->setLength(1);
			$s->setRepNum(2);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3JUE', 'B', 2));
			$manager->persist($s);
	
			//-59-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(603);
			$s->setLength(2);
			$s->setRepNum(3);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3JUE', 'B', 3));
			$manager->persist($s);
	
			//-60-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(44);
			$s->setLength(4);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2AJA', 'A', 1));
			$manager->persist($s);
	
			//-61-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(208);
			$s->setLength(1);
			$s->setRepNum(5);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2AJA', 'A', 5));
			$manager->persist($s);
	
			//-62-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(290);
			$s->setLength(3);
			$s->setRepNum(6);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2AJA', 'A', 6));
			$manager->persist($s);
	
			//-63-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(316);
			$s->setLength(2);
			$s->setRepNum(7);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2AJA', 'A', 7));
			$manager->persist($s);
	
			//-64-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(52);
			$s->setLength(1);
			$s->setRepNum(2);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1AP7', 'A', 2));
			$manager->persist($s);
	
			//-65-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(53);
			$s->setLength(1);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1K3Z', 'D', 1));
			$manager->persist($s);
	
			//-66-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(239);
			$s->setLength(1);
			$s->setRepNum(5);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1K3Z', 'D', 5));
			$manager->persist($s);
	
			//-67-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(128);
			$s->setLength(1);
			$s->setRepNum(4);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3KEA', 'B', 4));
			$manager->persist($s);
	
			//-68-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(229);
			$s->setLength(2);
			$s->setRepNum(7);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3KEA', 'B', 7));
			$manager->persist($s);
	
			//-69-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(425);
			$s->setLength(3);
			$s->setRepNum(2);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1DCQ', 'A', 2));
			$manager->persist($s);
	
			//-70-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(592);
			$s->setLength(3);
			$s->setRepNum(2);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2B0O', 'F', 2));
			$manager->persist($s);
	
			//-71-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(725);
			$s->setLength(1);
			$s->setRepNum(4);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2VGE', 'A', 4));
			$manager->persist($s);
	
			//-72-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(148);
			$s->setLength(3);
			$s->setRepNum(4);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1S70', 'B', 4));
			$manager->persist($s);
	
			//-73-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(273);
			$s->setLength(4);
			$s->setRepNum(7);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1S70', 'B', 7));
			$manager->persist($s);
	
			//-74-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(47);
			$s->setLength(6);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2RFA', 'A', 1));
			$manager->persist($s);
	
			//-75-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(112);
			$s->setLength(4);
			$s->setRepNum(3);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2RFA', 'A', 3));
			$manager->persist($s);
	
			//-76-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(149);
			$s->setLength(13);
			$s->setRepNum(4);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2RFA', 'A', 4));
			$manager->persist($s);
	
			//-77-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(207);
			$s->setLength(4);
			$s->setRepNum(5);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2RFA', 'A', 5));
			$manager->persist($s);
	
			//-78-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(53);
			$s->setLength(6);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3EHQ', 'A', 1));
			$manager->persist($s);
	
			//-79-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(182);
			$s->setLength(3);
			$s->setRepNum(5);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3EHQ', 'A', 5));
			$manager->persist($s);
	
			//-80-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(133);
			$s->setLength(1);
			$s->setRepNum(4);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3D9H', 'A', 4));
			$manager->persist($s);
	
			//-81-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(199);
			$s->setLength(1);
			$s->setRepNum(6);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3D9H', 'A', 6));
			$manager->persist($s);
	
			//-82-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(241);
			$s->setLength(2);
			$s->setRepNum(7);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3D9H', 'A', 7));
			$manager->persist($s);
	
			//-83-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(-1);
			$s->setLength(1);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3C5R', 'A', 1));
			$manager->persist($s);
	
			//-84-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(536);
			$s->setLength(3);
			$s->setRepNum(4);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3C5R', 'A', 4));
			$manager->persist($s);
	
			//-85-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(135);
			$s->setLength(7);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3JXI', 'A', 1));
			$manager->persist($s);
	
			//-86-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(494);
			$s->setLength(3);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3TWR', 'B', 1));
			$manager->persist($s);
	
			//-87-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(523);
			$s->setLength(2);
			$s->setRepNum(2);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3TWR', 'B', 2));
			$manager->persist($s);
	
			//-88-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(634);
			$s->setLength(1);
			$s->setRepNum(5);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3TWR', 'B', 5));
			$manager->persist($s);
	
			//-89-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(950);
			$s->setLength(2);
			$s->setRepNum(7);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3B7B', 'A', 7));
			$manager->persist($s);
	
			//-90-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(11);
			$s->setLength(7);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3SO8', 'A', 1));
			$manager->persist($s);
	
			//-91-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(75);
			$s->setLength(4);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2ETC', 'A', 1));
			$manager->persist($s);
	
			//-92-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(78);
			$s->setLength(3);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2F37', 'A', 1));
			$manager->persist($s);
	
			//-93-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(128);
			$s->setLength(3);
			$s->setRepNum(2);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2F37', 'A', 2));
			$manager->persist($s);
	
			//-94-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(157);
			$s->setLength(4);
			$s->setRepNum(3);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2F37', 'A', 3));
			$manager->persist($s);
	
			//-95-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(195);
			$s->setLength(12);
			$s->setRepNum(4);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2F37', 'A', 4));
			$manager->persist($s);
	
			//-96-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(257);
			$s->setLength(9);
			$s->setRepNum(5);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2F37', 'A', 5));
			$manager->persist($s);
	
			//-97-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(7);
			$s->setLength(4);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2DVW', 'A', 1));
			$manager->persist($s);
	
			//-98-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(214);
			$s->setLength(4);
			$s->setRepNum(7);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2DVW', 'A', 7));
			$manager->persist($s);
	
			//-99-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(8);
			$s->setLength(2);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2L6B', 'A', 1));
			$manager->persist($s);
	
			//-100-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(93);
			$s->setLength(8);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3UXG', 'A', 1));
			$manager->persist($s);
	
			//-101-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(192);
			$s->setLength(1);
			$s->setRepNum(3);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3DEO', 'A', 3));
			$manager->persist($s);
	
			//-102-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(239);
			$s->setLength(16);
			$s->setRepNum(4);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3DEO', 'A', 4));
			$manager->persist($s);
	
			//-103-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(6);
			$s->setLength(5);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('4GPM', 'A', 1));
			$manager->persist($s);
	
			//-104-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(6);
			$s->setLength(5);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('4GMR', 'A', 1));
			$manager->persist($s);
	
			//-105-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(53);
			$s->setLength(1);
			$s->setRepNum(2);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1A5E', 'A', 2));
			$manager->persist($s);
	
			//-106-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(75);
			$s->setLength(1);
			$s->setRepNum(3);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('1A5E', 'A', 3));
			$manager->persist($s);
	
			//-107-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(4);
			$s->setLength(6);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2DZO', 'A', 1));
			$manager->persist($s);
	
			//-108-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(160);
			$s->setLength(1);
			$s->setRepNum(5);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2DZO', 'A', 5));
			$manager->persist($s);
	
			//-109-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(216);
			$s->setLength(3);
			$s->setRepNum(7);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2DZO', 'A', 7));
			$manager->persist($s);
	
			//-110-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(604);
			$s->setLength(6);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2KXP', 'C', 1));
			$manager->persist($s);
	
			//-111-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(699);
			$s->setLength(4);
			$s->setRepNum(4);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('2KXP', 'C', 4));
			$manager->persist($s);
	
			//-112-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(27);
			$s->setLength(3);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('4G8K', 'A', 1));
			$manager->persist($s);
	
			//-113-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(56);
			$s->setLength(1);
			$s->setRepNum(2);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('4G8K', 'A', 2));
			$manager->persist($s);
	
			//-114-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(157);
			$s->setLength(5);
			$s->setRepNum(5);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('4G8K', 'A', 5));
			$manager->persist($s);
	
			//-115-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(213);
			$s->setLength(4);
			$s->setRepNum(6);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('4G8K', 'A', 6));
			$manager->persist($s);
	
			//-116-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(442);
			$s->setLength(10);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('4F1P', 'A', 1));
			$manager->persist($s);
	
			//-117-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(581);
			$s->setLength(1);
			$s->setRepNum(2);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('4F1P', 'A', 2));
			$manager->persist($s);
	
			//-118-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(603);
			$s->setLength(2);
			$s->setRepNum(3);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('4F1P', 'A', 3));
			$manager->persist($s);
	
			//-119-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(359);
			$s->setLength(2);
			$s->setRepNum(2);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3UTM', 'A', 2));
			$manager->persist($s);
	
			//-120-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(469);
			$s->setLength(3);
			$s->setRepNum(5);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3UTM', 'A', 5));
			$manager->persist($s);
	
			//-121-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(512);
			$s->setLength(1);
			$s->setRepNum(7);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3UTM', 'A', 7));
			$manager->persist($s);
	
			//-122-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(7);
			$s->setLength(5);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3HRA', 'A', 1));
			$manager->persist($s);
	
			//-123-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(150);
			$s->setLength(5);
			$s->setRepNum(5);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3HRA', 'A', 5));
			$manager->persist($s);
	
			//-124-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(122);
			$s->setLength(1);
			$s->setRepNum(3);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3EU9', 'A', 3));
			$manager->persist($s);
	
			//-125-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(202);
			$s->setLength(1);
			$s->setRepNum(5);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3EU9', 'A', 5));
			$manager->persist($s);
	
			//-126-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(222);
			$s->setLength(1);
			$s->setRepNum(6);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3EU9', 'A', 6));
			$manager->persist($s);
	
			//-127-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(578);
			$s->setLength(6);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3LVQ', 'E', 1));
			$manager->persist($s);
	
			//-128-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(181);
			$s->setLength(3);
			$s->setRepNum(4);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3EHR', 'A', 4));
			$manager->persist($s);
	
			//-129-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(671);
			$s->setLength(3);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('4B93', 'B', 1));
			$manager->persist($s);
	
			//-130-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(885);
			$s->setLength(2);
			$s->setRepNum(6);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('4B93', 'B', 6));
			$manager->persist($s);
	
			//-131-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(137);
			$s->setLength(3);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3JXJ', 'A', 1));
			$manager->persist($s);
	
			//-132-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(189);
			$s->setLength(3);
			$s->setRepNum(2);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3JXJ', 'A', 2));
			$manager->persist($s);
	
			//-133-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(219);
			$s->setLength(4);
			$s->setRepNum(3);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3JXJ', 'A', 3));
			$manager->persist($s);
	
			//-134-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(256);
			$s->setLength(14);
			$s->setRepNum(4);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3JXJ', 'A', 4));
			$manager->persist($s);
	
			//-135-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(319);
			$s->setLength(9);
			$s->setRepNum(5);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3JXJ', 'A', 5));
			$manager->persist($s);
	
			//-136-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(523);
			$s->setLength(2);
			$s->setRepNum(2);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3TWQ', 'A', 2));
			$manager->persist($s);
	
			//-137-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(633);
			$s->setLength(1);
			$s->setRepNum(5);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3TWQ', 'A', 5));
			$manager->persist($s);
	
			//-138-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(152);
			$s->setLength(9);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3V2O', 'A', 1));
			$manager->persist($s);
	
			//-139-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(151);
			$s->setLength(5);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('4DX1', 'A', 1));
			$manager->persist($s);
	
			//-140-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(203);
			$s->setLength(3);
			$s->setRepNum(2);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('4DX1', 'A', 2));
			$manager->persist($s);
	
			//-141-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(233);
			$s->setLength(4);
			$s->setRepNum(3);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('4DX1', 'A', 3));
			$manager->persist($s);
	
			//-142-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(270);
			$s->setLength(14);
			$s->setRepNum(4);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('4DX1', 'A', 4));
			$manager->persist($s);
	
			//-143-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(333);
			$s->setLength(9);
			$s->setRepNum(5);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('4DX1', 'A', 5));
			$manager->persist($s);
	
			//-144-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(7);
			$s->setLength(4);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3AJI', 'A', 1));
			$manager->persist($s);
	
			//-145-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(213);
			$s->setLength(4);
			$s->setRepNum(7);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3AJI', 'A', 7));
			$manager->persist($s);
	
			//-146-
			$s = new StructuralRepModif();
			$s->setType("Deletion");
			$s->setStart(18);
			$s->setLength(3);
			$s->setRepNum(1);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3LJN', 'A', 1));
			$manager->persist($s);
	
			//-147-
			$s = new StructuralRepModif();
			$s->setType("Insertion");
			$s->setStart(120);
			$s->setLength(13);
			$s->setRepNum(4);
			$s->setStructuralRepeat($doctrine->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->findByPdbChainRepnum('3LJN', 'A', 4));
			$manager->persist($s);
	
		$manager->flush();

		}

		public function getOrder() {
			return 11;
		}
	}