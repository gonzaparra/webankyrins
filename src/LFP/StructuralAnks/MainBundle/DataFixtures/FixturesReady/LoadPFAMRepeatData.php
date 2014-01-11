<?php

	namespace LFP\StructuralAnks\MainBundle\DataFixtures\ORM;

	use Doctrine\Common\DataFixtures\FixtureInterface;
	use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use LFP\StructuralAnks\MainBundle\Entity\PFAMRepeat;
	use Symfony\Component\DependencyInjection\ContainerAwareInterface;
	use Symfony\Component\DependencyInjection\ContainerInterface;

	/**
	 * @author Jorge Cares <reaperjc@gmail.com>
	 */
	class LoadPFAMRepeatData implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
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
			$tableName = $em->getClassMetadata('LFPStructuralAnksMainBundle:PFAMRepeat')->getTableName();
			$em->getConnection()->exec("
				SET foreign_key_checks = 0;
				TRUNCATE $tableName;
				SET foreign_key_checks = 1;
			");

			// Reset ID column
			$em->getConnection()->exec("ALTER TABLE $tableName AUTO_INCREMENT = 1;");
			$doctrine = $this->container->get('doctrine');

	
			//-0-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("1n0q_B"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(57.8);
			$s->setBias(0.1);
			$s->setCEValue(5.7e-20);
			$s->setIEValue(5.7e-20);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(1);
			$s->setAliTo(33);
			$s->setEnvFrom(1);
			$s->setEnvTo(33);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("NGRTPLHLAARNGHLEVVKLLLEAGADVNAKDK");
			$s->setConsensus("1;2;3;4;5;6;7;8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;");
			$manager->persist($s);
	
			//-1-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("1n0q_B"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(57.8);
			$s->setBias(0.1);
			$s->setCEValue(5.7e-20);
			$s->setIEValue(5.7e-20);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(34);
			$s->setAliTo(66);
			$s->setEnvFrom(34);
			$s->setEnvTo(66);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("NGRTPLHLAARNGHLEVVKLLLEAGADVNAKDK");
			$s->setConsensus("34;35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;");
			$manager->persist($s);
	
			//-2-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("1n0q_B"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(43.4);
			$s->setBias(0.1);
			$s->setCEValue(2.1e-15);
			$s->setIEValue(2.1e-15);
			$s->setHmmFrom(1);
			$s->setHmmTo(26);
			$s->setAliFrom(67);
			$s->setAliTo(92);
			$s->setEnvFrom(67);
			$s->setEnvTo(93);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGA");
			$s->setAliRep("NGRTPLHLAARNGHLEVVKLLLEAGA");
			$s->setConsensus("67;68;69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;");
			$manager->persist($s);
	
			//-3-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("2xzd_G"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(13.3);
			$s->setBias(0.1);
			$s->setCEValue(7.2e-06);
			$s->setIEValue(2.2e-05);
			$s->setHmmFrom(8);
			$s->setHmmTo(33);
			$s->setAliFrom(20);
			$s->setAliTo(45);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("EATRAGQDDEVRILMANGADVNAMDD");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;45;");
			$manager->persist($s);
	
			//-4-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("2xzd_G"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(49.9);
			$s->setBias(0.1);
			$s->setCEValue(1.8e-17);
			$s->setIEValue(5.3e-17);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(47);
			$s->setAliTo(77);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GVTPLHLAAKRGHLEIVEVLLKHGADVNASD");
			$s->setConsensus("47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;");
			$manager->persist($s);
	
			//-5-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("2xzd_G"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(50.4);
			$s->setBias(0);
			$s->setCEValue(1.2e-17);
			$s->setIEValue(3.7e-17);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(80);
			$s->setAliTo(111);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GRTPLHLAATVGHLEIVEVLLEYGADVNAQDK");
			$s->setConsensus("80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;");
			$manager->persist($s);
	
			//-6-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("2xzd_G"));
			$s->setPfamRepeat(4);
			$s->setStatus("?");
			$s->setScore(1.7);
			$s->setBias(0);
			$s->setCEValue(0.034);
			$s->setIEValue(0.1);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(113);
			$s->setAliTo(132);
			$s->setEnvFrom(112);
			$s->setEnvTo(135);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;");
			$manager->persist($s);
	
			//-7-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("2xzd_H"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(13.3);
			$s->setBias(0.1);
			$s->setCEValue(7.2e-06);
			$s->setIEValue(2.2e-05);
			$s->setHmmFrom(8);
			$s->setHmmTo(33);
			$s->setAliFrom(20);
			$s->setAliTo(45);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("EATRAGQDDEVRILMANGADVNAMDD");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;45;");
			$manager->persist($s);
	
			//-8-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("2xzd_H"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(49.9);
			$s->setBias(0.1);
			$s->setCEValue(1.8e-17);
			$s->setIEValue(5.3e-17);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(47);
			$s->setAliTo(77);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GVTPLHLAAKRGHLEIVEVLLKHGADVNASD");
			$s->setConsensus("47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;");
			$manager->persist($s);
	
			//-9-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("2xzd_H"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(50.4);
			$s->setBias(0);
			$s->setCEValue(1.2e-17);
			$s->setIEValue(3.7e-17);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(80);
			$s->setAliTo(111);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GRTPLHLAATVGHLEIVEVLLEYGADVNAQDK");
			$s->setConsensus("80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;");
			$manager->persist($s);
	
			//-10-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("2xzd_H"));
			$s->setPfamRepeat(4);
			$s->setStatus("?");
			$s->setScore(1.7);
			$s->setBias(0);
			$s->setCEValue(0.034);
			$s->setIEValue(0.1);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(113);
			$s->setAliTo(132);
			$s->setEnvFrom(112);
			$s->setEnvTo(135);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;");
			$manager->persist($s);
	
			//-11-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("2y0b_G"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(13.3);
			$s->setBias(0.1);
			$s->setCEValue(7.2e-06);
			$s->setIEValue(2.2e-05);
			$s->setHmmFrom(8);
			$s->setHmmTo(33);
			$s->setAliFrom(20);
			$s->setAliTo(45);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("EATRAGQDDEVRILMANGADVNAMDD");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;45;");
			$manager->persist($s);
	
			//-12-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("2y0b_G"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(52.4);
			$s->setBias(0.1);
			$s->setCEValue(2.9e-18);
			$s->setIEValue(8.7e-18);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(47);
			$s->setAliTo(77);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GVTPLHLAAKRGHLEIVEVLLKHGADVNARD");
			$s->setConsensus("47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;");
			$manager->persist($s);
	
			//-13-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("2y0b_G"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(50.4);
			$s->setBias(0);
			$s->setCEValue(1.2e-17);
			$s->setIEValue(3.7e-17);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(80);
			$s->setAliTo(111);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GRTPLHLAATVGHLEIVEVLLEYGADVNAQDK");
			$s->setConsensus("80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;");
			$manager->persist($s);
	
			//-14-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("2y0b_G"));
			$s->setPfamRepeat(4);
			$s->setStatus("?");
			$s->setScore(1.7);
			$s->setBias(0);
			$s->setCEValue(0.034);
			$s->setIEValue(0.1);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(113);
			$s->setAliTo(132);
			$s->setEnvFrom(112);
			$s->setEnvTo(135);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;");
			$manager->persist($s);
	
			//-15-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("2y0b_H"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(13.3);
			$s->setBias(0.1);
			$s->setCEValue(7.2e-06);
			$s->setIEValue(2.2e-05);
			$s->setHmmFrom(8);
			$s->setHmmTo(33);
			$s->setAliFrom(20);
			$s->setAliTo(45);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("EATRAGQDDEVRILMANGADVNAMDD");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;45;");
			$manager->persist($s);
	
			//-16-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("2y0b_H"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(52.4);
			$s->setBias(0.1);
			$s->setCEValue(2.9e-18);
			$s->setIEValue(8.7e-18);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(47);
			$s->setAliTo(77);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GVTPLHLAAKRGHLEIVEVLLKHGADVNARD");
			$s->setConsensus("47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;");
			$manager->persist($s);
	
			//-17-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("2y0b_H"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(50.4);
			$s->setBias(0);
			$s->setCEValue(1.2e-17);
			$s->setIEValue(3.7e-17);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(80);
			$s->setAliTo(111);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GRTPLHLAATVGHLEIVEVLLEYGADVNAQDK");
			$s->setConsensus("80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;");
			$manager->persist($s);
	
			//-18-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("2y0b_H"));
			$s->setPfamRepeat(4);
			$s->setStatus("?");
			$s->setScore(1.7);
			$s->setBias(0);
			$s->setCEValue(0.034);
			$s->setIEValue(0.1);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(113);
			$s->setAliTo(132);
			$s->setEnvFrom(112);
			$s->setEnvTo(135);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;");
			$manager->persist($s);
	
			//-19-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3b95_P"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(29.8);
			$s->setBias(0.1);
			$s->setCEValue(4.2e-11);
			$s->setIEValue(6.3e-11);
			$s->setHmmFrom(3);
			$s->setHmmTo(29);
			$s->setAliFrom(12);
			$s->setAliTo(38);
			$s->setEnvFrom(10);
			$s->setEnvTo(41);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdln");
			$s->setAliRep("RSPLHAAAEAGHVDICHMLVQAGANID");
			$s->setConsensus("12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;");
			$manager->persist($s);
	
			//-20-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3b95_P"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(32.2);
			$s->setBias(0);
			$s->setCEValue(7.1e-12);
			$s->setIEValue(1.1e-11);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(43);
			$s->setAliTo(74);
			$s->setEnvFrom(43);
			$s->setEnvTo(75);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("DQRTPLMEAAENNHLEAVKYLIKAGALVDPKD");
			$s->setConsensus("43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;");
			$manager->persist($s);
	
			//-21-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3b95_P"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(31.3);
			$s->setBias(0);
			$s->setCEValue(1.4e-11);
			$s->setIEValue(2e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(25);
			$s->setAliFrom(77);
			$s->setAliTo(101);
			$s->setEnvFrom(76);
			$s->setEnvTo(109);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls.qG");
			$s->setAliRep("GSTCLHLAAKKGHYEVVQYLLSnGQ");
			$s->setConsensus("77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;100;101;");
			$s->setInsertions(";n;23");
			$manager->persist($s);
	
			//-22-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3b95_P"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(31.6);
			$s->setBias(0);
			$s->setCEValue(1.1e-11);
			$s->setIEValue(1.7e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(111);
			$s->setAliTo(142);
			$s->setEnvFrom(110);
			$s->setEnvTo(142);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GWTPMIWATEYKHVDLVKLLLSKGSDINIRDN");
			$s->setConsensus("111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;");
			$manager->persist($s);
	
			//-23-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3b95_P"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(23.4);
			$s->setBias(0.2);
			$s->setCEValue(4.6e-09);
			$s->setIEValue(6.9e-09);
			$s->setHmmFrom(5);
			$s->setHmmTo(32);
			$s->setAliFrom(147);
			$s->setAliTo(174);
			$s->setEnvFrom(144);
			$s->setEnvTo(175);
			$s->setAliHmm("PLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("CLHWAAFSGCVDIAEILLAAKCDLHAVN");
			$s->setConsensus("147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;166;167;168;169;170;171;172;173;174;");
			$manager->persist($s);
	
			//-24-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3b95_P"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(25.7);
			$s->setBias(0);
			$s->setCEValue(8.1e-10);
			$s->setIEValue(1.2e-09);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(176);
			$s->setAliTo(208);
			$s->setEnvFrom(176);
			$s->setEnvTo(208);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("HGDSPLHIAARENRYDCVVLFLSRDSDVTLKNK");
			$s->setConsensus("176;177;178;179;180;181;182;183;184;185;186;187;188;189;190;191;192;193;194;195;196;197;198;199;200;201;202;203;204;205;206;207;208;");
			$manager->persist($s);
	
			//-25-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3b95_P"));
			$s->setPfamRepeat(7);
			$s->setStatus("!");
			$s->setScore(6.1);
			$s->setBias(0);
			$s->setCEValue(0.0014);
			$s->setIEValue(0.0021);
			$s->setHmmFrom(2);
			$s->setHmmTo(13);
			$s->setAliFrom(210);
			$s->setAliTo(221);
			$s->setEnvFrom(209);
			$s->setEnvTo(233);
			$s->setAliHmm("GfTPLHlAalrg");
			$s->setAliRep("GETPLQCASLNS");
			$s->setConsensus("210;211;212;213;214;215;216;217;218;219;220;221;");
			$manager->persist($s);
	
			//-26-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3dep_B"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(3.7);
			$s->setBias(0);
			$s->setCEValue(0.0038);
			$s->setIEValue(0.0077);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(45);
			$s->setAliTo(73);
			$s->setEnvFrom(44);
			$s->setEnvTo(74);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("ETPWWTAARKADEQALSQLLE-DRDVDAVD");
			$s->setConsensus("45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;-;67;68;69;70;71;72;73;74;");
			$s->setDeletions(";q;22");
			$manager->persist($s);
	
			//-27-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3dep_B"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(19.6);
			$s->setBias(0.1);
			$s->setCEValue(3.5e-08);
			$s->setIEValue(7e-08);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(75);
			$s->setAliTo(106);
			$s->setEnvFrom(75);
			$s->setEnvTo(107);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NGRTALLFVAGLGSDKCVRLLAEAGADLDHRD");
			$s->setConsensus("75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;");
			$manager->persist($s);
	
			//-28-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3dep_B"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(26);
			$s->setBias(0);
			$s->setCEValue(3.3e-10);
			$s->setIEValue(6.7e-10);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(110);
			$s->setAliTo(140);
			$s->setEnvFrom(109);
			$s->setEnvTo(141);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLTALHMAAGYVRPEVVEALVELGADIEVED");
			$s->setConsensus("110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;");
			$manager->persist($s);
	
			//-29-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3noc_D"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(17.3);
			$s->setBias(0);
			$s->setCEValue(3.9e-07);
			$s->setIEValue(9.8e-07);
			$s->setHmmFrom(8);
			$s->setHmmTo(32);
			$s->setAliFrom(20);
			$s->setAliTo(44);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("EAARAGQDDEVRILMANGADVNARD");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;");
			$manager->persist($s);
	
			//-30-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3noc_D"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(50);
			$s->setBias(0);
			$s->setCEValue(1.7e-17);
			$s->setIEValue(4.3e-17);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(47);
			$s->setAliTo(77);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWTPLHLAAHFGHLEIVEVLLKNGADVNAKD");
			$s->setConsensus("47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;");
			$manager->persist($s);
	
			//-31-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3noc_D"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(48.4);
			$s->setBias(0.1);
			$s->setCEValue(5.5e-17);
			$s->setIEValue(1.4e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(80);
			$s->setAliTo(110);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GVTPLHLAARRGHLEIVEVLLKNGADVNASD");
			$s->setConsensus("80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;");
			$manager->persist($s);
	
			//-32-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3noc_D"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(56.5);
			$s->setBias(0);
			$s->setCEValue(1.5e-19);
			$s->setIEValue(3.6e-19);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(112);
			$s->setAliTo(144);
			$s->setEnvFrom(112);
			$s->setEnvTo(144);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("HGFTPLHLAAKRGHLEIVEVLLKNGADVNAQDK");
			$s->setConsensus("112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;");
			$manager->persist($s);
	
			//-33-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3noc_D"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(1.2);
			$s->setBias(0);
			$s->setCEValue(0.048);
			$s->setIEValue(0.12);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(146);
			$s->setAliTo(165);
			$s->setEnvFrom(145);
			$s->setEnvTo(168);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;");
			$manager->persist($s);
	
			//-34-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3noc_E"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(17.3);
			$s->setBias(0);
			$s->setCEValue(3.9e-07);
			$s->setIEValue(9.8e-07);
			$s->setHmmFrom(8);
			$s->setHmmTo(32);
			$s->setAliFrom(20);
			$s->setAliTo(44);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("EAARAGQDDEVRILMANGADVNARD");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;");
			$manager->persist($s);
	
			//-35-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3noc_E"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(50);
			$s->setBias(0);
			$s->setCEValue(1.7e-17);
			$s->setIEValue(4.3e-17);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(47);
			$s->setAliTo(77);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWTPLHLAAHFGHLEIVEVLLKNGADVNAKD");
			$s->setConsensus("47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;");
			$manager->persist($s);
	
			//-36-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3noc_E"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(48.4);
			$s->setBias(0.1);
			$s->setCEValue(5.5e-17);
			$s->setIEValue(1.4e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(80);
			$s->setAliTo(110);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GVTPLHLAARRGHLEIVEVLLKNGADVNASD");
			$s->setConsensus("80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;");
			$manager->persist($s);
	
			//-37-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3noc_E"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(56.5);
			$s->setBias(0);
			$s->setCEValue(1.5e-19);
			$s->setIEValue(3.6e-19);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(112);
			$s->setAliTo(144);
			$s->setEnvFrom(112);
			$s->setEnvTo(144);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("HGFTPLHLAAKRGHLEIVEVLLKNGADVNAQDK");
			$s->setConsensus("112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;");
			$manager->persist($s);
	
			//-38-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3noc_E"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(1.2);
			$s->setBias(0);
			$s->setCEValue(0.048);
			$s->setIEValue(0.12);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(146);
			$s->setAliTo(165);
			$s->setEnvFrom(145);
			$s->setEnvTo(168);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;");
			$manager->persist($s);
	
			//-39-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3nog_D"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(14.6);
			$s->setBias(0.1);
			$s->setCEValue(2.7e-06);
			$s->setIEValue(6.8e-06);
			$s->setHmmFrom(8);
			$s->setHmmTo(32);
			$s->setAliFrom(20);
			$s->setAliTo(44);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("EAARAGQDDEVRILMANGADVNASD");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;");
			$manager->persist($s);
	
			//-40-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3nog_D"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(47.3);
			$s->setBias(0);
			$s->setCEValue(1.2e-16);
			$s->setIEValue(3e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(47);
			$s->setAliTo(77);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWTPLHLAAYFGHLEIVEVLLKNGADVNADD");
			$s->setConsensus("47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;");
			$manager->persist($s);
	
			//-41-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3nog_D"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(45.7);
			$s->setBias(0.2);
			$s->setCEValue(4e-16);
			$s->setIEValue(9.9e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(80);
			$s->setAliTo(110);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GVTPLHLAADRGHLEVVEVLLKNGADVNAND");
			$s->setConsensus("80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;");
			$manager->persist($s);
	
			//-42-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3nog_D"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(52.9);
			$s->setBias(0.1);
			$s->setCEValue(2e-18);
			$s->setIEValue(4.9e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(112);
			$s->setAliTo(144);
			$s->setEnvFrom(112);
			$s->setEnvTo(144);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("NGFTPLHLAANIGHLEIVEVLLKHGADVNAQDK");
			$s->setConsensus("112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;");
			$manager->persist($s);
	
			//-43-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3nog_D"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(1.2);
			$s->setBias(0);
			$s->setCEValue(0.048);
			$s->setIEValue(0.12);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(146);
			$s->setAliTo(165);
			$s->setEnvFrom(145);
			$s->setEnvTo(168);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;");
			$manager->persist($s);
	
			//-44-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3nog_E"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(14.6);
			$s->setBias(0.1);
			$s->setCEValue(2.7e-06);
			$s->setIEValue(6.8e-06);
			$s->setHmmFrom(8);
			$s->setHmmTo(32);
			$s->setAliFrom(20);
			$s->setAliTo(44);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("EAARAGQDDEVRILMANGADVNASD");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;");
			$manager->persist($s);
	
			//-45-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3nog_E"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(47.3);
			$s->setBias(0);
			$s->setCEValue(1.2e-16);
			$s->setIEValue(3e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(47);
			$s->setAliTo(77);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWTPLHLAAYFGHLEIVEVLLKNGADVNADD");
			$s->setConsensus("47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;");
			$manager->persist($s);
	
			//-46-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3nog_E"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(45.7);
			$s->setBias(0.2);
			$s->setCEValue(4e-16);
			$s->setIEValue(9.9e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(80);
			$s->setAliTo(110);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GVTPLHLAADRGHLEVVEVLLKNGADVNAND");
			$s->setConsensus("80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;");
			$manager->persist($s);
	
			//-47-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3nog_E"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(52.9);
			$s->setBias(0.1);
			$s->setCEValue(2e-18);
			$s->setIEValue(4.9e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(112);
			$s->setAliTo(144);
			$s->setEnvFrom(112);
			$s->setEnvTo(144);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("NGFTPLHLAANIGHLEIVEVLLKHGADVNAQDK");
			$s->setConsensus("112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;");
			$manager->persist($s);
	
			//-48-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3nog_E"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(1.2);
			$s->setBias(0);
			$s->setCEValue(0.048);
			$s->setIEValue(0.12);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(146);
			$s->setAliTo(165);
			$s->setEnvFrom(145);
			$s->setEnvTo(168);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;");
			$manager->persist($s);
	
			//-49-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_A"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(16.2);
			$s->setBias(0.2);
			$s->setCEValue(8.9e-07);
			$s->setIEValue(1.8e-06);
			$s->setHmmFrom(8);
			$s->setHmmTo(33);
			$s->setAliFrom(12);
			$s->setAliTo(37);
			$s->setEnvFrom(10);
			$s->setEnvTo(37);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("EAAAAGQDDEVRILMANGADVNATDD");
			$s->setConsensus("12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;");
			$manager->persist($s);
	
			//-50-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_A"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(47.1);
			$s->setBias(0.2);
			$s->setCEValue(1.4e-16);
			$s->setIEValue(2.7e-16);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(38);
			$s->setAliTo(69);
			$s->setEnvFrom(38);
			$s->setEnvTo(70);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NGLTPLHLAAANGQLEIVEVLLKNGADVNASD");
			$s->setConsensus("38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;");
			$manager->persist($s);
	
			//-51-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_A"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(46.3);
			$s->setBias(0.1);
			$s->setCEValue(2.5e-16);
			$s->setIEValue(5e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(72);
			$s->setAliTo(102);
			$s->setEnvFrom(71);
			$s->setEnvTo(103);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GITPLHLAAYDGHLEIVEVLLKHGADVNAYD");
			$s->setConsensus("72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;");
			$manager->persist($s);
	
			//-52-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_A"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(51.8);
			$s->setBias(0.1);
			$s->setCEValue(4.4e-18);
			$s->setIEValue(8.7e-18);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(105);
			$s->setAliTo(135);
			$s->setEnvFrom(104);
			$s->setEnvTo(136);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWTPLHLAALSGQLEIVEVLLKHGADVNAQD");
			$s->setConsensus("105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;");
			$manager->persist($s);
	
			//-53-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_A"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(-2.2);
			$s->setBias(0);
			$s->setCEValue(0.59);
			$s->setIEValue(1.2);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(138);
			$s->setAliTo(157);
			$s->setEnvFrom(138);
			$s->setEnvTo(157);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GLTAFDISINQGQEDLAEIL");
			$s->setConsensus("138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;157;");
			$manager->persist($s);
	
			//-54-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_B"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(16.2);
			$s->setBias(0.2);
			$s->setCEValue(8.9e-07);
			$s->setIEValue(1.8e-06);
			$s->setHmmFrom(8);
			$s->setHmmTo(33);
			$s->setAliFrom(12);
			$s->setAliTo(37);
			$s->setEnvFrom(10);
			$s->setEnvTo(37);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("EAAAAGQDDEVRILMANGADVNATDD");
			$s->setConsensus("12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;");
			$manager->persist($s);
	
			//-55-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_B"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(47.1);
			$s->setBias(0.2);
			$s->setCEValue(1.4e-16);
			$s->setIEValue(2.7e-16);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(38);
			$s->setAliTo(69);
			$s->setEnvFrom(38);
			$s->setEnvTo(70);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NGLTPLHLAAANGQLEIVEVLLKNGADVNASD");
			$s->setConsensus("38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;");
			$manager->persist($s);
	
			//-56-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_B"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(46.3);
			$s->setBias(0.1);
			$s->setCEValue(2.5e-16);
			$s->setIEValue(5e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(72);
			$s->setAliTo(102);
			$s->setEnvFrom(71);
			$s->setEnvTo(103);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GITPLHLAAYDGHLEIVEVLLKHGADVNAYD");
			$s->setConsensus("72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;");
			$manager->persist($s);
	
			//-57-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_B"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(51.8);
			$s->setBias(0.1);
			$s->setCEValue(4.4e-18);
			$s->setIEValue(8.7e-18);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(105);
			$s->setAliTo(135);
			$s->setEnvFrom(104);
			$s->setEnvTo(136);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWTPLHLAALSGQLEIVEVLLKHGADVNAQD");
			$s->setConsensus("105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;");
			$manager->persist($s);
	
			//-58-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_B"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(-2.2);
			$s->setBias(0);
			$s->setCEValue(0.59);
			$s->setIEValue(1.2);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(138);
			$s->setAliTo(157);
			$s->setEnvFrom(138);
			$s->setEnvTo(157);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GLTAFDISINQGQEDLAEIL");
			$s->setConsensus("138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;157;");
			$manager->persist($s);
	
			//-59-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_C"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(16.2);
			$s->setBias(0.2);
			$s->setCEValue(8.9e-07);
			$s->setIEValue(1.8e-06);
			$s->setHmmFrom(8);
			$s->setHmmTo(33);
			$s->setAliFrom(12);
			$s->setAliTo(37);
			$s->setEnvFrom(10);
			$s->setEnvTo(37);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("EAAAAGQDDEVRILMANGADVNATDD");
			$s->setConsensus("12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;");
			$manager->persist($s);
	
			//-60-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_C"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(47.1);
			$s->setBias(0.2);
			$s->setCEValue(1.4e-16);
			$s->setIEValue(2.7e-16);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(38);
			$s->setAliTo(69);
			$s->setEnvFrom(38);
			$s->setEnvTo(70);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NGLTPLHLAAANGQLEIVEVLLKNGADVNASD");
			$s->setConsensus("38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;");
			$manager->persist($s);
	
			//-61-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_C"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(46.3);
			$s->setBias(0.1);
			$s->setCEValue(2.5e-16);
			$s->setIEValue(5e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(72);
			$s->setAliTo(102);
			$s->setEnvFrom(71);
			$s->setEnvTo(103);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GITPLHLAAYDGHLEIVEVLLKHGADVNAYD");
			$s->setConsensus("72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;");
			$manager->persist($s);
	
			//-62-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_C"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(51.8);
			$s->setBias(0.1);
			$s->setCEValue(4.4e-18);
			$s->setIEValue(8.7e-18);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(105);
			$s->setAliTo(135);
			$s->setEnvFrom(104);
			$s->setEnvTo(136);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWTPLHLAALSGQLEIVEVLLKHGADVNAQD");
			$s->setConsensus("105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;");
			$manager->persist($s);
	
			//-63-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_C"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(-2.2);
			$s->setBias(0);
			$s->setCEValue(0.59);
			$s->setIEValue(1.2);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(138);
			$s->setAliTo(157);
			$s->setEnvFrom(138);
			$s->setEnvTo(157);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GLTAFDISINQGQEDLAEIL");
			$s->setConsensus("138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;157;");
			$manager->persist($s);
	
			//-64-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_D"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(16.2);
			$s->setBias(0.2);
			$s->setCEValue(8.9e-07);
			$s->setIEValue(1.8e-06);
			$s->setHmmFrom(8);
			$s->setHmmTo(33);
			$s->setAliFrom(12);
			$s->setAliTo(37);
			$s->setEnvFrom(10);
			$s->setEnvTo(37);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("EAAAAGQDDEVRILMANGADVNATDD");
			$s->setConsensus("12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;");
			$manager->persist($s);
	
			//-65-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_D"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(47.1);
			$s->setBias(0.2);
			$s->setCEValue(1.4e-16);
			$s->setIEValue(2.7e-16);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(38);
			$s->setAliTo(69);
			$s->setEnvFrom(38);
			$s->setEnvTo(70);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NGLTPLHLAAANGQLEIVEVLLKNGADVNASD");
			$s->setConsensus("38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;");
			$manager->persist($s);
	
			//-66-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_D"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(46.3);
			$s->setBias(0.1);
			$s->setCEValue(2.5e-16);
			$s->setIEValue(5e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(72);
			$s->setAliTo(102);
			$s->setEnvFrom(71);
			$s->setEnvTo(103);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GITPLHLAAYDGHLEIVEVLLKHGADVNAYD");
			$s->setConsensus("72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;");
			$manager->persist($s);
	
			//-67-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_D"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(51.8);
			$s->setBias(0.1);
			$s->setCEValue(4.4e-18);
			$s->setIEValue(8.7e-18);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(105);
			$s->setAliTo(135);
			$s->setEnvFrom(104);
			$s->setEnvTo(136);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWTPLHLAALSGQLEIVEVLLKHGADVNAQD");
			$s->setConsensus("105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;");
			$manager->persist($s);
	
			//-68-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9n_D"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(-2.2);
			$s->setBias(0);
			$s->setCEValue(0.59);
			$s->setIEValue(1.2);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(138);
			$s->setAliTo(157);
			$s->setEnvFrom(138);
			$s->setEnvTo(157);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GLTAFDISINQGQEDLAEIL");
			$s->setConsensus("138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;157;");
			$manager->persist($s);
	
			//-69-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_A"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(16.2);
			$s->setBias(0.2);
			$s->setCEValue(8.9e-07);
			$s->setIEValue(1.8e-06);
			$s->setHmmFrom(8);
			$s->setHmmTo(33);
			$s->setAliFrom(12);
			$s->setAliTo(37);
			$s->setEnvFrom(10);
			$s->setEnvTo(37);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("EAAAAGQDDEVRILMANGADVNATDD");
			$s->setConsensus("12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;");
			$manager->persist($s);
	
			//-70-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_A"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(47.1);
			$s->setBias(0.2);
			$s->setCEValue(1.4e-16);
			$s->setIEValue(2.7e-16);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(38);
			$s->setAliTo(69);
			$s->setEnvFrom(38);
			$s->setEnvTo(70);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NGLTPLHLAAANGQLEIVEVLLKNGADVNASD");
			$s->setConsensus("38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;");
			$manager->persist($s);
	
			//-71-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_A"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(46.3);
			$s->setBias(0.1);
			$s->setCEValue(2.5e-16);
			$s->setIEValue(5e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(72);
			$s->setAliTo(102);
			$s->setEnvFrom(71);
			$s->setEnvTo(103);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GITPLHLAAYDGHLEIVEVLLKHGADVNAYD");
			$s->setConsensus("72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;");
			$manager->persist($s);
	
			//-72-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_A"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(51.8);
			$s->setBias(0.1);
			$s->setCEValue(4.4e-18);
			$s->setIEValue(8.7e-18);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(105);
			$s->setAliTo(135);
			$s->setEnvFrom(104);
			$s->setEnvTo(136);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWTPLHLAALSGQLEIVEVLLKHGADVNAQD");
			$s->setConsensus("105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;");
			$manager->persist($s);
	
			//-73-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_A"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(-2.2);
			$s->setBias(0);
			$s->setCEValue(0.59);
			$s->setIEValue(1.2);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(138);
			$s->setAliTo(157);
			$s->setEnvFrom(138);
			$s->setEnvTo(157);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GLTAFDISINQGQEDLAEIL");
			$s->setConsensus("138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;157;");
			$manager->persist($s);
	
			//-74-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_B"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(16.2);
			$s->setBias(0.2);
			$s->setCEValue(8.9e-07);
			$s->setIEValue(1.8e-06);
			$s->setHmmFrom(8);
			$s->setHmmTo(33);
			$s->setAliFrom(12);
			$s->setAliTo(37);
			$s->setEnvFrom(10);
			$s->setEnvTo(37);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("EAAAAGQDDEVRILMANGADVNATDD");
			$s->setConsensus("12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;");
			$manager->persist($s);
	
			//-75-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_B"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(47.1);
			$s->setBias(0.2);
			$s->setCEValue(1.4e-16);
			$s->setIEValue(2.7e-16);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(38);
			$s->setAliTo(69);
			$s->setEnvFrom(38);
			$s->setEnvTo(70);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NGLTPLHLAAANGQLEIVEVLLKNGADVNASD");
			$s->setConsensus("38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;");
			$manager->persist($s);
	
			//-76-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_B"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(46.3);
			$s->setBias(0.1);
			$s->setCEValue(2.5e-16);
			$s->setIEValue(5e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(72);
			$s->setAliTo(102);
			$s->setEnvFrom(71);
			$s->setEnvTo(103);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GITPLHLAAYDGHLEIVEVLLKHGADVNAYD");
			$s->setConsensus("72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;");
			$manager->persist($s);
	
			//-77-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_B"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(51.8);
			$s->setBias(0.1);
			$s->setCEValue(4.4e-18);
			$s->setIEValue(8.7e-18);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(105);
			$s->setAliTo(135);
			$s->setEnvFrom(104);
			$s->setEnvTo(136);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWTPLHLAALSGQLEIVEVLLKHGADVNAQD");
			$s->setConsensus("105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;");
			$manager->persist($s);
	
			//-78-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_B"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(-2.2);
			$s->setBias(0);
			$s->setCEValue(0.59);
			$s->setIEValue(1.2);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(138);
			$s->setAliTo(157);
			$s->setEnvFrom(138);
			$s->setEnvTo(157);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GLTAFDISINQGQEDLAEIL");
			$s->setConsensus("138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;157;");
			$manager->persist($s);
	
			//-79-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_C"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(16.2);
			$s->setBias(0.2);
			$s->setCEValue(8.9e-07);
			$s->setIEValue(1.8e-06);
			$s->setHmmFrom(8);
			$s->setHmmTo(33);
			$s->setAliFrom(12);
			$s->setAliTo(37);
			$s->setEnvFrom(10);
			$s->setEnvTo(37);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("EAAAAGQDDEVRILMANGADVNATDD");
			$s->setConsensus("12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;");
			$manager->persist($s);
	
			//-80-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_C"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(47.1);
			$s->setBias(0.2);
			$s->setCEValue(1.4e-16);
			$s->setIEValue(2.7e-16);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(38);
			$s->setAliTo(69);
			$s->setEnvFrom(38);
			$s->setEnvTo(70);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NGLTPLHLAAANGQLEIVEVLLKNGADVNASD");
			$s->setConsensus("38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;");
			$manager->persist($s);
	
			//-81-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_C"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(46.3);
			$s->setBias(0.1);
			$s->setCEValue(2.5e-16);
			$s->setIEValue(5e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(72);
			$s->setAliTo(102);
			$s->setEnvFrom(71);
			$s->setEnvTo(103);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GITPLHLAAYDGHLEIVEVLLKHGADVNAYD");
			$s->setConsensus("72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;");
			$manager->persist($s);
	
			//-82-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_C"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(51.8);
			$s->setBias(0.1);
			$s->setCEValue(4.4e-18);
			$s->setIEValue(8.7e-18);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(105);
			$s->setAliTo(135);
			$s->setEnvFrom(104);
			$s->setEnvTo(136);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWTPLHLAALSGQLEIVEVLLKHGADVNAQD");
			$s->setConsensus("105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;");
			$manager->persist($s);
	
			//-83-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_C"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(-2.2);
			$s->setBias(0);
			$s->setCEValue(0.59);
			$s->setIEValue(1.2);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(138);
			$s->setAliTo(157);
			$s->setEnvFrom(138);
			$s->setEnvTo(157);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GLTAFDISINQGQEDLAEIL");
			$s->setConsensus("138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;157;");
			$manager->persist($s);
	
			//-84-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_D"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(16.2);
			$s->setBias(0.2);
			$s->setCEValue(8.9e-07);
			$s->setIEValue(1.8e-06);
			$s->setHmmFrom(8);
			$s->setHmmTo(33);
			$s->setAliFrom(12);
			$s->setAliTo(37);
			$s->setEnvFrom(10);
			$s->setEnvTo(37);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("EAAAAGQDDEVRILMANGADVNATDD");
			$s->setConsensus("12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;");
			$manager->persist($s);
	
			//-85-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_D"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(47.1);
			$s->setBias(0.2);
			$s->setCEValue(1.4e-16);
			$s->setIEValue(2.7e-16);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(38);
			$s->setAliTo(69);
			$s->setEnvFrom(38);
			$s->setEnvTo(70);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NGLTPLHLAAANGQLEIVEVLLKNGADVNASD");
			$s->setConsensus("38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;");
			$manager->persist($s);
	
			//-86-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_D"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(46.3);
			$s->setBias(0.1);
			$s->setCEValue(2.5e-16);
			$s->setIEValue(5e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(72);
			$s->setAliTo(102);
			$s->setEnvFrom(71);
			$s->setEnvTo(103);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GITPLHLAAYDGHLEIVEVLLKHGADVNAYD");
			$s->setConsensus("72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;");
			$manager->persist($s);
	
			//-87-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_D"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(51.8);
			$s->setBias(0.1);
			$s->setCEValue(4.4e-18);
			$s->setIEValue(8.7e-18);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(105);
			$s->setAliTo(135);
			$s->setEnvFrom(104);
			$s->setEnvTo(136);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWTPLHLAALSGQLEIVEVLLKHGADVNAQD");
			$s->setConsensus("105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;");
			$manager->persist($s);
	
			//-88-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3q9u_D"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(-2.2);
			$s->setBias(0);
			$s->setCEValue(0.59);
			$s->setIEValue(1.2);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(138);
			$s->setAliTo(157);
			$s->setEnvFrom(138);
			$s->setEnvTo(157);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GLTAFDISINQGQEDLAEIL");
			$s->setConsensus("138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;157;");
			$manager->persist($s);
	
			//-89-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_E"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(2.7);
			$s->setBias(0);
			$s->setCEValue(0.033);
			$s->setIEValue(0.066);
			$s->setHmmFrom(7);
			$s->setHmmTo(23);
			$s->setAliFrom(13);
			$s->setAliTo(29);
			$s->setEnvFrom(12);
			$s->setEnvTo(37);
			$s->setAliHmm("HlAalrgnlevvklLls");
			$s->setAliRep("LEAAKAGDVETVKKLCT");
			$s->setConsensus("13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;");
			$manager->persist($s);
	
			//-90-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_E"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(40.5);
			$s->setBias(0);
			$s->setCEValue(3.3e-14);
			$s->setIEValue(6.7e-14);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(44);
			$s->setAliTo(73);
			$s->setEnvFrom(41);
			$s->setEnvTo(73);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHFAAGYNRVSVVEYLLQHGADVHAKDK");
			$s->setConsensus("44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;");
			$manager->persist($s);
	
			//-91-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_E"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(31.4);
			$s->setBias(0.1);
			$s->setCEValue(2.6e-11);
			$s->setIEValue(5.1e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(75);
			$s->setAliTo(105);
			$s->setEnvFrom(74);
			$s->setEnvTo(106);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLVPLHNACSYGHYEVAELLVKHGAVVNVAD");
			$s->setConsensus("75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;");
			$manager->persist($s);
	
			//-92-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_E"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(38.2);
			$s->setBias(0);
			$s->setCEValue(1.8e-13);
			$s->setIEValue(3.6e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(109);
			$s->setAliTo(138);
			$s->setEnvFrom(107);
			$s->setEnvTo(139);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("FTPLHEAAAKGKYEICKLLLQHGADPTKKN");
			$s->setConsensus("109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;");
			$manager->persist($s);
	
			//-93-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_E"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(3.3);
			$s->setBias(0);
			$s->setCEValue(0.022);
			$s->setIEValue(0.043);
			$s->setHmmFrom(1);
			$s->setHmmTo(8);
			$s->setAliFrom(140);
			$s->setAliTo(147);
			$s->setEnvFrom(140);
			$s->setEnvTo(159);
			$s->setAliHmm("dGfTPLHl");
			$s->setAliRep("DGNTPLDL");
			$s->setConsensus("140;141;142;143;144;145;146;147;");
			$manager->persist($s);
	
			//-94-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_F"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(2.7);
			$s->setBias(0);
			$s->setCEValue(0.033);
			$s->setIEValue(0.066);
			$s->setHmmFrom(7);
			$s->setHmmTo(23);
			$s->setAliFrom(13);
			$s->setAliTo(29);
			$s->setEnvFrom(12);
			$s->setEnvTo(37);
			$s->setAliHmm("HlAalrgnlevvklLls");
			$s->setAliRep("LEAAKAGDVETVKKLCT");
			$s->setConsensus("13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;");
			$manager->persist($s);
	
			//-95-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_F"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(40.5);
			$s->setBias(0);
			$s->setCEValue(3.3e-14);
			$s->setIEValue(6.7e-14);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(44);
			$s->setAliTo(73);
			$s->setEnvFrom(41);
			$s->setEnvTo(73);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHFAAGYNRVSVVEYLLQHGADVHAKDK");
			$s->setConsensus("44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;");
			$manager->persist($s);
	
			//-96-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_F"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(31.4);
			$s->setBias(0.1);
			$s->setCEValue(2.6e-11);
			$s->setIEValue(5.1e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(75);
			$s->setAliTo(105);
			$s->setEnvFrom(74);
			$s->setEnvTo(106);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLVPLHNACSYGHYEVAELLVKHGAVVNVAD");
			$s->setConsensus("75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;");
			$manager->persist($s);
	
			//-97-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_F"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(38.2);
			$s->setBias(0);
			$s->setCEValue(1.8e-13);
			$s->setIEValue(3.6e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(109);
			$s->setAliTo(138);
			$s->setEnvFrom(107);
			$s->setEnvTo(139);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("FTPLHEAAAKGKYEICKLLLQHGADPTKKN");
			$s->setConsensus("109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;");
			$manager->persist($s);
	
			//-98-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_F"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(3.3);
			$s->setBias(0);
			$s->setCEValue(0.022);
			$s->setIEValue(0.043);
			$s->setHmmFrom(1);
			$s->setHmmTo(8);
			$s->setAliFrom(140);
			$s->setAliTo(147);
			$s->setEnvFrom(140);
			$s->setEnvTo(159);
			$s->setAliHmm("dGfTPLHl");
			$s->setAliRep("DGNTPLDL");
			$s->setConsensus("140;141;142;143;144;145;146;147;");
			$manager->persist($s);
	
			//-99-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_G"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(2.7);
			$s->setBias(0);
			$s->setCEValue(0.033);
			$s->setIEValue(0.066);
			$s->setHmmFrom(7);
			$s->setHmmTo(23);
			$s->setAliFrom(13);
			$s->setAliTo(29);
			$s->setEnvFrom(12);
			$s->setEnvTo(37);
			$s->setAliHmm("HlAalrgnlevvklLls");
			$s->setAliRep("LEAAKAGDVETVKKLCT");
			$s->setConsensus("13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;");
			$manager->persist($s);
	
			//-100-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_G"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(40.5);
			$s->setBias(0);
			$s->setCEValue(3.3e-14);
			$s->setIEValue(6.7e-14);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(44);
			$s->setAliTo(73);
			$s->setEnvFrom(41);
			$s->setEnvTo(73);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHFAAGYNRVSVVEYLLQHGADVHAKDK");
			$s->setConsensus("44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;");
			$manager->persist($s);
	
			//-101-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_G"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(31.4);
			$s->setBias(0.1);
			$s->setCEValue(2.6e-11);
			$s->setIEValue(5.1e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(75);
			$s->setAliTo(105);
			$s->setEnvFrom(74);
			$s->setEnvTo(106);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLVPLHNACSYGHYEVAELLVKHGAVVNVAD");
			$s->setConsensus("75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;");
			$manager->persist($s);
	
			//-102-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_G"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(38.2);
			$s->setBias(0);
			$s->setCEValue(1.8e-13);
			$s->setIEValue(3.6e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(109);
			$s->setAliTo(138);
			$s->setEnvFrom(107);
			$s->setEnvTo(139);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("FTPLHEAAAKGKYEICKLLLQHGADPTKKN");
			$s->setConsensus("109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;");
			$manager->persist($s);
	
			//-103-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_G"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(3.3);
			$s->setBias(0);
			$s->setCEValue(0.022);
			$s->setIEValue(0.043);
			$s->setHmmFrom(1);
			$s->setHmmTo(8);
			$s->setAliFrom(140);
			$s->setAliTo(147);
			$s->setEnvFrom(140);
			$s->setEnvTo(159);
			$s->setAliHmm("dGfTPLHl");
			$s->setAliRep("DGNTPLDL");
			$s->setConsensus("140;141;142;143;144;145;146;147;");
			$manager->persist($s);
	
			//-104-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_H"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(2.7);
			$s->setBias(0);
			$s->setCEValue(0.033);
			$s->setIEValue(0.066);
			$s->setHmmFrom(7);
			$s->setHmmTo(23);
			$s->setAliFrom(13);
			$s->setAliTo(29);
			$s->setEnvFrom(12);
			$s->setEnvTo(37);
			$s->setAliHmm("HlAalrgnlevvklLls");
			$s->setAliRep("LEAAKAGDVETVKKLCT");
			$s->setConsensus("13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;");
			$manager->persist($s);
	
			//-105-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_H"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(40.5);
			$s->setBias(0);
			$s->setCEValue(3.3e-14);
			$s->setIEValue(6.7e-14);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(44);
			$s->setAliTo(73);
			$s->setEnvFrom(41);
			$s->setEnvTo(73);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHFAAGYNRVSVVEYLLQHGADVHAKDK");
			$s->setConsensus("44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;");
			$manager->persist($s);
	
			//-106-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_H"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(31.4);
			$s->setBias(0.1);
			$s->setCEValue(2.6e-11);
			$s->setIEValue(5.1e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(75);
			$s->setAliTo(105);
			$s->setEnvFrom(74);
			$s->setEnvTo(106);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLVPLHNACSYGHYEVAELLVKHGAVVNVAD");
			$s->setConsensus("75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;");
			$manager->persist($s);
	
			//-107-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_H"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(38.2);
			$s->setBias(0);
			$s->setCEValue(1.8e-13);
			$s->setIEValue(3.6e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(109);
			$s->setAliTo(138);
			$s->setEnvFrom(107);
			$s->setEnvTo(139);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("FTPLHEAAAKGKYEICKLLLQHGADPTKKN");
			$s->setConsensus("109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;");
			$manager->persist($s);
	
			//-108-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tws_H"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(3.3);
			$s->setBias(0);
			$s->setCEValue(0.022);
			$s->setIEValue(0.043);
			$s->setHmmFrom(1);
			$s->setHmmTo(8);
			$s->setAliFrom(140);
			$s->setAliTo(147);
			$s->setEnvFrom(140);
			$s->setEnvTo(159);
			$s->setAliHmm("dGfTPLHl");
			$s->setAliRep("DGNTPLDL");
			$s->setConsensus("140;141;142;143;144;145;146;147;");
			$manager->persist($s);
	
			//-109-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_E"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(2.7);
			$s->setBias(0);
			$s->setCEValue(0.033);
			$s->setIEValue(0.066);
			$s->setHmmFrom(7);
			$s->setHmmTo(23);
			$s->setAliFrom(13);
			$s->setAliTo(29);
			$s->setEnvFrom(12);
			$s->setEnvTo(37);
			$s->setAliHmm("HlAalrgnlevvklLls");
			$s->setAliRep("LEAAKAGDVETVKKLCT");
			$s->setConsensus("13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;");
			$manager->persist($s);
	
			//-110-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_E"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(40.5);
			$s->setBias(0);
			$s->setCEValue(3.3e-14);
			$s->setIEValue(6.7e-14);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(44);
			$s->setAliTo(73);
			$s->setEnvFrom(41);
			$s->setEnvTo(73);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHFAAGYNRVSVVEYLLQHGADVHAKDK");
			$s->setConsensus("44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;");
			$manager->persist($s);
	
			//-111-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_E"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(31.4);
			$s->setBias(0.1);
			$s->setCEValue(2.6e-11);
			$s->setIEValue(5.1e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(75);
			$s->setAliTo(105);
			$s->setEnvFrom(74);
			$s->setEnvTo(106);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLVPLHNACSYGHYEVAELLVKHGAVVNVAD");
			$s->setConsensus("75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;");
			$manager->persist($s);
	
			//-112-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_E"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(38.2);
			$s->setBias(0);
			$s->setCEValue(1.8e-13);
			$s->setIEValue(3.6e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(109);
			$s->setAliTo(138);
			$s->setEnvFrom(107);
			$s->setEnvTo(139);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("FTPLHEAAAKGKYEICKLLLQHGADPTKKN");
			$s->setConsensus("109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;");
			$manager->persist($s);
	
			//-113-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_E"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(3.3);
			$s->setBias(0);
			$s->setCEValue(0.022);
			$s->setIEValue(0.043);
			$s->setHmmFrom(1);
			$s->setHmmTo(8);
			$s->setAliFrom(140);
			$s->setAliTo(147);
			$s->setEnvFrom(140);
			$s->setEnvTo(159);
			$s->setAliHmm("dGfTPLHl");
			$s->setAliRep("DGNTPLDL");
			$s->setConsensus("140;141;142;143;144;145;146;147;");
			$manager->persist($s);
	
			//-114-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_F"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(2.7);
			$s->setBias(0);
			$s->setCEValue(0.033);
			$s->setIEValue(0.066);
			$s->setHmmFrom(7);
			$s->setHmmTo(23);
			$s->setAliFrom(13);
			$s->setAliTo(29);
			$s->setEnvFrom(12);
			$s->setEnvTo(37);
			$s->setAliHmm("HlAalrgnlevvklLls");
			$s->setAliRep("LEAAKAGDVETVKKLCT");
			$s->setConsensus("13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;");
			$manager->persist($s);
	
			//-115-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_F"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(40.5);
			$s->setBias(0);
			$s->setCEValue(3.3e-14);
			$s->setIEValue(6.7e-14);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(44);
			$s->setAliTo(73);
			$s->setEnvFrom(41);
			$s->setEnvTo(73);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHFAAGYNRVSVVEYLLQHGADVHAKDK");
			$s->setConsensus("44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;");
			$manager->persist($s);
	
			//-116-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_F"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(31.4);
			$s->setBias(0.1);
			$s->setCEValue(2.6e-11);
			$s->setIEValue(5.1e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(75);
			$s->setAliTo(105);
			$s->setEnvFrom(74);
			$s->setEnvTo(106);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLVPLHNACSYGHYEVAELLVKHGAVVNVAD");
			$s->setConsensus("75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;");
			$manager->persist($s);
	
			//-117-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_F"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(38.2);
			$s->setBias(0);
			$s->setCEValue(1.8e-13);
			$s->setIEValue(3.6e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(109);
			$s->setAliTo(138);
			$s->setEnvFrom(107);
			$s->setEnvTo(139);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("FTPLHEAAAKGKYEICKLLLQHGADPTKKN");
			$s->setConsensus("109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;");
			$manager->persist($s);
	
			//-118-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_F"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(3.3);
			$s->setBias(0);
			$s->setCEValue(0.022);
			$s->setIEValue(0.043);
			$s->setHmmFrom(1);
			$s->setHmmTo(8);
			$s->setAliFrom(140);
			$s->setAliTo(147);
			$s->setEnvFrom(140);
			$s->setEnvTo(159);
			$s->setAliHmm("dGfTPLHl");
			$s->setAliRep("DGNTPLDL");
			$s->setConsensus("140;141;142;143;144;145;146;147;");
			$manager->persist($s);
	
			//-119-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_G"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(2.7);
			$s->setBias(0);
			$s->setCEValue(0.033);
			$s->setIEValue(0.066);
			$s->setHmmFrom(7);
			$s->setHmmTo(23);
			$s->setAliFrom(13);
			$s->setAliTo(29);
			$s->setEnvFrom(12);
			$s->setEnvTo(37);
			$s->setAliHmm("HlAalrgnlevvklLls");
			$s->setAliRep("LEAAKAGDVETVKKLCT");
			$s->setConsensus("13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;");
			$manager->persist($s);
	
			//-120-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_G"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(40.5);
			$s->setBias(0);
			$s->setCEValue(3.3e-14);
			$s->setIEValue(6.7e-14);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(44);
			$s->setAliTo(73);
			$s->setEnvFrom(41);
			$s->setEnvTo(73);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHFAAGYNRVSVVEYLLQHGADVHAKDK");
			$s->setConsensus("44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;");
			$manager->persist($s);
	
			//-121-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_G"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(31.4);
			$s->setBias(0.1);
			$s->setCEValue(2.6e-11);
			$s->setIEValue(5.1e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(75);
			$s->setAliTo(105);
			$s->setEnvFrom(74);
			$s->setEnvTo(106);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLVPLHNACSYGHYEVAELLVKHGAVVNVAD");
			$s->setConsensus("75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;");
			$manager->persist($s);
	
			//-122-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_G"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(38.2);
			$s->setBias(0);
			$s->setCEValue(1.8e-13);
			$s->setIEValue(3.6e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(109);
			$s->setAliTo(138);
			$s->setEnvFrom(107);
			$s->setEnvTo(139);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("FTPLHEAAAKGKYEICKLLLQHGADPTKKN");
			$s->setConsensus("109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;");
			$manager->persist($s);
	
			//-123-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_G"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(3.3);
			$s->setBias(0);
			$s->setCEValue(0.022);
			$s->setIEValue(0.043);
			$s->setHmmFrom(1);
			$s->setHmmTo(8);
			$s->setAliFrom(140);
			$s->setAliTo(147);
			$s->setEnvFrom(140);
			$s->setEnvTo(159);
			$s->setAliHmm("dGfTPLHl");
			$s->setAliRep("DGNTPLDL");
			$s->setConsensus("140;141;142;143;144;145;146;147;");
			$manager->persist($s);
	
			//-124-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_H"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(2.7);
			$s->setBias(0);
			$s->setCEValue(0.033);
			$s->setIEValue(0.066);
			$s->setHmmFrom(7);
			$s->setHmmTo(23);
			$s->setAliFrom(13);
			$s->setAliTo(29);
			$s->setEnvFrom(12);
			$s->setEnvTo(37);
			$s->setAliHmm("HlAalrgnlevvklLls");
			$s->setAliRep("LEAAKAGDVETVKKLCT");
			$s->setConsensus("13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;");
			$manager->persist($s);
	
			//-125-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_H"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(40.5);
			$s->setBias(0);
			$s->setCEValue(3.3e-14);
			$s->setIEValue(6.7e-14);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(44);
			$s->setAliTo(73);
			$s->setEnvFrom(41);
			$s->setEnvTo(73);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHFAAGYNRVSVVEYLLQHGADVHAKDK");
			$s->setConsensus("44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;");
			$manager->persist($s);
	
			//-126-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_H"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(31.4);
			$s->setBias(0.1);
			$s->setCEValue(2.6e-11);
			$s->setIEValue(5.1e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(75);
			$s->setAliTo(105);
			$s->setEnvFrom(74);
			$s->setEnvTo(106);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLVPLHNACSYGHYEVAELLVKHGAVVNVAD");
			$s->setConsensus("75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;");
			$manager->persist($s);
	
			//-127-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_H"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(38.2);
			$s->setBias(0);
			$s->setCEValue(1.8e-13);
			$s->setIEValue(3.6e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(109);
			$s->setAliTo(138);
			$s->setEnvFrom(107);
			$s->setEnvTo(139);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("FTPLHEAAAKGKYEICKLLLQHGADPTKKN");
			$s->setConsensus("109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;");
			$manager->persist($s);
	
			//-128-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twt_H"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(3.3);
			$s->setBias(0);
			$s->setCEValue(0.022);
			$s->setIEValue(0.043);
			$s->setHmmFrom(1);
			$s->setHmmTo(8);
			$s->setAliFrom(140);
			$s->setAliTo(147);
			$s->setEnvFrom(140);
			$s->setEnvTo(159);
			$s->setAliHmm("dGfTPLHl");
			$s->setAliRep("DGNTPLDL");
			$s->setConsensus("140;141;142;143;144;145;146;147;");
			$manager->persist($s);
	
			//-129-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_E"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(2.7);
			$s->setBias(0);
			$s->setCEValue(0.033);
			$s->setIEValue(0.066);
			$s->setHmmFrom(7);
			$s->setHmmTo(23);
			$s->setAliFrom(13);
			$s->setAliTo(29);
			$s->setEnvFrom(12);
			$s->setEnvTo(37);
			$s->setAliHmm("HlAalrgnlevvklLls");
			$s->setAliRep("LEAAKAGDVETVKKLCT");
			$s->setConsensus("13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;");
			$manager->persist($s);
	
			//-130-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_E"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(40.5);
			$s->setBias(0);
			$s->setCEValue(3.3e-14);
			$s->setIEValue(6.7e-14);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(44);
			$s->setAliTo(73);
			$s->setEnvFrom(41);
			$s->setEnvTo(73);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHFAAGYNRVSVVEYLLQHGADVHAKDK");
			$s->setConsensus("44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;");
			$manager->persist($s);
	
			//-131-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_E"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(31.4);
			$s->setBias(0.1);
			$s->setCEValue(2.6e-11);
			$s->setIEValue(5.1e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(75);
			$s->setAliTo(105);
			$s->setEnvFrom(74);
			$s->setEnvTo(106);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLVPLHNACSYGHYEVAELLVKHGAVVNVAD");
			$s->setConsensus("75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;");
			$manager->persist($s);
	
			//-132-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_E"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(38.2);
			$s->setBias(0);
			$s->setCEValue(1.8e-13);
			$s->setIEValue(3.6e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(109);
			$s->setAliTo(138);
			$s->setEnvFrom(107);
			$s->setEnvTo(139);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("FTPLHEAAAKGKYEICKLLLQHGADPTKKN");
			$s->setConsensus("109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;");
			$manager->persist($s);
	
			//-133-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_E"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(3.3);
			$s->setBias(0);
			$s->setCEValue(0.022);
			$s->setIEValue(0.043);
			$s->setHmmFrom(1);
			$s->setHmmTo(8);
			$s->setAliFrom(140);
			$s->setAliTo(147);
			$s->setEnvFrom(140);
			$s->setEnvTo(159);
			$s->setAliHmm("dGfTPLHl");
			$s->setAliRep("DGNTPLDL");
			$s->setConsensus("140;141;142;143;144;145;146;147;");
			$manager->persist($s);
	
			//-134-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_F"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(2.7);
			$s->setBias(0);
			$s->setCEValue(0.033);
			$s->setIEValue(0.066);
			$s->setHmmFrom(7);
			$s->setHmmTo(23);
			$s->setAliFrom(13);
			$s->setAliTo(29);
			$s->setEnvFrom(12);
			$s->setEnvTo(37);
			$s->setAliHmm("HlAalrgnlevvklLls");
			$s->setAliRep("LEAAKAGDVETVKKLCT");
			$s->setConsensus("13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;");
			$manager->persist($s);
	
			//-135-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_F"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(40.5);
			$s->setBias(0);
			$s->setCEValue(3.3e-14);
			$s->setIEValue(6.7e-14);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(44);
			$s->setAliTo(73);
			$s->setEnvFrom(41);
			$s->setEnvTo(73);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHFAAGYNRVSVVEYLLQHGADVHAKDK");
			$s->setConsensus("44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;");
			$manager->persist($s);
	
			//-136-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_F"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(31.4);
			$s->setBias(0.1);
			$s->setCEValue(2.6e-11);
			$s->setIEValue(5.1e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(75);
			$s->setAliTo(105);
			$s->setEnvFrom(74);
			$s->setEnvTo(106);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLVPLHNACSYGHYEVAELLVKHGAVVNVAD");
			$s->setConsensus("75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;");
			$manager->persist($s);
	
			//-137-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_F"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(38.2);
			$s->setBias(0);
			$s->setCEValue(1.8e-13);
			$s->setIEValue(3.6e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(109);
			$s->setAliTo(138);
			$s->setEnvFrom(107);
			$s->setEnvTo(139);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("FTPLHEAAAKGKYEICKLLLQHGADPTKKN");
			$s->setConsensus("109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;");
			$manager->persist($s);
	
			//-138-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_F"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(3.3);
			$s->setBias(0);
			$s->setCEValue(0.022);
			$s->setIEValue(0.043);
			$s->setHmmFrom(1);
			$s->setHmmTo(8);
			$s->setAliFrom(140);
			$s->setAliTo(147);
			$s->setEnvFrom(140);
			$s->setEnvTo(159);
			$s->setAliHmm("dGfTPLHl");
			$s->setAliRep("DGNTPLDL");
			$s->setConsensus("140;141;142;143;144;145;146;147;");
			$manager->persist($s);
	
			//-139-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_G"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(2.7);
			$s->setBias(0);
			$s->setCEValue(0.033);
			$s->setIEValue(0.066);
			$s->setHmmFrom(7);
			$s->setHmmTo(23);
			$s->setAliFrom(13);
			$s->setAliTo(29);
			$s->setEnvFrom(12);
			$s->setEnvTo(37);
			$s->setAliHmm("HlAalrgnlevvklLls");
			$s->setAliRep("LEAAKAGDVETVKKLCT");
			$s->setConsensus("13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;");
			$manager->persist($s);
	
			//-140-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_G"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(40.5);
			$s->setBias(0);
			$s->setCEValue(3.3e-14);
			$s->setIEValue(6.7e-14);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(44);
			$s->setAliTo(73);
			$s->setEnvFrom(41);
			$s->setEnvTo(73);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHFAAGYNRVSVVEYLLQHGADVHAKDK");
			$s->setConsensus("44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;");
			$manager->persist($s);
	
			//-141-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_G"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(31.4);
			$s->setBias(0.1);
			$s->setCEValue(2.6e-11);
			$s->setIEValue(5.1e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(75);
			$s->setAliTo(105);
			$s->setEnvFrom(74);
			$s->setEnvTo(106);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLVPLHNACSYGHYEVAELLVKHGAVVNVAD");
			$s->setConsensus("75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;");
			$manager->persist($s);
	
			//-142-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_G"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(38.2);
			$s->setBias(0);
			$s->setCEValue(1.8e-13);
			$s->setIEValue(3.6e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(109);
			$s->setAliTo(138);
			$s->setEnvFrom(107);
			$s->setEnvTo(139);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("FTPLHEAAAKGKYEICKLLLQHGADPTKKN");
			$s->setConsensus("109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;");
			$manager->persist($s);
	
			//-143-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_G"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(3.3);
			$s->setBias(0);
			$s->setCEValue(0.022);
			$s->setIEValue(0.043);
			$s->setHmmFrom(1);
			$s->setHmmTo(8);
			$s->setAliFrom(140);
			$s->setAliTo(147);
			$s->setEnvFrom(140);
			$s->setEnvTo(159);
			$s->setAliHmm("dGfTPLHl");
			$s->setAliRep("DGNTPLDL");
			$s->setConsensus("140;141;142;143;144;145;146;147;");
			$manager->persist($s);
	
			//-144-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_H"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(2.7);
			$s->setBias(0);
			$s->setCEValue(0.033);
			$s->setIEValue(0.066);
			$s->setHmmFrom(7);
			$s->setHmmTo(23);
			$s->setAliFrom(13);
			$s->setAliTo(29);
			$s->setEnvFrom(12);
			$s->setEnvTo(37);
			$s->setAliHmm("HlAalrgnlevvklLls");
			$s->setAliRep("LEAAKAGDVETVKKLCT");
			$s->setConsensus("13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;");
			$manager->persist($s);
	
			//-145-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_H"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(40.5);
			$s->setBias(0);
			$s->setCEValue(3.3e-14);
			$s->setIEValue(6.7e-14);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(44);
			$s->setAliTo(73);
			$s->setEnvFrom(41);
			$s->setEnvTo(73);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHFAAGYNRVSVVEYLLQHGADVHAKDK");
			$s->setConsensus("44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;");
			$manager->persist($s);
	
			//-146-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_H"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(31.4);
			$s->setBias(0.1);
			$s->setCEValue(2.6e-11);
			$s->setIEValue(5.1e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(75);
			$s->setAliTo(105);
			$s->setEnvFrom(74);
			$s->setEnvTo(106);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLVPLHNACSYGHYEVAELLVKHGAVVNVAD");
			$s->setConsensus("75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;");
			$manager->persist($s);
	
			//-147-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_H"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(38.2);
			$s->setBias(0);
			$s->setCEValue(1.8e-13);
			$s->setIEValue(3.6e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(109);
			$s->setAliTo(138);
			$s->setEnvFrom(107);
			$s->setEnvTo(139);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("FTPLHEAAAKGKYEICKLLLQHGADPTKKN");
			$s->setConsensus("109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;");
			$manager->persist($s);
	
			//-148-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twv_H"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(3.3);
			$s->setBias(0);
			$s->setCEValue(0.022);
			$s->setIEValue(0.043);
			$s->setHmmFrom(1);
			$s->setHmmTo(8);
			$s->setAliFrom(140);
			$s->setAliTo(147);
			$s->setEnvFrom(140);
			$s->setEnvTo(159);
			$s->setAliHmm("dGfTPLHl");
			$s->setAliRep("DGNTPLDL");
			$s->setConsensus("140;141;142;143;144;145;146;147;");
			$manager->persist($s);
	
			//-149-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tww_C"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(2.7);
			$s->setBias(0);
			$s->setCEValue(0.016);
			$s->setIEValue(0.033);
			$s->setHmmFrom(7);
			$s->setHmmTo(23);
			$s->setAliFrom(13);
			$s->setAliTo(29);
			$s->setEnvFrom(12);
			$s->setEnvTo(37);
			$s->setAliHmm("HlAalrgnlevvklLls");
			$s->setAliRep("LEAAKAGDVETVKKLCT");
			$s->setConsensus("13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;");
			$manager->persist($s);
	
			//-150-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tww_C"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(40.5);
			$s->setBias(0);
			$s->setCEValue(1.7e-14);
			$s->setIEValue(3.3e-14);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(44);
			$s->setAliTo(73);
			$s->setEnvFrom(41);
			$s->setEnvTo(73);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHFAAGYNRVSVVEYLLQHGADVHAKDK");
			$s->setConsensus("44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;");
			$manager->persist($s);
	
			//-151-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tww_C"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(31.4);
			$s->setBias(0.1);
			$s->setCEValue(1.3e-11);
			$s->setIEValue(2.6e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(75);
			$s->setAliTo(105);
			$s->setEnvFrom(74);
			$s->setEnvTo(106);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLVPLHNACSYGHYEVAELLVKHGAVVNVAD");
			$s->setConsensus("75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;");
			$manager->persist($s);
	
			//-152-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tww_C"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(38.2);
			$s->setBias(0);
			$s->setCEValue(9e-14);
			$s->setIEValue(1.8e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(109);
			$s->setAliTo(138);
			$s->setEnvFrom(107);
			$s->setEnvTo(139);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("FTPLHEAAAKGKYEICKLLLQHGADPTKKN");
			$s->setConsensus("109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;");
			$manager->persist($s);
	
			//-153-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tww_C"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(3.3);
			$s->setBias(0);
			$s->setCEValue(0.011);
			$s->setIEValue(0.022);
			$s->setHmmFrom(1);
			$s->setHmmTo(8);
			$s->setAliFrom(140);
			$s->setAliTo(147);
			$s->setEnvFrom(140);
			$s->setEnvTo(159);
			$s->setAliHmm("dGfTPLHl");
			$s->setAliRep("DGNTPLDL");
			$s->setConsensus("140;141;142;143;144;145;146;147;");
			$manager->persist($s);
	
			//-154-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tww_D"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(2.7);
			$s->setBias(0);
			$s->setCEValue(0.016);
			$s->setIEValue(0.033);
			$s->setHmmFrom(7);
			$s->setHmmTo(23);
			$s->setAliFrom(13);
			$s->setAliTo(29);
			$s->setEnvFrom(12);
			$s->setEnvTo(37);
			$s->setAliHmm("HlAalrgnlevvklLls");
			$s->setAliRep("LEAAKAGDVETVKKLCT");
			$s->setConsensus("13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;");
			$manager->persist($s);
	
			//-155-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tww_D"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(40.5);
			$s->setBias(0);
			$s->setCEValue(1.7e-14);
			$s->setIEValue(3.3e-14);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(44);
			$s->setAliTo(73);
			$s->setEnvFrom(41);
			$s->setEnvTo(73);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHFAAGYNRVSVVEYLLQHGADVHAKDK");
			$s->setConsensus("44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;");
			$manager->persist($s);
	
			//-156-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tww_D"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(31.4);
			$s->setBias(0.1);
			$s->setCEValue(1.3e-11);
			$s->setIEValue(2.6e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(75);
			$s->setAliTo(105);
			$s->setEnvFrom(74);
			$s->setEnvTo(106);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLVPLHNACSYGHYEVAELLVKHGAVVNVAD");
			$s->setConsensus("75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;");
			$manager->persist($s);
	
			//-157-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tww_D"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(38.2);
			$s->setBias(0);
			$s->setCEValue(9e-14);
			$s->setIEValue(1.8e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(109);
			$s->setAliTo(138);
			$s->setEnvFrom(107);
			$s->setEnvTo(139);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("FTPLHEAAAKGKYEICKLLLQHGADPTKKN");
			$s->setConsensus("109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;");
			$manager->persist($s);
	
			//-158-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3tww_D"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(3.3);
			$s->setBias(0);
			$s->setCEValue(0.011);
			$s->setIEValue(0.022);
			$s->setHmmFrom(1);
			$s->setHmmTo(8);
			$s->setAliFrom(140);
			$s->setAliTo(147);
			$s->setEnvFrom(140);
			$s->setEnvTo(159);
			$s->setAliHmm("dGfTPLHl");
			$s->setAliRep("DGNTPLDL");
			$s->setConsensus("140;141;142;143;144;145;146;147;");
			$manager->persist($s);
	
			//-159-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twx_C"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(2.7);
			$s->setBias(0);
			$s->setCEValue(0.016);
			$s->setIEValue(0.033);
			$s->setHmmFrom(7);
			$s->setHmmTo(23);
			$s->setAliFrom(13);
			$s->setAliTo(29);
			$s->setEnvFrom(12);
			$s->setEnvTo(37);
			$s->setAliHmm("HlAalrgnlevvklLls");
			$s->setAliRep("LEAAKAGDVETVKKLCT");
			$s->setConsensus("13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;");
			$manager->persist($s);
	
			//-160-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twx_C"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(40.5);
			$s->setBias(0);
			$s->setCEValue(1.7e-14);
			$s->setIEValue(3.3e-14);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(44);
			$s->setAliTo(73);
			$s->setEnvFrom(41);
			$s->setEnvTo(73);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHFAAGYNRVSVVEYLLQHGADVHAKDK");
			$s->setConsensus("44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;");
			$manager->persist($s);
	
			//-161-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twx_C"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(31.4);
			$s->setBias(0.1);
			$s->setCEValue(1.3e-11);
			$s->setIEValue(2.6e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(75);
			$s->setAliTo(105);
			$s->setEnvFrom(74);
			$s->setEnvTo(106);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLVPLHNACSYGHYEVAELLVKHGAVVNVAD");
			$s->setConsensus("75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;");
			$manager->persist($s);
	
			//-162-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twx_C"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(38.2);
			$s->setBias(0);
			$s->setCEValue(9e-14);
			$s->setIEValue(1.8e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(109);
			$s->setAliTo(138);
			$s->setEnvFrom(107);
			$s->setEnvTo(139);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("FTPLHEAAAKGKYEICKLLLQHGADPTKKN");
			$s->setConsensus("109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;");
			$manager->persist($s);
	
			//-163-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twx_C"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(3.3);
			$s->setBias(0);
			$s->setCEValue(0.011);
			$s->setIEValue(0.022);
			$s->setHmmFrom(1);
			$s->setHmmTo(8);
			$s->setAliFrom(140);
			$s->setAliTo(147);
			$s->setEnvFrom(140);
			$s->setEnvTo(159);
			$s->setAliHmm("dGfTPLHl");
			$s->setAliRep("DGNTPLDL");
			$s->setConsensus("140;141;142;143;144;145;146;147;");
			$manager->persist($s);
	
			//-164-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twx_D"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(2.7);
			$s->setBias(0);
			$s->setCEValue(0.016);
			$s->setIEValue(0.033);
			$s->setHmmFrom(7);
			$s->setHmmTo(23);
			$s->setAliFrom(13);
			$s->setAliTo(29);
			$s->setEnvFrom(12);
			$s->setEnvTo(37);
			$s->setAliHmm("HlAalrgnlevvklLls");
			$s->setAliRep("LEAAKAGDVETVKKLCT");
			$s->setConsensus("13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;");
			$manager->persist($s);
	
			//-165-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twx_D"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(40.5);
			$s->setBias(0);
			$s->setCEValue(1.7e-14);
			$s->setIEValue(3.3e-14);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(44);
			$s->setAliTo(73);
			$s->setEnvFrom(41);
			$s->setEnvTo(73);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHFAAGYNRVSVVEYLLQHGADVHAKDK");
			$s->setConsensus("44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;");
			$manager->persist($s);
	
			//-166-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twx_D"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(31.4);
			$s->setBias(0.1);
			$s->setCEValue(1.3e-11);
			$s->setIEValue(2.6e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(75);
			$s->setAliTo(105);
			$s->setEnvFrom(74);
			$s->setEnvTo(106);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLVPLHNACSYGHYEVAELLVKHGAVVNVAD");
			$s->setConsensus("75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;");
			$manager->persist($s);
	
			//-167-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twx_D"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(38.2);
			$s->setBias(0);
			$s->setCEValue(9e-14);
			$s->setIEValue(1.8e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(109);
			$s->setAliTo(138);
			$s->setEnvFrom(107);
			$s->setEnvTo(139);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("FTPLHEAAAKGKYEICKLLLQHGADPTKKN");
			$s->setConsensus("109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;");
			$manager->persist($s);
	
			//-168-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3twx_D"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(3.3);
			$s->setBias(0);
			$s->setCEValue(0.011);
			$s->setIEValue(0.022);
			$s->setHmmFrom(1);
			$s->setHmmTo(8);
			$s->setAliFrom(140);
			$s->setAliTo(147);
			$s->setEnvFrom(140);
			$s->setEnvTo(159);
			$s->setAliHmm("dGfTPLHl");
			$s->setAliRep("DGNTPLDL");
			$s->setConsensus("140;141;142;143;144;145;146;147;");
			$manager->persist($s);
	
			//-169-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3v79_R"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(33.9);
			$s->setBias(0);
			$s->setCEValue(1.1e-12);
			$s->setIEValue(6.4e-12);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(10);
			$s->setAliTo(55);
			$s->setEnvFrom(10);
			$s->setEnvTo(55);
			$s->setAliHmm("dGfTPLHlAalrg.............nlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGFTPLMIASCSGggletgnseeeedAPAVISDFIYQGASLHNQTD");
			$s->setConsensus("10;11;12;13;14;15;16;17;18;19;20;21;22;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;");
			$s->setInsertions(";g;14;g;14;l;14;e;14;t;14;g;14;n;14;s;14;e;14;e;14;e;14;e;14;d;14");
			$manager->persist($s);
	
			//-170-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3v79_R"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(30.6);
			$s->setBias(0);
			$s->setCEValue(1.2e-11);
			$s->setIEValue(6.9e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(58);
			$s->setAliTo(89);
			$s->setEnvFrom(57);
			$s->setEnvTo(89);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GETALHLAARYSRSDAAKRLLEASADANIQDN");
			$s->setConsensus("58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;");
			$manager->persist($s);
	
			//-171-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3v79_R"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(16.4);
			$s->setBias(0);
			$s->setCEValue(3.6e-07);
			$s->setIEValue(2.2e-06);
			$s->setHmmFrom(2);
			$s->setHmmTo(31);
			$s->setAliFrom(91);
			$s->setAliTo(121);
			$s->setEnvFrom(90);
			$s->setEnvTo(123);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls.qGAdlnaq");
			$s->setAliRep("GRTPLHAAVSADAQGVFQILIRnRATDLDAR");
			$s->setConsensus("91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;112;114;115;116;117;118;119;120;121;");
			$s->setInsertions(";n;23");
			$manager->persist($s);
	
			//-172-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3v79_R"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(23.2);
			$s->setBias(0.1);
			$s->setCEValue(2.6e-09);
			$s->setIEValue(1.6e-08);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(124);
			$s->setAliTo(156);
			$s->setEnvFrom(124);
			$s->setEnvTo(156);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGTTPLILAARLAVEGMLEDLINSHADVNAVDD");
			$s->setConsensus("124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;");
			$manager->persist($s);
	
			//-173-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3v79_R"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(25.2);
			$s->setBias(0.3);
			$s->setCEValue(6.2e-10);
			$s->setIEValue(3.7e-09);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(158);
			$s->setAliTo(189);
			$s->setEnvFrom(157);
			$s->setEnvTo(189);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GKSALHWAAAVNNVDAAVVLLKNGANKDMQNN");
			$s->setConsensus("158;159;160;161;162;163;164;165;166;167;168;169;170;171;172;173;174;175;176;177;178;179;180;181;182;183;184;185;186;187;188;189;");
			$manager->persist($s);
	
			//-174-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3v79_R"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(23.3);
			$s->setBias(0);
			$s->setCEValue(2.5e-09);
			$s->setIEValue(1.5e-08);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(192);
			$s->setAliTo(221);
			$s->setEnvFrom(190);
			$s->setEnvTo(222);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("ETPLFLAAREGSYETAKVLLDHFANRDITD");
			$s->setConsensus("192;193;194;195;196;197;198;199;200;201;202;203;204;205;206;207;208;209;210;211;212;213;214;215;216;217;218;219;220;221;");
			$manager->persist($s);
	
			//-175-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3v79_R"));
			$s->setPfamRepeat(7);
			$s->setStatus("?");
			$s->setScore(1);
			$s->setBias(0);
			$s->setCEValue(0.028);
			$s->setIEValue(0.17);
			$s->setHmmFrom(9);
			$s->setHmmTo(21);
			$s->setAliFrom(231);
			$s->setAliTo(243);
			$s->setEnvFrom(225);
			$s->setEnvTo(247);
			$s->setAliHmm("AalrgnlevvklL");
			$s->setAliRep("AQERMHHDIVRLL");
			$s->setConsensus("231;232;233;234;235;236;237;238;239;240;241;242;243;");
			$manager->persist($s);
	
			//-176-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3v79_X"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(33.9);
			$s->setBias(0);
			$s->setCEValue(1.1e-12);
			$s->setIEValue(6.4e-12);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(10);
			$s->setAliTo(55);
			$s->setEnvFrom(10);
			$s->setEnvTo(55);
			$s->setAliHmm("dGfTPLHlAalrg.............nlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGFTPLMIASCSGggletgnseeeedAPAVISDFIYQGASLHNQTD");
			$s->setConsensus("10;11;12;13;14;15;16;17;18;19;20;21;22;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;");
			$s->setInsertions(";g;14;g;14;l;14;e;14;t;14;g;14;n;14;s;14;e;14;e;14;e;14;e;14;d;14");
			$manager->persist($s);
	
			//-177-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3v79_X"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(30.6);
			$s->setBias(0);
			$s->setCEValue(1.2e-11);
			$s->setIEValue(6.9e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(58);
			$s->setAliTo(89);
			$s->setEnvFrom(57);
			$s->setEnvTo(89);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GETALHLAARYSRSDAAKRLLEASADANIQDN");
			$s->setConsensus("58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;");
			$manager->persist($s);
	
			//-178-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3v79_X"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(16.4);
			$s->setBias(0);
			$s->setCEValue(3.6e-07);
			$s->setIEValue(2.2e-06);
			$s->setHmmFrom(2);
			$s->setHmmTo(31);
			$s->setAliFrom(91);
			$s->setAliTo(121);
			$s->setEnvFrom(90);
			$s->setEnvTo(123);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls.qGAdlnaq");
			$s->setAliRep("GRTPLHAAVSADAQGVFQILIRnRATDLDAR");
			$s->setConsensus("91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;112;114;115;116;117;118;119;120;121;");
			$s->setInsertions(";n;23");
			$manager->persist($s);
	
			//-179-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3v79_X"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(23.2);
			$s->setBias(0.1);
			$s->setCEValue(2.6e-09);
			$s->setIEValue(1.6e-08);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(124);
			$s->setAliTo(156);
			$s->setEnvFrom(124);
			$s->setEnvTo(156);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGTTPLILAARLAVEGMLEDLINSHADVNAVDD");
			$s->setConsensus("124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;");
			$manager->persist($s);
	
			//-180-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3v79_X"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(25.2);
			$s->setBias(0.3);
			$s->setCEValue(6.2e-10);
			$s->setIEValue(3.7e-09);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(158);
			$s->setAliTo(189);
			$s->setEnvFrom(157);
			$s->setEnvTo(189);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GKSALHWAAAVNNVDAAVVLLKNGANKDMQNN");
			$s->setConsensus("158;159;160;161;162;163;164;165;166;167;168;169;170;171;172;173;174;175;176;177;178;179;180;181;182;183;184;185;186;187;188;189;");
			$manager->persist($s);
	
			//-181-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3v79_X"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(23.3);
			$s->setBias(0);
			$s->setCEValue(2.5e-09);
			$s->setIEValue(1.5e-08);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(192);
			$s->setAliTo(221);
			$s->setEnvFrom(190);
			$s->setEnvTo(222);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("ETPLFLAAREGSYETAKVLLDHFANRDITD");
			$s->setConsensus("192;193;194;195;196;197;198;199;200;201;202;203;204;205;206;207;208;209;210;211;212;213;214;215;216;217;218;219;220;221;");
			$manager->persist($s);
	
			//-182-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3v79_X"));
			$s->setPfamRepeat(7);
			$s->setStatus("?");
			$s->setScore(1);
			$s->setBias(0);
			$s->setCEValue(0.028);
			$s->setIEValue(0.17);
			$s->setHmmFrom(9);
			$s->setHmmTo(21);
			$s->setAliFrom(231);
			$s->setAliTo(243);
			$s->setEnvFrom(225);
			$s->setEnvTo(247);
			$s->setAliHmm("AalrgnlevvklL");
			$s->setAliRep("AQERMHHDIVRLL");
			$s->setConsensus("231;232;233;234;235;236;237;238;239;240;241;242;243;");
			$manager->persist($s);
	
			//-183-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3v79_Y"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(33.9);
			$s->setBias(0);
			$s->setCEValue(1.1e-12);
			$s->setIEValue(6.4e-12);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(10);
			$s->setAliTo(55);
			$s->setEnvFrom(10);
			$s->setEnvTo(55);
			$s->setAliHmm("dGfTPLHlAalrg.............nlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGFTPLMIASCSGggletgnseeeedAPAVISDFIYQGASLHNQTD");
			$s->setConsensus("10;11;12;13;14;15;16;17;18;19;20;21;22;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;");
			$s->setInsertions(";g;14;g;14;l;14;e;14;t;14;g;14;n;14;s;14;e;14;e;14;e;14;e;14;d;14");
			$manager->persist($s);
	
			//-184-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3v79_Y"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(30.6);
			$s->setBias(0);
			$s->setCEValue(1.2e-11);
			$s->setIEValue(6.9e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(58);
			$s->setAliTo(89);
			$s->setEnvFrom(57);
			$s->setEnvTo(89);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GETALHLAARYSRSDAAKRLLEASADANIQDN");
			$s->setConsensus("58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;");
			$manager->persist($s);
	
			//-185-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3v79_Y"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(16.4);
			$s->setBias(0);
			$s->setCEValue(3.6e-07);
			$s->setIEValue(2.2e-06);
			$s->setHmmFrom(2);
			$s->setHmmTo(31);
			$s->setAliFrom(91);
			$s->setAliTo(121);
			$s->setEnvFrom(90);
			$s->setEnvTo(123);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls.qGAdlnaq");
			$s->setAliRep("GRTPLHAAVSADAQGVFQILIRnRATDLDAR");
			$s->setConsensus("91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;112;114;115;116;117;118;119;120;121;");
			$s->setInsertions(";n;23");
			$manager->persist($s);
	
			//-186-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3v79_Y"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(23.2);
			$s->setBias(0.1);
			$s->setCEValue(2.6e-09);
			$s->setIEValue(1.6e-08);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(124);
			$s->setAliTo(156);
			$s->setEnvFrom(124);
			$s->setEnvTo(156);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGTTPLILAARLAVEGMLEDLINSHADVNAVDD");
			$s->setConsensus("124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;");
			$manager->persist($s);
	
			//-187-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3v79_Y"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(25.2);
			$s->setBias(0.3);
			$s->setCEValue(6.2e-10);
			$s->setIEValue(3.7e-09);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(158);
			$s->setAliTo(189);
			$s->setEnvFrom(157);
			$s->setEnvTo(189);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GKSALHWAAAVNNVDAAVVLLKNGANKDMQNN");
			$s->setConsensus("158;159;160;161;162;163;164;165;166;167;168;169;170;171;172;173;174;175;176;177;178;179;180;181;182;183;184;185;186;187;188;189;");
			$manager->persist($s);
	
			//-188-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3v79_Y"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(23.3);
			$s->setBias(0);
			$s->setCEValue(2.5e-09);
			$s->setIEValue(1.5e-08);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(192);
			$s->setAliTo(221);
			$s->setEnvFrom(190);
			$s->setEnvTo(222);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("ETPLFLAAREGSYETAKVLLDHFANRDITD");
			$s->setConsensus("192;193;194;195;196;197;198;199;200;201;202;203;204;205;206;207;208;209;210;211;212;213;214;215;216;217;218;219;220;221;");
			$manager->persist($s);
	
			//-189-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3v79_Y"));
			$s->setPfamRepeat(7);
			$s->setStatus("?");
			$s->setScore(1);
			$s->setBias(0);
			$s->setCEValue(0.028);
			$s->setIEValue(0.17);
			$s->setHmmFrom(9);
			$s->setHmmTo(21);
			$s->setAliFrom(231);
			$s->setAliTo(243);
			$s->setEnvFrom(225);
			$s->setEnvTo(247);
			$s->setAliHmm("AalrgnlevvklL");
			$s->setAliRep("AQERMHHDIVRLL");
			$s->setConsensus("231;232;233;234;235;236;237;238;239;240;241;242;243;");
			$manager->persist($s);
	
			//-190-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3zu7_B"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(16.8);
			$s->setBias(0.2);
			$s->setCEValue(2.8e-07);
			$s->setIEValue(5.6e-07);
			$s->setHmmFrom(8);
			$s->setHmmTo(33);
			$s->setAliFrom(20);
			$s->setAliTo(45);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("EAARAGQDDEVRILMANGADVNAHDD");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;45;");
			$manager->persist($s);
	
			//-191-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3zu7_B"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(48.1);
			$s->setBias(0);
			$s->setCEValue(3.4e-17);
			$s->setIEValue(6.9e-17);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(47);
			$s->setAliTo(77);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GSTPLHLAAWIGHPEIVEVLLKHGADVNARD");
			$s->setConsensus("47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;");
			$manager->persist($s);
	
			//-192-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3zu7_B"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(53.7);
			$s->setBias(0.1);
			$s->setCEValue(5.5e-19);
			$s->setIEValue(1.1e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(79);
			$s->setAliTo(110);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("DGWTPLHLAADNGHLEIVEVLLKYGADVNAQD");
			$s->setConsensus("79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;");
			$manager->persist($s);
	
			//-193-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3zu7_B"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(53);
			$s->setBias(0.1);
			$s->setCEValue(9.1e-19);
			$s->setIEValue(1.8e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(112);
			$s->setAliTo(144);
			$s->setEnvFrom(112);
			$s->setEnvTo(144);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("YGLTPLHLAADRGHLEIVEVLLKHGADVNAQDK");
			$s->setConsensus("112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;");
			$manager->persist($s);
	
			//-194-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3zu7_B"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(1.2);
			$s->setBias(0);
			$s->setCEValue(0.024);
			$s->setIEValue(0.048);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(146);
			$s->setAliTo(165);
			$s->setEnvFrom(145);
			$s->setEnvTo(168);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;");
			$manager->persist($s);
	
			//-195-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3zuv_B"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(15.6);
			$s->setBias(0.1);
			$s->setCEValue(1.3e-06);
			$s->setIEValue(2.6e-06);
			$s->setHmmFrom(7);
			$s->setHmmTo(32);
			$s->setAliFrom(19);
			$s->setAliTo(44);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("LEAARAGQDDEVRILMANGADVNALD");
			$s->setConsensus("19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;");
			$manager->persist($s);
	
			//-196-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3zuv_B"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(50.1);
			$s->setBias(0.1);
			$s->setCEValue(1.6e-17);
			$s->setIEValue(3.1e-17);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(46);
			$s->setAliTo(78);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGLTPLHLAAQLGHLEIVEVLLKYGADVNAEDN");
			$s->setConsensus("46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;78;");
			$manager->persist($s);
	
			//-197-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3zuv_B"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(54.4);
			$s->setBias(0);
			$s->setCEValue(6.6e-19);
			$s->setIEValue(1.3e-18);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(80);
			$s->setAliTo(111);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GITPLHLAAIRGHLEIVEVLLKHGADVNAQDK");
			$s->setConsensus("80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;");
			$manager->persist($s);
	
			//-198-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3zuv_B"));
			$s->setPfamRepeat(4);
			$s->setStatus("?");
			$s->setScore(1.7);
			$s->setBias(0);
			$s->setCEValue(0.034);
			$s->setIEValue(0.069);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(113);
			$s->setAliTo(132);
			$s->setEnvFrom(112);
			$s->setEnvTo(135);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;");
			$manager->persist($s);
	
			//-199-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3zuv_D"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(15.6);
			$s->setBias(0.1);
			$s->setCEValue(1.3e-06);
			$s->setIEValue(2.6e-06);
			$s->setHmmFrom(7);
			$s->setHmmTo(32);
			$s->setAliFrom(19);
			$s->setAliTo(44);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("LEAARAGQDDEVRILMANGADVNALD");
			$s->setConsensus("19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;");
			$manager->persist($s);
	
			//-200-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3zuv_D"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(50.1);
			$s->setBias(0.1);
			$s->setCEValue(1.6e-17);
			$s->setIEValue(3.1e-17);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(46);
			$s->setAliTo(78);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGLTPLHLAAQLGHLEIVEVLLKYGADVNAEDN");
			$s->setConsensus("46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;78;");
			$manager->persist($s);
	
			//-201-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3zuv_D"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(54.4);
			$s->setBias(0);
			$s->setCEValue(6.6e-19);
			$s->setIEValue(1.3e-18);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(80);
			$s->setAliTo(111);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GITPLHLAAIRGHLEIVEVLLKHGADVNAQDK");
			$s->setConsensus("80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;");
			$manager->persist($s);
	
			//-202-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("3zuv_D"));
			$s->setPfamRepeat(4);
			$s->setStatus("?");
			$s->setScore(1.7);
			$s->setBias(0);
			$s->setCEValue(0.034);
			$s->setIEValue(0.069);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(113);
			$s->setAliTo(132);
			$s->setEnvFrom(112);
			$s->setEnvTo(135);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;");
			$manager->persist($s);
	
			//-203-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4atz_D"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(11.4);
			$s->setBias(0.2);
			$s->setCEValue(4.4e-05);
			$s->setIEValue(8.9e-05);
			$s->setHmmFrom(7);
			$s->setHmmTo(32);
			$s->setAliFrom(7);
			$s->setAliTo(32);
			$s->setEnvFrom(6);
			$s->setEnvTo(33);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("LEAARAGQDDEVRILMANGADANAYD");
			$s->setConsensus("7;8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;");
			$manager->persist($s);
	
			//-204-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4atz_D"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(46.3);
			$s->setBias(0.1);
			$s->setCEValue(3.8e-16);
			$s->setIEValue(7.6e-16);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(34);
			$s->setAliTo(65);
			$s->setEnvFrom(34);
			$s->setEnvTo(66);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("YGRTPLHMAAAVGHLEIVEVLLRNGADVNAVD");
			$s->setConsensus("34;35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;");
			$manager->persist($s);
	
			//-205-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4atz_D"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(48.5);
			$s->setBias(0.1);
			$s->setCEValue(7.8e-17);
			$s->setIEValue(1.6e-16);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(67);
			$s->setAliTo(98);
			$s->setEnvFrom(67);
			$s->setEnvTo(99);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NGTTPLHLAASLGHLEIVEVLLKYGADVNAKD");
			$s->setConsensus("67;68;69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;");
			$manager->persist($s);
	
			//-206-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4atz_D"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(48.5);
			$s->setBias(0);
			$s->setCEValue(7.5e-17);
			$s->setIEValue(1.5e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(101);
			$s->setAliTo(132);
			$s->setEnvFrom(100);
			$s->setEnvTo(132);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GITPLYLAAYWGHLEIVEVLLKHGADVNAQDK");
			$s->setConsensus("101;102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;");
			$manager->persist($s);
	
			//-207-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4atz_D"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(-2.2);
			$s->setBias(0);
			$s->setCEValue(0.91);
			$s->setIEValue(1.8);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(134);
			$s->setAliTo(153);
			$s->setEnvFrom(134);
			$s->setEnvTo(153);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDIGNEDLAEIL");
			$s->setConsensus("134;135;136;137;138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;");
			$manager->persist($s);
	
			//-208-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4atz_E"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(11.4);
			$s->setBias(0.2);
			$s->setCEValue(4.4e-05);
			$s->setIEValue(8.9e-05);
			$s->setHmmFrom(7);
			$s->setHmmTo(32);
			$s->setAliFrom(7);
			$s->setAliTo(32);
			$s->setEnvFrom(6);
			$s->setEnvTo(33);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("LEAARAGQDDEVRILMANGADANAYD");
			$s->setConsensus("7;8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;");
			$manager->persist($s);
	
			//-209-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4atz_E"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(46.3);
			$s->setBias(0.1);
			$s->setCEValue(3.8e-16);
			$s->setIEValue(7.6e-16);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(34);
			$s->setAliTo(65);
			$s->setEnvFrom(34);
			$s->setEnvTo(66);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("YGRTPLHMAAAVGHLEIVEVLLRNGADVNAVD");
			$s->setConsensus("34;35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;");
			$manager->persist($s);
	
			//-210-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4atz_E"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(48.5);
			$s->setBias(0.1);
			$s->setCEValue(7.8e-17);
			$s->setIEValue(1.6e-16);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(67);
			$s->setAliTo(98);
			$s->setEnvFrom(67);
			$s->setEnvTo(99);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NGTTPLHLAASLGHLEIVEVLLKYGADVNAKD");
			$s->setConsensus("67;68;69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;");
			$manager->persist($s);
	
			//-211-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4atz_E"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(48.5);
			$s->setBias(0);
			$s->setCEValue(7.5e-17);
			$s->setIEValue(1.5e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(101);
			$s->setAliTo(132);
			$s->setEnvFrom(100);
			$s->setEnvTo(132);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GITPLYLAAYWGHLEIVEVLLKHGADVNAQDK");
			$s->setConsensus("101;102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;");
			$manager->persist($s);
	
			//-212-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4atz_E"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(-2.2);
			$s->setBias(0);
			$s->setCEValue(0.91);
			$s->setIEValue(1.8);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(134);
			$s->setAliTo(153);
			$s->setEnvFrom(134);
			$s->setEnvTo(153);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDIGNEDLAEIL");
			$s->setConsensus("134;135;136;137;138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;");
			$manager->persist($s);
	
			//-213-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4atz_F"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(11.4);
			$s->setBias(0.2);
			$s->setCEValue(4.4e-05);
			$s->setIEValue(8.9e-05);
			$s->setHmmFrom(7);
			$s->setHmmTo(32);
			$s->setAliFrom(7);
			$s->setAliTo(32);
			$s->setEnvFrom(6);
			$s->setEnvTo(33);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("LEAARAGQDDEVRILMANGADANAYD");
			$s->setConsensus("7;8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;");
			$manager->persist($s);
	
			//-214-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4atz_F"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(46.3);
			$s->setBias(0.1);
			$s->setCEValue(3.8e-16);
			$s->setIEValue(7.6e-16);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(34);
			$s->setAliTo(65);
			$s->setEnvFrom(34);
			$s->setEnvTo(66);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("YGRTPLHMAAAVGHLEIVEVLLRNGADVNAVD");
			$s->setConsensus("34;35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;");
			$manager->persist($s);
	
			//-215-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4atz_F"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(48.5);
			$s->setBias(0.1);
			$s->setCEValue(7.8e-17);
			$s->setIEValue(1.6e-16);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(67);
			$s->setAliTo(98);
			$s->setEnvFrom(67);
			$s->setEnvTo(99);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NGTTPLHLAASLGHLEIVEVLLKYGADVNAKD");
			$s->setConsensus("67;68;69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;");
			$manager->persist($s);
	
			//-216-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4atz_F"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(48.5);
			$s->setBias(0);
			$s->setCEValue(7.5e-17);
			$s->setIEValue(1.5e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(101);
			$s->setAliTo(132);
			$s->setEnvFrom(100);
			$s->setEnvTo(132);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GITPLYLAAYWGHLEIVEVLLKHGADVNAQDK");
			$s->setConsensus("101;102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;");
			$manager->persist($s);
	
			//-217-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4atz_F"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(-2.2);
			$s->setBias(0);
			$s->setCEValue(0.91);
			$s->setIEValue(1.8);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(134);
			$s->setAliTo(153);
			$s->setEnvFrom(134);
			$s->setEnvTo(153);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDIGNEDLAEIL");
			$s->setConsensus("134;135;136;137;138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;");
			$manager->persist($s);
	
			//-218-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4b7e_B"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(24.7);
			$s->setBias(0);
			$s->setCEValue(8.5e-10);
			$s->setIEValue(1.7e-09);
			$s->setHmmFrom(16);
			$s->setHmmTo(32);
			$s->setAliFrom(1);
			$s->setAliTo(17);
			$s->setEnvFrom(1);
			$s->setEnvTo(17);
			$s->setAliHmm("evvklLlsqGAdlnaqd");
			$s->setAliRep("EVVKLLLEHGADVLAQD");
			$s->setConsensus("1;2;3;4;5;6;7;8;9;10;11;12;13;14;15;16;17;");
			$manager->persist($s);
	
			//-219-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4b7k_B"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(30.3);
			$s->setBias(0);
			$s->setCEValue(1.5e-11);
			$s->setIEValue(3e-11);
			$s->setHmmFrom(14);
			$s->setHmmTo(33);
			$s->setAliFrom(1);
			$s->setAliTo(20);
			$s->setEnvFrom(1);
			$s->setEnvTo(20);
			$s->setAliHmm("nlevvklLlsqGAdlnaqdd");
			$s->setAliRep("HLEVVKLLLEHGADVSAQDK");
			$s->setConsensus("1;2;3;4;5;6;7;8;9;10;11;12;13;14;15;16;17;18;19;20;");
			$manager->persist($s);
	
			//-220-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4drx_E"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(15.9);
			$s->setBias(0.1);
			$s->setCEValue(1.1e-06);
			$s->setIEValue(3.3e-06);
			$s->setHmmFrom(8);
			$s->setHmmTo(32);
			$s->setAliFrom(20);
			$s->setAliTo(44);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("EAARAGQDDEVRILMANGADVNATD");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;");
			$manager->persist($s);
	
			//-221-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4drx_E"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(49.2);
			$s->setBias(0.1);
			$s->setCEValue(3e-17);
			$s->setIEValue(8.9e-17);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(47);
			$s->setAliTo(77);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLTPLHLAATYGHLEIVEVLLKHGADVNAID");
			$s->setConsensus("47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;");
			$manager->persist($s);
	
			//-222-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4drx_E"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(47.9);
			$s->setBias(0.1);
			$s->setCEValue(7.5e-17);
			$s->setIEValue(2.3e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(80);
			$s->setAliTo(110);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GSTPLHLAALIGHLEIVEVLLKHGADVNAVD");
			$s->setConsensus("80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;");
			$manager->persist($s);
	
			//-223-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4drx_E"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(53.7);
			$s->setBias(0);
			$s->setCEValue(1.1e-18);
			$s->setIEValue(3.3e-18);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(113);
			$s->setAliTo(144);
			$s->setEnvFrom(112);
			$s->setEnvTo(144);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GDTPLHLAAIMGHLEIVEVLLKHGADVNAQDK");
			$s->setConsensus("113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;");
			$manager->persist($s);
	
			//-224-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4drx_E"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(1.2);
			$s->setBias(0);
			$s->setCEValue(0.048);
			$s->setIEValue(0.14);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(146);
			$s->setAliTo(165);
			$s->setEnvFrom(145);
			$s->setEnvTo(168);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;");
			$manager->persist($s);
	
			//-225-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4drx_F"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(15.9);
			$s->setBias(0.1);
			$s->setCEValue(1.1e-06);
			$s->setIEValue(3.3e-06);
			$s->setHmmFrom(8);
			$s->setHmmTo(32);
			$s->setAliFrom(20);
			$s->setAliTo(44);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("EAARAGQDDEVRILMANGADVNATD");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;");
			$manager->persist($s);
	
			//-226-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4drx_F"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(49.2);
			$s->setBias(0.1);
			$s->setCEValue(3e-17);
			$s->setIEValue(8.9e-17);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(47);
			$s->setAliTo(77);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLTPLHLAATYGHLEIVEVLLKHGADVNAID");
			$s->setConsensus("47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;");
			$manager->persist($s);
	
			//-227-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4drx_F"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(47.9);
			$s->setBias(0.1);
			$s->setCEValue(7.5e-17);
			$s->setIEValue(2.3e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(80);
			$s->setAliTo(110);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GSTPLHLAALIGHLEIVEVLLKHGADVNAVD");
			$s->setConsensus("80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;");
			$manager->persist($s);
	
			//-228-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4drx_F"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(53.7);
			$s->setBias(0);
			$s->setCEValue(1.1e-18);
			$s->setIEValue(3.3e-18);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(113);
			$s->setAliTo(144);
			$s->setEnvFrom(112);
			$s->setEnvTo(144);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GDTPLHLAAIMGHLEIVEVLLKHGADVNAQDK");
			$s->setConsensus("113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;");
			$manager->persist($s);
	
			//-229-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4drx_F"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(1.2);
			$s->setBias(0);
			$s->setCEValue(0.048);
			$s->setIEValue(0.14);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(146);
			$s->setAliTo(165);
			$s->setEnvFrom(145);
			$s->setEnvTo(168);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;");
			$manager->persist($s);
	
			//-230-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx5_D"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(14.7);
			$s->setBias(0.1);
			$s->setCEValue(2.6e-06);
			$s->setIEValue(6.5e-06);
			$s->setHmmFrom(8);
			$s->setHmmTo(32);
			$s->setAliFrom(20);
			$s->setAliTo(44);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("EAARAGRDDEVRILMANGADVNAAD");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;");
			$manager->persist($s);
	
			//-231-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx5_D"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(48.7);
			$s->setBias(0);
			$s->setCEValue(4.3e-17);
			$s->setIEValue(1.1e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(47);
			$s->setAliTo(77);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWTPLHLAAYWGHLEIVEVLLKNGADVNAYD");
			$s->setConsensus("47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;");
			$manager->persist($s);
	
			//-232-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx5_D"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(48.5);
			$s->setBias(0.1);
			$s->setCEValue(5.1e-17);
			$s->setIEValue(1.3e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(80);
			$s->setAliTo(111);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GSTPLHLAAHFGHLEIVEVLLKNGADVNAKDD");
			$s->setConsensus("80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;");
			$manager->persist($s);
	
			//-233-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx5_D"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(52.7);
			$s->setBias(0.1);
			$s->setCEValue(2.4e-18);
			$s->setIEValue(6e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(112);
			$s->setAliTo(144);
			$s->setEnvFrom(112);
			$s->setEnvTo(144);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("NGITPLHLAANRGHLEIVEVLLKYGADVNAQDK");
			$s->setConsensus("112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;");
			$manager->persist($s);
	
			//-234-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx5_D"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(1.4);
			$s->setBias(0);
			$s->setCEValue(0.043);
			$s->setIEValue(0.11);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(146);
			$s->setAliTo(165);
			$s->setEnvFrom(145);
			$s->setEnvTo(168);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISINNGNEDLAEIL");
			$s->setConsensus("146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;");
			$manager->persist($s);
	
			//-235-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx5_E"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(14.7);
			$s->setBias(0.1);
			$s->setCEValue(2.6e-06);
			$s->setIEValue(6.5e-06);
			$s->setHmmFrom(8);
			$s->setHmmTo(32);
			$s->setAliFrom(20);
			$s->setAliTo(44);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("EAARAGRDDEVRILMANGADVNAAD");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;");
			$manager->persist($s);
	
			//-236-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx5_E"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(48.7);
			$s->setBias(0);
			$s->setCEValue(4.3e-17);
			$s->setIEValue(1.1e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(47);
			$s->setAliTo(77);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWTPLHLAAYWGHLEIVEVLLKNGADVNAYD");
			$s->setConsensus("47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;");
			$manager->persist($s);
	
			//-237-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx5_E"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(48.5);
			$s->setBias(0.1);
			$s->setCEValue(5.1e-17);
			$s->setIEValue(1.3e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(80);
			$s->setAliTo(111);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GSTPLHLAAHFGHLEIVEVLLKNGADVNAKDD");
			$s->setConsensus("80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;");
			$manager->persist($s);
	
			//-238-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx5_E"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(52.7);
			$s->setBias(0.1);
			$s->setCEValue(2.4e-18);
			$s->setIEValue(6e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(112);
			$s->setAliTo(144);
			$s->setEnvFrom(112);
			$s->setEnvTo(144);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("NGITPLHLAANRGHLEIVEVLLKYGADVNAQDK");
			$s->setConsensus("112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;");
			$manager->persist($s);
	
			//-239-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx5_E"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(1.4);
			$s->setBias(0);
			$s->setCEValue(0.043);
			$s->setIEValue(0.11);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(146);
			$s->setAliTo(165);
			$s->setEnvFrom(145);
			$s->setEnvTo(168);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISINNGNEDLAEIL");
			$s->setConsensus("146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;");
			$manager->persist($s);
	
			//-240-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx7_D"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(14.7);
			$s->setBias(0.1);
			$s->setCEValue(2.6e-06);
			$s->setIEValue(6.5e-06);
			$s->setHmmFrom(8);
			$s->setHmmTo(32);
			$s->setAliFrom(20);
			$s->setAliTo(44);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("EAARAGRDDEVRILMANGADVNAAD");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;");
			$manager->persist($s);
	
			//-241-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx7_D"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(48.7);
			$s->setBias(0);
			$s->setCEValue(4.3e-17);
			$s->setIEValue(1.1e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(47);
			$s->setAliTo(77);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWTPLHLAAYWGHLEIVEVLLKNGADVNAYD");
			$s->setConsensus("47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;");
			$manager->persist($s);
	
			//-242-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx7_D"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(48.5);
			$s->setBias(0.1);
			$s->setCEValue(5.1e-17);
			$s->setIEValue(1.3e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(80);
			$s->setAliTo(111);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GSTPLHLAAHFGHLEIVEVLLKNGADVNAKDD");
			$s->setConsensus("80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;");
			$manager->persist($s);
	
			//-243-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx7_D"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(52.7);
			$s->setBias(0.1);
			$s->setCEValue(2.4e-18);
			$s->setIEValue(6e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(112);
			$s->setAliTo(144);
			$s->setEnvFrom(112);
			$s->setEnvTo(144);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("NGITPLHLAANRGHLEIVEVLLKYGADVNAQDK");
			$s->setConsensus("112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;");
			$manager->persist($s);
	
			//-244-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx7_D"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(1.4);
			$s->setBias(0);
			$s->setCEValue(0.043);
			$s->setIEValue(0.11);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(146);
			$s->setAliTo(165);
			$s->setEnvFrom(145);
			$s->setEnvTo(168);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISINNGNEDLAEIL");
			$s->setConsensus("146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;");
			$manager->persist($s);
	
			//-245-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx7_E"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(14.7);
			$s->setBias(0.1);
			$s->setCEValue(2.6e-06);
			$s->setIEValue(6.5e-06);
			$s->setHmmFrom(8);
			$s->setHmmTo(32);
			$s->setAliFrom(20);
			$s->setAliTo(44);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("EAARAGRDDEVRILMANGADVNAAD");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;");
			$manager->persist($s);
	
			//-246-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx7_E"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(48.7);
			$s->setBias(0);
			$s->setCEValue(4.3e-17);
			$s->setIEValue(1.1e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(47);
			$s->setAliTo(77);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWTPLHLAAYWGHLEIVEVLLKNGADVNAYD");
			$s->setConsensus("47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;");
			$manager->persist($s);
	
			//-247-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx7_E"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(48.5);
			$s->setBias(0.1);
			$s->setCEValue(5.1e-17);
			$s->setIEValue(1.3e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(80);
			$s->setAliTo(111);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GSTPLHLAAHFGHLEIVEVLLKNGADVNAKDD");
			$s->setConsensus("80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;");
			$manager->persist($s);
	
			//-248-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx7_E"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(52.7);
			$s->setBias(0.1);
			$s->setCEValue(2.4e-18);
			$s->setIEValue(6e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(112);
			$s->setAliTo(144);
			$s->setEnvFrom(112);
			$s->setEnvTo(144);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("NGITPLHLAANRGHLEIVEVLLKYGADVNAQDK");
			$s->setConsensus("112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;");
			$manager->persist($s);
	
			//-249-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4dx7_E"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(1.4);
			$s->setBias(0);
			$s->setCEValue(0.043);
			$s->setIEValue(0.11);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(146);
			$s->setAliTo(165);
			$s->setEnvFrom(145);
			$s->setEnvTo(168);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISINNGNEDLAEIL");
			$s->setConsensus("146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;");
			$manager->persist($s);
	
			//-250-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4f6r_C"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(16.4);
			$s->setBias(0.1);
			$s->setCEValue(3.8e-07);
			$s->setIEValue(1.5e-06);
			$s->setHmmFrom(8);
			$s->setHmmTo(33);
			$s->setAliFrom(20);
			$s->setAliTo(45);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("EAARAGQDDEVRILMANGADVNAEDD");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;45;");
			$manager->persist($s);
	
			//-251-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4f6r_C"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(49.7);
			$s->setBias(0);
			$s->setCEValue(1e-17);
			$s->setIEValue(4.1e-17);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(47);
			$s->setAliTo(78);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GKTPLHLAAIKGHLEIVEVLLKHGADVNAADK");
			$s->setConsensus("47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;78;");
			$manager->persist($s);
	
			//-252-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4f6r_C"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(50.8);
			$s->setBias(0.1);
			$s->setCEValue(4.8e-18);
			$s->setIEValue(1.9e-17);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(80);
			$s->setAliTo(110);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GDTPLHLAALYGHLEIVEVLLKNGADVNATD");
			$s->setConsensus("80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;");
			$manager->persist($s);
	
			//-253-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4f6r_C"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(52.2);
			$s->setBias(0);
			$s->setCEValue(1.7e-18);
			$s->setIEValue(6.9e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(112);
			$s->setAliTo(144);
			$s->setEnvFrom(112);
			$s->setEnvTo(144);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("YGFTPLHLAADAGHLEIVEVLLKYGADVNAQDK");
			$s->setConsensus("112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;");
			$manager->persist($s);
	
			//-254-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4f6r_C"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(1.2);
			$s->setBias(0);
			$s->setCEValue(0.024);
			$s->setIEValue(0.095);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(146);
			$s->setAliTo(165);
			$s->setEnvFrom(145);
			$s->setEnvTo(168);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;");
			$manager->persist($s);
	
			//-255-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4f6r_D"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(16.4);
			$s->setBias(0.1);
			$s->setCEValue(3.8e-07);
			$s->setIEValue(1.5e-06);
			$s->setHmmFrom(8);
			$s->setHmmTo(33);
			$s->setAliFrom(20);
			$s->setAliTo(45);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("EAARAGQDDEVRILMANGADVNAEDD");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;45;");
			$manager->persist($s);
	
			//-256-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4f6r_D"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(49.7);
			$s->setBias(0);
			$s->setCEValue(1e-17);
			$s->setIEValue(4.1e-17);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(47);
			$s->setAliTo(78);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GKTPLHLAAIKGHLEIVEVLLKHGADVNAADK");
			$s->setConsensus("47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;78;");
			$manager->persist($s);
	
			//-257-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4f6r_D"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(50.8);
			$s->setBias(0.1);
			$s->setCEValue(4.8e-18);
			$s->setIEValue(1.9e-17);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(80);
			$s->setAliTo(110);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GDTPLHLAALYGHLEIVEVLLKNGADVNATD");
			$s->setConsensus("80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;");
			$manager->persist($s);
	
			//-258-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4f6r_D"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(52.2);
			$s->setBias(0);
			$s->setCEValue(1.7e-18);
			$s->setIEValue(6.9e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(112);
			$s->setAliTo(144);
			$s->setEnvFrom(112);
			$s->setEnvTo(144);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("YGFTPLHLAADAGHLEIVEVLLKYGADVNAQDK");
			$s->setConsensus("112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;");
			$manager->persist($s);
	
			//-259-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4f6r_D"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(1.2);
			$s->setBias(0);
			$s->setCEValue(0.024);
			$s->setIEValue(0.095);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(146);
			$s->setAliTo(165);
			$s->setEnvFrom(145);
			$s->setEnvTo(168);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;");
			$manager->persist($s);
	
			//-260-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4gpm_B"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(24.5);
			$s->setBias(0);
			$s->setCEValue(2e-09);
			$s->setIEValue(2e-09);
			$s->setHmmFrom(6);
			$s->setHmmTo(32);
			$s->setAliFrom(8);
			$s->setAliTo(34);
			$s->setEnvFrom(8);
			$s->setEnvTo(35);
			$s->setAliHmm("LHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("LIEAAENGNKDRVKDLIENGADVNASD");
			$s->setConsensus("8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;");
			$manager->persist($s);
	
			//-261-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4gpm_B"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(53);
			$s->setBias(0);
			$s->setCEValue(1.9e-18);
			$s->setIEValue(1.9e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(36);
			$s->setAliTo(67);
			$s->setEnvFrom(36);
			$s->setEnvTo(68);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("DGRTPLHHAAENGHKEVVKLLISKGADVNAKD");
			$s->setConsensus("36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;");
			$manager->persist($s);
	
			//-262-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4gpm_B"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(53);
			$s->setBias(0);
			$s->setCEValue(1.9e-18);
			$s->setIEValue(1.9e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(69);
			$s->setAliTo(100);
			$s->setEnvFrom(69);
			$s->setEnvTo(101);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("DGRTPLHHAAENGHKEVVKLLISKGADVNAKD");
			$s->setConsensus("69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;");
			$manager->persist($s);
	
			//-263-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4gpm_B"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(48.1);
			$s->setBias(0);
			$s->setCEValue(6.7e-17);
			$s->setIEValue(6.7e-17);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(102);
			$s->setAliTo(133);
			$s->setEnvFrom(102);
			$s->setEnvTo(134);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("DGRTPLHHAAENGHKEVVKLLISKGADVNTSD");
			$s->setConsensus("102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;");
			$manager->persist($s);
	
			//-264-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4gpm_B"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(20.4);
			$s->setBias(0);
			$s->setCEValue(4e-08);
			$s->setIEValue(4e-08);
			$s->setHmmFrom(1);
			$s->setHmmTo(26);
			$s->setAliFrom(135);
			$s->setAliTo(160);
			$s->setEnvFrom(135);
			$s->setEnvTo(165);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGA");
			$s->setAliRep("DGRTPLDLAREHGNEEVVKLLEKQGG");
			$s->setConsensus("135;136;137;138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;");
			$manager->persist($s);
	
			//-265-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hll_A"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(23.8);
			$s->setBias(0.1);
			$s->setCEValue(1.6e-09);
			$s->setIEValue(1.6e-09);
			$s->setHmmFrom(7);
			$s->setHmmTo(32);
			$s->setAliFrom(22);
			$s->setAliTo(47);
			$s->setEnvFrom(21);
			$s->setEnvTo(48);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("LEAARAGQDDEVRLLLEHGADVNARD");
			$s->setConsensus("22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;45;46;47;");
			$manager->persist($s);
	
			//-266-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hll_A"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(53);
			$s->setBias(0.1);
			$s->setCEValue(9.3e-19);
			$s->setIEValue(9.3e-19);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(50);
			$s->setAliTo(80);
			$s->setEnvFrom(49);
			$s->setEnvTo(81);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GSTPLHLAAYYGHLEIVRLLLEHGADVNARD");
			$s->setConsensus("50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;78;79;80;");
			$manager->persist($s);
	
			//-267-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hll_A"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(51.4);
			$s->setBias(0.1);
			$s->setCEValue(3e-18);
			$s->setIEValue(3e-18);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(83);
			$s->setAliTo(113);
			$s->setEnvFrom(82);
			$s->setEnvTo(114);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GTTPLHYAARLGHLEIVRLLLEHGADVNARD");
			$s->setConsensus("83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;112;113;");
			$manager->persist($s);
	
			//-268-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hll_A"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(52);
			$s->setBias(0.1);
			$s->setCEValue(2e-18);
			$s->setIEValue(2e-18);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(116);
			$s->setAliTo(146);
			$s->setEnvFrom(115);
			$s->setEnvTo(147);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWTPLHLAAKKGHLEIVRLLLKHGADVNAND");
			$s->setConsensus("116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;145;146;");
			$manager->persist($s);
	
			//-269-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hll_A"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(1.4);
			$s->setBias(0);
			$s->setCEValue(0.021);
			$s->setIEValue(0.021);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(149);
			$s->setAliTo(168);
			$s->setEnvFrom(148);
			$s->setEnvTo(172);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;166;167;168;");
			$manager->persist($s);
	
			//-270-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hrl_A"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(15.8);
			$s->setBias(0.1);
			$s->setCEValue(5.9e-07);
			$s->setIEValue(1.2e-06);
			$s->setHmmFrom(8);
			$s->setHmmTo(32);
			$s->setAliFrom(20);
			$s->setAliTo(44);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("EAARAGQDDEVRILMANGADVNAHD");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;");
			$manager->persist($s);
	
			//-271-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hrl_A"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(46.6);
			$s->setBias(0.1);
			$s->setCEValue(1e-16);
			$s->setIEValue(2e-16);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(46);
			$s->setAliTo(77);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("YGITPLHLAANFGHLEIVEVLLKHGADVNAFD");
			$s->setConsensus("46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;");
			$manager->persist($s);
	
			//-272-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hrl_A"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(44.6);
			$s->setBias(0.1);
			$s->setCEValue(4.4e-16);
			$s->setIEValue(8.8e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(79);
			$s->setAliTo(109);
			$s->setEnvFrom(78);
			$s->setEnvTo(110);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("DNTPLHLAADAGHLEIVEVLLKYGADVNASD");
			$s->setConsensus("79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;");
			$manager->persist($s);
	
			//-273-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hrl_A"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(53.5);
			$s->setBias(0.1);
			$s->setCEValue(6.6e-19);
			$s->setIEValue(1.3e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(111);
			$s->setAliTo(143);
			$s->setEnvFrom(111);
			$s->setEnvTo(143);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGHTPLHLAAREGHLEIVEVLLKNGADVNAQDK");
			$s->setConsensus("111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;");
			$manager->persist($s);
	
			//-274-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hrl_A"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(10.3);
			$s->setBias(0);
			$s->setCEValue(3.3e-05);
			$s->setIEValue(6.5e-05);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(145);
			$s->setAliTo(164);
			$s->setEnvFrom(144);
			$s->setEnvTo(170);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTPFDLAIDNGNEDIAEVL");
			$s->setConsensus("145;146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;");
			$manager->persist($s);
	
			//-275-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hrm_B"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(16.6);
			$s->setBias(0);
			$s->setCEValue(6.2e-07);
			$s->setIEValue(1.2e-06);
			$s->setHmmFrom(8);
			$s->setHmmTo(32);
			$s->setAliFrom(20);
			$s->setAliTo(44);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("EAARAGQDDEVRILMANGADVNAKD");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;");
			$manager->persist($s);
	
			//-276-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hrm_B"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(51.1);
			$s->setBias(0.1);
			$s->setCEValue(7.5e-18);
			$s->setIEValue(1.5e-17);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(46);
			$s->setAliTo(77);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("YGITPLHLAAAYGHLEIVEVLLKHGADVNAHD");
			$s->setConsensus("46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;");
			$manager->persist($s);
	
			//-277-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hrm_B"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(54.7);
			$s->setBias(0.1);
			$s->setCEValue(5.4e-19);
			$s->setIEValue(1.1e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(79);
			$s->setAliTo(111);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("NGWTPLHLAAKYGHLEIVEVLLKHGADVNAIDN");
			$s->setConsensus("79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;");
			$manager->persist($s);
	
			//-278-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hrm_B"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(51.2);
			$s->setBias(0.1);
			$s->setCEValue(7e-18);
			$s->setIEValue(1.4e-17);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(113);
			$s->setAliTo(144);
			$s->setEnvFrom(112);
			$s->setEnvTo(144);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GKTPLHLAAAHGHLEIVEVLLKYGADVNAQDK");
			$s->setConsensus("113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;");
			$manager->persist($s);
	
			//-279-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hrm_B"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(10.3);
			$s->setBias(0);
			$s->setCEValue(6.6e-05);
			$s->setIEValue(0.00013);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(146);
			$s->setAliTo(165);
			$s->setEnvFrom(145);
			$s->setEnvTo(171);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTPFDLAIDNGNEDIAEVL");
			$s->setConsensus("146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;");
			$manager->persist($s);
	
			//-280-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hrm_D"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(16.6);
			$s->setBias(0);
			$s->setCEValue(6.2e-07);
			$s->setIEValue(1.2e-06);
			$s->setHmmFrom(8);
			$s->setHmmTo(32);
			$s->setAliFrom(20);
			$s->setAliTo(44);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("EAARAGQDDEVRILMANGADVNAKD");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;");
			$manager->persist($s);
	
			//-281-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hrm_D"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(51.1);
			$s->setBias(0.1);
			$s->setCEValue(7.5e-18);
			$s->setIEValue(1.5e-17);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(46);
			$s->setAliTo(77);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("YGITPLHLAAAYGHLEIVEVLLKHGADVNAHD");
			$s->setConsensus("46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;");
			$manager->persist($s);
	
			//-282-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hrm_D"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(54.7);
			$s->setBias(0.1);
			$s->setCEValue(5.4e-19);
			$s->setIEValue(1.1e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(79);
			$s->setAliTo(111);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("NGWTPLHLAAKYGHLEIVEVLLKHGADVNAIDN");
			$s->setConsensus("79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;");
			$manager->persist($s);
	
			//-283-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hrm_D"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(51.2);
			$s->setBias(0.1);
			$s->setCEValue(7e-18);
			$s->setIEValue(1.4e-17);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(113);
			$s->setAliTo(144);
			$s->setEnvFrom(112);
			$s->setEnvTo(144);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GKTPLHLAAAHGHLEIVEVLLKYGADVNAQDK");
			$s->setConsensus("113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;");
			$manager->persist($s);
	
			//-284-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4hrm_D"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(10.3);
			$s->setBias(0);
			$s->setCEValue(6.6e-05);
			$s->setIEValue(0.00013);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(146);
			$s->setAliTo(165);
			$s->setEnvFrom(145);
			$s->setEnvTo(171);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTPFDLAIDNGNEDIAEVL");
			$s->setConsensus("146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;");
			$manager->persist($s);
	
			//-285-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4j7w_A"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(16.9);
			$s->setBias(0.1);
			$s->setCEValue(5.1e-07);
			$s->setIEValue(5.1e-07);
			$s->setHmmFrom(8);
			$s->setHmmTo(33);
			$s->setAliFrom(20);
			$s->setAliTo(45);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("EAARAGQDDEVRILMANGADVNATDN");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;45;");
			$manager->persist($s);
	
			//-286-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4j7w_A"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(51.3);
			$s->setBias(0.1);
			$s->setCEValue(6.7e-18);
			$s->setIEValue(6.7e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(46);
			$s->setAliTo(77);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("DGYTPLHLAASNGHLEIVEVLLKNGADVNASD");
			$s->setConsensus("46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;");
			$manager->persist($s);
	
			//-287-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4j7w_A"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(45.3);
			$s->setBias(0.2);
			$s->setCEValue(5.3e-16);
			$s->setIEValue(5.3e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(80);
			$s->setAliTo(111);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GITPLHAAAATGHLEIVEVLLKHGADVNAYDN");
			$s->setConsensus("80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;");
			$manager->persist($s);
	
			//-288-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4j7w_A"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(56.4);
			$s->setBias(0.1);
			$s->setCEValue(1.6e-19);
			$s->setIEValue(1.6e-19);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(112);
			$s->setAliTo(144);
			$s->setEnvFrom(112);
			$s->setEnvTo(144);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGHTPLHLAAKYGHLEIVEVLLKHGADVNAQDK");
			$s->setConsensus("112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;");
			$manager->persist($s);
	
			//-289-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4j7w_A"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(1.2);
			$s->setBias(0);
			$s->setCEValue(0.048);
			$s->setIEValue(0.048);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(146);
			$s->setAliTo(165);
			$s->setEnvFrom(145);
			$s->setEnvTo(168);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;");
			$manager->persist($s);
	
			//-290-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4j7w_B"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(16.9);
			$s->setBias(0.1);
			$s->setCEValue(5.1e-07);
			$s->setIEValue(5.1e-07);
			$s->setHmmFrom(8);
			$s->setHmmTo(33);
			$s->setAliFrom(20);
			$s->setAliTo(45);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("EAARAGQDDEVRILMANGADVNATDN");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;45;");
			$manager->persist($s);
	
			//-291-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4j7w_B"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(51.3);
			$s->setBias(0.1);
			$s->setCEValue(6.7e-18);
			$s->setIEValue(6.7e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(46);
			$s->setAliTo(77);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("DGYTPLHLAASNGHLEIVEVLLKNGADVNASD");
			$s->setConsensus("46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;");
			$manager->persist($s);
	
			//-292-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4j7w_B"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(45.3);
			$s->setBias(0.2);
			$s->setCEValue(5.3e-16);
			$s->setIEValue(5.3e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(80);
			$s->setAliTo(111);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GITPLHAAAATGHLEIVEVLLKHGADVNAYDN");
			$s->setConsensus("80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;");
			$manager->persist($s);
	
			//-293-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4j7w_B"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(56.4);
			$s->setBias(0.1);
			$s->setCEValue(1.6e-19);
			$s->setIEValue(1.6e-19);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(112);
			$s->setAliTo(144);
			$s->setEnvFrom(112);
			$s->setEnvTo(144);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGHTPLHLAAKYGHLEIVEVLLKHGADVNAQDK");
			$s->setConsensus("112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;");
			$manager->persist($s);
	
			//-294-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4j7w_B"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(1.2);
			$s->setBias(0);
			$s->setCEValue(0.048);
			$s->setIEValue(0.048);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(146);
			$s->setAliTo(165);
			$s->setEnvFrom(145);
			$s->setEnvTo(168);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;");
			$manager->persist($s);
	
			//-295-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4j8y_A"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(16.9);
			$s->setBias(0.1);
			$s->setCEValue(2.5e-07);
			$s->setIEValue(2.5e-07);
			$s->setHmmFrom(8);
			$s->setHmmTo(33);
			$s->setAliFrom(20);
			$s->setAliTo(45);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("EAARAGQDDEVRILMANGADVNATDN");
			$s->setConsensus("20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;45;");
			$manager->persist($s);
	
			//-296-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4j8y_A"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(49.9);
			$s->setBias(0.1);
			$s->setCEValue(9.1e-18);
			$s->setIEValue(9.1e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(30);
			$s->setAliFrom(46);
			$s->setAliTo(75);
			$s->setEnvFrom(46);
			$s->setEnvTo(77);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlna");
			$s->setAliRep("DGYTPLHLAASNGHLEIVEVLLKNGADVNA");
			$s->setConsensus("46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;");
			$manager->persist($s);
	
			//-297-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4j8y_A"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(48.2);
			$s->setBias(0.2);
			$s->setCEValue(3e-17);
			$s->setIEValue(3e-17);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(80);
			$s->setAliTo(111);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GITPLHLAAATGHLEIVEVLLKHGADVNAYDN");
			$s->setConsensus("80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;");
			$manager->persist($s);
	
			//-298-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4j8y_A"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(56.4);
			$s->setBias(0.1);
			$s->setCEValue(7.8e-20);
			$s->setIEValue(7.8e-20);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(112);
			$s->setAliTo(144);
			$s->setEnvFrom(112);
			$s->setEnvTo(144);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGHTPLHLAAKYGHLEIVEVLLKHGADVNAQDK");
			$s->setConsensus("112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;");
			$manager->persist($s);
	
			//-299-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4j8y_A"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(1.2);
			$s->setBias(0);
			$s->setCEValue(0.024);
			$s->setIEValue(0.024);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(146);
			$s->setAliTo(165);
			$s->setEnvFrom(145);
			$s->setEnvTo(168);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;");
			$manager->persist($s);
	
			//-300-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4jb8_B"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(12.7);
			$s->setBias(0.2);
			$s->setCEValue(5.4e-06);
			$s->setIEValue(1.6e-05);
			$s->setHmmFrom(9);
			$s->setHmmTo(32);
			$s->setAliFrom(21);
			$s->setAliTo(44);
			$s->setEnvFrom(18);
			$s->setEnvTo(45);
			$s->setAliHmm("AalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("AASAGQDDEVRILMANGADVNASN");
			$s->setConsensus("21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;");
			$manager->persist($s);
	
			//-301-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4jb8_B"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(39);
			$s->setBias(0);
			$s->setCEValue(2.6e-14);
			$s->setIEValue(7.7e-14);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(47);
			$s->setAliTo(77);
			$s->setEnvFrom(46);
			$s->setEnvTo(78);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWTPLHATAEYGHLEIVDVLLAYGADVNASD");
			$s->setConsensus("47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;");
			$manager->persist($s);
	
			//-302-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4jb8_B"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(42.8);
			$s->setBias(0.2);
			$s->setCEValue(1.6e-15);
			$s->setIEValue(4.7e-15);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(79);
			$s->setAliTo(111);
			$s->setEnvFrom(79);
			$s->setEnvTo(111);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("YGSTPLHSAAWAGHLEIVDVLLAHGADVNASDN");
			$s->setConsensus("79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;");
			$manager->persist($s);
	
			//-303-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4jb8_B"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(45.1);
			$s->setBias(0.3);
			$s->setCEValue(3e-16);
			$s->setIEValue(8.9e-16);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(112);
			$s->setAliTo(143);
			$s->setEnvFrom(112);
			$s->setEnvTo(144);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("YGWTPLHLAAHTGHLEIVDVLLANGADVNANN");
			$s->setConsensus("112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;");
			$manager->persist($s);
	
			//-304-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("4jb8_B"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(10.4);
			$s->setBias(0);
			$s->setCEValue(3e-05);
			$s->setIEValue(9.1e-05);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(146);
			$s->setAliTo(165);
			$s->setEnvFrom(145);
			$s->setEnvTo(169);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTPFDLAIDNGNEDIAEVL");
			$s->setConsensus("146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;");
			$manager->persist($s);
	
			//-305-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("A8KA01"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(-1.4);
			$s->setBias(0);
			$s->setCEValue(0.16);
			$s->setIEValue(0.16);
			$s->setHmmFrom(18);
			$s->setHmmTo(32);
			$s->setAliFrom(63);
			$s->setAliTo(77);
			$s->setEnvFrom(54);
			$s->setEnvTo(78);
			$s->setAliHmm("vklLlsqGAdlnaqd");
			$s->setAliRep("CRELVEAGYDVRQPD");
			$s->setConsensus("63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;");
			$manager->persist($s);
	
			//-306-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("A8KA01"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(17.7);
			$s->setBias(0);
			$s->setCEValue(1.4e-07);
			$s->setIEValue(1.4e-07);
			$s->setHmmFrom(4);
			$s->setHmmTo(29);
			$s->setAliFrom(82);
			$s->setAliTo(107);
			$s->setEnvFrom(79);
			$s->setEnvTo(110);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdln");
			$s->setAliRep("TLLHWAAINNRIDLVKYYISKGAIVD");
			$s->setConsensus("82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;");
			$manager->persist($s);
	
			//-307-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("A8KA01"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(25.9);
			$s->setBias(0);
			$s->setCEValue(3.5e-10);
			$s->setIEValue(3.5e-10);
			$s->setHmmFrom(4);
			$s->setHmmTo(32);
			$s->setAliFrom(116);
			$s->setAliTo(144);
			$s->setEnvFrom(114);
			$s->setEnvTo(145);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("TPLHWATRQGHLSMVVQLMKYGADPSLID");
			$s->setConsensus("116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;");
			$manager->persist($s);
	
			//-308-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("A8KA01"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(23.7);
			$s->setBias(0);
			$s->setCEValue(1.8e-09);
			$s->setIEValue(1.8e-09);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(147);
			$s->setAliTo(177);
			$s->setEnvFrom(146);
			$s->setEnvTo(178);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GCSCIHLAAQFGHTSIVAYLIAKGQDVDMMD");
			$s->setConsensus("147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;166;167;168;169;170;171;172;173;174;175;176;177;");
			$manager->persist($s);
	
			//-309-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("A8KA01"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(18);
			$s->setBias(0);
			$s->setCEValue(1.1e-07);
			$s->setIEValue(1.1e-07);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(179);
			$s->setAliTo(211);
			$s->setEnvFrom(179);
			$s->setEnvTo(212);
			$s->setAliHmm("dGfTPLHlAalrg.nlevvklLlsqGAdlnaqd");
			$s->setAliRep("NGMTPLMWAAYRThSVDPTRLLLTFNVSVNLGD");
			$s->setConsensus("179;180;181;182;183;184;185;186;187;188;189;190;191;193;194;195;196;197;198;199;200;201;202;203;204;205;206;207;208;209;210;211;");
			$s->setInsertions(";h;14");
			$manager->persist($s);
	
			//-310-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("A8KA01"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(38.2);
			$s->setBias(0.3);
			$s->setCEValue(4.5e-14);
			$s->setIEValue(4.5e-14);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(216);
			$s->setAliTo(245);
			$s->setEnvFrom(214);
			$s->setEnvTo(246);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NTALHWAVLAGNTTVISLLLEAGANVDAQN");
			$s->setConsensus("216;217;218;219;220;221;222;223;224;225;226;227;228;229;230;231;232;233;234;235;236;237;238;239;240;241;242;243;244;245;");
			$manager->persist($s);
	
			//-311-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("A8KA01"));
			$s->setPfamRepeat(7);
			$s->setStatus("?");
			$s->setScore(-4);
			$s->setBias(0);
			$s->setCEValue(1);
			$s->setIEValue(1);
			$s->setHmmFrom(19);
			$s->setHmmTo(30);
			$s->setAliFrom(304);
			$s->setAliTo(315);
			$s->setEnvFrom(300);
			$s->setEnvTo(315);
			$s->setAliHmm("klLlsqGAdlna");
			$s->setAliRep("IWLVGFIADLNI");
			$s->setConsensus("304;305;306;307;308;309;310;311;312;313;314;315;");
			$manager->persist($s);
	
			//-312-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("C7NDE2"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(5.5);
			$s->setBias(0);
			$s->setCEValue(0.0011);
			$s->setIEValue(0.0011);
			$s->setHmmFrom(16);
			$s->setHmmTo(33);
			$s->setAliFrom(53);
			$s->setAliTo(70);
			$s->setEnvFrom(35);
			$s->setEnvTo(70);
			$s->setAliHmm("evvklLlsqGAdlnaqdd");
			$s->setAliRep("KISMFLINKGADIKSRTK");
			$s->setConsensus("53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;");
			$manager->persist($s);
	
			//-313-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("C7NDE2"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(8.5);
			$s->setBias(0);
			$s->setCEValue(0.00012);
			$s->setIEValue(0.00012);
			$s->setHmmFrom(13);
			$s->setHmmTo(30);
			$s->setAliFrom(89);
			$s->setAliTo(106);
			$s->setEnvFrom(87);
			$s->setEnvTo(109);
			$s->setAliHmm("gnlevvklLlsqGAdlna");
			$s->setAliRep("GTTELCKIFLEKGADITA");
			$s->setConsensus("89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;");
			$manager->persist($s);
	
			//-314-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_1D5"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(14.9);
			$s->setBias(0.1);
			$s->setCEValue(2.1e-05);
			$s->setIEValue(3.1e-05);
			$s->setHmmFrom(7);
			$s->setHmmTo(32);
			$s->setAliFrom(8);
			$s->setAliTo(33);
			$s->setEnvFrom(7);
			$s->setEnvTo(34);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("LEAARAGQDDEVRILMANGADVNAND");
			$s->setConsensus("8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;");
			$manager->persist($s);
	
			//-315-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_1D5"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(50.5);
			$s->setBias(0.3);
			$s->setCEValue(1.1e-16);
			$s->setIEValue(1.6e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(36);
			$s->setAliTo(67);
			$s->setEnvFrom(35);
			$s->setEnvTo(67);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GNTPLHLAADYDHLEIVEVLLKHGADVNAHDN");
			$s->setConsensus("36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;");
			$manager->persist($s);
	
			//-316-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_1D5"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(53.8);
			$s->setBias(0.1);
			$s->setCEValue(9.1e-18);
			$s->setIEValue(1.4e-17);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(68);
			$s->setAliTo(100);
			$s->setEnvFrom(68);
			$s->setEnvTo(100);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGSTPLHLAALFGHLEIVEVLLKHGADVNAQDK");
			$s->setConsensus("68;69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;");
			$manager->persist($s);
	
			//-317-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_1D5"));
			$s->setPfamRepeat(4);
			$s->setStatus("?");
			$s->setScore(1.9);
			$s->setBias(0);
			$s->setCEValue(0.27);
			$s->setIEValue(0.41);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(102);
			$s->setAliTo(121);
			$s->setEnvFrom(101);
			$s->setEnvTo(124);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;");
			$manager->persist($s);
	
			//-318-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_20"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(16.6);
			$s->setBias(0.1);
			$s->setCEValue(5.9e-06);
			$s->setIEValue(8.9e-06);
			$s->setHmmFrom(7);
			$s->setHmmTo(33);
			$s->setAliFrom(8);
			$s->setAliTo(34);
			$s->setEnvFrom(7);
			$s->setEnvTo(34);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("LEAARAGQDDEVRILMANGADVNAEDK");
			$s->setConsensus("8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;");
			$manager->persist($s);
	
			//-319-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_20"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(46.6);
			$s->setBias(0.3);
			$s->setCEValue(1.8e-15);
			$s->setIEValue(2.7e-15);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(36);
			$s->setAliTo(66);
			$s->setEnvFrom(35);
			$s->setEnvTo(67);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLTPLHLAAMNDHLEIVEVLLKNGADVNAID");
			$s->setConsensus("36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;");
			$manager->persist($s);
	
			//-320-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_20"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(50.2);
			$s->setBias(0);
			$s->setCEValue(1.3e-16);
			$s->setIEValue(2e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(69);
			$s->setAliTo(100);
			$s->setEnvFrom(68);
			$s->setEnvTo(100);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GETPLHLVAMYGHLEIVEVLLKHGADVNAQDK");
			$s->setConsensus("69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;");
			$manager->persist($s);
	
			//-321-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_20"));
			$s->setPfamRepeat(4);
			$s->setStatus("?");
			$s->setScore(1.8);
			$s->setBias(0);
			$s->setCEValue(0.29);
			$s->setIEValue(0.43);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(102);
			$s->setAliTo(121);
			$s->setEnvFrom(101);
			$s->setEnvTo(123);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;");
			$manager->persist($s);
	
			//-322-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_3ANK"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(52.9);
			$s->setBias(0);
			$s->setCEValue(1.8e-17);
			$s->setIEValue(2.7e-17);
			$s->setHmmFrom(3);
			$s->setHmmTo(33);
			$s->setAliFrom(1);
			$s->setAliTo(31);
			$s->setEnvFrom(1);
			$s->setEnvTo(31);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("RTPLHLAARNGHLEVVKLLLEAGADVNAKDK");
			$s->setConsensus("1;2;3;4;5;6;7;8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;");
			$manager->persist($s);
	
			//-323-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_3ANK"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(57.9);
			$s->setBias(0.1);
			$s->setCEValue(4.9e-19);
			$s->setIEValue(7.3e-19);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(32);
			$s->setAliTo(64);
			$s->setEnvFrom(32);
			$s->setEnvTo(64);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("NGRTPLHLAARNGHLEVVKLLLEAGADVNAKDK");
			$s->setConsensus("32;33;34;35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;");
			$manager->persist($s);
	
			//-324-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_3ANK"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(43.4);
			$s->setBias(0.1);
			$s->setCEValue(1.8e-14);
			$s->setIEValue(2.7e-14);
			$s->setHmmFrom(1);
			$s->setHmmTo(26);
			$s->setAliFrom(65);
			$s->setAliTo(90);
			$s->setEnvFrom(65);
			$s->setEnvTo(91);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGA");
			$s->setAliRep("NGRTPLHLAARNGHLEVVKLLLEAGA");
			$s->setConsensus("65;66;67;68;69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;");
			$manager->persist($s);
	
			//-325-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_3CA1A2N"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(14.4);
			$s->setBias(0.1);
			$s->setCEValue(2.8e-05);
			$s->setIEValue(4.2e-05);
			$s->setHmmFrom(7);
			$s->setHmmTo(33);
			$s->setAliFrom(7);
			$s->setAliTo(33);
			$s->setEnvFrom(6);
			$s->setEnvTo(33);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("LEAARAGQDDEVRILMANGADVAAKDK");
			$s->setConsensus("7;8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;");
			$manager->persist($s);
	
			//-326-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_3CA1A2N"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(57.5);
			$s->setBias(0.1);
			$s->setCEValue(6.5e-19);
			$s->setIEValue(9.7e-19);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(34);
			$s->setAliTo(66);
			$s->setEnvFrom(34);
			$s->setEnvTo(66);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("NGSTPLHLAARNGHLEVVKLLLEAGADVNAQDK");
			$s->setConsensus("34;35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;");
			$manager->persist($s);
	
			//-327-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_3CA1A2N"));
			$s->setPfamRepeat(3);
			$s->setStatus("?");
			$s->setScore(2.2);
			$s->setBias(0);
			$s->setCEValue(0.22);
			$s->setIEValue(0.32);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(68);
			$s->setAliTo(87);
			$s->setEnvFrom(67);
			$s->setEnvTo(87);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("68;69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;");
			$manager->persist($s);
	
			//-328-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_3CA1A2N-OH"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(14.2);
			$s->setBias(0.1);
			$s->setCEValue(3.3e-05);
			$s->setIEValue(5e-05);
			$s->setHmmFrom(7);
			$s->setHmmTo(33);
			$s->setAliFrom(16);
			$s->setAliTo(42);
			$s->setEnvFrom(15);
			$s->setEnvTo(42);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("LEAARAGQDDEVRILMANGADVAAKDK");
			$s->setConsensus("16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;");
			$manager->persist($s);
	
			//-329-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_3CA1A2N-OH"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(46.4);
			$s->setBias(0.1);
			$s->setCEValue(2.1e-15);
			$s->setIEValue(3.1e-15);
			$s->setHmmFrom(1);
			$s->setHmmTo(28);
			$s->setAliFrom(43);
			$s->setAliTo(70);
			$s->setEnvFrom(43);
			$s->setEnvTo(72);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdl");
			$s->setAliRep("NGSTPLHLAARNGHLEVVKLLLEAGADV");
			$s->setConsensus("43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;");
			$manager->persist($s);
	
			//-330-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_3CA1A2N-OH"));
			$s->setPfamRepeat(3);
			$s->setStatus("?");
			$s->setScore(2);
			$s->setBias(0);
			$s->setCEValue(0.25);
			$s->setIEValue(0.38);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(76);
			$s->setAliTo(95);
			$s->setEnvFrom(75);
			$s->setEnvTo(95);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;");
			$manager->persist($s);
	
			//-331-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_3H10"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(19.8);
			$s->setBias(0.2);
			$s->setCEValue(5.7e-07);
			$s->setIEValue(8.6e-07);
			$s->setHmmFrom(7);
			$s->setHmmTo(33);
			$s->setAliFrom(8);
			$s->setAliTo(34);
			$s->setEnvFrom(7);
			$s->setEnvTo(34);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("LEAARAGQDDEVRILIANGADVNAVDN");
			$s->setConsensus("8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;");
			$manager->persist($s);
	
			//-332-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_3H10"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(46.7);
			$s->setBias(0.1);
			$s->setCEValue(1.7e-15);
			$s->setIEValue(2.6e-15);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(36);
			$s->setAliTo(66);
			$s->setEnvFrom(35);
			$s->setEnvTo(67);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLTPLHLAAVSGHLEIVEVLLKHGADVDAAD");
			$s->setConsensus("36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;");
			$manager->persist($s);
	
			//-333-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_3H10"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(49.6);
			$s->setBias(0);
			$s->setCEValue(2e-16);
			$s->setIEValue(2.9e-16);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(68);
			$s->setAliTo(99);
			$s->setEnvFrom(68);
			$s->setEnvTo(100);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("YGFTPLHLAAMTGHLEIVEVLLKYGADVNAFD");
			$s->setConsensus("68;69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;");
			$manager->persist($s);
	
			//-334-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_3H10"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(42.8);
			$s->setBias(0);
			$s->setCEValue(2.9e-14);
			$s->setIEValue(4.4e-14);
			$s->setHmmFrom(2);
			$s->setHmmTo(30);
			$s->setAliFrom(102);
			$s->setAliTo(130);
			$s->setEnvFrom(101);
			$s->setEnvTo(130);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlna");
			$s->setAliRep("GSTPLHLAADEGHLEIVEVLLKYGADVNA");
			$s->setConsensus("102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;");
			$manager->persist($s);
	
			//-335-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_4ANK"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(57);
			$s->setBias(0.1);
			$s->setCEValue(9.3e-19);
			$s->setIEValue(1.4e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(1);
			$s->setAliTo(33);
			$s->setEnvFrom(1);
			$s->setEnvTo(33);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("NGRTPLHLAARNGHLEVVKLLLEAGADVNAKDK");
			$s->setConsensus("1;2;3;4;5;6;7;8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;");
			$manager->persist($s);
	
			//-336-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_4ANK"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(57);
			$s->setBias(0.1);
			$s->setCEValue(9.3e-19);
			$s->setIEValue(1.4e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(34);
			$s->setAliTo(66);
			$s->setEnvFrom(34);
			$s->setEnvTo(66);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("NGRTPLHLAARNGHLEVVKLLLEAGADVNAKDK");
			$s->setConsensus("34;35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;");
			$manager->persist($s);
	
			//-337-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_4ANK"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(57);
			$s->setBias(0.1);
			$s->setCEValue(9.3e-19);
			$s->setIEValue(1.4e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(67);
			$s->setAliTo(99);
			$s->setEnvFrom(67);
			$s->setEnvTo(99);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("NGRTPLHLAARNGHLEVVKLLLEAGADVNAKDK");
			$s->setConsensus("67;68;69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;");
			$manager->persist($s);
	
			//-338-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_4ANK"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(42.6);
			$s->setBias(0.1);
			$s->setCEValue(3.2e-14);
			$s->setIEValue(4.9e-14);
			$s->setHmmFrom(1);
			$s->setHmmTo(26);
			$s->setAliFrom(100);
			$s->setAliTo(125);
			$s->setEnvFrom(100);
			$s->setEnvTo(126);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGA");
			$s->setAliRep("NGRTPLHLAARNGHLEVVKLLLEAGA");
			$s->setConsensus("100;101;102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;");
			$manager->persist($s);
	
			//-339-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_AR_3A"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(14.4);
			$s->setBias(0.1);
			$s->setCEValue(3e-05);
			$s->setIEValue(4.5e-05);
			$s->setHmmFrom(7);
			$s->setHmmTo(32);
			$s->setAliFrom(8);
			$s->setAliTo(33);
			$s->setEnvFrom(7);
			$s->setEnvTo(34);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("LEAARAGQDDEVRILMANGADVNAND");
			$s->setConsensus("8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;");
			$manager->persist($s);
	
			//-340-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_AR_3A"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(37.4);
			$s->setBias(0);
			$s->setCEValue(1.5e-12);
			$s->setIEValue(2.2e-12);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(36);
			$s->setAliTo(67);
			$s->setEnvFrom(35);
			$s->setEnvTo(67);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GITPLHLVVNNGHLEIIEVLLKYAADVNASDK");
			$s->setConsensus("36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;");
			$manager->persist($s);
	
			//-341-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_AR_3A"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(50.1);
			$s->setBias(0);
			$s->setCEValue(1.4e-16);
			$s->setIEValue(2e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(69);
			$s->setAliTo(99);
			$s->setEnvFrom(68);
			$s->setEnvTo(100);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWTPLHLAAYRGHLEIVEVLLKYGADVNAMD");
			$s->setConsensus("69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;");
			$manager->persist($s);
	
			//-342-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_AR_3A"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(50.4);
			$s->setBias(0);
			$s->setCEValue(1.2e-16);
			$s->setIEValue(1.7e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(102);
			$s->setAliTo(133);
			$s->setEnvFrom(101);
			$s->setEnvTo(133);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GYTPLHLAAEDGHLEIVEVLLKYGADVNAQDK");
			$s->setConsensus("102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;");
			$manager->persist($s);
	
			//-343-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_AR_3A"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(0.9);
			$s->setBias(0);
			$s->setCEValue(0.53);
			$s->setIEValue(0.79);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(135);
			$s->setAliTo(154);
			$s->setEnvFrom(134);
			$s->setEnvTo(154);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("135;136;137;138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;");
			$manager->persist($s);
	
			//-344-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_AR_F8"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(16.2);
			$s->setBias(0);
			$s->setCEValue(7.9e-06);
			$s->setIEValue(1.2e-05);
			$s->setHmmFrom(7);
			$s->setHmmTo(32);
			$s->setAliFrom(11);
			$s->setAliTo(36);
			$s->setEnvFrom(10);
			$s->setEnvTo(37);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("LEAARAGQDDEVRILMANGADVNATD");
			$s->setConsensus("11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;");
			$manager->persist($s);
	
			//-345-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_AR_F8"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(47.2);
			$s->setBias(0.1);
			$s->setCEValue(1.1e-15);
			$s->setIEValue(1.7e-15);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(39);
			$s->setAliTo(70);
			$s->setEnvFrom(38);
			$s->setEnvTo(70);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GHTPLHLAAKTGHLEIVEVLLKYGADVNAWDN");
			$s->setConsensus("39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;");
			$manager->persist($s);
	
			//-346-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_AR_F8"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(50);
			$s->setBias(0.1);
			$s->setCEValue(1.5e-16);
			$s->setIEValue(2.2e-16);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(71);
			$s->setAliTo(102);
			$s->setEnvFrom(71);
			$s->setEnvTo(103);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("YGATPLHLAADNGHLEIVEVLLKHGADVNAKD");
			$s->setConsensus("71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;");
			$manager->persist($s);
	
			//-347-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_AR_F8"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(51.6);
			$s->setBias(0);
			$s->setCEValue(4.7e-17);
			$s->setIEValue(7e-17);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(105);
			$s->setAliTo(136);
			$s->setEnvFrom(104);
			$s->setEnvTo(136);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GFTPLHLAAYDGHLEIVEVLLKYGADVNAQDK");
			$s->setConsensus("105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;");
			$manager->persist($s);
	
			//-348-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_AR_F8"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(0.9);
			$s->setBias(0);
			$s->setCEValue(0.54);
			$s->setIEValue(0.82);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(138);
			$s->setAliTo(157);
			$s->setEnvFrom(137);
			$s->setEnvTo(157);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;157;");
			$manager->persist($s);
	
			//-349-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_Clone_1108_19"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(14.9);
			$s->setBias(0.1);
			$s->setCEValue(2.1e-05);
			$s->setIEValue(3.1e-05);
			$s->setHmmFrom(8);
			$s->setHmmTo(32);
			$s->setAliFrom(10);
			$s->setAliTo(34);
			$s->setEnvFrom(8);
			$s->setEnvTo(35);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("EAARAGRDDEVRILMANGADVNAAD");
			$s->setConsensus("10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;");
			$manager->persist($s);
	
			//-350-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_Clone_1108_19"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(48.9);
			$s->setBias(0);
			$s->setCEValue(3.4e-16);
			$s->setIEValue(5.1e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(37);
			$s->setAliTo(67);
			$s->setEnvFrom(36);
			$s->setEnvTo(68);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWTPLHLAAYWGHLEIVEVLLKNGADVNAYD");
			$s->setConsensus("37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;");
			$manager->persist($s);
	
			//-351-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_Clone_1108_19"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(48.7);
			$s->setBias(0.1);
			$s->setCEValue(4e-16);
			$s->setIEValue(6e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(70);
			$s->setAliTo(101);
			$s->setEnvFrom(69);
			$s->setEnvTo(101);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GSTPLHLAAHFGHLEIVEVLLKNGADVNAKDD");
			$s->setConsensus("70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;");
			$manager->persist($s);
	
			//-352-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_Clone_1108_19"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(52.9);
			$s->setBias(0.1);
			$s->setCEValue(1.9e-17);
			$s->setIEValue(2.8e-17);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(102);
			$s->setAliTo(134);
			$s->setEnvFrom(102);
			$s->setEnvTo(134);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("NGITPLHLAANRGHLEIVEVLLKYGADVNAQDK");
			$s->setConsensus("102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;");
			$manager->persist($s);
	
			//-353-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_Clone_1108_19"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(1.1);
			$s->setBias(0);
			$s->setCEValue(0.48);
			$s->setIEValue(0.73);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(136);
			$s->setAliTo(155);
			$s->setEnvFrom(135);
			$s->setEnvTo(155);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISINNGNEDLAEIL");
			$s->setConsensus("136;137;138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;");
			$manager->persist($s);
	
			//-354-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_E3_19"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(15.3);
			$s->setBias(0.1);
			$s->setCEValue(1.4e-05);
			$s->setIEValue(2.2e-05);
			$s->setHmmFrom(7);
			$s->setHmmTo(32);
			$s->setAliFrom(8);
			$s->setAliTo(33);
			$s->setEnvFrom(7);
			$s->setEnvTo(34);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("LEAARAGQDDEVRILMANGADVNAED");
			$s->setConsensus("8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;");
			$manager->persist($s);
	
			//-355-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_E3_19"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(48.1);
			$s->setBias(0);
			$s->setCEValue(6e-16);
			$s->setIEValue(9e-16);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(35);
			$s->setAliTo(66);
			$s->setEnvFrom(35);
			$s->setEnvTo(67);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("YGDTPLHLAARVGHLEIVEVLLKNGADVNALD");
			$s->setConsensus("35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;");
			$manager->persist($s);
	
			//-356-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_E3_19"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(48.4);
			$s->setBias(0);
			$s->setCEValue(4.7e-16);
			$s->setIEValue(7e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(69);
			$s->setAliTo(99);
			$s->setEnvFrom(68);
			$s->setEnvTo(100);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GSTPLHLAAKRGHLEIVEVLLKYGADVNADD");
			$s->setConsensus("69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;");
			$manager->persist($s);
	
			//-357-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_E3_19"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(48.3);
			$s->setBias(0);
			$s->setCEValue(5.1e-16);
			$s->setIEValue(7.6e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(102);
			$s->setAliTo(133);
			$s->setEnvFrom(101);
			$s->setEnvTo(133);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GSTPLHLAADTGHLEIVEVLLKYGADVNAQDK");
			$s->setConsensus("102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;");
			$manager->persist($s);
	
			//-358-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_E3_5"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(17.1);
			$s->setBias(0.1);
			$s->setCEValue(4.2e-06);
			$s->setIEValue(6.2e-06);
			$s->setHmmFrom(7);
			$s->setHmmTo(33);
			$s->setAliFrom(9);
			$s->setAliTo(35);
			$s->setEnvFrom(8);
			$s->setEnvTo(35);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("LEAARAGQDDEVRILMANGADVNATDN");
			$s->setConsensus("9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;");
			$manager->persist($s);
	
			//-359-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_E3_5"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(51.4);
			$s->setBias(0.1);
			$s->setCEValue(5.4e-17);
			$s->setIEValue(8.2e-17);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(36);
			$s->setAliTo(67);
			$s->setEnvFrom(36);
			$s->setEnvTo(68);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("DGYTPLHLAASNGHLEIVEVLLKNGADVNASD");
			$s->setConsensus("36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;");
			$manager->persist($s);
	
			//-360-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_E3_5"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(48.4);
			$s->setBias(0.2);
			$s->setCEValue(4.9e-16);
			$s->setIEValue(7.4e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(70);
			$s->setAliTo(101);
			$s->setEnvFrom(69);
			$s->setEnvTo(101);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GITPLHLAAATGHLEIVEVLLKHGADVNAYDN");
			$s->setConsensus("70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;");
			$manager->persist($s);
	
			//-361-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_E3_5"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(56.5);
			$s->setBias(0.1);
			$s->setCEValue(1.3e-18);
			$s->setIEValue(1.9e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(102);
			$s->setAliTo(134);
			$s->setEnvFrom(102);
			$s->setEnvTo(134);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGHTPLHLAAKYGHLEIVEVLLKHGADVNAQDK");
			$s->setConsensus("102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;");
			$manager->persist($s);
	
			//-362-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_H10_2_G3"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(17.3);
			$s->setBias(0.1);
			$s->setCEValue(3.6e-06);
			$s->setIEValue(5.3e-06);
			$s->setHmmFrom(7);
			$s->setHmmTo(32);
			$s->setAliFrom(8);
			$s->setAliTo(33);
			$s->setEnvFrom(7);
			$s->setEnvTo(34);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("LEAARAGQDDEVRILMANGADVNAKD");
			$s->setConsensus("8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;");
			$manager->persist($s);
	
			//-363-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_H10_2_G3"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(42.7);
			$s->setBias(0.1);
			$s->setCEValue(3.2e-14);
			$s->setIEValue(4.8e-14);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(35);
			$s->setAliTo(66);
			$s->setEnvFrom(35);
			$s->setEnvTo(67);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("YGLTPLYLATAHGHLEIVEVLLKNGADVNAVD");
			$s->setConsensus("35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;");
			$manager->persist($s);
	
			//-364-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_H10_2_G3"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(51.5);
			$s->setBias(0);
			$s->setCEValue(5.1e-17);
			$s->setIEValue(7.6e-17);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(69);
			$s->setAliTo(100);
			$s->setEnvFrom(68);
			$s->setEnvTo(100);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GFTPLHLAAFIGHLEIAEVLLKHGADVNAQDK");
			$s->setConsensus("69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;");
			$manager->persist($s);
	
			//-365-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_H10_2_G3"));
			$s->setPfamRepeat(4);
			$s->setStatus("?");
			$s->setScore(1.6);
			$s->setBias(0);
			$s->setCEValue(0.33);
			$s->setIEValue(0.5);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(102);
			$s->setAliTo(121);
			$s->setEnvFrom(101);
			$s->setEnvTo(123);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIGNGNEDLAEIL");
			$s->setConsensus("102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;");
			$manager->persist($s);
	
			//-366-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI1C_Mut4"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(18.7);
			$s->setBias(0.1);
			$s->setCEValue(1.2e-06);
			$s->setIEValue(1.9e-06);
			$s->setHmmFrom(7);
			$s->setHmmTo(33);
			$s->setAliFrom(7);
			$s->setAliTo(33);
			$s->setEnvFrom(6);
			$s->setEnvTo(33);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("LEAARAGQDDEVRILMANGADVNAKDK");
			$s->setConsensus("7;8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;");
			$manager->persist($s);
	
			//-367-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI1C_Mut4"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(44.4);
			$s->setBias(0.1);
			$s->setCEValue(9.2e-15);
			$s->setIEValue(1.4e-14);
			$s->setHmmFrom(1);
			$s->setHmmTo(28);
			$s->setAliFrom(34);
			$s->setAliTo(61);
			$s->setEnvFrom(34);
			$s->setEnvTo(67);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdl");
			$s->setAliRep("DGYTPLHLAAREGHLEIVEVLLKAGADV");
			$s->setConsensus("34;35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;");
			$manager->persist($s);
	
			//-368-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI1C_Mut4"));
			$s->setPfamRepeat(3);
			$s->setStatus("?");
			$s->setScore(2.7);
			$s->setBias(0);
			$s->setCEValue(0.15);
			$s->setIEValue(0.22);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(69);
			$s->setAliTo(88);
			$s->setEnvFrom(68);
			$s->setEnvTo(91);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;");
			$manager->persist($s);
	
			//-369-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(17.5);
			$s->setBias(0.1);
			$s->setCEValue(3e-06);
			$s->setIEValue(4.6e-06);
			$s->setHmmFrom(7);
			$s->setHmmTo(33);
			$s->setAliFrom(7);
			$s->setAliTo(33);
			$s->setEnvFrom(6);
			$s->setEnvTo(33);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("LEAARAGQDDEVRILMANGADVNAKDK");
			$s->setConsensus("7;8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;");
			$manager->persist($s);
	
			//-370-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(52.8);
			$s->setBias(0);
			$s->setCEValue(1.9e-17);
			$s->setIEValue(2.9e-17);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(34);
			$s->setAliTo(66);
			$s->setEnvFrom(34);
			$s->setEnvTo(66);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGYTPLHLAAREGHLEIVEVLLKAGADVNAKDK");
			$s->setConsensus("34;35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;");
			$manager->persist($s);
	
			//-371-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(52.8);
			$s->setBias(0);
			$s->setCEValue(1.9e-17);
			$s->setIEValue(2.9e-17);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(67);
			$s->setAliTo(99);
			$s->setEnvFrom(67);
			$s->setEnvTo(99);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGYTPLHLAAREGHLEIVEVLLKAGADVNAKDK");
			$s->setConsensus("67;68;69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;");
			$manager->persist($s);
	
			//-372-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(54.1);
			$s->setBias(0);
			$s->setCEValue(7.4e-18);
			$s->setIEValue(1.1e-17);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(100);
			$s->setAliTo(132);
			$s->setEnvFrom(100);
			$s->setEnvTo(132);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGYTPLHLAAREGHLEIVEVLLKAGADVNAQDK");
			$s->setConsensus("100;101;102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;");
			$manager->persist($s);
	
			//-373-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(1);
			$s->setBias(0);
			$s->setCEValue(0.52);
			$s->setIEValue(0.79);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(134);
			$s->setAliTo(153);
			$s->setEnvFrom(133);
			$s->setEnvTo(153);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("134;135;136;137;138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;");
			$manager->persist($s);
	
			//-374-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C_Mut5"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(17.4);
			$s->setBias(0.1);
			$s->setCEValue(3.1e-06);
			$s->setIEValue(4.7e-06);
			$s->setHmmFrom(7);
			$s->setHmmTo(33);
			$s->setAliFrom(7);
			$s->setAliTo(33);
			$s->setEnvFrom(6);
			$s->setEnvTo(33);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("LEAARAGQDDEVRILMANGADVNAKDK");
			$s->setConsensus("7;8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;");
			$manager->persist($s);
	
			//-375-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C_Mut5"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(52.8);
			$s->setBias(0);
			$s->setCEValue(2e-17);
			$s->setIEValue(2.9e-17);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(34);
			$s->setAliTo(66);
			$s->setEnvFrom(34);
			$s->setEnvTo(66);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGYTPLHLAAREGHLEIVEVLLKAGADVNAKDK");
			$s->setConsensus("34;35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;");
			$manager->persist($s);
	
			//-376-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C_Mut5"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(52.8);
			$s->setBias(0);
			$s->setCEValue(2e-17);
			$s->setIEValue(2.9e-17);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(67);
			$s->setAliTo(99);
			$s->setEnvFrom(67);
			$s->setEnvTo(99);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGYTPLHLAAREGHLEIVEVLLKAGADVNAKDK");
			$s->setConsensus("67;68;69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;");
			$manager->persist($s);
	
			//-377-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C_Mut5"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(54.1);
			$s->setBias(0);
			$s->setCEValue(7.6e-18);
			$s->setIEValue(1.1e-17);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(100);
			$s->setAliTo(132);
			$s->setEnvFrom(100);
			$s->setEnvTo(132);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGYTPLHLAAREGHLEIVEVLLKAGADVNAQDK");
			$s->setConsensus("100;101;102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;");
			$manager->persist($s);
	
			//-378-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C_Mut5"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(10.3);
			$s->setBias(0);
			$s->setCEValue(0.00059);
			$s->setIEValue(0.00088);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(134);
			$s->setAliTo(153);
			$s->setEnvFrom(133);
			$s->setEnvTo(156);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTPFDLAIDNGNEDIAEVL");
			$s->setConsensus("134;135;136;137;138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;");
			$manager->persist($s);
	
			//-379-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C_Mut6"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(17.4);
			$s->setBias(0.1);
			$s->setCEValue(3.1e-06);
			$s->setIEValue(4.7e-06);
			$s->setHmmFrom(7);
			$s->setHmmTo(33);
			$s->setAliFrom(7);
			$s->setAliTo(33);
			$s->setEnvFrom(6);
			$s->setEnvTo(33);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("LEAARAGQDDEVRILMANGADVNAKDK");
			$s->setConsensus("7;8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;");
			$manager->persist($s);
	
			//-380-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C_Mut6"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(52.8);
			$s->setBias(0);
			$s->setCEValue(2e-17);
			$s->setIEValue(2.9e-17);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(34);
			$s->setAliTo(66);
			$s->setEnvFrom(34);
			$s->setEnvTo(66);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGYTPLHLAAREGHLEIVEVLLKAGADVNAKDK");
			$s->setConsensus("34;35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;");
			$manager->persist($s);
	
			//-381-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C_Mut6"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(52.8);
			$s->setBias(0);
			$s->setCEValue(2e-17);
			$s->setIEValue(2.9e-17);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(67);
			$s->setAliTo(99);
			$s->setEnvFrom(67);
			$s->setEnvTo(99);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGYTPLHLAAREGHLEIVEVLLKAGADVNAKDK");
			$s->setConsensus("67;68;69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;");
			$manager->persist($s);
	
			//-382-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C_Mut6"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(54.1);
			$s->setBias(0);
			$s->setCEValue(7.6e-18);
			$s->setIEValue(1.1e-17);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(100);
			$s->setAliTo(132);
			$s->setEnvFrom(100);
			$s->setEnvTo(132);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGYTPLHLAAREGHLEIVEVLLKAGADVNAQDK");
			$s->setConsensus("100;101;102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;");
			$manager->persist($s);
	
			//-383-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_NI3C_Mut6"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(11.3);
			$s->setBias(0);
			$s->setCEValue(0.00028);
			$s->setIEValue(0.00042);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(134);
			$s->setAliTo(153);
			$s->setEnvFrom(133);
			$s->setEnvTo(156);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTPFDLAIREGHEDIAEVL");
			$s->setConsensus("134;135;136;137;138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;");
			$manager->persist($s);
	
			//-384-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_OFF7"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(16.3);
			$s->setBias(0.3);
			$s->setCEValue(7.5e-06);
			$s->setIEValue(1.1e-05);
			$s->setHmmFrom(7);
			$s->setHmmTo(33);
			$s->setAliFrom(8);
			$s->setAliTo(34);
			$s->setEnvFrom(7);
			$s->setEnvTo(34);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("LEAARAGQDDEVRILMANGADVNAADN");
			$s->setConsensus("8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;");
			$manager->persist($s);
	
			//-385-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_OFF7"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(46.4);
			$s->setBias(0.1);
			$s->setCEValue(2.1e-15);
			$s->setIEValue(3.2e-15);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(36);
			$s->setAliTo(66);
			$s->setEnvFrom(35);
			$s->setEnvTo(67);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GTTPLHLAAYSGHLEIVEVLLKHGADVDASD");
			$s->setConsensus("36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;");
			$manager->persist($s);
	
			//-386-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_OFF7"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(48.8);
			$s->setBias(0);
			$s->setCEValue(3.8e-16);
			$s->setIEValue(5.6e-16);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(69);
			$s->setAliTo(99);
			$s->setEnvFrom(68);
			$s->setEnvTo(100);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GYTPLHLAAYWGHLEIVEVLLKNGADVNAMD");
			$s->setConsensus("69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;");
			$manager->persist($s);
	
			//-387-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_OFF7"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(54.4);
			$s->setBias(0);
			$s->setCEValue(6.3e-18);
			$s->setIEValue(9.4e-18);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(101);
			$s->setAliTo(133);
			$s->setEnvFrom(101);
			$s->setEnvTo(133);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGMTPLHLAAKWGYLEIVEVLLKHGADVNAQDK");
			$s->setConsensus("101;102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;");
			$manager->persist($s);
	
			//-388-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_OFF7"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(1.3);
			$s->setBias(0);
			$s->setCEValue(0.41);
			$s->setIEValue(0.61);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(135);
			$s->setAliTo(154);
			$s->setEnvFrom(134);
			$s->setEnvTo(156);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GKTAFDISIDNGNEDLAEIL");
			$s->setConsensus("135;136;137;138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;");
			$manager->persist($s);
	
			//-389-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("E9ADW8"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(14.9);
			$s->setBias(0);
			$s->setCEValue(1.1e-06);
			$s->setIEValue(1.1e-06);
			$s->setHmmFrom(7);
			$s->setHmmTo(32);
			$s->setAliFrom(21);
			$s->setAliTo(46);
			$s->setEnvFrom(20);
			$s->setEnvTo(47);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("HVAARKGQTDEVRRLIETGVSPTIQN");
			$s->setConsensus("21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;45;46;");
			$manager->persist($s);
	
			//-390-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("E9ADW8"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(19);
			$s->setBias(0);
			$s->setCEValue(5.7e-08);
			$s->setIEValue(5.7e-08);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(49);
			$s->setAliTo(68);
			$s->setEnvFrom(48);
			$s->setEnvTo(73);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GCTALHLACKFGCVDTAKYL");
			$s->setConsensus("49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;");
			$manager->persist($s);
	
			//-391-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("E9ADW8"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(9.6);
			$s->setBias(0);
			$s->setCEValue(5.2e-05);
			$s->setIEValue(5.2e-05);
			$s->setHmmFrom(2);
			$s->setHmmTo(26);
			$s->setAliFrom(80);
			$s->setAliTo(103);
			$s->setEnvFrom(79);
			$s->setEnvTo(104);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGA");
			$s->setAliRep("GQKPIHLAVMANKTDLVVALVE-GA");
			$s->setConsensus("80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;-;103;104;");
			$s->setDeletions(";q;23");
			$manager->persist($s);
	
			//-392-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("E9ADW8"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(27.1);
			$s->setBias(0);
			$s->setCEValue(1.5e-10);
			$s->setIEValue(1.5e-10);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(134);
			$s->setAliTo(167);
			$s->setEnvFrom(133);
			$s->setEnvTo(167);
			$s->setAliHmm("GfTPLHlAalrg..nlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GQTALHWCVGLGpeYLEMIKILVQLGASPTAKDK");
			$s->setConsensus("134;135;136;137;138;139;140;141;142;143;144;145;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;166;167;");
			$s->setInsertions(";p;13;e;13");
			$manager->persist($s);
	
			//-393-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("E9ADW8"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(2.6);
			$s->setBias(0);
			$s->setCEValue(0.0088);
			$s->setIEValue(0.0088);
			$s->setHmmFrom(3);
			$s->setHmmTo(18);
			$s->setAliFrom(170);
			$s->setAliTo(185);
			$s->setEnvFrom(169);
			$s->setEnvTo(191);
			$s->setAliHmm("fTPLHlAalrgnlevv");
			$s->setAliRep("ETPLMRAMEFRNREAL");
			$s->setConsensus("170;171;172;173;174;175;176;177;178;179;180;181;182;183;184;185;");
			$manager->persist($s);
	
			//-394-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("E9ADW8"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(8.9);
			$s->setBias(0);
			$s->setCEValue(8.7e-05);
			$s->setIEValue(8.7e-05);
			$s->setHmmFrom(6);
			$s->setHmmTo(33);
			$s->setAliFrom(211);
			$s->setAliTo(238);
			$s->setEnvFrom(206);
			$s->setEnvTo(238);
			$s->setAliHmm("LHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("LHWAILINWEDVAMRFVEMGIDVNMEDN");
			$s->setConsensus("211;212;213;214;215;216;217;218;219;220;221;222;223;224;225;226;227;228;229;230;231;232;233;234;235;236;237;238;");
			$manager->persist($s);
	
			//-395-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("E9ADW8"));
			$s->setPfamRepeat(7);
			$s->setStatus("?");
			$s->setScore(-3);
			$s->setBias(0);
			$s->setCEValue(0.54);
			$s->setIEValue(0.54);
			$s->setHmmFrom(5);
			$s->setHmmTo(23);
			$s->setAliFrom(243);
			$s->setAliTo(261);
			$s->setEnvFrom(243);
			$s->setEnvTo(263);
			$s->setAliHmm("PLHlAalrgnlevvklLls");
			$s->setAliRep("PLYLSVRAAMVLLTKELLQ");
			$s->setConsensus("243;244;245;246;247;248;249;250;251;252;253;254;255;256;257;258;259;260;261;");
			$manager->persist($s);
	
			//-396-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("F1NYW1"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(28);
			$s->setBias(0);
			$s->setCEValue(7.8e-11);
			$s->setIEValue(7.8e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(31);
			$s->setAliFrom(224);
			$s->setAliTo(253);
			$s->setEnvFrom(223);
			$s->setEnvTo(255);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaq");
			$s->setAliRep("GQTALHIAIERRCKHYVELLVEKGADVHAQ");
			$s->setConsensus("224;225;226;227;228;229;230;231;232;233;234;235;236;237;238;239;240;241;242;243;244;245;246;247;248;249;250;251;252;253;");
			$manager->persist($s);
	
			//-397-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("F1NYW1"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(10.3);
			$s->setBias(0);
			$s->setCEValue(3.2e-05);
			$s->setIEValue(3.2e-05);
			$s->setHmmFrom(2);
			$s->setHmmTo(25);
			$s->setAliFrom(271);
			$s->setAliTo(294);
			$s->setEnvFrom(270);
			$s->setEnvTo(305);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqG");
			$s->setAliRep("GELPLSLAACTNQPHIVHYLTENG");
			$s->setConsensus("271;272;273;274;275;276;277;278;279;280;281;282;283;284;285;286;287;288;289;290;291;292;293;294;");
			$manager->persist($s);
	
			//-398-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("F1NYW1"));
			$s->setPfamRepeat(3);
			$s->setStatus("?");
			$s->setScore(-2.2);
			$s->setBias(0);
			$s->setCEValue(0.3);
			$s->setIEValue(0.3);
			$s->setHmmFrom(2);
			$s->setHmmTo(7);
			$s->setAliFrom(307);
			$s->setAliTo(312);
			$s->setEnvFrom(306);
			$s->setEnvTo(316);
			$s->setAliHmm("GfTPLH");
			$s->setAliRep("GNTVLH");
			$s->setConsensus("307;308;309;310;311;312;");
			$manager->persist($s);
	
			//-399-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("F1NYW1"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(9.3);
			$s->setBias(0);
			$s->setCEValue(6.7e-05);
			$s->setIEValue(6.7e-05);
			$s->setHmmFrom(1);
			$s->setHmmTo(22);
			$s->setAliFrom(355);
			$s->setAliTo(376);
			$s->setEnvFrom(355);
			$s->setEnvTo(386);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLl");
			$s->setAliRep("DGLSPLMMAAKTGKIGIFQHII");
			$s->setConsensus("355;356;357;358;359;360;361;362;363;364;365;366;367;368;369;370;371;372;373;374;375;376;");
			$manager->persist($s);
	
			//-400-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O14593"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(27.5);
			$s->setBias(0);
			$s->setCEValue(1.2e-10);
			$s->setIEValue(1.2e-10);
			$s->setHmmFrom(2);
			$s->setHmmTo(30);
			$s->setAliFrom(124);
			$s->setAliTo(152);
			$s->setEnvFrom(123);
			$s->setEnvTo(155);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlna");
			$s->setAliRep("GFTPLIWASAFGEIETVRFLLEWGADPHI");
			$s->setConsensus("124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;");
			$manager->persist($s);
	
			//-401-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O14593"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(16.2);
			$s->setBias(0);
			$s->setCEValue(4.2e-07);
			$s->setIEValue(4.2e-07);
			$s->setHmmFrom(4);
			$s->setHmmTo(32);
			$s->setAliFrom(159);
			$s->setAliTo(187);
			$s->setEnvFrom(157);
			$s->setEnvTo(188);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("SALSLASTGGYTDIVGLLLERDVDINIYD");
			$s->setConsensus("159;160;161;162;163;164;165;166;167;168;169;170;171;172;173;174;175;176;177;178;179;180;181;182;183;184;185;186;187;");
			$manager->persist($s);
	
			//-402-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O14593"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(26.9);
			$s->setBias(0);
			$s->setCEValue(1.7e-10);
			$s->setIEValue(1.7e-10);
			$s->setHmmFrom(1);
			$s->setHmmTo(29);
			$s->setAliFrom(189);
			$s->setAliTo(217);
			$s->setEnvFrom(189);
			$s->setEnvTo(220);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdln");
			$s->setAliRep("NGGTPLLYAVRGNHVKCVEALLARGADLT");
			$s->setConsensus("189;190;191;192;193;194;195;196;197;198;199;200;201;202;203;204;205;206;207;208;209;210;211;212;213;214;215;216;217;");
			$manager->persist($s);
	
			//-403-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O14593"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(3.3);
			$s->setBias(0);
			$s->setCEValue(0.0052);
			$s->setIEValue(0.0052);
			$s->setHmmFrom(2);
			$s->setHmmTo(15);
			$s->setAliFrom(223);
			$s->setAliTo(236);
			$s->setEnvFrom(222);
			$s->setEnvTo(250);
			$s->setAliHmm("GfTPLHlAalrgnl");
			$s->setAliRep("GYTPMDLAVALGYR");
			$s->setConsensus("223;224;225;226;227;228;229;230;231;232;233;234;235;236;");
			$manager->persist($s);
	
			//-404-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O22265"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(2.4);
			$s->setBias(0);
			$s->setCEValue(0.01);
			$s->setIEValue(0.01);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(129);
			$s->setAliTo(157);
			$s->setEnvFrom(128);
			$s->setEnvTo(158);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("ETPWWTAARKADEQALSQLLE-DRDVDAVD");
			$s->setConsensus("129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;145;146;147;148;149;-;151;152;153;154;155;156;157;158;");
			$s->setDeletions(";q;22");
			$manager->persist($s);
	
			//-405-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O22265"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(18.2);
			$s->setBias(0.1);
			$s->setCEValue(9.8e-08);
			$s->setIEValue(9.8e-08);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(159);
			$s->setAliTo(190);
			$s->setEnvFrom(159);
			$s->setEnvTo(191);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NGRTALLFVAGLGSDKCVRLLAEAGADLDHRD");
			$s->setConsensus("159;160;161;162;163;164;165;166;167;168;169;170;171;172;173;174;175;176;177;178;179;180;181;182;183;184;185;186;187;188;189;190;");
			$manager->persist($s);
	
			//-406-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O22265"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(24.6);
			$s->setBias(0);
			$s->setCEValue(9.3e-10);
			$s->setIEValue(9.3e-10);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(194);
			$s->setAliTo(224);
			$s->setEnvFrom(193);
			$s->setEnvTo(225);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLTALHMAAGYVRPEVVEALVELGADIEVED");
			$s->setConsensus("194;195;196;197;198;199;200;201;202;203;204;205;206;207;208;209;210;211;212;213;214;215;216;217;218;219;220;221;222;223;224;");
			$manager->persist($s);
	
			//-407-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O35433"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(-1.2);
			$s->setBias(0);
			$s->setCEValue(0.14);
			$s->setIEValue(0.14);
			$s->setHmmFrom(7);
			$s->setHmmTo(23);
			$s->setAliFrom(162);
			$s->setAliTo(178);
			$s->setEnvFrom(154);
			$s->setEnvTo(183);
			$s->setAliHmm("HlAalrgnlevvklLls");
			$s->setAliRep("MLNLHNGQNDTIALLLD");
			$s->setConsensus("162;163;164;165;166;167;168;169;170;171;172;173;174;175;176;177;178;");
			$manager->persist($s);
	
			//-408-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O35433"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(27.3);
			$s->setBias(0.1);
			$s->setCEValue(1.3e-10);
			$s->setIEValue(1.3e-10);
			$s->setHmmFrom(2);
			$s->setHmmTo(31);
			$s->setAliFrom(201);
			$s->setAliTo(230);
			$s->setEnvFrom(200);
			$s->setEnvTo(232);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaq");
			$s->setAliRep("GQTALHIAIERRNMTLVTLLVENGADVQAA");
			$s->setConsensus("201;202;203;204;205;206;207;208;209;210;211;212;213;214;215;216;217;218;219;220;221;222;223;224;225;226;227;228;229;230;");
			$manager->persist($s);
	
			//-409-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O35433"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(20.8);
			$s->setBias(0);
			$s->setCEValue(1.6e-08);
			$s->setIEValue(1.6e-08);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(248);
			$s->setAliTo(281);
			$s->setEnvFrom(247);
			$s->setEnvTo(282);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls...qGAdlnaqd");
			$s->setAliRep("GELPLSLAACTNQLAIVKFLLQnswQPADISARD");
			$s->setConsensus("248;249;250;251;252;253;254;255;256;257;258;259;260;261;262;263;264;265;266;267;268;269;273;274;275;276;277;278;279;280;281;");
			$s->setInsertions(";n;23;s;23;w;23");
			$manager->persist($s);
	
			//-410-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O35433"));
			$s->setPfamRepeat(4);
			$s->setStatus("?");
			$s->setScore(-2.8);
			$s->setBias(0);
			$s->setCEValue(0.47);
			$s->setIEValue(0.47);
			$s->setHmmFrom(2);
			$s->setHmmTo(8);
			$s->setAliFrom(284);
			$s->setAliTo(290);
			$s->setEnvFrom(284);
			$s->setEnvTo(293);
			$s->setAliHmm("GfTPLHl");
			$s->setAliRep("GNTVLHA");
			$s->setConsensus("284;285;286;287;288;289;290;");
			$manager->persist($s);
	
			//-411-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O35433"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(9.4);
			$s->setBias(0);
			$s->setCEValue(6.2e-05);
			$s->setIEValue(6.2e-05);
			$s->setHmmFrom(2);
			$s->setHmmTo(23);
			$s->setAliFrom(333);
			$s->setAliTo(354);
			$s->setEnvFrom(332);
			$s->setEnvTo(358);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls");
			$s->setAliRep("GLTPLALAASSGKIGVLAYILQ");
			$s->setConsensus("333;334;335;336;337;338;339;340;341;342;343;344;345;346;347;348;349;350;351;352;353;354;");
			$manager->persist($s);
	
			//-412-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O75832"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(35.8);
			$s->setBias(0);
			$s->setCEValue(2.7e-13);
			$s->setIEValue(2.7e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(33);
			$s->setAliFrom(41);
			$s->setAliTo(71);
			$s->setEnvFrom(39);
			$s->setEnvTo(71);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("RTALHWACSAGHTEIVEFLLQLGVPVNDKDD");
			$s->setConsensus("41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;");
			$manager->persist($s);
	
			//-413-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O75832"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(36.5);
			$s->setBias(0);
			$s->setCEValue(1.6e-13);
			$s->setIEValue(1.6e-13);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(73);
			$s->setAliTo(103);
			$s->setEnvFrom(72);
			$s->setEnvTo(104);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWSPLHIAASAGRDEIVKALLGKGAQVNAVN");
			$s->setConsensus("73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;");
			$manager->persist($s);
	
			//-414-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O75832"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(39.6);
			$s->setBias(0.1);
			$s->setCEValue(1.7e-14);
			$s->setIEValue(1.7e-14);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(105);
			$s->setAliTo(136);
			$s->setEnvFrom(105);
			$s->setEnvTo(137);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NGCTPLHYAASKNRHEIAVMLLEGGANPDAKD");
			$s->setConsensus("105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;");
			$manager->persist($s);
	
			//-415-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O75832"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(24.9);
			$s->setBias(0.1);
			$s->setCEValue(7.7e-10);
			$s->setIEValue(7.7e-10);
			$s->setHmmFrom(4);
			$s->setHmmTo(32);
			$s->setAliFrom(141);
			$s->setAliTo(169);
			$s->setEnvFrom(138);
			$s->setEnvTo(170);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("TAMHRAAAKGNLKMIHILLYYKASTNIQD");
			$s->setConsensus("141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;166;167;168;169;");
			$manager->persist($s);
	
			//-416-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O75832"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(29.9);
			$s->setBias(0);
			$s->setCEValue(1.9e-11);
			$s->setIEValue(1.9e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(172);
			$s->setAliTo(202);
			$s->setEnvFrom(171);
			$s->setEnvTo(203);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GNTPLHLACDEERVEEAKLLVSQGASIYIEN");
			$s->setConsensus("172;173;174;175;176;177;178;179;180;181;182;183;184;185;186;187;188;189;190;191;192;193;194;195;196;197;198;199;200;201;202;");
			$manager->persist($s);
	
			//-417-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O75832"));
			$s->setPfamRepeat(6);
			$s->setStatus("?");
			$s->setScore(-3.6);
			$s->setBias(0);
			$s->setCEValue(0.8);
			$s->setIEValue(0.8);
			$s->setHmmFrom(4);
			$s->setHmmTo(9);
			$s->setAliFrom(207);
			$s->setAliTo(212);
			$s->setEnvFrom(206);
			$s->setEnvTo(212);
			$s->setAliHmm("TPLHlA");
			$s->setAliRep("TPLQVA");
			$s->setConsensus("207;208;209;210;211;212;");
			$manager->persist($s);
	
			//-418-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(27.9);
			$s->setBias(0);
			$s->setCEValue(8.3e-11);
			$s->setIEValue(8.3e-11);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(1901);
			$s->setAliTo(1947);
			$s->setEnvFrom(1901);
			$s->setEnvTo(1948);
			$s->setAliHmm("dGfTPLHlAalrg...............nlevvklLlsqGAdlnaqd");
			$s->setAliRep("CGLTPLMIAAVRGggldtgediennedsTAQVISDLLAQGAELNATM");
			$s->setConsensus("1901;1902;1903;1904;1905;1906;1907;1908;1909;1910;1911;1912;1913;1929;1930;1931;1932;1933;1934;1935;1936;1937;1938;1939;1940;1941;1942;1943;1944;1945;1946;1947;");
			$s->setInsertions(";g;14;g;14;l;14;d;14;t;14;g;14;e;14;d;14;i;14;e;14;n;14;n;14;e;14;d;14;s;14");
			$manager->persist($s);
	
			//-419-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(24.5);
			$s->setBias(0.1);
			$s->setCEValue(1e-09);
			$s->setIEValue(1e-09);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(1951);
			$s->setAliTo(1982);
			$s->setEnvFrom(1950);
			$s->setEnvTo(1982);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GETSLHLAARFARADAAKRLLDAGADANCQDN");
			$s->setConsensus("1951;1952;1953;1954;1955;1956;1957;1958;1959;1960;1961;1962;1963;1964;1965;1966;1967;1968;1969;1970;1971;1972;1973;1974;1975;1976;1977;1978;1979;1980;1981;1982;");
			$manager->persist($s);
	
			//-420-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(14.1);
			$s->setBias(0.1);
			$s->setCEValue(2e-06);
			$s->setIEValue(2e-06);
			$s->setHmmFrom(2);
			$s->setHmmTo(31);
			$s->setAliFrom(1984);
			$s->setAliTo(2014);
			$s->setEnvFrom(1983);
			$s->setEnvTo(2016);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls.qGAdlnaq");
			$s->setAliRep("GRTPLHAAVAADAMGVFQILLRnRATNLNAR");
			$s->setConsensus("1984;1985;1986;1987;1988;1989;1990;1991;1992;1993;1994;1995;1996;1997;1998;1999;2000;2001;2002;2003;2004;2005;2007;2008;2009;2010;2011;2012;2013;2014;");
			$s->setInsertions(";n;23");
			$manager->persist($s);
	
			//-421-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(18.8);
			$s->setBias(0.1);
			$s->setCEValue(6.3e-08);
			$s->setIEValue(6.3e-08);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(2017);
			$s->setAliTo(2049);
			$s->setEnvFrom(2017);
			$s->setEnvTo(2049);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGTTPLILAARLAIEGMVEDLITADADINAADN");
			$s->setConsensus("2017;2018;2019;2020;2021;2022;2023;2024;2025;2026;2027;2028;2029;2030;2031;2032;2033;2034;2035;2036;2037;2038;2039;2040;2041;2042;2043;2044;2045;2046;2047;2048;2049;");
			$manager->persist($s);
	
			//-422-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(26.4);
			$s->setBias(0.4);
			$s->setCEValue(2.6e-10);
			$s->setIEValue(2.6e-10);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(2051);
			$s->setAliTo(2082);
			$s->setEnvFrom(2050);
			$s->setEnvTo(2082);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GKTALHWAAAVNNTEAVNILLMHHANRDAQDD");
			$s->setConsensus("2051;2052;2053;2054;2055;2056;2057;2058;2059;2060;2061;2062;2063;2064;2065;2066;2067;2068;2069;2070;2071;2072;2073;2074;2075;2076;2077;2078;2079;2080;2081;2082;");
			$manager->persist($s);
	
			//-423-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(16.2);
			$s->setBias(0);
			$s->setCEValue(4.4e-07);
			$s->setIEValue(4.4e-07);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(2085);
			$s->setAliTo(2114);
			$s->setEnvFrom(2083);
			$s->setEnvTo(2115);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("ETPLFLAAREGSYEACKALLDNFANREITD");
			$s->setConsensus("2085;2086;2087;2088;2089;2090;2091;2092;2093;2094;2095;2096;2097;2098;2099;2100;2101;2102;2103;2104;2105;2106;2107;2108;2109;2110;2111;2112;2113;2114;");
			$manager->persist($s);
	
			//-424-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setPfamRepeat(7);
			$s->setStatus("?");
			$s->setScore(0.9);
			$s->setBias(0);
			$s->setCEValue(0.031);
			$s->setIEValue(0.031);
			$s->setHmmFrom(8);
			$s->setHmmTo(21);
			$s->setAliFrom(2123);
			$s->setAliTo(2136);
			$s->setEnvFrom(2118);
			$s->setEnvTo(2139);
			$s->setAliHmm("lAalrgnlevvklL");
			$s->setAliRep("VASERLHHDIVRLL");
			$s->setConsensus("2123;2124;2125;2126;2127;2128;2129;2130;2131;2132;2133;2134;2135;2136;");
			$manager->persist($s);
	
			//-425-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P09959"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(18.2);
			$s->setBias(0.1);
			$s->setCEValue(9.9e-08);
			$s->setIEValue(9.9e-08);
			$s->setHmmFrom(1);
			$s->setHmmTo(28);
			$s->setAliFrom(317);
			$s->setAliTo(344);
			$s->setEnvFrom(317);
			$s->setEnvTo(349);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdl");
			$s->setAliRep("HGNTPLHWLTSIANLELVKHLVKHGSNR");
			$s->setConsensus("317;318;319;320;321;322;323;324;325;326;327;328;329;330;331;332;333;334;335;336;337;338;339;340;341;342;343;344;");
			$manager->persist($s);
	
			//-426-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P09959"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(27);
			$s->setBias(0.1);
			$s->setCEValue(1.6e-10);
			$s->setIEValue(1.6e-10);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(469);
			$s->setAliTo(500);
			$s->setEnvFrom(469);
			$s->setEnvTo(501);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NGDTCLNIAARLGNISIVDALLDYGADPFIAN");
			$s->setConsensus("469;470;471;472;473;474;475;476;477;478;479;480;481;482;483;484;485;486;487;488;489;490;491;492;493;494;495;496;497;498;499;500;");
			$manager->persist($s);
	
			//-427-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P14585"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(3.7);
			$s->setBias(0);
			$s->setCEValue(0.0039);
			$s->setIEValue(0.0039);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(1054);
			$s->setAliTo(1091);
			$s->setEnvFrom(1052);
			$s->setEnvTo(1092);
			$s->setAliHmm("fTPLHlAalrg........nlevvklLlsqGAdlnaqd");
			$s->setAliRep("RTVLHWIASNSsaeksedlIVHEAKECIAAGADVNAMD");
			$s->setConsensus("1054;1055;1056;1057;1058;1059;1060;1061;1062;1063;1064;1073;1074;1075;1076;1077;1078;1079;1080;1081;1082;1083;1084;1085;1086;1087;1088;1089;1090;1091;");
			$s->setInsertions(";s;12;a;12;e;12;k;12;s;12;e;12;d;12;l;12");
			$manager->persist($s);
	
			//-428-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P14585"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(22.5);
			$s->setBias(0);
			$s->setCEValue(4.3e-09);
			$s->setIEValue(4.3e-09);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(1093);
			$s->setAliTo(1124);
			$s->setEnvFrom(1093);
			$s->setEnvTo(1125);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("DENTPLMLAVLARRRRLVAYLMKAGADPTIYN");
			$s->setConsensus("1093;1094;1095;1096;1097;1098;1099;1100;1101;1102;1103;1104;1105;1106;1107;1108;1109;1110;1111;1112;1113;1114;1115;1116;1117;1118;1119;1120;1121;1122;1123;1124;");
			$manager->persist($s);
	
			//-429-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P14585"));
			$s->setPfamRepeat(3);
			$s->setStatus("?");
			$s->setScore(-0.7);
			$s->setBias(0);
			$s->setCEValue(0.097);
			$s->setIEValue(0.097);
			$s->setHmmFrom(3);
			$s->setHmmTo(17);
			$s->setAliFrom(1128);
			$s->setAliTo(1142);
			$s->setEnvFrom(1127);
			$s->setEnvTo(1150);
			$s->setAliHmm("fTPLHlAalrgnlev");
			$s->setAliRep("RSALHQAAANRDFGM");
			$s->setConsensus("1128;1129;1130;1131;1132;1133;1134;1135;1136;1137;1138;1139;1140;1141;1142;");
			$manager->persist($s);
	
			//-430-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P14585"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(11.4);
			$s->setBias(0);
			$s->setCEValue(1.4e-05);
			$s->setIEValue(1.4e-05);
			$s->setHmmFrom(1);
			$s->setHmmTo(29);
			$s->setAliFrom(1162);
			$s->setAliTo(1193);
			$s->setEnvFrom(1162);
			$s->setEnvTo(1195);
			$s->setAliHmm("dGfTPLHlAalrg...nlevvklLlsqGAdln");
			$s->setAliRep("NGMTALMIVAHNEgrdQVASAKLLVEKGAKVD");
			$s->setConsensus("1162;1163;1164;1165;1166;1167;1168;1169;1170;1171;1172;1173;1174;1178;1179;1180;1181;1182;1183;1184;1185;1186;1187;1188;1189;1190;1191;1192;1193;");
			$s->setInsertions(";g;14;r;14;d;14");
			$manager->persist($s);
	
			//-431-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P14585"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(22.9);
			$s->setBias(0);
			$s->setCEValue(3.2e-09);
			$s->setIEValue(3.2e-09);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(1207);
			$s->setAliTo(1238);
			$s->setEnvFrom(1206);
			$s->setEnvTo(1239);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls.qGAdlnaqd");
			$s->setAliRep("GRTALHYAAQVSNMPIVKYLVGeKGSNKDKQD");
			$s->setConsensus("1207;1208;1209;1210;1211;1212;1213;1214;1215;1216;1217;1218;1219;1220;1221;1222;1223;1224;1225;1226;1227;1228;1230;1231;1232;1233;1234;1235;1236;1237;1238;");
			$s->setInsertions(";e;23");
			$manager->persist($s);
	
			//-432-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P14585"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(34);
			$s->setBias(0);
			$s->setCEValue(9.6e-13);
			$s->setIEValue(9.6e-13);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(1240);
			$s->setAliTo(1271);
			$s->setEnvFrom(1240);
			$s->setEnvTo(1272);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("DGKTPIMLAAQEGRIEVVMYLIQQGASVEAVD");
			$s->setConsensus("1240;1241;1242;1243;1244;1245;1246;1247;1248;1249;1250;1251;1252;1253;1254;1255;1256;1257;1258;1259;1260;1261;1262;1263;1264;1265;1266;1267;1268;1269;1270;1271;");
			$manager->persist($s);
	
			//-433-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P14585"));
			$s->setPfamRepeat(7);
			$s->setStatus("?");
			$s->setScore(-2.1);
			$s->setBias(0);
			$s->setCEValue(0.26);
			$s->setIEValue(0.26);
			$s->setHmmFrom(4);
			$s->setHmmTo(19);
			$s->setAliFrom(1276);
			$s->setAliTo(1291);
			$s->setEnvFrom(1274);
			$s->setEnvTo(1293);
			$s->setAliHmm("TPLHlAalrgnlevvk");
			$s->setAliRep("TARQLAQANNHHNIVD");
			$s->setConsensus("1276;1277;1278;1279;1280;1281;1282;1283;1284;1285;1286;1287;1288;1289;1290;1291;");
			$manager->persist($s);
	
			//-434-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(9.4);
			$s->setBias(0.1);
			$s->setCEValue(6.4e-05);
			$s->setIEValue(6.4e-05);
			$s->setHmmFrom(4);
			$s->setHmmTo(23);
			$s->setAliFrom(47);
			$s->setAliTo(66);
			$s->setEnvFrom(44);
			$s->setEnvTo(69);
			$s->setAliHmm("TPLHlAalrgnlevvklLls");
			$s->setAliRep("NGLHLASKEGHVKMVVELLH");
			$s->setConsensus("47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;");
			$manager->persist($s);
	
			//-435-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(37.1);
			$s->setBias(0.1);
			$s->setCEValue(1.1e-13);
			$s->setIEValue(1.1e-13);
			$s->setHmmFrom(2);
			$s->setHmmTo(31);
			$s->setAliFrom(78);
			$s->setAliTo(107);
			$s->setEnvFrom(77);
			$s->setEnvTo(109);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaq");
			$s->setAliRep("GNTALHIAALAGQDEVVRELVNYGANVNAQ");
			$s->setConsensus("78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;");
			$manager->persist($s);
	
			//-436-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(35.4);
			$s->setBias(0);
			$s->setCEValue(3.6e-13);
			$s->setIEValue(3.6e-13);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(111);
			$s->setAliTo(141);
			$s->setEnvFrom(110);
			$s->setEnvTo(142);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GFTPLYMAAQENHLEVVKFLLENGANQNVAT");
			$s->setConsensus("111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;");
			$manager->persist($s);
	
			//-437-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(18.4);
			$s->setBias(0);
			$s->setCEValue(8.5e-08);
			$s->setIEValue(8.5e-08);
			$s->setHmmFrom(1);
			$s->setHmmTo(25);
			$s->setAliFrom(143);
			$s->setAliTo(167);
			$s->setEnvFrom(143);
			$s->setEnvTo(169);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqG");
			$s->setAliRep("DGFTPLAVALQQGHENVVAHLINYG");
			$s->setConsensus("143;144;145;146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;166;167;");
			$manager->persist($s);
	
			//-438-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(11.8);
			$s->setBias(0);
			$s->setCEValue(1e-05);
			$s->setIEValue(1e-05);
			$s->setHmmFrom(5);
			$s->setHmmTo(30);
			$s->setAliFrom(176);
			$s->setAliTo(201);
			$s->setEnvFrom(175);
			$s->setEnvTo(204);
			$s->setAliHmm("PLHlAalrgnlevvklLlsqGAdlna");
			$s->setAliRep("ALHIAARNDDTRTAAVLLQNDPNPDV");
			$s->setConsensus("176;177;178;179;180;181;182;183;184;185;186;187;188;189;190;191;192;193;194;195;196;197;198;199;200;201;");
			$manager->persist($s);
	
			//-439-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(35.8);
			$s->setBias(0.1);
			$s->setCEValue(2.6e-13);
			$s->setIEValue(2.6e-13);
			$s->setHmmFrom(2);
			$s->setHmmTo(29);
			$s->setAliFrom(206);
			$s->setAliTo(233);
			$s->setEnvFrom(205);
			$s->setEnvTo(235);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdln");
			$s->setAliRep("GFTPLHIAAHYENLNVAQLLLNRGASVN");
			$s->setConsensus("206;207;208;209;210;211;212;213;214;215;216;217;218;219;220;221;222;223;224;225;226;227;228;229;230;231;232;233;");
			$manager->persist($s);
	
			//-440-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(7);
			$s->setStatus("!");
			$s->setScore(33.2);
			$s->setBias(0);
			$s->setCEValue(1.8e-12);
			$s->setIEValue(1.8e-12);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(238);
			$s->setAliTo(269);
			$s->setEnvFrom(238);
			$s->setEnvTo(270);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NGITPLHIASRRGNVIMVRLLLDRGAQIETKT");
			$s->setConsensus("238;239;240;241;242;243;244;245;246;247;248;249;250;251;252;253;254;255;256;257;258;259;260;261;262;263;264;265;266;267;268;269;");
			$manager->persist($s);
	
			//-441-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(8);
			$s->setStatus("!");
			$s->setScore(31.5);
			$s->setBias(0);
			$s->setCEValue(6e-12);
			$s->setIEValue(6e-12);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(272);
			$s->setAliTo(303);
			$s->setEnvFrom(271);
			$s->setEnvTo(303);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("ELTPLHCAARNGHVRISEILLDHGAPIQAKTK");
			$s->setConsensus("272;273;274;275;276;277;278;279;280;281;282;283;284;285;286;287;288;289;290;291;292;293;294;295;296;297;298;299;300;301;302;303;");
			$manager->persist($s);
	
			//-442-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(9);
			$s->setStatus("!");
			$s->setScore(23.7);
			$s->setBias(0.1);
			$s->setCEValue(1.8e-09);
			$s->setIEValue(1.8e-09);
			$s->setHmmFrom(1);
			$s->setHmmTo(30);
			$s->setAliFrom(304);
			$s->setAliTo(333);
			$s->setEnvFrom(304);
			$s->setEnvTo(336);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlna");
			$s->setAliRep("NGLSPIHMAAQGDHLDCVRLLLQYDAEIDD");
			$s->setConsensus("304;305;306;307;308;309;310;311;312;313;314;315;316;317;318;319;320;321;322;323;324;325;326;327;328;329;330;331;332;333;");
			$manager->persist($s);
	
			//-443-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(10);
			$s->setStatus("!");
			$s->setScore(33.1);
			$s->setBias(0.2);
			$s->setCEValue(1.9e-12);
			$s->setIEValue(1.9e-12);
			$s->setHmmFrom(1);
			$s->setHmmTo(31);
			$s->setAliFrom(337);
			$s->setAliTo(367);
			$s->setEnvFrom(337);
			$s->setEnvTo(368);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaq");
			$s->setAliRep("DHLTPLHVAAHCGHHRVAKVLLDKGAKPNSR");
			$s->setConsensus("337;338;339;340;341;342;343;344;345;346;347;348;349;350;351;352;353;354;355;356;357;358;359;360;361;362;363;364;365;366;367;");
			$manager->persist($s);
	
			//-444-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(11);
			$s->setStatus("!");
			$s->setScore(39.1);
			$s->setBias(0);
			$s->setCEValue(2.3e-14);
			$s->setIEValue(2.3e-14);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(370);
			$s->setAliTo(401);
			$s->setEnvFrom(370);
			$s->setEnvTo(402);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NGFTPLHIACKKNHVRVMELLLKTGASIDAVT");
			$s->setConsensus("370;371;372;373;374;375;376;377;378;379;380;381;382;383;384;385;386;387;388;389;390;391;392;393;394;395;396;397;398;399;400;401;");
			$manager->persist($s);
	
			//-445-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(12);
			$s->setStatus("!");
			$s->setScore(37);
			$s->setBias(0);
			$s->setCEValue(1.1e-13);
			$s->setIEValue(1.1e-13);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(404);
			$s->setAliTo(434);
			$s->setEnvFrom(403);
			$s->setEnvTo(435);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLTPLHVASFMGHLPIVKNLLQRGASPNVSN");
			$s->setConsensus("404;405;406;407;408;409;410;411;412;413;414;415;416;417;418;419;420;421;422;423;424;425;426;427;428;429;430;431;432;433;434;");
			$manager->persist($s);
	
			//-446-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(13);
			$s->setStatus("!");
			$s->setScore(33.3);
			$s->setBias(0);
			$s->setCEValue(1.6e-12);
			$s->setIEValue(1.6e-12);
			$s->setHmmFrom(3);
			$s->setHmmTo(31);
			$s->setAliFrom(438);
			$s->setAliTo(466);
			$s->setEnvFrom(438);
			$s->setEnvTo(468);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaq");
			$s->setAliRep("ETPLHMAARAGHTEVAKYLLQNKAKVNAK");
			$s->setConsensus("438;439;440;441;442;443;444;445;446;447;448;449;450;451;452;453;454;455;456;457;458;459;460;461;462;463;464;465;466;");
			$manager->persist($s);
	
			//-447-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(14);
			$s->setStatus("!");
			$s->setScore(36.6);
			$s->setBias(0.3);
			$s->setCEValue(1.5e-13);
			$s->setIEValue(1.5e-13);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(469);
			$s->setAliTo(500);
			$s->setEnvFrom(469);
			$s->setEnvTo(501);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("DDQTPLHCAARIGHTNMVKLLLENNANPNLAT");
			$s->setConsensus("469;470;471;472;473;474;475;476;477;478;479;480;481;482;483;484;485;486;487;488;489;490;491;492;493;494;495;496;497;498;499;500;");
			$manager->persist($s);
	
			//-448-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(15);
			$s->setStatus("!");
			$s->setScore(21.7);
			$s->setBias(0.1);
			$s->setCEValue(7.8e-09);
			$s->setIEValue(7.8e-09);
			$s->setHmmFrom(2);
			$s->setHmmTo(27);
			$s->setAliFrom(503);
			$s->setAliTo(528);
			$s->setEnvFrom(502);
			$s->setEnvTo(533);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAd");
			$s->setAliRep("GHTPLHIAAREGHVETVLALLEKEAS");
			$s->setConsensus("503;504;505;506;507;508;509;510;511;512;513;514;515;516;517;518;519;520;521;522;523;524;525;526;527;528;");
			$manager->persist($s);
	
			//-449-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(16);
			$s->setStatus("!");
			$s->setScore(31.9);
			$s->setBias(0);
			$s->setCEValue(4.6e-12);
			$s->setIEValue(4.6e-12);
			$s->setHmmFrom(2);
			$s->setHmmTo(31);
			$s->setAliFrom(536);
			$s->setAliTo(565);
			$s->setEnvFrom(535);
			$s->setEnvTo(567);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaq");
			$s->setAliRep("GFTPLHVAAKYGKVRVAELLLERDAHPNAA");
			$s->setConsensus("536;537;538;539;540;541;542;543;544;545;546;547;548;549;550;551;552;553;554;555;556;557;558;559;560;561;562;563;564;565;");
			$manager->persist($s);
	
			//-450-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(17);
			$s->setStatus("!");
			$s->setScore(30.2);
			$s->setBias(0.2);
			$s->setCEValue(1.5e-11);
			$s->setIEValue(1.5e-11);
			$s->setHmmFrom(1);
			$s->setHmmTo(29);
			$s->setAliFrom(568);
			$s->setAliTo(596);
			$s->setEnvFrom(568);
			$s->setEnvTo(599);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdln");
			$s->setAliRep("NGLTPLHVAVHHNNLDIVKLLLPRGGSPH");
			$s->setConsensus("568;569;570;571;572;573;574;575;576;577;578;579;580;581;582;583;584;585;586;587;588;589;590;591;592;593;594;595;596;");
			$manager->persist($s);
	
			//-451-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(18);
			$s->setStatus("!");
			$s->setScore(30.3);
			$s->setBias(0);
			$s->setCEValue(1.4e-11);
			$s->setIEValue(1.4e-11);
			$s->setHmmFrom(1);
			$s->setHmmTo(30);
			$s->setAliFrom(601);
			$s->setAliTo(630);
			$s->setEnvFrom(601);
			$s->setEnvTo(632);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlna");
			$s->setAliRep("NGYTPLHIAAKQNQVEVARSLLQYGGSANA");
			$s->setConsensus("601;602;603;604;605;606;607;608;609;610;611;612;613;614;615;616;617;618;619;620;621;622;623;624;625;626;627;628;629;630;");
			$manager->persist($s);
	
			//-452-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(19);
			$s->setStatus("!");
			$s->setScore(29.7);
			$s->setBias(0.1);
			$s->setCEValue(2.2e-11);
			$s->setIEValue(2.2e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(635);
			$s->setAliTo(665);
			$s->setEnvFrom(634);
			$s->setEnvTo(666);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GVTPLHLAAQEGHAEMVALLLSKQANGNLGN");
			$s->setConsensus("635;636;637;638;639;640;641;642;643;644;645;646;647;648;649;650;651;652;653;654;655;656;657;658;659;660;661;662;663;664;665;");
			$manager->persist($s);
	
			//-453-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(20);
			$s->setStatus("!");
			$s->setScore(22.7);
			$s->setBias(0);
			$s->setCEValue(3.7e-09);
			$s->setIEValue(3.7e-09);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(668);
			$s->setAliTo(698);
			$s->setEnvFrom(667);
			$s->setEnvTo(699);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLTPLHLVAQEGHVPVADVLIKHGVMVDATT");
			$s->setConsensus("668;669;670;671;672;673;674;675;676;677;678;679;680;681;682;683;684;685;686;687;688;689;690;691;692;693;694;695;696;697;698;");
			$manager->persist($s);
	
			//-454-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(21);
			$s->setStatus("!");
			$s->setScore(39.9);
			$s->setBias(0);
			$s->setCEValue(1.3e-14);
			$s->setIEValue(1.3e-14);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(701);
			$s->setAliTo(732);
			$s->setEnvFrom(700);
			$s->setEnvTo(732);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GYTPLHVASHYGNIKLVKFLLQHQADVNAKTK");
			$s->setConsensus("701;702;703;704;705;706;707;708;709;710;711;712;713;714;715;716;717;718;719;720;721;722;723;724;725;726;727;728;729;730;731;732;");
			$manager->persist($s);
	
			//-455-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(22);
			$s->setStatus("!");
			$s->setScore(33.9);
			$s->setBias(0);
			$s->setCEValue(1.1e-12);
			$s->setIEValue(1.1e-12);
			$s->setHmmFrom(2);
			$s->setHmmTo(30);
			$s->setAliFrom(734);
			$s->setAliTo(762);
			$s->setEnvFrom(733);
			$s->setEnvTo(765);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlna");
			$s->setAliRep("GYSPLHQAAQQGHTDIVTLLLKNGASPNE");
			$s->setConsensus("734;735;736;737;738;739;740;741;742;743;744;745;746;747;748;749;750;751;752;753;754;755;756;757;758;759;760;761;762;");
			$manager->persist($s);
	
			//-456-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P16157"));
			$s->setPfamRepeat(23);
			$s->setStatus("?");
			$s->setScore(1.8);
			$s->setBias(0);
			$s->setCEValue(0.016);
			$s->setIEValue(0.016);
			$s->setHmmFrom(1);
			$s->setHmmTo(21);
			$s->setAliFrom(766);
			$s->setAliTo(786);
			$s->setEnvFrom(766);
			$s->setEnvTo(787);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklL");
			$s->setAliRep("DGTTPLAIAKRLGYISVTDVL");
			$s->setConsensus("766;767;768;769;770;771;772;773;774;775;776;777;778;779;780;781;782;783;784;785;786;");
			$manager->persist($s);
	
			//-457-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P19838"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(13.5);
			$s->setBias(0.1);
			$s->setCEValue(3e-06);
			$s->setIEValue(3e-06);
			$s->setHmmFrom(1);
			$s->setHmmTo(23);
			$s->setAliFrom(542);
			$s->setAliTo(564);
			$s->setEnvFrom(542);
			$s->setEnvTo(568);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLls");
			$s->setAliRep("NGDSVLHLAIIHLHSQLVRDLLE");
			$s->setConsensus("542;543;544;545;546;547;548;549;550;551;552;553;554;555;556;557;558;559;560;561;562;563;564;");
			$manager->persist($s);
	
			//-458-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P19838"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(30.5);
			$s->setBias(0);
			$s->setCEValue(1.2e-11);
			$s->setIEValue(1.2e-11);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(583);
			$s->setAliTo(612);
			$s->setEnvFrom(582);
			$s->setEnvTo(613);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("QTPLHLAVITKQEDVVEDLLRAGADLSLLD");
			$s->setConsensus("583;584;585;586;587;588;589;590;591;592;593;594;595;596;597;598;599;600;601;602;603;604;605;606;607;608;609;610;611;612;");
			$manager->persist($s);
	
			//-459-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P19838"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(16.4);
			$s->setBias(0.1);
			$s->setCEValue(3.8e-07);
			$s->setIEValue(3.8e-07);
			$s->setHmmFrom(2);
			$s->setHmmTo(24);
			$s->setAliFrom(615);
			$s->setAliTo(637);
			$s->setEnvFrom(614);
			$s->setEnvTo(643);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsq");
			$s->setAliRep("GNSVLHLAAKEGHDKVLSILLKH");
			$s->setConsensus("615;616;617;618;619;620;621;622;623;624;625;626;627;628;629;630;631;632;633;634;635;636;637;");
			$manager->persist($s);
	
			//-460-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P19838"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(21.7);
			$s->setBias(0.5);
			$s->setCEValue(7.7e-09);
			$s->setIEValue(7.7e-09);
			$s->setHmmFrom(1);
			$s->setHmmTo(31);
			$s->setAliFrom(650);
			$s->setAliTo(680);
			$s->setEnvFrom(650);
			$s->setEnvTo(682);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaq");
			$s->setAliRep("DGLNAIHLAMMSNSLPCLLLLVAAGADVNAQ");
			$s->setConsensus("650;651;652;653;654;655;656;657;658;659;660;661;662;663;664;665;666;667;668;669;670;671;672;673;674;675;676;677;678;679;680;");
			$manager->persist($s);
	
			//-461-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P19838"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(14.3);
			$s->setBias(0.1);
			$s->setCEValue(1.7e-06);
			$s->setIEValue(1.7e-06);
			$s->setHmmFrom(2);
			$s->setHmmTo(23);
			$s->setAliFrom(685);
			$s->setAliTo(706);
			$s->setEnvFrom(684);
			$s->setEnvTo(716);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls");
			$s->setAliRep("GRTALHLAVEHDNISLAGCLLL");
			$s->setConsensus("685;686;687;688;689;690;691;692;693;694;695;696;697;698;699;700;701;702;703;704;705;706;");
			$manager->persist($s);
	
			//-462-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P19838"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(23.6);
			$s->setBias(0);
			$s->setCEValue(1.9e-09);
			$s->setIEValue(1.9e-09);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(718);
			$s->setAliTo(749);
			$s->setEnvFrom(718);
			$s->setEnvTo(750);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("DGTTPLHIAAGRGSTRLAALLKAAGADPLVEN");
			$s->setConsensus("718;719;720;721;722;723;724;725;726;727;728;729;730;731;732;733;734;735;736;737;738;739;740;741;742;743;744;745;746;747;748;749;");
			$manager->persist($s);
	
			//-463-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P19838"));
			$s->setPfamRepeat(7);
			$s->setStatus("?");
			$s->setScore(-2.3);
			$s->setBias(0);
			$s->setCEValue(0.32);
			$s->setIEValue(0.32);
			$s->setHmmFrom(2);
			$s->setHmmTo(12);
			$s->setAliFrom(772);
			$s->setAliTo(782);
			$s->setEnvFrom(772);
			$s->setEnvTo(788);
			$s->setAliHmm("GfTPLHlAalr");
			$s->setAliRep("GTTPLDMATSW");
			$s->setConsensus("772;773;774;775;776;777;778;779;780;781;782;");
			$manager->persist($s);
	
			//-464-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P20749"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(18.5);
			$s->setBias(0);
			$s->setCEValue(8.1e-08);
			$s->setIEValue(8.1e-08);
			$s->setHmmFrom(1);
			$s->setHmmTo(23);
			$s->setAliFrom(134);
			$s->setAliTo(156);
			$s->setEnvFrom(134);
			$s->setEnvTo(170);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLls");
			$s->setAliRep("DGDTPLHIAVVQGNLPAVHRLVN");
			$s->setConsensus("134;135;136;137;138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;");
			$manager->persist($s);
	
			//-465-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P20749"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(25.7);
			$s->setBias(0);
			$s->setCEValue(4.3e-10);
			$s->setIEValue(4.3e-10);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(173);
			$s->setAliTo(202);
			$s->setEnvFrom(172);
			$s->setEnvTo(203);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("QTPLHLAVITTLPSVVRLLVTAGASPMALD");
			$s->setConsensus("173;174;175;176;177;178;179;180;181;182;183;184;185;186;187;188;189;190;191;192;193;194;195;196;197;198;199;200;201;202;");
			$manager->persist($s);
	
			//-466-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P20749"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(11.5);
			$s->setBias(0.2);
			$s->setCEValue(1.3e-05);
			$s->setIEValue(1.3e-05);
			$s->setHmmFrom(1);
			$s->setHmmTo(24);
			$s->setAliFrom(204);
			$s->setAliTo(227);
			$s->setEnvFrom(204);
			$s->setEnvTo(233);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsq");
			$s->setAliRep("HGQTAAHLACEHRSPTCLRALLDS");
			$s->setConsensus("204;205;206;207;208;209;210;211;212;213;214;215;216;217;218;219;220;221;222;223;224;225;226;227;");
			$manager->persist($s);
	
			//-467-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P20749"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(32.7);
			$s->setBias(0);
			$s->setCEValue(2.6e-12);
			$s->setIEValue(2.6e-12);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(241);
			$s->setAliTo(272);
			$s->setEnvFrom(241);
			$s->setEnvTo(273);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("DGLTALHVAVNTECQETVQLLLERGADIDAVD");
			$s->setConsensus("241;242;243;244;245;246;247;248;249;250;251;252;253;254;255;256;257;258;259;260;261;262;263;264;265;266;267;268;269;270;271;272;");
			$manager->persist($s);
	
			//-468-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P20749"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(36);
			$s->setBias(0.1);
			$s->setCEValue(2.3e-13);
			$s->setIEValue(2.3e-13);
			$s->setHmmFrom(2);
			$s->setHmmTo(31);
			$s->setAliFrom(276);
			$s->setAliTo(305);
			$s->setEnvFrom(275);
			$s->setEnvTo(307);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaq");
			$s->setAliRep("GRSPLIHAVENNSLSMVQLLLQHGANVNAQ");
			$s->setConsensus("276;277;278;279;280;281;282;283;284;285;286;287;288;289;290;291;292;293;294;295;296;297;298;299;300;301;302;303;304;305;");
			$manager->persist($s);
	
			//-469-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P20749"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(14.1);
			$s->setBias(0);
			$s->setCEValue(1.9e-06);
			$s->setIEValue(1.9e-06);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(309);
			$s->setAliTo(339);
			$s->setEnvFrom(308);
			$s->setEnvTo(340);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GSSALHSASGRGLLPLVRTLVRSGADSSLKN");
			$s->setConsensus("309;310;311;312;313;314;315;316;317;318;319;320;321;322;323;324;325;326;327;328;329;330;331;332;333;334;335;336;337;338;339;");
			$manager->persist($s);
	
			//-470-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P20749"));
			$s->setPfamRepeat(7);
			$s->setStatus("?");
			$s->setScore(2.4);
			$s->setBias(0);
			$s->setCEValue(0.01);
			$s->setIEValue(0.01);
			$s->setHmmFrom(2);
			$s->setHmmTo(12);
			$s->setAliFrom(342);
			$s->setAliTo(352);
			$s->setEnvFrom(341);
			$s->setEnvTo(359);
			$s->setAliHmm("GfTPLHlAalr");
			$s->setAliRep("NDTPLMVARSR");
			$s->setConsensus("342;343;344;345;346;347;348;349;350;351;352;");
			$manager->persist($s);
	
			//-471-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25799"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(14.3);
			$s->setBias(0.1);
			$s->setCEValue(1.8e-06);
			$s->setIEValue(1.8e-06);
			$s->setHmmFrom(1);
			$s->setHmmTo(23);
			$s->setAliFrom(538);
			$s->setAliTo(560);
			$s->setEnvFrom(538);
			$s->setEnvTo(564);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLls");
			$s->setAliRep("NGDSVLHLAIIHLHAQLVRDLLE");
			$s->setConsensus("538;539;540;541;542;543;544;545;546;547;548;549;550;551;552;553;554;555;556;557;558;559;560;");
			$manager->persist($s);
	
			//-472-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25799"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(27.8);
			$s->setBias(0);
			$s->setCEValue(9.2e-11);
			$s->setIEValue(9.2e-11);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(579);
			$s->setAliTo(608);
			$s->setEnvFrom(578);
			$s->setEnvTo(609);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("QTPLHLAVITKQEDVVEDLLRVGADLSLLD");
			$s->setConsensus("579;580;581;582;583;584;585;586;587;588;589;590;591;592;593;594;595;596;597;598;599;600;601;602;603;604;605;606;607;608;");
			$manager->persist($s);
	
			//-473-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25799"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(15.7);
			$s->setBias(0);
			$s->setCEValue(6.2e-07);
			$s->setIEValue(6.2e-07);
			$s->setHmmFrom(2);
			$s->setHmmTo(26);
			$s->setAliFrom(611);
			$s->setAliTo(636);
			$s->setEnvFrom(610);
			$s->setEnvTo(640);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls.qGA");
			$s->setAliRep("GNSVLHLAAKEGHDRILSILLKsRKA");
			$s->setConsensus("611;612;613;614;615;616;617;618;619;620;621;622;623;624;625;626;627;628;629;630;631;632;634;635;636;");
			$s->setInsertions(";s;23");
			$manager->persist($s);
	
			//-474-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25799"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(19.9);
			$s->setBias(0.2);
			$s->setCEValue(3e-08);
			$s->setIEValue(3e-08);
			$s->setHmmFrom(2);
			$s->setHmmTo(31);
			$s->setAliFrom(647);
			$s->setAliTo(676);
			$s->setEnvFrom(646);
			$s->setEnvTo(678);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaq");
			$s->setAliRep("GLNAIHIAVMSNSLPCLLLLVAAGAEVNAQ");
			$s->setConsensus("647;648;649;650;651;652;653;654;655;656;657;658;659;660;661;662;663;664;665;666;667;668;669;670;671;672;673;674;675;676;");
			$manager->persist($s);
	
			//-475-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25799"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(14.4);
			$s->setBias(0.1);
			$s->setCEValue(1.6e-06);
			$s->setIEValue(1.6e-06);
			$s->setHmmFrom(2);
			$s->setHmmTo(23);
			$s->setAliFrom(681);
			$s->setAliTo(702);
			$s->setEnvFrom(680);
			$s->setEnvTo(712);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls");
			$s->setAliRep("GRTALHLAVEYDNISLAGCLLL");
			$s->setConsensus("681;682;683;684;685;686;687;688;689;690;691;692;693;694;695;696;697;698;699;700;701;702;");
			$manager->persist($s);
	
			//-476-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25799"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(23.6);
			$s->setBias(0);
			$s->setCEValue(1.9e-09);
			$s->setIEValue(1.9e-09);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(714);
			$s->setAliTo(745);
			$s->setEnvFrom(714);
			$s->setEnvTo(746);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("DGTTPLHIAAGRGSTRLAALLKAAGADPLVEN");
			$s->setConsensus("714;715;716;717;718;719;720;721;722;723;724;725;726;727;728;729;730;731;732;733;734;735;736;737;738;739;740;741;742;743;744;745;");
			$manager->persist($s);
	
			//-477-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25799"));
			$s->setPfamRepeat(7);
			$s->setStatus("?");
			$s->setScore(-0.3);
			$s->setBias(0);
			$s->setCEValue(0.074);
			$s->setIEValue(0.074);
			$s->setHmmFrom(2);
			$s->setHmmTo(12);
			$s->setAliFrom(768);
			$s->setAliTo(778);
			$s->setEnvFrom(768);
			$s->setEnvTo(818);
			$s->setAliHmm("GfTPLHlAalr");
			$s->setAliRep("GTTPLDMAANW");
			$s->setConsensus("768;769;770;771;772;773;774;775;776;777;778;");
			$manager->persist($s);
	
			//-478-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(3.7);
			$s->setBias(0);
			$s->setCEValue(0.004);
			$s->setIEValue(0.004);
			$s->setHmmFrom(1);
			$s->setHmmTo(13);
			$s->setAliFrom(73);
			$s->setAliTo(85);
			$s->setEnvFrom(73);
			$s->setEnvTo(97);
			$s->setAliHmm("dGfTPLHlAalrg");
			$s->setAliRep("DGDSFLHLAIIHE");
			$s->setConsensus("73;74;75;76;77;78;79;80;81;82;83;84;85;");
			$manager->persist($s);
	
			//-479-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(31);
			$s->setBias(0);
			$s->setCEValue(9e-12);
			$s->setIEValue(9e-12);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(112);
			$s->setAliTo(141);
			$s->setEnvFrom(111);
			$s->setEnvTo(142);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("QTPLHLAVITNQPEIAEALLGAGCDPELRD");
			$s->setConsensus("112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;");
			$manager->persist($s);
	
			//-480-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(16.9);
			$s->setBias(0.1);
			$s->setCEValue(2.5e-07);
			$s->setIEValue(2.5e-07);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(144);
			$s->setAliTo(163);
			$s->setEnvFrom(143);
			$s->setEnvTo(173);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GNTPLHLACEQGCLASVGVL");
			$s->setConsensus("144;145;146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;");
			$manager->persist($s);
	
			//-481-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(38.6);
			$s->setBias(0.2);
			$s->setCEValue(3.3e-14);
			$s->setIEValue(3.3e-14);
			$s->setHmmFrom(1);
			$s->setHmmTo(31);
			$s->setAliFrom(182);
			$s->setAliTo(212);
			$s->setEnvFrom(182);
			$s->setEnvTo(214);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaq");
			$s->setAliRep("NGHTCLHLASIHGYLGIVELLVSLGADVNAQ");
			$s->setConsensus("182;183;184;185;186;187;188;189;190;191;192;193;194;195;196;197;198;199;200;201;202;203;204;205;206;207;208;209;210;211;212;");
			$manager->persist($s);
	
			//-482-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(36.1);
			$s->setBias(0.1);
			$s->setCEValue(2.1e-13);
			$s->setIEValue(2.1e-13);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(216);
			$s->setAliTo(247);
			$s->setEnvFrom(216);
			$s->setEnvTo(248);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NGRTALHLAVDLQNPDLVSLLLKCGADVNRVT");
			$s->setConsensus("216;217;218;219;220;221;222;223;224;225;226;227;228;229;230;231;232;233;234;235;236;237;238;239;240;241;242;243;244;245;246;247;");
			$manager->persist($s);
	
			//-483-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(16.3);
			$s->setBias(0);
			$s->setCEValue(3.9e-07);
			$s->setIEValue(3.9e-07);
			$s->setHmmFrom(8);
			$s->setHmmTo(32);
			$s->setAliFrom(18);
			$s->setAliTo(42);
			$s->setEnvFrom(16);
			$s->setEnvTo(43);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("TAAARGRVEEVRALLEAGALPNAPN");
			$s->setConsensus("18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;");
			$manager->persist($s);
	
			//-484-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(14.2);
			$s->setBias(0);
			$s->setCEValue(1.9e-06);
			$s->setIEValue(1.9e-06);
			$s->setHmmFrom(11);
			$s->setHmmTo(32);
			$s->setAliFrom(53);
			$s->setAliTo(74);
			$s->setEnvFrom(51);
			$s->setEnvTo(75);
			$s->setAliHmm("lrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("MMGSARVAELLLLHGAEPNCAD");
			$s->setConsensus("53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;");
			$manager->persist($s);
	
			//-485-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(7.7);
			$s->setBias(0);
			$s->setCEValue(0.00021);
			$s->setIEValue(0.00021);
			$s->setHmmFrom(5);
			$s->setHmmTo(32);
			$s->setAliFrom(81);
			$s->setAliTo(108);
			$s->setEnvFrom(81);
			$s->setEnvTo(109);
			$s->setAliHmm("PLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("PVHDAAREGFLDTLVVLHRAGARLDVRD");
			$s->setConsensus("81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;");
			$manager->persist($s);
	
			//-486-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setPfamRepeat(4);
			$s->setStatus("?");
			$s->setScore(1.6);
			$s->setBias(0);
			$s->setCEValue(0.018);
			$s->setIEValue(0.018);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(111);
			$s->setAliTo(130);
			$s->setEnvFrom(110);
			$s->setEnvTo(136);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GRLPVDLAEELGHRDVARYL");
			$s->setConsensus("111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;");
			$manager->persist($s);
	
			//-487-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42773"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(13.8);
			$s->setBias(0.3);
			$s->setCEValue(2.5e-06);
			$s->setIEValue(2.5e-06);
			$s->setHmmFrom(8);
			$s->setHmmTo(32);
			$s->setAliFrom(11);
			$s->setAliTo(35);
			$s->setEnvFrom(9);
			$s->setEnvTo(36);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("SAAARGDLEQLTSLLQNNVNVNAQN");
			$s->setConsensus("11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;");
			$manager->persist($s);
	
			//-488-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42773"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(15.8);
			$s->setBias(0);
			$s->setCEValue(5.8e-07);
			$s->setIEValue(5.8e-07);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(38);
			$s->setAliTo(67);
			$s->setEnvFrom(37);
			$s->setEnvTo(68);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GRTALQV-MKLGNPEIARRLLLRGANPDLKD");
			$s->setConsensus("38;39;40;41;42;43;44;-;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;");
			$s->setDeletions(";A;8");
			$manager->persist($s);
	
			//-489-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42773"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(16.8);
			$s->setBias(0);
			$s->setCEValue(2.7e-07);
			$s->setIEValue(2.7e-07);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(70);
			$s->setAliTo(101);
			$s->setEnvFrom(69);
			$s->setEnvTo(101);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GFAVIHDAARAGFLDTLQTLLEFQADVNIEDN");
			$s->setConsensus("70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;");
			$manager->persist($s);
	
			//-490-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42773"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(27.5);
			$s->setBias(0);
			$s->setCEValue(1.1e-10);
			$s->setIEValue(1.1e-10);
			$s->setHmmFrom(2);
			$s->setHmmTo(27);
			$s->setAliFrom(103);
			$s->setAliTo(128);
			$s->setEnvFrom(102);
			$s->setEnvTo(129);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAd");
			$s->setAliRep("GNLPLHLAAKEGHLRVVEFLVKHTAS");
			$s->setConsensus("103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;");
			$manager->persist($s);
	
			//-491-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42773"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(5.4);
			$s->setBias(0);
			$s->setCEValue(0.0011);
			$s->setIEValue(0.0011);
			$s->setHmmFrom(2);
			$s->setHmmTo(26);
			$s->setAliFrom(137);
			$s->setAliTo(161);
			$s->setEnvFrom(136);
			$s->setEnvTo(162);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGA");
			$s->setAliRep("GDTACDLARLYGRNEVVSLMQANGA");
			$s->setConsensus("137;138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;");
			$manager->persist($s);
	
			//-492-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P46531"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(29.9);
			$s->setBias(0);
			$s->setCEValue(2e-11);
			$s->setIEValue(2e-11);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(1880);
			$s->setAliTo(1925);
			$s->setEnvFrom(1880);
			$s->setEnvTo(1925);
			$s->setAliHmm("dGfTPLHlAalrg.............nlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGFTPLMIASCSGggletgnseeeedAPAVISDFIYQGASLHNQTD");
			$s->setConsensus("1880;1881;1882;1883;1884;1885;1886;1887;1888;1889;1890;1891;1892;1906;1907;1908;1909;1910;1911;1912;1913;1914;1915;1916;1917;1918;1919;1920;1921;1922;1923;1924;1925;");
			$s->setInsertions(";g;14;g;14;l;14;e;14;t;14;g;14;n;14;s;14;e;14;e;14;e;14;e;14;d;14");
			$manager->persist($s);
	
			//-493-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P46531"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(26.8);
			$s->setBias(0);
			$s->setCEValue(1.9e-10);
			$s->setIEValue(1.9e-10);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(1928);
			$s->setAliTo(1959);
			$s->setEnvFrom(1927);
			$s->setEnvTo(1959);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GETALHLAARYSRSDAAKRLLEASADANIQDN");
			$s->setConsensus("1928;1929;1930;1931;1932;1933;1934;1935;1936;1937;1938;1939;1940;1941;1942;1943;1944;1945;1946;1947;1948;1949;1950;1951;1952;1953;1954;1955;1956;1957;1958;1959;");
			$manager->persist($s);
	
			//-494-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P46531"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(12.7);
			$s->setBias(0);
			$s->setCEValue(5.7e-06);
			$s->setIEValue(5.7e-06);
			$s->setHmmFrom(2);
			$s->setHmmTo(31);
			$s->setAliFrom(1961);
			$s->setAliTo(1991);
			$s->setEnvFrom(1960);
			$s->setEnvTo(1993);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls.qGAdlnaq");
			$s->setAliRep("GRTPLHAAVSADAQGVFQILIRnRATDLDAR");
			$s->setConsensus("1961;1962;1963;1964;1965;1966;1967;1968;1969;1970;1971;1972;1973;1974;1975;1976;1977;1978;1979;1980;1981;1982;1984;1985;1986;1987;1988;1989;1990;1991;");
			$s->setInsertions(";n;23");
			$manager->persist($s);
	
			//-495-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P46531"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(19.4);
			$s->setBias(0.1);
			$s->setCEValue(4.3e-08);
			$s->setIEValue(4.3e-08);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(1994);
			$s->setAliTo(2026);
			$s->setEnvFrom(1994);
			$s->setEnvTo(2026);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGTTPLILAARLAVEGMLEDLINSHADVNAVDD");
			$s->setConsensus("1994;1995;1996;1997;1998;1999;2000;2001;2002;2003;2004;2005;2006;2007;2008;2009;2010;2011;2012;2013;2014;2015;2016;2017;2018;2019;2020;2021;2022;2023;2024;2025;2026;");
			$manager->persist($s);
	
			//-496-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P46531"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(21.4);
			$s->setBias(0.3);
			$s->setCEValue(9.9e-09);
			$s->setIEValue(9.9e-09);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(2028);
			$s->setAliTo(2059);
			$s->setEnvFrom(2027);
			$s->setEnvTo(2059);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GKSALHWAAAVNNVDAAVVLLKNGANKDMQNN");
			$s->setConsensus("2028;2029;2030;2031;2032;2033;2034;2035;2036;2037;2038;2039;2040;2041;2042;2043;2044;2045;2046;2047;2048;2049;2050;2051;2052;2053;2054;2055;2056;2057;2058;2059;");
			$manager->persist($s);
	
			//-497-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P46531"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(19.5);
			$s->setBias(0);
			$s->setCEValue(3.9e-08);
			$s->setIEValue(3.9e-08);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(2062);
			$s->setAliTo(2091);
			$s->setEnvFrom(2060);
			$s->setEnvTo(2092);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("ETPLFLAAREGSYETAKVLLDHFANRDITD");
			$s->setConsensus("2062;2063;2064;2065;2066;2067;2068;2069;2070;2071;2072;2073;2074;2075;2076;2077;2078;2079;2080;2081;2082;2083;2084;2085;2086;2087;2088;2089;2090;2091;");
			$manager->persist($s);
	
			//-498-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P46531"));
			$s->setPfamRepeat(7);
			$s->setStatus("?");
			$s->setScore(-3.4);
			$s->setBias(0);
			$s->setCEValue(0.68);
			$s->setIEValue(0.68);
			$s->setHmmFrom(11);
			$s->setHmmTo(21);
			$s->setAliFrom(2103);
			$s->setAliTo(2113);
			$s->setEnvFrom(2098);
			$s->setEnvTo(2113);
			$s->setAliHmm("lrgnlevvklL");
			$s->setAliRep("ERMHHDIVRLL");
			$s->setConsensus("2103;2104;2105;2106;2107;2108;2109;2110;2111;2112;2113;");
			$manager->persist($s);
	
			//-499-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P50086"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(5.9);
			$s->setBias(0);
			$s->setCEValue(0.00081);
			$s->setIEValue(0.00081);
			$s->setHmmFrom(3);
			$s->setHmmTo(28);
			$s->setAliFrom(3);
			$s->setAliTo(28);
			$s->setEnvFrom(2);
			$s->setEnvTo(33);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdl");
			$s->setAliRep("NYPLHQACMENEFFKVQELLHSKPSL");
			$s->setConsensus("3;4;5;6;7;8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;");
			$manager->persist($s);
	
			//-500-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P50086"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(16.6);
			$s->setBias(0);
			$s->setCEValue(3.2e-07);
			$s->setIEValue(3.2e-07);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(35);
			$s->setAliTo(66);
			$s->setEnvFrom(35);
			$s->setEnvTo(67);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("DGRIPLHWSVSFQAHEITSFLLSKMENVNLDD");
			$s->setConsensus("35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;");
			$manager->persist($s);
	
			//-501-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P50086"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(23.5);
			$s->setBias(0);
			$s->setCEValue(2.2e-09);
			$s->setIEValue(2.2e-09);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(72);
			$s->setAliTo(104);
			$s->setEnvFrom(71);
			$s->setEnvTo(105);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls..qGAdlnaqd");
			$s->setAliRep("GWTPFHIACSVGNLEVVKSLYDrpLKPDLNKIT");
			$s->setConsensus("72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;96;97;98;99;100;101;102;103;104;");
			$s->setInsertions(";r;23;p;23");
			$manager->persist($s);
	
			//-502-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P50086"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(22.7);
			$s->setBias(0);
			$s->setCEValue(3.8e-09);
			$s->setIEValue(3.8e-09);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(107);
			$s->setAliTo(138);
			$s->setEnvFrom(106);
			$s->setEnvTo(138);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GVTCLHLAVGKKWFEVSQFLIENGASVRIKDK");
			$s->setConsensus("107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;");
			$manager->persist($s);
	
			//-503-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P50086"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(12.4);
			$s->setBias(0);
			$s->setCEValue(7.2e-06);
			$s->setIEValue(7.2e-06);
			$s->setHmmFrom(5);
			$s->setHmmTo(25);
			$s->setAliFrom(143);
			$s->setAliTo(163);
			$s->setEnvFrom(140);
			$s->setEnvTo(171);
			$s->setAliHmm("PLHlAalrgnlevvklLlsqG");
			$s->setAliRep("PLHRAASVGSLKLIELLCGLG");
			$s->setConsensus("143;144;145;146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;");
			$manager->persist($s);
	
			//-504-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P50086"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(14.1);
			$s->setBias(0);
			$s->setCEValue(2e-06);
			$s->setIEValue(2e-06);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(174);
			$s->setAliTo(206);
			$s->setEnvFrom(173);
			$s->setEnvTo(206);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls.qGAdlnaqdd");
			$s->setAliRep("GWTPLFHALAEGHGDAAVLLVEkYGAEYDLVDN");
			$s->setConsensus("174;175;176;177;178;179;180;181;182;183;184;185;186;187;188;189;190;191;192;193;194;195;197;198;199;200;201;202;203;204;205;206;");
			$s->setInsertions(";k;23");
			$manager->persist($s);
	
			//-505-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P55271"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(23.9);
			$s->setBias(0);
			$s->setCEValue(1.6e-09);
			$s->setIEValue(1.6e-09);
			$s->setHmmFrom(8);
			$s->setHmmTo(32);
			$s->setAliFrom(12);
			$s->setAliTo(36);
			$s->setEnvFrom(10);
			$s->setEnvTo(37);
			$s->setAliHmm("lAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("TAAARGQVETVRQLLEAGADPNALN");
			$s->setConsensus("12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;31;32;33;34;35;36;");
			$manager->persist($s);
	
			//-506-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P55271"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(15.4);
			$s->setBias(0);
			$s->setCEValue(8e-07);
			$s->setIEValue(8e-07);
			$s->setHmmFrom(11);
			$s->setHmmTo(32);
			$s->setAliFrom(47);
			$s->setAliTo(68);
			$s->setEnvFrom(45);
			$s->setEnvTo(69);
			$s->setAliHmm("lrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("MMGSAQVAELLLLHGAEPNCAD");
			$s->setConsensus("47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;");
			$manager->persist($s);
	
			//-507-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P55271"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(6.8);
			$s->setBias(0);
			$s->setCEValue(0.0004);
			$s->setIEValue(0.0004);
			$s->setHmmFrom(5);
			$s->setHmmTo(32);
			$s->setAliFrom(75);
			$s->setAliTo(102);
			$s->setEnvFrom(75);
			$s->setEnvTo(103);
			$s->setAliHmm("PLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("PVHDAAREGFLDTLVVLHRAGARLDVCD");
			$s->setConsensus("75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;");
			$manager->persist($s);
	
			//-508-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P55271"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(2.5);
			$s->setBias(0);
			$s->setCEValue(0.0095);
			$s->setIEValue(0.0095);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(105);
			$s->setAliTo(124);
			$s->setEnvFrom(104);
			$s->setEnvTo(128);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GRLPVDLAEEQGHRDIARYL");
			$s->setConsensus("105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;");
			$manager->persist($s);
	
			//-509-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P55273"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(0.5);
			$s->setBias(0);
			$s->setCEValue(0.039);
			$s->setIEValue(0.039);
			$s->setHmmFrom(9);
			$s->setHmmTo(23);
			$s->setAliFrom(15);
			$s->setAliTo(29);
			$s->setEnvFrom(14);
			$s->setEnvTo(39);
			$s->setAliHmm("AalrgnlevvklLls");
			$s->setAliRep("AAARGDVQEVRRLLH");
			$s->setConsensus("15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;");
			$manager->persist($s);
	
			//-510-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P55273"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(15.5);
			$s->setBias(0);
			$s->setCEValue(7.4e-07);
			$s->setIEValue(7.4e-07);
			$s->setHmmFrom(10);
			$s->setHmmTo(32);
			$s->setAliFrom(49);
			$s->setAliTo(71);
			$s->setEnvFrom(41);
			$s->setEnvTo(72);
			$s->setAliHmm("alrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("MMFGSTAIALELLKQGASPNVQD");
			$s->setConsensus("49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;");
			$manager->persist($s);
	
			//-511-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P55273"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(24.5);
			$s->setBias(0);
			$s->setCEValue(9.7e-10);
			$s->setIEValue(9.7e-10);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(74);
			$s->setAliTo(104);
			$s->setEnvFrom(73);
			$s->setEnvTo(105);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GTSPVHDAARTGFLDTLKVLVEHGADVNVPD");
			$s->setConsensus("74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;");
			$manager->persist($s);
	
			//-512-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P55273"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(14.4);
			$s->setBias(0);
			$s->setCEValue(1.6e-06);
			$s->setIEValue(1.6e-06);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(107);
			$s->setAliTo(126);
			$s->setEnvFrom(106);
			$s->setEnvTo(136);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GALPIHLAVQEGHTAVVSFL");
			$s->setConsensus("107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;");
			$manager->persist($s);
	
			//-513-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P55273"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(8.2);
			$s->setBias(0);
			$s->setCEValue(0.00015);
			$s->setIEValue(0.00015);
			$s->setHmmFrom(2);
			$s->setHmmTo(23);
			$s->setAliFrom(139);
			$s->setAliTo(160);
			$s->setEnvFrom(138);
			$s->setEnvTo(165);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls");
			$s->setAliRep("GLTPLELALQRGAQDLVDILQG");
			$s->setConsensus("139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;");
			$manager->persist($s);
	
			//-514-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P58546"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(7.7);
			$s->setBias(0);
			$s->setCEValue(0.00021);
			$s->setIEValue(0.00021);
			$s->setHmmFrom(7);
			$s->setHmmTo(29);
			$s->setAliFrom(7);
			$s->setAliTo(29);
			$s->setEnvFrom(6);
			$s->setEnvTo(31);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdln");
			$s->setAliRep("MWALKNGDLDEVKDYVAKGEDVN");
			$s->setConsensus("7;8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;");
			$manager->persist($s);
	
			//-515-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P58546"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(36.5);
			$s->setBias(0);
			$s->setCEValue(1.6e-13);
			$s->setIEValue(1.6e-13);
			$s->setHmmFrom(5);
			$s->setHmmTo(33);
			$s->setAliFrom(38);
			$s->setAliTo(66);
			$s->setEnvFrom(34);
			$s->setEnvTo(66);
			$s->setAliHmm("PLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("PLHYAADCGQLEILEFLLLKGADINAPDK");
			$s->setConsensus("38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;");
			$manager->persist($s);
	
			//-516-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P58546"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(28.5);
			$s->setBias(0);
			$s->setCEValue(5.3e-11);
			$s->setIEValue(5.3e-11);
			$s->setHmmFrom(3);
			$s->setHmmTo(29);
			$s->setAliFrom(69);
			$s->setAliTo(95);
			$s->setEnvFrom(67);
			$s->setEnvTo(98);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdln");
			$s->setAliRep("ITPLLSAVYEGHVSCVKLLLSKGADKT");
			$s->setConsensus("69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;");
			$manager->persist($s);
	
			//-517-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P62774"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(7.7);
			$s->setBias(0);
			$s->setCEValue(0.00021);
			$s->setIEValue(0.00021);
			$s->setHmmFrom(7);
			$s->setHmmTo(29);
			$s->setAliFrom(7);
			$s->setAliTo(29);
			$s->setEnvFrom(6);
			$s->setEnvTo(31);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdln");
			$s->setAliRep("MWALKNGDLDEVKDYVAKGEDVN");
			$s->setConsensus("7;8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;");
			$manager->persist($s);
	
			//-518-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P62774"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(36.5);
			$s->setBias(0);
			$s->setCEValue(1.6e-13);
			$s->setIEValue(1.6e-13);
			$s->setHmmFrom(5);
			$s->setHmmTo(33);
			$s->setAliFrom(38);
			$s->setAliTo(66);
			$s->setEnvFrom(34);
			$s->setEnvTo(66);
			$s->setAliHmm("PLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("PLHYAADCGQLEILEFLLLKGADINAPDK");
			$s->setConsensus("38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;");
			$manager->persist($s);
	
			//-519-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P62774"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(28.5);
			$s->setBias(0);
			$s->setCEValue(5.3e-11);
			$s->setIEValue(5.3e-11);
			$s->setHmmFrom(3);
			$s->setHmmTo(29);
			$s->setAliFrom(69);
			$s->setAliTo(95);
			$s->setEnvFrom(67);
			$s->setEnvTo(98);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdln");
			$s->setAliRep("ITPLLSAVYEGHVSCVKLLLSKGADKT");
			$s->setConsensus("69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;");
			$manager->persist($s);
	
			//-520-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P62774"));
			$s->setPfamRepeat(4);
			$s->setStatus("?");
			$s->setScore(-2.2);
			$s->setBias(0);
			$s->setCEValue(0.3);
			$s->setIEValue(0.3);
			$s->setHmmFrom(1);
			$s->setHmmTo(6);
			$s->setAliFrom(100);
			$s->setAliTo(105);
			$s->setEnvFrom(100);
			$s->setEnvTo(105);
			$s->setAliHmm("dGfTPL");
			$s->setAliRep("DGLTAL");
			$s->setConsensus("100;101;102;103;104;105;");
			$manager->persist($s);
	
			//-521-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P62775"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(7.7);
			$s->setBias(0);
			$s->setCEValue(0.00021);
			$s->setIEValue(0.00021);
			$s->setHmmFrom(7);
			$s->setHmmTo(29);
			$s->setAliFrom(7);
			$s->setAliTo(29);
			$s->setEnvFrom(6);
			$s->setEnvTo(31);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdln");
			$s->setAliRep("MWALKNGDLDEVKDYVAKGEDVN");
			$s->setConsensus("7;8;9;10;11;12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;");
			$manager->persist($s);
	
			//-522-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P62775"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(36.5);
			$s->setBias(0);
			$s->setCEValue(1.6e-13);
			$s->setIEValue(1.6e-13);
			$s->setHmmFrom(5);
			$s->setHmmTo(33);
			$s->setAliFrom(38);
			$s->setAliTo(66);
			$s->setEnvFrom(34);
			$s->setEnvTo(66);
			$s->setAliHmm("PLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("PLHYAADCGQLEILEFLLLKGADINAPDK");
			$s->setConsensus("38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;");
			$manager->persist($s);
	
			//-523-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P62775"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(28.5);
			$s->setBias(0);
			$s->setCEValue(5.3e-11);
			$s->setIEValue(5.3e-11);
			$s->setHmmFrom(3);
			$s->setHmmTo(29);
			$s->setAliFrom(69);
			$s->setAliTo(95);
			$s->setEnvFrom(67);
			$s->setEnvTo(98);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdln");
			$s->setAliRep("ITPLLSAVYEGHVSCVKLLLSKGADKT");
			$s->setConsensus("69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;");
			$manager->persist($s);
	
			//-524-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P62775"));
			$s->setPfamRepeat(4);
			$s->setStatus("?");
			$s->setScore(-2.2);
			$s->setBias(0);
			$s->setCEValue(0.3);
			$s->setIEValue(0.3);
			$s->setHmmFrom(1);
			$s->setHmmTo(6);
			$s->setAliFrom(100);
			$s->setAliTo(105);
			$s->setEnvFrom(100);
			$s->setEnvTo(105);
			$s->setAliHmm("dGfTPL");
			$s->setAliRep("DGLTAL");
			$s->setConsensus("100;101;102;103;104;105;");
			$manager->persist($s);
	
			//-525-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q00420"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(2.1);
			$s->setBias(0);
			$s->setCEValue(0.012);
			$s->setIEValue(0.012);
			$s->setHmmFrom(8);
			$s->setHmmTo(26);
			$s->setAliFrom(12);
			$s->setAliTo(30);
			$s->setEnvFrom(10);
			$s->setEnvTo(33);
			$s->setAliHmm("lAalrgnlevvklLlsqGA");
			$s->setAliRep("EAARAGQDDEVRILMANGA");
			$s->setConsensus("12;13;14;15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;30;");
			$manager->persist($s);
	
			//-526-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q00420"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(27.1);
			$s->setBias(0);
			$s->setCEValue(1.5e-10);
			$s->setIEValue(1.5e-10);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(38);
			$s->setAliTo(69);
			$s->setEnvFrom(37);
			$s->setEnvTo(69);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GTSPLHLAAQYGHFSTTEVLLRAGVSRDARTK");
			$s->setConsensus("38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;");
			$manager->persist($s);
	
			//-527-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q00420"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(44.6);
			$s->setBias(0.1);
			$s->setCEValue(4.4e-16);
			$s->setIEValue(4.4e-16);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(72);
			$s->setAliTo(101);
			$s->setEnvFrom(71);
			$s->setEnvTo(102);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("RTPLHMAASEGHANIVEVLLKHGADVNAKD");
			$s->setConsensus("72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;");
			$manager->persist($s);
	
			//-528-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q00420"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(34.3);
			$s->setBias(0);
			$s->setCEValue(7.7e-13);
			$s->setIEValue(7.7e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(31);
			$s->setAliFrom(105);
			$s->setAliTo(133);
			$s->setEnvFrom(104);
			$s->setEnvTo(135);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaq");
			$s->setAliRep("MTALHWATEHNHQEVVELLIKYGADVHTQ");
			$s->setConsensus("105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;");
			$manager->persist($s);
	
			//-529-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q00420"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(-2.9);
			$s->setBias(0);
			$s->setCEValue(0.49);
			$s->setIEValue(0.49);
			$s->setHmmFrom(4);
			$s->setHmmTo(21);
			$s->setAliFrom(139);
			$s->setAliTo(156);
			$s->setEnvFrom(138);
			$s->setEnvTo(156);
			$s->setAliHmm("TPLHlAalrgnlevvklL");
			$s->setAliRep("TAFDISIDNGNEDLAEIL");
			$s->setConsensus("139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;");
			$manager->persist($s);
	
			//-530-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q01705"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(29.9);
			$s->setBias(0);
			$s->setCEValue(2e-11);
			$s->setIEValue(2e-11);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(1870);
			$s->setAliTo(1915);
			$s->setEnvFrom(1870);
			$s->setEnvTo(1915);
			$s->setAliHmm("dGfTPLHlAalrg.............nlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGFTPLMIASCSGggletgnseeeedAPAVISDFIYQGASLHNQTD");
			$s->setConsensus("1870;1871;1872;1873;1874;1875;1876;1877;1878;1879;1880;1881;1882;1896;1897;1898;1899;1900;1901;1902;1903;1904;1905;1906;1907;1908;1909;1910;1911;1912;1913;1914;1915;");
			$s->setInsertions(";g;14;g;14;l;14;e;14;t;14;g;14;n;14;s;14;e;14;e;14;e;14;e;14;d;14");
			$manager->persist($s);
	
			//-531-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q01705"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(26.8);
			$s->setBias(0);
			$s->setCEValue(1.8e-10);
			$s->setIEValue(1.8e-10);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(1918);
			$s->setAliTo(1949);
			$s->setEnvFrom(1917);
			$s->setEnvTo(1949);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GETALHLAARYSRSDAAKRLLEASADANIQDN");
			$s->setConsensus("1918;1919;1920;1921;1922;1923;1924;1925;1926;1927;1928;1929;1930;1931;1932;1933;1934;1935;1936;1937;1938;1939;1940;1941;1942;1943;1944;1945;1946;1947;1948;1949;");
			$manager->persist($s);
	
			//-532-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q01705"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(12.8);
			$s->setBias(0);
			$s->setCEValue(5e-06);
			$s->setIEValue(5e-06);
			$s->setHmmFrom(2);
			$s->setHmmTo(31);
			$s->setAliFrom(1951);
			$s->setAliTo(1981);
			$s->setEnvFrom(1950);
			$s->setEnvTo(1983);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls.qGAdlnaq");
			$s->setAliRep("GRTPLHAAVSADAQGVFQILLRnRATDLDAR");
			$s->setConsensus("1951;1952;1953;1954;1955;1956;1957;1958;1959;1960;1961;1962;1963;1964;1965;1966;1967;1968;1969;1970;1971;1972;1974;1975;1976;1977;1978;1979;1980;1981;");
			$s->setInsertions(";n;23");
			$manager->persist($s);
	
			//-533-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q01705"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(19.4);
			$s->setBias(0.1);
			$s->setCEValue(4.2e-08);
			$s->setIEValue(4.2e-08);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(1984);
			$s->setAliTo(2016);
			$s->setEnvFrom(1984);
			$s->setEnvTo(2016);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGTTPLILAARLAVEGMLEDLINSHADVNAVDD");
			$s->setConsensus("1984;1985;1986;1987;1988;1989;1990;1991;1992;1993;1994;1995;1996;1997;1998;1999;2000;2001;2002;2003;2004;2005;2006;2007;2008;2009;2010;2011;2012;2013;2014;2015;2016;");
			$manager->persist($s);
	
			//-534-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q01705"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(21.4);
			$s->setBias(0.3);
			$s->setCEValue(9.8e-09);
			$s->setIEValue(9.8e-09);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(2018);
			$s->setAliTo(2049);
			$s->setEnvFrom(2017);
			$s->setEnvTo(2049);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GKSALHWAAAVNNVDAAVVLLKNGANKDMQNN");
			$s->setConsensus("2018;2019;2020;2021;2022;2023;2024;2025;2026;2027;2028;2029;2030;2031;2032;2033;2034;2035;2036;2037;2038;2039;2040;2041;2042;2043;2044;2045;2046;2047;2048;2049;");
			$manager->persist($s);
	
			//-535-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q01705"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(19.5);
			$s->setBias(0);
			$s->setCEValue(3.8e-08);
			$s->setIEValue(3.8e-08);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(2052);
			$s->setAliTo(2081);
			$s->setEnvFrom(2050);
			$s->setEnvTo(2082);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("ETPLFLAAREGSYETAKVLLDHFANRDITD");
			$s->setConsensus("2052;2053;2054;2055;2056;2057;2058;2059;2060;2061;2062;2063;2064;2065;2066;2067;2068;2069;2070;2071;2072;2073;2074;2075;2076;2077;2078;2079;2080;2081;");
			$manager->persist($s);
	
			//-536-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q01705"));
			$s->setPfamRepeat(7);
			$s->setStatus("?");
			$s->setScore(-3.3);
			$s->setBias(0);
			$s->setCEValue(0.67);
			$s->setIEValue(0.67);
			$s->setHmmFrom(11);
			$s->setHmmTo(21);
			$s->setAliFrom(2093);
			$s->setAliTo(2103);
			$s->setEnvFrom(2088);
			$s->setEnvTo(2103);
			$s->setAliHmm("lrgnlevvklL");
			$s->setAliRep("ERMHHDIVRLL");
			$s->setConsensus("2093;2094;2095;2096;2097;2098;2099;2100;2101;2102;2103;");
			$manager->persist($s);
	
			//-537-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q05823"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(12.3);
			$s->setBias(0);
			$s->setCEValue(7.2e-06);
			$s->setIEValue(7.2e-06);
			$s->setHmmFrom(5);
			$s->setHmmTo(31);
			$s->setAliFrom(28);
			$s->setAliTo(54);
			$s->setEnvFrom(24);
			$s->setEnvTo(56);
			$s->setAliHmm("PLHlAalrgnlevvklLlsqGAdlnaq");
			$s->setAliRep("LLIKAVQNEDVDLVQQLLEGGANVNFQ");
			$s->setConsensus("28;29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;");
			$manager->persist($s);
	
			//-538-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q05823"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(30.4);
			$s->setBias(0);
			$s->setCEValue(1.4e-11);
			$s->setIEValue(1.4e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(28);
			$s->setAliFrom(59);
			$s->setAliTo(85);
			$s->setEnvFrom(58);
			$s->setEnvTo(88);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdl");
			$s->setAliRep("GWTPLHNAVQMSREDIVELLLRHGADP");
			$s->setConsensus("59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;");
			$manager->persist($s);
	
			//-539-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q05823"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(23.8);
			$s->setBias(0);
			$s->setCEValue(1.7e-09);
			$s->setIEValue(1.7e-09);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(91);
			$s->setAliTo(122);
			$s->setEnvFrom(91);
			$s->setEnvTo(123);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NGATPFILAAIAGSVKLLKLFLSKGADVNECD");
			$s->setConsensus("91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;");
			$manager->persist($s);
	
			//-540-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q05823"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(20.7);
			$s->setBias(0);
			$s->setCEValue(1.7e-08);
			$s->setIEValue(1.7e-08);
			$s->setHmmFrom(1);
			$s->setHmmTo(31);
			$s->setAliFrom(124);
			$s->setAliTo(154);
			$s->setEnvFrom(124);
			$s->setEnvTo(156);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaq");
			$s->setAliRep("YGFTAFMEAAVYGKVKALKFLYKRGANVNLR");
			$s->setConsensus("124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;");
			$manager->persist($s);
	
			//-541-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q05823"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(30.4);
			$s->setBias(0.1);
			$s->setCEValue(1.4e-11);
			$s->setIEValue(1.4e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(168);
			$s->setAliTo(200);
			$s->setEnvFrom(167);
			$s->setEnvTo(200);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls.qGAdlnaqdd");
			$s->setAliRep("GATALMDAAEKGHVEVLKILLDeMGADVNACDN");
			$s->setConsensus("168;169;170;171;172;173;174;175;176;177;178;179;180;181;182;183;184;185;186;187;188;189;191;192;193;194;195;196;197;198;199;200;");
			$s->setInsertions(";e;23");
			$manager->persist($s);
	
			//-542-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q05823"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(12);
			$s->setBias(0.1);
			$s->setCEValue(9.2e-06);
			$s->setIEValue(9.2e-06);
			$s->setHmmFrom(2);
			$s->setHmmTo(31);
			$s->setAliFrom(202);
			$s->setAliTo(235);
			$s->setEnvFrom(201);
			$s->setEnvTo(237);
			$s->setAliHmm("GfTPLHlAalrg....nlevvklLlsqGAdlnaq");
			$s->setAliRep("GRNALIHALLSSddsdVEAITHLLLDHGADVNVR");
			$s->setConsensus("202;203;204;205;206;207;208;209;210;211;212;213;218;219;220;221;222;223;224;225;226;227;228;229;230;231;232;233;234;235;");
			$s->setInsertions(";d;13;d;13;s;13;d;13");
			$manager->persist($s);
	
			//-543-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q05823"));
			$s->setPfamRepeat(7);
			$s->setStatus("!");
			$s->setScore(13.7);
			$s->setBias(0);
			$s->setCEValue(2.6e-06);
			$s->setIEValue(2.6e-06);
			$s->setHmmFrom(2);
			$s->setHmmTo(24);
			$s->setAliFrom(239);
			$s->setAliTo(261);
			$s->setEnvFrom(238);
			$s->setEnvTo(270);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsq");
			$s->setAliRep("GKTPLILAVEKKHLGLVQRLLEQ");
			$s->setConsensus("239;240;241;242;243;244;245;246;247;248;249;250;251;252;253;254;255;256;257;258;259;260;261;");
			$manager->persist($s);
	
			//-544-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q05823"));
			$s->setPfamRepeat(8);
			$s->setStatus("!");
			$s->setScore(16.3);
			$s->setBias(0);
			$s->setCEValue(3.9e-07);
			$s->setIEValue(3.9e-07);
			$s->setHmmFrom(1);
			$s->setHmmTo(30);
			$s->setAliFrom(272);
			$s->setAliTo(301);
			$s->setEnvFrom(272);
			$s->setEnvTo(304);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlna");
			$s->setAliRep("DGKTALLLAVELKLKKIAELLCKRGASTDC");
			$s->setConsensus("272;273;274;275;276;277;278;279;280;281;282;283;284;285;286;287;288;289;290;291;292;293;294;295;296;297;298;299;300;301;");
			$manager->persist($s);
	
			//-545-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q05823"));
			$s->setPfamRepeat(9);
			$s->setStatus("!");
			$s->setScore(5.8);
			$s->setBias(0);
			$s->setCEValue(0.00087);
			$s->setIEValue(0.00087);
			$s->setHmmFrom(10);
			$s->setHmmTo(26);
			$s->setAliFrom(308);
			$s->setAliTo(325);
			$s->setEnvFrom(304);
			$s->setEnvTo(328);
			$s->setAliHmm("alrg.nlevvklLlsqGA");
			$s->setAliRep("ARRNyDHSLVKVLLSHGA");
			$s->setConsensus("308;309;310;311;313;314;315;316;317;318;319;320;321;322;323;324;325;");
			$s->setInsertions(";y;5");
			$manager->persist($s);
	
			//-546-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q13418"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(32.6);
			$s->setBias(0);
			$s->setCEValue(2.8e-12);
			$s->setIEValue(2.8e-12);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(33);
			$s->setAliTo(64);
			$s->setEnvFrom(33);
			$s->setEnvTo(65);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("HGFSPLHWACREGRSAVVEMLIMRGARINVMN");
			$s->setConsensus("33;34;35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;");
			$manager->persist($s);
	
			//-547-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q13418"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(38.5);
			$s->setBias(0.1);
			$s->setCEValue(3.7e-14);
			$s->setIEValue(3.7e-14);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(68);
			$s->setAliTo(97);
			$s->setEnvFrom(67);
			$s->setEnvTo(98);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("DTPLHLAASHGHRDIVQKLLQYKADINAVN");
			$s->setConsensus("68;69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;");
			$manager->persist($s);
	
			//-548-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q13418"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(27.7);
			$s->setBias(0);
			$s->setCEValue(9.8e-11);
			$s->setIEValue(9.8e-11);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(99);
			$s->setAliTo(131);
			$s->setEnvFrom(99);
			$s->setEnvTo(131);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("HGNVPLHYACFWGQDQVAEDLVANGALVSICNK");
			$s->setConsensus("99;100;101;102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;");
			$manager->persist($s);
	
			//-549-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q13625"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(34.4);
			$s->setBias(0);
			$s->setCEValue(7.6e-13);
			$s->setIEValue(7.6e-13);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(959);
			$s->setAliTo(989);
			$s->setEnvFrom(958);
			$s->setEnvTo(990);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GITALHNAVCAGHTEIVKFLVQFGVNVNAAD");
			$s->setConsensus("959;960;961;962;963;964;965;966;967;968;969;970;971;972;973;974;975;976;977;978;979;980;981;982;983;984;985;986;987;988;989;");
			$manager->persist($s);
	
			//-550-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q13625"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(34.4);
			$s->setBias(0);
			$s->setCEValue(7.3e-13);
			$s->setIEValue(7.3e-13);
			$s->setHmmFrom(1);
			$s->setHmmTo(30);
			$s->setAliFrom(991);
			$s->setAliTo(1020);
			$s->setEnvFrom(991);
			$s->setEnvTo(1023);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlna");
			$s->setAliRep("DGWTPLHCAASCNNVQVCKFLVESGAAVFA");
			$s->setConsensus("991;992;993;994;995;996;997;998;999;1000;1001;1002;1003;1004;1005;1006;1007;1008;1009;1010;1011;1012;1013;1014;1015;1016;1017;1018;1019;1020;");
			$manager->persist($s);
	
			//-551-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q15027"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(0.3);
			$s->setBias(0);
			$s->setCEValue(0.048);
			$s->setIEValue(0.048);
			$s->setHmmFrom(22);
			$s->setHmmTo(29);
			$s->setAliFrom(592);
			$s->setAliTo(599);
			$s->setEnvFrom(584);
			$s->setEnvTo(602);
			$s->setAliHmm("lsqGAdln");
			$s->setAliRep("LAHGADVN");
			$s->setConsensus("592;593;594;595;596;597;598;599;");
			$manager->persist($s);
	
			//-552-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q15027"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(19.1);
			$s->setBias(0.2);
			$s->setCEValue(5.1e-08);
			$s->setIEValue(5.1e-08);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(607);
			$s->setAliTo(637);
			$s->setEnvFrom(606);
			$s->setEnvTo(638);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NATPLIQATAANSLLACEFLLQNGANVNQAD");
			$s->setConsensus("607;608;609;610;611;612;613;614;615;616;617;618;619;620;621;622;623;624;625;626;627;628;629;630;631;632;633;634;635;636;637;");
			$manager->persist($s);
	
			//-553-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q15027"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(20.1);
			$s->setBias(0.1);
			$s->setCEValue(2.5e-08);
			$s->setIEValue(2.5e-08);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(640);
			$s->setAliTo(670);
			$s->setEnvFrom(639);
			$s->setEnvTo(671);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GRGPLHHATILGHTGLACLFLKRGADLGARD");
			$s->setConsensus("640;641;642;643;644;645;646;647;648;649;650;651;652;653;654;655;656;657;658;659;660;661;662;663;664;665;666;667;668;669;670;");
			$manager->persist($s);
	
			//-554-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q15027"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(3.9);
			$s->setBias(0);
			$s->setCEValue(0.0033);
			$s->setIEValue(0.0033);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(673);
			$s->setAliTo(692);
			$s->setEnvFrom(672);
			$s->setEnvTo(693);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GRDPLTIAMETANADIVTLL");
			$s->setConsensus("673;674;675;676;677;678;679;680;681;682;683;684;685;686;687;688;689;690;691;692;");
			$manager->persist($s);
	
			//-555-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q53F80"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(28.9);
			$s->setBias(0);
			$s->setCEValue(4e-11);
			$s->setIEValue(4e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(428);
			$s->setAliTo(458);
			$s->setEnvFrom(427);
			$s->setEnvTo(459);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GETLLHIASIKGDIPSVEYLLQNGSDPNVKD");
			$s->setConsensus("428;429;430;431;432;433;434;435;436;437;438;439;440;441;442;443;444;445;446;447;448;449;450;451;452;453;454;455;456;457;458;");
			$manager->persist($s);
	
			//-556-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q53F80"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(33.8);
			$s->setBias(0.2);
			$s->setCEValue(1.1e-12);
			$s->setIEValue(1.1e-12);
			$s->setHmmFrom(2);
			$s->setHmmTo(29);
			$s->setAliFrom(461);
			$s->setAliTo(488);
			$s->setEnvFrom(460);
			$s->setEnvTo(491);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdln");
			$s->setAliRep("GWTPLHEACNHGHLKVVELLLQHKALVN");
			$s->setConsensus("461;462;463;464;465;466;467;468;469;470;471;472;473;474;475;476;477;478;479;480;481;482;483;484;485;486;487;488;");
			$manager->persist($s);
	
			//-557-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q53F80"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(35.9);
			$s->setBias(0.1);
			$s->setCEValue(2.5e-13);
			$s->setIEValue(2.5e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(495);
			$s->setAliTo(524);
			$s->setEnvFrom(493);
			$s->setEnvTo(525);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("DSPLHDAAKNGHVDIVKLLLSYGASRNAVN");
			$s->setConsensus("495;496;497;498;499;500;501;502;503;504;505;506;507;508;509;510;511;512;513;514;515;516;517;518;519;520;521;522;523;524;");
			$manager->persist($s);
	
			//-558-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q5ZSV0"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(3.4);
			$s->setBias(0);
			$s->setCEValue(0.0049);
			$s->setIEValue(0.0049);
			$s->setHmmFrom(8);
			$s->setHmmTo(23);
			$s->setAliFrom(134);
			$s->setAliTo(149);
			$s->setEnvFrom(131);
			$s->setEnvTo(157);
			$s->setAliHmm("lAalrgnlevvklLls");
			$s->setAliRep("LAAENGHLHVLNRLCE");
			$s->setConsensus("134;135;136;137;138;139;140;141;142;143;144;145;146;147;148;149;");
			$manager->persist($s);
	
			//-559-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q5ZSV0"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(3.5);
			$s->setBias(0);
			$s->setCEValue(0.0046);
			$s->setIEValue(0.0046);
			$s->setHmmFrom(8);
			$s->setHmmTo(23);
			$s->setAliFrom(169);
			$s->setAliTo(184);
			$s->setEnvFrom(163);
			$s->setEnvTo(189);
			$s->setAliHmm("lAalrgnlevvklLls");
			$s->setAliRep("LAAENGHLHVLNRLCE");
			$s->setConsensus("169;170;171;172;173;174;175;176;177;178;179;180;181;182;183;184;");
			$manager->persist($s);
	
			//-560-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q5ZSV0"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(8.8);
			$s->setBias(0);
			$s->setCEValue(9.5e-05);
			$s->setIEValue(9.5e-05);
			$s->setHmmFrom(9);
			$s->setHmmTo(24);
			$s->setAliFrom(206);
			$s->setAliTo(221);
			$s->setEnvFrom(204);
			$s->setEnvTo(226);
			$s->setAliHmm("AalrgnlevvklLlsq");
			$s->setAliRep("AVGRGHHNVINFLLDC");
			$s->setConsensus("206;207;208;209;210;211;212;213;214;215;216;217;218;219;220;221;");
			$manager->persist($s);
	
			//-561-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q5ZSV0"));
			$s->setPfamRepeat(4);
			$s->setStatus("?");
			$s->setScore(-1.4);
			$s->setBias(0.2);
			$s->setCEValue(0.17);
			$s->setIEValue(0.17);
			$s->setHmmFrom(8);
			$s->setHmmTo(23);
			$s->setAliFrom(325);
			$s->setAliTo(340);
			$s->setEnvFrom(322);
			$s->setEnvTo(348);
			$s->setAliHmm("lAalrgnlevvklLls");
			$s->setAliRep("LALRLGNQGACALLLS");
			$s->setConsensus("325;326;327;328;329;330;331;332;333;334;335;336;337;338;339;340;");
			$manager->persist($s);
	
			//-562-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q60773"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(0.5);
			$s->setBias(0);
			$s->setCEValue(0.039);
			$s->setIEValue(0.039);
			$s->setHmmFrom(9);
			$s->setHmmTo(23);
			$s->setAliFrom(15);
			$s->setAliTo(29);
			$s->setEnvFrom(14);
			$s->setEnvTo(39);
			$s->setAliHmm("AalrgnlevvklLls");
			$s->setAliRep("AAARGDVQEVRRLLH");
			$s->setConsensus("15;16;17;18;19;20;21;22;23;24;25;26;27;28;29;");
			$manager->persist($s);
	
			//-563-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q60773"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(15.4);
			$s->setBias(0);
			$s->setCEValue(8e-07);
			$s->setIEValue(8e-07);
			$s->setHmmFrom(10);
			$s->setHmmTo(32);
			$s->setAliFrom(49);
			$s->setAliTo(71);
			$s->setEnvFrom(41);
			$s->setEnvTo(72);
			$s->setAliHmm("alrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("MMFGSPAVALELLKQGASPNVQD");
			$s->setConsensus("49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;");
			$manager->persist($s);
	
			//-564-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q60773"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(26.6);
			$s->setBias(0);
			$s->setCEValue(2.2e-10);
			$s->setIEValue(2.2e-10);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(74);
			$s->setAliTo(104);
			$s->setEnvFrom(73);
			$s->setEnvTo(105);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GTSPVHDAARTGFLDTLKVLVEHGADVNALD");
			$s->setConsensus("74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;");
			$manager->persist($s);
	
			//-565-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q60773"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(13.5);
			$s->setBias(0);
			$s->setCEValue(3.1e-06);
			$s->setIEValue(3.1e-06);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(107);
			$s->setAliTo(126);
			$s->setEnvFrom(106);
			$s->setEnvTo(127);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GSLPIHLAIREGHSSVVSFL");
			$s->setConsensus("107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;");
			$manager->persist($s);
	
			//-566-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q60773"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(3);
			$s->setBias(0);
			$s->setCEValue(0.0065);
			$s->setIEValue(0.0065);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(139);
			$s->setAliTo(158);
			$s->setEnvFrom(138);
			$s->setEnvTo(162);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GLTPLELARQRGAQNLMDIL");
			$s->setConsensus("139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;157;158;");
			$manager->persist($s);
	
			//-567-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q60778"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(18.2);
			$s->setBias(0);
			$s->setCEValue(9.8e-08);
			$s->setIEValue(9.8e-08);
			$s->setHmmFrom(1);
			$s->setHmmTo(26);
			$s->setAliFrom(57);
			$s->setAliTo(82);
			$s->setEnvFrom(57);
			$s->setEnvTo(87);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGA");
			$s->setAliRep("DGDTALHLAVIHQHEPFLDFLLGFSA");
			$s->setConsensus("57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;78;79;80;81;82;");
			$manager->persist($s);
	
			//-568-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q60778"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(17.4);
			$s->setBias(0.2);
			$s->setCEValue(1.8e-07);
			$s->setIEValue(1.8e-07);
			$s->setHmmFrom(2);
			$s->setHmmTo(28);
			$s->setAliFrom(94);
			$s->setAliTo(120);
			$s->setEnvFrom(93);
			$s->setEnvTo(123);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdl");
			$s->setAliRep("GQTALHLAAILGEASTVEKLYAAGAGV");
			$s->setConsensus("94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;");
			$manager->persist($s);
	
			//-569-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q60778"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(11.5);
			$s->setBias(0.1);
			$s->setCEValue(1.3e-05);
			$s->setIEValue(1.3e-05);
			$s->setHmmFrom(2);
			$s->setHmmTo(23);
			$s->setAliFrom(127);
			$s->setAliTo(148);
			$s->setEnvFrom(126);
			$s->setEnvTo(156);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls");
			$s->setAliRep("GHTALHLACRVRAHTCACVLLQ");
			$s->setConsensus("127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;145;146;147;148;");
			$manager->persist($s);
	
			//-570-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q60778"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(34.2);
			$s->setBias(0);
			$s->setCEValue(8.4e-13);
			$s->setIEValue(8.4e-13);
			$s->setHmmFrom(1);
			$s->setHmmTo(30);
			$s->setAliFrom(206);
			$s->setAliTo(235);
			$s->setEnvFrom(206);
			$s->setEnvTo(237);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlna");
			$s->setAliRep("DGHTPLHVAVIHKDAEMVRLLRDAGADLNK");
			$s->setConsensus("206;207;208;209;210;211;212;213;214;215;216;217;218;219;220;221;222;223;224;225;226;227;228;229;230;231;232;233;234;235;");
			$manager->persist($s);
	
			//-571-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q60778"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(34.5);
			$s->setBias(0);
			$s->setCEValue(6.9e-13);
			$s->setIEValue(6.9e-13);
			$s->setHmmFrom(1);
			$s->setHmmTo(31);
			$s->setAliFrom(240);
			$s->setAliTo(270);
			$s->setEnvFrom(240);
			$s->setEnvTo(272);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaq");
			$s->setAliRep("CGRTPLHLAVEAQAASVLELLLKAGADPTAR");
			$s->setConsensus("240;241;242;243;244;245;246;247;248;249;250;251;252;253;254;255;256;257;258;259;260;261;262;263;264;265;266;267;268;269;270;");
			$manager->persist($s);
	
			//-572-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q60778"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(2.9);
			$s->setBias(0);
			$s->setCEValue(0.0071);
			$s->setIEValue(0.0071);
			$s->setHmmFrom(2);
			$s->setHmmTo(26);
			$s->setAliFrom(274);
			$s->setAliTo(298);
			$s->setEnvFrom(273);
			$s->setEnvTo(299);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGA");
			$s->setAliRep("GRTPLGSALLRPNPILARLLRAHGA");
			$s->setConsensus("274;275;276;277;278;279;280;281;282;283;284;285;286;287;288;289;290;291;292;293;294;295;296;297;298;");
			$manager->persist($s);
	
			//-573-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6IV60"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(6.6);
			$s->setBias(0.3);
			$s->setCEValue(0.00049);
			$s->setIEValue(0.00049);
			$s->setHmmFrom(2);
			$s->setHmmTo(30);
			$s->setAliFrom(30);
			$s->setAliTo(58);
			$s->setEnvFrom(29);
			$s->setEnvTo(61);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlna");
			$s->setAliRep("GHSASYYAIADNNVRLVCTLLNAGALKNL");
			$s->setConsensus("30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;");
			$manager->persist($s);
	
			//-574-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6IV60"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(9.4);
			$s->setBias(0);
			$s->setCEValue(6e-05);
			$s->setIEValue(6e-05);
			$s->setHmmFrom(5);
			$s->setHmmTo(22);
			$s->setAliFrom(64);
			$s->setAliTo(81);
			$s->setEnvFrom(60);
			$s->setEnvTo(92);
			$s->setAliHmm("PLHlAalrgnlevvklLl");
			$s->setAliRep("PLHQAATLEDTKIVKILL");
			$s->setConsensus("64;65;66;67;68;69;70;71;72;73;74;75;76;77;78;79;80;81;");
			$manager->persist($s);
	
			//-575-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6IV60"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(17.7);
			$s->setBias(0);
			$s->setCEValue(1.4e-07);
			$s->setIEValue(1.4e-07);
			$s->setHmmFrom(2);
			$s->setHmmTo(24);
			$s->setAliFrom(94);
			$s->setAliTo(116);
			$s->setEnvFrom(93);
			$s->setEnvTo(119);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsq");
			$s->setAliRep("GNTALYYAVDSGNMQTVKLFVKK");
			$s->setConsensus("94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;");
			$manager->persist($s);
	
			//-576-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6IV60"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(3.3);
			$s->setBias(0);
			$s->setCEValue(0.0054);
			$s->setIEValue(0.0054);
			$s->setHmmFrom(6);
			$s->setHmmTo(23);
			$s->setAliFrom(132);
			$s->setAliTo(149);
			$s->setEnvFrom(129);
			$s->setEnvTo(152);
			$s->setAliHmm("LHlAalrgnlevvklLls");
			$s->setAliRep("FYHAVMLNDVSIVSYFLS");
			$s->setConsensus("132;133;134;135;136;137;138;139;140;141;142;143;144;145;146;147;148;149;");
			$manager->persist($s);
	
			//-577-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6IV60"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(9.8);
			$s->setBias(0.1);
			$s->setCEValue(4.8e-05);
			$s->setIEValue(4.8e-05);
			$s->setHmmFrom(5);
			$s->setHmmTo(29);
			$s->setAliFrom(163);
			$s->setAliTo(187);
			$s->setEnvFrom(161);
			$s->setEnvTo(191);
			$s->setAliHmm("PLHlAalrgnlevvklLlsqGAdln");
			$s->setAliRep("CIHITIKNGHVDMMILLLDYMTSTN");
			$s->setConsensus("163;164;165;166;167;168;169;170;171;172;173;174;175;176;177;178;179;180;181;182;183;184;185;186;187;");
			$manager->persist($s);
	
			//-578-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6IV60"));
			$s->setPfamRepeat(6);
			$s->setStatus("?");
			$s->setScore(-0.3);
			$s->setBias(0);
			$s->setCEValue(0.074);
			$s->setIEValue(0.074);
			$s->setHmmFrom(13);
			$s->setHmmTo(22);
			$s->setAliFrom(231);
			$s->setAliTo(240);
			$s->setEnvFrom(200);
			$s->setEnvTo(244);
			$s->setAliHmm("gnlevvklLl");
			$s->setAliRep("DDAEIAKMII");
			$s->setConsensus("231;232;233;234;235;236;237;238;239;240;");
			$manager->persist($s);
	
			//-579-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6PFX9"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(6.7);
			$s->setBias(0.1);
			$s->setCEValue(0.00045);
			$s->setIEValue(0.00045);
			$s->setHmmFrom(7);
			$s->setHmmTo(32);
			$s->setAliFrom(180);
			$s->setAliTo(204);
			$s->setEnvFrom(179);
			$s->setEnvTo(205);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("LEACRNGDVSRVKRLVD-AANVNAKD");
			$s->setConsensus("180;181;182;183;184;185;186;187;188;189;190;191;192;193;194;195;196;-;198;199;200;201;202;203;204;205;");
			$s->setDeletions(";q;18");
			$manager->persist($s);
	
			//-580-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6PFX9"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(27.2);
			$s->setBias(0);
			$s->setCEValue(1.5e-10);
			$s->setIEValue(1.5e-10);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(211);
			$s->setAliTo(240);
			$s->setEnvFrom(209);
			$s->setEnvTo(240);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("SPLHFAAGFGRKDVVEHLLQMGANVHARDD");
			$s->setConsensus("211;212;213;214;215;216;217;218;219;220;221;222;223;224;225;226;227;228;229;230;231;232;233;234;235;236;237;238;239;240;");
			$manager->persist($s);
	
			//-581-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6PFX9"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(36.9);
			$s->setBias(0.1);
			$s->setCEValue(1.2e-13);
			$s->setIEValue(1.2e-13);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(242);
			$s->setAliTo(273);
			$s->setEnvFrom(241);
			$s->setEnvTo(273);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GLIPLHNACSFGHAEVVSLLLCQGADPNARDN");
			$s->setConsensus("242;243;244;245;246;247;248;249;250;251;252;253;254;255;256;257;258;259;260;261;262;263;264;265;266;267;268;269;270;271;272;273;");
			$manager->persist($s);
	
			//-582-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6PFX9"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(33.5);
			$s->setBias(0);
			$s->setCEValue(1.4e-12);
			$s->setIEValue(1.4e-12);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(276);
			$s->setAliTo(305);
			$s->setEnvFrom(274);
			$s->setEnvTo(306);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("YTPLHEAAIKGKIDVCIVLLQHGADPNIRN");
			$s->setConsensus("276;277;278;279;280;281;282;283;284;285;286;287;288;289;290;291;292;293;294;295;296;297;298;299;300;301;302;303;304;305;");
			$manager->persist($s);
	
			//-583-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6PFX9"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(38.2);
			$s->setBias(0);
			$s->setCEValue(4.6e-14);
			$s->setIEValue(4.6e-14);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(364);
			$s->setAliTo(393);
			$s->setEnvFrom(362);
			$s->setEnvTo(393);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHLAAGYNRVRIVQLLLQHGADVHAKDK");
			$s->setConsensus("364;365;366;367;368;369;370;371;372;373;374;375;376;377;378;379;380;381;382;383;384;385;386;387;388;389;390;391;392;393;");
			$manager->persist($s);
	
			//-584-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6PFX9"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(31.3);
			$s->setBias(0.2);
			$s->setCEValue(7.2e-12);
			$s->setIEValue(7.2e-12);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(395);
			$s->setAliTo(425);
			$s->setEnvFrom(394);
			$s->setEnvTo(426);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLVPLHNACSYGHYEVTELLLKHGACVNAMD");
			$s->setConsensus("395;396;397;398;399;400;401;402;403;404;405;406;407;408;409;410;411;412;413;414;415;416;417;418;419;420;421;422;423;424;425;");
			$manager->persist($s);
	
			//-585-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6PFX9"));
			$s->setPfamRepeat(7);
			$s->setStatus("!");
			$s->setScore(34.4);
			$s->setBias(0);
			$s->setCEValue(7.1e-13);
			$s->setIEValue(7.1e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(429);
			$s->setAliTo(458);
			$s->setEnvFrom(427);
			$s->setEnvTo(459);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("FTPLHEAASKNRVEVCSLLLSHGADPTLVN");
			$s->setConsensus("429;430;431;432;433;434;435;436;437;438;439;440;441;442;443;444;445;446;447;448;449;450;451;452;453;454;455;456;457;458;");
			$manager->persist($s);
	
			//-586-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6PFX9"));
			$s->setPfamRepeat(8);
			$s->setStatus("!");
			$s->setScore(22.5);
			$s->setBias(0);
			$s->setCEValue(4.2e-09);
			$s->setIEValue(4.2e-09);
			$s->setHmmFrom(3);
			$s->setHmmTo(33);
			$s->setAliFrom(516);
			$s->setAliTo(549);
			$s->setEnvFrom(514);
			$s->setEnvTo(549);
			$s->setAliHmm("fTPLHlAalrg...nlevvklLlsqGAdlnaqdd");
			$s->setAliRep("ETALHCAVASLhpkRKQVAELLLRKGANVNEKNK");
			$s->setConsensus("516;517;518;519;520;521;522;523;524;525;526;530;531;532;533;534;535;536;537;538;539;540;541;542;543;544;545;546;547;548;549;");
			$s->setInsertions(";h;12;p;12;k;12");
			$manager->persist($s);
	
			//-587-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6PFX9"));
			$s->setPfamRepeat(9);
			$s->setStatus("!");
			$s->setScore(25.4);
			$s->setBias(0.1);
			$s->setCEValue(5.4e-10);
			$s->setIEValue(5.4e-10);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(552);
			$s->setAliTo(581);
			$s->setEnvFrom(550);
			$s->setEnvTo(582);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("MTPLHVAAERAHNDVMEVLHKHGAKMNALD");
			$s->setConsensus("552;553;554;555;556;557;558;559;560;561;562;563;564;565;566;567;568;569;570;571;572;573;574;575;576;577;578;579;580;581;");
			$manager->persist($s);
	
			//-588-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6PFX9"));
			$s->setPfamRepeat(10);
			$s->setStatus("!");
			$s->setScore(28.3);
			$s->setBias(0.1);
			$s->setCEValue(6.5e-11);
			$s->setIEValue(6.5e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(30);
			$s->setAliFrom(584);
			$s->setAliTo(612);
			$s->setEnvFrom(583);
			$s->setEnvTo(614);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlna");
			$s->setAliRep("GQTALHRAALAGHLQTCRLLLSYGSDPSI");
			$s->setConsensus("584;585;586;587;588;589;590;591;592;593;594;595;596;597;598;599;600;601;602;603;604;605;606;607;608;609;610;611;612;");
			$manager->persist($s);
	
			//-589-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6PFX9"));
			$s->setPfamRepeat(11);
			$s->setStatus("!");
			$s->setScore(2.7);
			$s->setBias(0);
			$s->setCEValue(0.0083);
			$s->setIEValue(0.0083);
			$s->setHmmFrom(7);
			$s->setHmmTo(32);
			$s->setAliFrom(648);
			$s->setAliTo(672);
			$s->setEnvFrom(646);
			$s->setEnvTo(673);
			$s->setAliHmm("HlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("LEASKAGDLETVKQLCS-PQNVNCRD");
			$s->setConsensus("648;649;650;651;652;653;654;655;656;657;658;659;660;661;662;663;664;-;666;667;668;669;670;671;672;673;");
			$s->setDeletions(";q;18");
			$manager->persist($s);
	
			//-590-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6PFX9"));
			$s->setPfamRepeat(12);
			$s->setStatus("!");
			$s->setScore(35.1);
			$s->setBias(0);
			$s->setCEValue(4.5e-13);
			$s->setIEValue(4.5e-13);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(679);
			$s->setAliTo(708);
			$s->setEnvFrom(677);
			$s->setEnvTo(708);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHFAAGYNRVSVVEYLLHHGADVHAKDK");
			$s->setConsensus("679;680;681;682;683;684;685;686;687;688;689;690;691;692;693;694;695;696;697;698;699;700;701;702;703;704;705;706;707;708;");
			$manager->persist($s);
	
			//-591-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6PFX9"));
			$s->setPfamRepeat(13);
			$s->setStatus("!");
			$s->setScore(30.3);
			$s->setBias(0.1);
			$s->setCEValue(1.4e-11);
			$s->setIEValue(1.4e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(710);
			$s->setAliTo(740);
			$s->setEnvFrom(709);
			$s->setEnvTo(741);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLVPLHNACSYGHYEVAELLVRHGASVNVAD");
			$s->setConsensus("710;711;712;713;714;715;716;717;718;719;720;721;722;723;724;725;726;727;728;729;730;731;732;733;734;735;736;737;738;739;740;");
			$manager->persist($s);
	
			//-592-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6PFX9"));
			$s->setPfamRepeat(14);
			$s->setStatus("!");
			$s->setScore(33.7);
			$s->setBias(0);
			$s->setCEValue(1.2e-12);
			$s->setIEValue(1.2e-12);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(744);
			$s->setAliTo(773);
			$s->setEnvFrom(742);
			$s->setEnvTo(774);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("FTPLHEAAAKGKYEICKLLLKHGADPTKKN");
			$s->setConsensus("744;745;746;747;748;749;750;751;752;753;754;755;756;757;758;759;760;761;762;763;764;765;766;767;768;769;770;771;772;773;");
			$manager->persist($s);
	
			//-593-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6PFX9"));
			$s->setPfamRepeat(15);
			$s->setStatus("?");
			$s->setScore(0.8);
			$s->setBias(0);
			$s->setCEValue(0.032);
			$s->setIEValue(0.032);
			$s->setHmmFrom(1);
			$s->setHmmTo(17);
			$s->setAliFrom(775);
			$s->setAliTo(790);
			$s->setEnvFrom(775);
			$s->setEnvTo(804);
			$s->setAliHmm("dGfTPLHlAalrgnlev");
			$s->setAliRep("DGNTPLDL-VKEGDTDI");
			$s->setConsensus("775;776;777;778;779;780;781;782;-;784;785;786;787;788;789;790;791;");
			$s->setDeletions(";A;9");
			$manager->persist($s);
	
			//-594-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6PFX9"));
			$s->setPfamRepeat(16);
			$s->setStatus("!");
			$s->setScore(44.1);
			$s->setBias(0.1);
			$s->setCEValue(6.4e-16);
			$s->setIEValue(6.4e-16);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(832);
			$s->setAliTo(861);
			$s->setEnvFrom(829);
			$s->setEnvTo(861);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHLAAGYNNLEVAEYLLEHGADVNAQDK");
			$s->setConsensus("832;833;834;835;836;837;838;839;840;841;842;843;844;845;846;847;848;849;850;851;852;853;854;855;856;857;858;859;860;861;");
			$manager->persist($s);
	
			//-595-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6PFX9"));
			$s->setPfamRepeat(17);
			$s->setStatus("!");
			$s->setScore(24.3);
			$s->setBias(0.2);
			$s->setCEValue(1.1e-09);
			$s->setIEValue(1.1e-09);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(863);
			$s->setAliTo(894);
			$s->setEnvFrom(862);
			$s->setEnvTo(894);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GLIPLHNAASYGHVDIAALLIKYNTCVNATDK");
			$s->setConsensus("863;864;865;866;867;868;869;870;871;872;873;874;875;876;877;878;879;880;881;882;883;884;885;886;887;888;889;890;891;892;893;894;");
			$manager->persist($s);
	
			//-596-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6PFX9"));
			$s->setPfamRepeat(18);
			$s->setStatus("!");
			$s->setScore(29.1);
			$s->setBias(0);
			$s->setCEValue(3.6e-11);
			$s->setIEValue(3.6e-11);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(897);
			$s->setAliTo(926);
			$s->setEnvFrom(897);
			$s->setEnvTo(927);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("FTPLHEAAQKGRTQLCALLLAHGADPTMKN");
			$s->setConsensus("897;898;899;900;901;902;903;904;905;906;907;908;909;910;911;912;913;914;915;916;917;918;919;920;921;922;923;924;925;926;");
			$manager->persist($s);
	
			//-597-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q6PFX9"));
			$s->setPfamRepeat(19);
			$s->setStatus("?");
			$s->setScore(-0.2);
			$s->setBias(0);
			$s->setCEValue(0.069);
			$s->setIEValue(0.069);
			$s->setHmmFrom(2);
			$s->setHmmTo(9);
			$s->setAliFrom(929);
			$s->setAliTo(936);
			$s->setEnvFrom(928);
			$s->setEnvTo(939);
			$s->setAliHmm("GfTPLHlA");
			$s->setAliRep("GQTPLDLA");
			$s->setConsensus("929;930;931;932;933;934;935;936;");
			$manager->persist($s);
	
			//-598-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q7SIG6"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(14);
			$s->setBias(0);
			$s->setCEValue(2.2e-06);
			$s->setIEValue(2.2e-06);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(589);
			$s->setAliTo(621);
			$s->setEnvFrom(588);
			$s->setEnvTo(622);
			$s->setAliHmm("fTPLHlAalrg...nlevvklLlsqGAdlnaqd");
			$s->setAliRep("ETALHLAVRSVdrtSLHIVDFLVQNSGNLDKQT");
			$s->setConsensus("589;590;591;592;593;594;595;596;597;598;599;603;604;605;606;607;608;609;610;611;612;613;614;615;616;617;618;619;620;621;");
			$s->setInsertions(";d;12;r;12;t;12");
			$manager->persist($s);
	
			//-599-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q7SIG6"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(22.1);
			$s->setBias(0);
			$s->setCEValue(5.8e-09);
			$s->setIEValue(5.8e-09);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(624);
			$s->setAliTo(654);
			$s->setEnvFrom(623);
			$s->setEnvTo(655);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GSTALHYCCLTDNAECLKLLLRGKASIEIAN");
			$s->setConsensus("624;625;626;627;628;629;630;631;632;633;634;635;636;637;638;639;640;641;642;643;644;645;646;647;648;649;650;651;652;653;654;");
			$manager->persist($s);
	
			//-600-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q7SIG6"));
			$s->setPfamRepeat(3);
			$s->setStatus("?");
			$s->setScore(1.1);
			$s->setBias(0);
			$s->setCEValue(0.026);
			$s->setIEValue(0.026);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(657);
			$s->setAliTo(676);
			$s->setEnvFrom(656);
			$s->setEnvTo(680);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GETPLDIAKRLKHEHCEELL");
			$s->setConsensus("657;658;659;660;661;662;663;664;665;666;667;668;669;670;671;672;673;674;675;676;");
			$manager->persist($s);
	
			//-601-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q838Q8"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(38.1);
			$s->setBias(0.1);
			$s->setCEValue(5e-14);
			$s->setIEValue(5e-14);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(39);
			$s->setAliTo(69);
			$s->setEnvFrom(38);
			$s->setEnvTo(70);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GNTPLNIAVHNNDIEIAKALIDRGADINLQN");
			$s->setConsensus("39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;");
			$manager->persist($s);
	
			//-602-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q838Q8"));
			$s->setPfamRepeat(2);
			$s->setStatus("?");
			$s->setScore(0.6);
			$s->setBias(0);
			$s->setCEValue(0.038);
			$s->setIEValue(0.038);
			$s->setHmmFrom(9);
			$s->setHmmTo(31);
			$s->setAliFrom(79);
			$s->setAliTo(102);
			$s->setEnvFrom(73);
			$s->setEnvTo(104);
			$s->setAliHmm("AalrgnlevvklLls.qGAdlnaq");
			$s->setAliRep("AGAQGRTEILAYMLKhATPDLNKH");
			$s->setConsensus("79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;95;96;97;98;99;100;101;102;");
			$s->setInsertions(";h;16");
			$manager->persist($s);
	
			//-603-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q838Q8"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(7.8);
			$s->setBias(0);
			$s->setCEValue(0.0002);
			$s->setIEValue(0.0002);
			$s->setHmmFrom(9);
			$s->setHmmTo(32);
			$s->setAliFrom(113);
			$s->setAliTo(137);
			$s->setEnvFrom(113);
			$s->setEnvTo(138);
			$s->setAliHmm("AalrgnlevvklLls.qGAdlnaqd");
			$s->setAliRep("AAEKGHIDNVKLLLEdGREDIDFQN");
			$s->setConsensus("113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;129;130;131;132;133;134;135;136;137;");
			$s->setInsertions(";d;16");
			$manager->persist($s);
	
			//-604-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q838Q8"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(17.5);
			$s->setBias(0);
			$s->setCEValue(1.6e-07);
			$s->setIEValue(1.6e-07);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(140);
			$s->setAliTo(176);
			$s->setEnvFrom(139);
			$s->setEnvTo(176);
			$s->setAliHmm("GfTPLHlAalrg.....nlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GYTALIEAVGLRegnqlYQDIVKLLMENGADQSIKDN");
			$s->setConsensus("140;141;142;143;144;145;146;147;148;149;150;151;157;158;159;160;161;162;163;164;165;166;167;168;169;170;171;172;173;174;175;176;");
			$s->setInsertions(";e;13;g;13;n;13;q;13;l;13");
			$manager->persist($s);
	
			//-605-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q838Q8"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(-1);
			$s->setBias(0);
			$s->setCEValue(0.12);
			$s->setIEValue(0.12);
			$s->setHmmFrom(2);
			$s->setHmmTo(21);
			$s->setAliFrom(178);
			$s->setAliTo(197);
			$s->setEnvFrom(177);
			$s->setEnvTo(201);
			$s->setAliHmm("GfTPLHlAalrgnlevvklL");
			$s->setAliRep("GRTAMDYANQKGYTEISKIL");
			$s->setConsensus("178;179;180;181;182;183;184;185;186;187;188;189;190;191;192;193;194;195;196;197;");
			$manager->persist($s);
	
			//-606-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8IUH5"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(-1.4);
			$s->setBias(0);
			$s->setCEValue(0.16);
			$s->setIEValue(0.16);
			$s->setHmmFrom(18);
			$s->setHmmTo(32);
			$s->setAliFrom(73);
			$s->setAliTo(87);
			$s->setEnvFrom(64);
			$s->setEnvTo(88);
			$s->setAliHmm("vklLlsqGAdlnaqd");
			$s->setAliRep("CRELVEAGYDVRQPD");
			$s->setConsensus("73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;");
			$manager->persist($s);
	
			//-607-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8IUH5"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(17.7);
			$s->setBias(0);
			$s->setCEValue(1.4e-07);
			$s->setIEValue(1.4e-07);
			$s->setHmmFrom(4);
			$s->setHmmTo(29);
			$s->setAliFrom(92);
			$s->setAliTo(117);
			$s->setEnvFrom(89);
			$s->setEnvTo(120);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdln");
			$s->setAliRep("TLLHWAAINNRIDLVKYYISKGAIVD");
			$s->setConsensus("92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;");
			$manager->persist($s);
	
			//-608-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8IUH5"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(25.9);
			$s->setBias(0);
			$s->setCEValue(3.6e-10);
			$s->setIEValue(3.6e-10);
			$s->setHmmFrom(4);
			$s->setHmmTo(32);
			$s->setAliFrom(126);
			$s->setAliTo(154);
			$s->setEnvFrom(124);
			$s->setEnvTo(155);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("TPLHWATRQGHLSMVVQLMKYGADPSLID");
			$s->setConsensus("126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;");
			$manager->persist($s);
	
			//-609-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8IUH5"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(23.6);
			$s->setBias(0);
			$s->setCEValue(1.9e-09);
			$s->setIEValue(1.9e-09);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(157);
			$s->setAliTo(187);
			$s->setEnvFrom(156);
			$s->setEnvTo(188);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GCSCIHLAAQFGHTSIVAYLIAKGQDVDMMD");
			$s->setConsensus("157;158;159;160;161;162;163;164;165;166;167;168;169;170;171;172;173;174;175;176;177;178;179;180;181;182;183;184;185;186;187;");
			$manager->persist($s);
	
			//-610-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8IUH5"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(18);
			$s->setBias(0);
			$s->setCEValue(1.2e-07);
			$s->setIEValue(1.2e-07);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(189);
			$s->setAliTo(221);
			$s->setEnvFrom(189);
			$s->setEnvTo(222);
			$s->setAliHmm("dGfTPLHlAalrg.nlevvklLlsqGAdlnaqd");
			$s->setAliRep("NGMTPLMWAAYRThSVDPTRLLLTFNVSVNLGD");
			$s->setConsensus("189;190;191;192;193;194;195;196;197;198;199;200;201;203;204;205;206;207;208;209;210;211;212;213;214;215;216;217;218;219;220;221;");
			$s->setInsertions(";h;14");
			$manager->persist($s);
	
			//-611-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8IUH5"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(38.2);
			$s->setBias(0.3);
			$s->setCEValue(4.6e-14);
			$s->setIEValue(4.6e-14);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(226);
			$s->setAliTo(255);
			$s->setEnvFrom(224);
			$s->setEnvTo(256);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NTALHWAVLAGNTTVISLLLEAGANVDAQN");
			$s->setConsensus("226;227;228;229;230;231;232;233;234;235;236;237;238;239;240;241;242;243;244;245;246;247;248;249;250;251;252;253;254;255;");
			$manager->persist($s);
	
			//-612-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8IUH5"));
			$s->setPfamRepeat(7);
			$s->setStatus("?");
			$s->setScore(-4.1);
			$s->setBias(0);
			$s->setCEValue(1);
			$s->setIEValue(1);
			$s->setHmmFrom(19);
			$s->setHmmTo(30);
			$s->setAliFrom(314);
			$s->setAliTo(325);
			$s->setEnvFrom(310);
			$s->setEnvTo(325);
			$s->setAliHmm("klLlsqGAdlna");
			$s->setAliRep("IWLVGFIADLNI");
			$s->setConsensus("314;315;316;317;318;319;320;321;322;323;324;325;");
			$manager->persist($s);
	
			//-613-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8TDY4"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(-0.8);
			$s->setBias(0);
			$s->setCEValue(0.1);
			$s->setIEValue(0.1);
			$s->setHmmFrom(15);
			$s->setHmmTo(27);
			$s->setAliFrom(191);
			$s->setAliTo(203);
			$s->setEnvFrom(176);
			$s->setEnvTo(207);
			$s->setAliHmm("levvklLlsqGAd");
			$s->setAliRep("LHMCEYLLKAGES");
			$s->setConsensus("191;192;193;194;195;196;197;198;199;200;201;202;203;");
			$manager->persist($s);
	
			//-614-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8TDY4"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(4.1);
			$s->setBias(0.2);
			$s->setCEValue(0.003);
			$s->setIEValue(0.003);
			$s->setHmmFrom(6);
			$s->setHmmTo(31);
			$s->setAliFrom(590);
			$s->setAliTo(618);
			$s->setEnvFrom(588);
			$s->setEnvTo(620);
			$s->setAliHmm("LHlAalrg...nlevvklLlsqGAdlnaq");
			$s->setAliRep("LHLAVKVAnqaSLPLVDFIIQNGGHLDAK");
			$s->setConsensus("590;591;592;593;594;595;596;597;601;602;603;604;605;606;607;608;609;610;611;612;613;614;615;616;617;618;");
			$s->setInsertions(";n;9;q;9;a;9");
			$manager->persist($s);
	
			//-615-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8TDY4"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(27.9);
			$s->setBias(0.1);
			$s->setCEValue(8.5e-11);
			$s->setIEValue(8.5e-11);
			$s->setHmmFrom(1);
			$s->setHmmTo(26);
			$s->setAliFrom(621);
			$s->setAliTo(646);
			$s->setEnvFrom(621);
			$s->setEnvTo(652);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGA");
			$s->setAliRep("DGNTALHYAALYNQPDCLKLLLKGRA");
			$s->setConsensus("621;622;623;624;625;626;627;628;629;630;631;632;633;634;635;636;637;638;639;640;641;642;643;644;645;646;");
			$manager->persist($s);
	
			//-616-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8TDY4"));
			$s->setPfamRepeat(4);
			$s->setStatus("?");
			$s->setScore(0.3);
			$s->setBias(0);
			$s->setCEValue(0.049);
			$s->setIEValue(0.049);
			$s->setHmmFrom(2);
			$s->setHmmTo(20);
			$s->setAliFrom(655);
			$s->setAliTo(673);
			$s->setEnvFrom(654);
			$s->setEnvTo(679);
			$s->setAliHmm("GfTPLHlAalrgnlevvkl");
			$s->setAliRep("GETALDIARKKHHKECEEL");
			$s->setConsensus("655;656;657;658;659;660;661;662;663;664;665;666;667;668;669;670;671;672;673;");
			$manager->persist($s);
	
			//-617-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8WUF5"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(-3.5);
			$s->setBias(0);
			$s->setCEValue(0.77);
			$s->setIEValue(0.77);
			$s->setHmmFrom(9);
			$s->setHmmTo(19);
			$s->setAliFrom(634);
			$s->setAliTo(644);
			$s->setEnvFrom(631);
			$s->setEnvTo(645);
			$s->setAliHmm("Aalrgnlevvk");
			$s->setAliRep("AALTGELEVVQ");
			$s->setConsensus("634;635;636;637;638;639;640;641;642;643;644;");
			$manager->persist($s);
	
			//-618-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8WUF5"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(25.8);
			$s->setBias(0.1);
			$s->setCEValue(3.8e-10);
			$s->setIEValue(3.8e-10);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(660);
			$s->setAliTo(690);
			$s->setEnvFrom(659);
			$s->setEnvTo(691);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GITALHNAICGANYSIVDFLITAGANVNSPD");
			$s->setConsensus("660;661;662;663;664;665;666;667;668;669;670;671;672;673;674;675;676;677;678;679;680;681;682;683;684;685;686;687;688;689;690;");
			$manager->persist($s);
	
			//-619-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q8WUF5"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(29.8);
			$s->setBias(0.2);
			$s->setCEValue(2.1e-11);
			$s->setIEValue(2.1e-11);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(692);
			$s->setAliTo(723);
			$s->setEnvFrom(692);
			$s->setEnvTo(724);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("HGWTPLHCAASCNDTVICMALVQHGAAIFATT");
			$s->setConsensus("692;693;694;695;696;697;698;699;700;701;702;703;704;705;706;707;708;709;710;711;712;713;714;715;716;717;718;719;720;721;722;723;");
			$manager->persist($s);
	
			//-620-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q90623"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(10.8);
			$s->setBias(0);
			$s->setCEValue(2.2e-05);
			$s->setIEValue(2.2e-05);
			$s->setHmmFrom(9);
			$s->setHmmTo(32);
			$s->setAliFrom(47);
			$s->setAliTo(70);
			$s->setEnvFrom(45);
			$s->setEnvTo(71);
			$s->setAliHmm("AalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("ACSSGDTEEVLRLLERGADINYAN");
			$s->setConsensus("47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;");
			$manager->persist($s);
	
			//-621-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q90623"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(33.8);
			$s->setBias(0.1);
			$s->setCEValue(1.2e-12);
			$s->setIEValue(1.2e-12);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(72);
			$s->setAliTo(104);
			$s->setEnvFrom(72);
			$s->setEnvTo(104);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGLTALHQACIDDNVDMVKFLVENGANINQPDN");
			$s->setConsensus("72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;104;");
			$manager->persist($s);
	
			//-622-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q90623"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(31.4);
			$s->setBias(0);
			$s->setCEValue(6.7e-12);
			$s->setIEValue(6.7e-12);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(106);
			$s->setAliTo(136);
			$s->setEnvFrom(105);
			$s->setEnvTo(137);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWIPLHAAASCGYLDIAEYLISQGAHVGAVN");
			$s->setConsensus("106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;");
			$manager->persist($s);
	
			//-623-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q90623"));
			$s->setPfamRepeat(4);
			$s->setStatus("?");
			$s->setScore(-0.1);
			$s->setBias(0);
			$s->setCEValue(0.064);
			$s->setIEValue(0.064);
			$s->setHmmFrom(2);
			$s->setHmmTo(12);
			$s->setAliFrom(139);
			$s->setAliTo(149);
			$s->setEnvFrom(138);
			$s->setEnvTo(169);
			$s->setAliHmm("GfTPLHlAalr");
			$s->setAliRep("GDTPLDIAEEE");
			$s->setConsensus("139;140;141;142;143;144;145;146;147;148;149;");
			$manager->persist($s);
	
			//-624-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q90623"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(27.5);
			$s->setBias(0);
			$s->setCEValue(1.2e-10);
			$s->setIEValue(1.2e-10);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(199);
			$s->setAliTo(229);
			$s->setEnvFrom(198);
			$s->setEnvTo(230);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GGTALHVAAAKGYTEVLKLLIQARYDVNIKD");
			$s->setConsensus("199;200;201;202;203;204;205;206;207;208;209;210;211;212;213;214;215;216;217;218;219;220;221;222;223;224;225;226;227;228;229;");
			$manager->persist($s);
	
			//-625-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q90623"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(23.6);
			$s->setBias(0);
			$s->setCEValue(1.9e-09);
			$s->setIEValue(1.9e-09);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(231);
			$s->setAliTo(263);
			$s->setEnvFrom(231);
			$s->setEnvTo(263);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("DGWTPLHAAAHWGKEEACRILVENLCDMEAVNK");
			$s->setConsensus("231;232;233;234;235;236;237;238;239;240;241;242;243;244;245;246;247;248;249;250;251;252;253;254;255;256;257;258;259;260;261;262;263;");
			$manager->persist($s);
	
			//-626-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q91WD2"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(6.7);
			$s->setBias(0);
			$s->setCEValue(0.00044);
			$s->setIEValue(0.00044);
			$s->setHmmFrom(4);
			$s->setHmmTo(31);
			$s->setAliFrom(47);
			$s->setAliTo(75);
			$s->setEnvFrom(46);
			$s->setEnvTo(77);
			$s->setAliHmm("TPLHlAalrgnlevvklLls.qGAdlnaq");
			$s->setAliRep("SPLLLAAKENDVQALSKLLKfEGCEVHQR");
			$s->setConsensus("47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;68;69;70;71;72;73;74;75;");
			$s->setInsertions(";f;21");
			$manager->persist($s);
	
			//-627-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q91WD2"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(15.6);
			$s->setBias(0.1);
			$s->setCEValue(6.9e-07);
			$s->setIEValue(6.9e-07);
			$s->setHmmFrom(2);
			$s->setHmmTo(23);
			$s->setAliFrom(79);
			$s->setAliTo(100);
			$s->setEnvFrom(78);
			$s->setEnvTo(105);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls");
			$s->setAliRep("GETALHIAALYDNLEAAMVLME");
			$s->setConsensus("79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;");
			$manager->persist($s);
	
			//-628-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q91WD2"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(31.4);
			$s->setBias(0.1);
			$s->setCEValue(6.5e-12);
			$s->setIEValue(6.5e-12);
			$s->setHmmFrom(2);
			$s->setHmmTo(31);
			$s->setAliFrom(117);
			$s->setAliTo(146);
			$s->setEnvFrom(116);
			$s->setEnvTo(148);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaq");
			$s->setAliRep("GQTALHIAVINQNVNLVRALLARGASVSAR");
			$s->setConsensus("117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;145;146;");
			$manager->persist($s);
	
			//-629-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q91WD2"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(29.8);
			$s->setBias(0);
			$s->setCEValue(2.2e-11);
			$s->setIEValue(2.2e-11);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(162);
			$s->setAliTo(193);
			$s->setEnvFrom(162);
			$s->setEnvTo(194);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("YGEHPLSFAACVGSEEIVRLLIEHGADIRAQD");
			$s->setConsensus("162;163;164;165;166;167;168;169;170;171;172;173;174;175;176;177;178;179;180;181;182;183;184;185;186;187;188;189;190;191;192;193;");
			$manager->persist($s);
	
			//-630-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q91WD2"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(-0.9);
			$s->setBias(0);
			$s->setCEValue(0.11);
			$s->setIEValue(0.11);
			$s->setHmmFrom(2);
			$s->setHmmTo(8);
			$s->setAliFrom(196);
			$s->setAliTo(202);
			$s->setEnvFrom(195);
			$s->setEnvTo(206);
			$s->setAliHmm("GfTPLHl");
			$s->setAliRep("GNTVLHI");
			$s->setConsensus("196;197;198;199;200;201;202;");
			$manager->persist($s);
	
			//-631-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q92882"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(13.2);
			$s->setBias(0);
			$s->setCEValue(3.9e-06);
			$s->setIEValue(3.9e-06);
			$s->setHmmFrom(4);
			$s->setHmmTo(29);
			$s->setAliFrom(75);
			$s->setAliTo(100);
			$s->setEnvFrom(74);
			$s->setEnvTo(104);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdln");
			$s->setAliRep("NPLHEAAKRGNLSWLRECLDNRVGVN");
			$s->setConsensus("75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;");
			$manager->persist($s);
	
			//-632-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q92882"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(19.8);
			$s->setBias(0);
			$s->setCEValue(3e-08);
			$s->setIEValue(3e-08);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(106);
			$s->setAliTo(137);
			$s->setEnvFrom(105);
			$s->setEnvTo(138);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls.qGAdlnaqd");
			$s->setAliRep("GSTALYWACHGGHKDIVEMLFTqPNIELNQQN");
			$s->setConsensus("106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;129;130;131;132;133;134;135;136;137;");
			$s->setInsertions(";q;23");
			$manager->persist($s);
	
			//-633-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q92882"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(30.8);
			$s->setBias(0.1);
			$s->setCEValue(1e-11);
			$s->setIEValue(1e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(140);
			$s->setAliTo(170);
			$s->setEnvFrom(139);
			$s->setEnvTo(171);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GDTALHAAAWKGYADIVQLLLAKGARTDLRN");
			$s->setConsensus("140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;166;167;168;169;170;");
			$manager->persist($s);
	
			//-634-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q96DX5"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(15.9);
			$s->setBias(0);
			$s->setCEValue(5.2e-07);
			$s->setIEValue(5.2e-07);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(37);
			$s->setAliTo(66);
			$s->setEnvFrom(35);
			$s->setEnvTo(67);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("WSPMHEAAIHGHQLSLRNLISQGWAVNIIT");
			$s->setConsensus("37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;");
			$manager->persist($s);
	
			//-635-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q96DX5"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(31.6);
			$s->setBias(0.2);
			$s->setCEValue(5.7e-12);
			$s->setIEValue(5.7e-12);
			$s->setHmmFrom(3);
			$s->setHmmTo(30);
			$s->setAliFrom(70);
			$s->setAliTo(97);
			$s->setEnvFrom(68);
			$s->setEnvTo(100);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlna");
			$s->setAliRep("VSPLHEACLGGHLSCVKILLKHGAQVNG");
			$s->setConsensus("70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;");
			$manager->persist($s);
	
			//-636-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q96DX5"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(23);
			$s->setBias(0);
			$s->setCEValue(3e-09);
			$s->setIEValue(3e-09);
			$s->setHmmFrom(3);
			$s->setHmmTo(28);
			$s->setAliFrom(103);
			$s->setAliTo(128);
			$s->setEnvFrom(101);
			$s->setEnvTo(132);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdl");
			$s->setAliRep("HTPLFNACVSGSWDCVNLLLQHGASV");
			$s->setConsensus("103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;");
			$manager->persist($s);
	
			//-637-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q96DX5"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(22.7);
			$s->setBias(0);
			$s->setCEValue(3.9e-09);
			$s->setIEValue(3.9e-09);
			$s->setHmmFrom(4);
			$s->setHmmTo(30);
			$s->setAliFrom(136);
			$s->setAliTo(162);
			$s->setEnvFrom(133);
			$s->setEnvTo(164);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlna");
			$s->setAliRep("SPIHEAARRGHVECVNSLIAYGGNIDH");
			$s->setConsensus("136;137;138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;");
			$manager->persist($s);
	
			//-638-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q96DX5"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(22.6);
			$s->setBias(0);
			$s->setCEValue(4e-09);
			$s->setIEValue(4e-09);
			$s->setHmmFrom(4);
			$s->setHmmTo(30);
			$s->setAliFrom(169);
			$s->setAliTo(195);
			$s->setEnvFrom(168);
			$s->setEnvTo(196);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlna");
			$s->setAliRep("TPLYLACENQQRACVKKLLESGADVNQ");
			$s->setConsensus("169;170;171;172;173;174;175;176;177;178;179;180;181;182;183;184;185;186;187;188;189;190;191;192;193;194;195;");
			$manager->persist($s);
	
			//-639-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q96DX5"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(14.5);
			$s->setBias(0);
			$s->setCEValue(1.5e-06);
			$s->setIEValue(1.5e-06);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(200);
			$s->setAliTo(229);
			$s->setEnvFrom(199);
			$s->setEnvTo(230);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("DSPLHAVARTASEELACLLMDFGADTQAKN");
			$s->setConsensus("200;201;202;203;204;205;206;207;208;209;210;211;212;213;214;215;216;217;218;219;220;221;222;223;224;225;226;227;228;229;");
			$manager->persist($s);
	
			//-640-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q96NW4"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(31.2);
			$s->setBias(0.1);
			$s->setCEValue(7.4e-12);
			$s->setIEValue(7.4e-12);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(463);
			$s->setAliTo(493);
			$s->setEnvFrom(462);
			$s->setEnvTo(494);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GHTPLHVAAVCGQASLIDLLVSKGAMVNATD");
			$s->setConsensus("463;464;465;466;467;468;469;470;471;472;473;474;475;476;477;478;479;480;481;482;483;484;485;486;487;488;489;490;491;492;493;");
			$manager->persist($s);
	
			//-641-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q96NW4"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(25.2);
			$s->setBias(0.1);
			$s->setCEValue(6.2e-10);
			$s->setIEValue(6.2e-10);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(495);
			$s->setAliTo(527);
			$s->setEnvFrom(495);
			$s->setEnvTo(527);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("HGATPLHLACQKGYQSVTLLLLHYKASAEVQDN");
			$s->setConsensus("495;496;497;498;499;500;501;502;503;504;505;506;507;508;509;510;511;512;513;514;515;516;517;518;519;520;521;522;523;524;525;526;527;");
			$manager->persist($s);
	
			//-642-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q96NW4"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(29.8);
			$s->setBias(0);
			$s->setCEValue(2.1e-11);
			$s->setIEValue(2.1e-11);
			$s->setHmmFrom(1);
			$s->setHmmTo(24);
			$s->setAliFrom(528);
			$s->setAliTo(551);
			$s->setEnvFrom(528);
			$s->setEnvTo(556);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsq");
			$s->setAliRep("NGNTPLHLACTYGHEDCVKALVYY");
			$s->setConsensus("528;529;530;531;532;533;534;535;536;537;538;539;540;541;542;543;544;545;546;547;548;549;550;551;");
			$manager->persist($s);
	
			//-643-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q96NW4"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(33.4);
			$s->setBias(0);
			$s->setCEValue(1.5e-12);
			$s->setIEValue(1.5e-12);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(565);
			$s->setAliTo(595);
			$s->setEnvFrom(564);
			$s->setEnvTo(596);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GDTPLHIAARWGYQGVIETLLQNGASTEIQN");
			$s->setConsensus("565;566;567;568;569;570;571;572;573;574;575;576;577;578;579;580;581;582;583;584;585;586;587;588;589;590;591;592;593;594;595;");
			$manager->persist($s);
	
			//-644-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q96NW4"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(2.9);
			$s->setBias(0);
			$s->setCEValue(0.007);
			$s->setIEValue(0.007);
			$s->setHmmFrom(8);
			$s->setHmmTo(23);
			$s->setAliFrom(675);
			$s->setAliTo(690);
			$s->setEnvFrom(673);
			$s->setEnvTo(692);
			$s->setAliHmm("lAalrgnlevvklLls");
			$s->setAliRep("RAVADGDLEMVRYLLE");
			$s->setConsensus("675;676;677;678;679;680;681;682;683;684;685;686;687;688;689;690;");
			$manager->persist($s);
	
			//-645-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q96NW4"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(29.2);
			$s->setBias(0.4);
			$s->setCEValue(3.2e-11);
			$s->setIEValue(3.2e-11);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(743);
			$s->setAliTo(774);
			$s->setEnvFrom(743);
			$s->setEnvTo(775);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("DGSSPLHVAALHGRADLIPLLLKHGANAGARN");
			$s->setConsensus("743;744;745;746;747;748;749;750;751;752;753;754;755;756;757;758;759;760;761;762;763;764;765;766;767;768;769;770;771;772;773;774;");
			$manager->persist($s);
	
			//-646-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q96NW4"));
			$s->setPfamRepeat(7);
			$s->setStatus("!");
			$s->setScore(27.4);
			$s->setBias(0);
			$s->setCEValue(1.2e-10);
			$s->setIEValue(1.2e-10);
			$s->setHmmFrom(5);
			$s->setHmmTo(32);
			$s->setAliFrom(780);
			$s->setAliTo(807);
			$s->setEnvFrom(776);
			$s->setEnvTo(808);
			$s->setAliHmm("PLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("PLHLACQQGHFQVVKCLLDSNAKPNKKD");
			$s->setConsensus("780;781;782;783;784;785;786;787;788;789;790;791;792;793;794;795;796;797;798;799;800;801;802;803;804;805;806;807;");
			$manager->persist($s);
	
			//-647-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q96NW4"));
			$s->setPfamRepeat(8);
			$s->setStatus("!");
			$s->setScore(38.2);
			$s->setBias(0.4);
			$s->setCEValue(4.5e-14);
			$s->setIEValue(4.5e-14);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(810);
			$s->setAliTo(841);
			$s->setEnvFrom(809);
			$s->setEnvTo(841);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GNTPLIYACSGGHHELVALLLQHGASINASNN");
			$s->setConsensus("810;811;812;813;814;815;816;817;818;819;820;821;822;823;824;825;826;827;828;829;830;831;832;833;834;835;836;837;838;839;840;841;");
			$manager->persist($s);
	
			//-648-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q96NW4"));
			$s->setPfamRepeat(9);
			$s->setStatus("!");
			$s->setScore(27.7);
			$s->setBias(0);
			$s->setCEValue(1e-10);
			$s->setIEValue(1e-10);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(843);
			$s->setAliTo(873);
			$s->setEnvFrom(842);
			$s->setEnvTo(874);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GNTALHEAVIEKHVFVVELLLLHGASVQVLN");
			$s->setConsensus("843;844;845;846;847;848;849;850;851;852;853;854;855;856;857;858;859;860;861;862;863;864;865;866;867;868;869;870;871;872;873;");
			$manager->persist($s);
	
			//-649-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q978J0"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(13);
			$s->setBias(0);
			$s->setCEValue(4.4e-06);
			$s->setIEValue(4.4e-06);
			$s->setHmmFrom(2);
			$s->setHmmTo(23);
			$s->setAliFrom(32);
			$s->setAliTo(53);
			$s->setEnvFrom(31);
			$s->setEnvTo(56);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls");
			$s->setAliRep("NRTPLMVACMLGMENAIDKLVE");
			$s->setConsensus("32;33;34;35;36;37;38;39;40;41;42;43;44;45;46;47;48;49;50;51;52;53;");
			$manager->persist($s);
	
			//-650-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q978J0"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(25.5);
			$s->setBias(0);
			$s->setCEValue(5e-10);
			$s->setIEValue(5e-10);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(65);
			$s->setAliTo(95);
			$s->setEnvFrom(64);
			$s->setEnvTo(96);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GSTALIWAVKNNRLGIAEKLLSKGSNVNTKD");
			$s->setConsensus("65;66;67;68;69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;");
			$manager->persist($s);
	
			//-651-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q978J0"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(26.5);
			$s->setBias(0);
			$s->setCEValue(2.3e-10);
			$s->setIEValue(2.3e-10);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(98);
			$s->setAliTo(128);
			$s->setEnvFrom(97);
			$s->setEnvTo(129);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GKTPLMWSIIFGYSEMSYFLLEHGANVNDRN");
			$s->setConsensus("98;99;100;101;102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;");
			$manager->persist($s);
	
			//-652-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q978J0"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(34.4);
			$s->setBias(0);
			$s->setCEValue(7.6e-13);
			$s->setIEValue(7.6e-13);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(131);
			$s->setAliTo(161);
			$s->setEnvFrom(130);
			$s->setEnvTo(162);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GETPLIVASKYGRSEIVKKLLELGADISARD");
			$s->setConsensus("131;132;133;134;135;136;137;138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;");
			$manager->persist($s);
	
			//-653-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q99728"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(-3.3);
			$s->setBias(0);
			$s->setCEValue(0.66);
			$s->setIEValue(0.66);
			$s->setHmmFrom(14);
			$s->setHmmTo(28);
			$s->setAliFrom(71);
			$s->setAliTo(85);
			$s->setEnvFrom(62);
			$s->setEnvTo(87);
			$s->setAliHmm("nlevvklLlsqGAdl");
			$s->setAliRep("CSNCVSDCIGTGCPV");
			$s->setConsensus("71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;");
			$manager->persist($s);
	
			//-654-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q99728"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(28.9);
			$s->setBias(0);
			$s->setCEValue(4e-11);
			$s->setIEValue(4e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(428);
			$s->setAliTo(458);
			$s->setEnvFrom(427);
			$s->setEnvTo(459);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GETLLHIASIKGDIPSVEYLLQNGSDPNVKD");
			$s->setConsensus("428;429;430;431;432;433;434;435;436;437;438;439;440;441;442;443;444;445;446;447;448;449;450;451;452;453;454;455;456;457;458;");
			$manager->persist($s);
	
			//-655-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q99728"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(33.8);
			$s->setBias(0.2);
			$s->setCEValue(1.1e-12);
			$s->setIEValue(1.1e-12);
			$s->setHmmFrom(2);
			$s->setHmmTo(29);
			$s->setAliFrom(461);
			$s->setAliTo(488);
			$s->setEnvFrom(460);
			$s->setEnvTo(491);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdln");
			$s->setAliRep("GWTPLHEACNHGHLKVVELLLQHKALVN");
			$s->setConsensus("461;462;463;464;465;466;467;468;469;470;471;472;473;474;475;476;477;478;479;480;481;482;483;484;485;486;487;488;");
			$manager->persist($s);
	
			//-656-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q99728"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(35.9);
			$s->setBias(0.1);
			$s->setCEValue(2.5e-13);
			$s->setIEValue(2.5e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(495);
			$s->setAliTo(524);
			$s->setEnvFrom(493);
			$s->setEnvTo(525);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("DSPLHDAAKNGHVDIVKLLLSYGASRNAVN");
			$s->setConsensus("495;496;497;498;499;500;501;502;503;504;505;506;507;508;509;510;511;512;513;514;515;516;517;518;519;520;521;522;523;524;");
			$manager->persist($s);
	
			//-657-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9DFS3"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(28);
			$s->setBias(0);
			$s->setCEValue(7.8e-11);
			$s->setIEValue(7.8e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(31);
			$s->setAliFrom(224);
			$s->setAliTo(253);
			$s->setEnvFrom(223);
			$s->setEnvTo(255);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaq");
			$s->setAliRep("GQTALHIAIERRCKHYVELLVEKGADVHAQ");
			$s->setConsensus("224;225;226;227;228;229;230;231;232;233;234;235;236;237;238;239;240;241;242;243;244;245;246;247;248;249;250;251;252;253;");
			$manager->persist($s);
	
			//-658-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9DFS3"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(10.3);
			$s->setBias(0);
			$s->setCEValue(3.2e-05);
			$s->setIEValue(3.2e-05);
			$s->setHmmFrom(2);
			$s->setHmmTo(25);
			$s->setAliFrom(271);
			$s->setAliTo(294);
			$s->setEnvFrom(270);
			$s->setEnvTo(305);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqG");
			$s->setAliRep("GELPLSLAACTNQPHIVHYLTENG");
			$s->setConsensus("271;272;273;274;275;276;277;278;279;280;281;282;283;284;285;286;287;288;289;290;291;292;293;294;");
			$manager->persist($s);
	
			//-659-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9DFS3"));
			$s->setPfamRepeat(3);
			$s->setStatus("?");
			$s->setScore(-2.2);
			$s->setBias(0);
			$s->setCEValue(0.3);
			$s->setIEValue(0.3);
			$s->setHmmFrom(2);
			$s->setHmmTo(7);
			$s->setAliFrom(307);
			$s->setAliTo(312);
			$s->setEnvFrom(306);
			$s->setEnvTo(316);
			$s->setAliHmm("GfTPLH");
			$s->setAliRep("GNTVLH");
			$s->setConsensus("307;308;309;310;311;312;");
			$manager->persist($s);
	
			//-660-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9DFS3"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(9.3);
			$s->setBias(0);
			$s->setCEValue(6.7e-05);
			$s->setIEValue(6.7e-05);
			$s->setHmmFrom(1);
			$s->setHmmTo(22);
			$s->setAliFrom(355);
			$s->setAliTo(376);
			$s->setEnvFrom(355);
			$s->setEnvTo(386);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLl");
			$s->setAliRep("DGLSPLMMAAKTGKIGIFQHII");
			$s->setConsensus("355;356;357;358;359;360;361;362;363;364;365;366;367;368;369;370;371;372;373;374;375;376;");
			$manager->persist($s);
	
			//-661-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(-0.4);
			$s->setBias(0);
			$s->setCEValue(0.078);
			$s->setIEValue(0.078);
			$s->setHmmFrom(7);
			$s->setHmmTo(23);
			$s->setAliFrom(29);
			$s->setAliTo(45);
			$s->setEnvFrom(28);
			$s->setEnvTo(53);
			$s->setAliHmm("HlAalrgnlevvklLls");
			$s->setAliRep("FEACRNGDVERVKRLVT");
			$s->setConsensus("29;30;31;32;33;34;35;36;37;38;39;40;41;42;43;44;45;");
			$manager->persist($s);
	
			//-662-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(34.2);
			$s->setBias(0);
			$s->setCEValue(8.7e-13);
			$s->setIEValue(8.7e-13);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(60);
			$s->setAliTo(89);
			$s->setEnvFrom(58);
			$s->setEnvTo(89);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHFAAGFGRKDVVEYLLQNGANVQARDD");
			$s->setConsensus("60;61;62;63;64;65;66;67;68;69;70;71;72;73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;");
			$manager->persist($s);
	
			//-663-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(36.7);
			$s->setBias(0.2);
			$s->setCEValue(1.4e-13);
			$s->setIEValue(1.4e-13);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(91);
			$s->setAliTo(122);
			$s->setEnvFrom(90);
			$s->setEnvTo(122);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GLIPLHNACSFGHAEVVNLLLRHGADPNARDN");
			$s->setConsensus("91;92;93;94;95;96;97;98;99;100;101;102;103;104;105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;");
			$manager->persist($s);
	
			//-664-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(28.3);
			$s->setBias(0);
			$s->setCEValue(6.3e-11);
			$s->setIEValue(6.3e-11);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(125);
			$s->setAliTo(154);
			$s->setEnvFrom(123);
			$s->setEnvTo(155);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("YTPLHEAAIKGKIDVCIVLLQHGAEPTIRN");
			$s->setConsensus("125;126;127;128;129;130;131;132;133;134;135;136;137;138;139;140;141;142;143;144;145;146;147;148;149;150;151;152;153;154;");
			$manager->persist($s);
	
			//-665-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setPfamRepeat(5);
			$s->setStatus("?");
			$s->setScore(-1.1);
			$s->setBias(0);
			$s->setCEValue(0.13);
			$s->setIEValue(0.13);
			$s->setHmmFrom(1);
			$s->setHmmTo(9);
			$s->setAliFrom(156);
			$s->setAliTo(164);
			$s->setEnvFrom(156);
			$s->setEnvTo(164);
			$s->setAliHmm("dGfTPLHlA");
			$s->setAliRep("DGRTALDLA");
			$s->setConsensus("156;157;158;159;160;161;162;163;164;");
			$manager->persist($s);
	
			//-666-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setPfamRepeat(6);
			$s->setStatus("!");
			$s->setScore(38.4);
			$s->setBias(0);
			$s->setCEValue(4e-14);
			$s->setIEValue(4e-14);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(213);
			$s->setAliTo(242);
			$s->setEnvFrom(211);
			$s->setEnvTo(242);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHLAAGYNRVKIVQLLLQHGADVHAKDK");
			$s->setConsensus("213;214;215;216;217;218;219;220;221;222;223;224;225;226;227;228;229;230;231;232;233;234;235;236;237;238;239;240;241;242;");
			$manager->persist($s);
	
			//-667-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setPfamRepeat(7);
			$s->setStatus("!");
			$s->setScore(28.9);
			$s->setBias(0.2);
			$s->setCEValue(4.1e-11);
			$s->setIEValue(4.1e-11);
			$s->setHmmFrom(5);
			$s->setHmmTo(32);
			$s->setAliFrom(247);
			$s->setAliTo(274);
			$s->setEnvFrom(245);
			$s->setEnvTo(275);
			$s->setAliHmm("PLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("PLHNACSYGHYEVTELLVKHGACVNAMD");
			$s->setConsensus("247;248;249;250;251;252;253;254;255;256;257;258;259;260;261;262;263;264;265;266;267;268;269;270;271;272;273;274;");
			$manager->persist($s);
	
			//-668-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setPfamRepeat(8);
			$s->setStatus("!");
			$s->setScore(32.3);
			$s->setBias(0);
			$s->setCEValue(3.4e-12);
			$s->setIEValue(3.4e-12);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(278);
			$s->setAliTo(307);
			$s->setEnvFrom(276);
			$s->setEnvTo(308);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("FTPLHEAASKNRVEVCSLLLSYGADPTLLN");
			$s->setConsensus("278;279;280;281;282;283;284;285;286;287;288;289;290;291;292;293;294;295;296;297;298;299;300;301;302;303;304;305;306;307;");
			$manager->persist($s);
	
			//-669-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setPfamRepeat(9);
			$s->setStatus("!");
			$s->setScore(20.7);
			$s->setBias(0);
			$s->setCEValue(1.6e-08);
			$s->setIEValue(1.6e-08);
			$s->setHmmFrom(3);
			$s->setHmmTo(33);
			$s->setAliFrom(365);
			$s->setAliTo(398);
			$s->setEnvFrom(363);
			$s->setEnvTo(398);
			$s->setAliHmm("fTPLHlAalrg...nlevvklLlsqGAdlnaqdd");
			$s->setAliRep("ETALHCAAASPypkRKQICELLLRKGANINEKTK");
			$s->setConsensus("365;366;367;368;369;370;371;372;373;374;375;379;380;381;382;383;384;385;386;387;388;389;390;391;392;393;394;395;396;397;398;");
			$s->setInsertions(";y;12;p;12;k;12");
			$manager->persist($s);
	
			//-670-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setPfamRepeat(10);
			$s->setStatus("!");
			$s->setScore(19.9);
			$s->setBias(0);
			$s->setCEValue(2.8e-08);
			$s->setIEValue(2.8e-08);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(402);
			$s->setAliTo(431);
			$s->setEnvFrom(401);
			$s->setEnvTo(431);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHVASEKAHNDVVEVVVKHEAKVNALDN");
			$s->setConsensus("402;403;404;405;406;407;408;409;410;411;412;413;414;415;416;417;418;419;420;421;422;423;424;425;426;427;428;429;430;431;");
			$manager->persist($s);
	
			//-671-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setPfamRepeat(11);
			$s->setStatus("!");
			$s->setScore(30.5);
			$s->setBias(0.1);
			$s->setCEValue(1.3e-11);
			$s->setIEValue(1.3e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(30);
			$s->setAliFrom(433);
			$s->setAliTo(461);
			$s->setEnvFrom(432);
			$s->setEnvTo(463);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlna");
			$s->setAliRep("GQTSLHRAAYCGHLQTCRLLLSYGCDPNI");
			$s->setConsensus("433;434;435;436;437;438;439;440;441;442;443;444;445;446;447;448;449;450;451;452;453;454;455;456;457;458;459;460;461;");
			$manager->persist($s);
	
			//-672-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setPfamRepeat(12);
			$s->setStatus("?");
			$s->setScore(-0.7);
			$s->setBias(0);
			$s->setCEValue(0.1);
			$s->setIEValue(0.1);
			$s->setHmmFrom(8);
			$s->setHmmTo(22);
			$s->setAliFrom(498);
			$s->setAliTo(512);
			$s->setEnvFrom(496);
			$s->setEnvTo(519);
			$s->setAliHmm("lAalrgnlevvklLl");
			$s->setAliRep("EAAKAGDVETVKKLC");
			$s->setConsensus("498;499;500;501;502;503;504;505;506;507;508;509;510;511;512;");
			$manager->persist($s);
	
			//-673-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setPfamRepeat(13);
			$s->setStatus("!");
			$s->setScore(37);
			$s->setBias(0);
			$s->setCEValue(1.1e-13);
			$s->setIEValue(1.1e-13);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(528);
			$s->setAliTo(557);
			$s->setEnvFrom(525);
			$s->setEnvTo(557);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHFAAGYNRVSVVEYLLQHGADVHAKDK");
			$s->setConsensus("528;529;530;531;532;533;534;535;536;537;538;539;540;541;542;543;544;545;546;547;548;549;550;551;552;553;554;555;556;557;");
			$manager->persist($s);
	
			//-674-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setPfamRepeat(14);
			$s->setStatus("!");
			$s->setScore(27.9);
			$s->setBias(0.1);
			$s->setCEValue(8.3e-11);
			$s->setIEValue(8.3e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(559);
			$s->setAliTo(589);
			$s->setEnvFrom(558);
			$s->setEnvTo(590);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GLVPLHNACSYGHYEVAELLVKHGAVVNVAD");
			$s->setConsensus("559;560;561;562;563;564;565;566;567;568;569;570;571;572;573;574;575;576;577;578;579;580;581;582;583;584;585;586;587;588;589;");
			$manager->persist($s);
	
			//-675-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setPfamRepeat(15);
			$s->setStatus("!");
			$s->setScore(34.7);
			$s->setBias(0);
			$s->setCEValue(5.9e-13);
			$s->setIEValue(5.9e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(593);
			$s->setAliTo(622);
			$s->setEnvFrom(591);
			$s->setEnvTo(623);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("FTPLHEAAAKGKYEICKLLLQHGADPTKKN");
			$s->setConsensus("593;594;595;596;597;598;599;600;601;602;603;604;605;606;607;608;609;610;611;612;613;614;615;616;617;618;619;620;621;622;");
			$manager->persist($s);
	
			//-676-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setPfamRepeat(16);
			$s->setStatus("?");
			$s->setScore(0.1);
			$s->setBias(0);
			$s->setCEValue(0.053);
			$s->setIEValue(0.053);
			$s->setHmmFrom(1);
			$s->setHmmTo(8);
			$s->setAliFrom(624);
			$s->setAliTo(631);
			$s->setEnvFrom(624);
			$s->setEnvTo(643);
			$s->setAliHmm("dGfTPLHl");
			$s->setAliRep("DGNTPLDL");
			$s->setConsensus("624;625;626;627;628;629;630;631;");
			$manager->persist($s);
	
			//-677-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setPfamRepeat(17);
			$s->setStatus("!");
			$s->setScore(44.3);
			$s->setBias(0.2);
			$s->setCEValue(5.3e-16);
			$s->setIEValue(5.3e-16);
			$s->setHmmFrom(4);
			$s->setHmmTo(33);
			$s->setAliFrom(681);
			$s->setAliTo(710);
			$s->setEnvFrom(679);
			$s->setEnvTo(710);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("TPLHLAAGYNNLEVAEYLLQHGADVNAQDK");
			$s->setConsensus("681;682;683;684;685;686;687;688;689;690;691;692;693;694;695;696;697;698;699;700;701;702;703;704;705;706;707;708;709;710;");
			$manager->persist($s);
	
			//-678-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setPfamRepeat(18);
			$s->setStatus("!");
			$s->setScore(28.2);
			$s->setBias(0.3);
			$s->setCEValue(6.8e-11);
			$s->setIEValue(6.8e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(33);
			$s->setAliFrom(712);
			$s->setAliTo(743);
			$s->setEnvFrom(711);
			$s->setEnvTo(743);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("GLIPLHNAASYGHVDVAALLIKYNACVNATDK");
			$s->setConsensus("712;713;714;715;716;717;718;719;720;721;722;723;724;725;726;727;728;729;730;731;732;733;734;735;736;737;738;739;740;741;742;743;");
			$manager->persist($s);
	
			//-679-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setPfamRepeat(19);
			$s->setStatus("!");
			$s->setScore(29.1);
			$s->setBias(0);
			$s->setCEValue(3.5e-11);
			$s->setIEValue(3.5e-11);
			$s->setHmmFrom(3);
			$s->setHmmTo(32);
			$s->setAliFrom(746);
			$s->setAliTo(775);
			$s->setEnvFrom(746);
			$s->setEnvTo(776);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("FTPLHEAAQKGRTQLCALLLAHGADPTLKN");
			$s->setConsensus("746;747;748;749;750;751;752;753;754;755;756;757;758;759;760;761;762;763;764;765;766;767;768;769;770;771;772;773;774;775;");
			$manager->persist($s);
	
			//-680-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H2K2"));
			$s->setPfamRepeat(20);
			$s->setStatus("?");
			$s->setScore(-2.3);
			$s->setBias(0);
			$s->setCEValue(0.32);
			$s->setIEValue(0.32);
			$s->setHmmFrom(2);
			$s->setHmmTo(8);
			$s->setAliFrom(778);
			$s->setAliTo(784);
			$s->setEnvFrom(777);
			$s->setEnvTo(787);
			$s->setAliHmm("GfTPLHl");
			$s->setAliRep("GQTPLDL");
			$s->setConsensus("778;779;780;781;782;783;784;");
			$manager->persist($s);
	
			//-681-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H9E1"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(-3.4);
			$s->setBias(0);
			$s->setCEValue(0.71);
			$s->setIEValue(0.71);
			$s->setHmmFrom(14);
			$s->setHmmTo(29);
			$s->setAliFrom(87);
			$s->setAliTo(100);
			$s->setEnvFrom(85);
			$s->setEnvTo(103);
			$s->setAliHmm("nlevvklLlsqGAdln");
			$s->setAliRep("DLEVASVLFK--AECN");
			$s->setConsensus("87;88;89;90;91;92;93;94;95;96;-;-;99;100;101;102;");
			$s->setDeletions(";q;11;G;11");
			$manager->persist($s);
	
			//-682-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H9E1"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(38.2);
			$s->setBias(0);
			$s->setCEValue(4.6e-14);
			$s->setIEValue(4.6e-14);
			$s->setHmmFrom(2);
			$s->setHmmTo(29);
			$s->setAliFrom(182);
			$s->setAliTo(209);
			$s->setEnvFrom(181);
			$s->setEnvTo(213);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdln");
			$s->setAliRep("GFTPLMWAAAHGQIAVVEFLLQNGADPQ");
			$s->setConsensus("182;183;184;185;186;187;188;189;190;191;192;193;194;195;196;197;198;199;200;201;202;203;204;205;206;207;208;209;");
			$manager->persist($s);
	
			//-683-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H9E1"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(27.2);
			$s->setBias(0);
			$s->setCEValue(1.4e-10);
			$s->setIEValue(1.4e-10);
			$s->setHmmFrom(4);
			$s->setHmmTo(31);
			$s->setAliFrom(217);
			$s->setAliTo(244);
			$s->setEnvFrom(215);
			$s->setEnvTo(246);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaq");
			$s->setAliRep("SALSLACSKGYTDIVKMLLDCGVDVNEY");
			$s->setConsensus("217;218;219;220;221;222;223;224;225;226;227;228;229;230;231;232;233;234;235;236;237;238;239;240;241;242;243;244;");
			$manager->persist($s);
	
			//-684-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9H9E1"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(31.4);
			$s->setBias(0);
			$s->setCEValue(6.4e-12);
			$s->setIEValue(6.4e-12);
			$s->setHmmFrom(1);
			$s->setHmmTo(33);
			$s->setAliFrom(247);
			$s->setAliTo(279);
			$s->setEnvFrom(247);
			$s->setEnvTo(279);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("NGGTPLLYAVHGNHVKCVKMLLESGADPTIETD");
			$s->setConsensus("247;248;249;250;251;252;253;254;255;256;257;258;259;260;261;262;263;264;265;266;267;268;269;270;271;272;273;274;275;276;277;278;279;");
			$manager->persist($s);
	
			//-685-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9HBA0"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(28);
			$s->setBias(0);
			$s->setCEValue(8.1e-11);
			$s->setIEValue(8.1e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(31);
			$s->setAliFrom(238);
			$s->setAliTo(267);
			$s->setEnvFrom(237);
			$s->setEnvTo(269);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaq");
			$s->setAliRep("GQTALHIAIERRCKHYVELLVAQGADVHAQ");
			$s->setConsensus("238;239;240;241;242;243;244;245;246;247;248;249;250;251;252;253;254;255;256;257;258;259;260;261;262;263;264;265;266;267;");
			$manager->persist($s);
	
			//-686-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9HBA0"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(8.9);
			$s->setBias(0);
			$s->setCEValue(8.9e-05);
			$s->setIEValue(8.9e-05);
			$s->setHmmFrom(2);
			$s->setHmmTo(28);
			$s->setAliFrom(285);
			$s->setAliTo(314);
			$s->setEnvFrom(284);
			$s->setEnvTo(319);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls...qGAdl");
			$s->setAliRep("GELPLSLAACTNQPHIVNYLTEnphKKADM");
			$s->setConsensus("285;286;287;288;289;290;291;292;293;294;295;296;297;298;299;300;301;302;303;304;305;306;310;311;312;313;314;");
			$s->setInsertions(";n;23;p;23;h;23");
			$manager->persist($s);
	
			//-687-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9HBA0"));
			$s->setPfamRepeat(3);
			$s->setStatus("?");
			$s->setScore(-2.2);
			$s->setBias(0);
			$s->setCEValue(0.3);
			$s->setIEValue(0.3);
			$s->setHmmFrom(2);
			$s->setHmmTo(7);
			$s->setAliFrom(321);
			$s->setAliTo(326);
			$s->setEnvFrom(320);
			$s->setEnvTo(330);
			$s->setAliHmm("GfTPLH");
			$s->setAliRep("GNTVLH");
			$s->setConsensus("321;322;323;324;325;326;");
			$manager->persist($s);
	
			//-688-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9HBA0"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(9.1);
			$s->setBias(0);
			$s->setCEValue(7.5e-05);
			$s->setIEValue(7.5e-05);
			$s->setHmmFrom(1);
			$s->setHmmTo(22);
			$s->setAliFrom(369);
			$s->setAliTo(390);
			$s->setEnvFrom(369);
			$s->setEnvTo(399);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLl");
			$s->setAliRep("DGLSPLMMAAKTGKIGIFQHII");
			$s->setConsensus("369;370;371;372;373;374;375;376;377;378;379;380;381;382;383;384;385;386;387;388;389;390;");
			$manager->persist($s);
	
			//-689-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9WUD2"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(1.2);
			$s->setBias(0);
			$s->setCEValue(0.024);
			$s->setIEValue(0.024);
			$s->setHmmFrom(2);
			$s->setHmmTo(13);
			$s->setAliFrom(117);
			$s->setAliTo(128);
			$s->setEnvFrom(116);
			$s->setEnvTo(145);
			$s->setAliHmm("GfTPLHlAalrg");
			$s->setAliRep("GKTCLMKAVLNL");
			$s->setConsensus("117;118;119;120;121;122;123;124;125;126;127;128;");
			$manager->persist($s);
	
			//-690-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9WUD2"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(27.4);
			$s->setBias(0.1);
			$s->setCEValue(1.2e-10);
			$s->setIEValue(1.2e-10);
			$s->setHmmFrom(2);
			$s->setHmmTo(31);
			$s->setAliFrom(164);
			$s->setAliTo(193);
			$s->setEnvFrom(163);
			$s->setEnvTo(195);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaq");
			$s->setAliRep("GHSALHIAIEKRSLQCVKLLVENGADVHLR");
			$s->setConsensus("164;165;166;167;168;169;170;171;172;173;174;175;176;177;178;179;180;181;182;183;184;185;186;187;188;189;190;191;192;193;");
			$manager->persist($s);
	
			//-691-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9WUD2"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(14.7);
			$s->setBias(0);
			$s->setCEValue(1.3e-06);
			$s->setIEValue(1.3e-06);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(210);
			$s->setAliTo(243);
			$s->setEnvFrom(209);
			$s->setEnvTo(244);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls...qGAdlnaqd");
			$s->setAliRep("GELPLSLAACTKQWDVVTYLLEnphQPASLEATD");
			$s->setConsensus("210;211;212;213;214;215;216;217;218;219;220;221;222;223;224;225;226;227;228;229;230;231;235;236;237;238;239;240;241;242;243;");
			$s->setInsertions(";n;23;p;23;h;23");
			$manager->persist($s);
	
			//-692-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9WUD2"));
			$s->setPfamRepeat(4);
			$s->setStatus("?");
			$s->setScore(-2.7);
			$s->setBias(0);
			$s->setCEValue(0.41);
			$s->setIEValue(0.41);
			$s->setHmmFrom(2);
			$s->setHmmTo(8);
			$s->setAliFrom(246);
			$s->setAliTo(252);
			$s->setEnvFrom(246);
			$s->setEnvTo(255);
			$s->setAliHmm("GfTPLHl");
			$s->setAliRep("GNTVLHA");
			$s->setConsensus("246;247;248;249;250;251;252;");
			$manager->persist($s);
	
			//-693-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9WUD2"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(8.5);
			$s->setBias(0);
			$s->setCEValue(0.00012);
			$s->setIEValue(0.00012);
			$s->setHmmFrom(2);
			$s->setHmmTo(23);
			$s->setAliFrom(295);
			$s->setAliTo(316);
			$s->setEnvFrom(294);
			$s->setEnvTo(318);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls");
			$s->setAliRep("GLTPLKLAAKEGKIEIFRHILQ");
			$s->setConsensus("295;296;297;298;299;300;301;302;303;304;305;306;307;308;309;310;311;312;313;314;315;316;");
			$manager->persist($s);
	
			//-694-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9Y5S1"));
			$s->setPfamRepeat(1);
			$s->setStatus("?");
			$s->setScore(1);
			$s->setBias(0);
			$s->setCEValue(0.028);
			$s->setIEValue(0.028);
			$s->setHmmFrom(2);
			$s->setHmmTo(12);
			$s->setAliFrom(116);
			$s->setAliTo(126);
			$s->setEnvFrom(115);
			$s->setEnvTo(144);
			$s->setAliHmm("GfTPLHlAalr");
			$s->setAliRep("GKTCLMKAVLN");
			$s->setConsensus("116;117;118;119;120;121;122;123;124;125;126;");
			$manager->persist($s);
	
			//-695-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9Y5S1"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(28.8);
			$s->setBias(0.1);
			$s->setCEValue(4.5e-11);
			$s->setIEValue(4.5e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(31);
			$s->setAliFrom(163);
			$s->setAliTo(192);
			$s->setEnvFrom(162);
			$s->setEnvTo(194);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaq");
			$s->setAliRep("GHSALHIAIEKRSLQCVKLLVENGANVHAR");
			$s->setConsensus("163;164;165;166;167;168;169;170;171;172;173;174;175;176;177;178;179;180;181;182;183;184;185;186;187;188;189;190;191;192;");
			$manager->persist($s);
	
			//-696-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9Y5S1"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(15.3);
			$s->setBias(0);
			$s->setCEValue(8.2e-07);
			$s->setIEValue(8.2e-07);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(209);
			$s->setAliTo(242);
			$s->setEnvFrom(208);
			$s->setEnvTo(243);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLls...qGAdlnaqd");
			$s->setAliRep("GELPLSLAACTKQWDVVSYLLEnphQPASLQATD");
			$s->setConsensus("209;210;211;212;213;214;215;216;217;218;219;220;221;222;223;224;225;226;227;228;229;230;234;235;236;237;238;239;240;241;242;");
			$s->setInsertions(";n;23;p;23;h;23");
			$manager->persist($s);
	
			//-697-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9Y5S1"));
			$s->setPfamRepeat(4);
			$s->setStatus("?");
			$s->setScore(-1.6);
			$s->setBias(0);
			$s->setCEValue(0.18);
			$s->setIEValue(0.18);
			$s->setHmmFrom(2);
			$s->setHmmTo(8);
			$s->setAliFrom(245);
			$s->setAliTo(251);
			$s->setEnvFrom(244);
			$s->setEnvTo(263);
			$s->setAliHmm("GfTPLHl");
			$s->setAliRep("GNTVLHA");
			$s->setConsensus("245;246;247;248;249;250;251;");
			$manager->persist($s);
	
			//-698-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9Y5S1"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(5.9);
			$s->setBias(0);
			$s->setCEValue(0.0008);
			$s->setIEValue(0.0008);
			$s->setHmmFrom(3);
			$s->setHmmTo(23);
			$s->setAliFrom(295);
			$s->setAliTo(315);
			$s->setEnvFrom(293);
			$s->setEnvTo(317);
			$s->setAliHmm("fTPLHlAalrgnlevvklLls");
			$s->setAliRep("LTPLKLAAKEGKIEIFRHILQ");
			$s->setConsensus("295;296;297;298;299;300;301;302;303;304;305;306;307;308;309;310;311;312;313;314;315;");
			$manager->persist($s);
	
			//-699-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9Z2X2"));
			$s->setPfamRepeat(1);
			$s->setStatus("!");
			$s->setScore(35.7);
			$s->setBias(0);
			$s->setCEValue(2.8e-13);
			$s->setIEValue(2.8e-13);
			$s->setHmmFrom(3);
			$s->setHmmTo(33);
			$s->setAliFrom(41);
			$s->setAliTo(71);
			$s->setEnvFrom(39);
			$s->setEnvTo(71);
			$s->setAliHmm("fTPLHlAalrgnlevvklLlsqGAdlnaqdd");
			$s->setAliRep("RTALHWACSAGHTEIVEFLLQLGVPVNDKDD");
			$s->setConsensus("41;42;43;44;45;46;47;48;49;50;51;52;53;54;55;56;57;58;59;60;61;62;63;64;65;66;67;68;69;70;71;");
			$manager->persist($s);
	
			//-700-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9Z2X2"));
			$s->setPfamRepeat(2);
			$s->setStatus("!");
			$s->setScore(33);
			$s->setBias(0);
			$s->setCEValue(2.1e-12);
			$s->setIEValue(2.1e-12);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(73);
			$s->setAliTo(103);
			$s->setEnvFrom(72);
			$s->setEnvTo(104);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GWSPLHIAASAGRDEIVKALLVKGAHVNAVN");
			$s->setConsensus("73;74;75;76;77;78;79;80;81;82;83;84;85;86;87;88;89;90;91;92;93;94;95;96;97;98;99;100;101;102;103;");
			$manager->persist($s);
	
			//-701-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9Z2X2"));
			$s->setPfamRepeat(3);
			$s->setStatus("!");
			$s->setScore(39.5);
			$s->setBias(0.1);
			$s->setCEValue(1.8e-14);
			$s->setIEValue(1.8e-14);
			$s->setHmmFrom(1);
			$s->setHmmTo(32);
			$s->setAliFrom(105);
			$s->setAliTo(136);
			$s->setEnvFrom(105);
			$s->setEnvTo(137);
			$s->setAliHmm("dGfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("NGCTPLHYAASKNRHEIAVMLLEGGANPDAKD");
			$s->setConsensus("105;106;107;108;109;110;111;112;113;114;115;116;117;118;119;120;121;122;123;124;125;126;127;128;129;130;131;132;133;134;135;136;");
			$manager->persist($s);
	
			//-702-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9Z2X2"));
			$s->setPfamRepeat(4);
			$s->setStatus("!");
			$s->setScore(21.1);
			$s->setBias(0.1);
			$s->setCEValue(1.2e-08);
			$s->setIEValue(1.2e-08);
			$s->setHmmFrom(4);
			$s->setHmmTo(32);
			$s->setAliFrom(141);
			$s->setAliTo(169);
			$s->setEnvFrom(138);
			$s->setEnvTo(170);
			$s->setAliHmm("TPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("TAMHRAAAKGNLKMVHILLFYKASTNIQD");
			$s->setConsensus("141;142;143;144;145;146;147;148;149;150;151;152;153;154;155;156;157;158;159;160;161;162;163;164;165;166;167;168;169;");
			$manager->persist($s);
	
			//-703-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9Z2X2"));
			$s->setPfamRepeat(5);
			$s->setStatus("!");
			$s->setScore(27.8);
			$s->setBias(0);
			$s->setCEValue(9e-11);
			$s->setIEValue(9e-11);
			$s->setHmmFrom(2);
			$s->setHmmTo(32);
			$s->setAliFrom(172);
			$s->setAliTo(202);
			$s->setEnvFrom(171);
			$s->setEnvTo(203);
			$s->setAliHmm("GfTPLHlAalrgnlevvklLlsqGAdlnaqd");
			$s->setAliRep("GNTPLHLACDEERVEEAKFLVTQGASIYIEN");
			$s->setConsensus("172;173;174;175;176;177;178;179;180;181;182;183;184;185;186;187;188;189;190;191;192;193;194;195;196;197;198;199;200;201;202;");
			$manager->persist($s);
	
			//-704-
			$s = new PFAMRepeat();
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q9Z2X2"));
			$s->setPfamRepeat(6);
			$s->setStatus("?");
			$s->setScore(-3.6);
			$s->setBias(0);
			$s->setCEValue(0.82);
			$s->setIEValue(0.82);
			$s->setHmmFrom(4);
			$s->setHmmTo(9);
			$s->setAliFrom(207);
			$s->setAliTo(212);
			$s->setEnvFrom(206);
			$s->setEnvTo(212);
			$s->setAliHmm("TPLHlA");
			$s->setAliRep("TPLQVA");
			$s->setConsensus("207;208;209;210;211;212;");
			$manager->persist($s);
	
		$manager->flush();

		}

		public function getOrder() {
			return 4;
		}
	}