<?php

	namespace LFP\StructuralAnks\MainBundle\DataFixtures\ORM;

	use Doctrine\Common\DataFixtures\FixtureInterface;
	use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use LFP\StructuralAnks\MainBundle\Entity\Protein;
	use Symfony\Component\DependencyInjection\ContainerAwareInterface;
	use Symfony\Component\DependencyInjection\ContainerInterface;

	/**
	 * @author Jorge Cares <reaperjc@gmail.com>
	 */
	class LoadProteinData implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
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
			$tableName = $em->getClassMetadata('LFPStructuralAnksMainBundle:Protein')->getTableName();
			$em->getConnection()->exec("
				SET foreign_key_checks = 0;
				TRUNCATE $tableName;
				SET foreign_key_checks = 1;
			");

			// Reset ID column
			$em->getConnection()->exec("ALTER TABLE $tableName AUTO_INCREMENT = 1;");

	
			//-0-
			$s = new Protein();
			$s->setUniprot("DARPIN_E3_5");
			$s->setLength(165);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-1-
			$s = new Protein();
			$s->setUniprot("DARPIN_OFF7");
			$s->setLength(168);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-2-
			$s = new Protein();
			$s->setUniprot("DARPIN_E3_19");
			$s->setLength(165);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-3-
			$s = new Protein();
			$s->setUniprot("DARPIN_AR_3A");
			$s->setLength(168);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-4-
			$s = new Protein();
			$s->setUniprot("DARPIN_Clone_1108_19");
			$s->setLength(168);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-5-
			$s = new Protein();
			$s->setUniprot("DARPIN_H10_2_G3");
			$s->setLength(135);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-6-
			$s = new Protein();
			$s->setUniprot("DARPIN_AR_F8");
			$s->setLength(168);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-7-
			$s = new Protein();
			$s->setUniprot("DARPIN_NI3C");
			$s->setLength(165);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-8-
			$s = new Protein();
			$s->setUniprot("DARPIN_1D5");
			$s->setLength(135);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-9-
			$s = new Protein();
			$s->setUniprot("DARPIN_3H10");
			$s->setLength(166);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-10-
			$s = new Protein();
			$s->setUniprot("DARPIN_NI3C_Mut5");
			$s->setLength(156);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-11-
			$s = new Protein();
			$s->setUniprot("DARPIN_NI3C_Mut6");
			$s->setLength(156);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-12-
			$s = new Protein();
			$s->setUniprot("DARPIN_NI1C_Mut4");
			$s->setLength(90);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-13-
			$s = new Protein();
			$s->setUniprot("DARPIN_3CA1A2N-OH");
			$s->setLength(109);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-14-
			$s = new Protein();
			$s->setUniprot("DARPIN_3CA1A2N");
			$s->setLength(91);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-15-
			$s = new Protein();
			$s->setUniprot("DARPIN_3ANK");
			$s->setLength(92);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-16-
			$s = new Protein();
			$s->setUniprot("DARPIN_4ANK");
			$s->setLength(92);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-17-
			$s = new Protein();
			$s->setUniprot("DARPIN_20");
			$s->setLength(125);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-18-
			$s = new Protein();
			$s->setUniprot("Q04206");
			$s->setEntryName("TF65_HUMAN");
			$s->setProteinNames("Transcription factor p65(Nuclear factor NF-kappa-B p65 subunit)(Nuclear factor of kappa light polypeptide gene enhancer in B-cells 3)(Nuclear factor NF-kappa-B p65 subunit)(Nuclear factor of kappa light polypeptide gene enhancer in B-cells 3)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(551);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-19-
			$s = new Protein();
			$s->setUniprot("P19838");
			$s->setEntryName("NFKB1_HUMAN");
			$s->setProteinNames("Nuclear factor NF-kappa-B p105 subunit(DNA-binding factor KBF1)(EBP-1)(Nuclear factor of kappa light polypeptide gene enhancer in B-cells 1)(DNA-binding factor KBF1)(EBP-1)(Nuclear factor of kappa light polypeptide gene enhancer in B-cells 1)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(968);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-20-
			$s = new Protein();
			$s->setUniprot("P25963");
			$s->setEntryName("IKBA_HUMAN");
			$s->setProteinNames("NF-kappa-B inhibitor alpha(I-kappa-B-alpha)(Major histocompatibility complex enhancer-binding protein MAD3)(I-kappa-B-alpha)(Major histocompatibility complex enhancer-binding protein MAD3)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(317);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-21-
			$s = new Protein();
			$s->setUniprot("Q04207");
			$s->setEntryName("TF65_MOUSE");
			$s->setProteinNames("Transcription factor p65(Nuclear factor NF-kappa-B p65 subunit)(Nuclear factor of kappa light polypeptide gene enhancer in B-cells 3)(Nuclear factor NF-kappa-B p65 subunit)(Nuclear factor of kappa light polypeptide gene enhancer in B-cells 3)");
			$s->setOrganism("Mus musculus (Mouse)");
			$s->setOrganismId(10090);
			$s->setLength(549);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-22-
			$s = new Protein();
			$s->setUniprot("P25799");
			$s->setEntryName("NFKB1_MOUSE");
			$s->setProteinNames("Nuclear factor NF-kappa-B p105 subunit(DNA-binding factor KBF1)(EBP-1)(NF-kappa-B1 p84/NF-kappa-B1 p98)(Nuclear factor of kappa light polypeptide gene enhancer in B-cells 1)(DNA-binding factor KBF1)(EBP-1)(NF-kappa-B1 p84/NF-kappa-B1 p98)(Nuclear factor of kappa light polypeptide gene enhancer in B-cells 1)");
			$s->setOrganism("Mus musculus (Mouse)");
			$s->setOrganismId(10090);
			$s->setLength(971);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-23-
			$s = new Protein();
			$s->setUniprot("Q60773");
			$s->setEntryName("CDN2D_MOUSE");
			$s->setProteinNames("p19-INK4d");
			$s->setOrganism("Mus musculus (Mouse)");
			$s->setOrganismId(10090);
			$s->setLength(166);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-24-
			$s = new Protein();
			$s->setUniprot("P55273");
			$s->setEntryName("CDN2D_HUMAN");
			$s->setProteinNames("p19-INK4d");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(166);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-25-
			$s = new Protein();
			$s->setUniprot("Q00534");
			$s->setEntryName("CDK6_HUMAN");
			$s->setProteinNames("Cyclin-dependent kinase 6(Cell division protein kinase 6)(Serine/threonine-protein kinase PLSTIRE)(Cell division protein kinase 6)(Serine/threonine-protein kinase PLSTIRE)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(326);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-26-
			$s = new Protein();
			$s->setUniprot("P42773");
			$s->setEntryName("CDN2C_HUMAN");
			$s->setProteinNames("Cyclin-dependent kinase 4 inhibitor C(Cyclin-dependent kinase 6 inhibitor)(p18-INK4c)(p18-INK6)(Cyclin-dependent kinase 6 inhibitor)(p18-INK4c)(p18-INK6)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(168);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-27-
			$s = new Protein();
			$s->setUniprot("P55271");
			$s->setEntryName("CDN2B_MOUSE");
			$s->setProteinNames("Cyclin-dependent kinase 4 inhibitor B(p14-INK4b)(p15-INK4b)(p14-INK4b)(p15-INK4b)");
			$s->setOrganism("Mus musculus (Mouse)");
			$s->setOrganismId(10090);
			$s->setLength(130);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-28-
			$s = new Protein();
			$s->setUniprot("O40946");
			$s->setEntryName("O40946_HHV8");
			$s->setOrganism("Human herpesvirus 8 (HHV-8)(Kaposis sarcoma-associated herpesvirus)");
			$s->setOrganismId(37296);
			$s->setLength(257);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-29-
			$s = new Protein();
			$s->setUniprot("P50086");
			$s->setEntryName("PSD10_YEAST");
			$s->setProteinNames("Proteasome non-ATPase subunit 6");
			$s->setOrganism("Saccharomyces cerevisiae (strain ATCC 204508 / S288c) (Bakers yeast)");
			$s->setOrganismId(559292);
			$s->setLength(228);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-30-
			$s = new Protein();
			$s->setUniprot("P20749");
			$s->setEntryName("BCL3_HUMAN");
			$s->setProteinNames("Proto-oncogene BCL3");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(454);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-31-
			$s = new Protein();
			$s->setUniprot("Q60778");
			$s->setEntryName("IKBB_MOUSE");
			$s->setProteinNames("I-kappa-B-beta");
			$s->setOrganism("Mus musculus (Mouse)");
			$s->setOrganismId(10090);
			$s->setLength(359);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-32-
			$s = new Protein();
			$s->setUniprot("P16157");
			$s->setEntryName("ANK1_HUMAN");
			$s->setProteinNames("Ankyrin-1(Ankyrin-R)(Erythrocyte ankyrin)(Ankyrin-R)(Erythrocyte ankyrin)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(1881);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-33-
			$s = new Protein();
			$s->setUniprot("P07207");
			$s->setEntryName("NOTCH_DROME");
			$s->setProteinNames("Neurogenic locus Notch protein");
			$s->setOrganism("Drosophila melanogaster (Fruit fly)");
			$s->setOrganismId(7227);
			$s->setLength(2703);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-34-
			$s = new Protein();
			$s->setUniprot("O75832");
			$s->setEntryName("PSD10_HUMAN");
			$s->setProteinNames("26S proteasome non-ATPase regulatory subunit 10(26S proteasome regulatory subunit p28)(Gankyrin)(p28(GANK))(26S proteasome regulatory subunit p28)(Gankyrin)(p28(GANK))");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(226);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-35-
			$s = new Protein();
			$s->setUniprot("P09959");
			$s->setEntryName("SWI6_YEAST");
			$s->setProteinNames("Regulatory protein SWI6(Cell-cycle box factor subunit SWI6)(MBF subunit P90)(Trans-acting activator of HO endonuclease gene)(Cell-cycle box factor subunit SWI6)(MBF subunit P90)(Trans-acting activator of HO endonuclease gene)");
			$s->setOrganism("Saccharomyces cerevisiae (strain ATCC 204508 / S288c) (Bakers yeast)");
			$s->setOrganismId(559292);
			$s->setLength(803);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-36-
			$s = new Protein();
			$s->setUniprot("Q05823");
			$s->setEntryName("RN5A_HUMAN");
			$s->setProteinNames("2-5A-dependent ribonuclease(Ribonuclease 4)(Ribonuclease L)(Ribonuclease 4)(Ribonuclease L)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(741);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-37-
			$s = new Protein();
			$s->setUniprot("P04637");
			$s->setEntryName("P53_HUMAN");
			$s->setProteinNames("Cellular tumor antigen p53(Antigen NY-CO-13)(Phosphoprotein p53)(Tumor suppressor p53)(Antigen NY-CO-13)(Phosphoprotein p53)(Tumor suppressor p53)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(393);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-38-
			$s = new Protein();
			$s->setUniprot("Q13625");
			$s->setEntryName("ASPP2_HUMAN");
			$s->setProteinNames("Apoptosis-stimulating of p53 protein 2(Bcl2-binding protein)(Renal carcinoma antigen NY-REN-51)(Tumor suppressor p53-binding protein 2)(Bcl2-binding protein)(Renal carcinoma antigen NY-REN-51)(Tumor suppressor p53-binding protein 2)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(1128);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-39-
			$s = new Protein();
			$s->setUniprot("P46531");
			$s->setEntryName("NOTC1_HUMAN");
			$s->setProteinNames("Translocation-associated notch protein TAN-1");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(2555);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-40-
			$s = new Protein();
			$s->setUniprot("Q9Z2X2");
			$s->setEntryName("PSD10_MOUSE");
			$s->setProteinNames("26S proteasome non-ATPase regulatory subunit 10(26S proteasome regulatory subunit p28)(Gankyrin)(26S proteasome regulatory subunit p28)(Gankyrin)");
			$s->setOrganism("Mus musculus (Mouse)");
			$s->setOrganismId(10090);
			$s->setLength(231);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-41-
			$s = new Protein();
			$s->setUniprot("P43686");
			$s->setEntryName("PRS6B_HUMAN");
			$s->setProteinNames("26S protease regulatory subunit 6B(26S proteasome AAA-ATPase subunit RPT3)(MB67-interacting protein)(MIP224)(Proteasome 26S subunit ATPase 4)(Tat-binding protein 7)(26S proteasome AAA-ATPase subunit RPT3)(MB67-interacting protein)(MIP224)(Proteasome 26S subunit ATPase 4)(Tat-binding protein 7)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(418);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-42-
			$s = new Protein();
			$s->setUniprot("Q63570");
			$s->setEntryName("PRS6B_RAT");
			$s->setProteinNames("26S protease regulatory subunit 6B(26S proteasome AAA-ATPase subunit RPT3)(Proteasome 26S subunit ATPase 4)(Tat-binding protein 7)(26S proteasome AAA-ATPase subunit RPT3)(Proteasome 26S subunit ATPase 4)(Tat-binding protein 7)");
			$s->setOrganism("Rattus norvegicus (Rat)");
			$s->setOrganismId(10116);
			$s->setLength(418);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-43-
			$s = new Protein();
			$s->setUniprot("P33298");
			$s->setEntryName("PRS6B_YEAST");
			$s->setProteinNames("26S protease regulatory subunit 6B homolog(Protein YNT1)(Tat-binding homolog 2)(Protein YNT1)(Tat-binding homolog 2)");
			$s->setOrganism("Saccharomyces cerevisiae (strain ATCC 204508 / S288c) (Bakers yeast)");
			$s->setOrganismId(559292);
			$s->setLength(428);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-44-
			$s = new Protein();
			$s->setUniprot("Q06330");
			$s->setEntryName("SUH_HUMAN");
			$s->setProteinNames("Recombining binding protein suppressor of hairless(CBF-1)(J kappa-recombination signal-binding protein)(RBP-J kappa)(Renal carcinoma antigen NY-REN-30)(CBF-1)(J kappa-recombination signal-binding protein)(RBP-J kappa)(Renal carcinoma antigen NY-REN-30)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(500);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-45-
			$s = new Protein();
			$s->setUniprot("Q92585");
			$s->setEntryName("MAML1_HUMAN");
			$s->setProteinNames("Mastermind-like protein 1");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(1016);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-46-
			$s = new Protein();
			$s->setUniprot("Q8MXE7");
			$s->setEntryName("Q8MXE7_CAEEL");
			$s->setOrganism("Caenorhabditis elegans");
			$s->setOrganismId(6239);
			$s->setLength(671);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-47-
			$s = new Protein();
			$s->setUniprot("Q09260");
			$s->setEntryName("LAG3_CAEEL");
			$s->setProteinNames("Protein lag-3(Abnormal cell lineage protein 3)(Abnormal germline proliferation protein 3)(Abnormal cell lineage protein 3)(Abnormal germline proliferation protein 3)");
			$s->setOrganism("Caenorhabditis elegans");
			$s->setOrganismId(6239);
			$s->setLength(490);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-48-
			$s = new Protein();
			$s->setUniprot("P14585");
			$s->setEntryName("LIN12_CAEEL");
			$s->setProteinNames("Abnormal cell lineage protein 12");
			$s->setOrganism("Caenorhabditis elegans");
			$s->setOrganismId(6239);
			$s->setLength(1429);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-49-
			$s = new Protein();
			$s->setUniprot("O35433");
			$s->setEntryName("TRPV1_RAT");
			$s->setProteinNames("Transient receptor potential cation channel subfamily V member 1(Capsaicin receptor)(Osm-9-like TRP channel 1)(Vanilloid receptor 1)(Vanilloid receptor type 1-like)(Capsaicin receptor)(Osm-9-like TRP channel 1)(Vanilloid receptor 1)(Vanilloid receptor type 1-like)");
			$s->setOrganism("Rattus norvegicus (Rat)");
			$s->setOrganismId(10116);
			$s->setLength(838);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-50-
			$s = new Protein();
			$s->setUniprot("Q9H9B1");
			$s->setEntryName("EHMT1_HUMAN");
			$s->setProteinNames("Histone-lysine N-methyltransferase EHMT1(Euchromatic histone-lysine N-methyltransferase 1)(G9a-like protein 1)(Histone H3-K9 methyltransferase 5)(Lysine N-methyltransferase 1D)(Euchromatic histone-lysine N-methyltransferase 1)(G9a-like protein 1)(Histone H3-K9 methyltransferase 5)(Lysine N-methyltransferase 1D)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(1298);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-51-
			$s = new Protein();
			$s->setUniprot("P68431");
			$s->setEntryName("H31_HUMAN");
			$s->setProteinNames("Histone H3.1(Histone H3/a)(Histone H3/b)(Histone H3/c)(Histone H3/d)(Histone H3/f)(Histone H3/h)(Histone H3/i)(Histone H3/j)(Histone H3/k)(Histone H3/l)(Histone H3/a)(Histone H3/b)(Histone H3/c)(Histone H3/d)(Histone H3/f)(Histone H3/h)(Histone H3/i)(Histone H3/j)(Histone H3/k)(Histone H3/l)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(136);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-52-
			$s = new Protein();
			$s->setUniprot("Q99728");
			$s->setEntryName("BARD1_HUMAN");
			$s->setProteinNames("BRCA1-associated RING domain protein 1");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(777);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-53-
			$s = new Protein();
			$s->setUniprot("Q53F80");
			$s->setEntryName("Q53F80_HUMAN");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(777);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-54-
			$s = new Protein();
			$s->setUniprot("O22265");
			$s->setEntryName("SR43C_ARATH");
			$s->setProteinNames("Chromo protein SRP43");
			$s->setOrganism("Arabidopsis thaliana (Mouse-ear cress)");
			$s->setOrganismId(3702);
			$s->setLength(373);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-55-
			$s = new Protein();
			$s->setUniprot("Q8IUH5");
			$s->setEntryName("ZDH17_HUMAN");
			$s->setProteinNames("Palmitoyltransferase ZDHHC17(Huntingtin yeast partner H)(Huntingtin-interacting protein 14)(Huntingtin-interacting protein 3)(Huntingtin-interacting protein H)(Putative MAPK-activating protein PM11)(Putative NF-kappa-B-activating protein 205)(Zinc finger DHHC domain-containing protein 17)(Huntingtin yeast partner H)(Huntingtin-interacting protein 14)(Huntingtin-interacting protein 3)(Huntingtin-in");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(632);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-56-
			$s = new Protein();
			$s->setUniprot("A8KA01");
			$s->setEntryName("A8KA01_HUMAN");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(622);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-57-
			$s = new Protein();
			$s->setUniprot("Q9DFS3");
			$s->setEntryName("Q9DFS3_CHICK");
			$s->setOrganism("Gallus gallus (Chicken)");
			$s->setOrganismId(9031);
			$s->setLength(852);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-58-
			$s = new Protein();
			$s->setUniprot("F1NYW1");
			$s->setEntryName("F1NYW1_CHICK");
			$s->setOrganism("Gallus gallus (Chicken)");
			$s->setOrganismId(9031);
			$s->setLength(852);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-59-
			$s = new Protein();
			$s->setUniprot("Q00422");
			$s->setEntryName("GABPA_MOUSE");
			$s->setProteinNames("GA-binding protein alpha chain");
			$s->setOrganism("Mus musculus (Mouse)");
			$s->setOrganismId(10090);
			$s->setLength(454);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-60-
			$s = new Protein();
			$s->setUniprot("Q00420");
			$s->setEntryName("GABP1_MOUSE");
			$s->setProteinNames("GABP subunit beta-2");
			$s->setOrganism("Mus musculus (Mouse)");
			$s->setOrganismId(10090);
			$s->setLength(383);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-61-
			$s = new Protein();
			$s->setUniprot("Q7SIG6");
			$s->setEntryName("ASAP2_MOUSE");
			$s->setProteinNames("Arf-GAP with SH3 domain, ANK repeat and PH domain-containing protein 2(Development and differentiation-enhancing factor 2)(Paxillin-associated protein with ARF GAP activity 3)(Pyk2 C-terminus-associated protein)(Development and differentiation-enhancing factor 2)(Paxillin-associated protein with ARF GAP activity 3)(Pyk2 C-terminus-associated protein)");
			$s->setOrganism("Mus musculus (Mouse)");
			$s->setOrganismId(10090);
			$s->setLength(958);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-62-
			$s = new Protein();
			$s->setUniprot("P62775");
			$s->setEntryName("MTPN_RAT");
			$s->setProteinNames("Myotrophin(Granule cell differentiation protein)(Protein V-1)(Granule cell differentiation protein)(Protein V-1)");
			$s->setOrganism("Rattus norvegicus (Rat)");
			$s->setOrganismId(10116);
			$s->setLength(118);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-63-
			$s = new Protein();
			$s->setUniprot("P62207");
			$s->setEntryName("PP1B_CHICK");
			$s->setProteinNames("Serine/threonine-protein phosphatase PP1-beta catalytic subunit");
			$s->setOrganism("Gallus gallus (Chicken)");
			$s->setOrganismId(9031);
			$s->setLength(327);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-64-
			$s = new Protein();
			$s->setUniprot("Q90623");
			$s->setEntryName("MYPT1_CHICK");
			$s->setProteinNames("Protein phosphatase 1 regulatory subunit 12A(130 kDa myosin-binding subunit of smooth muscle myosin phosphatase)(Myosin phosphatase-targeting subunit 1)(PP1M subunit M110)(Protein phosphatase myosin-binding subunit)(130 kDa myosin-binding subunit of smooth muscle myosin phosphatase)(Myosin phosphatase-targeting subunit 1)(PP1M subunit M110)(Protein phosphatase myosin-binding subunit)");
			$s->setOrganism("Gallus gallus (Chicken)");
			$s->setOrganismId(9031);
			$s->setLength(1004);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-65-
			$s = new Protein();
			$s->setUniprot("Q01705");
			$s->setEntryName("NOTC1_MOUSE");
			$s->setProteinNames("Neurogenic locus notch homolog protein 1(Motch A)(mT14)(p300)(Motch A)(mT14)(p300)");
			$s->setOrganism("Mus musculus (Mouse)");
			$s->setOrganismId(10090);
			$s->setLength(2531);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-66-
			$s = new Protein();
			$s->setUniprot("Q8TDY4");
			$s->setEntryName("ASAP3_HUMAN");
			$s->setProteinNames("Arf-GAP with SH3 domain, ANK repeat and PH domain-containing protein 3(Development and differentiation-enhancing factor-like 1)(Protein up-regulated in liver cancer 1)(Development and differentiation-enhancing factor-like 1)(Protein up-regulated in liver cancer 1)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(903);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-67-
			$s = new Protein();
			$s->setUniprot("Q9WUD2");
			$s->setEntryName("TRPV2_RAT");
			$s->setProteinNames("Transient receptor potential cation channel subfamily V member 2(Osm-9-like TRP channel 2)(Stretch-activated channel 2B)(Vanilloid receptor-like protein 1)(Osm-9-like TRP channel 2)(Stretch-activated channel 2B)(Vanilloid receptor-like protein 1)");
			$s->setOrganism("Rattus norvegicus (Rat)");
			$s->setOrganismId(10116);
			$s->setLength(761);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-68-
			$s = new Protein();
			$s->setUniprot("Q9Y5S1");
			$s->setEntryName("TRPV2_HUMAN");
			$s->setProteinNames("Transient receptor potential cation channel subfamily V member 2(Osm-9-like TRP channel 2)(Vanilloid receptor-like protein 1)(Osm-9-like TRP channel 2)(Vanilloid receptor-like protein 1)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(764);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-69-
			$s = new Protein();
			$s->setUniprot("Q91WD2");
			$s->setEntryName("TRPV6_MOUSE");
			$s->setProteinNames("Transient receptor potential cation channel subfamily V member 6(Calcium transport protein 1)(Epithelial calcium channel 2)(Calcium transport protein 1)(Epithelial calcium channel 2)");
			$s->setOrganism("Mus musculus (Mouse)");
			$s->setOrganismId(10090);
			$s->setLength(727);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-70-
			$s = new Protein();
			$s->setUniprot("Q978J0");
			$s->setEntryName("Y1425_THEVO");
			$s->setProteinNames("Putative ankyrin repeat protein TV1425");
			$s->setOrganism("Thermoplasma volcanium (strain ATCC 51530 / DSM 4299 / JCM 9571 / NBRC 15438 / GSS1)");
			$s->setOrganismId(273116);
			$s->setLength(189);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-71-
			$s = new Protein();
			$s->setUniprot("Q8WUF5");
			$s->setEntryName("IASPP_HUMAN");
			$s->setProteinNames("RelA-associated inhibitor(Inhibitor of ASPP protein)(NFkB-interacting protein 1)(PPP1R13B-like protein)(Inhibitor of ASPP protein)(NFkB-interacting protein 1)(PPP1R13B-like protein)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(828);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-72-
			$s = new Protein();
			$s->setUniprot("Q96DX5");
			$s->setEntryName("ASB9_HUMAN");
			$s->setProteinNames("Ankyrin repeat and SOCS box protein 9");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(294);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-73-
			$s = new Protein();
			$s->setUniprot("Q92882");
			$s->setEntryName("OSTF1_HUMAN");
			$s->setProteinNames("Osteoclast-stimulating factor 1");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(214);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-74-
			$s = new Protein();
			$s->setUniprot("Q13418");
			$s->setEntryName("ILK_HUMAN");
			$s->setProteinNames("Integrin-linked protein kinase(59 kDa serine/threonine-protein kinase)(ILK-1)(ILK-2)(p59ILK)(59 kDa serine/threonine-protein kinase)(ILK-1)(ILK-2)(p59ILK)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(452);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-75-
			$s = new Protein();
			$s->setUniprot("P48059");
			$s->setEntryName("LIMS1_HUMAN");
			$s->setProteinNames("LIM and senescent cell antigen-like-containing domain protein 1(Particularly interesting new Cys-His protein 1)(Renal carcinoma antigen NY-REN-48)(Particularly interesting new Cys-His protein 1)(Renal carcinoma antigen NY-REN-48)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(325);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-76-
			$s = new Protein();
			$s->setUniprot("Q7Z4I7");
			$s->setEntryName("LIMS2_HUMAN");
			$s->setProteinNames("LIM and senescent cell antigen-like-containing domain protein 2(LIM-like protein 2)(Particularly interesting new Cys-His protein 2)(LIM-like protein 2)(Particularly interesting new Cys-His protein 2)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(341);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-77-
			$s = new Protein();
			$s->setUniprot("Q6IV60");
			$s->setEntryName("Q6IV60_9POXV");
			$s->setOrganism("Vaccinia virus");
			$s->setOrganismId(10245);
			$s->setLength(284);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-78-
			$s = new Protein();
			$s->setUniprot("E9ADW8");
			$s->setEntryName("E9ADW8_LEIMA");
			$s->setOrganism("Leishmania major");
			$s->setOrganismId(5664);
			$s->setLength(360);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-79-
			$s = new Protein();
			$s->setUniprot("Q15369");
			$s->setEntryName("ELOC_HUMAN");
			$s->setProteinNames("Transcription elongation factor B polypeptide 1(Elongin 15 kDa subunit)(Elongin-C)(RNA polymerase II transcription factor SIII subunit C)(SIII p15)(Elongin 15 kDa subunit)(Elongin-C)(RNA polymerase II transcription factor SIII subunit C)(SIII p15)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(112);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-80-
			$s = new Protein();
			$s->setUniprot("Q15370");
			$s->setEntryName("ELOB_HUMAN");
			$s->setProteinNames("Transcription elongation factor B polypeptide 2(Elongin 18 kDa subunit)(Elongin-B)(RNA polymerase II transcription factor SIII subunit B)(SIII p18)(Elongin 18 kDa subunit)(Elongin-B)(RNA polymerase II transcription factor SIII subunit B)(SIII p18)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(118);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-81-
			$s = new Protein();
			$s->setUniprot("Q9HBA0");
			$s->setEntryName("TRPV4_HUMAN");
			$s->setProteinNames("Transient receptor potential cation channel subfamily V member 4(Osm-9-like TRP channel 4)(Transient receptor potential protein 12)(Vanilloid receptor-like channel 2)(Vanilloid receptor-like protein 2)(Vanilloid receptor-related osmotically-activated channel)(Osm-9-like TRP channel 4)(Transient receptor potential protein 12)(Vanilloid receptor-like channel 2)(Vanilloid receptor-like protein 2)(Van");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(871);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-82-
			$s = new Protein();
			$s->setUniprot("P42771");
			$s->setEntryName("CD2A1_HUMAN");
			$s->setProteinNames("Cyclin-dependent kinase inhibitor 2A, isoforms 1/2/3(Cyclin-dependent kinase 4 inhibitor A)(Multiple tumor suppressor 1)(p16-INK4a)(Cyclin-dependent kinase 4 inhibitor A)(Multiple tumor suppressor 1)(p16-INK4a)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(156);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-83-
			$s = new Protein();
			$s->setUniprot("Q5ZSV0");
			$s->setEntryName("Q5ZSV0_LEGPH");
			$s->setOrganism("Legionella pneumophila subsp. pneumophila (strain Philadelphia 1 / ATCC 33152 / DSM 7513)");
			$s->setOrganismId(272624);
			$s->setLength(368);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-84-
			$s = new Protein();
			$s->setUniprot("P13127");
			$s->setEntryName("CAZA1_CHICK");
			$s->setProteinNames("F-actin-capping protein subunit alpha-1(Beta-actinin subunit I)(CapZ 36/32)(Beta-actinin subunit I)(CapZ 36/32)");
			$s->setOrganism("Gallus gallus (Chicken)");
			$s->setOrganismId(9031);
			$s->setLength(286);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-85-
			$s = new Protein();
			$s->setUniprot("P14315");
			$s->setEntryName("CAPZB_CHICK");
			$s->setProteinNames("F-actin-capping protein subunit beta isoforms 1 and 2(Beta-actinin subunit II)(CapZ 36/32)(CapZ B1 and B2)(Beta-actinin subunit II)(CapZ 36/32)(CapZ B1 and B2)");
			$s->setOrganism("Gallus gallus (Chicken)");
			$s->setOrganismId(9031);
			$s->setLength(277);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-86-
			$s = new Protein();
			$s->setUniprot("P62774");
			$s->setEntryName("MTPN_MOUSE");
			$s->setProteinNames("Myotrophin(Granule cell differentiation protein)(Protein V-1)(Granule cell differentiation protein)(Protein V-1)");
			$s->setOrganism("Mus musculus (Mouse)");
			$s->setOrganismId(10090);
			$s->setLength(118);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-87-
			$s = new Protein();
			$s->setUniprot("Q9NWT6");
			$s->setEntryName("HIF1N_HUMAN");
			$s->setProteinNames("Hypoxia-inducible factor 1-alpha inhibitor(Factor inhibiting HIF-1)(Hypoxia-inducible factor asparagine hydroxylase)(Factor inhibiting HIF-1)(Hypoxia-inducible factor asparagine hydroxylase)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(349);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-88-
			$s = new Protein();
			$s->setUniprot("P42574");
			$s->setEntryName("CASP3_HUMAN");
			$s->setProteinNames("Caspase-3(Apopain)(Cysteine protease CPP32)(Protein Yama)(SREBP cleavage activity 1)(Apopain)(Cysteine protease CPP32)(Protein Yama)(SREBP cleavage activity 1)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(277);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-89-
			$s = new Protein();
			$s->setUniprot("Q9H2K2");
			$s->setEntryName("TNKS2_HUMAN");
			$s->setProteinNames("Tankyrase-2(ADP-ribosyltransferase diphtheria toxin-like 6)(Poly [ADP-ribose] polymerase 5B)(TNKS-2)(TRF1-interacting ankyrin-related ADP-ribose polymerase 2)(Tankyrase II)(Tankyrase-like protein)(Tankyrase-related protein)(ADP-ribosyltransferase diphtheria toxin-like 6)(Poly [ADP-ribose] polymerase 5B)(TNKS-2)(TRF1-interacting ankyrin-related ADP-ribose polymerase 2)(Tankyrase II)(Tankyrase-like");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(1166);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-90-
			$s = new Protein();
			$s->setUniprot("Q14790");
			$s->setEntryName("CASP8_HUMAN");
			$s->setProteinNames("Caspase-8(Apoptotic cysteine protease)(Apoptotic protease Mch-5)(CAP4)(FADD-homologous ICE/ced-3-like protease)(FADD-like ICE)(ICE-like apoptotic protease 5)(MORT1-associated ced-3 homolog)(Apoptotic cysteine protease)(Apoptotic protease Mch-5)(CAP4)(FADD-homologous ICE/ced-3-like protease)(FADD-like ICE)(ICE-like apoptotic protease 5)(MORT1-associated ced-3 homolog)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(479);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-91-
			$s = new Protein();
			$s->setUniprot("P58546");
			$s->setEntryName("MTPN_HUMAN");
			$s->setProteinNames("Protein V-1");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(118);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-92-
			$s = new Protein();
			$s->setUniprot("P54775");
			$s->setEntryName("PRS6B_MOUSE");
			$s->setProteinNames("26S protease regulatory subunit 6B(26S proteasome AAA-ATPase subunit RPT3)(CIP21)(MB67-interacting protein)(MIP224)(Proteasome 26S subunit ATPase 4)(Tat-binding protein 7)(26S proteasome AAA-ATPase subunit RPT3)(CIP21)(MB67-interacting protein)(MIP224)(Proteasome 26S subunit ATPase 4)(Tat-binding protein 7)");
			$s->setOrganism("Mus musculus (Mouse)");
			$s->setOrganismId(10090);
			$s->setLength(418);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-93-
			$s = new Protein();
			$s->setUniprot("Q838Q8");
			$s->setEntryName("Q838Q8_ENTFA");
			$s->setOrganism("Enterococcus faecalis (strain ATCC 700802 / V583)");
			$s->setOrganismId(226185);
			$s->setLength(201);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-94-
			$s = new Protein();
			$s->setUniprot("Q15027");
			$s->setEntryName("ACAP1_HUMAN");
			$s->setProteinNames("Centaurin-beta-1");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(740);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-95-
			$s = new Protein();
			$s->setUniprot("P31224");
			$s->setEntryName("ACRB_ECOLI");
			$s->setProteinNames("Acriflavine resistance protein B");
			$s->setOrganism("Escherichia coli (strain K12)");
			$s->setOrganismId(83333);
			$s->setLength(1049);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-96-
			$s = new Protein();
			$s->setUniprot("Q9H9E1");
			$s->setEntryName("ANRA2_HUMAN");
			$s->setProteinNames("RFXANK-like protein 2");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(313);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-97-
			$s = new Protein();
			$s->setUniprot("C7NDE2");
			$s->setEntryName("C7NDE2_LEPBD");
			$s->setOrganism("Leptotrichia buccalis (strain ATCC 14201 / DSM 1135 / JCM 12969 / NCTC 10249)");
			$s->setOrganismId(523794);
			$s->setLength(183);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-98-
			$s = new Protein();
			$s->setUniprot("P05556");
			$s->setEntryName("ITB1_HUMAN");
			$s->setProteinNames("Integrin beta-1(Fibronectin receptor subunit beta)(VLA-4 subunit beta)(Fibronectin receptor subunit beta)(VLA-4 subunit beta)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(798);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-99-
			$s = new Protein();
			$s->setUniprot("P78314");
			$s->setEntryName("3BP2_HUMAN");
			$s->setProteinNames("SH3 domain-binding protein 2");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(561);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-100-
			$s = new Protein();
			$s->setUniprot("Q07820");
			$s->setEntryName("MCL1_HUMAN");
			$s->setProteinNames("Induced myeloid leukemia cell differentiation protein Mcl-1(Bcl-2-like protein 3)(Bcl-2-related protein EAT/mcl1)(mcl1/EAT)(Bcl-2-like protein 3)(Bcl-2-related protein EAT/mcl1)(mcl1/EAT)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(350);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-101-
			$s = new Protein();
			$s->setUniprot("P37107");
			$s->setEntryName("SR54C_ARATH");
			$s->setProteinNames("FFC");
			$s->setOrganism("Arabidopsis thaliana (Mouse-ear cress)");
			$s->setOrganismId(3702);
			$s->setLength(564);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-102-
			$s = new Protein();
			$s->setUniprot("Q6PFX9");
			$s->setEntryName("TNKS1_MOUSE");
			$s->setProteinNames("Tankyrase-1(ADP-ribosyltransferase diphtheria toxin-like 5)(TRF1-interacting ankyrin-related ADP-ribose polymerase 1)(ADP-ribosyltransferase diphtheria toxin-like 5)(TRF1-interacting ankyrin-related ADP-ribose polymerase 1)");
			$s->setOrganism("Mus musculus (Mouse)");
			$s->setOrganismId(10090);
			$s->setLength(1320);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-103-
			$s = new Protein();
			$s->setUniprot("O35625");
			$s->setEntryName("AXIN1_MOUSE");
			$s->setProteinNames("Axin-1(Axis inhibition protein 1)(Protein Fused)(Axis inhibition protein 1)(Protein Fused)");
			$s->setOrganism("Mus musculus (Mouse)");
			$s->setOrganismId(10090);
			$s->setLength(863);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-104-
			$s = new Protein();
			$s->setUniprot("O14593");
			$s->setEntryName("RFXK_HUMAN");
			$s->setProteinNames("DNA-binding protein RFXANK(Ankyrin repeat family A protein 1)(Regulatory factor X subunit B)(Regulatory factor X-associated ankyrin-containing protein)(Ankyrin repeat family A protein 1)(Regulatory factor X subunit B)(Regulatory factor X-associated ankyrin-containing protein)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(260);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-105-
			$s = new Protein();
			$s->setUniprot("P56524");
			$s->setEntryName("HDAC4_HUMAN");
			$s->setProteinNames("Histone deacetylase 4");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(1084);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-106-
			$s = new Protein();
			$s->setUniprot("P98158");
			$s->setEntryName("LRP2_RAT");
			$s->setProteinNames("Low-density lipoprotein receptor-related protein 2(Glycoprotein 330)(Megalin)(Glycoprotein 330)(Megalin)");
			$s->setOrganism("Rattus norvegicus (Rat)");
			$s->setOrganismId(10116);
			$s->setLength(4660);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-107-
			$s = new Protein();
			$s->setUniprot("P48382");
			$s->setEntryName("RFX5_HUMAN");
			$s->setProteinNames("Regulatory factor X 5");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(616);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-108-
			$s = new Protein();
			$s->setUniprot("P63086");
			$s->setEntryName("MK01_RAT");
			$s->setProteinNames("Mitogen-activated protein kinase 1(ERT1)(Extracellular signal-regulated kinase 2)(MAP kinase isoform p42)(Mitogen-activated protein kinase 2)(ERT1)(Extracellular signal-regulated kinase 2)(MAP kinase isoform p42)(Mitogen-activated protein kinase 2)");
			$s->setOrganism("Rattus norvegicus (Rat)");
			$s->setOrganismId(10116);
			$s->setLength(358);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-109-
			$s = new Protein();
			$s->setUniprot("O15350");
			$s->setEntryName("P73_HUMAN");
			$s->setProteinNames("Tumor protein p73(p53-like transcription factor)(p53-related protein)(p53-like transcription factor)(p53-related protein)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(636);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-110-
			$s = new Protein();
			$s->setUniprot("P11818");
			$s->setEntryName("SPIKE_ADE05");
			$s->setProteinNames("Protein IV");
			$s->setOrganism("Human adenovirus C serotype 5 (HAdV-5)(Human adenovirus 5)");
			$s->setOrganismId(28285);
			$s->setLength(581);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-111-
			$s = new Protein();
			$s->setUniprot("P70280");
			$s->setEntryName("VAMP7_MOUSE");
			$s->setProteinNames("Synaptobrevin-like protein 1");
			$s->setOrganism("Mus musculus (Mouse)");
			$s->setOrganismId(10090);
			$s->setLength(220);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-112-
			$s = new Protein();
			$s->setUniprot("Q96NW4");
			$s->setEntryName("ANR27_HUMAN");
			$s->setProteinNames("VPS9 domain-containing protein");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(1050);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-113-
			$s = new Protein();
			$s->setUniprot("D0VWZ0");
			$s->setEntryName("D0VWZ0_SHEEP");
			$s->setOrganism("Ovis aries (Sheep)");
			$s->setOrganismId(9940);
			$s->setLength(451);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-114-
			$s = new Protein();
			$s->setUniprot("D0VWY9");
			$s->setEntryName("D0VWY9_SHEEP");
			$s->setOrganism("Ovis aries (Sheep)");
			$s->setOrganismId(9940);
			$s->setLength(445);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-115-
			$s = new Protein();
			$s->setUniprot("O88522");
			$s->setEntryName("NEMO_MOUSE");
			$s->setProteinNames("NF-kappa-B essential modulator(IkB kinase-associated protein 1)(Inhibitor of nuclear factor kappa-B kinase subunit gamma)(NF-kappa-B essential modifier)(IkB kinase-associated protein 1)(Inhibitor of nuclear factor kappa-B kinase subunit gamma)(NF-kappa-B essential modifier)");
			$s->setOrganism("Mus musculus (Mouse)");
			$s->setOrganismId(10090);
			$s->setLength(412);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-116-
			$s = new Protein();
			$s->setUniprot("Q8VC91");
			$s->setEntryName("Q8VC91_MOUSE");
			$s->setOrganism("Mus musculus (Mouse)");
			$s->setOrganismId(10090);
			$s->setLength(411);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-117-
			$s = new Protein();
			$s->setUniprot("P0AEX9");
			$s->setEntryName("MALE_ECOLI");
			$s->setProteinNames("Maltose-binding periplasmic protein(MBP)(MMBP)(Maltodextrin-binding protein)(MBP)(MMBP)(Maltodextrin-binding protein)");
			$s->setOrganism("Escherichia coli (strain K12)");
			$s->setOrganismId(83333);
			$s->setLength(396);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-118-
			$s = new Protein();
			$s->setUniprot("E2DP59");
			$s->setEntryName("E2DP59_STREE");
			$s->setOrganism("Streptococcus pneumoniae");
			$s->setOrganismId(1313);
			$s->setLength(264);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-119-
			$s = new Protein();
			$s->setUniprot("P0A3Y5");
			$s->setEntryName("KKA3_ENTFL");
			$s->setProteinNames("Aminoglycoside 3'-phosphotransferase(APH(3')III)(Kanamycin kinase, type III)(Neomycin-kanamycin phosphotransferase type III)(APH(3')III)(Kanamycin kinase, type III)(Neomycin-kanamycin phosphotransferase type III)");
			$s->setOrganism("Enterococcus faecalis (Streptococcus faecalis)");
			$s->setOrganismId(1351);
			$s->setLength(264);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-120-
			$s = new Protein();
			$s->setUniprot("P0A3Y6");
			$s->setEntryName("KKA3_STAAU");
			$s->setProteinNames("Aminoglycoside 3'-phosphotransferase(APH(3')III)(Kanamycin kinase, type III)(Neomycin-kanamycin phosphotransferase type III)(APH(3')III)(Kanamycin kinase, type III)(Neomycin-kanamycin phosphotransferase type III)");
			$s->setOrganism("Staphylococcus aureus");
			$s->setOrganismId(1280);
			$s->setLength(263);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-121-
			$s = new Protein();
			$s->setUniprot("P42575");
			$s->setEntryName("CASP2_HUMAN");
			$s->setProteinNames("Caspase-2(Neural precursor cell expressed developmentally down-regulated protein 2)(Protease ICH-1)(Neural precursor cell expressed developmentally down-regulated protein 2)(Protease ICH-1)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(452);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-122-
			$s = new Protein();
			$s->setUniprot("B4E085");
			$s->setEntryName("B4E085_HUMAN");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(202);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-123-
			$s = new Protein();
			$s->setUniprot("B4E0I5");
			$s->setEntryName("B4E0I5_HUMAN");
			$s->setProteinNames("HASH(0x5d2bfe8)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(336);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-124-
			$s = new Protein();
			$s->setUniprot("NRC");
			$s->setLength(117);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-125-
			$s = new Protein();
			$s->setUniprot("P53350");
			$s->setEntryName("PLK1_HUMAN");
			$s->setProteinNames("Serine/threonine-protein kinase PLK1(Polo-like kinase 1)(Serine/threonine-protein kinase 13)(Polo-like kinase 1)(Serine/threonine-protein kinase 13)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(603);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-126-
			$s = new Protein();
			$s->setUniprot("Q9G096");
			$s->setEntryName("Q9G096_9CAUD");
			$s->setOrganism("Lactococcus phage TP901-1");
			$s->setOrganismId(35345);
			$s->setLength(163);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-127-
			$s = new Protein();
			$s->setUniprot("DARPIN-34_I78S");
			$s->setLength(138);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-128-
			$s = new Protein();
			$s->setUniprot("OR266");
			$s->setLength(172);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-129-
			$s = new Protein();
			$s->setUniprot("OR264");
			$s->setLength(172);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-130-
			$s = new Protein();
			$s->setUniprot("DARPin_E2_79");
			$s->setLength(137);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-131-
			$s = new Protein();
			$s->setUniprot("Darpin_D2");
			$s->setLength(172);
			$s->setRepType("Ank");
			$s->setSubGroup("DARPIN");
			$manager->persist($s);
	
			//-132-
			$s = new Protein();
			$s->setUniprot("P33176");
			$s->setEntryName("KINH_HUMAN");
			$s->setProteinNames("Kinesin-1 heavy chain(Conventional kinesin heavy chain)(Ubiquitous kinesin heavy chain)(Conventional kinesin heavy chain)(Ubiquitous kinesin heavy chain)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(963);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-133-
			$s = new Protein();
			$s->setUniprot("Darpin_D1");
			$s->setOrganismId(0);
			$s->setLength(169);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-134-
			$s = new Protein();
			$s->setUniprot("1n0q_B");
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-135-
			$s = new Protein();
			$s->setUniprot("DNA");
			$manager->persist($s);
	
			//-136-
			$s = new Protein();
			$s->setUniprot("3b95_P");
			$s->setLength(15);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-137-
			$s = new Protein();
			$s->setUniprot("2xzd_G");
			$s->setLength(136);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-138-
			$s = new Protein();
			$s->setUniprot("2xzd_H");
			$s->setLength(136);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-139-
			$s = new Protein();
			$s->setUniprot("2y0b_G");
			$s->setLength(136);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-140-
			$s = new Protein();
			$s->setUniprot("2y0b_H");
			$s->setLength(136);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-141-
			$s = new Protein();
			$s->setUniprot("3noc_D");
			$s->setLength(169);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-142-
			$s = new Protein();
			$s->setUniprot("3noc_E");
			$s->setLength(169);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-143-
			$s = new Protein();
			$s->setUniprot("3nog_D");
			$s->setLength(169);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-144-
			$s = new Protein();
			$s->setUniprot("3nog_E");
			$s->setLength(169);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-145-
			$s = new Protein();
			$s->setUniprot("3q9n_A");
			$s->setLength(141);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-146-
			$s = new Protein();
			$s->setUniprot("3q9n_B");
			$s->setLength(141);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-147-
			$s = new Protein();
			$s->setUniprot("3q9n_C");
			$s->setLength(158);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-148-
			$s = new Protein();
			$s->setUniprot("3q9n_D");
			$s->setLength(158);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-149-
			$s = new Protein();
			$s->setUniprot("3q9u_A");
			$s->setLength(141);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-150-
			$s = new Protein();
			$s->setUniprot("3q9u_B");
			$s->setLength(141);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-151-
			$s = new Protein();
			$s->setUniprot("3q9u_C");
			$s->setLength(158);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-152-
			$s = new Protein();
			$s->setUniprot("3q9u_D");
			$s->setLength(158);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-153-
			$s = new Protein();
			$s->setUniprot("3tws_E");
			$s->setLength(16);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-154-
			$s = new Protein();
			$s->setUniprot("3tws_F");
			$s->setLength(16);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-155-
			$s = new Protein();
			$s->setUniprot("3tws_G");
			$s->setLength(16);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-156-
			$s = new Protein();
			$s->setUniprot("3tws_H");
			$s->setLength(16);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-157-
			$s = new Protein();
			$s->setUniprot("3twt_E");
			$s->setLength(16);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-158-
			$s = new Protein();
			$s->setUniprot("3twt_F");
			$s->setLength(16);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-159-
			$s = new Protein();
			$s->setUniprot("3twt_G");
			$s->setLength(16);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-160-
			$s = new Protein();
			$s->setUniprot("3twt_H");
			$s->setLength(16);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-161-
			$s = new Protein();
			$s->setUniprot("3twv_E");
			$s->setLength(16);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-162-
			$s = new Protein();
			$s->setUniprot("3twv_F");
			$s->setLength(16);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-163-
			$s = new Protein();
			$s->setUniprot("3twv_G");
			$s->setLength(16);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-164-
			$s = new Protein();
			$s->setUniprot("3twv_H");
			$s->setLength(16);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-165-
			$s = new Protein();
			$s->setUniprot("3tww_C");
			$s->setLength(16);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-166-
			$s = new Protein();
			$s->setUniprot("3tww_D");
			$s->setLength(16);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-167-
			$s = new Protein();
			$s->setUniprot("3twx_C");
			$s->setLength(16);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-168-
			$s = new Protein();
			$s->setUniprot("3twx_D");
			$s->setLength(16);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-169-
			$s = new Protein();
			$s->setUniprot("3zu7_B");
			$s->setLength(169);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-170-
			$s = new Protein();
			$s->setUniprot("3zuv_B");
			$s->setLength(136);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-171-
			$s = new Protein();
			$s->setUniprot("3zuv_D");
			$s->setLength(136);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-172-
			$s = new Protein();
			$s->setUniprot("4atz_D");
			$s->setLength(154);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-173-
			$s = new Protein();
			$s->setUniprot("4atz_E");
			$s->setLength(154);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-174-
			$s = new Protein();
			$s->setUniprot("4atz_F");
			$s->setLength(154);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-175-
			$s = new Protein();
			$s->setUniprot("4b7e_B");
			$s->setLength(17);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-176-
			$s = new Protein();
			$s->setUniprot("4b7k_B");
			$s->setLength(20);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-177-
			$s = new Protein();
			$s->setUniprot("4drx_E");
			$s->setLength(169);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-178-
			$s = new Protein();
			$s->setUniprot("4drx_F");
			$s->setLength(169);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-179-
			$s = new Protein();
			$s->setUniprot("4dx5_D");
			$s->setLength(169);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-180-
			$s = new Protein();
			$s->setUniprot("4dx5_E");
			$s->setLength(169);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-181-
			$s = new Protein();
			$s->setUniprot("4dx7_D");
			$s->setLength(169);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-182-
			$s = new Protein();
			$s->setUniprot("4dx7_E");
			$s->setLength(169);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-183-
			$s = new Protein();
			$s->setUniprot("3v79_R");
			$s->setLength(19);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-184-
			$s = new Protein();
			$s->setUniprot("3v79_X");
			$s->setLength(18);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-185-
			$s = new Protein();
			$s->setUniprot("3v79_Y");
			$s->setLength(18);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-186-
			$s = new Protein();
			$s->setUniprot("4f6r_C");
			$s->setLength(87);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-187-
			$s = new Protein();
			$s->setUniprot("4f6r_D");
			$s->setLength(169);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-188-
			$s = new Protein();
			$s->setUniprot("Q5ZXN6");
			$s->setEntryName("ANKX_LEGPH");
			$s->setProteinNames("Ankyrin repeat-containing protein X");
			$s->setOrganism("Legionella pneumophila subsp. pneumophila (strain Philadelphia 1 / ATCC 33152 / DSM 7513)");
			$s->setOrganismId(272624);
			$s->setLength(949);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-189-
			$s = new Protein();
			$s->setUniprot("P55210");
			$s->setEntryName("CASP7_HUMAN");
			$s->setProteinNames("Caspase-7(Apoptotic protease Mch-3)(CMH-1)(ICE-like apoptotic protease 3)(Apoptotic protease Mch-3)(CMH-1)(ICE-like apoptotic protease 3)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(303);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-190-
			$s = new Protein();
			$s->setUniprot("4jb8_B");
			$s->setLength(97);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-191-
			$s = new Protein();
			$s->setUniprot("4hrn_A");
			$s->setLength(136);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-192-
			$s = new Protein();
			$s->setUniprot("4hrn_B");
			$s->setLength(136);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-193-
			$s = new Protein();
			$s->setUniprot("4gpm_B");
			$s->setLength(169);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-194-
			$s = new Protein();
			$s->setUniprot("3dep_B");
			$s->setLength(12);
			$s->setRepType("Ank");
			$s->setSubGroup("peptide");
			$manager->persist($s);
	
			//-195-
			$s = new Protein();
			$s->setUniprot("P04626");
			$s->setEntryName("ERBB2_HUMAN");
			$s->setProteinNames("Receptor tyrosine-protein kinase erbB-2(Metastatic lymph node gene 19 protein)(Proto-oncogene Neu)(Proto-oncogene c-ErbB-2)(Tyrosine kinase-type cell surface receptor HER2)(p185erbB2)(Metastatic lymph node gene 19 protein)(Proto-oncogene Neu)(Proto-oncogene c-ErbB-2)(Tyrosine kinase-type cell surface receptor HER2)(p185erbB2)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(1255);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-196-
			$s = new Protein();
			$s->setUniprot("Q63ZY3");
			$s->setEntryName("KANK2_HUMAN");
			$s->setProteinNames("KN motif and ankyrin repeat domain-containing protein 2(Ankyrin repeat domain-containing protein 25)(Matrix-remodeling-associated protein 3)(SRC-1-interacting protein)(Ankyrin repeat domain-containing protein 25)(Matrix-remodeling-associated protein 3)(SRC-1-interacting protein)");
			$s->setOrganism("Homo sapiens (Human)");
			$s->setOrganismId(9606);
			$s->setLength(851);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-197-
			$s = new Protein();
			$s->setUniprot("4hll_A");
			$s->setLength(173);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-198-
			$s = new Protein();
			$s->setUniprot("4hrl_A");
			$s->setLength(171);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-199-
			$s = new Protein();
			$s->setUniprot("4hrm_B");
			$s->setLength(172);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-200-
			$s = new Protein();
			$s->setUniprot("4hrm_D");
			$s->setLength(172);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-201-
			$s = new Protein();
			$s->setUniprot("P05750");
			$s->setEntryName("RS3_YEAST");
			$s->setProteinNames("40S ribosomal protein S3(RP13)(YS3)(RP13)(YS3)");
			$s->setOrganism("Saccharomyces cerevisiae (strain ATCC 204508 / S288c) (Bakers yeast)");
			$s->setOrganismId(559292);
			$s->setLength(240);
			$s->setRepType("Ank");
			$s->setSubGroup("Partner");
			$manager->persist($s);
	
			//-202-
			$s = new Protein();
			$s->setUniprot("P46683");
			$s->setEntryName("YAR1_YEAST");
			$s->setProteinNames("Ankyrin repeat-containing protein YAR1");
			$s->setOrganism("Saccharomyces cerevisiae (strain ATCC 204508 / S288c) (Bakers yeast)");
			$s->setOrganismId(559292);
			$s->setLength(200);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-203-
			$s = new Protein();
			$s->setUniprot("4j7w_A");
			$s->setLength(169);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-204-
			$s = new Protein();
			$s->setUniprot("4j7w_B");
			$s->setLength(169);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
			//-205-
			$s = new Protein();
			$s->setUniprot("4j8y_A");
			$s->setLength(169);
			$s->setRepType("Ank");
			$s->setSubGroup("Ank");
			$manager->persist($s);
	
		$manager->flush();

		}

		public function getOrder() {
			return 3;
		}
	}