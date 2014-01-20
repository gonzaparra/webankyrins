<?php

	namespace LFP\StructuralAnks\MainBundle\DataFixtures\ORM;

	use Doctrine\Common\DataFixtures\FixtureInterface;
	use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use LFP\StructuralAnks\MainBundle\Entity\StructuralRepeat;
	use Symfony\Component\DependencyInjection\ContainerAwareInterface;
	use Symfony\Component\DependencyInjection\ContainerInterface;

	/**
	 * @author Jorge Cares <reaperjc@gmail.com>
	 */
	class LoadStructuralRepeatData implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
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
			$tableName = $em->getClassMetadata('LFPStructuralAnksMainBundle:StructuralRepeat')->getTableName();
			$em->getConnection()->exec("
				SET foreign_key_checks = 0;
				TRUNCATE $tableName;
				SET foreign_key_checks = 1;
			");

			// Reset ID column
			$em->getConnection()->exec("ALTER TABLE $tableName AUTO_INCREMENT = 1;");
			$doctrine = $this->container->get('doctrine');

	
			//-0-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(16);
			$s->setEnd(39);
			$s->setConfStart(16);
			$s->setConfEnd(39);
			$s->setLength(24);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43");
			$s->setCannonicalConts(240);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(291));
			$manager->persist($s);
	
			//-1-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(40);
			$s->setEnd(72);
			$s->setConfStart(40);
			$s->setConfEnd(72);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72");
			$s->setCannonicalConts(310);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(291));
			$manager->persist($s);
	
			//-2-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(73);
			$s->setEnd(105);
			$s->setConfStart(73);
			$s->setConfEnd(105);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105");
			$s->setCannonicalConts(290);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(291));
			$manager->persist($s);
	
			//-3-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(106);
			$s->setEnd(135);
			$s->setConfStart(106);
			$s->setConfEnd(135);
			$s->setLength(30);
			$s->setConfLength(30);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,D,D");
			$s->setCannonicalConts(242);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(291));
			$manager->persist($s);
	
			//-4-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(16);
			$s->setEnd(39);
			$s->setConfStart(16);
			$s->setConfEnd(39);
			$s->setLength(24);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43");
			$s->setCannonicalConts(240);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(304));
			$manager->persist($s);
	
			//-5-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(40);
			$s->setEnd(72);
			$s->setConfStart(40);
			$s->setConfEnd(72);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72");
			$s->setCannonicalConts(306);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(304));
			$manager->persist($s);
	
			//-6-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(73);
			$s->setEnd(105);
			$s->setConfStart(73);
			$s->setConfEnd(105);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105");
			$s->setCannonicalConts(288);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(304));
			$manager->persist($s);
	
			//-7-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(106);
			$s->setEnd(135);
			$s->setConfStart(106);
			$s->setConfEnd(135);
			$s->setLength(30);
			$s->setConfLength(30);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,D,D,D");
			$s->setCannonicalConts(252);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(304));
			$manager->persist($s);
	
			//-8-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(3);
			$s->setEnd(27);
			$s->setConfStart(3);
			$s->setConfEnd(27);
			$s->setLength(25);
			$s->setConfLength(25);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,D,D,D,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27");
			$s->setCannonicalConts(216);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(269));
			$manager->persist($s);
	
			//-9-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(28);
			$s->setEnd(60);
			$s->setConfStart(28);
			$s->setConfEnd(60);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60");
			$s->setCannonicalConts(304);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(269));
			$manager->persist($s);
	
			//-10-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(61);
			$s->setEnd(93);
			$s->setConfStart(61);
			$s->setConfEnd(93);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93");
			$s->setCannonicalConts(302);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(269));
			$manager->persist($s);
	
			//-11-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(26);
			$s->setEnd(49);
			$s->setConfStart(26);
			$s->setConfEnd(49);
			$s->setLength(24);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,D,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52");
			$s->setCannonicalConts(246);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(300));
			$manager->persist($s);
	
			//-12-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(50);
			$s->setEnd(82);
			$s->setConfStart(50);
			$s->setConfEnd(82);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82");
			$s->setCannonicalConts(298);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(300));
			$manager->persist($s);
	
			//-13-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(83);
			$s->setEnd(110);
			$s->setConfStart(83);
			$s->setConfEnd(110);
			$s->setLength(28);
			$s->setConfLength(28);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,D,D,D,D,D");
			$s->setCannonicalConts(256);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(300));
			$manager->persist($s);
	
			//-14-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(17);
			$s->setEnd(49);
			$s->setConfStart(26);
			$s->setConfEnd(49);
			$s->setLength(33);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49");
			$s->setCannonicalConts(270);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(299));
			$manager->persist($s);
	
			//-15-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(50);
			$s->setEnd(82);
			$s->setConfStart(50);
			$s->setConfEnd(82);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82");
			$s->setCannonicalConts(282);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(299));
			$manager->persist($s);
	
			//-16-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(83);
			$s->setEnd(110);
			$s->setConfStart(83);
			$s->setConfEnd(110);
			$s->setLength(28);
			$s->setConfLength(28);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,D,D,D,D,D");
			$s->setCannonicalConts(232);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(299));
			$manager->persist($s);
	
			//-17-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(16);
			$s->setEnd(39);
			$s->setConfStart(16);
			$s->setConfEnd(39);
			$s->setLength(24);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43");
			$s->setCannonicalConts(240);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(295));
			$manager->persist($s);
	
			//-18-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(40);
			$s->setEnd(72);
			$s->setConfStart(40);
			$s->setConfEnd(72);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72");
			$s->setCannonicalConts(302);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(295));
			$manager->persist($s);
	
			//-19-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(73);
			$s->setEnd(105);
			$s->setConfStart(73);
			$s->setConfEnd(105);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105");
			$s->setCannonicalConts(294);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(295));
			$manager->persist($s);
	
			//-20-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(106);
			$s->setEnd(138);
			$s->setConfStart(106);
			$s->setConfEnd(138);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138");
			$s->setCannonicalConts(300);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(295));
			$manager->persist($s);
	
			//-21-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(2);
			$s->setEnd(27);
			$s->setConfStart(2);
			$s->setConfEnd(27);
			$s->setLength(26);
			$s->setConfLength(26);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,D,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28");
			$s->setCannonicalConts(262);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(267));
			$manager->persist($s);
	
			//-22-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(28);
			$s->setEnd(60);
			$s->setConfStart(28);
			$s->setConfEnd(60);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60");
			$s->setCannonicalConts(318);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(267));
			$manager->persist($s);
	
			//-23-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(61);
			$s->setEnd(93);
			$s->setConfStart(61);
			$s->setConfEnd(93);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93");
			$s->setCannonicalConts(308);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(267));
			$manager->persist($s);
	
			//-24-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(94);
			$s->setEnd(126);
			$s->setConfStart(94);
			$s->setConfEnd(124);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126");
			$s->setCannonicalConts(276);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(267));
			$manager->persist($s);
	
			//-25-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(16);
			$s->setEnd(39);
			$s->setConfStart(16);
			$s->setConfEnd(39);
			$s->setLength(24);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43");
			$s->setCannonicalConts(238);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(275));
			$manager->persist($s);
	
			//-26-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(40);
			$s->setEnd(72);
			$s->setConfStart(40);
			$s->setConfEnd(72);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72");
			$s->setCannonicalConts(278);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(275));
			$manager->persist($s);
	
			//-27-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(73);
			$s->setEnd(105);
			$s->setConfStart(73);
			$s->setConfEnd(105);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105");
			$s->setCannonicalConts(296);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(275));
			$manager->persist($s);
	
			//-28-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(106);
			$s->setEnd(138);
			$s->setConfStart(106);
			$s->setConfEnd(138);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138");
			$s->setCannonicalConts(300);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(275));
			$manager->persist($s);
	
			//-29-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(139);
			$s->setEnd(166);
			$s->setConfStart(139);
			$s->setConfEnd(166);
			$s->setLength(28);
			$s->setConfLength(28);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,D,D,D,D,D");
			$s->setCannonicalConts(212);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(275));
			$manager->persist($s);
	
			//-30-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(16);
			$s->setEnd(39);
			$s->setConfStart(16);
			$s->setConfEnd(39);
			$s->setLength(24);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46");
			$s->setCannonicalConts(238);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(289));
			$manager->persist($s);
	
			//-31-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(40);
			$s->setEnd(72);
			$s->setConfStart(40);
			$s->setConfEnd(72);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72");
			$s->setCannonicalConts(300);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(289));
			$manager->persist($s);
	
			//-32-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(73);
			$s->setEnd(105);
			$s->setConfStart(73);
			$s->setConfEnd(105);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105");
			$s->setCannonicalConts(308);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(289));
			$manager->persist($s);
	
			//-33-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(106);
			$s->setEnd(138);
			$s->setConfStart(106);
			$s->setConfEnd(138);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138");
			$s->setCannonicalConts(294);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(289));
			$manager->persist($s);
	
			//-34-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(139);
			$s->setEnd(165);
			$s->setConfStart(139);
			$s->setConfEnd(165);
			$s->setLength(27);
			$s->setConfLength(27);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,D,D,D,D,D");
			$s->setCannonicalConts(224);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(289));
			$manager->persist($s);
	
			//-35-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(16);
			$s->setEnd(39);
			$s->setConfStart(16);
			$s->setConfEnd(39);
			$s->setLength(24);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43");
			$s->setCannonicalConts(236);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(272));
			$manager->persist($s);
	
			//-36-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(40);
			$s->setEnd(72);
			$s->setConfStart(40);
			$s->setConfEnd(72);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72");
			$s->setCannonicalConts(304);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(272));
			$manager->persist($s);
	
			//-37-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(73);
			$s->setEnd(105);
			$s->setConfStart(73);
			$s->setConfEnd(105);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105");
			$s->setCannonicalConts(298);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(272));
			$manager->persist($s);
	
			//-38-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(106);
			$s->setEnd(138);
			$s->setConfStart(106);
			$s->setConfEnd(138);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138");
			$s->setCannonicalConts(300);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(272));
			$manager->persist($s);
	
			//-39-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(139);
			$s->setEnd(165);
			$s->setConfStart(139);
			$s->setConfEnd(165);
			$s->setLength(27);
			$s->setConfLength(27);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,D,D,D,D,D,D");
			$s->setCannonicalConts(228);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(272));
			$manager->persist($s);
	
			//-40-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(16);
			$s->setEnd(39);
			$s->setConfStart(16);
			$s->setConfEnd(39);
			$s->setLength(24);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44");
			$s->setCannonicalConts(248);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(268));
			$manager->persist($s);
	
			//-41-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(40);
			$s->setEnd(72);
			$s->setConfStart(40);
			$s->setConfEnd(72);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72");
			$s->setCannonicalConts(294);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(268));
			$manager->persist($s);
	
			//-42-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(73);
			$s->setEnd(105);
			$s->setConfStart(73);
			$s->setConfEnd(105);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105");
			$s->setCannonicalConts(300);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(268));
			$manager->persist($s);
	
			//-43-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(106);
			$s->setEnd(138);
			$s->setConfStart(106);
			$s->setConfEnd(138);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138");
			$s->setCannonicalConts(296);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(268));
			$manager->persist($s);
	
			//-44-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(139);
			$s->setEnd(166);
			$s->setConfStart(139);
			$s->setConfEnd(166);
			$s->setLength(28);
			$s->setConfLength(28);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,D,D,D,D,D");
			$s->setCannonicalConts(238);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(268));
			$manager->persist($s);
	
			//-45-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(16);
			$s->setEnd(39);
			$s->setConfStart(16);
			$s->setConfEnd(39);
			$s->setLength(24);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43");
			$s->setCannonicalConts(230);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(276));
			$manager->persist($s);
	
			//-46-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(40);
			$s->setEnd(72);
			$s->setConfStart(40);
			$s->setConfEnd(72);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72");
			$s->setCannonicalConts(292);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(276));
			$manager->persist($s);
	
			//-47-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(73);
			$s->setEnd(105);
			$s->setConfStart(73);
			$s->setConfEnd(105);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105");
			$s->setCannonicalConts(288);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(276));
			$manager->persist($s);
	
			//-48-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(106);
			$s->setEnd(135);
			$s->setConfStart(106);
			$s->setConfEnd(135);
			$s->setLength(30);
			$s->setConfLength(30);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,D,D,D");
			$s->setCannonicalConts(258);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(276));
			$manager->persist($s);
	
			//-49-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(16);
			$s->setEnd(39);
			$s->setConfStart(16);
			$s->setConfEnd(39);
			$s->setLength(24);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,D,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42");
			$s->setCannonicalConts(236);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(298));
			$manager->persist($s);
	
			//-50-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(40);
			$s->setEnd(72);
			$s->setConfStart(40);
			$s->setConfEnd(72);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72");
			$s->setCannonicalConts(312);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(298));
			$manager->persist($s);
	
			//-51-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(73);
			$s->setEnd(103);
			$s->setConfStart(73);
			$s->setConfEnd(103);
			$s->setLength(31);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,D,D");
			$s->setCannonicalConts(274);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(298));
			$manager->persist($s);
	
			//-52-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(16);
			$s->setEnd(39);
			$s->setConfStart(16);
			$s->setConfEnd(39);
			$s->setLength(24);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,D,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42");
			$s->setCannonicalConts(230);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(290));
			$manager->persist($s);
	
			//-53-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(40);
			$s->setEnd(72);
			$s->setConfStart(40);
			$s->setConfEnd(72);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72");
			$s->setCannonicalConts(306);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(290));
			$manager->persist($s);
	
			//-54-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(73);
			$s->setEnd(105);
			$s->setConfStart(73);
			$s->setConfEnd(105);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105");
			$s->setCannonicalConts(308);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(290));
			$manager->persist($s);
	
			//-55-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(106);
			$s->setEnd(138);
			$s->setConfStart(106);
			$s->setConfEnd(138);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138");
			$s->setCannonicalConts(308);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(290));
			$manager->persist($s);
	
			//-56-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(139);
			$s->setEnd(166);
			$s->setConfStart(139);
			$s->setConfEnd(166);
			$s->setLength(28);
			$s->setConfLength(28);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,D,D,D,D,D");
			$s->setCannonicalConts(234);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(290));
			$manager->persist($s);
	
			//-57-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(16);
			$s->setEnd(39);
			$s->setConfStart(16);
			$s->setConfEnd(39);
			$s->setLength(24);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,D,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42");
			$s->setCannonicalConts(234);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(296));
			$manager->persist($s);
	
			//-58-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(40);
			$s->setEnd(72);
			$s->setConfStart(40);
			$s->setConfEnd(72);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72");
			$s->setCannonicalConts(294);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(296));
			$manager->persist($s);
	
			//-59-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(73);
			$s->setEnd(105);
			$s->setConfStart(73);
			$s->setConfEnd(105);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105");
			$s->setCannonicalConts(296);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(296));
			$manager->persist($s);
	
			//-60-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(106);
			$s->setEnd(138);
			$s->setConfStart(106);
			$s->setConfEnd(138);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138");
			$s->setCannonicalConts(300);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(296));
			$manager->persist($s);
	
			//-61-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(139);
			$s->setEnd(169);
			$s->setConfStart(139);
			$s->setConfEnd(169);
			$s->setLength(31);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,D,D");
			$s->setCannonicalConts(286);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(296));
			$manager->persist($s);
	
			//-62-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(16);
			$s->setEnd(39);
			$s->setConfStart(16);
			$s->setConfEnd(39);
			$s->setLength(24);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43");
			$s->setCannonicalConts(203);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(271));
			$manager->persist($s);
	
			//-63-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(40);
			$s->setEnd(72);
			$s->setConfStart(40);
			$s->setConfEnd(72);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72");
			$s->setCannonicalConts(286);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(271));
			$manager->persist($s);
	
			//-64-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(73);
			$s->setEnd(105);
			$s->setConfStart(73);
			$s->setConfEnd(105);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105");
			$s->setCannonicalConts(276);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(271));
			$manager->persist($s);
	
			//-65-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(106);
			$s->setEnd(138);
			$s->setConfStart(106);
			$s->setConfEnd(138);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138");
			$s->setCannonicalConts(266);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(271));
			$manager->persist($s);
	
			//-66-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(139);
			$s->setEnd(167);
			$s->setConfStart(139);
			$s->setConfEnd(167);
			$s->setLength(29);
			$s->setConfLength(29);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,D,D,D");
			$s->setCannonicalConts(155);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(271));
			$manager->persist($s);
	
			//-67-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(115);
			$s->setEnd(138);
			$s->setConfStart(115);
			$s->setConfEnd(136);
			$s->setLength(24);
			$s->setConfLength(22);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143");
			$s->setCannonicalConts(188);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(128));
			$manager->persist($s);
	
			//-68-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(147);
			$s->setEnd(182);
			$s->setConfStart(152);
			$s->setConfEnd(180);
			$s->setLength(36);
			$s->setConfLength(29);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,169,170,171,172,173,174,175,176,177,178,179,180,181,182");
			$s->setCannonicalConts(212);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(128));
			$manager->persist($s);
	
			//-69-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(190);
			$s->setEnd(226);
			$s->setConfStart(190);
			$s->setConfEnd(226);
			$s->setLength(37);
			$s->setConfLength(37);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;190,191,192,193,194,195,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226");
			$s->setCannonicalConts(274);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(128));
			$manager->persist($s);
	
			//-70-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(227);
			$s->setEnd(273);
			$s->setConfStart(227);
			$s->setConfEnd(270);
			$s->setLength(47);
			$s->setConfLength(44);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;227,228,229,230,231,232,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,262,263,264,265,266,267");
			$s->setCannonicalConts(232);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(128));
			$manager->persist($s);
	
			//-71-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(277);
			$s->setEnd(318);
			$s->setConfStart(277);
			$s->setConfEnd(316);
			$s->setLength(42);
			$s->setConfLength(40);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293,294,295,305,306,307,308,309,310,311,312,313,314,315,316,317,318");
			$s->setCannonicalConts(224);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(128));
			$manager->persist($s);
	
			//-72-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(326);
			$s->setEnd(358);
			$s->setConfStart(326);
			$s->setConfEnd(356);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;326,327,328,329,330,331,332,333,334,335,336,337,338,339,340,341,342,343,344,345,346,347,348,349,350,351,352,353,354,355,356,357,358");
			$s->setCannonicalConts(282);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(128));
			$manager->persist($s);
	
			//-73-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(115);
			$s->setEnd(138);
			$s->setConfStart(115);
			$s->setConfEnd(131);
			$s->setLength(24);
			$s->setConfLength(17);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142");
			$s->setCannonicalConts(176);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(69));
			$manager->persist($s);
	
			//-74-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(147);
			$s->setEnd(182);
			$s->setConfStart(152);
			$s->setConfEnd(180);
			$s->setLength(36);
			$s->setConfLength(29);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,169,170,171,172,173,174,175,176,177,178,179,180,181,182");
			$s->setCannonicalConts(214);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(69));
			$manager->persist($s);
	
			//-75-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(190);
			$s->setEnd(226);
			$s->setConfStart(190);
			$s->setConfEnd(226);
			$s->setLength(37);
			$s->setConfLength(37);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;190,191,192,193,194,195,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226");
			$s->setCannonicalConts(276);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(69));
			$manager->persist($s);
	
			//-76-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(227);
			$s->setEnd(273);
			$s->setConfStart(227);
			$s->setConfEnd(270);
			$s->setLength(47);
			$s->setConfLength(44);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;227,228,229,230,231,232,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,262,263,264,265,266,267,268,269,270,271,272,273");
			$s->setCannonicalConts(268);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(69));
			$manager->persist($s);
	
			//-77-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(277);
			$s->setEnd(318);
			$s->setConfStart(277);
			$s->setConfEnd(316);
			$s->setLength(42);
			$s->setConfLength(40);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293,294,295,305,306,307,308,309,310,311,312,313,314,315,316,317,318");
			$s->setCannonicalConts(218);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(69));
			$manager->persist($s);
	
			//-78-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(326);
			$s->setEnd(358);
			$s->setConfStart(326);
			$s->setConfEnd(356);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;326,327,328,329,330,331,332,333,334,335,336,337,338,339,340,341,342,343,344,345,346,347,348,349,350,351,352,353,354,355,356,357,358");
			$s->setCannonicalConts(274);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(69));
			$manager->persist($s);
	
			//-79-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(7);
			$s->setEnd(31);
			$s->setConfStart(7);
			$s->setConfEnd(29);
			$s->setLength(25);
			$s->setConfLength(23);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37");
			$s->setCannonicalConts(276);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(49));
			$manager->persist($s);
	
			//-80-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(33);
			$s->setEnd(65);
			$s->setConfStart(33);
			$s->setConfEnd(65);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65");
			$s->setCannonicalConts(278);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(49));
			$manager->persist($s);
	
			//-81-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(66);
			$s->setEnd(98);
			$s->setConfStart(66);
			$s->setConfEnd(98);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98");
			$s->setCannonicalConts(328);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(49));
			$manager->persist($s);
	
			//-82-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(99);
			$s->setEnd(131);
			$s->setConfStart(99);
			$s->setConfEnd(131);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131");
			$s->setCannonicalConts(284);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(49));
			$manager->persist($s);
	
			//-83-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(132);
			$s->setEnd(164);
			$s->setConfStart(132);
			$s->setConfEnd(164);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164");
			$s->setCannonicalConts(270);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(49));
			$manager->persist($s);
	
			//-84-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(165);
			$s->setEnd(197);
			$s->setConfStart(165);
			$s->setConfEnd(197);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197");
			$s->setCannonicalConts(282);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(49));
			$manager->persist($s);
	
			//-85-
			$s = new StructuralRepeat();
			$s->setRepNum(7);
			$s->setStart(198);
			$s->setEnd(225);
			$s->setConfStart(198);
			$s->setConfEnd(225);
			$s->setLength(28);
			$s->setConfLength(28);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,D,D,D,213,214,215,216,217,218,219,220,221,222,223,224,225,226,D");
			$s->setCannonicalConts(260);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(49));
			$manager->persist($s);
	
			//-86-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(44);
			$s->setEnd(76);
			$s->setConfStart(48);
			$s->setConfEnd(76);
			$s->setLength(33);
			$s->setConfLength(29);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76");
			$s->setCannonicalConts(270);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(40));
			$manager->persist($s);
	
			//-87-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(77);
			$s->setEnd(109);
			$s->setConfStart(77);
			$s->setConfEnd(107);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109");
			$s->setCannonicalConts(274);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(40));
			$manager->persist($s);
	
			//-88-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(111);
			$s->setEnd(143);
			$s->setConfStart(111);
			$s->setConfEnd(143);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143");
			$s->setCannonicalConts(280);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(40));
			$manager->persist($s);
	
			//-89-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(144);
			$s->setEnd(176);
			$s->setConfStart(144);
			$s->setConfEnd(176);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176");
			$s->setCannonicalConts(284);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(40));
			$manager->persist($s);
	
			//-90-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(177);
			$s->setEnd(209);
			$s->setConfStart(177);
			$s->setConfEnd(209);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209");
			$s->setCannonicalConts(292);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(40));
			$manager->persist($s);
	
			//-91-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(210);
			$s->setEnd(237);
			$s->setConfStart(210);
			$s->setConfEnd(237);
			$s->setLength(28);
			$s->setConfLength(28);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;210,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,D,D,D,D,D");
			$s->setCannonicalConts(228);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(40));
			$manager->persist($s);
	
			//-92-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(235);
			$s->setEnd(312);
			$s->setConfStart(244);
			$s->setConfEnd(307);
			$s->setLength(78);
			$s->setConfLength(64);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;235,236,237,238,239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,268,269,270,271,272,273,274,275,276,277,278,279,280,281");
			$s->setCannonicalConts(90);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(47));
			$manager->persist($s);
	
			//-93-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(311);
			$s->setEnd(343);
			$s->setConfStart(314);
			$s->setConfEnd(343);
			$s->setLength(33);
			$s->setConfLength(30);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,332,333,334,335,336,337,338,339,340,341,342,343");
			$s->setCannonicalConts(274);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(47));
			$manager->persist($s);
	
			//-94-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(344);
			$s->setEnd(383);
			$s->setConfStart(344);
			$s->setConfEnd(378);
			$s->setLength(40);
			$s->setConfLength(35);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;344,345,346,347,348,349,350,351,352,353,354,355,356,357,358,359,360,361,369,370,371,372,373,374,375,376,377,378,379,380,381,382,383");
			$s->setCannonicalConts(262);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(47));
			$manager->persist($s);
	
			//-95-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(381);
			$s->setEnd(421);
			$s->setConfStart(381);
			$s->setConfEnd(417);
			$s->setLength(41);
			$s->setConfLength(37);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;381,382,383,384,385,386,387,388,389,390,391,392,393,394,395,396,397,398,399,408,409,410,411,412,413,414,415,416,417,418,419,420,421");
			$s->setCannonicalConts(232);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(47));
			$manager->persist($s);
	
			//-96-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(463);
			$s->setEnd(495);
			$s->setConfStart(463);
			$s->setConfEnd(495);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;463,464,465,466,467,468,469,470,471,472,473,474,475,476,477,478,479,480,481,482,483,484,485,486,487,488,489,490,491,492,493,494,495");
			$s->setCannonicalConts(280);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(47));
			$manager->persist($s);
	
			//-97-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(405);
			$s->setEnd(429);
			$s->setConfStart(405);
			$s->setConfEnd(429);
			$s->setLength(25);
			$s->setConfLength(25);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,D,D,D,405,406,407,408,409,410,411,412,413,414,415,416,417,418,419,420,421,422,423,424,425,426,427,428,429");
			$s->setCannonicalConts(206);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(39));
			$manager->persist($s);
	
			//-98-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(430);
			$s->setEnd(462);
			$s->setConfStart(437);
			$s->setConfEnd(462);
			$s->setLength(33);
			$s->setConfLength(26);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;430,431,432,433,434,435,436,437,438,439,440,441,442,443,444,445,446,447,448,449,450,451,452,453,454,455,456,457,458,459,460,461,462");
			$s->setCannonicalConts(286);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(39));
			$manager->persist($s);
	
			//-99-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(463);
			$s->setEnd(495);
			$s->setConfStart(463);
			$s->setConfEnd(495);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;463,464,465,466,467,468,469,470,471,472,473,474,475,476,477,478,479,480,481,482,483,484,485,486,487,488,489,490,491,492,493,494,495");
			$s->setCannonicalConts(296);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(39));
			$manager->persist($s);
	
			//-100-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(496);
			$s->setEnd(528);
			$s->setConfStart(496);
			$s->setConfEnd(528);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;496,497,498,499,500,501,502,503,504,505,506,507,508,509,510,511,512,513,514,515,516,517,518,519,520,521,522,523,524,525,526,527,528");
			$s->setCannonicalConts(284);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(39));
			$manager->persist($s);
	
			//-101-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(529);
			$s->setEnd(561);
			$s->setConfStart(529);
			$s->setConfEnd(561);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;529,530,531,532,533,534,535,536,537,538,539,540,541,542,543,544,545,546,547,548,549,550,551,552,553,554,555,556,557,558,559,560,561");
			$s->setCannonicalConts(282);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(39));
			$manager->persist($s);
	
			//-102-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(562);
			$s->setEnd(594);
			$s->setConfStart(562);
			$s->setConfEnd(594);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;562,563,564,565,566,567,568,569,570,571,572,573,574,575,576,577,578,579,580,581,582,583,584,585,586,587,588,589,590,591,592,593,594");
			$s->setCannonicalConts(282);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(39));
			$manager->persist($s);
	
			//-103-
			$s = new StructuralRepeat();
			$s->setRepNum(7);
			$s->setStart(595);
			$s->setEnd(627);
			$s->setConfStart(595);
			$s->setConfEnd(627);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;595,596,597,598,599,600,601,602,603,604,605,606,607,608,609,610,611,612,613,614,615,616,617,618,619,620,621,622,623,624,625,626,627");
			$s->setCannonicalConts(284);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(39));
			$manager->persist($s);
	
			//-104-
			$s = new StructuralRepeat();
			$s->setRepNum(8);
			$s->setStart(628);
			$s->setEnd(660);
			$s->setConfStart(628);
			$s->setConfEnd(660);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;628,629,630,631,632,633,634,635,636,637,638,639,640,641,642,643,644,645,646,647,648,649,650,651,652,653,654,655,656,657,658,659,660");
			$s->setCannonicalConts(296);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(39));
			$manager->persist($s);
	
			//-105-
			$s = new StructuralRepeat();
			$s->setRepNum(9);
			$s->setStart(661);
			$s->setEnd(693);
			$s->setConfStart(661);
			$s->setConfEnd(693);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;661,662,663,664,665,666,667,668,669,670,671,672,673,674,675,676,677,678,679,680,681,682,683,684,685,686,687,688,689,690,691,692,693");
			$s->setCannonicalConts(276);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(39));
			$manager->persist($s);
	
			//-106-
			$s = new StructuralRepeat();
			$s->setRepNum(10);
			$s->setStart(694);
			$s->setEnd(726);
			$s->setConfStart(694);
			$s->setConfEnd(726);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;694,695,696,697,698,699,700,701,702,703,704,705,706,707,708,709,710,711,712,713,714,715,716,717,718,719,720,721,722,723,724,725,726");
			$s->setCannonicalConts(284);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(39));
			$manager->persist($s);
	
			//-107-
			$s = new StructuralRepeat();
			$s->setRepNum(11);
			$s->setStart(727);
			$s->setEnd(759);
			$s->setConfStart(727);
			$s->setConfEnd(759);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;727,728,729,730,731,732,733,734,735,736,737,738,739,740,741,742,743,744,745,746,747,748,749,750,751,752,753,754,755,756,757,758,759");
			$s->setCannonicalConts(300);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(39));
			$manager->persist($s);
	
			//-108-
			$s = new StructuralRepeat();
			$s->setRepNum(12);
			$s->setStart(760);
			$s->setEnd(792);
			$s->setConfStart(760);
			$s->setConfEnd(792);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;760,761,762,763,764,765,766,767,768,769,770,771,772,773,774,775,776,777,778,779,780,781,782,783,784,785,786,787,788,789,790,791,792");
			$s->setCannonicalConts(292);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(39));
			$manager->persist($s);
	
			//-109-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(129);
			$s->setEnd(152);
			$s->setConfStart(129);
			$s->setConfEnd(150);
			$s->setLength(24);
			$s->setConfLength(22);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156");
			$s->setCannonicalConts(216);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(28));
			$manager->persist($s);
	
			//-110-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(157);
			$s->setEnd(189);
			$s->setConfStart(157);
			$s->setConfEnd(189);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189");
			$s->setCannonicalConts(288);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(28));
			$manager->persist($s);
	
			//-111-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(190);
			$s->setEnd(222);
			$s->setConfStart(190);
			$s->setConfEnd(220);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222");
			$s->setCannonicalConts(264);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(28));
			$manager->persist($s);
	
			//-112-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(227);
			$s->setEnd(259);
			$s->setConfStart(227);
			$s->setConfEnd(259);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;227,228,229,230,231,232,233,234,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259");
			$s->setCannonicalConts(280);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(28));
			$manager->persist($s);
	
			//-113-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(260);
			$s->setEnd(293);
			$s->setConfStart(260);
			$s->setConfEnd(293);
			$s->setLength(34);
			$s->setConfLength(34);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;260,261,262,263,264,266,267,268,269,270,271,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293");
			$s->setCannonicalConts(284);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(28));
			$manager->persist($s);
	
			//-114-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(294);
			$s->setEnd(326);
			$s->setConfStart(294);
			$s->setConfEnd(326);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326");
			$s->setCannonicalConts(300);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(28));
			$manager->persist($s);
	
			//-115-
			$s = new StructuralRepeat();
			$s->setRepNum(7);
			$s->setStart(327);
			$s->setEnd(352);
			$s->setConfStart(327);
			$s->setConfEnd(352);
			$s->setLength(26);
			$s->setConfLength(26);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;327,328,329,330,331,332,333,334,335,336,337,338,339,340,341,D,D,D,342,343,344,345,346,347,348,349,350,351,352,D,D,D,D");
			$s->setCannonicalConts(188);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(28));
			$manager->persist($s);
	
			//-116-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(73);
			$s->setEnd(99);
			$s->setConfStart(73);
			$s->setConfEnd(92);
			$s->setLength(27);
			$s->setConfLength(20);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,D,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99");
			$s->setCannonicalConts(154);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(9));
			$manager->persist($s);
	
			//-117-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(104);
			$s->setEnd(135);
			$s->setConfStart(104);
			$s->setConfEnd(135);
			$s->setLength(32);
			$s->setConfLength(32);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,D,131,132,133,134,135");
			$s->setCannonicalConts(244);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(9));
			$manager->persist($s);
	
			//-118-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(137);
			$s->setEnd(169);
			$s->setConfStart(139);
			$s->setConfEnd(167);
			$s->setLength(33);
			$s->setConfLength(29);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169");
			$s->setCannonicalConts(266);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(9));
			$manager->persist($s);
	
			//-119-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(176);
			$s->setEnd(208);
			$s->setConfStart(176);
			$s->setConfEnd(208);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208");
			$s->setCannonicalConts(296);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(9));
			$manager->persist($s);
	
			//-120-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(209);
			$s->setEnd(242);
			$s->setConfStart(209);
			$s->setConfEnd(242);
			$s->setLength(34);
			$s->setConfLength(34);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;209,210,211,212,213,214,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,241,242");
			$s->setCannonicalConts(300);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(9));
			$manager->persist($s);
	
			//-121-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(243);
			$s->setEnd(275);
			$s->setConfStart(243);
			$s->setConfEnd(273);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,262,263,264,265,266,267,268,269,270,271,272,273,274,275");
			$s->setCannonicalConts(268);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(9));
			$manager->persist($s);
	
			//-122-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(5);
			$s->setEnd(37);
			$s->setConfStart(14);
			$s->setConfEnd(37);
			$s->setLength(33);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37");
			$s->setCannonicalConts(256);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(123));
			$manager->persist($s);
	
			//-123-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(38);
			$s->setEnd(69);
			$s->setConfStart(38);
			$s->setConfEnd(69);
			$s->setLength(32);
			$s->setConfLength(32);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,D,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69");
			$s->setCannonicalConts(298);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(123));
			$manager->persist($s);
	
			//-124-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(70);
			$s->setEnd(103);
			$s->setConfStart(70);
			$s->setConfEnd(103);
			$s->setLength(34);
			$s->setConfLength(34);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;70,71,72,73,74,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103");
			$s->setCannonicalConts(304);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(123));
			$manager->persist($s);
	
			//-125-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(104);
			$s->setEnd(136);
			$s->setConfStart(104);
			$s->setConfEnd(136);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136");
			$s->setCannonicalConts(330);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(123));
			$manager->persist($s);
	
			//-126-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(6);
			$s->setEnd(30);
			$s->setConfStart(6);
			$s->setConfEnd(30);
			$s->setLength(25);
			$s->setConfLength(25);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35");
			$s->setCannonicalConts(246);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(305));
			$manager->persist($s);
	
			//-127-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(31);
			$s->setEnd(62);
			$s->setConfStart(31);
			$s->setConfEnd(62);
			$s->setLength(32);
			$s->setConfLength(32);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,D,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62");
			$s->setCannonicalConts(298);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(305));
			$manager->persist($s);
	
			//-128-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(63);
			$s->setEnd(95);
			$s->setConfStart(63);
			$s->setConfEnd(95);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95");
			$s->setCannonicalConts(330);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(305));
			$manager->persist($s);
	
			//-129-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(96);
			$s->setEnd(128);
			$s->setConfStart(96);
			$s->setConfEnd(126);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128");
			$s->setCannonicalConts(302);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(305));
			$manager->persist($s);
	
			//-130-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(130);
			$s->setEnd(162);
			$s->setConfStart(130);
			$s->setConfEnd(162);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162");
			$s->setCannonicalConts(366);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(305));
			$manager->persist($s);
	
			//-131-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(50);
			$s->setEnd(82);
			$s->setConfStart(50);
			$s->setConfEnd(82);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82");
			$s->setCannonicalConts(278);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(257));
			$manager->persist($s);
	
			//-132-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(83);
			$s->setEnd(115);
			$s->setConfStart(83);
			$s->setConfEnd(113);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115");
			$s->setCannonicalConts(266);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(257));
			$manager->persist($s);
	
			//-133-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(117);
			$s->setEnd(149);
			$s->setConfStart(117);
			$s->setConfEnd(149);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149");
			$s->setCannonicalConts(280);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(257));
			$manager->persist($s);
	
			//-134-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(150);
			$s->setEnd(182);
			$s->setConfStart(150);
			$s->setConfEnd(182);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182");
			$s->setCannonicalConts(296);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(257));
			$manager->persist($s);
	
			//-135-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(183);
			$s->setEnd(215);
			$s->setConfStart(183);
			$s->setConfEnd(215);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;183,184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215");
			$s->setCannonicalConts(288);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(257));
			$manager->persist($s);
	
			//-136-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(216);
			$s->setEnd(244);
			$s->setConfStart(216);
			$s->setConfEnd(244);
			$s->setLength(29);
			$s->setConfLength(29);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,241,242,243,244,D,D,D,D");
			$s->setCannonicalConts(232);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(257));
			$manager->persist($s);
	
			//-137-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(4);
			$s->setEnd(27);
			$s->setConfStart(4);
			$s->setConfEnd(25);
			$s->setLength(24);
			$s->setConfLength(22);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,D,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30");
			$s->setCannonicalConts(212);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(307));
			$manager->persist($s);
	
			//-138-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(29);
			$s->setEnd(61);
			$s->setConfStart(29);
			$s->setConfEnd(59);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61");
			$s->setCannonicalConts(260);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(307));
			$manager->persist($s);
	
			//-139-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(65);
			$s->setEnd(97);
			$s->setConfStart(66);
			$s->setConfEnd(94);
			$s->setLength(33);
			$s->setConfLength(29);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97");
			$s->setCannonicalConts(250);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(307));
			$manager->persist($s);
	
			//-140-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(100);
			$s->setEnd(132);
			$s->setConfStart(100);
			$s->setConfEnd(132);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132");
			$s->setCannonicalConts(294);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(307));
			$manager->persist($s);
	
			//-141-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(133);
			$s->setEnd(165);
			$s->setConfStart(133);
			$s->setConfEnd(162);
			$s->setLength(33);
			$s->setConfLength(30);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165");
			$s->setCannonicalConts(308);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(307));
			$manager->persist($s);
	
			//-142-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(167);
			$s->setEnd(199);
			$s->setConfStart(167);
			$s->setConfEnd(196);
			$s->setLength(33);
			$s->setConfLength(30);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199");
			$s->setCannonicalConts(302);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(307));
			$manager->persist($s);
	
			//-143-
			$s = new StructuralRepeat();
			$s->setRepNum(7);
			$s->setStart(201);
			$s->setEnd(230);
			$s->setConfStart(201);
			$s->setConfEnd(226);
			$s->setLength(30);
			$s->setConfLength(26);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,D,D,D,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230");
			$s->setCannonicalConts(206);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(307));
			$manager->persist($s);
	
			//-144-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(-1);
			$s->setEnd(31);
			$s->setConfStart(8);
			$s->setConfEnd(31);
			$s->setLength(33);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;-1,0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31");
			$s->setCannonicalConts(266);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(18));
			$manager->persist($s);
	
			//-145-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(32);
			$s->setEnd(63);
			$s->setConfStart(32);
			$s->setConfEnd(63);
			$s->setLength(32);
			$s->setConfLength(32);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,D,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63");
			$s->setCannonicalConts(276);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(18));
			$manager->persist($s);
	
			//-146-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(64);
			$s->setEnd(97);
			$s->setConfStart(64);
			$s->setConfEnd(97);
			$s->setLength(34);
			$s->setConfLength(34);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;64,65,66,67,68,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97");
			$s->setCannonicalConts(290);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(18));
			$manager->persist($s);
	
			//-147-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(98);
			$s->setEnd(130);
			$s->setConfStart(107);
			$s->setConfEnd(128);
			$s->setLength(33);
			$s->setConfLength(22);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130");
			$s->setCannonicalConts(310);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(18));
			$manager->persist($s);
	
			//-148-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(35);
			$s->setEnd(66);
			$s->setConfStart(35);
			$s->setConfEnd(66);
			$s->setLength(32);
			$s->setConfLength(32);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,D,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66");
			$s->setCannonicalConts(254);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(11));
			$manager->persist($s);
	
			//-149-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(67);
			$s->setEnd(99);
			$s->setConfStart(67);
			$s->setConfEnd(99);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99");
			$s->setCannonicalConts(286);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(11));
			$manager->persist($s);
	
			//-150-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(100);
			$s->setEnd(132);
			$s->setConfStart(100);
			$s->setConfEnd(130);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132");
			$s->setCannonicalConts(288);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(11));
			$manager->persist($s);
	
			//-151-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(132);
			$s->setEnd(162);
			$s->setConfStart(132);
			$s->setConfEnd(162);
			$s->setLength(31);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,D,D");
			$s->setCannonicalConts(270);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(11));
			$manager->persist($s);
	
			//-152-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(6);
			$s->setEnd(27);
			$s->setConfStart(6);
			$s->setConfEnd(27);
			$s->setLength(22);
			$s->setConfLength(22);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,D,D,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31");
			$s->setCannonicalConts(176);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(139));
			$manager->persist($s);
	
			//-153-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(28);
			$s->setEnd(60);
			$s->setConfStart(28);
			$s->setConfEnd(60);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60");
			$s->setCannonicalConts(298);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(139));
			$manager->persist($s);
	
			//-154-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(61);
			$s->setEnd(93);
			$s->setConfStart(61);
			$s->setConfEnd(93);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93");
			$s->setCannonicalConts(294);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(139));
			$manager->persist($s);
	
			//-155-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(94);
			$s->setEnd(118);
			$s->setConfStart(94);
			$s->setConfEnd(118);
			$s->setLength(25);
			$s->setConfLength(25);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,D,D,D,109,110,111,112,113,114,115,116,117,118,D,D,D,D,D");
			$s->setCannonicalConts(188);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(139));
			$manager->persist($s);
	
			//-156-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(4);
			$s->setEnd(27);
			$s->setConfStart(4);
			$s->setConfEnd(23);
			$s->setLength(24);
			$s->setConfLength(20);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,D,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30");
			$s->setCannonicalConts(206);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(90));
			$manager->persist($s);
	
			//-157-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(28);
			$s->setEnd(60);
			$s->setConfStart(28);
			$s->setConfEnd(60);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60");
			$s->setCannonicalConts(304);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(90));
			$manager->persist($s);
	
			//-158-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(61);
			$s->setEnd(93);
			$s->setConfStart(66);
			$s->setConfEnd(93);
			$s->setLength(33);
			$s->setConfLength(28);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93");
			$s->setCannonicalConts(262);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(90));
			$manager->persist($s);
	
			//-159-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(8);
			$s->setEnd(31);
			$s->setConfStart(8);
			$s->setConfEnd(31);
			$s->setLength(24);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,D,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34");
			$s->setCannonicalConts(238);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(88));
			$manager->persist($s);
	
			//-160-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(31);
			$s->setEnd(63);
			$s->setConfStart(32);
			$s->setConfEnd(63);
			$s->setLength(33);
			$s->setConfLength(32);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63");
			$s->setCannonicalConts(284);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(88));
			$manager->persist($s);
	
			//-161-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(64);
			$s->setEnd(96);
			$s->setConfStart(64);
			$s->setConfEnd(96);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96");
			$s->setCannonicalConts(288);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(88));
			$manager->persist($s);
	
			//-162-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(97);
			$s->setEnd(129);
			$s->setConfStart(97);
			$s->setConfEnd(129);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129");
			$s->setCannonicalConts(290);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(88));
			$manager->persist($s);
	
			//-163-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(130);
			$s->setEnd(157);
			$s->setConfStart(130);
			$s->setConfEnd(157);
			$s->setLength(28);
			$s->setConfLength(28);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,D,D,D,D,D");
			$s->setCannonicalConts(250);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(88));
			$manager->persist($s);
	
			//-164-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(111);
			$s->setEnd(143);
			$s->setConfStart(111);
			$s->setConfEnd(143);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143");
			$s->setCannonicalConts(284);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(94));
			$manager->persist($s);
	
			//-165-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(144);
			$s->setEnd(176);
			$s->setConfStart(144);
			$s->setConfEnd(176);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176");
			$s->setCannonicalConts(312);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(94));
			$manager->persist($s);
	
			//-166-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(177);
			$s->setEnd(209);
			$s->setConfStart(177);
			$s->setConfEnd(209);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209");
			$s->setCannonicalConts(300);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(94));
			$manager->persist($s);
	
			//-167-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(210);
			$s->setEnd(237);
			$s->setConfStart(210);
			$s->setConfEnd(237);
			$s->setLength(28);
			$s->setConfLength(28);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;210,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,D,D,D,D,D");
			$s->setCannonicalConts(234);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(94));
			$manager->persist($s);
	
			//-168-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(27);
			$s->setEnd(50);
			$s->setConfStart(27);
			$s->setConfEnd(50);
			$s->setLength(24);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56");
			$s->setCannonicalConts(228);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(248));
			$manager->persist($s);
	
			//-169-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(51);
			$s->setEnd(84);
			$s->setConfStart(51);
			$s->setConfEnd(84);
			$s->setLength(34);
			$s->setConfLength(34);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;51,52,53,54,55,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84");
			$s->setCannonicalConts(296);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(248));
			$manager->persist($s);
	
			//-170-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(85);
			$s->setEnd(117);
			$s->setConfStart(85);
			$s->setConfEnd(117);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117");
			$s->setCannonicalConts(298);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(248));
			$manager->persist($s);
	
			//-171-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(118);
			$s->setEnd(150);
			$s->setConfStart(118);
			$s->setConfEnd(150);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150");
			$s->setCannonicalConts(290);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(248));
			$manager->persist($s);
	
			//-172-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(151);
			$s->setEnd(193);
			$s->setConfStart(151);
			$s->setConfEnd(190);
			$s->setLength(43);
			$s->setConfLength(40);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;151,152,153,154,155,156,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193");
			$s->setCannonicalConts(288);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(248));
			$manager->persist($s);
	
			//-173-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(195);
			$s->setEnd(231);
			$s->setConfStart(195);
			$s->setConfEnd(231);
			$s->setLength(37);
			$s->setConfLength(37);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231");
			$s->setCannonicalConts(274);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(248));
			$manager->persist($s);
	
			//-174-
			$s = new StructuralRepeat();
			$s->setRepNum(7);
			$s->setStart(232);
			$s->setEnd(264);
			$s->setConfStart(232);
			$s->setConfEnd(262);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;232,233,234,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,262,263,264");
			$s->setCannonicalConts(262);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(248));
			$manager->persist($s);
	
			//-175-
			$s = new StructuralRepeat();
			$s->setRepNum(8);
			$s->setStart(266);
			$s->setEnd(298);
			$s->setConfStart(266);
			$s->setConfEnd(296);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;266,267,268,269,270,271,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298");
			$s->setCannonicalConts(288);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(248));
			$manager->persist($s);
	
			//-176-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(1);
			$s->setEnd(28);
			$s->setConfStart(1);
			$s->setConfEnd(20);
			$s->setLength(28);
			$s->setConfLength(20);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,D,D,D,1,2,3,4,5,6,7,8,9,10,11,15,16,17,18,19,20,21,22,23,24,25,26,27,28");
			$s->setCannonicalConts(168);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(259));
			$manager->persist($s);
	
			//-177-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(27);
			$s->setEnd(59);
			$s->setConfStart(29);
			$s->setConfEnd(59);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59");
			$s->setCannonicalConts(250);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(259));
			$manager->persist($s);
	
			//-178-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(60);
			$s->setEnd(92);
			$s->setConfStart(60);
			$s->setConfEnd(92);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92");
			$s->setCannonicalConts(268);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(259));
			$manager->persist($s);
	
			//-179-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(93);
			$s->setEnd(125);
			$s->setConfStart(93);
			$s->setConfEnd(125);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125");
			$s->setCannonicalConts(266);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(259));
			$manager->persist($s);
	
			//-180-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(126);
			$s->setEnd(158);
			$s->setConfStart(126);
			$s->setConfEnd(157);
			$s->setLength(33);
			$s->setConfLength(32);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158");
			$s->setCannonicalConts(274);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(259));
			$manager->persist($s);
	
			//-181-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(329);
			$s->setEnd(352);
			$s->setConfStart(329);
			$s->setConfEnd(350);
			$s->setLength(24);
			$s->setConfLength(22);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,D,D,329,330,331,332,333,334,335,336,337,338,339,340,341,342,343,344,345,346,347,348,349,350,351,352,353,354");
			$s->setCannonicalConts(210);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(52));
			$manager->persist($s);
	
			//-182-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(353);
			$s->setEnd(385);
			$s->setConfStart(353);
			$s->setConfEnd(385);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;353,354,355,356,357,358,359,360,361,362,363,364,365,366,367,368,369,370,371,372,373,374,375,376,377,378,379,380,381,382,383,384,385");
			$s->setCannonicalConts(310);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(52));
			$manager->persist($s);
	
			//-183-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(386);
			$s->setEnd(418);
			$s->setConfStart(386);
			$s->setConfEnd(418);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;386,387,388,389,390,391,392,393,394,395,396,397,398,399,400,401,402,403,404,405,406,407,408,409,410,411,412,413,414,415,416,417,418");
			$s->setCannonicalConts(292);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(52));
			$manager->persist($s);
	
			//-184-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(419);
			$s->setEnd(454);
			$s->setConfStart(419);
			$s->setConfEnd(452);
			$s->setLength(36);
			$s->setConfLength(34);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;419,420,421,422,423,424,426,427,428,429,430,431,432,433,434,437,438,439,440,441,442,443,444,445,446,447,448,449,450,451,452,453,454");
			$s->setCannonicalConts(248);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(52));
			$manager->persist($s);
	
			//-185-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(437);
			$s->setEnd(479);
			$s->setConfStart(437);
			$s->setConfEnd(477);
			$s->setLength(43);
			$s->setConfLength(41);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;437,438,439,440,441,452,453,454,455,456,457,458,459,460,461,462,463,464,465,466,467,468,469,470,471,472,473,474,475,476,477,478,479");
			$s->setCannonicalConts(162);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(144));
			$manager->persist($s);
	
			//-186-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(564);
			$s->setEnd(597);
			$s->setConfStart(573);
			$s->setConfEnd(597);
			$s->setLength(34);
			$s->setConfLength(25);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;564,565,566,567,568,569,570,571,572,573,574,575,576,577,578,579,580,582,583,584,585,586,587,588,589,590,591,592,593,594,595,596,597");
			$s->setCannonicalConts(276);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(144));
			$manager->persist($s);
	
			//-187-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(598);
			$s->setEnd(632);
			$s->setConfStart(598);
			$s->setConfEnd(632);
			$s->setLength(35);
			$s->setConfLength(35);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;598,599,600,601,602,605,606,607,608,609,610,611,612,613,614,615,616,617,618,619,620,621,622,623,624,625,626,627,628,629,630,631,632");
			$s->setCannonicalConts(292);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(144));
			$manager->persist($s);
	
			//-188-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(633);
			$s->setEnd(665);
			$s->setConfStart(633);
			$s->setConfEnd(665);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;633,634,635,636,637,638,639,640,641,642,643,644,645,646,647,648,649,650,651,652,653,654,655,656,657,658,659,660,661,662,663,664,665");
			$s->setCannonicalConts(318);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(144));
			$manager->persist($s);
	
			//-189-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(666);
			$s->setEnd(698);
			$s->setConfStart(666);
			$s->setConfEnd(696);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;666,667,668,669,670,671,672,673,674,675,676,677,678,679,680,681,682,683,684,685,686,687,688,689,690,691,692,693,694,695,696,697,698");
			$s->setCannonicalConts(272);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(144));
			$manager->persist($s);
	
			//-190-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(26);
			$s->setEnd(62);
			$s->setConfStart(33);
			$s->setConfEnd(54);
			$s->setLength(37);
			$s->setConfLength(22);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62");
			$s->setCannonicalConts(172);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(246));
			$manager->persist($s);
	
			//-191-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(85);
			$s->setEnd(117);
			$s->setConfStart(94);
			$s->setConfEnd(114);
			$s->setLength(33);
			$s->setConfLength(21);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117");
			$s->setCannonicalConts(252);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(246));
			$manager->persist($s);
	
			//-192-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(121);
			$s->setEnd(153);
			$s->setConfStart(130);
			$s->setConfEnd(151);
			$s->setLength(33);
			$s->setConfLength(22);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153");
			$s->setCannonicalConts(236);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(246));
			$manager->persist($s);
	
			//-193-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(156);
			$s->setEnd(188);
			$s->setConfStart(165);
			$s->setConfEnd(186);
			$s->setLength(33);
			$s->setConfLength(22);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188");
			$s->setCannonicalConts(228);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(246));
			$manager->persist($s);
	
			//-194-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(191);
			$s->setEnd(224);
			$s->setConfStart(200);
			$s->setConfEnd(222);
			$s->setLength(34);
			$s->setConfLength(23);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,209,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224");
			$s->setCannonicalConts(242);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(246));
			$manager->persist($s);
	
			//-195-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(271);
			$s->setEnd(306);
			$s->setConfStart(280);
			$s->setConfEnd(304);
			$s->setLength(36);
			$s->setConfLength(25);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;271,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,293,294,295,296,297,298,299,300,301,302,303,304,305,306");
			$s->setCannonicalConts(230);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(246));
			$manager->persist($s);
	
			//-196-
			$s = new StructuralRepeat();
			$s->setRepNum(7);
			$s->setStart(310);
			$s->setEnd(344);
			$s->setConfStart(310);
			$s->setConfEnd(342);
			$s->setLength(35);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;310,311,312,313,314,315,318,319,320,321,322,323,324,325,326,327,328,329,330,331,332,333,334,335,336,337,338,339,340,341,342,343,344");
			$s->setCannonicalConts(290);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(246));
			$manager->persist($s);
	
			//-197-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(3);
			$s->setEnd(35);
			$s->setConfStart(11);
			$s->setConfEnd(32);
			$s->setLength(33);
			$s->setConfLength(22);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35");
			$s->setCannonicalConts(270);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(10));
			$manager->persist($s);
	
			//-198-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(37);
			$s->setEnd(68);
			$s->setConfStart(37);
			$s->setConfEnd(68);
			$s->setLength(32);
			$s->setConfLength(32);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,D,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68");
			$s->setCannonicalConts(266);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(10));
			$manager->persist($s);
	
			//-199-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(69);
			$s->setEnd(101);
			$s->setConfStart(69);
			$s->setConfEnd(101);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101");
			$s->setCannonicalConts(296);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(10));
			$manager->persist($s);
	
			//-200-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(102);
			$s->setEnd(134);
			$s->setConfStart(102);
			$s->setConfEnd(131);
			$s->setLength(33);
			$s->setConfLength(30);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134");
			$s->setCannonicalConts(320);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(10));
			$manager->persist($s);
	
			//-201-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(134);
			$s->setEnd(166);
			$s->setConfStart(134);
			$s->setConfEnd(164);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166");
			$s->setCannonicalConts(288);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(10));
			$manager->persist($s);
	
			//-202-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(53);
			$s->setEnd(83);
			$s->setConfStart(53);
			$s->setConfEnd(81);
			$s->setLength(31);
			$s->setConfLength(29);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84");
			$s->setCannonicalConts(256);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(32));
			$manager->persist($s);
	
			//-203-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(87);
			$s->setEnd(119);
			$s->setConfStart(87);
			$s->setConfEnd(119);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119");
			$s->setCannonicalConts(298);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(32));
			$manager->persist($s);
	
			//-204-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(120);
			$s->setEnd(152);
			$s->setConfStart(120);
			$s->setConfEnd(148);
			$s->setLength(33);
			$s->setConfLength(29);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152");
			$s->setCannonicalConts(240);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(32));
			$manager->persist($s);
	
			//-205-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(200);
			$s->setEnd(232);
			$s->setConfStart(200);
			$s->setConfEnd(232);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232");
			$s->setCannonicalConts(298);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(32));
			$manager->persist($s);
	
			//-206-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(233);
			$s->setEnd(266);
			$s->setConfStart(233);
			$s->setConfEnd(266);
			$s->setLength(34);
			$s->setConfLength(34);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;233,234,235,236,237,238,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,262,263,264,265,266");
			$s->setCannonicalConts(298);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(32));
			$manager->persist($s);
	
			//-207-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(267);
			$s->setEnd(299);
			$s->setConfStart(267);
			$s->setConfEnd(299);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;267,268,269,270,271,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299");
			$s->setCannonicalConts(270);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(32));
			$manager->persist($s);
	
			//-208-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(23);
			$s->setEnd(55);
			$s->setConfStart(23);
			$s->setConfEnd(55);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55");
			$s->setCannonicalConts(294);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(116));
			$manager->persist($s);
	
			//-209-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(54);
			$s->setEnd(86);
			$s->setConfStart(63);
			$s->setConfEnd(86);
			$s->setLength(33);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86");
			$s->setCannonicalConts(230);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(116));
			$manager->persist($s);
	
			//-210-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(87);
			$s->setEnd(119);
			$s->setConfStart(87);
			$s->setConfEnd(117);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119");
			$s->setCannonicalConts(250);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(116));
			$manager->persist($s);
	
			//-211-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(120);
			$s->setEnd(153);
			$s->setConfStart(120);
			$s->setConfEnd(151);
			$s->setLength(34);
			$s->setConfLength(32);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;120,121,122,123,124,125,126,127,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153");
			$s->setCannonicalConts(226);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(116));
			$manager->persist($s);
	
			//-212-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(153);
			$s->setEnd(185);
			$s->setConfStart(162);
			$s->setConfEnd(183);
			$s->setLength(33);
			$s->setConfLength(22);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185");
			$s->setCannonicalConts(178);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(116));
			$manager->persist($s);
	
			//-213-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(187);
			$s->setEnd(219);
			$s->setConfStart(196);
			$s->setConfEnd(219);
			$s->setLength(33);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219");
			$s->setCannonicalConts(212);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(116));
			$manager->persist($s);
	
			//-214-
			$s = new StructuralRepeat();
			$s->setRepNum(7);
			$s->setStart(215);
			$s->setEnd(245);
			$s->setConfStart(224);
			$s->setConfEnd(243);
			$s->setLength(31);
			$s->setConfLength(20);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;215,216,217,218,219,220,221,222,223,224,225,226,227,228,D,D,229,230,231,232,233,234,235,236,237,238,239,240,241,242,243,244,245");
			$s->setCannonicalConts(196);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(116));
			$manager->persist($s);
	
			//-215-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(367);
			$s->setEnd(399);
			$s->setConfStart(376);
			$s->setConfEnd(399);
			$s->setLength(33);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;367,368,369,370,371,372,373,374,375,376,377,378,379,380,381,382,383,384,385,386,387,388,389,390,391,392,393,394,395,396,397,398,399");
			$s->setCannonicalConts(304);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(89));
			$manager->persist($s);
	
			//-216-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(406);
			$s->setEnd(441);
			$s->setConfStart(412);
			$s->setConfEnd(439);
			$s->setLength(36);
			$s->setConfLength(28);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;406,407,408,409,410,411,412,413,414,415,416,417,418,419,420,421,422,423,424,428,429,430,431,432,433,434,435,436,437,438,439,440,441");
			$s->setCannonicalConts(250);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(89));
			$manager->persist($s);
	
			//-217-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(442);
			$s->setEnd(474);
			$s->setConfStart(442);
			$s->setConfEnd(474);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;442,443,444,445,446,447,448,449,450,451,452,453,454,455,456,457,458,459,460,461,462,463,464,465,466,467,468,469,470,471,472,473,474");
			$s->setCannonicalConts(278);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(89));
			$manager->persist($s);
	
			//-218-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(475);
			$s->setEnd(507);
			$s->setConfStart(475);
			$s->setConfEnd(505);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;475,476,477,478,479,480,481,482,483,484,485,486,487,488,489,490,491,492,493,494,495,496,497,498,499,500,501,502,503,504,505,506,507");
			$s->setCannonicalConts(264);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(89));
			$manager->persist($s);
	
			//-219-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(540);
			$s->setEnd(572);
			$s->setConfStart(549);
			$s->setConfEnd(572);
			$s->setLength(33);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;540,541,542,543,544,545,546,547,548,549,550,551,552,553,554,555,556,557,558,559,560,561,562,563,564,565,566,567,568,569,570,571,572");
			$s->setCannonicalConts(236);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(250));
			$manager->persist($s);
	
			//-220-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(573);
			$s->setEnd(614);
			$s->setConfStart(573);
			$s->setConfEnd(612);
			$s->setLength(42);
			$s->setConfLength(40);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;573,574,575,576,577,578,579,580,581,582,583,584,585,586,587,588,589,590,591,595,596,597,598,599,600,601,602,603,604,605,606,607,608");
			$s->setCannonicalConts(144);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(250));
			$manager->persist($s);
	
			//-221-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(615);
			$s->setEnd(647);
			$s->setConfStart(615);
			$s->setConfEnd(647);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;615,616,617,618,619,620,621,622,623,624,625,626,627,628,629,630,631,632,633,634,635,636,637,638,639,640,641,642,643,644,645,646,647");
			$s->setCannonicalConts(282);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(250));
			$manager->persist($s);
	
			//-222-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(648);
			$s->setEnd(680);
			$s->setConfStart(648);
			$s->setConfEnd(678);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;648,649,650,651,652,653,654,655,656,657,658,659,660,661,662,663,664,665,666,667,668,669,670,671,672,673,674,675,676,677,678,679,680");
			$s->setCannonicalConts(286);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(250));
			$manager->persist($s);
	
			//-223-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(620);
			$s->setEnd(652);
			$s->setConfStart(629);
			$s->setConfEnd(650);
			$s->setLength(33);
			$s->setConfLength(22);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;620,621,622,623,624,625,626,627,628,629,630,631,632,633,634,635,636,637,638,639,640,641,642,643,644,645,646,647,648,649,650,651,652");
			$s->setCannonicalConts(242);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(106));
			$manager->persist($s);
	
			//-224-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(653);
			$s->setEnd(685);
			$s->setConfStart(653);
			$s->setConfEnd(685);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;653,654,655,656,657,658,659,660,661,662,663,664,665,666,667,668,669,670,671,672,673,674,675,676,677,678,679,680,681,682,683,684,685");
			$s->setCannonicalConts(292);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(106));
			$manager->persist($s);
	
			//-225-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(686);
			$s->setEnd(718);
			$s->setConfStart(686);
			$s->setConfEnd(718);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;686,687,688,689,690,691,692,693,694,695,696,697,698,699,700,701,702,703,704,705,706,707,708,709,710,711,712,713,714,715,716,717,718");
			$s->setCannonicalConts(300);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(106));
			$manager->persist($s);
	
			//-226-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(719);
			$s->setEnd(754);
			$s->setConfStart(719);
			$s->setConfEnd(752);
			$s->setLength(36);
			$s->setConfLength(34);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;719,720,721,722,723,724,726,727,728,729,730,731,732,733,734,737,738,739,740,741,742,743,744,745,746,747,748,749,750,751,752,753,754");
			$s->setCannonicalConts(254);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(106));
			$manager->persist($s);
	
			//-227-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(33);
			$s->setEnd(65);
			$s->setConfStart(42);
			$s->setConfEnd(65);
			$s->setLength(33);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65");
			$s->setCannonicalConts(264);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(92));
			$manager->persist($s);
	
			//-228-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(66);
			$s->setEnd(98);
			$s->setConfStart(66);
			$s->setConfEnd(98);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98");
			$s->setCannonicalConts(296);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(92));
			$manager->persist($s);
	
			//-229-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(99);
			$s->setEnd(131);
			$s->setConfStart(99);
			$s->setConfEnd(131);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131");
			$s->setCannonicalConts(300);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(92));
			$manager->persist($s);
	
			//-230-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(132);
			$s->setEnd(161);
			$s->setConfStart(132);
			$s->setConfEnd(159);
			$s->setLength(30);
			$s->setConfLength(28);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,D,D,D,148,149,150,151,152,153,154,155,156,157,158,159,160,161");
			$s->setCannonicalConts(242);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(92));
			$manager->persist($s);
	
			//-231-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(192);
			$s->setEnd(224);
			$s->setConfStart(197);
			$s->setConfEnd(224);
			$s->setLength(33);
			$s->setConfLength(28);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224");
			$s->setCannonicalConts(276);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(92));
			$manager->persist($s);
	
			//-232-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(225);
			$s->setEnd(257);
			$s->setConfStart(225);
			$s->setConfEnd(257);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257");
			$s->setCannonicalConts(294);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(92));
			$manager->persist($s);
	
			//-233-
			$s = new StructuralRepeat();
			$s->setRepNum(7);
			$s->setStart(258);
			$s->setEnd(286);
			$s->setConfStart(258);
			$s->setConfEnd(284);
			$s->setLength(29);
			$s->setConfLength(27);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;258,259,260,261,262,263,264,265,266,267,268,269,270,271,272,D,D,D,D,273,274,275,276,277,278,279,280,281,282,283,284,285,286");
			$s->setCannonicalConts(208);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(92));
			$manager->persist($s);
	
			//-234-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(47);
			$s->setEnd(70);
			$s->setConfStart(47);
			$s->setConfEnd(68);
			$s->setLength(24);
			$s->setConfLength(22);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,D,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73");
			$s->setCannonicalConts(216);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(103));
			$manager->persist($s);
	
			//-235-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(72);
			$s->setEnd(104);
			$s->setConfStart(72);
			$s->setConfEnd(102);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104");
			$s->setCannonicalConts(276);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(103));
			$manager->persist($s);
	
			//-236-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(106);
			$s->setEnd(142);
			$s->setConfStart(106);
			$s->setConfEnd(142);
			$s->setLength(37);
			$s->setConfLength(37);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;106,107,108,109,110,111,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142");
			$s->setCannonicalConts(290);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(103));
			$manager->persist($s);
	
			//-237-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(143);
			$s->setEnd(188);
			$s->setConfStart(143);
			$s->setConfEnd(188);
			$s->setLength(46);
			$s->setConfLength(46);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;143,144,145,146,147,148,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188");
			$s->setCannonicalConts(308);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(103));
			$manager->persist($s);
	
			//-238-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(189);
			$s->setEnd(225);
			$s->setConfStart(189);
			$s->setConfEnd(223);
			$s->setLength(37);
			$s->setConfLength(35);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225");
			$s->setCannonicalConts(238);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(103));
			$manager->persist($s);
	
			//-239-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(232);
			$s->setEnd(264);
			$s->setConfStart(232);
			$s->setConfEnd(262);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;232,233,234,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,262,263,264");
			$s->setCannonicalConts(298);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(103));
			$manager->persist($s);
	
			//-240-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(47);
			$s->setEnd(85);
			$s->setConfStart(47);
			$s->setConfEnd(70);
			$s->setLength(39);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;47,48,49,50,51,52,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85");
			$s->setCannonicalConts(198);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(107));
			$manager->persist($s);
	
			//-241-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(66);
			$s->setEnd(98);
			$s->setConfStart(75);
			$s->setConfEnd(98);
			$s->setLength(33);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98");
			$s->setCannonicalConts(242);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(107));
			$manager->persist($s);
	
			//-242-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(99);
			$s->setEnd(131);
			$s->setConfStart(99);
			$s->setConfEnd(129);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131");
			$s->setCannonicalConts(260);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(107));
			$manager->persist($s);
	
			//-243-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(133);
			$s->setEnd(165);
			$s->setConfStart(133);
			$s->setConfEnd(165);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165");
			$s->setCannonicalConts(282);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(107));
			$manager->persist($s);
	
			//-244-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(166);
			$s->setEnd(190);
			$s->setConfStart(166);
			$s->setConfEnd(190);
			$s->setLength(25);
			$s->setConfLength(25);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,D,D,D,182,183,184,185,186,187,188,189,190,191,192,193,D,D");
			$s->setCannonicalConts(172);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(107));
			$manager->persist($s);
	
			//-245-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(29);
			$s->setEnd(61);
			$s->setConfStart(36);
			$s->setConfEnd(61);
			$s->setLength(33);
			$s->setConfLength(26);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61");
			$s->setCannonicalConts(234);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(318));
			$manager->persist($s);
	
			//-246-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(62);
			$s->setEnd(94);
			$s->setConfStart(62);
			$s->setConfEnd(94);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94");
			$s->setCannonicalConts(290);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(318));
			$manager->persist($s);
	
			//-247-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(95);
			$s->setEnd(127);
			$s->setConfStart(95);
			$s->setConfEnd(127);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127");
			$s->setCannonicalConts(300);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(318));
			$manager->persist($s);
	
			//-248-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(128);
			$s->setEnd(159);
			$s->setConfStart(128);
			$s->setConfEnd(159);
			$s->setLength(32);
			$s->setConfLength(32);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;128,129,130,131,132,D,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159");
			$s->setCannonicalConts(266);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(318));
			$manager->persist($s);
	
			//-249-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(160);
			$s->setEnd(192);
			$s->setConfStart(160);
			$s->setConfEnd(192);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192");
			$s->setCannonicalConts(294);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(318));
			$manager->persist($s);
	
			//-250-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(193);
			$s->setEnd(224);
			$s->setConfStart(193);
			$s->setConfEnd(224);
			$s->setLength(32);
			$s->setConfLength(32);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;193,194,195,196,197,198,D,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224");
			$s->setCannonicalConts(292);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(318));
			$manager->persist($s);
	
			//-251-
			$s = new StructuralRepeat();
			$s->setRepNum(7);
			$s->setStart(225);
			$s->setEnd(253);
			$s->setConfStart(225);
			$s->setConfEnd(253);
			$s->setLength(29);
			$s->setConfLength(29);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,D,D,241,242,243,244,245,246,247,248,249,250,251,252,253,D,D");
			$s->setCannonicalConts(228);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(318));
			$manager->persist($s);
	
			//-252-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(25);
			$s->setEnd(57);
			$s->setConfStart(27);
			$s->setConfEnd(57);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57");
			$s->setCannonicalConts(276);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(104));
			$manager->persist($s);
	
			//-253-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(58);
			$s->setEnd(90);
			$s->setConfStart(58);
			$s->setConfEnd(90);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90");
			$s->setCannonicalConts(296);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(104));
			$manager->persist($s);
	
			//-254-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(91);
			$s->setEnd(123);
			$s->setConfStart(91);
			$s->setConfEnd(123);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123");
			$s->setCannonicalConts(300);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(104));
			$manager->persist($s);
	
			//-255-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(124);
			$s->setEnd(156);
			$s->setConfStart(124);
			$s->setConfEnd(156);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156");
			$s->setCannonicalConts(308);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(104));
			$manager->persist($s);
	
			//-256-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(157);
			$s->setEnd(189);
			$s->setConfStart(157);
			$s->setConfEnd(187);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189");
			$s->setCannonicalConts(262);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(104));
			$manager->persist($s);
	
			//-257-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(425);
			$s->setEnd(453);
			$s->setConfStart(425);
			$s->setConfEnd(453);
			$s->setLength(455);
			$s->setConfLength(455);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,-1,0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30");
			$s->setCannonicalConts(0);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(74));
			$manager->persist($s);
	
			//-258-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(454);
			$s->setEnd(486);
			$s->setConfStart(454);
			$s->setConfEnd(486);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;454,455,456,457,458,459,460,461,462,463,464,465,466,467,468,469,470,471,472,473,474,475,476,477,478,479,480,481,482,483,484,485,486");
			$s->setCannonicalConts(300);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(74));
			$manager->persist($s);
	
			//-259-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(487);
			$s->setEnd(519);
			$s->setConfStart(487);
			$s->setConfEnd(519);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;487,488,489,490,491,492,493,494,495,496,497,498,499,500,501,502,503,504,505,506,507,508,509,510,511,512,513,514,515,516,517,518,519");
			$s->setCannonicalConts(302);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(74));
			$manager->persist($s);
	
			//-260-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(520);
			$s->setEnd(544);
			$s->setConfStart(520);
			$s->setConfEnd(544);
			$s->setLength(25);
			$s->setConfLength(25);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;520,521,522,523,524,525,526,527,528,529,530,531,532,533,534,535,D,D,D,536,537,538,539,540,541,542,543,544,545,546,D,D,D");
			$s->setCannonicalConts(192);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(74));
			$manager->persist($s);
	
			//-261-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(135);
			$s->setEnd(164);
			$s->setConfStart(135);
			$s->setConfEnd(162);
			$s->setLength(30);
			$s->setConfLength(28);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,D,D,135,136,137,138,139,140,141,142,143,144,145,146,154,155,156,157,158,159,160,161,162,163,164,165,166,167");
			$s->setCannonicalConts(152);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(81));
			$manager->persist($s);
	
			//-262-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(170);
			$s->setEnd(205);
			$s->setConfStart(174);
			$s->setConfEnd(203);
			$s->setLength(36);
			$s->setConfLength(30);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,192,193,194,195,196,197,198,199,200,201,202,203,204,205");
			$s->setCannonicalConts(226);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(81));
			$manager->persist($s);
	
			//-263-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(213);
			$s->setEnd(249);
			$s->setConfStart(213);
			$s->setConfEnd(249);
			$s->setLength(37);
			$s->setConfLength(37);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;213,214,215,216,217,218,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249");
			$s->setCannonicalConts(288);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(81));
			$manager->persist($s);
	
			//-264-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(250);
			$s->setEnd(296);
			$s->setConfStart(250);
			$s->setConfEnd(292);
			$s->setLength(47);
			$s->setConfLength(43);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;250,251,252,253,254,255,256,271,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293,294,295,296");
			$s->setCannonicalConts(252);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(81));
			$manager->persist($s);
	
			//-265-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(300);
			$s->setEnd(341);
			$s->setConfStart(300);
			$s->setConfEnd(339);
			$s->setLength(42);
			$s->setConfLength(40);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,328,329,330,331,332,333,334,335,336,337,338,339,340,341");
			$s->setCannonicalConts(242);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(81));
			$manager->persist($s);
	
			//-266-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(349);
			$s->setEnd(381);
			$s->setConfStart(349);
			$s->setConfEnd(379);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;349,350,351,352,353,354,355,356,357,358,359,360,361,362,363,364,365,366,367,368,369,370,371,372,373,374,375,376,377,378,379,380,381");
			$s->setCannonicalConts(280);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(81));
			$manager->persist($s);
	
			//-267-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(494);
			$s->setEnd(517);
			$s->setConfStart(494);
			$s->setConfEnd(512);
			$s->setLength(24);
			$s->setConfLength(19);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,494,495,496,497,498,499,500,501,502,503,504,505,506,507,508,509,510,511,512,513,514,515,516,517,518,519,520,521,522,523");
			$s->setCannonicalConts(242);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(159));
			$manager->persist($s);
	
			//-268-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(517);
			$s->setEnd(551);
			$s->setConfStart(517);
			$s->setConfEnd(551);
			$s->setLength(35);
			$s->setConfLength(35);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;517,518,519,520,521,522,525,526,527,528,529,530,531,532,533,534,535,536,537,538,539,540,541,542,543,544,545,546,547,548,549,550,551");
			$s->setCannonicalConts(300);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(159));
			$manager->persist($s);
	
			//-269-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(552);
			$s->setEnd(584);
			$s->setConfStart(552);
			$s->setConfEnd(584);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;552,553,554,555,556,557,558,559,560,561,562,563,564,565,566,567,568,569,570,571,572,573,574,575,576,577,578,579,580,581,582,583,584");
			$s->setCannonicalConts(292);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(159));
			$manager->persist($s);
	
			//-270-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(585);
			$s->setEnd(617);
			$s->setConfStart(585);
			$s->setConfEnd(617);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;585,586,587,588,589,590,591,592,593,594,595,596,597,598,599,600,601,602,603,604,605,606,607,608,609,610,611,612,613,614,615,616,617");
			$s->setCannonicalConts(302);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(159));
			$manager->persist($s);
	
			//-271-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(618);
			$s->setEnd(644);
			$s->setConfStart(618);
			$s->setConfEnd(644);
			$s->setLength(27);
			$s->setConfLength(27);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;618,619,620,621,622,623,624,625,626,627,628,629,630,631,632,633,D,634,635,636,637,638,639,640,641,642,643,644,D,D,D,D,D");
			$s->setCannonicalConts(208);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(159));
			$manager->persist($s);
	
			//-272-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(735);
			$s->setEnd(767);
			$s->setConfStart(742);
			$s->setConfEnd(767);
			$s->setLength(33);
			$s->setConfLength(26);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;735,736,737,738,739,740,741,742,743,744,745,746,747,748,749,750,751,752,753,754,755,756,757,758,759,760,761,762,763,764,765,766,767");
			$s->setCannonicalConts(246);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(70));
			$manager->persist($s);
	
			//-273-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(768);
			$s->setEnd(800);
			$s->setConfStart(768);
			$s->setConfEnd(800);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;768,769,770,771,772,773,774,775,776,777,778,779,780,781,782,783,784,785,786,787,788,789,790,791,792,793,794,795,796,797,798,799,800");
			$s->setCannonicalConts(288);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(70));
			$manager->persist($s);
	
			//-274-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(801);
			$s->setEnd(833);
			$s->setConfStart(801);
			$s->setConfEnd(830);
			$s->setLength(33);
			$s->setConfLength(30);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;801,802,803,804,805,806,807,808,809,810,811,812,813,814,815,816,817,818,819,820,821,822,823,824,825,826,827,828,829,830,831,832,833");
			$s->setCannonicalConts(288);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(70));
			$manager->persist($s);
	
			//-275-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(835);
			$s->setEnd(867);
			$s->setConfStart(835);
			$s->setConfEnd(867);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;835,836,837,838,839,840,841,842,843,844,845,846,847,848,849,850,851,852,853,854,855,856,857,858,859,860,861,862,863,864,865,866,867");
			$s->setCannonicalConts(290);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(70));
			$manager->persist($s);
	
			//-276-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(868);
			$s->setEnd(900);
			$s->setConfStart(868);
			$s->setConfEnd(900);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;868,869,870,871,872,873,874,875,876,877,878,879,880,881,882,883,884,885,886,887,888,889,890,891,892,893,894,895,896,897,898,899,900");
			$s->setCannonicalConts(286);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(70));
			$manager->persist($s);
	
			//-277-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(901);
			$s->setEnd(933);
			$s->setConfStart(901);
			$s->setConfEnd(933);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;901,902,903,904,905,906,907,908,909,910,911,912,913,914,915,916,917,918,919,920,921,922,923,924,925,926,927,928,929,930,931,932,933");
			$s->setCannonicalConts(286);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(70));
			$manager->persist($s);
	
			//-278-
			$s = new StructuralRepeat();
			$s->setRepNum(7);
			$s->setStart(934);
			$s->setEnd(964);
			$s->setConfStart(934);
			$s->setConfEnd(962);
			$s->setLength(31);
			$s->setConfLength(29);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;934,935,936,937,938,939,940,941,942,943,944,945,946,947,948,949,D,D,950,951,952,953,954,955,956,957,958,959,960,961,962,963,964");
			$s->setCannonicalConts(246);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(70));
			$manager->persist($s);
	
			//-279-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(11);
			$s->setEnd(33);
			$s->setConfStart(11);
			$s->setConfEnd(31);
			$s->setLength(23);
			$s->setConfLength(21);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,D,D,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36");
			$s->setCannonicalConts(210);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(155));
			$manager->persist($s);
	
			//-280-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(34);
			$s->setEnd(66);
			$s->setConfStart(34);
			$s->setConfEnd(66);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66");
			$s->setCannonicalConts(282);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(155));
			$manager->persist($s);
	
			//-281-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(67);
			$s->setEnd(99);
			$s->setConfStart(67);
			$s->setConfEnd(99);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99");
			$s->setCannonicalConts(272);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(155));
			$manager->persist($s);
	
			//-282-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(100);
			$s->setEnd(132);
			$s->setConfStart(100);
			$s->setConfEnd(132);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132");
			$s->setCannonicalConts(288);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(155));
			$manager->persist($s);
	
			//-283-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(133);
			$s->setEnd(165);
			$s->setConfStart(133);
			$s->setConfEnd(163);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165");
			$s->setCannonicalConts(266);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(155));
			$manager->persist($s);
	
			//-284-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(75);
			$s->setEnd(104);
			$s->setConfStart(75);
			$s->setConfEnd(102);
			$s->setLength(30);
			$s->setConfLength(28);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,97,98,99,100,101,102,103,104,105,106,107,108,109,110");
			$s->setCannonicalConts(164);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(124));
			$manager->persist($s);
	
			//-285-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(110);
			$s->setEnd(145);
			$s->setConfStart(117);
			$s->setConfEnd(143);
			$s->setLength(36);
			$s->setConfLength(27);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,132,133,134,135,136,137,138,139,140,141,142,143,144,145");
			$s->setCannonicalConts(232);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(124));
			$manager->persist($s);
	
			//-286-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(153);
			$s->setEnd(189);
			$s->setConfStart(153);
			$s->setConfEnd(189);
			$s->setLength(37);
			$s->setConfLength(37);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;153,154,155,156,157,158,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189");
			$s->setCannonicalConts(290);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(124));
			$manager->persist($s);
	
			//-287-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(190);
			$s->setEnd(235);
			$s->setConfStart(190);
			$s->setConfEnd(232);
			$s->setLength(46);
			$s->setConfLength(43);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;190,191,192,193,194,195,196,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235");
			$s->setCannonicalConts(258);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(124));
			$manager->persist($s);
	
			//-288-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(239);
			$s->setEnd(280);
			$s->setConfStart(239);
			$s->setConfEnd(278);
			$s->setLength(42);
			$s->setConfLength(40);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,267,268,269,270,271,272,273,274,275,276,277,278,279,280");
			$s->setCannonicalConts(244);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(124));
			$manager->persist($s);
	
			//-289-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(288);
			$s->setEnd(320);
			$s->setConfStart(288);
			$s->setConfEnd(318);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320");
			$s->setCannonicalConts(274);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(124));
			$manager->persist($s);
	
			//-290-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(78);
			$s->setEnd(100);
			$s->setConfStart(78);
			$s->setConfEnd(98);
			$s->setLength(23);
			$s->setConfLength(21);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107");
			$s->setCannonicalConts(202);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(98));
			$manager->persist($s);
	
			//-291-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(109);
			$s->setEnd(144);
			$s->setConfStart(114);
			$s->setConfEnd(142);
			$s->setLength(36);
			$s->setConfLength(29);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,131,132,133,134,135,136,137,138,139,140,141,142,143,144");
			$s->setCannonicalConts(222);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(98));
			$manager->persist($s);
	
			//-292-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(152);
			$s->setEnd(188);
			$s->setConfStart(152);
			$s->setConfEnd(188);
			$s->setLength(37);
			$s->setConfLength(37);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;152,153,154,155,156,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188");
			$s->setCannonicalConts(300);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(98));
			$manager->persist($s);
	
			//-293-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(189);
			$s->setEnd(234);
			$s->setConfStart(189);
			$s->setConfEnd(231);
			$s->setLength(46);
			$s->setConfLength(43);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;189,190,191,192,193,194,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233");
			$s->setCannonicalConts(278);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(98));
			$manager->persist($s);
	
			//-294-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(238);
			$s->setEnd(279);
			$s->setConfStart(238);
			$s->setConfEnd(277);
			$s->setLength(42);
			$s->setConfLength(40);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;238,239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,266,267,268,269,270,271,272,273,274,275,276,277,278,279");
			$s->setCannonicalConts(210);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(98));
			$manager->persist($s);
	
			//-295-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(287);
			$s->setEnd(315);
			$s->setConfStart(287);
			$s->setConfEnd(315);
			$s->setLength(29);
			$s->setConfLength(29);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,D");
			$s->setCannonicalConts(270);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(98));
			$manager->persist($s);
	
			//-296-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(7);
			$s->setEnd(31);
			$s->setConfStart(7);
			$s->setConfEnd(29);
			$s->setLength(25);
			$s->setConfLength(23);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35");
			$s->setCannonicalConts(242);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(55));
			$manager->persist($s);
	
			//-297-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(33);
			$s->setEnd(65);
			$s->setConfStart(33);
			$s->setConfEnd(65);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65");
			$s->setCannonicalConts(278);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(55));
			$manager->persist($s);
	
			//-298-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(66);
			$s->setEnd(98);
			$s->setConfStart(66);
			$s->setConfEnd(98);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98");
			$s->setCannonicalConts(302);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(55));
			$manager->persist($s);
	
			//-299-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(99);
			$s->setEnd(131);
			$s->setConfStart(99);
			$s->setConfEnd(131);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131");
			$s->setCannonicalConts(298);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(55));
			$manager->persist($s);
	
			//-300-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(132);
			$s->setEnd(164);
			$s->setConfStart(132);
			$s->setConfEnd(164);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164");
			$s->setCannonicalConts(288);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(55));
			$manager->persist($s);
	
			//-301-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(165);
			$s->setEnd(197);
			$s->setConfStart(165);
			$s->setConfEnd(197);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197");
			$s->setCannonicalConts(298);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(55));
			$manager->persist($s);
	
			//-302-
			$s = new StructuralRepeat();
			$s->setRepNum(7);
			$s->setStart(198);
			$s->setEnd(226);
			$s->setConfStart(198);
			$s->setConfEnd(223);
			$s->setLength(29);
			$s->setConfLength(26);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,D,D,D,D,214,215,216,217,218,219,220,221,222,223,224,225,226");
			$s->setCannonicalConts(236);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(55));
			$manager->persist($s);
	
			//-303-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(8);
			$s->setEnd(34);
			$s->setConfStart(8);
			$s->setConfEnd(34);
			$s->setLength(27);
			$s->setConfLength(27);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38");
			$s->setCannonicalConts(268);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(292));
			$manager->persist($s);
	
			//-304-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(35);
			$s->setEnd(67);
			$s->setConfStart(35);
			$s->setConfEnd(67);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67");
			$s->setCannonicalConts(290);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(292));
			$manager->persist($s);
	
			//-305-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(68);
			$s->setEnd(100);
			$s->setConfStart(68);
			$s->setConfEnd(97);
			$s->setLength(33);
			$s->setConfLength(30);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100");
			$s->setCannonicalConts(280);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(292));
			$manager->persist($s);
	
			//-306-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(93);
			$s->setEnd(115);
			$s->setConfStart(93);
			$s->setConfEnd(111);
			$s->setLength(23);
			$s->setConfLength(19);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,D,D,D,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117");
			$s->setCannonicalConts(188);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(189));
			$manager->persist($s);
	
			//-307-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(117);
			$s->setEnd(149);
			$s->setConfStart(117);
			$s->setConfEnd(149);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149");
			$s->setCannonicalConts(290);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(189));
			$manager->persist($s);
	
			//-308-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(150);
			$s->setEnd(182);
			$s->setConfStart(150);
			$s->setConfEnd(182);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182");
			$s->setCannonicalConts(290);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(189));
			$manager->persist($s);
	
			//-309-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(183);
			$s->setEnd(215);
			$s->setConfStart(183);
			$s->setConfEnd(215);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;183,184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215");
			$s->setCannonicalConts(290);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(189));
			$manager->persist($s);
	
			//-310-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(216);
			$s->setEnd(248);
			$s->setConfStart(216);
			$s->setConfEnd(246);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,241,242,243,244,245,246,247,248");
			$s->setCannonicalConts(258);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(189));
			$manager->persist($s);
	
			//-311-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(121);
			$s->setEnd(153);
			$s->setConfStart(130);
			$s->setConfEnd(151);
			$s->setLength(33);
			$s->setConfLength(22);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153");
			$s->setCannonicalConts(238);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(76));
			$manager->persist($s);
	
			//-312-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(153);
			$s->setEnd(185);
			$s->setConfStart(153);
			$s->setConfEnd(185);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185");
			$s->setCannonicalConts(290);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(76));
			$manager->persist($s);
	
			//-313-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(186);
			$s->setEnd(219);
			$s->setConfStart(186);
			$s->setConfEnd(219);
			$s->setLength(34);
			$s->setConfLength(34);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;186,187,188,189,190,191,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219");
			$s->setCannonicalConts(282);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(76));
			$manager->persist($s);
	
			//-314-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(220);
			$s->setEnd(264);
			$s->setConfStart(220);
			$s->setConfEnd(264);
			$s->setLength(45);
			$s->setConfLength(45);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,255,256,257,258,259,260,261,262,263,264,265,266,267,D");
			$s->setCannonicalConts(254);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(76));
			$manager->persist($s);
	
			//-315-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(6);
			$s->setEnd(29);
			$s->setConfStart(6);
			$s->setConfEnd(29);
			$s->setLength(24);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33");
			$s->setCannonicalConts(230);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(331));
			$manager->persist($s);
	
			//-316-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(30);
			$s->setEnd(62);
			$s->setConfStart(30);
			$s->setConfEnd(62);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62");
			$s->setCannonicalConts(302);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(331));
			$manager->persist($s);
	
			//-317-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(63);
			$s->setEnd(95);
			$s->setConfStart(63);
			$s->setConfEnd(95);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95");
			$s->setCannonicalConts(304);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(331));
			$manager->persist($s);
	
			//-318-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(96);
			$s->setEnd(128);
			$s->setConfStart(96);
			$s->setConfEnd(128);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128");
			$s->setCannonicalConts(308);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(331));
			$manager->persist($s);
	
			//-319-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(129);
			$s->setEnd(158);
			$s->setConfStart(129);
			$s->setConfEnd(158);
			$s->setLength(30);
			$s->setConfLength(30);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,D,D,D");
			$s->setCannonicalConts(258);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(331));
			$manager->persist($s);
	
			//-320-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(6);
			$s->setEnd(29);
			$s->setConfStart(6);
			$s->setConfEnd(29);
			$s->setLength(24);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33");
			$s->setCannonicalConts(232);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(330));
			$manager->persist($s);
	
			//-321-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(30);
			$s->setEnd(62);
			$s->setConfStart(30);
			$s->setConfEnd(62);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62");
			$s->setCannonicalConts(310);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(330));
			$manager->persist($s);
	
			//-322-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(63);
			$s->setEnd(95);
			$s->setConfStart(63);
			$s->setConfEnd(95);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95");
			$s->setCannonicalConts(310);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(330));
			$manager->persist($s);
	
			//-323-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(96);
			$s->setEnd(128);
			$s->setConfStart(96);
			$s->setConfEnd(128);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128");
			$s->setCannonicalConts(308);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(330));
			$manager->persist($s);
	
			//-324-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(129);
			$s->setEnd(161);
			$s->setConfStart(129);
			$s->setConfEnd(161);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161");
			$s->setCannonicalConts(292);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(330));
			$manager->persist($s);
	
			//-325-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(5);
			$s->setEnd(37);
			$s->setConfStart(14);
			$s->setConfEnd(37);
			$s->setLength(33);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37");
			$s->setCannonicalConts(278);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(306));
			$manager->persist($s);
	
			//-326-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(38);
			$s->setEnd(69);
			$s->setConfStart(38);
			$s->setConfEnd(69);
			$s->setLength(32);
			$s->setConfLength(32);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,D,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69");
			$s->setCannonicalConts(294);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(306));
			$manager->persist($s);
	
			//-327-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(70);
			$s->setEnd(103);
			$s->setConfStart(70);
			$s->setConfEnd(103);
			$s->setLength(34);
			$s->setConfLength(34);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;70,71,72,73,74,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103");
			$s->setCannonicalConts(290);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(306));
			$manager->persist($s);
	
			//-328-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(104);
			$s->setEnd(136);
			$s->setConfStart(104);
			$s->setConfEnd(133);
			$s->setLength(33);
			$s->setConfLength(30);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136");
			$s->setCannonicalConts(324);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(306));
			$manager->persist($s);
	
			//-329-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(4);
			$s->setEnd(27);
			$s->setConfStart(4);
			$s->setConfEnd(25);
			$s->setLength(24);
			$s->setConfLength(22);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,D,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30");
			$s->setCannonicalConts(226);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(253));
			$manager->persist($s);
	
			//-330-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(29);
			$s->setEnd(61);
			$s->setConfStart(29);
			$s->setConfEnd(59);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61");
			$s->setCannonicalConts(266);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(253));
			$manager->persist($s);
	
			//-331-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(65);
			$s->setEnd(97);
			$s->setConfStart(66);
			$s->setConfEnd(94);
			$s->setLength(33);
			$s->setConfLength(29);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97");
			$s->setCannonicalConts(242);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(253));
			$manager->persist($s);
	
			//-332-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(100);
			$s->setEnd(132);
			$s->setConfStart(100);
			$s->setConfEnd(132);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132");
			$s->setCannonicalConts(296);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(253));
			$manager->persist($s);
	
			//-333-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(133);
			$s->setEnd(166);
			$s->setConfStart(133);
			$s->setConfEnd(166);
			$s->setLength(34);
			$s->setConfLength(34);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,161,162,163,164,165,166");
			$s->setCannonicalConts(290);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(253));
			$manager->persist($s);
	
			//-334-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(167);
			$s->setEnd(199);
			$s->setConfStart(167);
			$s->setConfEnd(196);
			$s->setLength(33);
			$s->setConfLength(30);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199");
			$s->setCannonicalConts(310);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(253));
			$manager->persist($s);
	
			//-335-
			$s = new StructuralRepeat();
			$s->setRepNum(7);
			$s->setStart(201);
			$s->setEnd(228);
			$s->setConfStart(209);
			$s->setConfEnd(228);
			$s->setLength(28);
			$s->setConfLength(20);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,D,D,D,216,217,218,219,220,221,222,223,224,225,226,227,228,D,D");
			$s->setCannonicalConts(206);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(253));
			$manager->persist($s);
	
			//-336-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(604);
			$s->setEnd(627);
			$s->setConfStart(604);
			$s->setConfEnd(623);
			$s->setLength(24);
			$s->setConfLength(20);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,D,604,605,606,607,608,609,610,611,612,613,614,615,616,617,618,619,620,621,622,623,624,625,626,627,628,629,630");
			$s->setCannonicalConts(202);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(311));
			$manager->persist($s);
	
			//-337-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(628);
			$s->setEnd(660);
			$s->setConfStart(628);
			$s->setConfEnd(660);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;628,629,630,631,632,633,634,635,636,637,638,639,640,641,642,643,644,645,646,647,648,649,650,651,652,653,654,655,656,657,658,659,660");
			$s->setCannonicalConts(288);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(311));
			$manager->persist($s);
	
			//-338-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(661);
			$s->setEnd(693);
			$s->setConfStart(666);
			$s->setConfEnd(693);
			$s->setLength(33);
			$s->setConfLength(28);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;661,662,663,664,665,666,667,668,669,670,671,672,673,674,675,676,677,678,679,680,681,682,683,684,685,686,687,688,689,690,691,692,693");
			$s->setCannonicalConts(262);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(311));
			$manager->persist($s);
	
			//-339-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(694);
			$s->setEnd(715);
			$s->setConfStart(694);
			$s->setConfEnd(715);
			$s->setLength(22);
			$s->setConfLength(22);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;694,695,696,697,698,D,D,D,D,699,700,701,702,703,704,705,706,708,709,710,711,712,713,714,715,716,717,718,D,D,D,D,D");
			$s->setCannonicalConts(168);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(311));
			$manager->persist($s);
	
			//-340-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(27);
			$s->setEnd(50);
			$s->setConfStart(27);
			$s->setConfEnd(50);
			$s->setLength(24);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56");
			$s->setCannonicalConts(232);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(240));
			$manager->persist($s);
	
			//-341-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(51);
			$s->setEnd(84);
			$s->setConfStart(51);
			$s->setConfEnd(84);
			$s->setLength(34);
			$s->setConfLength(34);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;51,52,53,54,55,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84");
			$s->setCannonicalConts(298);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(240));
			$manager->persist($s);
	
			//-342-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(85);
			$s->setEnd(117);
			$s->setConfStart(85);
			$s->setConfEnd(117);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117");
			$s->setCannonicalConts(298);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(240));
			$manager->persist($s);
	
			//-343-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(118);
			$s->setEnd(150);
			$s->setConfStart(118);
			$s->setConfEnd(150);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150");
			$s->setCannonicalConts(298);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(240));
			$manager->persist($s);
	
			//-344-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(151);
			$s->setEnd(193);
			$s->setConfStart(151);
			$s->setConfEnd(190);
			$s->setLength(43);
			$s->setConfLength(40);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;151,152,153,154,155,156,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188");
			$s->setCannonicalConts(240);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(240));
			$manager->persist($s);
	
			//-345-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(195);
			$s->setEnd(231);
			$s->setConfStart(195);
			$s->setConfEnd(231);
			$s->setLength(37);
			$s->setConfLength(37);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231");
			$s->setCannonicalConts(274);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(240));
			$manager->persist($s);
	
			//-346-
			$s = new StructuralRepeat();
			$s->setRepNum(7);
			$s->setStart(232);
			$s->setEnd(264);
			$s->setConfStart(232);
			$s->setConfEnd(262);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;232,233,234,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,262,263,264");
			$s->setCannonicalConts(276);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(240));
			$manager->persist($s);
	
			//-347-
			$s = new StructuralRepeat();
			$s->setRepNum(8);
			$s->setStart(266);
			$s->setEnd(298);
			$s->setConfStart(266);
			$s->setConfEnd(298);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;266,267,268,269,270,271,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298");
			$s->setCannonicalConts(290);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(240));
			$manager->persist($s);
	
			//-348-
			$s = new StructuralRepeat();
			$s->setRepNum(9);
			$s->setStart(294);
			$s->setEnd(326);
			$s->setConfStart(303);
			$s->setConfEnd(326);
			$s->setLength(33);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326");
			$s->setCannonicalConts(296);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(240));
			$manager->persist($s);
	
			//-349-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(437);
			$s->setEnd(479);
			$s->setConfStart(437);
			$s->setConfEnd(477);
			$s->setLength(43);
			$s->setConfLength(41);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;437,438,439,440,441,452,453,454,455,456,457,458,459,460,461,462,463,464,465,466,467,468,469,470,471,472,473,474,475,476,477,478,479");
			$s->setCannonicalConts(162);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(236));
			$manager->persist($s);
	
			//-350-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(564);
			$s->setEnd(597);
			$s->setConfStart(573);
			$s->setConfEnd(597);
			$s->setLength(34);
			$s->setConfLength(25);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;564,565,566,567,568,569,570,571,572,573,574,575,576,577,578,579,580,582,583,584,585,586,587,588,589,590,591,592,593,594,595,596,597");
			$s->setCannonicalConts(266);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(236));
			$manager->persist($s);
	
			//-351-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(598);
			$s->setEnd(632);
			$s->setConfStart(598);
			$s->setConfEnd(632);
			$s->setLength(35);
			$s->setConfLength(35);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;598,599,600,601,602,605,606,607,608,609,610,611,612,613,614,615,616,617,618,619,620,621,622,623,624,625,626,627,628,629,630,631,632");
			$s->setCannonicalConts(290);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(236));
			$manager->persist($s);
	
			//-352-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(633);
			$s->setEnd(665);
			$s->setConfStart(633);
			$s->setConfEnd(665);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;633,634,635,636,637,638,639,640,641,642,643,644,645,646,647,648,649,650,651,652,653,654,655,656,657,658,659,660,661,662,663,664,665");
			$s->setCannonicalConts(308);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(236));
			$manager->persist($s);
	
			//-353-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(666);
			$s->setEnd(696);
			$s->setConfStart(666);
			$s->setConfEnd(696);
			$s->setLength(31);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;666,667,668,669,670,671,672,673,674,675,676,677,678,679,680,681,682,683,684,685,686,687,688,689,690,691,692,693,694,695,696,697,D");
			$s->setCannonicalConts(264);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(236));
			$manager->persist($s);
	
			//-354-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(321);
			$s->setEnd(353);
			$s->setConfStart(330);
			$s->setConfEnd(348);
			$s->setLength(33);
			$s->setConfLength(19);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;321,322,323,324,325,326,327,328,329,330,331,332,333,334,335,336,337,338,339,340,341,342,343,344,345,346,347,348,349,350,351,352,353");
			$s->setCannonicalConts(274);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(186));
			$manager->persist($s);
	
			//-355-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(353);
			$s->setEnd(387);
			$s->setConfStart(353);
			$s->setConfEnd(387);
			$s->setLength(35);
			$s->setConfLength(35);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;353,354,355,356,357,358,361,362,363,364,365,366,367,368,369,370,371,372,373,374,375,376,377,378,379,380,381,382,383,384,385,386,387");
			$s->setCannonicalConts(296);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(186));
			$manager->persist($s);
	
			//-356-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(388);
			$s->setEnd(420);
			$s->setConfStart(388);
			$s->setConfEnd(420);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;388,389,390,391,392,393,394,395,396,397,398,399,400,401,402,403,404,405,406,407,408,409,410,411,412,413,414,415,416,417,418,419,420");
			$s->setCannonicalConts(292);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(186));
			$manager->persist($s);
	
			//-357-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(421);
			$s->setEnd(453);
			$s->setConfStart(421);
			$s->setConfEnd(453);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;421,422,423,424,425,426,427,428,429,430,431,432,433,434,435,436,437,438,439,440,441,442,443,444,445,446,447,448,449,450,451,452,453");
			$s->setCannonicalConts(298);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(186));
			$manager->persist($s);
	
			//-358-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(454);
			$s->setEnd(483);
			$s->setConfStart(454);
			$s->setConfEnd(480);
			$s->setLength(30);
			$s->setConfLength(27);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;454,455,456,457,458,459,460,461,462,463,464,465,466,467,468,D,D,D,469,470,471,472,473,474,475,476,477,478,479,480,481,482,483");
			$s->setCannonicalConts(244);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(186));
			$manager->persist($s);
	
			//-359-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(475);
			$s->setEnd(507);
			$s->setConfStart(484);
			$s->setConfEnd(504);
			$s->setLength(33);
			$s->setConfLength(21);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;475,476,477,478,479,480,481,482,483,484,485,486,487,488,489,490,491,492,493,494,495,496,497,498,499,500,501,502,503,504,505,506,507");
			$s->setCannonicalConts(246);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(186));
			$manager->persist($s);
	
			//-360-
			$s = new StructuralRepeat();
			$s->setRepNum(7);
			$s->setStart(507);
			$s->setEnd(543);
			$s->setConfStart(507);
			$s->setConfEnd(543);
			$s->setLength(37);
			$s->setConfLength(37);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;507,508,509,510,511,513,514,515,516,517,518,519,520,521,522,523,524,525,529,530,531,532,533,534,535,536,537,538,539,540,541,542,543");
			$s->setCannonicalConts(294);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(186));
			$manager->persist($s);
	
			//-361-
			$s = new StructuralRepeat();
			$s->setRepNum(8);
			$s->setStart(544);
			$s->setEnd(576);
			$s->setConfStart(544);
			$s->setConfEnd(576);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;544,545,546,547,548,549,550,551,552,553,554,555,556,557,558,559,560,561,562,563,564,565,566,567,568,569,570,571,572,573,574,575,576");
			$s->setCannonicalConts(288);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(186));
			$manager->persist($s);
	
			//-362-
			$s = new StructuralRepeat();
			$s->setRepNum(9);
			$s->setStart(577);
			$s->setEnd(609);
			$s->setConfStart(577);
			$s->setConfEnd(609);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;577,578,579,580,581,582,583,584,585,586,587,588,589,590,591,592,593,594,595,596,597,598,599,600,601,602,603,604,605,606,607,608,609");
			$s->setCannonicalConts(302);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(186));
			$manager->persist($s);
	
			//-363-
			$s = new StructuralRepeat();
			$s->setRepNum(10);
			$s->setStart(610);
			$s->setEnd(635);
			$s->setConfStart(610);
			$s->setConfEnd(635);
			$s->setLength(26);
			$s->setConfLength(26);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;610,611,612,613,614,615,616,617,618,619,620,621,622,623,624,D,D,D,D,625,626,627,628,629,630,631,632,633,634,635,D,D,D");
			$s->setCannonicalConts(186);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(186));
			$manager->persist($s);
	
			//-364-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(7);
			$s->setEnd(30);
			$s->setConfStart(7);
			$s->setConfEnd(28);
			$s->setLength(24);
			$s->setConfLength(22);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34");
			$s->setCannonicalConts(214);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(319));
			$manager->persist($s);
	
			//-365-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(32);
			$s->setEnd(64);
			$s->setConfStart(32);
			$s->setConfEnd(64);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64");
			$s->setCannonicalConts(310);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(319));
			$manager->persist($s);
	
			//-366-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(65);
			$s->setEnd(97);
			$s->setConfStart(65);
			$s->setConfEnd(97);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97");
			$s->setCannonicalConts(302);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(319));
			$manager->persist($s);
	
			//-367-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(99);
			$s->setEnd(131);
			$s->setConfStart(101);
			$s->setConfEnd(129);
			$s->setLength(33);
			$s->setConfLength(29);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131");
			$s->setCannonicalConts(264);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(319));
			$manager->persist($s);
	
			//-368-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(133);
			$s->setEnd(170);
			$s->setConfStart(133);
			$s->setConfEnd(170);
			$s->setLength(38);
			$s->setConfLength(38);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170");
			$s->setCannonicalConts(266);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(319));
			$manager->persist($s);
	
			//-369-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(171);
			$s->setEnd(201);
			$s->setConfStart(171);
			$s->setConfEnd(201);
			$s->setLength(31);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,D,D");
			$s->setCannonicalConts(244);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(319));
			$manager->persist($s);
	
			//-370-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(50);
			$s->setEnd(82);
			$s->setConfStart(60);
			$s->setConfEnd(82);
			$s->setLength(33);
			$s->setConfLength(23);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82");
			$s->setCannonicalConts(260);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(78));
			$manager->persist($s);
	
			//-371-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(83);
			$s->setEnd(115);
			$s->setConfStart(83);
			$s->setConfEnd(115);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115");
			$s->setCannonicalConts(298);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(78));
			$manager->persist($s);
	
			//-372-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(116);
			$s->setEnd(149);
			$s->setConfStart(116);
			$s->setConfEnd(149);
			$s->setLength(34);
			$s->setConfLength(34);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;116,117,118,119,120,121,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149");
			$s->setCannonicalConts(302);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(78));
			$manager->persist($s);
	
			//-373-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(150);
			$s->setEnd(182);
			$s->setConfStart(150);
			$s->setConfEnd(182);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182");
			$s->setCannonicalConts(280);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(78));
			$manager->persist($s);
	
			//-374-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(183);
			$s->setEnd(216);
			$s->setConfStart(183);
			$s->setConfEnd(216);
			$s->setLength(34);
			$s->setConfLength(34);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;183,184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,203,204,205,206,207,208,209,210,211,212,213,214,215,216");
			$s->setCannonicalConts(278);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(78));
			$manager->persist($s);
	
			//-375-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(217);
			$s->setEnd(250);
			$s->setConfStart(217);
			$s->setConfEnd(250);
			$s->setLength(34);
			$s->setConfLength(34);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;217,218,219,220,221,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249,250");
			$s->setCannonicalConts(306);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(78));
			$manager->persist($s);
	
			//-376-
			$s = new StructuralRepeat();
			$s->setRepNum(7);
			$s->setStart(251);
			$s->setEnd(281);
			$s->setConfStart(251);
			$s->setConfEnd(281);
			$s->setLength(31);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;251,252,253,254,255,256,257,258,259,260,261,262,263,264,265,266,267,268,269,270,271,272,273,274,275,276,277,278,279,280,281,D,D");
			$s->setCannonicalConts(270);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(78));
			$manager->persist($s);
	
			//-377-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(444);
			$s->setEnd(616);
			$s->setConfStart(452);
			$s->setConfEnd(613);
			$s->setLength(173);
			$s->setConfLength(162);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;444,445,446,447,448,449,450,451,452,453,454,455,456,457,597,598,599,600,601,602,603,604,605,606,607,608,609,610,611,612,613,614,615");
			$s->setCannonicalConts(174);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(117));
			$manager->persist($s);
	
			//-378-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(540);
			$s->setEnd(572);
			$s->setConfStart(549);
			$s->setConfEnd(572);
			$s->setLength(33);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;540,541,542,543,544,545,546,547,548,549,550,551,552,553,554,555,556,557,558,559,560,561,562,563,564,565,566,567,568,569,570,571,572");
			$s->setCannonicalConts(264);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(117));
			$manager->persist($s);
	
			//-379-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(573);
			$s->setEnd(614);
			$s->setConfStart(573);
			$s->setConfEnd(614);
			$s->setLength(42);
			$s->setConfLength(42);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;573,574,575,576,577,584,585,586,587,588,589,590,591,592,593,594,595,596,597,601,602,603,604,605,606,607,608,609,610,611,612,613,614");
			$s->setCannonicalConts(252);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(117));
			$manager->persist($s);
	
			//-380-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(615);
			$s->setEnd(647);
			$s->setConfStart(615);
			$s->setConfEnd(647);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;615,616,617,618,619,620,621,622,623,624,625,626,627,628,629,630,631,632,633,634,635,636,637,638,639,640,641,642,643,644,645,646,647");
			$s->setCannonicalConts(270);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(117));
			$manager->persist($s);
	
			//-381-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(66);
			$s->setEnd(98);
			$s->setConfStart(75);
			$s->setConfEnd(98);
			$s->setLength(33);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98");
			$s->setCannonicalConts(248);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(109));
			$manager->persist($s);
	
			//-382-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(99);
			$s->setEnd(131);
			$s->setConfStart(99);
			$s->setConfEnd(129);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131");
			$s->setCannonicalConts(256);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(109));
			$manager->persist($s);
	
			//-383-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(133);
			$s->setEnd(165);
			$s->setConfStart(133);
			$s->setConfEnd(165);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165");
			$s->setCannonicalConts(280);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(109));
			$manager->persist($s);
	
			//-384-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(166);
			$s->setEnd(190);
			$s->setConfStart(166);
			$s->setConfEnd(190);
			$s->setLength(25);
			$s->setConfLength(25);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,D,D,D,181,182,183,184,185,186,187,188,189,190,D,D,D,D,D");
			$s->setCannonicalConts(166);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(109));
			$manager->persist($s);
	
			//-385-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(671);
			$s->setEnd(694);
			$s->setConfStart(671);
			$s->setConfEnd(690);
			$s->setLength(24);
			$s->setConfLength(20);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,671,672,673,674,675,676,677,678,679,680,681,682,683,684,685,686,687,688,689,690,691,692,693,694,695,696,697,698,699,700");
			$s->setCannonicalConts(166);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(220));
			$manager->persist($s);
	
			//-386-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(737);
			$s->setEnd(769);
			$s->setConfStart(737);
			$s->setConfEnd(769);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;737,738,739,740,741,742,743,744,745,746,747,748,749,750,751,752,753,754,755,756,757,758,759,760,761,762,763,764,765,766,767,768,769");
			$s->setCannonicalConts(308);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(220));
			$manager->persist($s);
	
			//-387-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(770);
			$s->setEnd(802);
			$s->setConfStart(770);
			$s->setConfEnd(802);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;770,771,772,773,774,775,776,777,778,779,780,781,782,783,784,785,786,787,788,789,790,791,792,793,794,795,796,797,798,799,800,801,802");
			$s->setCannonicalConts(286);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(220));
			$manager->persist($s);
	
			//-388-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(803);
			$s->setEnd(835);
			$s->setConfStart(803);
			$s->setConfEnd(835);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;803,804,805,806,807,808,809,810,811,812,813,814,815,816,817,818,819,820,821,822,823,824,825,826,827,828,829,830,831,832,833,834,835");
			$s->setCannonicalConts(298);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(220));
			$manager->persist($s);
	
			//-389-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(836);
			$s->setEnd(868);
			$s->setConfStart(836);
			$s->setConfEnd(868);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;836,837,838,839,840,841,842,843,844,845,846,847,848,849,850,851,852,853,854,855,856,857,858,859,860,861,862,863,864,865,866,867,868");
			$s->setCannonicalConts(284);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(220));
			$manager->persist($s);
	
			//-390-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(869);
			$s->setEnd(895);
			$s->setConfStart(869);
			$s->setConfEnd(895);
			$s->setLength(27);
			$s->setConfLength(27);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;869,870,871,872,873,874,875,876,877,878,879,880,881,882,883,884,D,D,885,886,887,888,889,890,891,892,893,894,895,D,D,D,D");
			$s->setCannonicalConts(194);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(220));
			$manager->persist($s);
	
			//-391-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(137);
			$s->setEnd(161);
			$s->setConfStart(137);
			$s->setConfEnd(153);
			$s->setLength(25);
			$s->setConfLength(17);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166");
			$s->setCannonicalConts(194);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(85));
			$manager->persist($s);
	
			//-392-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(170);
			$s->setEnd(205);
			$s->setConfStart(174);
			$s->setConfEnd(203);
			$s->setLength(36);
			$s->setConfLength(30);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,192,193,194,195,196,197,198,199,200,201,202,203,204,205");
			$s->setCannonicalConts(228);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(85));
			$manager->persist($s);
	
			//-393-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(213);
			$s->setEnd(249);
			$s->setConfStart(213);
			$s->setConfEnd(249);
			$s->setLength(37);
			$s->setConfLength(37);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;213,214,215,216,217,218,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249");
			$s->setCannonicalConts(276);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(85));
			$manager->persist($s);
	
			//-394-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(250);
			$s->setEnd(296);
			$s->setConfStart(250);
			$s->setConfEnd(292);
			$s->setLength(47);
			$s->setConfLength(43);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;250,251,252,253,254,255,270,271,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293,294,295,296");
			$s->setCannonicalConts(256);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(85));
			$manager->persist($s);
	
			//-395-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(300);
			$s->setEnd(341);
			$s->setConfStart(300);
			$s->setConfEnd(339);
			$s->setLength(42);
			$s->setConfLength(40);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,328,329,330,331,332,333,334,335,336,337,338,339,340,341");
			$s->setCannonicalConts(246);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(85));
			$manager->persist($s);
	
			//-396-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(349);
			$s->setEnd(381);
			$s->setConfStart(349);
			$s->setConfEnd(379);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;349,350,351,352,353,354,355,356,357,358,359,360,361,362,363,364,365,366,367,368,369,370,371,372,373,374,375,376,377,378,379,380,381");
			$s->setCannonicalConts(272);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(85));
			$manager->persist($s);
	
			//-397-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(485);
			$s->setEnd(517);
			$s->setConfStart(494);
			$s->setConfEnd(512);
			$s->setLength(33);
			$s->setConfLength(19);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;485,486,487,488,489,490,491,492,493,494,495,496,497,498,499,500,501,502,503,504,505,506,507,508,509,510,511,512,513,514,515,516,517");
			$s->setCannonicalConts(264);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(156));
			$manager->persist($s);
	
			//-398-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(517);
			$s->setEnd(551);
			$s->setConfStart(517);
			$s->setConfEnd(551);
			$s->setLength(35);
			$s->setConfLength(35);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;517,518,519,520,521,522,525,526,527,528,529,530,531,532,533,534,535,536,537,538,539,540,541,542,543,544,545,546,547,548,549,550,551");
			$s->setCannonicalConts(290);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(156));
			$manager->persist($s);
	
			//-399-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(552);
			$s->setEnd(584);
			$s->setConfStart(552);
			$s->setConfEnd(584);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;552,553,554,555,556,557,558,559,560,561,562,563,564,565,566,567,568,569,570,571,572,573,574,575,576,577,578,579,580,581,582,583,584");
			$s->setCannonicalConts(292);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(156));
			$manager->persist($s);
	
			//-400-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(585);
			$s->setEnd(617);
			$s->setConfStart(585);
			$s->setConfEnd(617);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;585,586,587,588,589,590,591,592,593,594,595,596,597,598,599,600,601,602,603,604,605,606,607,608,609,610,611,612,613,614,615,616,617");
			$s->setCannonicalConts(296);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(156));
			$manager->persist($s);
	
			//-401-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(618);
			$s->setEnd(644);
			$s->setConfStart(618);
			$s->setConfEnd(644);
			$s->setLength(27);
			$s->setConfLength(27);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;618,619,620,621,622,623,624,625,626,627,628,629,630,631,632,D,633,634,635,636,637,638,639,640,641,642,643,644,D,D,D,D,D");
			$s->setCannonicalConts(184);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(156));
			$manager->persist($s);
	
			//-402-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(152);
			$s->setEnd(174);
			$s->setConfStart(152);
			$s->setConfEnd(172);
			$s->setLength(23);
			$s->setConfLength(21);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,D,D,D,D,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175");
			$s->setCannonicalConts(176);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(191));
			$manager->persist($s);
	
			//-403-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(175);
			$s->setEnd(207);
			$s->setConfStart(175);
			$s->setConfEnd(207);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207");
			$s->setCannonicalConts(286);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(191));
			$manager->persist($s);
	
			//-404-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(208);
			$s->setEnd(240);
			$s->setConfStart(208);
			$s->setConfEnd(240);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240");
			$s->setCannonicalConts(276);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(191));
			$manager->persist($s);
	
			//-405-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(241);
			$s->setEnd(273);
			$s->setConfStart(241);
			$s->setConfEnd(273);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,262,263,264,265,266,267,268,269,270,271,272,273");
			$s->setCannonicalConts(286);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(191));
			$manager->persist($s);
	
			//-406-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(274);
			$s->setEnd(306);
			$s->setConfStart(274);
			$s->setConfEnd(304);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306");
			$s->setCannonicalConts(268);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(191));
			$manager->persist($s);
	
			//-407-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(151);
			$s->setEnd(175);
			$s->setConfStart(151);
			$s->setConfEnd(173);
			$s->setLength(25);
			$s->setConfLength(23);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,D,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178");
			$s->setCannonicalConts(192);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(119));
			$manager->persist($s);
	
			//-408-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(184);
			$s->setEnd(219);
			$s->setConfStart(189);
			$s->setConfEnd(217);
			$s->setLength(36);
			$s->setConfLength(29);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,206,207,208,209,210,211,212,213,214,215,216,217,218,219");
			$s->setCannonicalConts(232);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(119));
			$manager->persist($s);
	
			//-409-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(227);
			$s->setEnd(263);
			$s->setConfStart(227);
			$s->setConfEnd(263);
			$s->setLength(37);
			$s->setConfLength(37);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;227,228,229,230,231,232,237,238,239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,262,263");
			$s->setCannonicalConts(290);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(119));
			$manager->persist($s);
	
			//-410-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(264);
			$s->setEnd(310);
			$s->setConfStart(264);
			$s->setConfEnd(306);
			$s->setLength(47);
			$s->setConfLength(43);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;264,265,266,267,268,269,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310");
			$s->setCannonicalConts(268);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(119));
			$manager->persist($s);
	
			//-411-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(314);
			$s->setEnd(355);
			$s->setConfStart(314);
			$s->setConfEnd(353);
			$s->setLength(42);
			$s->setConfLength(40);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,332,342,343,344,345,346,347,348,349,350,351,352,353,354,355");
			$s->setCannonicalConts(256);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(119));
			$manager->persist($s);
	
			//-412-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(363);
			$s->setEnd(395);
			$s->setConfStart(363);
			$s->setConfEnd(393);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;363,364,365,366,367,368,369,370,371,372,373,374,375,376,377,378,379,380,381,382,383,384,385,386,387,388,389,390,391,392,393,394,395");
			$s->setCannonicalConts(278);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(119));
			$manager->persist($s);
	
			//-413-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(7);
			$s->setEnd(31);
			$s->setConfStart(7);
			$s->setConfEnd(29);
			$s->setLength(25);
			$s->setConfLength(23);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,D,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35");
			$s->setCannonicalConts(230);
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(140));
			$manager->persist($s);
	
			//-414-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(33);
			$s->setEnd(65);
			$s->setConfStart(33);
			$s->setConfEnd(65);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65");
			$s->setCannonicalConts(282);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(140));
			$manager->persist($s);
	
			//-415-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(66);
			$s->setEnd(98);
			$s->setConfStart(66);
			$s->setConfEnd(98);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98");
			$s->setCannonicalConts(280);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(140));
			$manager->persist($s);
	
			//-416-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(99);
			$s->setEnd(131);
			$s->setConfStart(99);
			$s->setConfEnd(131);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131");
			$s->setCannonicalConts(292);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(140));
			$manager->persist($s);
	
			//-417-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(132);
			$s->setEnd(164);
			$s->setConfStart(132);
			$s->setConfEnd(164);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164");
			$s->setCannonicalConts(302);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(140));
			$manager->persist($s);
	
			//-418-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(165);
			$s->setEnd(197);
			$s->setConfStart(165);
			$s->setConfEnd(197);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197");
			$s->setCannonicalConts(306);
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(140));
			$manager->persist($s);
	
			//-419-
			$s = new StructuralRepeat();
			$s->setRepNum(7);
			$s->setStart(198);
			$s->setEnd(226);
			$s->setConfStart(198);
			$s->setConfEnd(224);
			$s->setLength(29);
			$s->setConfLength(27);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,D,D,D,D,213,214,215,216,217,218,219,220,221,222,223,224,225,226");
			$s->setCannonicalConts(230);
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(140));
			$manager->persist($s);
	
			//-420-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(18);
			$s->setEnd(41);
			$s->setConfStart(18);
			$s->setConfEnd(41);
			$s->setLength(24);
			$s->setConfLength(24);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;D,D,D,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47");
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(320));
			$manager->persist($s);
	
			//-421-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(42);
			$s->setEnd(74);
			$s->setConfStart(42);
			$s->setConfEnd(74);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74");
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(320));
			$manager->persist($s);
	
			//-422-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(73);
			$s->setEnd(105);
			$s->setConfStart(76);
			$s->setConfEnd(103);
			$s->setLength(33);
			$s->setConfLength(28);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105");
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(320));
			$manager->persist($s);
	
			//-423-
			$s = new StructuralRepeat();
			$s->setRepNum(4);
			$s->setStart(114);
			$s->setEnd(161);
			$s->setConfStart(114);
			$s->setConfEnd(161);
			$s->setLength(48);
			$s->setConfLength(48);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;114,115,116,117,118,119,133,134,135,136,137,138,139,140,141,142,143,144,145,148,149,150,151,152,153,154,155,156,157,158,159,160,161");
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(320));
			$manager->persist($s);
	
			//-424-
			$s = new StructuralRepeat();
			$s->setRepNum(5);
			$s->setStart(162);
			$s->setEnd(194);
			$s->setConfStart(162);
			$s->setConfEnd(192);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194");
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(320));
			$manager->persist($s);
	
			//-425-
			$s = new StructuralRepeat();
			$s->setRepNum(6);
			$s->setStart(200);
			$s->setEnd(232);
			$s->setConfStart(200);
			$s->setConfEnd(232);
			$s->setLength(33);
			$s->setConfLength(33);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232");
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(320));
			$manager->persist($s);
	
			//-426-
			$s = new StructuralRepeat();
			$s->setRepNum(7);
			$s->setStart(233);
			$s->setEnd(265);
			$s->setConfStart(233);
			$s->setConfEnd(263);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;233,234,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,262,263,264,265");
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(320));
			$manager->persist($s);
	
			//-427-
			$s = new StructuralRepeat();
			$s->setRepNum(1);
			$s->setStart(342);
			$s->setEnd(375);
			$s->setConfStart(351);
			$s->setConfEnd(373);
			$s->setLength(34);
			$s->setConfLength(23);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;342,343,344,345,346,347,348,349,350,351,352,353,354,355,356,357,358,359,360,361,362,364,365,366,367,368,369,370,371,372,373,374,375");
			$s->setType("N");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(418));
			$manager->persist($s);
	
			//-428-
			$s = new StructuralRepeat();
			$s->setRepNum(2);
			$s->setStart(378);
			$s->setEnd(417);
			$s->setConfStart(378);
			$s->setConfEnd(417);
			$s->setLength(40);
			$s->setConfLength(40);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;378,379,380,381,382,383,391,392,393,394,395,396,397,398,399,400,401,402,403,404,405,406,407,408,409,410,411,412,413,414,415,416,417");
			$s->setType("I");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(418));
			$manager->persist($s);
	
			//-429-
			$s = new StructuralRepeat();
			$s->setRepNum(3);
			$s->setStart(418);
			$s->setEnd(450);
			$s->setConfStart(418);
			$s->setConfEnd(448);
			$s->setLength(33);
			$s->setConfLength(31);
			$s->setConsensus("1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33;418,419,420,421,422,423,424,425,426,427,428,429,430,431,432,433,434,435,436,437,438,439,440,441,442,443,444,445,446,447,448,449,450");
			$s->setType("C");
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(418));
			$manager->persist($s);
	
		$manager->flush();

		}

		public function getOrder() {
			return 10;
		}
	}