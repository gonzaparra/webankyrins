<?php

	namespace LFP\StructuralAnks\MainBundle\DataFixtures\ORM;

	use Doctrine\Common\DataFixtures\FixtureInterface;
	use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use LFP\StructuralAnks\MainBundle\Entity\ChainStructuralProperties;
	use Symfony\Component\DependencyInjection\ContainerAwareInterface;
	use Symfony\Component\DependencyInjection\ContainerInterface;

	/**
	 * @author Jorge Cares <reaperjc@gmail.com>
	 */
	class LoadChainStructuralPropertiesData implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
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
			$tableName = $em->getClassMetadata('LFPStructuralAnksMainBundle:ChainStructuralProperties')->getTableName();
			$em->getConnection()->exec("
				SET foreign_key_checks = 0;
				TRUNCATE $tableName;
				SET foreign_key_checks = 1;
			");

			// Reset ID column
			$em->getConnection()->exec("ALTER TABLE $tableName AUTO_INCREMENT = 1;");
			$doctrine = $this->container->get('doctrine');

	
			//-0-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.4089);
			$s->setContactOrder(0.0524604);
			$s->setSasa(10084.6);
			$s->setRGyr(17.8699);
			$s->setIcsRepeats(1.45999848484848);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(306));
			$manager->persist($s);
	
			//-1-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.5549);
			$s->setContactOrder(0.0498779);
			$s->setSasa(9266.54);
			$s->setRGyr(17.9875);
			$s->setIcsRepeats(1.36101818181818);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(10));
			$manager->persist($s);
	
			//-2-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0963861);
			$s->setSasa(6586.73);
			$s->setRGyr(13.9059);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(87));
			$manager->persist($s);
	
			//-3-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6635);
			$s->setContactOrder(0.0511319);
			$s->setSasa(8068.97);
			$s->setRGyr(16.9298);
			$s->setIcsRepeats(1.48545151515151);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(11));
			$manager->persist($s);
	
			//-4-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.058099);
			$s->setSasa(13316.4);
			$s->setRGyr(19.6511);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(121));
			$manager->persist($s);
	
			//-5-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0560462);
			$s->setSasa(13837.8);
			$s->setRGyr(19.6484);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(12));
			$manager->persist($s);
	
			//-6-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0536886);
			$s->setSasa(15949.1);
			$s->setRGyr(20.6496);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(16));
			$manager->persist($s);
	
			//-7-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.62);
			$s->setContactOrder(0.0575429);
			$s->setSasa(8378.56);
			$s->setRGyr(16.4237);
			$s->setIcsRepeats(1.42473181818182);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(305));
			$manager->persist($s);
	
			//-8-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.5576);
			$s->setContactOrder(0.0645396);
			$s->setSasa(7620.9);
			$s->setRGyr(15.5682);
			$s->setIcsRepeats(1.48272575757576);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(18));
			$manager->persist($s);
	
			//-9-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.418);
			$s->setContactOrder(0.0532713);
			$s->setSasa(10437.3);
			$s->setRGyr(18.4339);
			$s->setIcsRepeats(1.45999848484848);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(123));
			$manager->persist($s);
	
			//-10-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.1807);
			$s->setContactOrder(0.0627603);
			$s->setSasa(12090.5);
			$s->setRGyr(18.9751);
			$s->setIcsRepeats(1.37631666666667);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(89));
			$manager->persist($s);
	
			//-11-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.053126);
			$s->setSasa(15257.1);
			$s->setRGyr(20.573);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(19));
			$manager->persist($s);
	
			//-12-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6794);
			$s->setContactOrder(0.0546187);
			$s->setSasa(8013.42);
			$s->setRGyr(16.4463);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(25));
			$manager->persist($s);
	
			//-13-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0756038);
			$s->setSasa(16111.1);
			$s->setRGyr(24.0674);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(7));
			$manager->persist($s);
	
			//-14-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6765);
			$s->setContactOrder(0.0404301);
			$s->setSasa(11304.1);
			$s->setRGyr(21.1281);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(27));
			$manager->persist($s);
	
			//-15-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.7022);
			$s->setContactOrder(0.0366396);
			$s->setSasa(11246.8);
			$s->setRGyr(21.6626);
			$s->setIcsRepeats(1.63505909090909);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(28));
			$manager->persist($s);
	
			//-16-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.7044);
			$s->setContactOrder(0.0372921);
			$s->setSasa(11159.7);
			$s->setRGyr(21.5377);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(29));
			$manager->persist($s);
	
			//-17-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.112507);
			$s->setSasa(8823.88);
			$s->setRGyr(21.4492);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(30));
			$manager->persist($s);
	
			//-18-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6847);
			$s->setContactOrder(0.0543957);
			$s->setSasa(7577.13);
			$s->setRGyr(16.0591);
			$s->setIcsRepeats(1.9701);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(268));
			$manager->persist($s);
	
			//-19-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6789);
			$s->setContactOrder(0.0538642);
			$s->setSasa(8071.76);
			$s->setRGyr(16.4544);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(33));
			$manager->persist($s);
	
			//-20-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6801);
			$s->setContactOrder(0.0544305);
			$s->setSasa(7985.79);
			$s->setRGyr(16.4068);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(35));
			$manager->persist($s);
	
			//-21-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6785);
			$s->setContactOrder(0.0538193);
			$s->setSasa(8044.02);
			$s->setRGyr(16.447);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(37));
			$manager->persist($s);
	
			//-22-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.5101);
			$s->setContactOrder(0.0597691);
			$s->setSasa(6659.14);
			$s->setRGyr(14.085);
			$s->setIcsRepeats(1.64779242424242);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(90));
			$manager->persist($s);
	
			//-23-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6422);
			$s->setContactOrder(0.0869441);
			$s->setSasa(4918.36);
			$s->setRGyr(11.8354);
			$s->setIcsRepeats(2.14703636363636);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(269));
			$manager->persist($s);
	
			//-24-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6725);
			$s->setContactOrder(0.0672709);
			$s->setSasa(6653.23);
			$s->setRGyr(14.0118);
			$s->setIcsRepeats(2.50270606060606);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(267));
			$manager->persist($s);
	
			//-25-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6804);
			$s->setContactOrder(0.0256269);
			$s->setSasa(18273.7);
			$s->setRGyr(31.8682);
			$s->setIcsRepeats(2.01140909090909);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(39));
			$manager->persist($s);
	
			//-26-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0681074);
			$s->setSasa(17734.6);
			$s->setRGyr(27.722);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(1));
			$manager->persist($s);
	
			//-27-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6578);
			$s->setContactOrder(0.0399454);
			$s->setSasa(10314.7);
			$s->setRGyr(19.9877);
			$s->setIcsRepeats(1.60547424242424);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(40));
			$manager->persist($s);
	
			//-28-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6955);
			$s->setContactOrder(0.0405015);
			$s->setSasa(10653.3);
			$s->setRGyr(20.7056);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(46));
			$manager->persist($s);
	
			//-29-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0735035);
			$s->setSasa(14441.5);
			$s->setRGyr(19.0208);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(91));
			$manager->persist($s);
	
			//-30-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6853);
			$s->setContactOrder(0.0532665);
			$s->setSasa(7817.99);
			$s->setRGyr(16.2577);
			$s->setIcsRepeats(1.95304696969697);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(271));
			$manager->persist($s);
	
			//-31-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.2391);
			$s->setContactOrder(0.0688681);
			$s->setSasa(11656.1);
			$s->setRGyr(18.8673);
			$s->setIcsRepeats(1.35135);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(47));
			$manager->persist($s);
	
			//-32-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6488);
			$s->setContactOrder(0.038581);
			$s->setSasa(11349.6);
			$s->setRGyr(21.3434);
			$s->setIcsRepeats(1.49016363636364);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(49));
			$manager->persist($s);
	
			//-33-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6978);
			$s->setContactOrder(0.0407494);
			$s->setSasa(10693);
			$s->setRGyr(20.949);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(50));
			$manager->persist($s);
	
			//-34-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6929);
			$s->setContactOrder(0.0316916);
			$s->setSasa(14141.1);
			$s->setRGyr(23.7746);
			$s->setIcsRepeats(1.70570454545455);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(248));
			$manager->persist($s);
	
			//-35-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6254);
			$s->setContactOrder(0.0395573);
			$s->setSasa(12195.2);
			$s->setRGyr(21.8148);
			$s->setIcsRepeats(1.3852803030303);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(307));
			$manager->persist($s);
	
			//-36-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.154499);
			$s->setSasa(9775.57);
			$s->setRGyr(16.1778);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(51));
			$manager->persist($s);
	
			//-37-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6574);
			$s->setContactOrder(0.0606421);
			$s->setSasa(6821.46);
			$s->setRGyr(14.2811);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(93));
			$manager->persist($s);
	
			//-38-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.7268);
			$s->setContactOrder(0.0462886);
			$s->setSasa(9377.13);
			$s->setRGyr(18.5025);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(53));
			$manager->persist($s);
	
			//-39-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0526889);
			$s->setSasa(9254.18);
			$s->setRGyr(17.5857);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(308));
			$manager->persist($s);
	
			//-40-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.2851);
			$s->setContactOrder(0.0235488);
			$s->setSasa(17800.5);
			$s->setRGyr(26.9202);
			$s->setIcsRepeats(1.41499090909091);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(246));
			$manager->persist($s);
	
			//-41-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6886);
			$s->setContactOrder(0.0538073);
			$s->setSasa(7502.5);
			$s->setRGyr(16.0753);
			$s->setIcsRepeats(1.98359696969697);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(272));
			$manager->persist($s);
	
			//-42-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.070068);
			$s->setSasa(14004.9);
			$s->setRGyr(19.1806);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(273));
			$manager->persist($s);
	
			//-43-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.681);
			$s->setContactOrder(0.0395469);
			$s->setSasa(10733);
			$s->setRGyr(21.0574);
			$s->setIcsRepeats(1.49768181818182);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(55));
			$manager->persist($s);
	
			//-44-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6823);
			$s->setContactOrder(0.0399014);
			$s->setSasa(10508);
			$s->setRGyr(20.9681);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(263));
			$manager->persist($s);
	
			//-45-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6844);
			$s->setContactOrder(0.0415124);
			$s->setSasa(10736.2);
			$s->setRGyr(20.7625);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(57));
			$manager->persist($s);
	
			//-46-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6724);
			$s->setContactOrder(0.0401318);
			$s->setSasa(10901.6);
			$s->setRGyr(20.8589);
			$s->setIcsRepeats(1.39006818181818);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(253));
			$manager->persist($s);
	
			//-47-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.5124);
			$s->setContactOrder(0.0428226);
			$s->setSasa(11523.8);
			$s->setRGyr(20.0273);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(95));
			$manager->persist($s);
	
			//-48-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.5081);
			$s->setContactOrder(0.0407461);
			$s->setSasa(12439.8);
			$s->setRGyr(20.3494);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(97));
			$manager->persist($s);
	
			//-49-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.5026);
			$s->setContactOrder(0.0405071);
			$s->setSasa(12793.6);
			$s->setRGyr(20.8755);
			$s->setIcsRepeats(1.29480375);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(124));
			$manager->persist($s);
	
			//-50-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.5078);
			$s->setContactOrder(0.0414322);
			$s->setSasa(12159.1);
			$s->setRGyr(20.097);
			$s->setIcsRepeats(1.36637777777778);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(98));
			$manager->persist($s);
	
			//-51-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0417771);
			$s->setSasa(10475.9);
			$s->setRGyr(20.4201);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(126));
			$manager->persist($s);
	
			//-52-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0688786);
			$s->setSasa(23969.5);
			$s->setRGyr(24.7864);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(66));
			$manager->persist($s);
	
			//-53-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.7206);
			$s->setContactOrder(0.0457734);
			$s->setSasa(9591.13);
			$s->setRGyr(18.7521);
			$s->setIcsRepeats(1.53505);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(257));
			$manager->persist($s);
	
			//-54-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6899);
			$s->setContactOrder(0.0627882);
			$s->setSasa(6616.61);
			$s->setRGyr(14.2277);
			$s->setIcsRepeats(1.68888181818182);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(276));
			$manager->persist($s);
	
			//-55-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.5313);
			$s->setContactOrder(0.0317643);
			$s->setSasa(11383.4);
			$s->setRGyr(20.5873);
			$s->setIcsRepeats(1.40233939393939);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(259));
			$manager->persist($s);
	
			//-56-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0400546);
			$s->setSasa(17545.8);
			$s->setRGyr(24.8688);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(309));
			$manager->persist($s);
	
			//-57-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.4776);
			$s->setContactOrder(0.0621893);
			$s->setSasa(6619.43);
			$s->setRGyr(14.1242);
			$s->setIcsRepeats(2.02181363636364);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(292));
			$manager->persist($s);
	
			//-58-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.5003);
			$s->setContactOrder(0.0589097);
			$s->setSasa(6744.01);
			$s->setRGyr(14.1293);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(100));
			$manager->persist($s);
	
			//-59-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.4983);
			$s->setContactOrder(0.0382657);
			$s->setSasa(12882.7);
			$s->setRGyr(20.5211);
			$s->setIcsRepeats(1.3649);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(128));
			$manager->persist($s);
	
			//-60-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0905851);
			$s->setSasa(10957.8);
			$s->setRGyr(18.3738);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(277));
			$manager->persist($s);
	
			//-61-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.5026);
			$s->setContactOrder(0.0384337);
			$s->setSasa(12515);
			$s->setRGyr(20.2988);
			$s->setIcsRepeats(1.36819125);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(69));
			$manager->persist($s);
	
			//-62-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0452054);
			$s->setSasa(9563.55);
			$s->setRGyr(18.7107);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(101));
			$manager->persist($s);
	
			//-63-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6925);
			$s->setContactOrder(0.0538255);
			$s->setSasa(7597.79);
			$s->setRGyr(16.0094);
			$s->setIcsRepeats(2.1337393939394);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(290));
			$manager->persist($s);
	
			//-64-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6426);
			$s->setContactOrder(0.0418703);
			$s->setSasa(11119.4);
			$s->setRGyr(19.476);
			$s->setIcsRepeats(1.43689594594595);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(103));
			$manager->persist($s);
	
			//-65-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6699);
			$s->setContactOrder(0.0454742);
			$s->setSasa(9012.26);
			$s->setRGyr(18.7818);
			$s->setIcsRepeats(1.59056515151515);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(104));
			$manager->persist($s);
	
			//-66-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0263624);
			$s->setSasa(9669.44);
			$s->setRGyr(39.5897);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(261));
			$manager->persist($s);
	
			//-67-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0619245);
			$s->setSasa(14488.4);
			$s->setRGyr(19.6111);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(293));
			$manager->persist($s);
	
			//-68-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.2432);
			$s->setContactOrder(0.0557711);
			$s->setSasa(11083.1);
			$s->setRGyr(18.5513);
			$s->setIcsRepeats(1.34071515151515);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(106));
			$manager->persist($s);
	
			//-69-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6957);
			$s->setContactOrder(0.0548282);
			$s->setSasa(7772.08);
			$s->setRGyr(16.0369);
			$s->setIcsRepeats(2.23686515151515);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(296));
			$manager->persist($s);
	
			//-70-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0545966);
			$s->setSasa(7614.92);
			$s->setRGyr(15.9879);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(297));
			$manager->persist($s);
	
			//-71-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.5998);
			$s->setContactOrder(0.0787396);
			$s->setSasa(5107.95);
			$s->setRGyr(12.126);
			$s->setIcsRepeats(1.73488484848485);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(298));
			$manager->persist($s);
	
			//-72-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.114907);
			$s->setSasa(8747.66);
			$s->setRGyr(16.3764);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(129));
			$manager->persist($s);
	
			//-73-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.113077);
			$s->setSasa(8923.94);
			$s->setRGyr(16.5283);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(312));
			$manager->persist($s);
	
			//-74-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.114975);
			$s->setSasa(8769.5);
			$s->setRGyr(16.3659);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(133));
			$manager->persist($s);
	
			//-75-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.346);
			$s->setContactOrder(0.0974417);
			$s->setSasa(5183.43);
			$s->setRGyr(12.1076);
			$s->setIcsRepeats(1.65779242424242);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(299));
			$manager->persist($s);
	
			//-76-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.5377);
			$s->setContactOrder(0.0785986);
			$s->setSasa(4906.97);
			$s->setRGyr(11.9);
			$s->setIcsRepeats(1.72107121212121);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(300));
			$manager->persist($s);
	
			//-77-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0448389);
			$s->setSasa(16589.8);
			$s->setRGyr(22.9188);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(137));
			$manager->persist($s);
	
			//-78-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6802);
			$s->setContactOrder(0.0392673);
			$s->setSasa(10830.8);
			$s->setRGyr(21.1665);
			$s->setIcsRepeats(1.4982);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(140));
			$manager->persist($s);
	
			//-79-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6785);
			$s->setContactOrder(0.0121277);
			$s->setSasa(11497.2);
			$s->setRGyr(21.7963);
			$s->setIcsRepeats(1.54967727272727);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(70));
			$manager->persist($s);
	
			//-80-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6786);
			$s->setContactOrder(0.0119856);
			$s->setSasa(11462.1);
			$s->setRGyr(21.7919);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(72));
			$manager->persist($s);
	
			//-81-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6769);
			$s->setContactOrder(0.0236147);
			$s->setSasa(6723.79);
			$s->setRGyr(14.3692);
			$s->setIcsRepeats(1.55182878787879);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(74));
			$manager->persist($s);
	
			//-82-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6347);
			$s->setContactOrder(0.0377588);
			$s->setSasa(11705.8);
			$s->setRGyr(21.9117);
			$s->setIcsRepeats(1.50522727272727);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(318));
			$manager->persist($s);
	
			//-83-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.4274);
			$s->setContactOrder(0.0465705);
			$s->setSasa(10072.8);
			$s->setRGyr(19.1109);
			$s->setIcsRepeats(1.4834196969697);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(76));
			$manager->persist($s);
	
			//-84-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0473972);
			$s->setSasa(10026.3);
			$s->setRGyr(19.1944);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(77));
			$manager->persist($s);
	
			//-85-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.3007);
			$s->setContactOrder(0.0535665);
			$s->setSasa(10269.2);
			$s->setRGyr(19.7868);
			$s->setIcsRepeats(1.32525909090909);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(107));
			$manager->persist($s);
	
			//-86-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.3183);
			$s->setContactOrder(0.0567722);
			$s->setSasa(9764.05);
			$s->setRGyr(19.4579);
			$s->setIcsRepeats(1.46359393939394);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(109));
			$manager->persist($s);
	
			//-87-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6895);
			$s->setContactOrder(0.0372457);
			$s->setSasa(10825.6);
			$s->setRGyr(21.3377);
			$s->setIcsRepeats(1.47775);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(78));
			$manager->persist($s);
	
			//-88-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6088);
			$s->setContactOrder(0.051861);
			$s->setSasa(9136.09);
			$s->setRGyr(16.9355);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(111));
			$manager->persist($s);
	
			//-89-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.111067);
			$s->setSasa(9354.38);
			$s->setRGyr(19.6583);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(301));
			$manager->persist($s);
	
			//-90-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6967);
			$s->setContactOrder(0.0455382);
			$s->setSasa(9685.31);
			$s->setRGyr(19.0556);
			$s->setIcsRepeats(1.49707121212121);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(319));
			$manager->persist($s);
	
			//-91-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.582);
			$s->setContactOrder(0.0519331);
			$s->setSasa(9517.77);
			$s->setRGyr(17.6127);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(113));
			$manager->persist($s);
	
			//-92-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0462299);
			$s->setSasa(11900.3);
			$s->setRGyr(19.638);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(349));
			$manager->persist($s);
	
			//-93-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.4927);
			$s->setContactOrder(0.0406382);
			$s->setSasa(12719.2);
			$s->setRGyr(20.5118);
			$s->setIcsRepeats(1.28721375);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(81));
			$manager->persist($s);
	
			//-94-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.4832);
			$s->setContactOrder(0.0379641);
			$s->setSasa(13434.3);
			$s->setRGyr(20.8375);
			$s->setIcsRepeats(1.33648375);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(85));
			$manager->persist($s);
	
			//-95-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0267748);
			$s->setSasa(15754.6);
			$s->setRGyr(27.1865);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(115));
			$manager->persist($s);
	
			//-96-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0296003);
			$s->setSasa(15552.7);
			$s->setRGyr(25.2087);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(320));
			$manager->persist($s);
	
			//-97-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0705132);
			$s->setSasa(21849.3);
			$s->setRGyr(25.3932);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(352));
			$manager->persist($s);
	
			//-98-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0534727);
			$s->setSasa(44860.3);
			$s->setRGyr(37.7687);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(145));
			$manager->persist($s);
	
			//-99-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0514796);
			$s->setSasa(46044.1);
			$s->setRGyr(37.7253);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(148));
			$manager->persist($s);
	
			//-100-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0972002);
			$s->setSasa(16665.4);
			$s->setRGyr(20.3793);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(151));
			$manager->persist($s);
	
			//-101-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0972751);
			$s->setSasa(16362.3);
			$s->setRGyr(20.3375);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(153));
			$manager->persist($s);
	
			//-102-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.109674);
			$s->setSasa(7694.66);
			$s->setRGyr(14.0507);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(362));
			$manager->persist($s);
	
			//-103-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.106558);
			$s->setSasa(7955.76);
			$s->setRGyr(14.1471);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(366));
			$manager->persist($s);
	
			//-104-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6561);
			$s->setContactOrder(0.0484765);
			$s->setSasa(8507.23);
			$s->setRGyr(17.0428);
			$s->setIcsRepeats(1.34658333333333);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(155));
			$manager->persist($s);
	
			//-105-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.5892);
			$s->setContactOrder(0.0527519);
			$s->setSasa(8692.5);
			$s->setRGyr(16.8502);
			$s->setIcsRepeats(1.57039393939394);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(156));
			$manager->persist($s);
	
			//-106-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0552758);
			$s->setSasa(8080.87);
			$s->setRGyr(16.1454);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(158));
			$manager->persist($s);
	
			//-107-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0556944);
			$s->setSasa(8109.76);
			$s->setRGyr(16.1594);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(166));
			$manager->persist($s);
	
			//-108-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.056373);
			$s->setSasa(8046.5);
			$s->setRGyr(16.0957);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(170));
			$manager->persist($s);
	
			//-109-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0544903);
			$s->setSasa(8255.09);
			$s->setRGyr(16.3669);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(174));
			$manager->persist($s);
	
			//-110-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0567947);
			$s->setSasa(7814.58);
			$s->setRGyr(15.9975);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(176));
			$manager->persist($s);
	
			//-111-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.057064);
			$s->setSasa(7892.75);
			$s->setRGyr(16.0362);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(180));
			$manager->persist($s);
	
			//-112-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0565216);
			$s->setSasa(7972.65);
			$s->setRGyr(16.138);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(182));
			$manager->persist($s);
	
			//-113-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0333708);
			$s->setSasa(14240.3);
			$s->setRGyr(25.1614);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(184));
			$manager->persist($s);
	
			//-114-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.608);
			$s->setContactOrder(0.0260092);
			$s->setSasa(17155.4);
			$s->setRGyr(33.2815);
			$s->setIcsRepeats(1.48978181818182);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(186));
			$manager->persist($s);
	
			//-115-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6408);
			$s->setContactOrder(0.0503037);
			$s->setSasa(8673.01);
			$s->setRGyr(16.9374);
			$s->setIcsRepeats(1.41041060606061);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(189));
			$manager->persist($s);
	
			//-116-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6766);
			$s->setContactOrder(0.0509614);
			$s->setSasa(8203.78);
			$s->setRGyr(16.6901);
			$s->setIcsRepeats(1.35803787878788);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(191));
			$manager->persist($s);
	
			//-117-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0479966);
			$s->setSasa(8846.55);
			$s->setRGyr(17.3424);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(193));
			$manager->persist($s);
	
			//-118-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0518092);
			$s->setSasa(8531.21);
			$s->setRGyr(16.8055);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(195));
			$manager->persist($s);
	
			//-119-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0478577);
			$s->setSasa(9059.6);
			$s->setRGyr(17.5164);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(197));
			$manager->persist($s);
	
			//-120-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0353963);
			$s->setSasa(12651.8);
			$s->setRGyr(21.7623);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(324));
			$manager->persist($s);
	
			//-121-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0744231);
			$s->setSasa(17136.8);
			$s->setRGyr(21.1359);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(199));
			$manager->persist($s);
	
			//-122-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0696549);
			$s->setSasa(18302.1);
			$s->setRGyr(22.1569);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(200));
			$manager->persist($s);
	
			//-123-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.139271);
			$s->setSasa(11107.9);
			$s->setRGyr(17.0586);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(202));
			$manager->persist($s);
	
			//-124-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.138983);
			$s->setSasa(9139.77);
			$s->setRGyr(16.1049);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(214));
			$manager->persist($s);
	
			//-125-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0921422);
			$s->setSasa(18182.9);
			$s->setRGyr(20.7756);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(217));
			$manager->persist($s);
	
			//-126-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0967822);
			$s->setSasa(17076.8);
			$s->setRGyr(20.4952);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(218));
			$manager->persist($s);
	
			//-127-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.126622);
			$s->setSasa(8210.9);
			$s->setRGyr(14.8689);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(219));
			$manager->persist($s);
	
			//-128-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0553469);
			$s->setSasa(23193.1);
			$s->setRGyr(22.8588);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(413));
			$manager->persist($s);
	
			//-129-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0591417);
			$s->setSasa(22328.4);
			$s->setRGyr(22.8376);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(415));
			$manager->persist($s);
	
			//-130-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0601225);
			$s->setSasa(21539.7);
			$s->setRGyr(22.6462);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(417));
			$manager->persist($s);
	
			//-131-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0597258);
			$s->setSasa(22209.8);
			$s->setRGyr(22.7112);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(418));
			$manager->persist($s);
	
			//-132-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0384433);
			$s->setSasa(14112.2);
			$s->setRGyr(26.0356);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(443));
			$manager->persist($s);
	
			//-133-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0632437);
			$s->setSasa(16947.9);
			$s->setRGyr(20.7644);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(221));
			$manager->persist($s);
	
			//-134-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0496721);
			$s->setSasa(8563.31);
			$s->setRGyr(17.7318);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(336));
			$manager->persist($s);
	
			//-135-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.4992);
			$s->setContactOrder(0.0396149);
			$s->setSasa(12907.6);
			$s->setRGyr(20.4441);
			$s->setIcsRepeats(1.33509375);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(119));
			$manager->persist($s);
	
			//-136-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0402423);
			$s->setSasa(11877.7);
			$s->setRGyr(19.9225);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(225));
			$manager->persist($s);
	
			//-137-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0538907);
			$s->setSasa(45736);
			$s->setRGyr(37.8707);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(227));
			$manager->persist($s);
	
			//-138-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0538356);
			$s->setSasa(45666.2);
			$s->setRGyr(37.8006);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(230));
			$manager->persist($s);
	
			//-139-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0541417);
			$s->setSasa(45558);
			$s->setRGyr(37.7881);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(233));
			$manager->persist($s);
	
			//-140-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.1505);
			$s->setContactOrder(0.04752);
			$s->setSasa(11592.1);
			$s->setRGyr(19.555);
			$s->setIcsRepeats(1.32435428571429);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(236));
			$manager->persist($s);
	
			//-141-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0644624);
			$s->setSasa(18054.7);
			$s->setRGyr(21.026);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(238));
			$manager->persist($s);
	
			//-142-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6817);
			$s->setContactOrder(0.0293971);
			$s->setSasa(14307.6);
			$s->setRGyr(25.4483);
			$s->setIcsRepeats(1.65453181818182);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(240));
			$manager->persist($s);
	
			//-143-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0279434);
			$s->setSasa(15104.3);
			$s->setRGyr(25.7013);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(242));
			$manager->persist($s);
	
			//-144-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6612);
			$s->setContactOrder(0.0527568);
			$s->setSasa(7881.51);
			$s->setRGyr(16.927);
			$s->setIcsRepeats(2.33934696969697);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(330));
			$manager->persist($s);
	
			//-145-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6961);
			$s->setContactOrder(0.0541756);
			$s->setSasa(7632.76);
			$s->setRGyr(16.1818);
			$s->setIcsRepeats(2.35686363636364);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(331));
			$manager->persist($s);
	
			//-146-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0363107);
			$s->setSasa(12117);
			$s->setRGyr(21.6552);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(437));
			$manager->persist($s);
	
			//-147-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0559231);
			$s->setSasa(7414.93);
			$s->setRGyr(16.1157);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(438));
			$manager->persist($s);
	
			//-148-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.064186);
			$s->setSasa(17344.1);
			$s->setRGyr(20.8495);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(333));
			$manager->persist($s);
	
			//-149-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0516095);
			$s->setSasa(8157.28);
			$s->setRGyr(16.8218);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(439));
			$manager->persist($s);
	
			//-150-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0655909);
			$s->setSasa(5926.54);
			$s->setRGyr(13.8551);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(422));
			$manager->persist($s);
	
			//-151-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0525301);
			$s->setSasa(7925.67);
			$s->setRGyr(16.3036);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(445));
			$manager->persist($s);
	
			//-152-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0527102);
			$s->setSasa(7803.35);
			$s->setRGyr(16.2457);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(447));
			$manager->persist($s);
	
			//-153-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.110297);
			$s->setSasa(9302.77);
			$s->setRGyr(16.7739);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(420));
			$manager->persist($s);
	
			//-154-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6918);
			$s->setContactOrder(0.0558817);
			$s->setSasa(7388.47);
			$s->setRGyr(15.9048);
			$s->setIcsRepeats(1.51013484848485);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(88));
			$manager->persist($s);
	
			//-155-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6366);
			$s->setContactOrder(0.0655157);
			$s->setSasa(6372.18);
			$s->setRGyr(14.0834);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(122));
			$manager->persist($s);
	
			//-156-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6586);
			$s->setContactOrder(0.0513629);
			$s->setSasa(7181.39);
			$s->setRGyr(16.5687);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(13));
			$manager->persist($s);
	
			//-157-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6465);
			$s->setContactOrder(0.0500838);
			$s->setSasa(7878.29);
			$s->setRGyr(17.1841);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(17));
			$manager->persist($s);
	
			//-158-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.685);
			$s->setContactOrder(0.0540014);
			$s->setSasa(7582.34);
			$s->setRGyr(16.1966);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(20));
			$manager->persist($s);
	
			//-159-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6886);
			$s->setContactOrder(0.0541212);
			$s->setSasa(8254.69);
			$s->setRGyr(16.397);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(26));
			$manager->persist($s);
	
			//-160-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.132575);
			$s->setSasa(7769.8);
			$s->setRGyr(17.5422);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(31));
			$manager->persist($s);
	
			//-161-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6909);
			$s->setContactOrder(0.0529399);
			$s->setSasa(8207.16);
			$s->setRGyr(16.4311);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(34));
			$manager->persist($s);
	
			//-162-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6777);
			$s->setContactOrder(0.0526824);
			$s->setSasa(8215.58);
			$s->setRGyr(16.5736);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(36));
			$manager->persist($s);
	
			//-163-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6916);
			$s->setContactOrder(0.0533473);
			$s->setSasa(8190.81);
			$s->setRGyr(16.3923);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(38));
			$manager->persist($s);
	
			//-164-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0910128);
			$s->setSasa(5009.77);
			$s->setRGyr(11.8923);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(337));
			$manager->persist($s);
	
			//-165-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.17131);
			$s->setSasa(6502.34);
			$s->setRGyr(13.9729);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(2));
			$manager->persist($s);
	
			//-166-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6856);
			$s->setContactOrder(0.0414673);
			$s->setSasa(10159.2);
			$s->setRGyr(19.3126);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(41));
			$manager->persist($s);
	
			//-167-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.145758);
			$s->setSasa(6990.19);
			$s->setRGyr(15.3986);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(43));
			$manager->persist($s);
	
			//-168-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.4776);
			$s->setContactOrder(0.0248244);
			$s->setSasa(17871.4);
			$s->setRGyr(26.9865);
			$s->setIcsRepeats(1.55518787878788);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(92));
			$manager->persist($s);
	
			//-169-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0974118);
			$s->setSasa(15893.2);
			$s->setRGyr(21.3552);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(270));
			$manager->persist($s);
	
			//-170-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.1833);
			$s->setContactOrder(0.0687021);
			$s->setSasa(12174.9);
			$s->setRGyr(19.0489);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(48));
			$manager->persist($s);
	
			//-171-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.2709);
			$s->setContactOrder(0.0540616);
			$s->setSasa(9808.61);
			$s->setRGyr(17.7966);
			$s->setIcsRepeats(1.42261666666667);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(52));
			$manager->persist($s);
	
			//-172-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6568);
			$s->setContactOrder(0.0626981);
			$s->setSasa(6816.43);
			$s->setRGyr(14.2673);
			$s->setIcsRepeats(1.47473181818182);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(94));
			$manager->persist($s);
	
			//-173-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.7323);
			$s->setContactOrder(0.0475204);
			$s->setSasa(9154.46);
			$s->setRGyr(18.3626);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(54));
			$manager->persist($s);
	
			//-174-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0227186);
			$s->setSasa(18938.9);
			$s->setRGyr(27.8761);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(247));
			$manager->persist($s);
	
			//-175-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0539217);
			$s->setSasa(7547.42);
			$s->setRGyr(16.0746);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(431));
			$manager->persist($s);
	
			//-176-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6798);
			$s->setContactOrder(0.051871);
			$s->setSasa(8042.68);
			$s->setRGyr(16.4771);
			$s->setIcsRepeats(1.89060757575758);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(275));
			$manager->persist($s);
	
			//-177-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.103257);
			$s->setSasa(4795.85);
			$s->setRGyr(11.7175);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(56));
			$manager->persist($s);
	
			//-178-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0992929);
			$s->setSasa(4748.85);
			$s->setRGyr(11.7556);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(264));
			$manager->persist($s);
	
			//-179-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.129967);
			$s->setSasa(3886.93);
			$s->setRGyr(10.9807);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(58));
			$manager->persist($s);
	
			//-180-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.125805);
			$s->setSasa(3842.52);
			$s->setRGyr(10.9469);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(254));
			$manager->persist($s);
	
			//-181-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.5117);
			$s->setContactOrder(0.0426573);
			$s->setSasa(11371.5);
			$s->setRGyr(20.0552);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(96));
			$manager->persist($s);
	
			//-182-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0411975);
			$s->setSasa(12296.6);
			$s->setRGyr(20.6821);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(125));
			$manager->persist($s);
	
			//-183-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.504);
			$s->setContactOrder(0.0406049);
			$s->setSasa(12145.8);
			$s->setRGyr(20.2851);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(99));
			$manager->persist($s);
	
			//-184-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0413702);
			$s->setSasa(10378.8);
			$s->setRGyr(19.6341);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(127));
			$manager->persist($s);
	
			//-185-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0463278);
			$s->setSasa(9220.31);
			$s->setRGyr(18.5025);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(258));
			$manager->persist($s);
	
			//-186-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0630013);
			$s->setSasa(6588.59);
			$s->setRGyr(14.2257);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(425));
			$manager->persist($s);
	
			//-187-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0719732);
			$s->setSasa(5328.26);
			$s->setRGyr(14.5963);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(260));
			$manager->persist($s);
	
			//-188-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0367834);
			$s->setSasa(17985.5);
			$s->setRGyr(23.9351);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(310));
			$manager->persist($s);
	
			//-189-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.116895);
			$s->setSasa(7746.13);
			$s->setRGyr(16.6477);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(278));
			$manager->persist($s);
	
			//-190-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0440298);
			$s->setSasa(9726.13);
			$s->setRGyr(19.1102);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(102));
			$manager->persist($s);
	
			//-191-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6698);
			$s->setContactOrder(0.0444884);
			$s->setSasa(9231.78);
			$s->setRGyr(18.9272);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(105));
			$manager->persist($s);
	
			//-192-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0260981);
			$s->setSasa(9194.13);
			$s->setRGyr(39.5106);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(262));
			$manager->persist($s);
	
			//-193-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0615425);
			$s->setSasa(14794.5);
			$s->setRGyr(19.6405);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(294));
			$manager->persist($s);
	
			//-194-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0547298);
			$s->setSasa(7596.11);
			$s->setRGyr(16.0025);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(405));
			$manager->persist($s);
	
			//-195-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0546372);
			$s->setSasa(7602.02);
			$s->setRGyr(15.9945);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(427));
			$manager->persist($s);
	
			//-196-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.124444);
			$s->setSasa(7047.83);
			$s->setRGyr(16.3085);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(130));
			$manager->persist($s);
	
			//-197-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.122436);
			$s->setSasa(7197.81);
			$s->setRGyr(16.4271);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(313));
			$manager->persist($s);
	
			//-198-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.125166);
			$s->setSasa(7052.27);
			$s->setRGyr(16.2845);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(134));
			$manager->persist($s);
	
			//-199-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0460075);
			$s->setSasa(15541.4);
			$s->setRGyr(20.6799);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(138));
			$manager->persist($s);
	
			//-200-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.102339);
			$s->setSasa(4904.87);
			$s->setRGyr(11.8066);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(141));
			$manager->persist($s);
	
			//-201-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.7047);
			$s->setContactOrder(0.0390189);
			$s->setSasa(10461);
			$s->setRGyr(20.606);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(71));
			$manager->persist($s);
	
			//-202-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.7095);
			$s->setContactOrder(0.0383996);
			$s->setSasa(10550.5);
			$s->setRGyr(20.6418);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(73));
			$manager->persist($s);
	
			//-203-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6782);
			$s->setContactOrder(0.0235719);
			$s->setSasa(6570.28);
			$s->setRGyr(14.244);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(75));
			$manager->persist($s);
	
			//-204-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.16344);
			$s->setSasa(1292.31);
			$s->setRGyr(6.96533);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(434));
			$manager->persist($s);
	
			//-205-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.054702);
			$s->setSasa(9893.79);
			$s->setRGyr(19.526);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(108));
			$manager->persist($s);
	
			//-206-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0565223);
			$s->setSasa(9858.02);
			$s->setRGyr(19.403);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(110));
			$manager->persist($s);
	
			//-207-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0376855);
			$s->setSasa(10475);
			$s->setRGyr(20.8892);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(79));
			$manager->persist($s);
	
			//-208-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0888944);
			$s->setSasa(5044.2);
			$s->setRGyr(12.8668);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(112));
			$manager->persist($s);
	
			//-209-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.116339);
			$s->setSasa(8640.53);
			$s->setRGyr(19.4121);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(302));
			$manager->persist($s);
	
			//-210-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.071065);
			$s->setSasa(5849.95);
			$s->setRGyr(16.0949);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(114));
			$manager->persist($s);
	
			//-211-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.1438);
			$s->setContactOrder(0.0456626);
			$s->setSasa(12289.1);
			$s->setRGyr(19.7871);
			$s->setIcsRepeats(1.31832714285714);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(144));
			$manager->persist($s);
	
			//-212-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0394549);
			$s->setSasa(12905.9);
			$s->setRGyr(20.7214);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(82));
			$manager->persist($s);
	
			//-213-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0389922);
			$s->setSasa(12656.4);
			$s->setRGyr(20.7123);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(86));
			$manager->persist($s);
	
			//-214-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.3478);
			$s->setContactOrder(0.026937);
			$s->setSasa(15661.1);
			$s->setRGyr(27.1988);
			$s->setIcsRepeats(1.18937575757576);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(116));
			$manager->persist($s);
	
			//-215-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0452591);
			$s->setSasa(9707.26);
			$s->setRGyr(18.8041);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(353));
			$manager->persist($s);
	
			//-216-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0516628);
			$s->setSasa(45316.5);
			$s->setRGyr(36.9898);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(146));
			$manager->persist($s);
	
			//-217-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0502);
			$s->setSasa(47381.5);
			$s->setRGyr(37.2101);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(149));
			$manager->persist($s);
	
			//-218-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.133412);
			$s->setSasa(1340.15);
			$s->setRGyr(9.56314);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(152));
			$manager->persist($s);
	
			//-219-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.122303);
			$s->setSasa(1650.44);
			$s->setRGyr(10.2531);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(154));
			$manager->persist($s);
	
			//-220-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.113454);
			$s->setSasa(7482.89);
			$s->setRGyr(13.8746);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(363));
			$manager->persist($s);
	
			//-221-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.11099);
			$s->setSasa(7574.9);
			$s->setRGyr(13.9489);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(367));
			$manager->persist($s);
	
			//-222-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0530194);
			$s->setSasa(8745.89);
			$s->setRGyr(16.8825);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(157));
			$manager->persist($s);
	
			//-223-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6281);
			$s->setContactOrder(0.0563306);
			$s->setSasa(7835.27);
			$s->setRGyr(16.1075);
			$s->setIcsRepeats(1.5804803030303);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(159));
			$manager->persist($s);
	
			//-224-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0566362);
			$s->setSasa(7896.59);
			$s->setRGyr(16.0799);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(167));
			$manager->persist($s);
	
			//-225-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0568025);
			$s->setSasa(7960.09);
			$s->setRGyr(16.0689);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(171));
			$manager->persist($s);
	
			//-226-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.104495);
			$s->setSasa(1569.34);
			$s->setRGyr(9.88812);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(175));
			$manager->persist($s);
	
			//-227-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0561444);
			$s->setSasa(7921.52);
			$s->setRGyr(16.0919);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(177));
			$manager->persist($s);
	
			//-228-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.056307);
			$s->setSasa(7911.49);
			$s->setRGyr(16.0648);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(181));
			$manager->persist($s);
	
			//-229-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0562006);
			$s->setSasa(8021.27);
			$s->setRGyr(16.1948);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(183));
			$manager->persist($s);
	
			//-230-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.117882);
			$s->setSasa(1985.65);
			$s->setRGyr(8.84784);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(185));
			$manager->persist($s);
	
			//-231-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.027696);
			$s->setSasa(16179);
			$s->setRGyr(31.7478);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(187));
			$manager->persist($s);
	
			//-232-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0921205);
			$s->setSasa(2108.94);
			$s->setRGyr(12.7513);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(190));
			$manager->persist($s);
	
			//-233-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.111847);
			$s->setSasa(1506.1);
			$s->setRGyr(9.60155);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(192));
			$manager->persist($s);
	
			//-234-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.109516);
			$s->setSasa(1684.38);
			$s->setRGyr(9.63682);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(194));
			$manager->persist($s);
	
			//-235-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.082723);
			$s->setSasa(2032.79);
			$s->setRGyr(11.7281);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(196));
			$manager->persist($s);
	
			//-236-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.076897);
			$s->setSasa(2295.45);
			$s->setRGyr(13.4274);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(198));
			$manager->persist($s);
	
			//-237-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.108372);
			$s->setSasa(5432.24);
			$s->setRGyr(12.3289);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(325));
			$manager->persist($s);
	
			//-238-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.053777);
			$s->setSasa(7632.7);
			$s->setRGyr(16.1324);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(386));
			$manager->persist($s);
	
			//-239-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0629623);
			$s->setSasa(6698.1);
			$s->setRGyr(14.1807);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(387));
			$manager->persist($s);
	
			//-240-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0575689);
			$s->setSasa(10547.4);
			$s->setRGyr(17.9921);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(203));
			$manager->persist($s);
	
			//-241-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.143162);
			$s->setSasa(8603.49);
			$s->setRGyr(15.6596);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(215));
			$manager->persist($s);
	
			//-242-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.104343);
			$s->setSasa(2191.52);
			$s->setRGyr(11.9289);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(392));
			$manager->persist($s);
	
			//-243-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.114806);
			$s->setSasa(1749.84);
			$s->setRGyr(11.0212);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(393));
			$manager->persist($s);
	
			//-244-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.5165);
			$s->setContactOrder(0.0424639);
			$s->setSasa(9870.05);
			$s->setRGyr(18.8511);
			$s->setIcsRepeats(1.5370803030303);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(220));
			$manager->persist($s);
	
			//-245-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0580394);
			$s->setSasa(22112.7);
			$s->setRGyr(22.753);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(414));
			$manager->persist($s);
	
			//-246-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0596404);
			$s->setSasa(22447.1);
			$s->setRGyr(22.9428);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(416));
			$manager->persist($s);
	
			//-247-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0604917);
			$s->setSasa(22003);
			$s->setRGyr(22.6879);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(419));
			$manager->persist($s);
	
			//-248-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0579417);
			$s->setSasa(8066.11);
			$s->setRGyr(15.39);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(444));
			$manager->persist($s);
	
			//-249-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0615658);
			$s->setSasa(17007.1);
			$s->setRGyr(20.6941);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(222));
			$manager->persist($s);
	
			//-250-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0398432);
			$s->setSasa(12502.7);
			$s->setRGyr(20.2564);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(120));
			$manager->persist($s);
	
			//-251-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0414154);
			$s->setSasa(12020.2);
			$s->setRGyr(19.867);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(226));
			$manager->persist($s);
	
			//-252-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0541339);
			$s->setSasa(45393.7);
			$s->setRGyr(36.7291);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(228));
			$manager->persist($s);
	
			//-253-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0540409);
			$s->setSasa(45409.1);
			$s->setRGyr(36.7589);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(231));
			$manager->persist($s);
	
			//-254-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0537987);
			$s->setSasa(45464.6);
			$s->setRGyr(36.6915);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(234));
			$manager->persist($s);
	
			//-255-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0479431);
			$s->setSasa(11625.2);
			$s->setRGyr(19.5071);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(237));
			$manager->persist($s);
	
			//-256-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0610603);
			$s->setSasa(17625.1);
			$s->setRGyr(20.8875);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(239));
			$manager->persist($s);
	
			//-257-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0291505);
			$s->setSasa(14161.7);
			$s->setRGyr(25.4632);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(241));
			$manager->persist($s);
	
			//-258-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0291299);
			$s->setSasa(14048.2);
			$s->setRGyr(25.326);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(243));
			$manager->persist($s);
	
			//-259-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0522542);
			$s->setSasa(7687.43);
			$s->setRGyr(16.4948);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(432));
			$manager->persist($s);
	
			//-260-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0536588);
			$s->setSasa(7676.83);
			$s->setRGyr(16.1641);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(433));
			$manager->persist($s);
	
			//-261-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0616568);
			$s->setSasa(17651.6);
			$s->setRGyr(20.8915);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(334));
			$manager->persist($s);
	
			//-262-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0507626);
			$s->setSasa(6542.88);
			$s->setRGyr(14.6878);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(441));
			$manager->persist($s);
	
			//-263-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0642936);
			$s->setSasa(5953.95);
			$s->setRGyr(13.8417);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(423));
			$manager->persist($s);
	
			//-264-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0519744);
			$s->setSasa(7946.23);
			$s->setRGyr(16.3889);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(446));
			$manager->persist($s);
	
			//-265-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.129223);
			$s->setSasa(7121.62);
			$s->setRGyr(16.1644);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(421));
			$manager->persist($s);
	
			//-266-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0560388);
			$s->setSasa(13837.7);
			$s->setRGyr(19.6484);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(14));
			$manager->persist($s);
	
			//-267-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0633427);
			$s->setSasa(11265);
			$s->setRGyr(17.9804);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(21));
			$manager->persist($s);
	
			//-268-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.16042);
			$s->setSasa(6860.75);
			$s->setRGyr(14.7108);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(8));
			$manager->persist($s);
	
			//-269-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0661507);
			$s->setSasa(18389.1);
			$s->setRGyr(28.9318);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(3));
			$manager->persist($s);
	
			//-270-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.7321);
			$s->setContactOrder(0.0454603);
			$s->setSasa(9251.28);
			$s->setRGyr(18.3505);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(42));
			$manager->persist($s);
	
			//-271-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.106023);
			$s->setSasa(9671.53);
			$s->setRGyr(22.9678);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(44));
			$manager->persist($s);
	
			//-272-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0690286);
			$s->setSasa(14750);
			$s->setRGyr(19.3995);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(274));
			$manager->persist($s);
	
			//-273-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6881);
			$s->setContactOrder(0.0402808);
			$s->setSasa(10790.2);
			$s->setRGyr(21.0342);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(265));
			$manager->persist($s);
	
			//-274-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6808);
			$s->setContactOrder(0.0405022);
			$s->setSasa(10894.7);
			$s->setRGyr(20.9358);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(59));
			$manager->persist($s);
	
			//-275-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6819);
			$s->setContactOrder(0.0408042);
			$s->setSasa(10626.7);
			$s->setRGyr(20.7748);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(255));
			$manager->persist($s);
	
			//-276-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0706964);
			$s->setSasa(22755.1);
			$s->setRGyr(25.644);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(63));
			$manager->persist($s);
	
			//-277-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0619531);
			$s->setSasa(6592.8);
			$s->setRGyr(14.2724);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(426));
			$manager->persist($s);
	
			//-278-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.489);
			$s->setContactOrder(0.0567011);
			$s->setSasa(7227.98);
			$s->setRGyr(14.4547);
			$s->setIcsRepeats(1.51588181818182);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(311));
			$manager->persist($s);
	
			//-279-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0906171);
			$s->setSasa(10760.5);
			$s->setRGyr(18.3692);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(279));
			$manager->persist($s);
	
			//-280-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6814);
			$s->setContactOrder(0.060978);
			$s->setSasa(6729.9);
			$s->setRGyr(14.2368);
			$s->setIcsRepeats(1.69185303030303);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(291));
			$manager->persist($s);
	
			//-281-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6673);
			$s->setContactOrder(0.0635678);
			$s->setSasa(6573.28);
			$s->setRGyr(14.2803);
			$s->setIcsRepeats(1.93525303030303);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(295));
			$manager->persist($s);
	
			//-282-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0543039);
			$s->setSasa(7760.81);
			$s->setRGyr(16.0489);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(406));
			$manager->persist($s);
	
			//-283-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0548161);
			$s->setSasa(7554.53);
			$s->setRGyr(15.9688);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(428));
			$manager->persist($s);
	
			//-284-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.113782);
			$s->setSasa(8911.57);
			$s->setRGyr(16.5786);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(131));
			$manager->persist($s);
	
			//-285-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.112304);
			$s->setSasa(9103.82);
			$s->setRGyr(16.7243);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(314));
			$manager->persist($s);
	
			//-286-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.115459);
			$s->setSasa(8760.94);
			$s->setRGyr(16.3435);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(135));
			$manager->persist($s);
	
			//-287-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6411);
			$s->setContactOrder(0.0656713);
			$s->setSasa(6295.16);
			$s->setRGyr(13.8723);
			$s->setIcsRepeats(1.4963);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(139));
			$manager->persist($s);
	
			//-288-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0393501);
			$s->setSasa(10864.7);
			$s->setRGyr(21.1684);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(142));
			$manager->persist($s);
	
			//-289-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0395642);
			$s->setSasa(10400.9);
			$s->setRGyr(20.9752);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(80));
			$manager->persist($s);
	
			//-290-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.114819);
			$s->setSasa(8749.13);
			$s->setRGyr(19.7168);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(303));
			$manager->persist($s);
	
			//-291-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0407159);
			$s->setSasa(12330.1);
			$s->setRGyr(20.7458);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(83));
			$manager->persist($s);
	
			//-292-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0424442);
			$s->setSasa(5705.03);
			$s->setRGyr(23.3752);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(354));
			$manager->persist($s);
	
			//-293-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0550516);
			$s->setSasa(42673);
			$s->setRGyr(36.8576);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(147));
			$manager->persist($s);
	
			//-294-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0519993);
			$s->setSasa(44594.2);
			$s->setRGyr(37.5617);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(150));
			$manager->persist($s);
	
			//-295-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0519436);
			$s->setSasa(7973.12);
			$s->setRGyr(16.5046);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(364));
			$manager->persist($s);
	
			//-296-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0497231);
			$s->setSasa(8092.56);
			$s->setRGyr(16.6707);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(368));
			$manager->persist($s);
	
			//-297-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0565227);
			$s->setSasa(7918.82);
			$s->setRGyr(16.0886);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(160));
			$manager->persist($s);
	
			//-298-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0569698);
			$s->setSasa(7948.12);
			$s->setRGyr(16.0389);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(168));
			$manager->persist($s);
	
			//-299-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0557484);
			$s->setSasa(8139.27);
			$s->setRGyr(16.3132);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(172));
			$manager->persist($s);
	
			//-300-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0564554);
			$s->setSasa(7944.31);
			$s->setRGyr(16.0843);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(178));
			$manager->persist($s);
	
			//-301-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.116092);
			$s->setSasa(1737.24);
			$s->setRGyr(9.91435);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(382));
			$manager->persist($s);
	
			//-302-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.116437);
			$s->setSasa(1751.51);
			$s->setRGyr(10.0322);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(384));
			$manager->persist($s);
	
			//-303-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0434132);
			$s->setSasa(3800.69);
			$s->setRGyr(20.8301);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(188));
			$manager->persist($s);
	
			//-304-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0709955);
			$s->setSasa(22291.4);
			$s->setRGyr(25.5988);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(321));
			$manager->persist($s);
	
			//-305-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.105345);
			$s->setSasa(6069.18);
			$s->setRGyr(16.1635);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(326));
			$manager->persist($s);
	
			//-306-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0703131);
			$s->setSasa(18351.7);
			$s->setRGyr(22.1397);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(201));
			$manager->persist($s);
	
			//-307-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.140247);
			$s->setSasa(11130.9);
			$s->setRGyr(17.05);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(204));
			$manager->persist($s);
	
			//-308-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.141964);
			$s->setSasa(8784.27);
			$s->setRGyr(15.7947);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(216));
			$manager->persist($s);
	
			//-309-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0644957);
			$s->setSasa(16617.5);
			$s->setRGyr(20.6005);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(223));
			$manager->persist($s);
	
			//-310-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0560104);
			$s->setSasa(42821.8);
			$s->setRGyr(36.9787);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(229));
			$manager->persist($s);
	
			//-311-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0555071);
			$s->setSasa(42742.9);
			$s->setRGyr(37.0169);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(232));
			$manager->persist($s);
	
			//-312-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0554399);
			$s->setSasa(43083.1);
			$s->setRGyr(37.0375);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(235));
			$manager->persist($s);
	
			//-313-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0286847);
			$s->setSasa(6702.32);
			$s->setRGyr(34.0091);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(411));
			$manager->persist($s);
	
			//-314-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0281857);
			$s->setSasa(14693.7);
			$s->setRGyr(25.7763);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(244));
			$manager->persist($s);
	
			//-315-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.078623);
			$s->setSasa(8269.4);
			$s->setRGyr(14.9236);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(440));
			$manager->persist($s);
	
			//-316-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0905207);
			$s->setSasa(4672.38);
			$s->setRGyr(13.0957);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(435));
			$manager->persist($s);
	
			//-317-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6586);
			$s->setContactOrder(0.0513708);
			$s->setSasa(7177.85);
			$s->setRGyr(16.5687);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(15));
			$manager->persist($s);
	
			//-318-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.554);
			$s->setContactOrder(0.0374523);
			$s->setSasa(11418);
			$s->setRGyr(20.2046);
			$s->setIcsRepeats(1.4781303030303);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(9));
			$manager->persist($s);
	
			//-319-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.5577);
			$s->setContactOrder(0.0408876);
			$s->setSasa(11109.6);
			$s->setRGyr(20.19);
			$s->setIcsRepeats(1.66613787878788);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(32));
			$manager->persist($s);
	
			//-320-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.171422);
			$s->setSasa(6495.98);
			$s->setRGyr(13.9729);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(4));
			$manager->persist($s);
	
			//-321-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.5703);
			$s->setContactOrder(0.0420589);
			$s->setSasa(10843.5);
			$s->setRGyr(19.9047);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(45));
			$manager->persist($s);
	
			//-322-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0522577);
			$s->setSasa(7650.36);
			$s->setRGyr(16.2686);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(430));
			$manager->persist($s);
	
			//-323-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.102158);
			$s->setSasa(4718.27);
			$s->setRGyr(11.7241);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(266));
			$manager->persist($s);
	
			//-324-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.11663);
			$s->setSasa(4141.32);
			$s->setRGyr(11.1543);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(60));
			$manager->persist($s);
	
			//-325-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.114252);
			$s->setSasa(4156.31);
			$s->setRGyr(11.1649);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(256));
			$manager->persist($s);
	
			//-326-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0360056);
			$s->setSasa(6430.19);
			$s->setRGyr(27.1324);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(67));
			$manager->persist($s);
	
			//-327-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.113876);
			$s->setSasa(7906.23);
			$s->setRGyr(17.1353);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(280));
			$manager->persist($s);
	
			//-328-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0599362);
			$s->setSasa(6994.4);
			$s->setRGyr(14.5181);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(424));
			$manager->persist($s);
	
			//-329-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0651508);
			$s->setSasa(6288.57);
			$s->setRGyr(14.1486);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(429));
			$manager->persist($s);
	
			//-330-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0542553);
			$s->setSasa(7639.5);
			$s->setRGyr(16.0264);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(407));
			$manager->persist($s);
	
			//-331-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.12746);
			$s->setSasa(6977.77);
			$s->setRGyr(16.0435);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(132));
			$manager->persist($s);
	
			//-332-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.125326);
			$s->setSasa(7103.54);
			$s->setRGyr(16.1777);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(315));
			$manager->persist($s);
	
			//-333-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.127568);
			$s->setSasa(7007.9);
			$s->setRGyr(16.0405);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(136));
			$manager->persist($s);
	
			//-334-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.102551);
			$s->setSasa(4959.88);
			$s->setRGyr(11.8723);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(143));
			$manager->persist($s);
	
			//-335-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6844);
			$s->setContactOrder(0.0598182);
			$s->setSasa(6597.89);
			$s->setRGyr(14.2398);
			$s->setIcsRepeats(1.69873484848485);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(304));
			$manager->persist($s);
	
			//-336-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0388469);
			$s->setSasa(12673.8);
			$s->setRGyr(20.8881);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(84));
			$manager->persist($s);
	
			//-337-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0707164);
			$s->setSasa(21859.5);
			$s->setRGyr(25.4013);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(355));
			$manager->persist($s);
	
			//-338-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0513452);
			$s->setSasa(7514.8);
			$s->setRGyr(15.8879);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(358));
			$manager->persist($s);
	
			//-339-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0464589);
			$s->setSasa(7852.07);
			$s->setRGyr(16.2922);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(360));
			$manager->persist($s);
	
			//-340-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0510759);
			$s->setSasa(7912.92);
			$s->setRGyr(16.5662);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(365));
			$manager->persist($s);
	
			//-341-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0493088);
			$s->setSasa(8042.2);
			$s->setRGyr(16.7059);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(369));
			$manager->persist($s);
	
			//-342-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0569086);
			$s->setSasa(7936.04);
			$s->setRGyr(16.0982);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(161));
			$manager->persist($s);
	
			//-343-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0577738);
			$s->setSasa(7804.89);
			$s->setRGyr(15.9204);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(169));
			$manager->persist($s);
	
			//-344-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.055723);
			$s->setSasa(8128.86);
			$s->setRGyr(16.2404);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(173));
			$manager->persist($s);
	
			//-345-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0574889);
			$s->setSasa(7752.27);
			$s->setRGyr(15.9795);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(179));
			$manager->persist($s);
	
			//-346-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.124648);
			$s->setSasa(1616.86);
			$s->setRGyr(9.21839);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(383));
			$manager->persist($s);
	
			//-347-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.11605);
			$s->setSasa(1767.64);
			$s->setRGyr(10.0337);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(385));
			$manager->persist($s);
	
			//-348-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0347809);
			$s->setSasa(12825.3);
			$s->setRGyr(22.0396);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(327));
			$manager->persist($s);
	
			//-349-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0624183);
			$s->setSasa(6700.49);
			$s->setRGyr(14.2664);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(388));
			$manager->persist($s);
	
			//-350-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0606892);
			$s->setSasa(9564.67);
			$s->setRGyr(17.1462);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(205));
			$manager->persist($s);
	
			//-351-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.052255);
			$s->setSasa(7782.41);
			$s->setRGyr(16.2464);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(389));
			$manager->persist($s);
	
			//-352-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0610291);
			$s->setSasa(17228.9);
			$s->setRGyr(20.8288);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(224));
			$manager->persist($s);
	
			//-353-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.053017);
			$s->setSasa(8084.08);
			$s->setRGyr(16.1863);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(396));
			$manager->persist($s);
	
			//-354-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0531122);
			$s->setSasa(7976.57);
			$s->setRGyr(16.1751);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(398));
			$manager->persist($s);
	
			//-355-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0542902);
			$s->setSasa(7807.68);
			$s->setRGyr(16.3331);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(412));
			$manager->persist($s);
	
			//-356-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0289926);
			$s->setSasa(14052.6);
			$s->setRGyr(25.3437);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(245));
			$manager->persist($s);
	
			//-357-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0538474);
			$s->setSasa(7831.29);
			$s->setRGyr(16.3633);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(332));
			$manager->persist($s);
	
			//-358-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0465969);
			$s->setSasa(6435.84);
			$s->setRGyr(14.1238);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(442));
			$manager->persist($s);
	
			//-359-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0938005);
			$s->setSasa(4516.5);
			$s->setRGyr(12.7207);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(436));
			$manager->persist($s);
	
			//-360-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0532583);
			$s->setSasa(15248.3);
			$s->setRGyr(20.5696);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(22));
			$manager->persist($s);
	
			//-361-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6748);
			$s->setContactOrder(0.0402403);
			$s->setSasa(10313.7);
			$s->setRGyr(20.1714);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(5));
			$manager->persist($s);
	
			//-362-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.2007);
			$s->setContactOrder(0.0453187);
			$s->setSasa(13512.4);
			$s->setRGyr(19.7114);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(249));
			$manager->persist($s);
	
			//-363-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6824);
			$s->setContactOrder(0.0408649);
			$s->setSasa(10880.7);
			$s->setRGyr(20.8797);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(61));
			$manager->persist($s);
	
			//-364-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0292502);
			$s->setSasa(16970.5);
			$s->setRGyr(24.2879);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(68));
			$manager->persist($s);
	
			//-365-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0915711);
			$s->setSasa(10748.7);
			$s->setRGyr(18.0383);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(281));
			$manager->persist($s);
	
			//-366-
			$s = new ChainStructuralProperties();
			$s->setTileability(0);
			$s->setContactOrder(0.0300338);
			$s->setSasa(19973.3);
			$s->setRGyr(23.3603);
			$s->setIcsRepeats(1.31385303030303);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(117));
			$manager->persist($s);
	
			//-367-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0299427);
			$s->setSasa(20227.1);
			$s->setRGyr(23.3601);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(118));
			$manager->persist($s);
	
			//-368-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0452122);
			$s->setSasa(9710.96);
			$s->setRGyr(18.8087);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(356));
			$manager->persist($s);
	
			//-369-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0515722);
			$s->setSasa(7509.89);
			$s->setRGyr(15.7928);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(359));
			$manager->persist($s);
	
			//-370-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0443892);
			$s->setSasa(8218.78);
			$s->setRGyr(16.0818);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(361));
			$manager->persist($s);
	
			//-371-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.107663);
			$s->setSasa(1799.12);
			$s->setRGyr(10.3841);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(162));
			$manager->persist($s);
	
			//-372-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.113346);
			$s->setSasa(1945.01);
			$s->setRGyr(10.8931);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(370));
			$manager->persist($s);
	
			//-373-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.116959);
			$s->setSasa(1692.96);
			$s->setRGyr(9.85009);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(374));
			$manager->persist($s);
	
			//-374-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.115861);
			$s->setSasa(1754.97);
			$s->setRGyr(9.66823);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(378));
			$manager->persist($s);
	
			//-375-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.107527);
			$s->setSasa(5424.67);
			$s->setRGyr(12.3977);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(328));
			$manager->persist($s);
	
			//-376-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.140028);
			$s->setSasa(10874.5);
			$s->setRGyr(16.9589);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(206));
			$manager->persist($s);
	
			//-377-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0517289);
			$s->setSasa(7819.32);
			$s->setRGyr(16.2348);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(390));
			$manager->persist($s);
	
			//-378-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0514997);
			$s->setSasa(7816.83);
			$s->setRGyr(16.1931);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(394));
			$manager->persist($s);
	
			//-379-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0550241);
			$s->setSasa(7615.83);
			$s->setRGyr(15.9081);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(397));
			$manager->persist($s);
	
			//-380-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0544403);
			$s->setSasa(7707.85);
			$s->setRGyr(15.925);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(399));
			$manager->persist($s);
	
			//-381-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6848);
			$s->setContactOrder(0.0541399);
			$s->setSasa(7598.08);
			$s->setRGyr(16.1987);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(23));
			$manager->persist($s);
	
			//-382-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6649);
			$s->setContactOrder(0.0401256);
			$s->setSasa(10330.2);
			$s->setRGyr(20.1714);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(6));
			$manager->persist($s);
	
			//-383-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.1841);
			$s->setContactOrder(0.0436365);
			$s->setSasa(13878.2);
			$s->setRGyr(20.6454);
			$s->setIcsRepeats(1.36990454545455);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(250));
			$manager->persist($s);
	
			//-384-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0979167);
			$s->setSasa(4534.15);
			$s->setRGyr(11.4153);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(62));
			$manager->persist($s);
	
			//-385-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.116314);
			$s->setSasa(7618.58);
			$s->setRGyr(16.5874);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(282));
			$manager->persist($s);
	
			//-386-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0424795);
			$s->setSasa(5702.7);
			$s->setRGyr(23.3862);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(357));
			$manager->persist($s);
	
			//-387-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.113741);
			$s->setSasa(1802.6);
			$s->setRGyr(10.105);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(163));
			$manager->persist($s);
	
			//-388-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.117381);
			$s->setSasa(1676.6);
			$s->setRGyr(9.87221);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(371));
			$manager->persist($s);
	
			//-389-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.108996);
			$s->setSasa(1797.9);
			$s->setRGyr(10.4253);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(375));
			$manager->persist($s);
	
			//-390-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.127329);
			$s->setSasa(1545.71);
			$s->setRGyr(9.01486);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(379));
			$manager->persist($s);
	
			//-391-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.124381);
			$s->setSasa(6802.53);
			$s->setRGyr(16.1158);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(329));
			$manager->persist($s);
	
			//-392-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0603761);
			$s->setSasa(9657.98);
			$s->setRGyr(17.2883);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(207));
			$manager->persist($s);
	
			//-393-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0523863);
			$s->setSasa(7674.72);
			$s->setRGyr(16.0825);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(391));
			$manager->persist($s);
	
			//-394-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0518963);
			$s->setSasa(7756.42);
			$s->setRGyr(16.1423);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(395));
			$manager->persist($s);
	
			//-395-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.062531);
			$s->setSasa(11308);
			$s->setRGyr(17.9864);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(24));
			$manager->persist($s);
	
			//-396-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.2008);
			$s->setContactOrder(0.0457649);
			$s->setSasa(12382.6);
			$s->setRGyr(19.3414);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(251));
			$manager->persist($s);
	
			//-397-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0931195);
			$s->setSasa(10680.2);
			$s->setRGyr(18.0913);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(283));
			$manager->persist($s);
	
			//-398-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0660694);
			$s->setSasa(6596.25);
			$s->setRGyr(13.965);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(345));
			$manager->persist($s);
	
			//-399-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0651736);
			$s->setSasa(6676.72);
			$s->setRGyr(14.0971);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(316));
			$manager->persist($s);
	
			//-400-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0669419);
			$s->setSasa(6593.19);
			$s->setRGyr(13.9485);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(347));
			$manager->persist($s);
	
			//-401-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.127088);
			$s->setSasa(1550.68);
			$s->setRGyr(8.99669);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(164));
			$manager->persist($s);
	
			//-402-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.129016);
			$s->setSasa(1510.46);
			$s->setRGyr(8.93101);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(372));
			$manager->persist($s);
	
			//-403-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0847826);
			$s->setSasa(2266.12);
			$s->setRGyr(12.9526);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(376));
			$manager->persist($s);
	
			//-404-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.105223);
			$s->setSasa(1922.85);
			$s->setRGyr(10.6771);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(380));
			$manager->persist($s);
	
			//-405-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.139636);
			$s->setSasa(11312.3);
			$s->setRGyr(17.1339);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(208));
			$manager->persist($s);
	
			//-406-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.1868);
			$s->setContactOrder(0.0441797);
			$s->setSasa(13856.6);
			$s->setRGyr(20.4258);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(252));
			$manager->persist($s);
	
			//-407-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.113441);
			$s->setSasa(7979.82);
			$s->setRGyr(17.2098);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(284));
			$manager->persist($s);
	
			//-408-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.066201);
			$s->setSasa(6432.09);
			$s->setRGyr(14.0232);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(346));
			$manager->persist($s);
	
			//-409-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0651736);
			$s->setSasa(6676.72);
			$s->setRGyr(14.0971);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(317));
			$manager->persist($s);
	
			//-410-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0668712);
			$s->setSasa(6479.27);
			$s->setRGyr(13.9968);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(348));
			$manager->persist($s);
	
			//-411-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.115176);
			$s->setSasa(1696.58);
			$s->setRGyr(9.73264);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(165));
			$manager->persist($s);
	
			//-412-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.129412);
			$s->setSasa(1504.79);
			$s->setRGyr(9.04324);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(373));
			$manager->persist($s);
	
			//-413-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.089814);
			$s->setSasa(2117.3);
			$s->setRGyr(12.4268);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(377));
			$manager->persist($s);
	
			//-414-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.126949);
			$s->setSasa(1614.52);
			$s->setRGyr(8.94568);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(381));
			$manager->persist($s);
	
			//-415-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.059367);
			$s->setSasa(9736.3);
			$s->setRGyr(17.5604);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(209));
			$manager->persist($s);
	
			//-416-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0936613);
			$s->setSasa(10438.3);
			$s->setRGyr(18.043);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(285));
			$manager->persist($s);
	
			//-417-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.139756);
			$s->setSasa(11227.5);
			$s->setRGyr(17.0987);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(210));
			$manager->persist($s);
	
			//-418-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.122002);
			$s->setSasa(7483.83);
			$s->setRGyr(16.3426);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(286));
			$manager->persist($s);
	
			//-419-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0596441);
			$s->setSasa(10273.7);
			$s->setRGyr(17.8216);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(211));
			$manager->persist($s);
	
			//-420-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0385593);
			$s->setSasa(10807.6);
			$s->setRGyr(20.2627);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(64));
			$manager->persist($s);
	
			//-421-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.092777);
			$s->setSasa(10485.3);
			$s->setRGyr(17.8508);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(287));
			$manager->persist($s);
	
			//-422-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0388344);
			$s->setSasa(10928.9);
			$s->setRGyr(20.5921);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(322));
			$manager->persist($s);
	
			//-423-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.140795);
			$s->setSasa(11054.6);
			$s->setRGyr(17.0025);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(212));
			$manager->persist($s);
	
			//-424-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.113122);
			$s->setSasa(15124.1);
			$s->setRGyr(19.6508);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(335));
			$manager->persist($s);
	
			//-425-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.125034);
			$s->setSasa(7155.62);
			$s->setRGyr(15.5967);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(288));
			$manager->persist($s);
	
			//-426-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0607016);
			$s->setSasa(9693.14);
			$s->setRGyr(17.3538);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(213));
			$manager->persist($s);
	
			//-427-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0425314);
			$s->setSasa(5962.78);
			$s->setRGyr(23.5539);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(65));
			$manager->persist($s);
	
			//-428-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0425419);
			$s->setSasa(5910.02);
			$s->setRGyr(23.456);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(323));
			$manager->persist($s);
	
			//-429-
			$s = new ChainStructuralProperties();
			$s->setTileability(0.6542);
			$s->setContactOrder(0.0514538);
			$s->setSasa(8848.3);
			$s->setRGyr(16.6881);
			$s->setIcsRepeats(1.92856818181818);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(289));
			$manager->persist($s);
	
			//-430-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.101234);
			$s->setSasa(1308.97);
			$s->setRGyr(9.66536);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(344));
			$manager->persist($s);
	
			//-431-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0521593);
			$s->setSasa(8585.55);
			$s->setRGyr(16.4394);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(400));
			$manager->persist($s);
	
			//-432-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0512203);
			$s->setSasa(8827.51);
			$s->setRGyr(16.5227);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(401));
			$manager->persist($s);
	
			//-433-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0781045);
			$s->setSasa(2834.4);
			$s->setRGyr(13.3764);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(410));
			$manager->persist($s);
	
			//-434-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.053542);
			$s->setSasa(8381.38);
			$s->setRGyr(16.1363);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(402));
			$manager->persist($s);
	
			//-435-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.0545336);
			$s->setSasa(8416.88);
			$s->setRGyr(16.0363);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(403));
			$manager->persist($s);
	
			//-436-
			$s = new ChainStructuralProperties();
			$s->setContactOrder(0.053598);
			$s->setSasa(8493.83);
			$s->setRGyr(16.2196);
			$s->setChain($doctrine->getRepository('LFPStructuralAnksMainBundle:Chain')->findOneById(404));
			$manager->persist($s);
	
		$manager->flush();

		}

		public function getOrder() {
			return 7;
		}
	}