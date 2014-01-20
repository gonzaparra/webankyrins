<?php

	namespace LFP\StructuralAnks\MainBundle\DataFixtures\ORM;

	use Doctrine\Common\DataFixtures\FixtureInterface;
	use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use LFP\StructuralAnks\MainBundle\Entity\Chain;
	use Symfony\Component\DependencyInjection\ContainerAwareInterface;
	use Symfony\Component\DependencyInjection\ContainerInterface;

	/**
	 * @author Jorge Cares <reaperjc@gmail.com>
	 */
	class LoadChainData implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
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
			$doctrine = $this->container->get('doctrine');

	
			//-0-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(295);
			$s->setPdbFastaPath("1NFI_A.fasta");
			$s->setStartStructFrac(20);
			$s->setEndStructFrac(314);
			$s->setMissingResiduesCount(6);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q04206"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(1));
			$manager->persist($s);
	
			//-1-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(107);
			$s->setNReps(0);
			$s->setPdbFastaPath("1NFI_B.fasta");
			$s->setStartStructFrac(249);
			$s->setEndStructFrac(355);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P19838"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(1));
			$manager->persist($s);
	
			//-2-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(301);
			$s->setPdbFastaPath("1NFI_C.fasta");
			$s->setStartStructFrac(20);
			$s->setEndStructFrac(320);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q04206"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(1));
			$manager->persist($s);
	
			//-3-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(107);
			$s->setNReps(0);
			$s->setPdbFastaPath("1NFI_D.fasta");
			$s->setStartStructFrac(249);
			$s->setEndStructFrac(355);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P19838"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(1));
			$manager->persist($s);
	
			//-4-
			$s = new Chain();
			$s->setChain("E");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(213);
			$s->setNReps(0);
			$s->setPdbFastaPath("1NFI_E.fasta");
			$s->setStartStructFrac(70);
			$s->setEndStructFrac(282);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(1));
			$manager->persist($s);
	
			//-5-
			$s = new Chain();
			$s->setChain("F");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(213);
			$s->setNReps(0);
			$s->setPdbFastaPath("1NFI_F.fasta");
			$s->setStartStructFrac(70);
			$s->setEndStructFrac(282);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(1));
			$manager->persist($s);
	
			//-6-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(283);
			$s->setPdbFastaPath("1IKN_A.fasta");
			$s->setStartStructFrac(19);
			$s->setEndStructFrac(303);
			$s->setMissingResiduesCount(3);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q04207"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(2));
			$manager->persist($s);
	
			//-7-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(113);
			$s->setNReps(0);
			$s->setPdbFastaPath("1IKN_C.fasta");
			$s->setStartStructFrac(245);
			$s->setEndStructFrac(357);
			$s->setMissingResiduesCount(6);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25799"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(2));
			$manager->persist($s);
	
			//-8-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(216);
			$s->setNReps(6);
			$s->setPdbFastaPath("1IKN_D.fasta");
			$s->setStartStructFrac(73);
			$s->setEndStructFrac(293);
			$s->setMissingResiduesCount(20);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(2));
			$manager->persist($s);
	
			//-9-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(168);
			$s->setNReps(5);
			$s->setPdbFastaPath("1AP7_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(168);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q60773"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(3));
			$manager->persist($s);
	
			//-10-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(156);
			$s->setNReps(4);
			$s->setPdbFastaPath("1BD8_A.fasta");
			$s->setStartStructFrac(7);
			$s->setEndStructFrac(162);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P55273"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(4));
			$manager->persist($s);
	
			//-11-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(264);
			$s->setPdbFastaPath("1BI8_A.fasta");
			$s->setStartStructFrac(11);
			$s->setEndStructFrac(301);
			$s->setMissingResiduesCount(62);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q00534"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(5));
			$manager->persist($s);
	
			//-12-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(155);
			$s->setNReps(0);
			$s->setPdbFastaPath("1BI8_B.fasta");
			$s->setStartStructFrac(6);
			$s->setEndStructFrac(160);
			$s->setMissingResiduesCount(11);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P55273"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(5));
			$manager->persist($s);
	
			//-13-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(264);
			$s->setPdbFastaPath("1BI8_C.fasta");
			$s->setStartStructFrac(11);
			$s->setEndStructFrac(301);
			$s->setMissingResiduesCount(62);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q00534"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(5));
			$manager->persist($s);
	
			//-14-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(155);
			$s->setNReps(0);
			$s->setPdbFastaPath("1BI8_D.fasta");
			$s->setStartStructFrac(6);
			$s->setEndStructFrac(160);
			$s->setMissingResiduesCount(11);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P55273"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(5));
			$manager->persist($s);
	
			//-15-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(305);
			$s->setPdbFastaPath("1BLX_A.fasta");
			$s->setStartStructFrac(5);
			$s->setEndStructFrac(309);
			$s->setMissingResiduesCount(21);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q00534"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(6));
			$manager->persist($s);
	
			//-16-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(160);
			$s->setNReps(0);
			$s->setPdbFastaPath("1BLX_B.fasta");
			$s->setStartStructFrac(6);
			$s->setEndStructFrac(165);
			$s->setMissingResiduesCount(6);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q60773"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(6));
			$manager->persist($s);
	
			//-17-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(136);
			$s->setNReps(4);
			$s->setPdbFastaPath("1D9S_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(130);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P55271"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(7));
			$manager->persist($s);
	
			//-18-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(293);
			$s->setPdbFastaPath("1G3N_A.fasta");
			$s->setStartStructFrac(9);
			$s->setEndStructFrac(301);
			$s->setMissingResiduesCount(33);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q00534"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(8));
			$manager->persist($s);
	
			//-19-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(155);
			$s->setNReps(0);
			$s->setPdbFastaPath("1G3N_B.fasta");
			$s->setStartStructFrac(6);
			$s->setEndStructFrac(160);
			$s->setMissingResiduesCount(13);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42773"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(8));
			$manager->persist($s);
	
			//-20-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(233);
			$s->setPdbFastaPath("1G3N_C.fasta");
			$s->setStartStructFrac(16);
			$s->setEndStructFrac(253);
			$s->setMissingResiduesCount(24);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O40946"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(8));
			$manager->persist($s);
	
			//-21-
			$s = new Chain();
			$s->setChain("E");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(293);
			$s->setPdbFastaPath("1G3N_E.fasta");
			$s->setStartStructFrac(9);
			$s->setEndStructFrac(301);
			$s->setMissingResiduesCount(33);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q00534"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(8));
			$manager->persist($s);
	
			//-22-
			$s = new Chain();
			$s->setChain("F");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(155);
			$s->setNReps(0);
			$s->setPdbFastaPath("1G3N_F.fasta");
			$s->setStartStructFrac(6);
			$s->setEndStructFrac(160);
			$s->setMissingResiduesCount(13);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42773"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(8));
			$manager->persist($s);
	
			//-23-
			$s = new Chain();
			$s->setChain("G");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(233);
			$s->setPdbFastaPath("1G3N_G.fasta");
			$s->setStartStructFrac(16);
			$s->setEndStructFrac(253);
			$s->setMissingResiduesCount(24);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O40946"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(8));
			$manager->persist($s);
	
			//-24-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(156);
			$s->setNReps(0);
			$s->setPdbFastaPath("1IHB_A.fasta");
			$s->setStartStructFrac(5);
			$s->setEndStructFrac(160);
			$s->setMissingResiduesCount(6);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42773"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(9));
			$manager->persist($s);
	
			//-25-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(156);
			$s->setNReps(0);
			$s->setPdbFastaPath("1IHB_B.fasta");
			$s->setStartStructFrac(7);
			$s->setEndStructFrac(162);
			$s->setMissingResiduesCount(6);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42773"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(9));
			$manager->persist($s);
	
			//-26-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(229);
			$s->setNReps(0);
			$s->setPdbFastaPath("1IXV_A.fasta");
			$s->setStartStructFrac(3);
			$s->setEndStructFrac(231);
			$s->setMissingResiduesCount(2);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P50086"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(10));
			$manager->persist($s);
	
			//-27-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(228);
			$s->setNReps(7);
			$s->setPdbFastaPath("1K1A_A.fasta");
			$s->setStartStructFrac(125);
			$s->setEndStructFrac(352);
			$s->setMissingResiduesCount(13);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P20749"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(11));
			$manager->persist($s);
	
			//-28-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(228);
			$s->setNReps(0);
			$s->setPdbFastaPath("1K1B_A.fasta");
			$s->setStartStructFrac(125);
			$s->setEndStructFrac(352);
			$s->setMissingResiduesCount(13);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P20749"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(12));
			$manager->persist($s);
	
			//-29-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(130);
			$s->setPdbFastaPath("1K3Z_A.fasta");
			$s->setStartStructFrac(191);
			$s->setEndStructFrac(320);
			$s->setMissingResiduesCount(6);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q04207"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(13));
			$manager->persist($s);
	
			//-30-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(118);
			$s->setPdbFastaPath("1K3Z_B.fasta");
			$s->setStartStructFrac(191);
			$s->setEndStructFrac(308);
			$s->setMissingResiduesCount(18);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q04207"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(13));
			$manager->persist($s);
	
			//-31-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(221);
			$s->setNReps(6);
			$s->setPdbFastaPath("1K3Z_D.fasta");
			$s->setStartStructFrac(52);
			$s->setEndStructFrac(309);
			$s->setMissingResiduesCount(61);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q60778"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(13));
			$manager->persist($s);
	
			//-32-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(156);
			$s->setNReps(0);
			$s->setPdbFastaPath("1MX2_A.fasta");
			$s->setStartStructFrac(5);
			$s->setEndStructFrac(160);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42773"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(14));
			$manager->persist($s);
	
			//-33-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(156);
			$s->setNReps(0);
			$s->setPdbFastaPath("1MX2_B.fasta");
			$s->setStartStructFrac(7);
			$s->setEndStructFrac(162);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42773"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(14));
			$manager->persist($s);
	
			//-34-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(156);
			$s->setNReps(0);
			$s->setPdbFastaPath("1MX4_A.fasta");
			$s->setStartStructFrac(5);
			$s->setEndStructFrac(160);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42773"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(15));
			$manager->persist($s);
	
			//-35-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(159);
			$s->setNReps(0);
			$s->setPdbFastaPath("1MX4_B.fasta");
			$s->setStartStructFrac(4);
			$s->setEndStructFrac(162);
			$s->setMissingResiduesCount(9);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42773"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(15));
			$manager->persist($s);
	
			//-36-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(156);
			$s->setNReps(0);
			$s->setPdbFastaPath("1MX6_A.fasta");
			$s->setStartStructFrac(5);
			$s->setEndStructFrac(160);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42773"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(16));
			$manager->persist($s);
	
			//-37-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(156);
			$s->setNReps(0);
			$s->setPdbFastaPath("1MX6_B.fasta");
			$s->setStartStructFrac(7);
			$s->setEndStructFrac(162);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42773"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(16));
			$manager->persist($s);
	
			//-38-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(404);
			$s->setNReps(12);
			$s->setPdbFastaPath("1N11_A.fasta");
			$s->setStartStructFrac(405);
			$s->setEndStructFrac(812);
			$s->setMissingResiduesCount(33);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(17));
			$manager->persist($s);
	
			//-39-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(209);
			$s->setNReps(6);
			$s->setPdbFastaPath("1OT8_A.fasta");
			$s->setStartStructFrac(29);
			$s->setEndStructFrac(237);
			$s->setMissingResiduesCount(30);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(18));
			$manager->persist($s);
	
			//-40-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(204);
			$s->setNReps(0);
			$s->setPdbFastaPath("1OT8_B.fasta");
			$s->setStartStructFrac(36);
			$s->setEndStructFrac(239);
			$s->setMissingResiduesCount(35);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(18));
			$manager->persist($s);
	
			//-41-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(192);
			$s->setNReps(0);
			$s->setPdbFastaPath("1OT8_C.fasta");
			$s->setStartStructFrac(47);
			$s->setEndStructFrac(238);
			$s->setMissingResiduesCount(47);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(18));
			$manager->persist($s);
	
			//-42-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(112);
			$s->setPdbFastaPath("1OY3_B.fasta");
			$s->setStartStructFrac(191);
			$s->setEndStructFrac(302);
			$s->setMissingResiduesCount(24);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q04207"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(19));
			$manager->persist($s);
	
			//-43-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(135);
			$s->setPdbFastaPath("1OY3_C.fasta");
			$s->setStartStructFrac(191);
			$s->setEndStructFrac(325);
			$s->setMissingResiduesCount(1);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q04207"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(19));
			$manager->persist($s);
	
			//-44-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(220);
			$s->setNReps(0);
			$s->setPdbFastaPath("1OY3_D.fasta");
			$s->setStartStructFrac(50);
			$s->setEndStructFrac(304);
			$s->setMissingResiduesCount(62);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q60778"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(19));
			$manager->persist($s);
	
			//-45-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(223);
			$s->setNReps(0);
			$s->setPdbFastaPath("1QYM_A.fasta");
			$s->setStartStructFrac(4);
			$s->setEndStructFrac(226);
			$s->setMissingResiduesCount(4);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O75832"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(20));
			$manager->persist($s);
	
			//-46-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(254);
			$s->setNReps(5);
			$s->setPdbFastaPath("1SW6_A.fasta");
			$s->setStartStructFrac(212);
			$s->setEndStructFrac(512);
			$s->setMissingResiduesCount(73);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P09959"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(21));
			$manager->persist($s);
	
			//-47-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(254);
			$s->setNReps(0);
			$s->setPdbFastaPath("1SW6_B.fasta");
			$s->setStartStructFrac(212);
			$s->setEndStructFrac(512);
			$s->setMissingResiduesCount(73);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P09959"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(21));
			$manager->persist($s);
	
			//-48-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(226);
			$s->setNReps(7);
			$s->setPdbFastaPath("1TR4_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(226);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O75832"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(22));
			$manager->persist($s);
	
			//-49-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(223);
			$s->setNReps(0);
			$s->setPdbFastaPath("1UOH_A.fasta");
			$s->setStartStructFrac(4);
			$s->setEndStructFrac(226);
			$s->setMissingResiduesCount(3);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O75832"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(23));
			$manager->persist($s);
	
			//-50-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(191);
			$s->setPdbFastaPath("1YCS_A.fasta");
			$s->setStartStructFrac(97);
			$s->setEndStructFrac(287);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P04637"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(24));
			$manager->persist($s);
	
			//-51-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(193);
			$s->setNReps(4);
			$s->setPdbFastaPath("1YCS_B.fasta");
			$s->setStartStructFrac(327);
			$s->setEndStructFrac(519);
			$s->setMissingResiduesCount(46);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q13625"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(24));
			$manager->persist($s);
	
			//-52-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(193);
			$s->setNReps(0);
			$s->setPdbFastaPath("1YYH_A.fasta");
			$s->setStartStructFrac(52);
			$s->setEndStructFrac(244);
			$s->setMissingResiduesCount(60);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P46531"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(25));
			$manager->persist($s);
	
			//-53-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(189);
			$s->setNReps(0);
			$s->setPdbFastaPath("1YYH_B.fasta");
			$s->setStartStructFrac(55);
			$s->setEndStructFrac(243);
			$s->setMissingResiduesCount(64);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P46531"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(25));
			$manager->persist($s);
	
			//-54-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(229);
			$s->setNReps(7);
			$s->setPdbFastaPath("2DVW_A.fasta");
			$s->setStartStructFrac(3);
			$s->setEndStructFrac(231);
			$s->setMissingResiduesCount(2);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9Z2X2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(26));
			$manager->persist($s);
	
			//-55-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(73);
			$s->setPdbFastaPath("2DVW_B.fasta");
			$s->setStartStructFrac(336);
			$s->setEndStructFrac(408);
			$s->setMissingResiduesCount(10);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P43686"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(26));
			$manager->persist($s);
	
			//-56-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(226);
			$s->setNReps(0);
			$s->setPdbFastaPath("2DZN_A.fasta");
			$s->setStartStructFrac(3);
			$s->setEndStructFrac(228);
			$s->setMissingResiduesCount(2);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P50086"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(27));
			$manager->persist($s);
	
			//-57-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(57);
			$s->setPdbFastaPath("2DZN_B.fasta");
			$s->setStartStructFrac(360);
			$s->setEndStructFrac(416);
			$s->setMissingResiduesCount(25);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P33298"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(27));
			$manager->persist($s);
	
			//-58-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(227);
			$s->setNReps(0);
			$s->setPdbFastaPath("2DZN_C.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(228);
			$s->setMissingResiduesCount(1);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P50086"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(27));
			$manager->persist($s);
	
			//-59-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(67);
			$s->setPdbFastaPath("2DZN_D.fasta");
			$s->setStartStructFrac(348);
			$s->setEndStructFrac(414);
			$s->setMissingResiduesCount(15);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P33298"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(27));
			$manager->persist($s);
	
			//-60-
			$s = new Chain();
			$s->setChain("E");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(227);
			$s->setNReps(0);
			$s->setPdbFastaPath("2DZN_E.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(228);
			$s->setMissingResiduesCount(1);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P50086"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(27));
			$manager->persist($s);
	
			//-61-
			$s = new Chain();
			$s->setChain("F");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(69);
			$s->setPdbFastaPath("2DZN_F.fasta");
			$s->setStartStructFrac(348);
			$s->setEndStructFrac(416);
			$s->setMissingResiduesCount(13);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P33298"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(27));
			$manager->persist($s);
	
			//-62-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(424);
			$s->setPdbFastaPath("2F8X_C.fasta");
			$s->setStartStructFrac(11);
			$s->setEndStructFrac(434);
			$s->setMissingResiduesCount(10);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q06330"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(28));
			$manager->persist($s);
	
			//-63-
			$s = new Chain();
			$s->setChain("K");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(218);
			$s->setNReps(0);
			$s->setPdbFastaPath("2F8X_K.fasta");
			$s->setStartStructFrac(1884);
			$s->setEndStructFrac(2120);
			$s->setMissingResiduesCount(38);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P46531"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(28));
			$manager->persist($s);
	
			//-64-
			$s = new Chain();
			$s->setChain("M");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(55);
			$s->setPdbFastaPath("2F8X_M.fasta");
			$s->setStartStructFrac(16);
			$s->setEndStructFrac(70);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q92585"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(28));
			$manager->persist($s);
	
			//-65-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(439);
			$s->setPdbFastaPath("2FO1_A.fasta");
			$s->setStartStructFrac(195);
			$s->setEndStructFrac(663);
			$s->setMissingResiduesCount(38);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8MXE7"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(29));
			$manager->persist($s);
	
			//-66-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(63);
			$s->setPdbFastaPath("2FO1_D.fasta");
			$s->setStartStructFrac(52);
			$s->setEndStructFrac(114);
			$s->setMissingResiduesCount(22);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q09260"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(29));
			$manager->persist($s);
	
			//-67-
			$s = new Chain();
			$s->setChain("E");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(283);
			$s->setNReps(0);
			$s->setPdbFastaPath("2FO1_E.fasta");
			$s->setStartStructFrac(933);
			$s->setEndStructFrac(1297);
			$s->setMissingResiduesCount(76);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P14585"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(29));
			$manager->persist($s);
	
			//-68-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(245);
			$s->setNReps(6);
			$s->setPdbFastaPath("2PNN_A.fasta");
			$s->setStartStructFrac(111);
			$s->setEndStructFrac(358);
			$s->setMissingResiduesCount(25);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O35433"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(30));
			$manager->persist($s);
	
			//-69-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(236);
			$s->setNReps(7);
			$s->setPdbFastaPath("3B7B_A.fasta");
			$s->setStartStructFrac(734);
			$s->setEndStructFrac(967);
			$s->setMissingResiduesCount(1);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H9B1"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(31));
			$manager->persist($s);
	
			//-70-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(224);
			$s->setNReps(0);
			$s->setPdbFastaPath("3B7B_B.fasta");
			$s->setStartStructFrac(744);
			$s->setEndStructFrac(967);
			$s->setMissingResiduesCount(13);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H9B1"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(31));
			$manager->persist($s);
	
			//-71-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(236);
			$s->setNReps(0);
			$s->setPdbFastaPath("3B95_A.fasta");
			$s->setStartStructFrac(734);
			$s->setEndStructFrac(967);
			$s->setMissingResiduesCount(1);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H9B1"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(32));
			$manager->persist($s);
	
			//-72-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(225);
			$s->setPdbFastaPath("3B95_B.fasta");
			$s->setStartStructFrac(743);
			$s->setEndStructFrac(967);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P68431"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(32));
			$manager->persist($s);
	
			//-73-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(125);
			$s->setNReps(4);
			$s->setPdbFastaPath("3C5R_A.fasta");
			$s->setStartStructFrac(425);
			$s->setEndStructFrac(546);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q99728"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(33));
			$manager->persist($s);
	
			//-74-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(124);
			$s->setNReps(0);
			$s->setPdbFastaPath("3C5R_B.fasta");
			$s->setStartStructFrac(425);
			$s->setEndStructFrac(545);
			$s->setMissingResiduesCount(13);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q99728"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(33));
			$manager->persist($s);
	
			//-75-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(183);
			$s->setNReps(4);
			$s->setPdbFastaPath("3DEO_A.fasta");
			$s->setStartStructFrac(85);
			$s->setEndStructFrac(267);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O22265"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(34));
			$manager->persist($s);
	
			//-76-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(183);
			$s->setNReps(0);
			$s->setPdbFastaPath("3DEP_A.fasta");
			$s->setStartStructFrac(85);
			$s->setEndStructFrac(267);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O22265"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(35));
			$manager->persist($s);
	
			//-77-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(232);
			$s->setNReps(7);
			$s->setPdbFastaPath("3EU9_A.fasta");
			$s->setStartStructFrac(50);
			$s->setEndStructFrac(281);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8IUH5"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(36));
			$manager->persist($s);
	
			//-78-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(227);
			$s->setNReps(0);
			$s->setPdbFastaPath("3EU9_B.fasta");
			$s->setStartStructFrac(53);
			$s->setEndStructFrac(279);
			$s->setMissingResiduesCount(13);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("A8KA01"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(36));
			$manager->persist($s);
	
			//-79-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(226);
			$s->setNReps(0);
			$s->setPdbFastaPath("3EU9_C.fasta");
			$s->setStartStructFrac(59);
			$s->setEndStructFrac(284);
			$s->setMissingResiduesCount(14);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("A8KA01"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(36));
			$manager->persist($s);
	
			//-80-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(253);
			$s->setNReps(6);
			$s->setPdbFastaPath("3JXI_A.fasta");
			$s->setStartStructFrac(132);
			$s->setEndStructFrac(384);
			$s->setMissingResiduesCount(7);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9DFS3"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(37));
			$manager->persist($s);
	
			//-81-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(256);
			$s->setNReps(0);
			$s->setPdbFastaPath("3JXI_B.fasta");
			$s->setStartStructFrac(132);
			$s->setEndStructFrac(387);
			$s->setMissingResiduesCount(4);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9DFS3"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(37));
			$manager->persist($s);
	
			//-82-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(249);
			$s->setNReps(0);
			$s->setPdbFastaPath("3JXI_C.fasta");
			$s->setStartStructFrac(132);
			$s->setEndStructFrac(388);
			$s->setMissingResiduesCount(11);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9DFS3"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(37));
			$manager->persist($s);
	
			//-83-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(249);
			$s->setNReps(0);
			$s->setPdbFastaPath("3JXI_D.fasta");
			$s->setStartStructFrac(132);
			$s->setEndStructFrac(388);
			$s->setMissingResiduesCount(11);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9DFS3"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(37));
			$manager->persist($s);
	
			//-84-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(257);
			$s->setNReps(6);
			$s->setPdbFastaPath("3JXJ_A.fasta");
			$s->setStartStructFrac(132);
			$s->setEndStructFrac(388);
			$s->setMissingResiduesCount(3);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9DFS3"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(38));
			$manager->persist($s);
	
			//-85-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(249);
			$s->setNReps(0);
			$s->setPdbFastaPath("3JXJ_B.fasta");
			$s->setStartStructFrac(132);
			$s->setEndStructFrac(387);
			$s->setMissingResiduesCount(11);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9DFS3"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(38));
			$manager->persist($s);
	
			//-86-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(110);
			$s->setPdbFastaPath("1AWC_A.fasta");
			$s->setStartStructFrac(320);
			$s->setEndStructFrac(429);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q00422"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(39));
			$manager->persist($s);
	
			//-87-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(153);
			$s->setNReps(5);
			$s->setPdbFastaPath("1AWC_B.fasta");
			$s->setStartStructFrac(5);
			$s->setEndStructFrac(157);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q00420"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(39));
			$manager->persist($s);
	
			//-88-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(276);
			$s->setNReps(4);
			$s->setPdbFastaPath("1DCQ_A.fasta");
			$s->setStartStructFrac(247);
			$s->setEndStructFrac(522);
			$s->setMissingResiduesCount(2);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q7SIG6"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(40));
			$manager->persist($s);
	
			//-89-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(118);
			$s->setNReps(3);
			$s->setPdbFastaPath("1MYO_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(118);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P62775"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(41));
			$manager->persist($s);
	
			//-90-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(309);
			$s->setPdbFastaPath("1S70_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(309);
			$s->setMissingResiduesCount(21);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P62207"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(42));
			$manager->persist($s);
	
			//-91-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(291);
			$s->setNReps(7);
			$s->setPdbFastaPath("1S70_B.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(291);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q90623"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(42));
			$manager->persist($s);
	
			//-92-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(131);
			$s->setNReps(0);
			$s->setPdbFastaPath("1YMP_A.fasta");
			$s->setStartStructFrac(107);
			$s->setEndStructFrac(237);
			$s->setMissingResiduesCount(4);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q01705"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(43));
			$manager->persist($s);
	
			//-93-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(131);
			$s->setNReps(4);
			$s->setPdbFastaPath("1YMP_B.fasta");
			$s->setStartStructFrac(107);
			$s->setEndStructFrac(237);
			$s->setMissingResiduesCount(4);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q01705"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(43));
			$manager->persist($s);
	
			//-94-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(239);
			$s->setNReps(0);
			$s->setPdbFastaPath("2ETA_A.fasta");
			$s->setStartStructFrac(75);
			$s->setEndStructFrac(319);
			$s->setMissingResiduesCount(17);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9WUD2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(44));
			$manager->persist($s);
	
			//-95-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(240);
			$s->setNReps(0);
			$s->setPdbFastaPath("2ETA_B.fasta");
			$s->setStartStructFrac(75);
			$s->setEndStructFrac(320);
			$s->setMissingResiduesCount(16);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9WUD2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(44));
			$manager->persist($s);
	
			//-96-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(252);
			$s->setNReps(0);
			$s->setPdbFastaPath("2ETB_A.fasta");
			$s->setStartStructFrac(75);
			$s->setEndStructFrac(326);
			$s->setMissingResiduesCount(4);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9WUD2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(45));
			$manager->persist($s);
	
			//-97-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(244);
			$s->setNReps(6);
			$s->setPdbFastaPath("2F37_A.fasta");
			$s->setStartStructFrac(71);
			$s->setEndStructFrac(318);
			$s->setMissingResiduesCount(4);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9Y5S1"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(46));
			$manager->persist($s);
	
			//-98-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(246);
			$s->setNReps(0);
			$s->setPdbFastaPath("2F37_B.fasta");
			$s->setStartStructFrac(70);
			$s->setEndStructFrac(318);
			$s->setMissingResiduesCount(2);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9Y5S1"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(46));
			$manager->persist($s);
	
			//-99-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(118);
			$s->setNReps(0);
			$s->setPdbFastaPath("2MYO_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(118);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P62775"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(47));
			$manager->persist($s);
	
			//-100-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(192);
			$s->setNReps(0);
			$s->setPdbFastaPath("2QC9_A.fasta");
			$s->setStartStructFrac(1914);
			$s->setEndStructFrac(2106);
			$s->setMissingResiduesCount(17);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q01705"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(48));
			$manager->persist($s);
	
			//-101-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(196);
			$s->setNReps(0);
			$s->setPdbFastaPath("2QC9_B.fasta");
			$s->setStartStructFrac(1910);
			$s->setEndStructFrac(2106);
			$s->setMissingResiduesCount(13);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q01705"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(48));
			$manager->persist($s);
	
			//-102-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(222);
			$s->setNReps(6);
			$s->setPdbFastaPath("2RFA_A.fasta");
			$s->setStartStructFrac(44);
			$s->setEndStructFrac(265);
			$s->setMissingResiduesCount(10);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q91WD2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(49));
			$manager->persist($s);
	
			//-103-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(183);
			$s->setNReps(5);
			$s->setPdbFastaPath("2RFM_A.fasta");
			$s->setStartStructFrac(7);
			$s->setEndStructFrac(189);
			$s->setMissingResiduesCount(9);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q978J0"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(50));
			$manager->persist($s);
	
			//-104-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(184);
			$s->setNReps(0);
			$s->setPdbFastaPath("2RFM_B.fasta");
			$s->setStartStructFrac(6);
			$s->setEndStructFrac(189);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q978J0"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(50));
			$manager->persist($s);
	
			//-105-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(208);
			$s->setNReps(4);
			$s->setPdbFastaPath("2VGE_A.fasta");
			$s->setStartStructFrac(616);
			$s->setEndStructFrac(823);
			$s->setMissingResiduesCount(21);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8WUF5"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(51));
			$manager->persist($s);
	
			//-106-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(179);
			$s->setNReps(5);
			$s->setPdbFastaPath("3EHQ_A.fasta");
			$s->setStartStructFrac(12);
			$s->setEndStructFrac(193);
			$s->setMissingResiduesCount(40);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q92882"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(52));
			$manager->persist($s);
	
			//-107-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(178);
			$s->setNReps(0);
			$s->setPdbFastaPath("3EHQ_B.fasta");
			$s->setStartStructFrac(12);
			$s->setEndStructFrac(192);
			$s->setMissingResiduesCount(41);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q92882"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(52));
			$manager->persist($s);
	
			//-108-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(175);
			$s->setNReps(4);
			$s->setPdbFastaPath("3EHR_A.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(190);
			$s->setMissingResiduesCount(44);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q92882"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(53));
			$manager->persist($s);
	
			//-109-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(176);
			$s->setNReps(0);
			$s->setPdbFastaPath("3EHR_B.fasta");
			$s->setStartStructFrac(12);
			$s->setEndStructFrac(190);
			$s->setMissingResiduesCount(43);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q92882"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(53));
			$manager->persist($s);
	
			//-110-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(169);
			$s->setNReps(0);
			$s->setPdbFastaPath("3F6Q_A.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(170);
			$s->setMissingResiduesCount(10);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q13418"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(54));
			$manager->persist($s);
	
			//-111-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(72);
			$s->setPdbFastaPath("3F6Q_B.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(68);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P48059"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(54));
			$manager->persist($s);
	
			//-112-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(171);
			$s->setNReps(0);
			$s->setPdbFastaPath("3IXE_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(166);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q13418"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(55));
			$manager->persist($s);
	
			//-113-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(70);
			$s->setPdbFastaPath("3IXE_B.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(68);
			$s->setMissingResiduesCount(2);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q7Z4I7"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(55));
			$manager->persist($s);
	
			//-114-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(282);
			$s->setNReps(1);
			$s->setPdbFastaPath("3KEA_A.fasta");
			$s->setStartStructFrac(0);
			$s->setEndStructFrac(282);
			$s->setMissingResiduesCount(2);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6IV60"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(56));
			$manager->persist($s);
	
			//-115-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(282);
			$s->setNReps(7);
			$s->setPdbFastaPath("3KEA_B.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(282);
			$s->setMissingResiduesCount(2);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6IV60"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(56));
			$manager->persist($s);
	
			//-116-
			$s = new Chain();
			$s->setChain("E");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(420);
			$s->setNReps(4);
			$s->setPdbFastaPath("3LVQ_E.fasta");
			$s->setStartStructFrac(423);
			$s->setEndStructFrac(679);
			$s->setMissingResiduesCount(77);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8TDY4"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(57));
			$manager->persist($s);
	
			//-117-
			$s = new Chain();
			$s->setChain("E");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(419);
			$s->setNReps(0);
			$s->setPdbFastaPath("3LVR_E.fasta");
			$s->setStartStructFrac(423);
			$s->setEndStructFrac(174);
			$s->setMissingResiduesCount(78);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8TDY4"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(58));
			$manager->persist($s);
	
			//-118-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(250);
			$s->setNReps(6);
			$s->setPdbFastaPath("4DX1_A.fasta");
			$s->setStartStructFrac(148);
			$s->setEndStructFrac(397);
			$s->setMissingResiduesCount(9);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9HBA0"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(59));
			$manager->persist($s);
	
			//-119-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(249);
			$s->setNReps(0);
			$s->setPdbFastaPath("4DX1_B.fasta");
			$s->setStartStructFrac(148);
			$s->setEndStructFrac(396);
			$s->setMissingResiduesCount(10);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9HBA0"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(59));
			$manager->persist($s);
	
			//-120-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(269);
			$s->setPdbFastaPath("1BI7_A.fasta");
			$s->setStartStructFrac(10);
			$s->setEndStructFrac(301);
			$s->setMissingResiduesCount(57);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q00534"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(60));
			$manager->persist($s);
	
			//-121-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(125);
			$s->setNReps(0);
			$s->setPdbFastaPath("1BI7_B.fasta");
			$s->setStartStructFrac(10);
			$s->setEndStructFrac(134);
			$s->setMissingResiduesCount(31);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(60));
			$manager->persist($s);
	
			//-122-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(156);
			$s->setNReps(4);
			$s->setPdbFastaPath("1DC2_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(156);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(61));
			$manager->persist($s);
	
			//-123-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(252);
			$s->setNReps(6);
			$s->setPdbFastaPath("2ETC_A.fasta");
			$s->setStartStructFrac(69);
			$s->setEndStructFrac(320);
			$s->setMissingResiduesCount(22);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9WUD2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(62));
			$manager->persist($s);
	
			//-124-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(248);
			$s->setNReps(0);
			$s->setPdbFastaPath("2ETC_B.fasta");
			$s->setStartStructFrac(70);
			$s->setEndStructFrac(319);
			$s->setMissingResiduesCount(26);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9WUD2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(62));
			$manager->persist($s);
	
			//-125-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(215);
			$s->setNReps(0);
			$s->setPdbFastaPath("2F8Y_A.fasta");
			$s->setStartStructFrac(1909);
			$s->setEndStructFrac(2123);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P46531"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(63));
			$manager->persist($s);
	
			//-126-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(209);
			$s->setNReps(0);
			$s->setPdbFastaPath("2F8Y_B.fasta");
			$s->setStartStructFrac(1909);
			$s->setEndStructFrac(2117);
			$s->setMissingResiduesCount(14);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P46531"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(63));
			$manager->persist($s);
	
			//-127-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(241);
			$s->setNReps(6);
			$s->setPdbFastaPath("2NYJ_A.fasta");
			$s->setStartStructFrac(110);
			$s->setEndStructFrac(359);
			$s->setMissingResiduesCount(29);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O35433"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(65));
			$manager->persist($s);
	
			//-128-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(140);
			$s->setPdbFastaPath("2XZD_A.fasta");
			$s->setStartStructFrac(34);
			$s->setEndStructFrac(174);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42574"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(66));
			$manager->persist($s);
	
			//-129-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(94);
			$s->setPdbFastaPath("2XZD_B.fasta");
			$s->setStartStructFrac(184);
			$s->setEndStructFrac(277);
			$s->setMissingResiduesCount(24);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42574"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(66));
			$manager->persist($s);
	
			//-130-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(141);
			$s->setPdbFastaPath("2XZD_C.fasta");
			$s->setStartStructFrac(34);
			$s->setEndStructFrac(175);
			$s->setMissingResiduesCount(7);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42574"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(66));
			$manager->persist($s);
	
			//-131-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(93);
			$s->setPdbFastaPath("2XZD_D.fasta");
			$s->setStartStructFrac(185);
			$s->setEndStructFrac(277);
			$s->setMissingResiduesCount(25);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42574"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(66));
			$manager->persist($s);
	
			//-132-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(140);
			$s->setPdbFastaPath("2Y0B_A.fasta");
			$s->setStartStructFrac(34);
			$s->setEndStructFrac(174);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42574"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(67));
			$manager->persist($s);
	
			//-133-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(94);
			$s->setPdbFastaPath("2Y0B_B.fasta");
			$s->setStartStructFrac(184);
			$s->setEndStructFrac(277);
			$s->setMissingResiduesCount(24);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42574"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(67));
			$manager->persist($s);
	
			//-134-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(140);
			$s->setPdbFastaPath("2Y0B_C.fasta");
			$s->setStartStructFrac(34);
			$s->setEndStructFrac(174);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42574"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(67));
			$manager->persist($s);
	
			//-135-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(93);
			$s->setPdbFastaPath("2Y0B_D.fasta");
			$s->setStartStructFrac(185);
			$s->setEndStructFrac(277);
			$s->setMissingResiduesCount(25);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42574"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(67));
			$manager->persist($s);
	
			//-136-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(267);
			$s->setPdbFastaPath("3AAA_A.fasta");
			$s->setStartStructFrac(9);
			$s->setEndStructFrac(275);
			$s->setMissingResiduesCount(19);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P13127"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(68));
			$manager->persist($s);
	
			//-137-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(250);
			$s->setPdbFastaPath("3AAA_B.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(251);
			$s->setMissingResiduesCount(27);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P14315"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(68));
			$manager->persist($s);
	
			//-138-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(117);
			$s->setNReps(4);
			$s->setPdbFastaPath("3AAA_C.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(118);
			$s->setMissingResiduesCount(6);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P58546"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(68));
			$manager->persist($s);
	
			//-139-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(228);
			$s->setNReps(7);
			$s->setPdbFastaPath("3AJI_A.fasta");
			$s->setStartStructFrac(3);
			$s->setEndStructFrac(231);
			$s->setMissingResiduesCount(2);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9Z2X2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(69));
			$manager->persist($s);
	
			//-140-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(73);
			$s->setPdbFastaPath("3AJI_B.fasta");
			$s->setStartStructFrac(336);
			$s->setEndStructFrac(408);
			$s->setMissingResiduesCount(10);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P54775"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(69));
			$manager->persist($s);
	
			//-141-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(228);
			$s->setNReps(0);
			$s->setPdbFastaPath("3AJI_C.fasta");
			$s->setStartStructFrac(3);
			$s->setEndStructFrac(231);
			$s->setMissingResiduesCount(2);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9Z2X2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(69));
			$manager->persist($s);
	
			//-142-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(73);
			$s->setPdbFastaPath("3AJI_D.fasta");
			$s->setStartStructFrac(336);
			$s->setEndStructFrac(408);
			$s->setMissingResiduesCount(10);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P54775"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(69));
			$manager->persist($s);
	
			//-143-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(254);
			$s->setNReps(5);
			$s->setPdbFastaPath("3JUE_B.fasta");
			$s->setStartStructFrac(404);
			$s->setEndStructFrac(701);
			$s->setMissingResiduesCount(114);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q15027"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(70));
			$manager->persist($s);
	
			//-144-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(1027);
			$s->setPdbFastaPath("3NOC_A.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(44);
			$s->setMissingResiduesCount(21);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P31224"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(72));
			$manager->persist($s);
	
			//-145-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(1025);
			$s->setPdbFastaPath("3NOC_B.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(33);
			$s->setMissingResiduesCount(23);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P31224"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(72));
			$manager->persist($s);
	
			//-146-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(1033);
			$s->setPdbFastaPath("3NOC_C.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(34);
			$s->setMissingResiduesCount(15);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P31224"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(72));
			$manager->persist($s);
	
			//-147-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(1011);
			$s->setPdbFastaPath("3NOG_A.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(33);
			$s->setMissingResiduesCount(37);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P31224"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(73));
			$manager->persist($s);
	
			//-148-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(1027);
			$s->setPdbFastaPath("3NOG_B.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(33);
			$s->setMissingResiduesCount(21);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P31224"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(73));
			$manager->persist($s);
	
			//-149-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(1039);
			$s->setPdbFastaPath("3NOG_C.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(40);
			$s->setMissingResiduesCount(9);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P31224"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(73));
			$manager->persist($s);
	
			//-150-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(341);
			$s->setPdbFastaPath("3P3N_A.fasta");
			$s->setStartStructFrac(9);
			$s->setEndStructFrac(349);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9NWT6"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(74));
			$manager->persist($s);
	
			//-151-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(10);
			$s->setNReps(0);
			$s->setPdbFastaPath("3P3N_B.fasta");
			$s->setStartStructFrac(1936);
			$s->setEndStructFrac(1945);
			$s->setMissingResiduesCount(10);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q01705"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(74));
			$manager->persist($s);
	
			//-152-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(341);
			$s->setPdbFastaPath("3P3P_A.fasta");
			$s->setStartStructFrac(9);
			$s->setEndStructFrac(349);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9NWT6"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(75));
			$manager->persist($s);
	
			//-153-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(13);
			$s->setNReps(0);
			$s->setPdbFastaPath("3P3P_B.fasta");
			$s->setStartStructFrac(199);
			$s->setEndStructFrac(211);
			$s->setMissingResiduesCount(5);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q01705"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(75));
			$manager->persist($s);
	
			//-154-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(162);
			$s->setNReps(5);
			$s->setPdbFastaPath("3SO8_A.fasta");
			$s->setStartStructFrac(8);
			$s->setEndStructFrac(169);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H9E1"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(78));
			$manager->persist($s);
	
			//-155-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(164);
			$s->setNReps(5);
			$s->setPdbFastaPath("3TWQ_A.fasta");
			$s->setStartStructFrac(481);
			$s->setEndStructFrac(644);
			$s->setMissingResiduesCount(11);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(80));
			$manager->persist($s);
	
			//-156-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(164);
			$s->setNReps(0);
			$s->setPdbFastaPath("3TWQ_B.fasta");
			$s->setStartStructFrac(481);
			$s->setEndStructFrac(644);
			$s->setMissingResiduesCount(11);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(80));
			$manager->persist($s);
	
			//-157-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setNReps(0);
			$s->setPdbFastaPath("3TWR_A.fasta");
			$s->setStartStructFrac(490);
			$s->setEndStructFrac(646);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(81));
			$manager->persist($s);
	
			//-158-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setNReps(5);
			$s->setPdbFastaPath("3TWR_B.fasta");
			$s->setStartStructFrac(488);
			$s->setEndStructFrac(644);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(81));
			$manager->persist($s);
	
			//-159-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(158);
			$s->setNReps(0);
			$s->setPdbFastaPath("3TWR_C.fasta");
			$s->setStartStructFrac(488);
			$s->setEndStructFrac(645);
			$s->setMissingResiduesCount(7);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(81));
			$manager->persist($s);
	
			//-160-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(158);
			$s->setNReps(0);
			$s->setPdbFastaPath("3TWR_D.fasta");
			$s->setStartStructFrac(487);
			$s->setEndStructFrac(644);
			$s->setMissingResiduesCount(7);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(81));
			$manager->persist($s);
	
			//-161-
			$s = new Chain();
			$s->setChain("E");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(12);
			$s->setPdbFastaPath("3TWR_E.fasta");
			$s->setStartStructFrac(4);
			$s->setEndStructFrac(15);
			$s->setMissingResiduesCount(3);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P78314"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(81));
			$manager->persist($s);
	
			//-162-
			$s = new Chain();
			$s->setChain("F");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(12);
			$s->setPdbFastaPath("3TWR_F.fasta");
			$s->setStartStructFrac(4);
			$s->setEndStructFrac(15);
			$s->setMissingResiduesCount(3);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P78314"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(81));
			$manager->persist($s);
	
			//-163-
			$s = new Chain();
			$s->setChain("G");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(10);
			$s->setPdbFastaPath("3TWR_G.fasta");
			$s->setStartStructFrac(6);
			$s->setEndStructFrac(15);
			$s->setMissingResiduesCount(5);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P78314"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(81));
			$manager->persist($s);
	
			//-164-
			$s = new Chain();
			$s->setChain("H");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(11);
			$s->setPdbFastaPath("3TWR_H.fasta");
			$s->setStartStructFrac(5);
			$s->setEndStructFrac(15);
			$s->setMissingResiduesCount(4);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P78314"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(81));
			$manager->persist($s);
	
			//-165-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setNReps(0);
			$s->setPdbFastaPath("3TWS_A.fasta");
			$s->setStartStructFrac(490);
			$s->setEndStructFrac(646);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(82));
			$manager->persist($s);
	
			//-166-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setNReps(0);
			$s->setPdbFastaPath("3TWS_B.fasta");
			$s->setStartStructFrac(488);
			$s->setEndStructFrac(644);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(82));
			$manager->persist($s);
	
			//-167-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(156);
			$s->setNReps(0);
			$s->setPdbFastaPath("3TWS_C.fasta");
			$s->setStartStructFrac(490);
			$s->setEndStructFrac(645);
			$s->setMissingResiduesCount(9);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(82));
			$manager->persist($s);
	
			//-168-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(155);
			$s->setNReps(0);
			$s->setPdbFastaPath("3TWS_D.fasta");
			$s->setStartStructFrac(490);
			$s->setEndStructFrac(644);
			$s->setMissingResiduesCount(10);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(82));
			$manager->persist($s);
	
			//-169-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(156);
			$s->setNReps(0);
			$s->setPdbFastaPath("3TWT_A.fasta");
			$s->setStartStructFrac(489);
			$s->setEndStructFrac(644);
			$s->setMissingResiduesCount(9);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(83));
			$manager->persist($s);
	
			//-170-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(155);
			$s->setNReps(0);
			$s->setPdbFastaPath("3TWT_B.fasta");
			$s->setStartStructFrac(488);
			$s->setEndStructFrac(644);
			$s->setMissingResiduesCount(10);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(83));
			$manager->persist($s);
	
			//-171-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(160);
			$s->setNReps(0);
			$s->setPdbFastaPath("3TWT_C.fasta");
			$s->setStartStructFrac(485);
			$s->setEndStructFrac(644);
			$s->setMissingResiduesCount(5);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(83));
			$manager->persist($s);
	
			//-172-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(160);
			$s->setNReps(0);
			$s->setPdbFastaPath("3TWT_D.fasta");
			$s->setStartStructFrac(485);
			$s->setEndStructFrac(644);
			$s->setMissingResiduesCount(5);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(83));
			$manager->persist($s);
	
			//-173-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(160);
			$s->setNReps(0);
			$s->setPdbFastaPath("3TWU_A.fasta");
			$s->setStartStructFrac(489);
			$s->setEndStructFrac(648);
			$s->setMissingResiduesCount(7);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(84));
			$manager->persist($s);
	
			//-174-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(12);
			$s->setPdbFastaPath("3TWU_B.fasta");
			$s->setStartStructFrac(4);
			$s->setEndStructFrac(15);
			$s->setMissingResiduesCount(3);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q07820"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(84));
			$manager->persist($s);
	
			//-175-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(155);
			$s->setNReps(0);
			$s->setPdbFastaPath("3TWV_A.fasta");
			$s->setStartStructFrac(490);
			$s->setEndStructFrac(644);
			$s->setMissingResiduesCount(10);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(85));
			$manager->persist($s);
	
			//-176-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setNReps(0);
			$s->setPdbFastaPath("3TWV_B.fasta");
			$s->setStartStructFrac(488);
			$s->setEndStructFrac(644);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(85));
			$manager->persist($s);
	
			//-177-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setNReps(0);
			$s->setPdbFastaPath("3TWV_C.fasta");
			$s->setStartStructFrac(488);
			$s->setEndStructFrac(644);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(85));
			$manager->persist($s);
	
			//-178-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(156);
			$s->setNReps(0);
			$s->setPdbFastaPath("3TWV_D.fasta");
			$s->setStartStructFrac(489);
			$s->setEndStructFrac(644);
			$s->setMissingResiduesCount(9);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(85));
			$manager->persist($s);
	
			//-179-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setNReps(0);
			$s->setPdbFastaPath("3TWW_A.fasta");
			$s->setStartStructFrac(488);
			$s->setEndStructFrac(644);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(86));
			$manager->persist($s);
	
			//-180-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setNReps(0);
			$s->setPdbFastaPath("3TWW_B.fasta");
			$s->setStartStructFrac(487);
			$s->setEndStructFrac(643);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(86));
			$manager->persist($s);
	
			//-181-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(158);
			$s->setNReps(0);
			$s->setPdbFastaPath("3TWX_A.fasta");
			$s->setStartStructFrac(487);
			$s->setEndStructFrac(644);
			$s->setMissingResiduesCount(7);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(87));
			$manager->persist($s);
	
			//-182-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(158);
			$s->setNReps(0);
			$s->setPdbFastaPath("3TWX_B.fasta");
			$s->setStartStructFrac(487);
			$s->setEndStructFrac(644);
			$s->setMissingResiduesCount(7);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(87));
			$manager->persist($s);
	
			//-183-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(234);
			$s->setNReps(0);
			$s->setPdbFastaPath("3UI2_A.fasta");
			$s->setStartStructFrac(85);
			$s->setEndStructFrac(318);
			$s->setMissingResiduesCount(10);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O22265"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(88));
			$manager->persist($s);
	
			//-184-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(13);
			$s->setPdbFastaPath("3UI2_B.fasta");
			$s->setStartStructFrac(528);
			$s->setEndStructFrac(540);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P37107"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(88));
			$manager->persist($s);
	
			//-185-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(320);
			$s->setNReps(10);
			$s->setPdbFastaPath("3UTM_A.fasta");
			$s->setStartStructFrac(316);
			$s->setEndStructFrac(635);
			$s->setMissingResiduesCount(31);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6PFX9"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(89));
			$manager->persist($s);
	
			//-186-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(307);
			$s->setNReps(0);
			$s->setPdbFastaPath("3UTM_B.fasta");
			$s->setStartStructFrac(328);
			$s->setEndStructFrac(634);
			$s->setMissingResiduesCount(44);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6PFX9"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(89));
			$manager->persist($s);
	
			//-187-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(32);
			$s->setPdbFastaPath("3UTM_C.fasta");
			$s->setStartStructFrac(18);
			$s->setEndStructFrac(78);
			$s->setMissingResiduesCount(51);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O35625"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(89));
			$manager->persist($s);
	
			//-188-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(163);
			$s->setNReps(5);
			$s->setPdbFastaPath("3UXG_A.fasta");
			$s->setStartStructFrac(91);
			$s->setEndStructFrac(253);
			$s->setMissingResiduesCount(9);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O14593"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(90));
			$manager->persist($s);
	
			//-189-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(16);
			$s->setPdbFastaPath("3UXG_B.fasta");
			$s->setStartStructFrac(344);
			$s->setEndStructFrac(359);
			$s->setMissingResiduesCount(1);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P56524"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(90));
			$manager->persist($s);
	
			//-190-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(158);
			$s->setNReps(5);
			$s->setPdbFastaPath("3V2O_A.fasta");
			$s->setStartStructFrac(151);
			$s->setEndStructFrac(308);
			$s->setMissingResiduesCount(25);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H9E1"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(91));
			$manager->persist($s);
	
			//-191-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(11);
			$s->setPdbFastaPath("3V2O_B.fasta");
			$s->setStartStructFrac(9);
			$s->setEndStructFrac(19);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P98158"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(91));
			$manager->persist($s);
	
			//-192-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(166);
			$s->setNReps(0);
			$s->setPdbFastaPath("3V2X_A.fasta");
			$s->setStartStructFrac(147);
			$s->setEndStructFrac(312);
			$s->setMissingResiduesCount(1);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H9E1"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(92));
			$manager->persist($s);
	
			//-193-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(11);
			$s->setPdbFastaPath("3V2X_B.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(11);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P98158"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(92));
			$manager->persist($s);
	
			//-194-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(161);
			$s->setNReps(0);
			$s->setPdbFastaPath("3V30_A.fasta");
			$s->setStartStructFrac(92);
			$s->setEndStructFrac(252);
			$s->setMissingResiduesCount(11);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O14593"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(93));
			$manager->persist($s);
	
			//-195-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(16);
			$s->setPdbFastaPath("3V30_B.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(17);
			$s->setMissingResiduesCount(1);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P48382"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(93));
			$manager->persist($s);
	
			//-196-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(166);
			$s->setNReps(0);
			$s->setPdbFastaPath("3V31_A.fasta");
			$s->setStartStructFrac(147);
			$s->setEndStructFrac(312);
			$s->setMissingResiduesCount(1);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H9E1"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(94));
			$manager->persist($s);
	
			//-197-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(17);
			$s->setPdbFastaPath("3V31_B.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(17);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P56524"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(94));
			$manager->persist($s);
	
			//-198-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(344);
			$s->setPdbFastaPath("3ZU7_A.fasta");
			$s->setStartStructFrac(10);
			$s->setEndStructFrac(353);
			$s->setMissingResiduesCount(21);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P63086"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(95));
			$manager->persist($s);
	
			//-199-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(357);
			$s->setPdbFastaPath("3ZUV_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(358);
			$s->setMissingResiduesCount(5);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P63086"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(96));
			$manager->persist($s);
	
			//-200-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(357);
			$s->setPdbFastaPath("3ZUV_C.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(358);
			$s->setMissingResiduesCount(5);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P63086"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(96));
			$manager->persist($s);
	
			//-201-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(205);
			$s->setPdbFastaPath("4A63_A.fasta");
			$s->setStartStructFrac(114);
			$s->setEndStructFrac(318);
			$s->setMissingResiduesCount(3);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O15350"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(97));
			$manager->persist($s);
	
			//-202-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(202);
			$s->setNReps(0);
			$s->setPdbFastaPath("4A63_B.fasta");
			$s->setStartStructFrac(920);
			$s->setEndStructFrac(121);
			$s->setMissingResiduesCount(37);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q13625"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(97));
			$manager->persist($s);
	
			//-203-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(205);
			$s->setPdbFastaPath("4A63_C.fasta");
			$s->setStartStructFrac(114);
			$s->setEndStructFrac(318);
			$s->setMissingResiduesCount(3);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O15350"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(97));
			$manager->persist($s);
	
			//-204-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(196);
			$s->setNReps(0);
			$s->setPdbFastaPath("4A63_D.fasta");
			$s->setStartStructFrac(925);
			$s->setEndStructFrac(120);
			$s->setMissingResiduesCount(43);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q13625"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(97));
			$manager->persist($s);
	
			//-205-
			$s = new Chain();
			$s->setChain("E");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(205);
			$s->setPdbFastaPath("4A63_E.fasta");
			$s->setStartStructFrac(114);
			$s->setEndStructFrac(318);
			$s->setMissingResiduesCount(3);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O15350"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(97));
			$manager->persist($s);
	
			//-206-
			$s = new Chain();
			$s->setChain("F");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(197);
			$s->setNReps(0);
			$s->setPdbFastaPath("4A63_F.fasta");
			$s->setStartStructFrac(925);
			$s->setEndStructFrac(121);
			$s->setMissingResiduesCount(42);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q13625"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(97));
			$manager->persist($s);
	
			//-207-
			$s = new Chain();
			$s->setChain("G");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(205);
			$s->setPdbFastaPath("4A63_G.fasta");
			$s->setStartStructFrac(114);
			$s->setEndStructFrac(318);
			$s->setMissingResiduesCount(3);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O15350"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(97));
			$manager->persist($s);
	
			//-208-
			$s = new Chain();
			$s->setChain("H");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(198);
			$s->setNReps(0);
			$s->setPdbFastaPath("4A63_H.fasta");
			$s->setStartStructFrac(923);
			$s->setEndStructFrac(120);
			$s->setMissingResiduesCount(41);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q13625"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(97));
			$manager->persist($s);
	
			//-209-
			$s = new Chain();
			$s->setChain("I");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(205);
			$s->setPdbFastaPath("4A63_I.fasta");
			$s->setStartStructFrac(114);
			$s->setEndStructFrac(318);
			$s->setMissingResiduesCount(3);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O15350"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(97));
			$manager->persist($s);
	
			//-210-
			$s = new Chain();
			$s->setChain("J");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(200);
			$s->setNReps(0);
			$s->setPdbFastaPath("4A63_J.fasta");
			$s->setStartStructFrac(923);
			$s->setEndStructFrac(122);
			$s->setMissingResiduesCount(39);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q13625"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(97));
			$manager->persist($s);
	
			//-211-
			$s = new Chain();
			$s->setChain("K");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(205);
			$s->setPdbFastaPath("4A63_K.fasta");
			$s->setStartStructFrac(114);
			$s->setEndStructFrac(318);
			$s->setMissingResiduesCount(3);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O15350"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(97));
			$manager->persist($s);
	
			//-212-
			$s = new Chain();
			$s->setChain("L");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(196);
			$s->setNReps(0);
			$s->setPdbFastaPath("4A63_L.fasta");
			$s->setStartStructFrac(925);
			$s->setEndStructFrac(120);
			$s->setMissingResiduesCount(43);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q13625"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(97));
			$manager->persist($s);
	
			//-213-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(182);
			$s->setPdbFastaPath("4ATZ_A.fasta");
			$s->setStartStructFrac(400);
			$s->setEndStructFrac(581);
			$s->setMissingResiduesCount(19);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P11818"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(98));
			$manager->persist($s);
	
			//-214-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(171);
			$s->setPdbFastaPath("4ATZ_B.fasta");
			$s->setStartStructFrac(399);
			$s->setEndStructFrac(581);
			$s->setMissingResiduesCount(30);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P11818"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(98));
			$manager->persist($s);
	
			//-215-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(176);
			$s->setPdbFastaPath("4ATZ_C.fasta");
			$s->setStartStructFrac(397);
			$s->setEndStructFrac(581);
			$s->setMissingResiduesCount(25);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P11818"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(98));
			$manager->persist($s);
	
			//-216-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(349);
			$s->setPdbFastaPath("4B7E_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(349);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9NWT6"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(99));
			$manager->persist($s);
	
			//-217-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(338);
			$s->setPdbFastaPath("4B7K_A.fasta");
			$s->setStartStructFrac(12);
			$s->setEndStructFrac(349);
			$s->setMissingResiduesCount(11);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9NWT6"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(100));
			$manager->persist($s);
	
			//-218-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(157);
			$s->setPdbFastaPath("4B93_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(163);
			$s->setMissingResiduesCount(32);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P70280"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(101));
			$manager->persist($s);
	
			//-219-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(191);
			$s->setNReps(6);
			$s->setPdbFastaPath("4B93_B.fasta");
			$s->setStartStructFrac(665);
			$s->setEndStructFrac(895);
			$s->setMissingResiduesCount(78);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q96NW4"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(101));
			$manager->persist($s);
	
			//-220-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(431);
			$s->setPdbFastaPath("4DRX_A.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(437);
			$s->setMissingResiduesCount(6);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("D0VWZ0"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(102));
			$manager->persist($s);
	
			//-221-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(424);
			$s->setPdbFastaPath("4DRX_B.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(441);
			$s->setMissingResiduesCount(7);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("D0VWY9"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(102));
			$manager->persist($s);
	
			//-222-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(421);
			$s->setPdbFastaPath("4DRX_C.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(437);
			$s->setMissingResiduesCount(16);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("D0VWZ0"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(102));
			$manager->persist($s);
	
			//-223-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(431);
			$s->setPdbFastaPath("4DRX_D.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(441);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("D0VWY9"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(102));
			$manager->persist($s);
	
			//-224-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(247);
			$s->setNReps(0);
			$s->setPdbFastaPath("4DX2_A.fasta");
			$s->setStartStructFrac(148);
			$s->setEndStructFrac(394);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9HBA0"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(103));
			$manager->persist($s);
	
			//-225-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(245);
			$s->setNReps(0);
			$s->setPdbFastaPath("4DX2_B.fasta");
			$s->setStartStructFrac(148);
			$s->setEndStructFrac(392);
			$s->setMissingResiduesCount(14);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9HBA0"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(103));
			$manager->persist($s);
	
			//-226-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(1044);
			$s->setPdbFastaPath("4DX5_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(44);
			$s->setMissingResiduesCount(13);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P31224"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(104));
			$manager->persist($s);
	
			//-227-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(1033);
			$s->setPdbFastaPath("4DX5_B.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(33);
			$s->setMissingResiduesCount(24);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P31224"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(104));
			$manager->persist($s);
	
			//-228-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(1033);
			$s->setPdbFastaPath("4DX5_C.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(33);
			$s->setMissingResiduesCount(24);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P31224"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(104));
			$manager->persist($s);
	
			//-229-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(1044);
			$s->setPdbFastaPath("4DX6_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(44);
			$s->setMissingResiduesCount(13);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P31224"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(105));
			$manager->persist($s);
	
			//-230-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(1033);
			$s->setPdbFastaPath("4DX6_B.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(33);
			$s->setMissingResiduesCount(24);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P31224"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(105));
			$manager->persist($s);
	
			//-231-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(1034);
			$s->setPdbFastaPath("4DX6_C.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(34);
			$s->setMissingResiduesCount(23);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P31224"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(105));
			$manager->persist($s);
	
			//-232-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(1042);
			$s->setPdbFastaPath("4DX7_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(42);
			$s->setMissingResiduesCount(15);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P31224"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(106));
			$manager->persist($s);
	
			//-233-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(1033);
			$s->setPdbFastaPath("4DX7_B.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(33);
			$s->setMissingResiduesCount(24);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P31224"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(106));
			$manager->persist($s);
	
			//-234-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(1036);
			$s->setPdbFastaPath("4DX7_C.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(36);
			$s->setMissingResiduesCount(21);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P31224"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(106));
			$manager->persist($s);
	
			//-235-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(247);
			$s->setNReps(5);
			$s->setPdbFastaPath("4F1P_A.fasta");
			$s->setStartStructFrac(407);
			$s->setEndStructFrac(697);
			$s->setMissingResiduesCount(121);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q15027"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(107));
			$manager->persist($s);
	
			//-236-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(247);
			$s->setNReps(0);
			$s->setPdbFastaPath("4F1P_B.fasta");
			$s->setStartStructFrac(407);
			$s->setEndStructFrac(697);
			$s->setMissingResiduesCount(121);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q15027"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(107));
			$manager->persist($s);
	
			//-237-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(437);
			$s->setPdbFastaPath("4F6R_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(437);
			$s->setMissingResiduesCount(14);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("D0VWZ0"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(108));
			$manager->persist($s);
	
			//-238-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(431);
			$s->setPdbFastaPath("4F6R_B.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(441);
			$s->setMissingResiduesCount(14);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("D0VWY9"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(108));
			$manager->persist($s);
	
			//-239-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(302);
			$s->setNReps(9);
			$s->setPdbFastaPath("4G8K_A.fasta");
			$s->setStartStructFrac(21);
			$s->setEndStructFrac(327);
			$s->setMissingResiduesCount(35);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q05823"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(109));
			$manager->persist($s);
	
			//-240-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(298);
			$s->setNReps(0);
			$s->setPdbFastaPath("4G8K_B.fasta");
			$s->setStartStructFrac(24);
			$s->setEndStructFrac(328);
			$s->setMissingResiduesCount(39);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q05823"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(109));
			$manager->persist($s);
	
			//-241-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(307);
			$s->setNReps(0);
			$s->setPdbFastaPath("4G8L_A.fasta");
			$s->setStartStructFrac(16);
			$s->setEndStructFrac(325);
			$s->setMissingResiduesCount(30);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q05823"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(110));
			$manager->persist($s);
	
			//-242-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(294);
			$s->setNReps(0);
			$s->setPdbFastaPath("4G8L_B.fasta");
			$s->setStartStructFrac(21);
			$s->setEndStructFrac(325);
			$s->setMissingResiduesCount(43);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q05823"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(110));
			$manager->persist($s);
	
			//-243-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(300);
			$s->setNReps(0);
			$s->setPdbFastaPath("4G8L_C.fasta");
			$s->setStartStructFrac(15);
			$s->setEndStructFrac(325);
			$s->setMissingResiduesCount(37);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q05823"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(110));
			$manager->persist($s);
	
			//-244-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(294);
			$s->setNReps(0);
			$s->setPdbFastaPath("4G8L_D.fasta");
			$s->setStartStructFrac(21);
			$s->setEndStructFrac(325);
			$s->setMissingResiduesCount(43);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q05823"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(110));
			$manager->persist($s);
	
			//-245-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(335);
			$s->setNReps(7);
			$s->setPdbFastaPath("2AJA_A.fasta");
			$s->setStartStructFrac(3);
			$s->setEndStructFrac(349);
			$s->setMissingResiduesCount(33);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q5ZSV0"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(111));
			$manager->persist($s);
	
			//-246-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(337);
			$s->setNReps(0);
			$s->setPdbFastaPath("2AJA_B.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(356);
			$s->setMissingResiduesCount(31);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q5ZSV0"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(111));
			$manager->persist($s);
	
			//-247-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(285);
			$s->setNReps(8);
			$s->setPdbFastaPath("1WDY_A.fasta");
			$s->setStartStructFrac(21);
			$s->setEndStructFrac(305);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q05823"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(112));
			$manager->persist($s);
	
			//-248-
			$s = new Chain();
			$s->setChain("E");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(264);
			$s->setNReps(0);
			$s->setPdbFastaPath("2B0O_E.fasta");
			$s->setStartStructFrac(423);
			$s->setEndStructFrac(687);
			$s->setMissingResiduesCount(37);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8TDY4"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(113));
			$manager->persist($s);
	
			//-249-
			$s = new Chain();
			$s->setChain("F");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(266);
			$s->setNReps(4);
			$s->setPdbFastaPath("2B0O_F.fasta");
			$s->setStartStructFrac(424);
			$s->setEndStructFrac(697);
			$s->setMissingResiduesCount(35);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8TDY4"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(113));
			$manager->persist($s);
	
			//-250-
			$s = new Chain();
			$s->setChain("G");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(253);
			$s->setNReps(0);
			$s->setPdbFastaPath("2B0O_G.fasta");
			$s->setStartStructFrac(421);
			$s->setEndStructFrac(681);
			$s->setMissingResiduesCount(48);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8TDY4"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(113));
			$manager->persist($s);
	
			//-251-
			$s = new Chain();
			$s->setChain("H");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(262);
			$s->setNReps(0);
			$s->setPdbFastaPath("2B0O_H.fasta");
			$s->setStartStructFrac(424);
			$s->setEndStructFrac(694);
			$s->setMissingResiduesCount(39);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8TDY4"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(113));
			$manager->persist($s);
	
			//-252-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(228);
			$s->setNReps(7);
			$s->setPdbFastaPath("2DZO_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(228);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P50086"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(114));
			$manager->persist($s);
	
			//-253-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(57);
			$s->setPdbFastaPath("2DZO_B.fasta");
			$s->setStartStructFrac(360);
			$s->setEndStructFrac(416);
			$s->setMissingResiduesCount(25);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P33298"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(114));
			$manager->persist($s);
	
			//-254-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(227);
			$s->setNReps(0);
			$s->setPdbFastaPath("2DZO_C.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(228);
			$s->setMissingResiduesCount(1);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P50086"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(114));
			$manager->persist($s);
	
			//-255-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(67);
			$s->setPdbFastaPath("2DZO_D.fasta");
			$s->setStartStructFrac(348);
			$s->setEndStructFrac(414);
			$s->setMissingResiduesCount(15);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P33298"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(114));
			$manager->persist($s);
	
			//-256-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(195);
			$s->setNReps(6);
			$s->setPdbFastaPath("2HE0_A.fasta");
			$s->setStartStructFrac(50);
			$s->setEndStructFrac(244);
			$s->setMissingResiduesCount(58);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P46531"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(115));
			$manager->persist($s);
	
			//-257-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(193);
			$s->setNReps(0);
			$s->setPdbFastaPath("2HE0_B.fasta");
			$s->setStartStructFrac(52);
			$s->setEndStructFrac(244);
			$s->setMissingResiduesCount(60);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P46531"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(115));
			$manager->persist($s);
	
			//-258-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(171);
			$s->setNReps(5);
			$s->setPdbFastaPath("2KBX_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(171);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q13418"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(116));
			$manager->persist($s);
	
			//-259-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(70);
			$s->setPdbFastaPath("2KBX_B.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(70);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P48059"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(116));
			$manager->persist($s);
	
			//-260-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(98);
			$s->setPdbFastaPath("2V4H_A.fasta");
			$s->setStartStructFrac(240);
			$s->setEndStructFrac(337);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O88522"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(117));
			$manager->persist($s);
	
			//-261-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(91);
			$s->setPdbFastaPath("2V4H_B.fasta");
			$s->setStartStructFrac(247);
			$s->setEndStructFrac(337);
			$s->setMissingResiduesCount(19);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8VC91"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(117));
			$manager->persist($s);
	
			//-262-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(226);
			$s->setNReps(0);
			$s->setPdbFastaPath("2DWZ_A.fasta");
			$s->setStartStructFrac(4);
			$s->setEndStructFrac(229);
			$s->setMissingResiduesCount(5);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9Z2X2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(118));
			$manager->persist($s);
	
			//-263-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(73);
			$s->setPdbFastaPath("2DWZ_B.fasta");
			$s->setStartStructFrac(336);
			$s->setEndStructFrac(408);
			$s->setMissingResiduesCount(10);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q63570"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(118));
			$manager->persist($s);
	
			//-264-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(226);
			$s->setNReps(0);
			$s->setPdbFastaPath("2DWZ_C.fasta");
			$s->setStartStructFrac(4);
			$s->setEndStructFrac(229);
			$s->setMissingResiduesCount(5);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9Z2X2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(118));
			$manager->persist($s);
	
			//-265-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(73);
			$s->setPdbFastaPath("2DWZ_D.fasta");
			$s->setStartStructFrac(336);
			$s->setEndStructFrac(408);
			$s->setMissingResiduesCount(10);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q63570"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(118));
			$manager->persist($s);
	
			//-266-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(126);
			$s->setNReps(4);
			$s->setPdbFastaPath("1N0R_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(126);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(true);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_4ANK"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(119));
			$manager->persist($s);
	
			//-267-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(156);
			$s->setNReps(5);
			$s->setPdbFastaPath("1MJ0_A.fasta");
			$s->setStartStructFrac(11);
			$s->setEndStructFrac(166);
			$s->setMissingResiduesCount(10);
			$s->setNonRedundantSet(true);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_E3_5"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(120));
			$manager->persist($s);
	
			//-268-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(92);
			$s->setNReps(3);
			$s->setPdbFastaPath("1N0Q_A.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(93);
			$s->setMissingResiduesCount(1);
			$s->setNonRedundantSet(true);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_3ANK"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(121));
			$manager->persist($s);
	
			//-269-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(369);
			$s->setPdbFastaPath("1SVX_B.fasta");
			$s->setStartStructFrac(5);
			$s->setEndStructFrac(373);
			$s->setMissingResiduesCount(26);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P0AEX9"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(122));
			$manager->persist($s);
	
			//-270-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setNReps(5);
			$s->setPdbFastaPath("1SVX_A.fasta");
			$s->setStartStructFrac(12);
			$s->setEndStructFrac(168);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(true);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_OFF7"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(122));
			$manager->persist($s);
	
			//-271-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(155);
			$s->setNReps(5);
			$s->setPdbFastaPath("2BKG_A.fasta");
			$s->setStartStructFrac(12);
			$s->setEndStructFrac(166);
			$s->setMissingResiduesCount(11);
			$s->setNonRedundantSet(true);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_E3_19"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(123));
			$manager->persist($s);
	
			//-272-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(247);
			$s->setPdbFastaPath("2BKK_A.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(264);
			$s->setMissingResiduesCount(17);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("E2DP59"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(124));
			$manager->persist($s);
	
			//-273-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(262);
			$s->setPdbFastaPath("2BKK_C.fasta");
			$s->setStartStructFrac(3);
			$s->setEndStructFrac(264);
			$s->setMissingResiduesCount(2);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P0A3Y5"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(124));
			$manager->persist($s);
	
			//-274-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(156);
			$s->setNReps(5);
			$s->setPdbFastaPath("2BKK_B.fasta");
			$s->setStartStructFrac(12);
			$s->setEndStructFrac(167);
			$s->setMissingResiduesCount(13);
			$s->setNonRedundantSet(true);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_AR_3A"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(124));
			$manager->persist($s);
	
			//-275-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(124);
			$s->setNReps(4);
			$s->setPdbFastaPath("2JAB_A.fasta");
			$s->setStartStructFrac(12);
			$s->setEndStructFrac(135);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(true);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_H10_2_G3"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(125));
			$manager->persist($s);
	
			//-276-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(162);
			$s->setPdbFastaPath("2P2C_A.fasta");
			$s->setStartStructFrac(7);
			$s->setEndStructFrac(168);
			$s->setMissingResiduesCount(7);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42575"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(126));
			$manager->persist($s);
	
			//-277-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(96);
			$s->setPdbFastaPath("2P2C_B.fasta");
			$s->setStartStructFrac(209);
			$s->setEndStructFrac(304);
			$s->setMissingResiduesCount(10);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("B4E085"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(126));
			$manager->persist($s);
	
			//-278-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(161);
			$s->setPdbFastaPath("2P2C_C.fasta");
			$s->setStartStructFrac(8);
			$s->setEndStructFrac(168);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("B4E0I5"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(126));
			$manager->persist($s);
	
			//-279-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(98);
			$s->setPdbFastaPath("2P2C_D.fasta");
			$s->setStartStructFrac(208);
			$s->setEndStructFrac(305);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("B4E085"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(126));
			$manager->persist($s);
	
			//-280-
			$s = new Chain();
			$s->setChain("E");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(160);
			$s->setPdbFastaPath("2P2C_E.fasta");
			$s->setStartStructFrac(8);
			$s->setEndStructFrac(167);
			$s->setMissingResiduesCount(9);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("B4E0I5"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(126));
			$manager->persist($s);
	
			//-281-
			$s = new Chain();
			$s->setChain("F");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(96);
			$s->setPdbFastaPath("2P2C_F.fasta");
			$s->setStartStructFrac(209);
			$s->setEndStructFrac(304);
			$s->setMissingResiduesCount(10);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("B4E085"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(126));
			$manager->persist($s);
	
			//-282-
			$s = new Chain();
			$s->setChain("G");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(160);
			$s->setPdbFastaPath("2P2C_G.fasta");
			$s->setStartStructFrac(8);
			$s->setEndStructFrac(167);
			$s->setMissingResiduesCount(9);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("B4E0I5"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(126));
			$manager->persist($s);
	
			//-283-
			$s = new Chain();
			$s->setChain("H");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(98);
			$s->setPdbFastaPath("2P2C_H.fasta");
			$s->setStartStructFrac(207);
			$s->setEndStructFrac(304);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("B4E085"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(126));
			$manager->persist($s);
	
			//-284-
			$s = new Chain();
			$s->setChain("I");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(157);
			$s->setPdbFastaPath("2P2C_I.fasta");
			$s->setStartStructFrac(11);
			$s->setEndStructFrac(167);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("B4E0I5"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(126));
			$manager->persist($s);
	
			//-285-
			$s = new Chain();
			$s->setChain("J");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(94);
			$s->setPdbFastaPath("2P2C_J.fasta");
			$s->setStartStructFrac(209);
			$s->setEndStructFrac(302);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("B4E085"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(126));
			$manager->persist($s);
	
			//-286-
			$s = new Chain();
			$s->setChain("K");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(158);
			$s->setPdbFastaPath("2P2C_K.fasta");
			$s->setStartStructFrac(9);
			$s->setEndStructFrac(166);
			$s->setMissingResiduesCount(11);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("B4E0I5"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(126));
			$manager->persist($s);
	
			//-287-
			$s = new Chain();
			$s->setChain("L");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(92);
			$s->setPdbFastaPath("2P2C_L.fasta");
			$s->setStartStructFrac(211);
			$s->setEndStructFrac(302);
			$s->setMissingResiduesCount(14);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("B4E085"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(126));
			$manager->persist($s);
	
			//-288-
			$s = new Chain();
			$s->setChain("P");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(158);
			$s->setNReps(5);
			$s->setPdbFastaPath("2P2C_P.fasta");
			$s->setStartStructFrac(9);
			$s->setEndStructFrac(166);
			$s->setMissingResiduesCount(11);
			$s->setNonRedundantSet(true);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_AR_F8"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(126));
			$manager->persist($s);
	
			//-289-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(154);
			$s->setNReps(5);
			$s->setPdbFastaPath("2QYJ_A.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(166);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(true);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(127));
			$manager->persist($s);
	
			//-290-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(125);
			$s->setNReps(4);
			$s->setPdbFastaPath("2V4H_C.fasta");
			$s->setStartStructFrac(12);
			$s->setEndStructFrac(136);
			$s->setMissingResiduesCount(11);
			$s->setNonRedundantSet(true);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_1D5"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(117));
			$manager->persist($s);
	
			//-291-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(106);
			$s->setNReps(3);
			$s->setPdbFastaPath("2L6B_A.fasta");
			$s->setStartStructFrac(4);
			$s->setEndStructFrac(109);
			$s->setMissingResiduesCount(9);
			$s->setNonRedundantSet(true);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("NRC"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(64));
			$manager->persist($s);
	
			//-292-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(285);
			$s->setPdbFastaPath("2V5Q_A.fasta");
			$s->setStartStructFrac(39);
			$s->setEndStructFrac(323);
			$s->setMissingResiduesCount(30);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P53350"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(128));
			$manager->persist($s);
	
			//-293-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(285);
			$s->setPdbFastaPath("2V5Q_B.fasta");
			$s->setStartStructFrac(39);
			$s->setEndStructFrac(323);
			$s->setMissingResiduesCount(30);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P53350"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(128));
			$manager->persist($s);
	
			//-294-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(130);
			$s->setNReps(4);
			$s->setPdbFastaPath("2V5Q_C.fasta");
			$s->setStartStructFrac(12);
			$s->setEndStructFrac(141);
			$s->setMissingResiduesCount(37);
			$s->setNonRedundantSet(true);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_3H10"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(128));
			$manager->persist($s);
	
			//-295-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setNReps(5);
			$s->setPdbFastaPath("2XEE_A.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(169);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(true);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C_Mut5"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(129));
			$manager->persist($s);
	
			//-296-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setNReps(0);
			$s->setPdbFastaPath("2XEH_A.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(169);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C_Mut6"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(130));
			$manager->persist($s);
	
			//-297-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(91);
			$s->setNReps(3);
			$s->setPdbFastaPath("2XEN_A.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(103);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(true);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI1C_Mut4"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(131));
			$manager->persist($s);
	
			//-298-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(96);
			$s->setNReps(3);
			$s->setPdbFastaPath("2ZGD_A.fasta");
			$s->setStartStructFrac(5);
			$s->setEndStructFrac(110);
			$s->setMissingResiduesCount(13);
			$s->setNonRedundantSet(true);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_3CA1A2N-OH"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(132));
			$manager->persist($s);
	
			//-299-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(88);
			$s->setNReps(3);
			$s->setPdbFastaPath("2ZGG_A.fasta");
			$s->setStartStructFrac(23);
			$s->setEndStructFrac(110);
			$s->setMissingResiduesCount(4);
			$s->setNonRedundantSet(true);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_3CA1A2N"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(133));
			$manager->persist($s);
	
			//-300-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(137);
			$s->setPdbFastaPath("3HG0_A.fasta");
			$s->setStartStructFrac(33);
			$s->setEndStructFrac(169);
			$s->setMissingResiduesCount(32);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9G096"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(134));
			$manager->persist($s);
	
			//-301-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(130);
			$s->setPdbFastaPath("3HG0_B.fasta");
			$s->setStartStructFrac(34);
			$s->setEndStructFrac(163);
			$s->setMissingResiduesCount(39);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9G096"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(134));
			$manager->persist($s);
	
			//-302-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(132);
			$s->setPdbFastaPath("3HG0_C.fasta");
			$s->setStartStructFrac(32);
			$s->setEndStructFrac(163);
			$s->setMissingResiduesCount(37);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9G096"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(134));
			$manager->persist($s);
	
			//-303-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(124);
			$s->setNReps(4);
			$s->setPdbFastaPath("3HG0_D.fasta");
			$s->setStartStructFrac(12);
			$s->setEndStructFrac(135);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(true);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_20"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(134));
			$manager->persist($s);
	
			//-304-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(168);
			$s->setNReps(5);
			$s->setPdbFastaPath("1BU9_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(168);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42773"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(135));
			$manager->persist($s);
	
			//-305-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(156);
			$s->setNReps(4);
			$s->setPdbFastaPath("1A5E_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(156);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(136));
			$manager->persist($s);
	
			//-306-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(243);
			$s->setNReps(7);
			$s->setPdbFastaPath("1WG0_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(243);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P50086"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(137));
			$manager->persist($s);
	
			//-307-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(156);
			$s->setNReps(0);
			$s->setPdbFastaPath("2A5E_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(156);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(138));
			$manager->persist($s);
	
			//-308-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(275);
			$s->setPdbFastaPath("2KXP_A.fasta");
			$s->setStartStructFrac(7);
			$s->setEndStructFrac(281);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P13127"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(139));
			$manager->persist($s);
	
			//-309-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(270);
			$s->setPdbFastaPath("2KXP_B.fasta");
			$s->setStartStructFrac(302);
			$s->setEndStructFrac(571);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P14315"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(139));
			$manager->persist($s);
	
			//-310-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(118);
			$s->setNReps(4);
			$s->setPdbFastaPath("2KXP_C.fasta");
			$s->setStartStructFrac(601);
			$s->setEndStructFrac(718);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P62774"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(139));
			$manager->persist($s);
	
			//-311-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(140);
			$s->setPdbFastaPath("2XZT_A.fasta");
			$s->setStartStructFrac(34);
			$s->setEndStructFrac(174);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42574"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(140));
			$manager->persist($s);
	
			//-312-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(94);
			$s->setPdbFastaPath("2XZT_B.fasta");
			$s->setStartStructFrac(184);
			$s->setEndStructFrac(277);
			$s->setMissingResiduesCount(24);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42574"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(140));
			$manager->persist($s);
	
			//-313-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(141);
			$s->setPdbFastaPath("2XZT_C.fasta");
			$s->setStartStructFrac(34);
			$s->setEndStructFrac(175);
			$s->setMissingResiduesCount(7);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42574"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(140));
			$manager->persist($s);
	
			//-314-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(93);
			$s->setPdbFastaPath("2XZT_D.fasta");
			$s->setStartStructFrac(185);
			$s->setEndStructFrac(277);
			$s->setMissingResiduesCount(25);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42574"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(140));
			$manager->persist($s);
	
			//-315-
			$s = new Chain();
			$s->setChain("G");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(119);
			$s->setNReps(0);
			$s->setPdbFastaPath("2XZT_G.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(131);
			$s->setMissingResiduesCount(17);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN-34_I78S"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(140));
			$manager->persist($s);
	
			//-316-
			$s = new Chain();
			$s->setChain("H");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(119);
			$s->setNReps(0);
			$s->setPdbFastaPath("2XZT_G.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(131);
			$s->setMissingResiduesCount(17);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN-34_I78S"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(140));
			$manager->persist($s);
	
			//-317-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(235);
			$s->setNReps(7);
			$s->setPdbFastaPath("3D9H_A.fasta");
			$s->setStartStructFrac(19);
			$s->setEndStructFrac(253);
			$s->setMissingResiduesCount(50);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q96DX5"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(141));
			$manager->persist($s);
	
			//-318-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(199);
			$s->setNReps(6);
			$s->setPdbFastaPath("3HRA_A.fasta");
			$s->setStartStructFrac(3);
			$s->setEndStructFrac(201);
			$s->setMissingResiduesCount(2);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q838Q8"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(142));
			$manager->persist($s);
	
			//-319-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(292);
			$s->setNReps(0);
			$s->setPdbFastaPath("3LJN_A.fasta");
			$s->setStartStructFrac(12);
			$s->setEndStructFrac(315);
			$s->setMissingResiduesCount(60);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("E9ADW8"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(143));
			$manager->persist($s);
	
			//-320-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(424);
			$s->setPdbFastaPath("3V79_C.fasta");
			$s->setStartStructFrac(11);
			$s->setEndStructFrac(434);
			$s->setMissingResiduesCount(10);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q06330"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(144));
			$manager->persist($s);
	
			//-321-
			$s = new Chain();
			$s->setChain("K");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(218);
			$s->setNReps(0);
			$s->setPdbFastaPath("3V79_K.fasta");
			$s->setStartStructFrac(1884);
			$s->setEndStructFrac(2120);
			$s->setMissingResiduesCount(38);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P46531"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(144));
			$manager->persist($s);
	
			//-322-
			$s = new Chain();
			$s->setChain("M");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(55);
			$s->setPdbFastaPath("3V79_M.fasta");
			$s->setStartStructFrac(16);
			$s->setEndStructFrac(70);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q92585"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(144));
			$manager->persist($s);
	
			//-323-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(257);
			$s->setNReps(0);
			$s->setPdbFastaPath("3ZKJ_A.fasta");
			$s->setStartStructFrac(37);
			$s->setEndStructFrac(294);
			$s->setMissingResiduesCount(4);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q96DX5"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(145));
			$manager->persist($s);
	
			//-324-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(82);
			$s->setPdbFastaPath("3ZKJ_B.fasta");
			$s->setStartStructFrac(18);
			$s->setEndStructFrac(112);
			$s->setMissingResiduesCount(14);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q15369"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(145));
			$manager->persist($s);
	
			//-325-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(70);
			$s->setPdbFastaPath("3ZKJ_C.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(105);
			$s->setMissingResiduesCount(48);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q15370"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(145));
			$manager->persist($s);
	
			//-326-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(259);
			$s->setNReps(0);
			$s->setPdbFastaPath("3ZKJ_D.fasta");
			$s->setStartStructFrac(36);
			$s->setEndStructFrac(294);
			$s->setMissingResiduesCount(2);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q96DX5"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(145));
			$manager->persist($s);
	
			//-327-
			$s = new Chain();
			$s->setChain("E");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(81);
			$s->setPdbFastaPath("3ZKJ_E.fasta");
			$s->setStartStructFrac(18);
			$s->setEndStructFrac(112);
			$s->setMissingResiduesCount(15);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q15369"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(145));
			$manager->persist($s);
	
			//-328-
			$s = new Chain();
			$s->setChain("F");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(105);
			$s->setPdbFastaPath("3ZKJ_F.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(106);
			$s->setMissingResiduesCount(13);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q15370"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(145));
			$manager->persist($s);
	
			//-329-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(167);
			$s->setNReps(5);
			$s->setPdbFastaPath("4GMR_A.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(168);
			$s->setMissingResiduesCount(2);
			$s->setNonRedundantSet(true);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("OR266"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(150));
			$manager->persist($s);
	
			//-330-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setNReps(5);
			$s->setPdbFastaPath("4GPM_A.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(158);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(true);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("OR264"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(151));
			$manager->persist($s);
	
			//-331-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(159);
			$s->setNReps(0);
			$s->setPdbFastaPath("4HNA_D.fasta");
			$s->setStartStructFrac(11);
			$s->setEndStructFrac(169);
			$s->setMissingResiduesCount(10);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Darpin_D2"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(152));
			$manager->persist($s);
	
			//-332-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(430);
			$s->setPdbFastaPath("4HNA_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(437);
			$s->setMissingResiduesCount(21);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("D0VWZ0"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(152));
			$manager->persist($s);
	
			//-333-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(431);
			$s->setPdbFastaPath("4HNA_B.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(441);
			$s->setMissingResiduesCount(14);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("D0VWY9"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(152));
			$manager->persist($s);
	
			//-334-
			$s = new Chain();
			$s->setChain("K");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(333);
			$s->setPdbFastaPath("4HNA_K.fasta");
			$s->setStartStructFrac(5);
			$s->setEndStructFrac(337);
			$s->setMissingResiduesCount(16);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P33176"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(152));
			$manager->persist($s);
	
			//-335-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(164);
			$s->setNReps(0);
			$s->setPdbFastaPath("4DUI_A.fasta");
			$s->setStartStructFrac(5);
			$s->setEndStructFrac(169);
			$s->setMissingResiduesCount(4);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Darpin_D1"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(153));
			$manager->persist($s);
	
			//-336-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(93);
			$s->setPdbFastaPath("1N0Q_B.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(93);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("1n0q_B"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(121));
			$manager->persist($s);
	
			//-337-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("NucleicAcid");
			$s->setLength(18);
			$s->setPdbFastaPath("1awc_D.fasta");
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DNA"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(39));
			$manager->persist($s);
	
			//-338-
			$s = new Chain();
			$s->setChain("E");
			$s->setType("Ank");
			$s->setSubGroup("NucleicAcid");
			$s->setLength(19);
			$s->setPdbFastaPath("1awc_E.fasta");
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DNA"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(39));
			$manager->persist($s);
	
			//-339-
			$s = new Chain();
			$s->setChain("X");
			$s->setType("Ank");
			$s->setSubGroup("NucleicAcid");
			$s->setLength(18);
			$s->setPdbFastaPath("2F8X_X.fasta");
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DNA"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(28));
			$manager->persist($s);
	
			//-340-
			$s = new Chain();
			$s->setChain("Y");
			$s->setType("Ank");
			$s->setSubGroup("NucleicAcid");
			$s->setLength(18);
			$s->setPdbFastaPath("2F8X_Y.fasta");
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DNA"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(28));
			$manager->persist($s);
	
			//-341-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("NucleicAcid");
			$s->setLength(15);
			$s->setPdbFastaPath("2FO1_B.fasta");
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DNA"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(29));
			$manager->persist($s);
	
			//-342-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("NucleicAcid");
			$s->setLength(15);
			$s->setPdbFastaPath("2FO1_C.fasta");
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DNA"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(29));
			$manager->persist($s);
	
			//-343-
			$s = new Chain();
			$s->setChain("P");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(9);
			$s->setPdbFastaPath("3B95_P.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(13);
			$s->setMissingResiduesCount(5);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3b95_P"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(32));
			$manager->persist($s);
	
			//-344-
			$s = new Chain();
			$s->setChain("G");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(119);
			$s->setPdbFastaPath("2XZD_G.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(131);
			$s->setMissingResiduesCount(17);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("2xzd_G"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(66));
			$manager->persist($s);
	
			//-345-
			$s = new Chain();
			$s->setChain("H");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(120);
			$s->setPdbFastaPath("2XZD_H.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(132);
			$s->setMissingResiduesCount(16);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("2xzd_H"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(66));
			$manager->persist($s);
	
			//-346-
			$s = new Chain();
			$s->setChain("G");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(119);
			$s->setPdbFastaPath("2Y0B_G.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(131);
			$s->setMissingResiduesCount(17);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("2y0b_G"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(67));
			$manager->persist($s);
	
			//-347-
			$s = new Chain();
			$s->setChain("H");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(120);
			$s->setPdbFastaPath("2Y0B_H.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(132);
			$s->setMissingResiduesCount(16);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("2y0b_H"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(67));
			$manager->persist($s);
	
			//-348-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(250);
			$s->setPdbFastaPath("3JUE_A.fasta");
			$s->setStartStructFrac(404);
			$s->setEndStructFrac(697);
			$s->setMissingResiduesCount(118);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q15027"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(70));
			$manager->persist($s);
	
			//-349-
			$s = new Chain();
			$s->setChain("X");
			$s->setType("Ank");
			$s->setSubGroup("NucleicAcid");
			$s->setLength(37);
			$s->setPdbFastaPath("3NBN_X.fasta");
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DNA"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(71));
			$manager->persist($s);
	
			//-350-
			$s = new Chain();
			$s->setChain("Y");
			$s->setType("Ank");
			$s->setSubGroup("NucleicAcid");
			$s->setLength(37);
			$s->setPdbFastaPath("3NBN_Y.fasta");
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DNA"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(71));
			$manager->persist($s);
	
			//-351-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(423);
			$s->setPdbFastaPath("3NBN_A.fasta");
			$s->setStartStructFrac(12);
			$s->setEndStructFrac(434);
			$s->setMissingResiduesCount(10);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q06330"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(71));
			$manager->persist($s);
	
			//-352-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(196);
			$s->setPdbFastaPath("3NBN_B.fasta");
			$s->setStartStructFrac(924);
			$s->setEndStructFrac(119);
			$s->setMissingResiduesCount(60);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P46531"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(71));
			$manager->persist($s);
	
			//-353-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(55);
			$s->setPdbFastaPath("3NBN_C.fasta");
			$s->setStartStructFrac(16);
			$s->setEndStructFrac(70);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q92585"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(71));
			$manager->persist($s);
	
			//-354-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(423);
			$s->setPdbFastaPath("3NBN_D.fasta");
			$s->setStartStructFrac(12);
			$s->setEndStructFrac(434);
			$s->setMissingResiduesCount(10);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q06330"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(71));
			$manager->persist($s);
	
			//-355-
			$s = new Chain();
			$s->setChain("E");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(196);
			$s->setPdbFastaPath("3NBN_E.fasta");
			$s->setStartStructFrac(924);
			$s->setEndStructFrac(119);
			$s->setMissingResiduesCount(60);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P46531"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(71));
			$manager->persist($s);
	
			//-356-
			$s = new Chain();
			$s->setChain("F");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(55);
			$s->setPdbFastaPath("3NBN_F.fasta");
			$s->setStartStructFrac(16);
			$s->setEndStructFrac(70);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q92585"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(71));
			$manager->persist($s);
	
			//-357-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(154);
			$s->setPdbFastaPath("3NOC_D.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(166);
			$s->setMissingResiduesCount(15);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3noc_D"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(72));
			$manager->persist($s);
	
			//-358-
			$s = new Chain();
			$s->setChain("E");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(152);
			$s->setPdbFastaPath("3NOC_E.fasta");
			$s->setStartStructFrac(14);
			$s->setEndStructFrac(165);
			$s->setMissingResiduesCount(17);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3noc_E"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(72));
			$manager->persist($s);
	
			//-359-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(154);
			$s->setPdbFastaPath("3NOG_D.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(166);
			$s->setMissingResiduesCount(15);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3nog_D"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(73));
			$manager->persist($s);
	
			//-360-
			$s = new Chain();
			$s->setChain("E");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(151);
			$s->setPdbFastaPath("3NOG_E.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(166);
			$s->setMissingResiduesCount(18);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3nog_E"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(73));
			$manager->persist($s);
	
			//-361-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(138);
			$s->setPdbFastaPath("3Q9N_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(140);
			$s->setMissingResiduesCount(3);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_A"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(76));
			$manager->persist($s);
	
			//-362-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(135);
			$s->setPdbFastaPath("3Q9N_B.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(139);
			$s->setMissingResiduesCount(6);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_B"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(76));
			$manager->persist($s);
	
			//-363-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setPdbFastaPath("3Q9N_C.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(154);
			$s->setMissingResiduesCount(1);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_C"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(76));
			$manager->persist($s);
	
			//-364-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(158);
			$s->setPdbFastaPath("3Q9N_D.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(154);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_D"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(76));
			$manager->persist($s);
	
			//-365-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(138);
			$s->setPdbFastaPath("3Q9U_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(140);
			$s->setMissingResiduesCount(3);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_A"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(77));
			$manager->persist($s);
	
			//-366-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(136);
			$s->setPdbFastaPath("3Q9U_B.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(139);
			$s->setMissingResiduesCount(5);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_B"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(77));
			$manager->persist($s);
	
			//-367-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setPdbFastaPath("3Q9U_C.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(154);
			$s->setMissingResiduesCount(1);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_C"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(77));
			$manager->persist($s);
	
			//-368-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(158);
			$s->setPdbFastaPath("3Q9U_D.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(154);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_D"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(77));
			$manager->persist($s);
	
			//-369-
			$s = new Chain();
			$s->setChain("E");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(13);
			$s->setPdbFastaPath("3TWS_E.fasta");
			$s->setStartStructFrac(3);
			$s->setEndStructFrac(15);
			$s->setMissingResiduesCount(2);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_E"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(82));
			$manager->persist($s);
	
			//-370-
			$s = new Chain();
			$s->setChain("F");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(11);
			$s->setPdbFastaPath("3TWS_F.fasta");
			$s->setStartStructFrac(5);
			$s->setEndStructFrac(15);
			$s->setMissingResiduesCount(4);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_F"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(82));
			$manager->persist($s);
	
			//-371-
			$s = new Chain();
			$s->setChain("G");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(10);
			$s->setPdbFastaPath("3TWS_G.fasta");
			$s->setStartStructFrac(6);
			$s->setEndStructFrac(15);
			$s->setMissingResiduesCount(5);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_G"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(82));
			$manager->persist($s);
	
			//-372-
			$s = new Chain();
			$s->setChain("H");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(10);
			$s->setPdbFastaPath("3TWS_H.fasta");
			$s->setStartStructFrac(6);
			$s->setEndStructFrac(15);
			$s->setMissingResiduesCount(5);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_H"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(82));
			$manager->persist($s);
	
			//-373-
			$s = new Chain();
			$s->setChain("E");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(11);
			$s->setPdbFastaPath("3TWT_E.fasta");
			$s->setStartStructFrac(5);
			$s->setEndStructFrac(15);
			$s->setMissingResiduesCount(4);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_E"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(83));
			$manager->persist($s);
	
			//-374-
			$s = new Chain();
			$s->setChain("F");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(12);
			$s->setPdbFastaPath("3TWT_F.fasta");
			$s->setStartStructFrac(4);
			$s->setEndStructFrac(15);
			$s->setMissingResiduesCount(3);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_F"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(83));
			$manager->persist($s);
	
			//-375-
			$s = new Chain();
			$s->setChain("G");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(15);
			$s->setPdbFastaPath("3TWT_G.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(15);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_G"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(83));
			$manager->persist($s);
	
			//-376-
			$s = new Chain();
			$s->setChain("H");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(14);
			$s->setPdbFastaPath("3TWT_H.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(15);
			$s->setMissingResiduesCount(1);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_H"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(83));
			$manager->persist($s);
	
			//-377-
			$s = new Chain();
			$s->setChain("E");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(11);
			$s->setPdbFastaPath("3TWV_E.fasta");
			$s->setStartStructFrac(5);
			$s->setEndStructFrac(15);
			$s->setMissingResiduesCount(4);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_E"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(85));
			$manager->persist($s);
	
			//-378-
			$s = new Chain();
			$s->setChain("F");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(10);
			$s->setPdbFastaPath("3TWV_F.fasta");
			$s->setStartStructFrac(6);
			$s->setEndStructFrac(15);
			$s->setMissingResiduesCount(5);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_F"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(85));
			$manager->persist($s);
	
			//-379-
			$s = new Chain();
			$s->setChain("G");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(12);
			$s->setPdbFastaPath("3TWV_G.fasta");
			$s->setStartStructFrac(4);
			$s->setEndStructFrac(15);
			$s->setMissingResiduesCount(3);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_G"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(85));
			$manager->persist($s);
	
			//-380-
			$s = new Chain();
			$s->setChain("H");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(10);
			$s->setPdbFastaPath("3TWV_H.fasta");
			$s->setStartStructFrac(6);
			$s->setEndStructFrac(15);
			$s->setMissingResiduesCount(5);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_H"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(85));
			$manager->persist($s);
	
			//-381-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(11);
			$s->setPdbFastaPath("3TWW_C.fasta");
			$s->setStartStructFrac(5);
			$s->setEndStructFrac(15);
			$s->setMissingResiduesCount(4);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tww_C"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(86));
			$manager->persist($s);
	
			//-382-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(10);
			$s->setPdbFastaPath("3TWW_D.fasta");
			$s->setStartStructFrac(6);
			$s->setEndStructFrac(15);
			$s->setMissingResiduesCount(5);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tww_D"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(86));
			$manager->persist($s);
	
			//-383-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(11);
			$s->setPdbFastaPath("3TWX_C.fasta");
			$s->setStartStructFrac(5);
			$s->setEndStructFrac(15);
			$s->setMissingResiduesCount(4);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twx_C"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(87));
			$manager->persist($s);
	
			//-384-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(11);
			$s->setPdbFastaPath("3TWX_D.fasta");
			$s->setStartStructFrac(5);
			$s->setEndStructFrac(15);
			$s->setMissingResiduesCount(4);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twx_D"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(87));
			$manager->persist($s);
	
			//-385-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(154);
			$s->setPdbFastaPath("3ZU7_B.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(166);
			$s->setMissingResiduesCount(15);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3zu7_B"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(95));
			$manager->persist($s);
	
			//-386-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(122);
			$s->setPdbFastaPath("3ZUV_B.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(134);
			$s->setMissingResiduesCount(14);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3zuv_B"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(96));
			$manager->persist($s);
	
			//-387-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(122);
			$s->setPdbFastaPath("3ZUV_D.fasta");
			$s->setStartStructFrac(12);
			$s->setEndStructFrac(133);
			$s->setMissingResiduesCount(14);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3zuv_D"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(96));
			$manager->persist($s);
	
			//-388-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(154);
			$s->setPdbFastaPath("4ATZ_D.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(166);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4atz_D"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(98));
			$manager->persist($s);
	
			//-389-
			$s = new Chain();
			$s->setChain("E");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(154);
			$s->setPdbFastaPath("4ATZ_E.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(166);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4atz_E"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(98));
			$manager->persist($s);
	
			//-390-
			$s = new Chain();
			$s->setChain("F");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(152);
			$s->setPdbFastaPath("4ATZ_F.fasta");
			$s->setStartStructFrac(15);
			$s->setEndStructFrac(166);
			$s->setMissingResiduesCount(2);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4atz_F"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(98));
			$manager->persist($s);
	
			//-391-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(17);
			$s->setPdbFastaPath("4B7E_B.fasta");
			$s->setStartStructFrac(3);
			$s->setEndStructFrac(19);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4b7e_B"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(99));
			$manager->persist($s);
	
			//-392-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(15);
			$s->setPdbFastaPath("4B7K_B.fasta");
			$s->setStartStructFrac(4);
			$s->setEndStructFrac(18);
			$s->setMissingResiduesCount(5);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4b7k_B"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(100));
			$manager->persist($s);
	
			//-393-
			$s = new Chain();
			$s->setChain("E");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(156);
			$s->setPdbFastaPath("4DRX_E.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(168);
			$s->setMissingResiduesCount(13);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4drx_E"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(102));
			$manager->persist($s);
	
			//-394-
			$s = new Chain();
			$s->setChain("F");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(155);
			$s->setPdbFastaPath("4DRX_F.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(167);
			$s->setMissingResiduesCount(14);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4drx_F"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(102));
			$manager->persist($s);
	
			//-395-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(156);
			$s->setPdbFastaPath("4DX5_D.fasta");
			$s->setStartStructFrac(11);
			$s->setEndStructFrac(166);
			$s->setMissingResiduesCount(13);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx5_D"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(104));
			$manager->persist($s);
	
			//-396-
			$s = new Chain();
			$s->setChain("E");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(152);
			$s->setPdbFastaPath("4DX5_E.fasta");
			$s->setStartStructFrac(15);
			$s->setEndStructFrac(166);
			$s->setMissingResiduesCount(17);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx5_E"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(104));
			$manager->persist($s);
	
			//-397-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(156);
			$s->setPdbFastaPath("4DX7_D.fasta");
			$s->setStartStructFrac(11);
			$s->setEndStructFrac(166);
			$s->setMissingResiduesCount(13);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx7_D"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(106));
			$manager->persist($s);
	
			//-398-
			$s = new Chain();
			$s->setChain("E");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(152);
			$s->setPdbFastaPath("4DX7_E.fasta");
			$s->setStartStructFrac(15);
			$s->setEndStructFrac(166);
			$s->setMissingResiduesCount(17);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx7_E"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(106));
			$manager->persist($s);
	
			//-399-
			$s = new Chain();
			$s->setChain("Q");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(158);
			$s->setPdbFastaPath("2P2C_Q.fasta");
			$s->setStartStructFrac(12);
			$s->setEndStructFrac(169);
			$s->setMissingResiduesCount(11);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_AR_F8"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(126));
			$manager->persist($s);
	
			//-400-
			$s = new Chain();
			$s->setChain("R");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setPdbFastaPath("2P2C_R.fasta");
			$s->setStartStructFrac(9);
			$s->setEndStructFrac(165);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_AR_F8"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(126));
			$manager->persist($s);
	
			//-401-
			$s = new Chain();
			$s->setChain("S");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(153);
			$s->setPdbFastaPath("2P2C_S.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(165);
			$s->setMissingResiduesCount(16);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_AR_F8"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(126));
			$manager->persist($s);
	
			//-402-
			$s = new Chain();
			$s->setChain("T");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(152);
			$s->setPdbFastaPath("2P2C_T.fasta");
			$s->setStartStructFrac(15);
			$s->setEndStructFrac(166);
			$s->setMissingResiduesCount(17);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_AR_F8"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(126));
			$manager->persist($s);
	
			//-403-
			$s = new Chain();
			$s->setChain("U");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(154);
			$s->setPdbFastaPath("2P2C_U.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(166);
			$s->setMissingResiduesCount(15);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_AR_F8"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(126));
			$manager->persist($s);
	
			//-404-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setPdbFastaPath("2XEE_B.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(169);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C_Mut5"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(129));
			$manager->persist($s);
	
			//-405-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setPdbFastaPath("2XEE_C.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(169);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C_Mut5"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(129));
			$manager->persist($s);
	
			//-406-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setPdbFastaPath("2XEE_D.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(169);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C_Mut5"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(129));
			$manager->persist($s);
	
			//-407-
			$s = new Chain();
			$s->setChain("X");
			$s->setType("Ank");
			$s->setSubGroup("NucleicAcid");
			$s->setLength(18);
			$s->setPdbFastaPath("3V79_X.fasta");
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DNA"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(144));
			$manager->persist($s);
	
			//-408-
			$s = new Chain();
			$s->setChain("Y");
			$s->setType("Ank");
			$s->setSubGroup("NucleicAcid");
			$s->setLength(18);
			$s->setPdbFastaPath("3V79_Y.fasta");
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DNA"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(144));
			$manager->persist($s);
	
			//-409-
			$s = new Chain();
			$s->setChain("R");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(19);
			$s->setPdbFastaPath("3V79_R.fasta");
			$s->setStartStructFrac(936);
			$s->setEndStructFrac(954);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3v79_R"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(144));
			$manager->persist($s);
	
			//-410-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(64);
			$s->setPdbFastaPath("4F6R_C.fasta");
			$s->setStartStructFrac(12);
			$s->setEndStructFrac(90);
			$s->setMissingResiduesCount(23);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4f6r_C"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(108));
			$manager->persist($s);
	
			//-411-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(159);
			$s->setPdbFastaPath("4F6R_D.fasta");
			$s->setStartStructFrac(11);
			$s->setEndStructFrac(169);
			$s->setMissingResiduesCount(10);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4f6r_D"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(108));
			$manager->persist($s);
	
			//-412-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(467);
			$s->setPdbFastaPath("4BEP_A.fasta");
			$s->setStartStructFrac(6);
			$s->setEndStructFrac(482);
			$s->setMissingResiduesCount(34);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q5ZXN6"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(146));
			$manager->persist($s);
	
			//-413-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(453);
			$s->setPdbFastaPath("4BEP_B.fasta");
			$s->setStartStructFrac(6);
			$s->setEndStructFrac(477);
			$s->setMissingResiduesCount(48);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q5ZXN6"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(146));
			$manager->persist($s);
	
			//-414-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(475);
			$s->setPdbFastaPath("4BER_A.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(477);
			$s->setMissingResiduesCount(9);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q5ZXN6"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(147));
			$manager->persist($s);
	
			//-415-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(475);
			$s->setPdbFastaPath("4BER_B.fasta");
			$s->setStartStructFrac(1);
			$s->setEndStructFrac(479);
			$s->setMissingResiduesCount(9);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q5ZXN6"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(147));
			$manager->persist($s);
	
			//-416-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(469);
			$s->setPdbFastaPath("4BES_A.fasta");
			$s->setStartStructFrac(6);
			$s->setEndStructFrac(484);
			$s->setMissingResiduesCount(15);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q5ZXN6"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(148));
			$manager->persist($s);
	
			//-417-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(480);
			$s->setPdbFastaPath("4BET_A.fasta");
			$s->setStartStructFrac(5);
			$s->setEndStructFrac(484);
			$s->setMissingResiduesCount(32);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q5ZXN6"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(149));
			$manager->persist($s);
	
			//-418-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(479);
			$s->setPdbFastaPath("4BET_B.fasta");
			$s->setStartStructFrac(6);
			$s->setEndStructFrac(484);
			$s->setMissingResiduesCount(33);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q5ZXN6"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(149));
			$manager->persist($s);
	
			//-419-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(143);
			$s->setPdbFastaPath("4JB8_A.fasta");
			$s->setStartStructFrac(54);
			$s->setEndStructFrac(196);
			$s->setMissingResiduesCount(32);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P55210"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(154));
			$manager->persist($s);
	
			//-420-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(92);
			$s->setPdbFastaPath("4JB8_B.fasta");
			$s->setStartStructFrac(211);
			$s->setEndStructFrac(302);
			$s->setMissingResiduesCount(13);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4jb8_B"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(154));
			$manager->persist($s);
	
			//-421-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(121);
			$s->setPdbFastaPath("4HRN_A.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(133);
			$s->setMissingResiduesCount(15);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hrn_A"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(155));
			$manager->persist($s);
	
			//-422-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(123);
			$s->setPdbFastaPath("4HRN_B.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(135);
			$s->setMissingResiduesCount(13);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hrn_B"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(155));
			$manager->persist($s);
	
			//-423-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(128);
			$s->setPdbFastaPath("2V4H_D.fasta");
			$s->setStartStructFrac(9);
			$s->setEndStructFrac(136);
			$s->setMissingResiduesCount(8);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_1D5"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(117));
			$manager->persist($s);
	
			//-424-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(124);
			$s->setPdbFastaPath("2JAB_B.fasta");
			$s->setStartStructFrac(12);
			$s->setEndStructFrac(135);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_H10_2_G3"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(125));
			$manager->persist($s);
	
			//-425-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(125);
			$s->setPdbFastaPath("2JAB_C.fasta");
			$s->setStartStructFrac(12);
			$s->setEndStructFrac(136);
			$s->setMissingResiduesCount(11);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_H10_2_G3"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(125));
			$manager->persist($s);
	
			//-426-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setPdbFastaPath("2XEH_B.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(169);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C_Mut6"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(130));
			$manager->persist($s);
	
			//-427-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setPdbFastaPath("2XEH_C.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(169);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C_Mut6"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(130));
			$manager->persist($s);
	
			//-428-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(129);
			$s->setPdbFastaPath("2V5Q_D.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(141);
			$s->setMissingResiduesCount(38);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_3H10"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(128));
			$manager->persist($s);
	
			//-429-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setPdbFastaPath("2BKK_D.fasta");
			$s->setStartStructFrac(11);
			$s->setEndStructFrac(167);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_AR_3A"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(124));
			$manager->persist($s);
	
			//-430-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(155);
			$s->setPdbFastaPath("2BKG_B.fasta");
			$s->setStartStructFrac(12);
			$s->setEndStructFrac(166);
			$s->setMissingResiduesCount(11);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_E3_19"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(123));
			$manager->persist($s);
	
			//-431-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(162);
			$s->setPdbFastaPath("4GMR_B.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(163);
			$s->setMissingResiduesCount(7);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("OR266"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(150));
			$manager->persist($s);
	
			//-432-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setPdbFastaPath("4GPM_B.fasta");
			$s->setStartStructFrac(3);
			$s->setEndStructFrac(159);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4gpm_B"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(151));
			$manager->persist($s);
	
			//-433-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Peptide");
			$s->setLength(12);
			$s->setPdbFastaPath("3DEP_B.fasta");
			$s->setStartStructFrac(156);
			$s->setEndStructFrac(167);
			$s->setMissingResiduesCount(0);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3dep_B"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(35));
			$manager->persist($s);
	
			//-434-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(71);
			$s->setPdbFastaPath("4HRN_C.fasta");
			$s->setStartStructFrac(9);
			$s->setEndStructFrac(79);
			$s->setMissingResiduesCount(32);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P04626"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(155));
			$manager->persist($s);
	
			//-435-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(70);
			$s->setPdbFastaPath("4HRN_D.fasta");
			$s->setStartStructFrac(9);
			$s->setEndStructFrac(78);
			$s->setMissingResiduesCount(33);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P04626"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(155));
			$manager->persist($s);
	
			//-436-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(245);
			$s->setPdbFastaPath("4HBD_A.fasta");
			$s->setStartStructFrac(588);
			$s->setEndStructFrac(832);
			$s->setMissingResiduesCount(31);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q63ZY3"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(156));
			$manager->persist($s);
	
			//-437-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(154);
			$s->setPdbFastaPath("4HLL_A.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(166);
			$s->setMissingResiduesCount(19);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hll_A"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(157));
			$manager->persist($s);
	
			//-438-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(162);
			$s->setPdbFastaPath("4HRL_A.fasta");
			$s->setStartStructFrac(7);
			$s->setEndStructFrac(168);
			$s->setMissingResiduesCount(9);
			$s->setNonRedundantSet(false);
			$s->setObservations("Darpin");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hrl_A"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(158));
			$manager->persist($s);
	
			//-439-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(169);
			$s->setPdbFastaPath("4HRL_C.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(191);
			$s->setMissingResiduesCount(29);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P04626"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(158));
			$manager->persist($s);
	
			//-440-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(123);
			$s->setPdbFastaPath("4HRM_B.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(152);
			$s->setMissingResiduesCount(49);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hrm_B"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(159));
			$manager->persist($s);
	
			//-441-
			$s = new Chain();
			$s->setChain("D");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(119);
			$s->setPdbFastaPath("4HRM_D.fasta");
			$s->setStartStructFrac(14);
			$s->setEndStructFrac(169);
			$s->setMissingResiduesCount(53);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hrm_D"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(159));
			$manager->persist($s);
	
			//-442-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(187);
			$s->setPdbFastaPath("4BSZ_A.fasta");
			$s->setStartStructFrac(12);
			$s->setEndStructFrac(198);
			$s->setMissingResiduesCount(57);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P05750"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(160));
			$manager->persist($s);
	
			//-443-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(150);
			$s->setPdbFastaPath("4BSZ_B.fasta");
			$s->setStartStructFrac(7);
			$s->setEndStructFrac(156);
			$s->setMissingResiduesCount(52);
			$s->setNonRedundantSet(true);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P46683"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(160));
			$manager->persist($s);
	
			//-444-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setPdbFastaPath("4J7W_A.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(169);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4j7w_A"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(162));
			$manager->persist($s);
	
			//-445-
			$s = new Chain();
			$s->setChain("B");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setPdbFastaPath("4J7W_B.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(169);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4j7w_B"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(162));
			$manager->persist($s);
	
			//-446-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Ank");
			$s->setLength(157);
			$s->setPdbFastaPath("4J8Y_A.fasta");
			$s->setStartStructFrac(13);
			$s->setEndStructFrac(169);
			$s->setMissingResiduesCount(12);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4j8y_A"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(163));
			$manager->persist($s);
	
			//-447-
			$s = new Chain();
			$s->setChain("A");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(139);
			$s->setPdbFastaPath("4HRM_A.fasta");
			$s->setStartStructFrac(6);
			$s->setEndStructFrac(182);
			$s->setMissingResiduesCount(59);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P04626"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(159));
			$manager->persist($s);
	
			//-448-
			$s = new Chain();
			$s->setChain("C");
			$s->setType("Ank");
			$s->setSubGroup("Partner");
			$s->setLength(166);
			$s->setPdbFastaPath("4HRM_C.fasta");
			$s->setStartStructFrac(2);
			$s->setEndStructFrac(191);
			$s->setMissingResiduesCount(32);
			$s->setNonRedundantSet(false);
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P04626"));
			$s->setStructure($doctrine->getRepository('LFPStructuralAnksMainBundle:Structure')->findOneById(159));
			$manager->persist($s);
	
		$manager->flush();

		}

		public function getOrder() {
			return 6;
		}
	}