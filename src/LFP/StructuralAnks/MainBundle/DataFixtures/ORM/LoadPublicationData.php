<?php

	namespace LFP\StructuralAnks\MainBundle\DataFixtures\ORM;

	use Doctrine\Common\DataFixtures\FixtureInterface;
	use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use LFP\StructuralAnks\MainBundle\Entity\Publication;
	use Symfony\Component\DependencyInjection\ContainerAwareInterface;
	use Symfony\Component\DependencyInjection\ContainerInterface;

	/**
	 * @author Jorge Cares <reaperjc@gmail.com>
	 */
	class LoadPublicationData implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
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
			$tableName = $em->getClassMetadata('LFPStructuralAnksMainBundle:Publication')->getTableName();
			$em->getConnection()->exec("
				SET foreign_key_checks = 0;
				TRUNCATE $tableName;
				SET foreign_key_checks = 1;
			");

			// Reset ID column
			$em->getConnection()->exec("ALTER TABLE $tableName AUTO_INCREMENT = 1;");

	
			//-0-
			$s = new Publication();
			$s->setPubmedId("0");
			$s->setAuthors("Nakamura, Y. Umehara, T. Tanaka, A. Horikosh");
			$s->setTitle("Structural comparison of Nas6p protein struct");
			$s->setJournal("() To be Published :");
			$s->setUrl("/pubmed/");
			$manager->persist($s);
	
			//-1-
			$s = new Publication();
			$s->setPubmedId("2");
			$manager->persist($s);
	
			//-2-
			$s = new Publication();
			$s->setPubmedId("8805514");
			$s->setAuthors("Armstrong, S.R. Cook, W.J. Short, S.A. Ealic");
			$s->setTitle("Crystal structures of nucleoside 2-deoxyribos");
			$s->setJournal("(1996) Structure 4:97107");
			$s->setUrl("/pubmed/8805514");
			$manager->persist($s);
	
			//-3-
			$s = new Publication();
			$s->setPubmedId("8875926");
			$s->setAuthors("Gorina, S. Pavletich, N.P.");
			$s->setTitle("Structure of the p53 tumor suppressor bound t");
			$s->setJournal("(1996) Science 274:10011005");
			$s->setUrl("/pubmed/8875926");
			$manager->persist($s);
	
			//-4-
			$s = new Publication();
			$s->setPubmedId("9353127");
			$s->setAuthors("Luh, F.Y. Archer, S.J. Domaille, P.J. Smith,");
			$s->setTitle("Structure of the cyclin-dependent kinase inhi");
			$s->setJournal("(1997) Nature 389:9991003");
			$s->setUrl("/pubmed/9353127");
			$manager->persist($s);
	
			//-5-
			$s = new Publication();
			$s->setPubmedId("9437433");
			$s->setAuthors("Venkataramani, R. Swaminathan, K. Marmorstei");
			$s->setTitle("Crystal structure of the CDK4/6 inhibitory pr");
			$s->setJournal("(1998) Nat.Struct.Biol. 5:7481");
			$s->setUrl("/pubmed/9437433");
			$manager->persist($s);
	
			//-6-
			$s = new Publication();
			$s->setPubmedId("9461436");
			$s->setAuthors("Batchelor, A.H. Piper, D.E. de la Brousse, F");
			$s->setTitle("The structure of GABPalpha/beta: an ETS domai");
			$s->setJournal("(1998) Science 279:10371041");
			$s->setUrl("/pubmed/9461436");
			$manager->persist($s);
	
			//-7-
			$s = new Publication();
			$s->setPubmedId("9482716");
			$s->setAuthors("Das, A.K. Cohen, P.W. Barford, D.");
			$s->setTitle("The structure of the tetratricopeptide repeat");
			$s->setJournal("(1998) EMBO J. 17:11921199");
			$s->setUrl("/pubmed/9482716");
			$manager->persist($s);
	
			//-8-
			$s = new Publication();
			$s->setPubmedId("9634699");
			$s->setAuthors("Yang, Y. Nanduri, S. Sen, S. Qin, J.");
			$s->setTitle("The structural basis of ankyrin-like repeat f");
			$s->setJournal("(1998) Structure 6:619626");
			$s->setUrl("/pubmed/9634699");
			$manager->persist($s);
	
			//-9-
			$s = new Publication();
			$s->setPubmedId("9660926");
			$s->setAuthors("Byeon, I.J. Li, J. Ericson, K. Selby, T.L. T");
			$s->setTitle("Tumor suppressor p16INK4A: determination of s");
			$s->setJournal("(1998) Mol.Cell 1:421431");
			$s->setUrl("/pubmed/9660926");
			$manager->persist($s);
	
			//-10-
			$s = new Publication();
			$s->setPubmedId("9751050");
			$s->setAuthors("Russo, A.A. Tong, L. Lee, J.O. Jeffrey, P.D.");
			$s->setTitle("Structural basis for inhibition of the cyclin");
			$s->setJournal("(1998) Nature 395:237243");
			$s->setUrl("/pubmed/9751050");
			$manager->persist($s);
	
			//-11-
			$s = new Publication();
			$s->setPubmedId("9751051");
			$s->setAuthors("Brotherton, D.H. Dhanaraj, V. Wick, S. Brizu");
			$s->setTitle("Crystal structure of the complex of the cycli");
			$s->setJournal("(1998) Nature 395:244250");
			$s->setUrl("/pubmed/9751051");
			$manager->persist($s);
	
			//-12-
			$s = new Publication();
			$s->setPubmedId("9782052");
			$s->setAuthors("Baumgartner, R. Fernandez-Catalan, C. Winoto");
			$s->setTitle("Structure of human cyclin-dependent kinase in");
			$s->setJournal("(1998) Structure 6:12791290");
			$s->setUrl("/pubmed/9782052");
			$manager->persist($s);
	
			//-13-
			$s = new Publication();
			$s->setPubmedId("9865693");
			$s->setAuthors("Jacobs, M.D. Harrison, S.C.");
			$s->setTitle("Structure of an IkappaBalpha/NF-kappaB comple");
			$s->setJournal("(1998) Cell(Cambridge,Mass.) 95:749758");
			$s->setUrl("/pubmed/9865693");
			$manager->persist($s);
	
			//-14-
			$s = new Publication();
			$s->setPubmedId("9865694");
			$s->setAuthors("Huxford, T. Huang, D.B. Malek, S. Ghosh, G.");
			$s->setTitle("The crystal structure of the IkappaBalpha/NF-");
			$s->setJournal("(1998) Cell(Cambridge,Mass.) 95:759770");
			$s->setUrl("/pubmed/9865694");
			$manager->persist($s);
	
			//-15-
			$s = new Publication();
			$s->setPubmedId("10048928");
			$s->setAuthors("Foord, R. Taylor, I.A. Sedgwick, S.G. Smerdo");
			$s->setTitle("X-ray structural analysis of the yeast cell c");
			$s->setJournal("(1999) Nat.Struct.Biol. 6:157165");
			$s->setUrl("/pubmed/10048928");
			$manager->persist($s);
	
			//-16-
			$s = new Publication();
			$s->setPubmedId("10074345");
			$s->setAuthors("Li, J. Byeon, I.J. Ericson, K. Poi, M.J. O'M");
			$s->setTitle("Tumor suppressor INK4: determination of the s");
			$s->setJournal("(1999) Biochemistry 38:29302940");
			$s->setUrl("/pubmed/10074345");
			$manager->persist($s);
	
			//-17-
			$s = new Publication();
			$s->setPubmedId("10360576");
			$s->setAuthors("Ybe, J.A. Brodsky, F.M. Hofmann, K. Lin, K.");
			$s->setTitle("Clathrin self-assembly is mediated by a tande");
			$s->setJournal("(1999) Nature 399:371375");
			$s->setUrl("/pubmed/10360576");
			$manager->persist($s);
	
			//-18-
			$s = new Publication();
			$s->setPubmedId("10556039");
			$s->setAuthors("Yuan, C. Li, J. Selby, T.L. Byeon, I.J. Tsai");
			$s->setTitle("Tumor suppressor INK4: comparisons of conform");
			$s->setJournal("(1999) J.Mol.Biol. 294:201211");
			$s->setUrl("/pubmed/10556039");
			$manager->persist($s);
	
			//-19-
			$s = new Publication();
			$s->setPubmedId("10601011");
			$s->setAuthors("Mandiyan, V. Andreev, J. Schlessinger, J. Hu");
			$s->setTitle("Crystal structure of the ARF-GAP domain and a");
			$s->setJournal("(1999) EMBO J. 18:68906898");
			$s->setUrl("/pubmed/10601011");
			$manager->persist($s);
	
			//-20-
			$s = new Publication();
			$s->setPubmedId("10892805");
			$s->setAuthors("Yuan, C. Selby, T.L. Li, J. Byeon, I.J. Tsai");
			$s->setTitle("Tumor suppressor INK4: refinement of p16INK4A");
			$s->setJournal("(2000) Protein Sci. 9:11201128");
			$s->setUrl("/pubmed/10892805");
			$manager->persist($s);
	
			//-21-
			$s = new Publication();
			$s->setPubmedId("11124804");
			$s->setAuthors("Jeffrey, P.D. Tong, L. Pavletich, N.P.");
			$s->setTitle("Structural basis of inhibition of CDK-cyclin");
			$s->setJournal("(2000) Genes Dev. 14:31153125");
			$s->setUrl("/pubmed/11124804");
			$manager->persist($s);
	
			//-22-
			$s = new Publication();
			$s->setPubmedId("11707390");
			$s->setAuthors("Michel, F. Soler-Lopez, M. Petosa, C. Cramer");
			$s->setTitle("Crystal structure of the ankyrin repeat domai");
			$s->setJournal("(2001) EMBO J. 20:61806190");
			$s->setUrl("/pubmed/11707390");
			$manager->persist($s);
	
			//-23-
			$s = new Publication();
			$s->setPubmedId("12370184");
			$s->setAuthors("Venkataramani, R.N. MacLachlan, T.K. Chai, X");
			$s->setTitle("Structure-based design of p18INK4c proteins w");
			$s->setJournal("(2002) J.Biol.Chem. 277:4882748833");
			$s->setUrl("/pubmed/12370184");
			$manager->persist($s);
	
			//-24-
			$s = new Publication();
			$s->setPubmedId("12456646");
			$s->setAuthors("Michaely, P. Tomchick, D.R. Machius, M. Ande");
			$s->setTitle("Crystal structure of a 12 ANK repeat stack fr");
			$s->setJournal("(2002) Embo J. 21:63876396");
			$s->setUrl("/pubmed/12456646");
			$manager->persist($s);
	
			//-25-
			$s = new Publication();
			$s->setPubmedId("12461176");
			$s->setAuthors("Mosavi, L.K. Minor Jr., D.L. Peng, Z.Y.");
			$s->setTitle("Consensus-derived structural determinants of");
			$s->setJournal("(2002) Proc.Natl.Acad.Sci.USA 99:1602916034");
			$s->setUrl("/pubmed/12461176");
			$manager->persist($s);
	
			//-26-
			$s = new Publication();
			$s->setPubmedId("12566564");
			$s->setAuthors("Kohl, A. Binz, H.K. Forrer, P. Stumpp, M.T.");
			$s->setTitle("Designed to be stable: Crystal structure of a");
			$s->setJournal("(2003) Proc.Natl.Acad.Sci.USA 100:17001705");
			$s->setUrl("/pubmed/12566564");
			$manager->persist($s);
	
			//-27-
			$s = new Publication();
			$s->setPubmedId("12686541");
			$s->setAuthors("Malek, S. Huang, D.B. Huxford, T. Ghosh, S.");
			$s->setTitle("X-ray crystal structure of an IkappaBbeta x N");
			$s->setJournal("(2003) J.Biol.Chem. 278:2309423100");
			$s->setUrl("/pubmed/12686541");
			$manager->persist($s);
	
			//-28-
			$s = new Publication();
			$s->setPubmedId("14573599");
			$s->setAuthors("Krzywda, S. Brzozowski, A.M. Higashitsuji, H");
			$s->setTitle("The Crystal Structure of Gankyrin, an Oncopro");
			$s->setJournal("(2004) J.Biol.Chem. 279:1541");
			$s->setUrl("/pubmed/14573599");
			$manager->persist($s);
	
			//-29-
			$s = new Publication();
			$s->setPubmedId("14573873");
			$s->setAuthors("Zweifel, M.E. Leahy, D.J. Hughson, F.M. Barr");
			$s->setTitle("Structure and stability of the ankyrin domain");
			$s->setJournal("(2003) Protein Sci. 12:26222632");
			$s->setUrl("/pubmed/14573873");
			$manager->persist($s);
	
			//-30-
			$s = new Publication();
			$s->setPubmedId("14583612");
			$s->setAuthors("Padmanabhan, B. Adachi, N. Kataoka, K. Horik");
			$s->setTitle("Crystal structure of the homolog of the oncop");
			$s->setJournal("(2004) J.BIOL.CHEM. 279:15461552");
			$s->setUrl("/pubmed/14583612");
			$manager->persist($s);
	
			//-31-
			$s = new Publication();
			$s->setPubmedId("14997555");
			$s->setAuthors("Manjasetty, B.A. Quedenau, C. Sievert, V. Bu");
			$s->setTitle("X-ray structure of human gankyrin, the produc");
			$s->setJournal("(2004) Proteins 55:214217");
			$s->setUrl("/pubmed/14997555");
			$manager->persist($s);
	
			//-32-
			$s = new Publication();
			$s->setPubmedId("15097997");
			$s->setAuthors("Binz, H.K. Amstutz, P. Kohl, A. Stumpp, M.T.");
			$s->setTitle("High-affinity binders selected from designed");
			$s->setJournal("(2004) NAT.BIOTECHNOL. 22:575582");
			$s->setUrl("/pubmed/15097997");
			$manager->persist($s);
	
			//-33-
			$s = new Publication();
			$s->setPubmedId("15164081");
			$s->setAuthors("Terrak, M. Kerff, F. Langsetmo, K. Tao, T. D");
			$s->setTitle("Structural basis of protein phosphatase 1 reg");
			$s->setJournal("(2004) Nature 429:780784");
			$s->setUrl("/pubmed/15164081");
			$manager->persist($s);
	
			//-34-
			$s = new Publication();
			$s->setPubmedId("15379554");
			$s->setAuthors("Yuan, C. Li, J. Mahajan, A. Poi, M.J. Byeon,");
			$s->setTitle("Solution structure of the human oncogenic pro");
			$s->setJournal("(2004) Biochemistry 43:1215212161");
			$s->setUrl("/pubmed/15379554");
			$manager->persist($s);
	
			//-35-
			$s = new Publication();
			$s->setPubmedId("15385955");
			$s->setAuthors("Tanaka, N. Nakanishi, M. Kusakabe, Y. Goto,");
			$s->setTitle("Structural basis for recognition of 2 5-linke");
			$s->setJournal("(2004 Embo J. 2339293938");
			$s->setUrl("/pubmed/15385955");
			$manager->persist($s);
	
			//-36-
			$s = new Publication();
			$s->setPubmedId("15659773");
			$s->setAuthors("Laurila, M.R.L. Salgado, P.S. Stuart, D.I. G");
			$s->setTitle("Back-Priming Mode of Phi6 RNA-Dependent RNA P");
			$s->setJournal("(2005) J.Gen.Virol. 86:521");
			$s->setUrl("/pubmed/15659773");
			$manager->persist($s);
	
			//-37-
			$s = new Publication();
			$s->setPubmedId("15802643");
			$s->setAuthors("Lubman, O.Y. Kopan, R. Waksman, G. Korolev,");
			$s->setTitle("The crystal structure of a partial mouse Notc");
			$s->setJournal("(2005) Protein Sci. 14:12741281");
			$s->setUrl("/pubmed/15802643");
			$manager->persist($s);
	
			//-38-
			$s = new Publication();
			$s->setPubmedId("16011479");
			$s->setAuthors("Ehebauer, M.T. Chirgadze, D.Y. Hayward, P. M");
			$s->setTitle("High-resolution crystal structure of the huma");
			$s->setJournal("(2005) Biochem.J. 392:1320");
			$s->setUrl("/pubmed/16011479");
			$manager->persist($s);
	
			//-39-
			$s = new Publication();
			$s->setPubmedId("16084385");
			$s->setAuthors("Kohl, A. Amstutz, P. Parizek, P. Binz, H.K.");
			$s->setTitle("Allosteric Inhibition of Aminoglycoside Phosp");
			$s->setJournal("(2005) Structure 13:1131");
			$s->setUrl("/pubmed/16084385");
			$manager->persist($s);
	
			//-40-
			$s = new Publication();
			$s->setPubmedId("16493627");
			$s->setAuthors("Binz, H.K. Kohl, A. Pluckthun, A. Grutter, M");
			$s->setTitle("Crystal Structure of a Consensus-Designed Ank");
			$s->setJournal("(2006) Proteins: Struct., Funct., Bioinf. 65:2");
			$s->setUrl("/pubmed/16493627");
			$manager->persist($s);
	
			//-41-
			$s = new Publication();
			$s->setPubmedId("16530044");
			$s->setAuthors("Nam, Y. Sliz, P. Song, L. Aster, J.C. Blackl");
			$s->setTitle("Structural basis for cooperativity in recruit");
			$s->setJournal("(2006) Cell(Cambridge,Mass.) 124:973983");
			$s->setUrl("/pubmed/16530044");
			$manager->persist($s);
	
			//-42-
			$s = new Publication();
			$s->setPubmedId("16530045");
			$s->setAuthors("Wilson, J.J. Kovall, R.A.");
			$s->setTitle("Crystal structure of the CSL-Notch-Mastermind");
			$s->setJournal("(2006) Cell(Cambridge,Mass.) 124:985996");
			$s->setUrl("/pubmed/16530045");
			$manager->persist($s);
	
			//-43-
			$s = new Publication();
			$s->setPubmedId("16809337");
			$s->setAuthors("Jin, X. Touhey, J. Gaudet, R.");
			$s->setTitle("Structure of the N-terminal Ankyrin Repeat Do");
			$s->setJournal("(2006) J.Biol.Chem. 281:2500625010");
			$s->setUrl("/pubmed/16809337");
			$manager->persist($s);
	
			//-44-
			$s = new Publication();
			$s->setPubmedId("16882997");
			$s->setAuthors("McCleverty, C.J. Koesema, E. Patapoutian, A.");
			$s->setTitle("Crystal structure of the human TRPV2 channel");
			$s->setJournal("(2006) Protein Sci. 15:22012206");
			$s->setUrl("/pubmed/16882997");
			$manager->persist($s);
	
			//-45-
			$s = new Publication();
			$s->setPubmedId("17292836");
			$s->setAuthors("Nakamura, Y. Nakano, K. Umehara, T. Kimura,");
			$s->setTitle("Structure of the Oncoprotein Gankyrin in Comp");
			$s->setJournal("(2007) Structure 15:179189");
			$s->setUrl("/pubmed/17292836");
			$manager->persist($s);
	
			//-46-
			$s = new Publication();
			$s->setPubmedId("17466328");
			$s->setAuthors("Zahnd, C. Wyler, E. Schwenk, J.M. Steiner, D");
			$s->setTitle("A Designed Ankyrin Repeat Protein Evolved to");
			$s->setJournal("(2007) J.Mol.Biol. 369:10151028");
			$s->setUrl("/pubmed/17466328");
			$manager->persist($s);
	
			//-47-
			$s = new Publication();
			$s->setPubmedId("17502107");
			$s->setAuthors("Schweizer, A. Roschitzki-Voser, H. Amstutz,");
			$s->setTitle("Inhibition of Caspase-2 by a Designed Ankyrin");
			$s->setJournal("(2007) Structure 15:625636");
			$s->setUrl("/pubmed/17502107");
			$manager->persist($s);
	
			//-48-
			$s = new Publication();
			$s->setPubmedId("17555716");
			$s->setAuthors("Nakamura, Y. Umehara, T. Tanaka, A. Horikosh");
			$s->setTitle("Structural basis for the recognition between");
			$s->setJournal("(2007) Biochem.Biophys.Res.Commun. 359:503509");
			$s->setUrl("/pubmed/17555716");
			$manager->persist($s);
	
			//-49-
			$s = new Publication();
			$s->setPubmedId("17573339");
			$s->setAuthors("Coleman, M.L. McDonough, M.A. Hewitson, K.S.");
			$s->setTitle("Asparaginyl hydroxylation of the Notch ankyri");
			$s->setJournal("(2007) J.Biol.Chem. 282:2402724038");
			$s->setUrl("/pubmed/17573339");
			$manager->persist($s);
	
			//-50-
			$s = new Publication();
			$s->setPubmedId("17582331");
			$s->setAuthors("Lishko, P.V. Procko, E. Jin, X. Phelps, C.B.");
			$s->setTitle("The Ankyrin Repeats of TRPV1 Bind Multiple Li");
			$s->setJournal("(2007) Neuron 54:905918");
			$s->setUrl("/pubmed/17582331");
			$manager->persist($s);
	
			//-51-
			$s = new Publication();
			$s->setPubmedId("18232717");
			$s->setAuthors("Phelps, C.B. Huang, R.J. Lishko, P.V. Wang,");
			$s->setTitle("Structural analyses of the ankyrin repeat dom");
			$s->setJournal("(2008) Biochemistry 47:24762484");
			$s->setUrl("/pubmed/18232717");
			$manager->persist($s);
	
			//-52-
			$s = new Publication();
			$s->setPubmedId("18264113");
			$s->setAuthors("Collins, R.E. Northrop, J.P. Horton, J.R. Le");
			$s->setTitle("The ankyrin repeats of G9a and GLP histone me");
			$s->setJournal("(2008) Nat.Struct.Mol.Biol. 15:245250");
			$s->setUrl("/pubmed/18264113");
			$manager->persist($s);
	
			//-53-
			$s = new Publication();
			$s->setPubmedId("18275817");
			$s->setAuthors("Robinson, R.A. Lu, X. Jones, E.Y. Siebold, C");
			$s->setTitle("Biochemical and Structural Studies of Aspp Pr");
			$s->setJournal("(2008) Structure 16:259");
			$s->setUrl("/pubmed/18275817");
			$manager->persist($s);
	
			//-54-
			$s = new Publication();
			$s->setPubmedId("18305166");
			$s->setAuthors("Loew, C. Weininger, U. Neumann, P. Klepsch,");
			$s->setTitle("Structural insights into an equilibrium foldi");
			$s->setJournal("(2008) Proc.Natl.Acad.Sci.Usa 105:37793784");
			$s->setUrl("/pubmed/18305166");
			$manager->persist($s);
	
			//-55-
			$s = new Publication();
			$s->setPubmedId("18391401");
			$s->setAuthors("Bandeiras, T.M. Hillig, R.C. Matias, P.M. Eb");
			$s->setTitle("Structure Pf Wild-Type Plk-1 Kinase Domain in");
			$s->setJournal("(2008) Acta Crystallogr.,Sect.D 64:339");
			$s->setUrl("/pubmed/18391401");
			$manager->persist($s);
	
			//-56-
			$s = new Publication();
			$s->setPubmedId("18480049");
			$s->setAuthors("Fox, D. Le Trong, I. Rajagopal, P. Brzovic,");
			$s->setTitle("Crystal Structure of the BARD1 Ankyrin Repeat");
			$s->setJournal("(2008) J.Biol.Chem. 283:2117921186");
			$s->setUrl("/pubmed/18480049");
			$manager->persist($s);
	
			//-57-
			$s = new Publication();
			$s->setPubmedId("18621669");
			$s->setAuthors("Stengel, K.F. Holdermann, I. Cain, P. Robins");
			$s->setTitle("Structural basis for specific substrate recog");
			$s->setJournal("(2008) Science 321:253256");
			$s->setUrl("/pubmed/18621669");
			$manager->persist($s);
	
			//-58-
			$s = new Publication();
			$s->setPubmedId("18988622");
			$s->setAuthors("Gao, Y.G. Suzuki, H. Itou, H. Zhou, Y. Tanak");
			$s->setTitle("Structural and functional characterization of");
			$s->setJournal("(2008) Nucleic Acids Res. 36:71107123");
			$s->setUrl("/pubmed/18988622");
			$manager->persist($s);
	
			//-59-
			$s = new Publication();
			$s->setPubmedId("19074270");
			$s->setAuthors("Chiswell, B.P. Zhang, R. Murphy, J.W. Boggon");
			$s->setTitle("The structural basis of integrin-linked kinas");
			$s->setJournal("(2008) Proc.Natl.Acad.Sci.USA 105:2067720682");
			$s->setUrl("/pubmed/19074270");
			$manager->persist($s);
	
			//-60-
			$s = new Publication();
			$s->setPubmedId("19081931");
			$s->setAuthors("Kelly, L. McDonough, M.A. Coleman, M.L. Ratc");
			$s->setTitle("Asparagine beta-hydroxylation stabilizes the");
			$s->setJournal("(2009) Mol Biosyst 5:5258");
			$s->setUrl("/pubmed/19081931");
			$manager->persist($s);
	
			//-61-
			$s = new Publication();
			$s->setPubmedId("19137598");
			$s->setAuthors("Tong, S. Zhou, H. Gao, Y. Zhu, Z. Zhang, X.");
			$s->setTitle("Crystal structure of human osteoclast stimula");
			$s->setJournal("(2009) Proteins 75:245251");
			$s->setUrl("/pubmed/19137598");
			$manager->persist($s);
	
			//-62-
			$s = new Publication();
			$s->setPubmedId("19434754");
			$s->setAuthors("Gao, T. Collins, R.E. Horton, J.R. Zhang, X.");
			$s->setTitle("The ankyrin repeat domain of Huntingtin inter");
			$s->setJournal("(2009) Proteins 76:772777");
			$s->setUrl("/pubmed/19434754");
			$manager->persist($s);
	
			//-63-
			$s = new Publication();
			$s->setPubmedId("19740746");
			$s->setAuthors("Veesler, D. Dreier, B. Blangy, S. Lichiere,");
			$s->setTitle("Crystal structure and function of a DARPin ne");
			$s->setJournal("(2009) J.Biol.Chem. 284:3071830726");
			$s->setUrl("/pubmed/19740746");
			$manager->persist($s);
	
			//-64-
			$s = new Publication();
			$s->setPubmedId("19854204");
			$s->setAuthors("Grubisha, O. Kaminska, M. Duquerroy, S. Font");
			$s->setTitle("Darpin-Assisted Crystallography of the Cc2-Lz");
			$s->setJournal("(2010) J.Mol.Biol. 395:89");
			$s->setUrl("/pubmed/19854204");
			$manager->persist($s);
	
			//-65-
			$s = new Publication();
			$s->setPubmedId("19963065");
			$s->setAuthors("Chiswell, B.P. Stiegler, A.L. Razinia, Z. Na");
			$s->setTitle("Structural basis of competition between PINCH");
			$s->setJournal("(2010) J.Struct.Biol. 170:157163");
			$s->setUrl("/pubmed/19963065");
			$manager->persist($s);
	
			//-66-
			$s = new Publication();
			$s->setPubmedId("20037586");
			$s->setAuthors("Landoure, G. Zdebik, A.A. Martinez, T.L. Bur");
			$s->setTitle("Mutations in TRPV4 cause Charcot-Marie-Tooth");
			$s->setJournal("(2010) Nat.Genet. 42:170174");
			$s->setUrl("/pubmed/20037586");
			$manager->persist($s);
	
			//-67-
			$s = new Publication();
			$s->setPubmedId("20084102");
			$s->setAuthors("Wu, H. Min, J. Lunin, V.V. Antoshenko, T. Do");
			$s->setTitle("Structural biology of human H3K9 methyltransf");
			$s->setJournal("(2010) Plos One 5:e8570e8570");
			$s->setUrl("/pubmed/20084102");
			$manager->persist($s);
	
			//-68-
			$s = new Publication();
			$s->setPubmedId("20089642");
			$s->setAuthors("Li, Y. Meng, X. Xiang, Y. Deng, J.");
			$s->setTitle("Structure function studies of vaccinia virus");
			$s->setJournal("(2010) J.Virol. 84:33313338");
			$s->setUrl("/pubmed/20089642");
			$manager->persist($s);
	
			//-69-
			$s = new Publication();
			$s->setPubmedId("20510928");
			$s->setAuthors("Ismail, S.A. Vetter, I.R. Sot, B. Wittinghof");
			$s->setTitle("The structure of an Arf-ArfGAP complex reveal");
			$s->setJournal("(2010) Cell(Cambridge,Mass.) 141:812821");
			$s->setUrl("/pubmed/20510928");
			$manager->persist($s);
	
			//-70-
			$s = new Publication();
			$s->setPubmedId("20625546");
			$s->setAuthors("Takeda, S. Minakata, S. Koike, R. Kawahata,");
			$s->setTitle("Two distinct mechanisms for actin capping pro");
			$s->setJournal("(2010) Plos Biol. 8:e1000416e1000416");
			$s->setUrl("/pubmed/20625546");
			$manager->persist($s);
	
			//-71-
			$s = new Publication();
			$s->setPubmedId("20851127");
			$s->setAuthors("Kramer, M. Wetzel, S.K. Pluckthun, A. Mittl,");
			$s->setTitle("Structural Determinants for Improved Thermal");
			$s->setJournal("(2010) J.Mol.Biol. 404:381391");
			$s->setUrl("/pubmed/20851127");
			$manager->persist($s);
	
			//-72-
			$s = new Publication();
			$s->setPubmedId("20972443");
			$s->setAuthors("Arnett, K.L. Hass, M. McArthur, D.G. Ilagan,");
			$s->setTitle("Structural and mechanistic insights into coop");
			$s->setJournal("(2010) Nat.Struct.Mol.Biol. 17:13121317");
			$s->setUrl("/pubmed/20972443");
			$manager->persist($s);
	
			//-73-
			$s = new Publication();
			$s->setPubmedId("21128684");
			$s->setAuthors("Sato, S. Mimasu, S. Sato, A. Hino, N. Sakamo");
			$s->setTitle("Crystallographic study of a site-specifically");
			$s->setJournal("(2010) Biochemistry :");
			$s->setUrl("/pubmed/21128684");
			$manager->persist($s);
	
			//-74-
			$s = new Publication();
			$s->setPubmedId("21177872");
			$s->setAuthors("Yang, M. Ge, W. Chowdhury, R. Claridge, T.D.");
			$s->setTitle("Asparagine and Aspartate Hydroxylation of the");
			$s->setJournal("(2011) J.Biol.Chem. 286:7648");
			$s->setUrl("/pubmed/21177872");
			$manager->persist($s);
	
			//-75-
			$s = new Publication();
			$s->setPubmedId("21251231");
			$s->setAuthors("Yang, M. Chowdhury, R. Ge, W. Hamed, R.B. Mc");
			$s->setTitle("Factor-Inhibiting Hypoxia-Inducible Factor (F");
			$s->setJournal("(2011) FEBS J. 278:10861097");
			$s->setUrl("/pubmed/21251231");
			$manager->persist($s);
	
			//-76-
			$s = new Publication();
			$s->setPubmedId("21296164");
			$s->setAuthors("Monroe, N. Sennhauser, G. Seeger, M.A. Brian");
			$s->setTitle("Designed ankyrin repeat protein binders for t");
			$s->setJournal("(2011) J.Struct.Biol. 174:269281");
			$s->setUrl("/pubmed/21296164");
			$manager->persist($s);
	
			//-77-
			$s = new Publication();
			$s->setPubmedId("21397186");
			$s->setAuthors("Aksel, T. Majumdar, A. Barrick, D.");
			$s->setTitle("The contribution of entropy, enthalpy, and hy");
			$s->setJournal("(2011) Structure 19:349360");
			$s->setUrl("/pubmed/21397186");
			$manager->persist($s);
	
			//-78-
			$s = new Publication();
			$s->setPubmedId("21458342");
			$s->setAuthors("Karanicolas, J. Corn, J.E. Chen, I. Joachimi");
			$s->setTitle("A de novo protein binding pair by computation");
			$s->setJournal("(2011) Mol.Cell 42:250260");
			$s->setUrl("/pubmed/21458342");
			$manager->persist($s);
	
			//-79-
			$s = new Publication();
			$s->setPubmedId("21984832");
			$s->setAuthors("Buurman, E.T. Andrews, B. Gao, N. Hu, J. Kea");
			$s->setTitle("In Vitro Validation of Acetyltransferase Acti");
			$s->setJournal("(2011) J.Biol.Chem. 286:4073440742");
			$s->setUrl("/pubmed/21984832");
			$manager->persist($s);
	
			//-80-
			$s = new Publication();
			$s->setPubmedId("22153077");
			$s->setAuthors("Guettler, S. Larose, J. Petsalaki, E. Gish,");
			$s->setTitle("Structural basis and sequence rules for subst");
			$s->setJournal("(2011) Cell(Cambridge,Mass.) 147:13401354");
			$s->setUrl("/pubmed/22153077");
			$manager->persist($s);
	
			//-81-
			$s = new Publication();
			$s->setPubmedId("22231402");
			$s->setAuthors("Holdermann, I. Meyer, N.H. Round, A. Wild, K");
			$s->setTitle("Chromodomains read the arginine code of post-");
			$s->setJournal("(2012) Nat.Struct.Mol.Biol. 19:260263");
			$s->setUrl("/pubmed/22231402");
			$manager->persist($s);
	
			//-82-
			$s = new Publication();
			$s->setPubmedId("22307604");
			$s->setAuthors("Morrone, S. Cheng, Z. Moon, R.T. Cong, F. Xu");
			$s->setTitle("Crystal structure of a Tankyrase-Axin complex");
			$s->setJournal("(2012) Proc.Natl.Acad.Sci.USA 109:15001505");
			$s->setUrl("/pubmed/22307604");
			$manager->persist($s);
	
			//-83-
			$s = new Publication();
			$s->setPubmedId("22325781");
			$s->setAuthors("Choi, S.H. Wales, T.E. Nam, Y. ODonovan, D.J");
			$s->setTitle("Conformational Locking upon Cooperative Assem");
			$s->setJournal("(2012) Structure 20:340349");
			$s->setUrl("/pubmed/22325781");
			$manager->persist($s);
	
			//-84-
			$s = new Publication();
			$s->setPubmedId("22451937");
			$s->setAuthors("Eicher, T. Cha, H.J. Seeger, M.A. Brandstatt");
			$s->setTitle("Transport of drugs by the multidrug transport");
			$s->setJournal("(2012) Proc.Natl.Acad.Sci.USA 109:56875692");
			$s->setUrl("/pubmed/22451937");
			$manager->persist($s);
	
			//-85-
			$s = new Publication();
			$s->setPubmedId("22645133");
			$s->setAuthors("Bai, M. Pang, X. Lou, J. Zhou, Q. Zhang, K.");
			$s->setTitle("Mechanistic insights into regulated cargo bin");
			$s->setJournal("(2012) J.Biol.Chem. 287:2867528685");
			$s->setUrl("/pubmed/22645133");
			$manager->persist($s);
	
			//-86-
			$s = new Publication();
			$s->setPubmedId("22649097");
			$s->setAuthors("Xu, C. Jin, J. Bian, C. Lam, R. Tian, R. Wei");
			$s->setTitle("Sequence-Specific Recognition of a PxLPxI/L M");
			$s->setJournal("(2012) Sci.Signal. 5:ra39ra39");
			$s->setUrl("/pubmed/22649097");
			$manager->persist($s);
	
			//-87-
			$s = new Publication();
			$s->setPubmedId("22702953");
			$s->setAuthors("Inada, H. Procko, E. Sotomayor, M. Gaudet, R");
			$s->setTitle("Structural and biochemical consequences of di");
			$s->setJournal("(2012) Biochemistry 51:61956206");
			$s->setUrl("/pubmed/22702953");
			$manager->persist($s);
	
			//-88-
			$s = new Publication();
			$s->setPubmedId("22778434");
			$s->setAuthors("Pecqueur, L. Duellberg, C. Dreier, B. Jiang,");
			$s->setTitle("A designed ankyrin repeat protein selected to");
			$s->setJournal("(2012) Proc.Natl.Acad.Sci.USA 109:1201112016");
			$s->setUrl("/pubmed/22778434");
			$manager->persist($s);
	
			//-89-
			$s = new Publication();
			$s->setPubmedId("22791712");
			$s->setAuthors("Mignot, I. Pecqueur, L. Dorleans, A. Karuppa");
			$s->setTitle("Design and characterization of modular scaffo");
			$s->setJournal("(2012) J.Biol.Chem. 287:3108531094");
			$s->setUrl("/pubmed/22791712");
			$manager->persist($s);
	
			//-90-
			$s = new Publication();
			$s->setPubmedId("22810238");
			$s->setAuthors("Oberdorfer, G. Binter, A. Ginj, C. Macheroux");
			$s->setTitle("Structural and functional characterization of");
			$s->setJournal("(2012) J.Biol.Chem. 287:3142731436");
			$s->setUrl("/pubmed/22810238");
			$manager->persist($s);
	
			//-91-
			$s = new Publication();
			$s->setPubmedId("22843676");
			$s->setAuthors("Kummer, L. Parizek, P. Rube, P. Millgramm, B");
			$s->setTitle("Structural and Functional Analysis of Phospho");
			$s->setJournal("(2012) Proc.Natl.Acad.Sci.USA 109:E2248");
			$s->setUrl("/pubmed/22843676");
			$manager->persist($s);
	
			//-92-
			$s = new Publication();
			$s->setPubmedId("22917970");
			$s->setAuthors("Canning, P. Von Delft, F. Bullock, A.N.");
			$s->setTitle("Structural Basis for Aspp2 Recognition by the");
			$s->setJournal("(2012) J.Mol.Biol. 423:515");
			$s->setUrl("/pubmed/22917970");
			$manager->persist($s);
	
			//-93-
			$s = new Publication();
			$s->setPubmedId("23084743");
			$s->setAuthors("Han, Y. Whitney, G. Donovan, J. Korennykh, A");
			$s->setTitle("Innate Immune Messenger 2-5A Tethers Human RN");
			$s->setJournal("(2012) Cell Rep 2:902913");
			$s->setUrl("/pubmed/23084743");
			$manager->persist($s);
	
			//-94-
			$s = new Publication();
			$s->setPubmedId("23104059");
			$s->setAuthors("Schafer, I.B. Hesketh, G.G. Bright, N.A. Gra");
			$s->setTitle("The Binding of Varp to Vamp7 Traps Vamp7 in a");
			$s->setJournal("(2012) Nat.Struct.Mol.Biol. 19:1300");
			$s->setUrl("/pubmed/23104059");
			$manager->persist($s);
	
			//-95-
			$s = new Publication();
			$s->setPubmedId("23296631");
			$s->setAuthors("Yang, M. Hardy, A.P. Chowdhury, R. Loik, N.D");
			$s->setTitle("Substrate Selectivity Analyses of Factor Inhi");
			$s->setJournal("(2013) Angew.Chem.Int.Ed.Engl. 52:1700");
			$s->setUrl("/pubmed/23296631");
			$manager->persist($s);
	
			//-96-
			$s = new Publication();
			$s->setPubmedId("23333429");
			$s->setAuthors("Schroeder, T. Barandun, J. Flutsch, A. Brian");
			$s->setTitle("Specific Inhibition of Caspase-3 by a Competi");
			$s->setJournal("(2013) Structure 21:277");
			$s->setUrl("/pubmed/23333429");
			$manager->persist($s);
	
			//-97-
			$s = new Publication();
			$s->setPubmedId("23431166");
			$s->setAuthors("Dreier, B. Honegger, A. Hess, C. Nagy-Davide");
			$s->setTitle("Development of a Generic Adenovirus Delivery");
			$s->setJournal("(2013) Proc.Natl.Acad.Sci.USA 110:E869");
			$s->setUrl("/pubmed/23431166");
			$manager->persist($s);
	
			//-98-
			$s = new Publication();
			$s->setPubmedId("23572077");
			$s->setAuthors("Campanacci, V. Mukherjee, S. Roy, C.R. Cherf");
			$s->setTitle("Structure of the Legionella Effector Ankx Rev");
			$s->setJournal("(2013) Embo J. 32:1469");
			$s->setUrl("/pubmed/23572077");
			$manager->persist($s);
	
			//-99-
			$s = new Publication();
			$s->setPubmedId("23806657");
			$s->setAuthors("Muniz, J.R.C. Guo, K. Kershaw, N.J. Ayinampu");
			$s->setTitle("Molecular Architecture of the Ankyrin Socs Bo");
			$s->setJournal("(2013) J.Mol.Biol. :");
			$s->setUrl("/pubmed/23806657");
			$manager->persist($s);
	
			//-100-
			$s = new Publication();
			$s->setPubmedId("23868333");
			$s->setAuthors("Seeger, M.A. Zbinden, R. Flutsch, A. Gutte,");
			$s->setTitle("Design, construction, and characterization of");
			$s->setJournal("(2013) Protein Sci. 22:12391257");
			$s->setUrl("/pubmed/23868333");
			$manager->persist($s);
	
			//-101-
			$s = new Publication();
			$s->setPubmedId("23872990");
			$s->setAuthors("Gigant, B. Wang, W. Dreier, B. Jiang, Q. Pec");
			$s->setTitle("Structure of a kinesin-tubulin complex and im");
			$s->setJournal("(2013) Nat.Struct.Mol.Biol. 20:10011007");
			$s->setUrl("/pubmed/23872990");
			$manager->persist($s);
	
			//-102-
			$s = new Publication();
			$s->setPubmedId("24021814");
			$s->setAuthors("Holzer, S. Ban, N. Klinge, S.");
			$s->setTitle("Crystal Structure of the Yeast Ribosomal Prot");
			$s->setJournal("(2013) J.Mol.Biol. 425:4154");
			$s->setUrl("/pubmed/24021814");
			$manager->persist($s);
	
			//-103-
			$s = new Publication();
			$s->setPubmedId("24095059");
			$s->setAuthors("Jost, C. Schilling, J. Tamaskovic, R. Schwil");
			$s->setTitle("Structural Basis for Eliciting a Cytotoxic Ef");
			$s->setJournal("(2013) Structure 21:113");
			$s->setUrl("/pubmed/24095059");
			$manager->persist($s);
	
		$manager->flush();

		}

		public function getOrder() {
			return 1;
		}
	}