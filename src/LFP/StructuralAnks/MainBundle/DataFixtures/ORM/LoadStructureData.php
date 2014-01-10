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


	//-0-
	$s = new Structure();
	$s->setPdbId("1NFI");
	$s->setKeywords("COMPLEX (TRANSCRIPTION REG/ANK REPEAT)");
	$s->setTitle("I-KAPPA-B-ALPHA/NF-KAPPA-B COMPLEX");
	$s->setPubDate("1998-11-18");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.70);
	$s->setNChains(6);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-1-
	$s = new Structure();
	$s->setPdbId("1IKN");
	$s->setKeywords("TRANSCRIPTION FACTOR");
	$s->setTitle("IKAPPABALPHA/NF-KAPPAB COMPLEX");
	$s->setPubDate("1999-04-12");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.300);
	$s->setNChains(3);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-2-
	$s = new Structure();
	$s->setPdbId("1AP7");
	$s->setKeywords("CELL CYCLE INHIBITOR");
	$s->setTitle("P19-INK4D FROM MOUSE, NMR, 20 STRUCTURES");
	$s->setPubDate("1998-09-16");
	$s->setMethod("SOLUTION NMR");
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-3-
	$s = new Structure();
	$s->setPdbId("1BD8");
	$s->setKeywords("TUMOR SUPPRESSOR");
	$s->setTitle("STRUCTURE OF CDK INHIBITOR P19INK4D");
	$s->setPubDate("1998-10-14");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.8);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-4-
	$s = new Structure();
	$s->setPdbId("1BI8");
	$s->setKeywords("COMPLEX (KINASE/INHIBITOR)");
	$s->setTitle("MECHANISM OF G1 CYCLIN DEPENDENT KINASE INHIBITION FROM THE STRUCTURES CDK6-P19INK4D INHIBITOR COMPLEX");
	$s->setPubDate("1999-01-13");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.8);
	$s->setNChains(4);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-5-
	$s = new Structure();
	$s->setPdbId("1BLX");
	$s->setKeywords("COMPLEX (INHIBITOR PROTEIN/KINASE)");
	$s->setTitle("P19INK4D/CDK6 COMPLEX");
	$s->setPubDate("1999-06-01");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.9);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-6-
	$s = new Structure();
	$s->setPdbId("1D9S");
	$s->setKeywords("SIGNALING PROTEIN");
	$s->setTitle("TUMOR SUPPRESSOR P15(INK4B) STRUCTURE BY COMPARATIVE MODELING AND NMR DATA");
	$s->setPubDate("2000-07-28");
	$s->setMethod("SOLUTION NMR");
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-7-
	$s = new Structure();
	$s->setPdbId("1G3N");
	$s->setKeywords("cell cycle, signaling protein");
	$s->setTitle("STRUCTURE OF A P18(INK4C)-CDK6-K-CYCLIN TERNARY COMPLEX");
	$s->setPubDate("2001-01-10");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.9);
	$s->setNChains(6);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-8-
	$s = new Structure();
	$s->setPdbId("1IHB");
	$s->setKeywords("CELL CYCLE INHIBITOR");
	$s->setTitle("CRYSTAL STRUCTURE OF P18-INK4C(INK6)");
	$s->setPubDate("1998-12-02");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.95);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-9-
	$s = new Structure();
	$s->setPdbId("1IXV");
	$s->setKeywords("PROTEIN BINDING");
	$s->setTitle("Crystal Structure Analysis of homolog of oncoprotein gankyrin, an interactor of Rb and CDK4/6");
	$s->setPubDate("2003-12-16");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.30);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-10-
	$s = new Structure();
	$s->setPdbId("1K1A");
	$s->setKeywords("TRANSCRIPTION");
	$s->setTitle("Crystal structure of the ankyrin repeat domain of Bcl-3: a unique member of the IkappaB protein family");
	$s->setPubDate("2001-11-21");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.86);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-11-
	$s = new Structure();
	$s->setPdbId("1K1B");
	$s->setKeywords("TRANSCRIPTION");
	$s->setTitle("Crystal structure of the ankyrin repeat domain of Bcl-3: a unique member of the IkappaB protein family");
	$s->setPubDate("2001-11-21");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.9);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-12-
	$s = new Structure();
	$s->setPdbId("1K3Z");
	$s->setKeywords("TRANSCRIPTION");
	$s->setTitle("X-ray crystal structure of the IkBb/NF-kB p65 homodimer complex");
	$s->setPubDate("2002-10-04");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.50);
	$s->setNChains(3);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-13-
	$s = new Structure();
	$s->setPdbId("1MX2");
	$s->setKeywords("cell cycle inhibitor");
	$s->setTitle("Structure of F71N mutant of p18INK4c");
	$s->setPubDate("2002-10-16");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.25);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-14-
	$s = new Structure();
	$s->setPdbId("1MX4");
	$s->setKeywords("cell cycle inhibitor");
	$s->setTitle("Structure of p18INK4c (F82Q)");
	$s->setPubDate("2002-10-16");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.0);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-15-
	$s = new Structure();
	$s->setPdbId("1MX6");
	$s->setKeywords("cell cycle inhibitor");
	$s->setTitle("Structure of p18INK4c (F92N)");
	$s->setPubDate("2002-10-16");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.0);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-16-
	$s = new Structure();
	$s->setPdbId("1N11");
	$s->setKeywords("STRUCTURAL PROTEIN");
	$s->setTitle("D34 REGION OF HUMAN ANKYRIN-R AND LINKER");
	$s->setPubDate("2002-12-11");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.70);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-17-
	$s = new Structure();
	$s->setPdbId("1OT8");
	$s->setKeywords("SIGNALING PROTEIN");
	$s->setTitle("Structure of the Ankyrin Domain of the Drosophila Notch Receptor");
	$s->setPubDate("2003-10-28");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.00);
	$s->setNChains(3);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-18-
	$s = new Structure();
	$s->setPdbId("1OY3");
	$s->setKeywords("DNA BINDING PROTEIN");
	$s->setTitle("CRYSTAL STRUCTURE OF AN IKBBETA/NF-KB P65 HOMODIMER COMPLEX");
	$s->setPubDate("2003-05-20");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.05);
	$s->setNChains(3);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-19-
	$s = new Structure();
	$s->setPdbId("1QYM");
	$s->setKeywords("ONCOPROTEIN");
	$s->setTitle("X-ray structure of human gankyrin");
	$s->setPubDate("2003-11-18");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.80);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-20-
	$s = new Structure();
	$s->setPdbId("1SW6");
	$s->setKeywords("TRANSCRIPTION REGULATION");
	$s->setTitle("S. CEREVISIAE SWI6 ANKYRIN-REPEAT FRAGMENT");
	$s->setPubDate("1999-09-15");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.10);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-21-
	$s = new Structure();
	$s->setPdbId("1TR4");
	$s->setKeywords("UNKNOWN FUNCTION");
	$s->setTitle("Solution structure of human oncogenic protein gankyrin");
	$s->setPubDate("2004-11-16");
	$s->setMethod("SOLUTION NMR");
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-22-
	$s = new Structure();
	$s->setPdbId("1UOH");
	$s->setKeywords("ONCOPROTEIN");
	$s->setTitle("HUMAN GANKYRIN");
	$s->setPubDate("2003-10-30");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.00);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-23-
	$s = new Structure();
	$s->setPdbId("1YCS");
	$s->setKeywords("COMPLEX (ANTI-ONCOGENE/ANKYRIN REPEATS)");
	$s->setTitle("P53-53BP2 COMPLEX");
	$s->setPubDate("1997-11-19");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.2);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-24-
	$s = new Structure();
	$s->setPdbId("1YYH");
	$s->setKeywords("CELL CYCLE,TRANSCRIPTION");
	$s->setTitle("Crystal structure of the human Notch 1 ankyrin domain");
	$s->setPubDate("2005-08-16");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.901);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-25-
	$s = new Structure();
	$s->setPdbId("2DVW");
	$s->setKeywords("CELL CYCLE/PROTEIN-BINDING");
	$s->setTitle("Structure of the Oncoprotein Gankyrin in Complex with S6 ATPase of the 26S Proteasome");
	$s->setPubDate("2007-03-13");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.30);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-26-
	$s = new Structure();
	$s->setPdbId("2DZN");
	$s->setKeywords("PROTEIN BINDING");
	$s->setTitle("Crystal structure analysis of yeast Nas6p complexed with the proteasome subunit, rpt3");
	$s->setPubDate("2007-07-17");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.20);
	$s->setNChains(6);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-27-
	$s = new Structure();
	$s->setPdbId("2F8X");
	$s->setKeywords("TRANSCRIPTION/DNA");
	$s->setTitle("Crystal structure of activated Notch, CSL and MAML on HES-1 promoter DNA sequence");
	$s->setPubDate("2006-04-04");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(3.250);
	$s->setNChains(3);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-28-
	$s = new Structure();
	$s->setPdbId("2FO1");
	$s->setKeywords("GENE REGULATION/SIGNALLING PROTEIN/DNA");
	$s->setTitle("Crystal Structure of the CSL-Notch-Mastermind ternary complex bound to DNA");
	$s->setPubDate("2006-03-21");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(3.12);
	$s->setNChains(3);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-29-
	$s = new Structure();
	$s->setPdbId("2PNN");
	$s->setKeywords("TRANSPORT PROTEIN");
	$s->setTitle("Crystal Structure of the Ankyrin Repeat Domain of Trpv1");
	$s->setPubDate("2007-07-03");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.70);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-30-
	$s = new Structure();
	$s->setPdbId("3B7B");
	$s->setKeywords("TRANSFERASE");
	$s->setTitle("EuHMT1 (Glp) Ankyrin Repeat Domain (Structure 1)");
	$s->setPubDate("2008-02-12");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.99);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-31-
	$s = new Structure();
	$s->setPdbId("3B95");
	$s->setKeywords("TRANSFERASE/STRUCTURAL PROTEIN");
	$s->setTitle("EuHMT1 (Glp) Ankyrin Repeat Domain (Structure 2)");
	$s->setPubDate("2008-02-12");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.99);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-32-
	$s = new Structure();
	$s->setPdbId("3C5R");
	$s->setKeywords("PROTEIN BINDING");
	$s->setTitle("Crystal Structure of the BARD1 Ankyrin Repeat Domain and Its Functional Consequences");
	$s->setPubDate("2008-05-13");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.00);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-33-
	$s = new Structure();
	$s->setPdbId("3DEO");
	$s->setKeywords("PROTEIN TRANSPORT, MEMBRANE PROTEIN");
	$s->setTitle("Structural basis for specific substrate recognition by the chloroplast signal recognition particle protein cpSRP43");
	$s->setPubDate("2008-08-12");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.500);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-34-
	$s = new Structure();
	$s->setPdbId("3DEP");
	$s->setKeywords("PROTEIN TRANSPORT, MEMBRANE PROTEIN");
	$s->setTitle("Structural basis for specific substrate recognition by the chloroplast signal recognition particle protein cpSRP43");
	$s->setPubDate("2008-08-12");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.700);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-35-
	$s = new Structure();
	$s->setPdbId("3EU9");
	$s->setKeywords("protein binding, methyl-lysine-binding protein");
	$s->setTitle("The ankyrin repeat domain of Huntingtin interacting protein 14");
	$s->setPubDate("2009-06-23");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.99);
	$s->setNChains(3);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-36-
	$s = new Structure();
	$s->setPdbId("3JXI");
	$s->setKeywords("MEMBRANE PROTEIN");
	$s->setTitle("Crystal structure of the chicken TRPV4 ankyrin repeat domain");
	$s->setPubDate("2009-12-22");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.300);
	$s->setNChains(4);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-37-
	$s = new Structure();
	$s->setPdbId("3JXJ");
	$s->setKeywords("MEMBRANE PROTEIN");
	$s->setTitle("Crystal structure of the chicken TRPV4 ankyrin repeat domain");
	$s->setPubDate("2009-12-22");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.800);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-38-
	$s = new Structure();
	$s->setPdbId("1AWC");
	$s->setKeywords("TRANSCRIPTION/DNA");
	$s->setTitle("MOUSE GABP ALPHA/BETA DOMAIN BOUND TO DNA");
	$s->setPubDate("1998-03-18");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.150);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-39-
	$s = new Structure();
	$s->setPdbId("1DCQ");
	$s->setKeywords("METAL BINDING PROTEIN");
	$s->setTitle("CRYSTAL STRUCTURE OF THE ARF-GAP DOMAIN AND ANKYRIN REPEATS OF PAPBETA.");
	$s->setPubDate("1999-12-22");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.1);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-40-
	$s = new Structure();
	$s->setPdbId("1MYO");
	$s->setKeywords("ANK-REPEAT");
	$s->setTitle("SOLUTION STRUCTURE OF MYOTROPHIN, NMR, 44 STRUCTURES");
	$s->setPubDate("1999-08-17");
	$s->setMethod("SOLUTION NMR");
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-41-
	$s = new Structure();
	$s->setPdbId("1S70");
	$s->setKeywords("HYDROLASE");
	$s->setTitle("Complex between protein ser/thr phosphatase-1 (delta) and the myosin phosphatase targeting subunit 1 (MYPT1)");
	$s->setPubDate("2004-06-22");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.70);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-42-
	$s = new Structure();
	$s->setPdbId("1YMP");
	$s->setKeywords("TRANSCRIPTION");
	$s->setTitle("The Crystal Structure of a Partial Mouse Notch-1 Ankyrin Domain: Repeats 4 Through 7 Preserve an Ankyrin Fold");
	$s->setPubDate("2005-05-10");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.200);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-43-
	$s = new Structure();
	$s->setPdbId("2ETA");
	$s->setKeywords("TRANSPORT PROTEIN");
	$s->setTitle("Crystal structure of the ankyrin repeat domain of the TRPV2");
	$s->setPubDate("2006-06-27");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.20);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-44-
	$s = new Structure();
	$s->setPdbId("2ETB");
	$s->setKeywords("TRANSPORT PROTEIN");
	$s->setTitle("Crystal structure of the ankyrin repeat domain of TRPV2");
	$s->setPubDate("2006-06-27");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.65);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-45-
	$s = new Structure();
	$s->setPdbId("2F37");
	$s->setKeywords("MEMBRANE PROTEIN");
	$s->setTitle("Crystal structure of the ankyrin repeat domain of human TRPV2");
	$s->setPubDate("2006-10-31");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.70);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-46-
	$s = new Structure();
	$s->setPdbId("2MYO");
	$s->setKeywords("ANK-REPEAT");
	$s->setTitle("SOLUTION STRUCTURE OF MYOTROPHIN, NMR, MINIMIZED AVERAGE STRUCTURE");
	$s->setPubDate("1999-08-17");
	$s->setMethod("SOLUTION NMR");
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-47-
	$s = new Structure();
	$s->setPdbId("2QC9");
	$s->setKeywords("TRANSCRIPTION");
	$s->setTitle("Mouse Notch 1 Ankyrin Repeat Intracellular Domain");
	$s->setPubDate("2008-03-04");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.350);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-48-
	$s = new Structure();
	$s->setPdbId("2RFA");
	$s->setKeywords("MEMBRANE PROTEIN");
	$s->setTitle("Crystal structure of the mouse TRPV6 ankyrin repeat domain");
	$s->setPubDate("2008-02-19");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.700);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-49-
	$s = new Structure();
	$s->setPdbId("2RFM");
	$s->setKeywords("PROTEIN BINDING");
	$s->setTitle("Structure of a Thermophilic Ankyrin Repeat Protein");
	$s->setPubDate("2008-03-11");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.650);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-50-
	$s = new Structure();
	$s->setPdbId("2VGE");
	$s->setKeywords("TRANSCRIPTION");
	$s->setTitle("CRYSTAL STRUCTURE OF THE C-TERMINAL REGION OF HUMAN IASPP");
	$s->setPubDate("2008-02-05");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.10);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-51-
	$s = new Structure();
	$s->setPdbId("3EHQ");
	$s->setKeywords("SIGNALING PROTEIN");
	$s->setTitle("Crystal Structure of Human Osteoclast Stimulating Factor");
	$s->setPubDate("2009-08-04");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.57);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-52-
	$s = new Structure();
	$s->setPdbId("3EHR");
	$s->setKeywords("SIGNALING PROTEIN");
	$s->setTitle("Crystal Structure of Human Osteoclast Stimulating Factor");
	$s->setPubDate("2009-08-04");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.950);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-53-
	$s = new Structure();
	$s->setPdbId("3F6Q");
	$s->setKeywords("SIGNALING PROTEIN/SIGNALING PROTEIN");
	$s->setTitle("Crystal structure of integrin-linked kinase ankyrin repeat domain in complex with PINCH1 LIM1 domain");
	$s->setPubDate("2008-12-02");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.600);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-54-
	$s = new Structure();
	$s->setPdbId("3IXE");
	$s->setKeywords("SIGNALING PROTEIN/SIGNALING PROTEIN");
	$s->setTitle("Structural basis of competition between PINCH1 and PINCH2 for binding to the ankyrin repeat domain of integrin-linked kinase");
	$s->setPubDate("2009-12-15");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.90);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-55-
	$s = new Structure();
	$s->setPdbId("3KEA");
	$s->setKeywords("VIRAL PROTEIN");
	$s->setTitle("Structure function studies of vaccinia virus host-range protein K1 reveal a novel ankyrin repeat interaction surface for K1s function");
	$s->setPubDate("2010-03-31");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.30);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-56-
	$s = new Structure();
	$s->setPdbId("3LVQ");
	$s->setKeywords("Protein transport");
	$s->setTitle("The crystal structure of ASAP3 in complex with Arf6 in transition state");
	$s->setPubDate("2010-06-09");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(3.38);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-57-
	$s = new Structure();
	$s->setPdbId("3LVR");
	$s->setKeywords("Protein transport");
	$s->setTitle("The crystal structure of ASAP3 in complex with Arf6 in transition state soaked with Calcium");
	$s->setPubDate("2010-06-09");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(3.38);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-58-
	$s = new Structure();
	$s->setPdbId("4DX1");
	$s->setKeywords("TRANSPORT PROTEIN");
	$s->setTitle("Crystal structure of the human TRPV4 ankyrin repeat domain");
	$s->setPubDate("2012-07-18");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.8500);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-59-
	$s = new Structure();
	$s->setPdbId("1BI7");
	$s->setKeywords("COMPLEX (KINASE/ANTI-ONCOGENE)");
	$s->setTitle("MECHANISM OF G1 CYCLIN DEPENDENT KINASE INHIBITION FROM THE STRUCTURE OF THE CDK6-P16INK4A TUMOR SUPPRESSOR COMPLEX");
	$s->setPubDate("1999-01-13");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(3.4);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-60-
	$s = new Structure();
	$s->setPdbId("1DC2");
	$s->setKeywords("GENE REGULATION");
	$s->setTitle("SOLUTION NMR STRUCTURE OF TUMOR SUPPRESSOR P16INK4A, 20 STRUCTURES");
	$s->setPubDate("1999-12-23");
	$s->setMethod("SOLUTION NMR");
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-61-
	$s = new Structure();
	$s->setPdbId("2ETC");
	$s->setKeywords("TRANSPORT PROTEIN");
	$s->setTitle("Crystal structure of the ankyrin repeat domain of TRPV2");
	$s->setPubDate("2006-06-27");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(3.10);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-62-
	$s = new Structure();
	$s->setPdbId("2F8Y");
	$s->setKeywords("TRANSCRIPTION");
	$s->setTitle("Crystal structure of human Notch1 ankyrin repeats to 1.55A resolution.");
	$s->setPubDate("2006-04-04");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.55);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-63-
	$s = new Structure();
	$s->setPdbId("2L6B");
	$s->setKeywords("DE NOVO PROTEIN");
	$s->setTitle("NRC consensus ankyrin repeat protein solution structure");
	$s->setPubDate("2011-03-23");
	$s->setMethod("SOLUTION NMR");
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-64-
	$s = new Structure();
	$s->setPdbId("2NYJ");
	$s->setKeywords("TRANSPORT PROTEIN");
	$s->setTitle("Crystal structure of the ankyrin repeat domain of TRPV1");
	$s->setPubDate("2007-07-03");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(3.20);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-65-
	$s = new Structure();
	$s->setPdbId("2XZD");
	$s->setKeywords("HYDROLASE/PROTEIN BINDING");
	$s->setTitle("Caspase-3 in Complex with an Inhibitory DARPin-3.4");
	$s->setPubDate("2011-12-14");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.10);
	$s->setNChains(4);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-66-
	$s = new Structure();
	$s->setPdbId("2Y0B");
	$s->setKeywords("HYDROLASE/PROTEIN BINDING");
	$s->setTitle("Caspase-3 in Complex with an Inhibitory DARPin-3.4_S76R");
	$s->setPubDate("2011-12-21");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.10);
	$s->setNChains(4);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-67-
	$s = new Structure();
	$s->setPdbId("3AAA");
	$s->setKeywords("PROTEIN BINDING");
	$s->setTitle("Crystal Structure of Actin capping protein in complex with V-1");
	$s->setPubDate("2010-08-04");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.20);
	$s->setNChains(3);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-68-
	$s = new Structure();
	$s->setPdbId("3AJI");
	$s->setKeywords("CHAPERONE/PROTEIN BINDING");
	$s->setTitle("Structure of Gankyrin-S6ATPase photo-cross-linked site-specifically, and incoporated by genetic code expansion");
	$s->setPubDate("2010-12-22");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.05);
	$s->setNChains(4);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-69-
	$s = new Structure();
	$s->setPdbId("3JUE");
	$s->setKeywords("PROTEIN TRANSPORT/ENDOCYTOSIS");
	$s->setTitle("Crystal Structure of ArfGAP and ANK repeat domain of ACAP1");
	$s->setPubDate("2010-09-22");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.30);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-70-
	$s = new Structure();
	$s->setPdbId("3NBN");
	$s->setKeywords("TRANSCRIPTION/DNA");
	$s->setTitle("Crystal structure of a dimer of Notch Transcription Complex trimers on HES1 DNA");
	$s->setPubDate("2010-11-03");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(3.450);
	$s->setNChains(5);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-71-
	$s = new Structure();
	$s->setPdbId("3NOC");
	$s->setKeywords("TRANSPORT PROTEIN/PROTEIN BINDING");
	$s->setTitle("Designed ankyrin repeat protein (DARPin) binders to AcrB: Plasticity of the Interface");
	$s->setPubDate("2011-05-18");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.700);
	$s->setNChains(3);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-72-
	$s = new Structure();
	$s->setPdbId("3NOG");
	$s->setKeywords("TRANSPORT PROTEIN/PROTEIN BINDING");
	$s->setTitle("Designed ankyrin repeat protein (DARPin) Binders to AcrB: Plasticity of the Interface");
	$s->setPubDate("2011-05-18");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(3.3400);
	$s->setNChains(3);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-73-
	$s = new Structure();
	$s->setPdbId("3P3N");
	$s->setKeywords("OXIDOREDUCTASE/TRANSCRIPTION");
	$s->setTitle("Factor inhibiting HIF-1 Alpha in complex with Notch 1 fragment mouse notch (1930-1949) peptide");
	$s->setPubDate("2010-11-24");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.40);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-74-
	$s = new Structure();
	$s->setPdbId("3P3P");
	$s->setKeywords("Oxidoreductase/TRANSCRIPTION");
	$s->setTitle("Factor inhibiting HIF-1 Alpha in complex with Notch 1 fragment mouse notch (1997-2016) peptide");
	$s->setPubDate("2010-11-24");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.6000);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-75-
	$s = new Structure();
	$s->setPdbId("3Q9N");
	$s->setKeywords("PROTEIN BINDING, DE NOVO PROTEIN");
	$s->setTitle("In silico and in vitro co-evolution of a high affinity complementary protein-protein interface");
	$s->setPubDate("2011-04-27");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.00);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-76-
	$s = new Structure();
	$s->setPdbId("3Q9U");
	$s->setKeywords("PROTEIN BINDING, DE NOVO PROTEIN");
	$s->setTitle("In silico and in vitro co-evolution of a high affinity complementary protein-protein interface");
	$s->setPubDate("2011-04-20");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.300);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-77-
	$s = new Structure();
	$s->setPdbId("3SO8");
	$s->setKeywords("PROTEIN BINDING");
	$s->setTitle("Crystal Structure of ANKRA");
	$s->setPubDate("2011-10-05");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.90);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-78-
	$s = new Structure();
	$s->setPdbId("3T9K");
	$s->setKeywords("PROTEIN TRANSPORT");
	$s->setTitle("Crystal Structure of ACAP1 C-portion mutant S554D fused with integrin beta1 peptide");
	$s->setPubDate("2012-07-18");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.30);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-79-
	$s = new Structure();
	$s->setPdbId("3TWQ");
	$s->setKeywords("SIGNALING PROTEIN");
	$s->setTitle("Crystal structure of ARC4 from human Tankyrase 2 (apo form)");
	$s->setPubDate("2011-12-07");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.151);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-80-
	$s = new Structure();
	$s->setPdbId("3TWR");
	$s->setKeywords("SIGNALING PROTEIN/PEPTIDE");
	$s->setTitle("Crystal structure of ARC4 from human Tankyrase 2 in complex with peptide from human 3BP2");
	$s->setPubDate("2011-12-07");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.550);
	$s->setNChains(8);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-81-
	$s = new Structure();
	$s->setPdbId("3TWS");
	$s->setKeywords("SIGNALING PROTEIN/PEPTIDE");
	$s->setTitle("Crystal structure of ARC4 from human Tankyrase 2 in complex with peptide from human TERF1 (chimeric peptide)");
	$s->setPubDate("2011-12-07");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.700);
	$s->setNChains(4);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-82-
	$s = new Structure();
	$s->setPdbId("3TWT");
	$s->setKeywords("SIGNALING PROTEIN/PEPTIDE");
	$s->setTitle("Crystal structure of ARC4 from human Tankyrase 2 in complex with peptide from human MCL1 (chimeric peptide)");
	$s->setPubDate("2011-12-07");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.850);
	$s->setNChains(4);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-83-
	$s = new Structure();
	$s->setPdbId("3TWU");
	$s->setKeywords("SIGNALING PROTEIN/PEPTIDE");
	$s->setTitle("Crystal structure of ARC4 from human Tankyrase 2 in complex with peptide from human MCL1");
	$s->setPubDate("2011-12-07");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.80);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-84-
	$s = new Structure();
	$s->setPdbId("3TWV");
	$s->setKeywords("SIGNALING PROTEIN/PEPTIDE");
	$s->setTitle("Crystal structure of ARC4 from human Tankyrase 2 in complex with peptide from human NUMA1 (chimeric peptide)");
	$s->setPubDate("2011-12-07");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.301);
	$s->setNChains(4);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-85-
	$s = new Structure();
	$s->setPdbId("3TWW");
	$s->setKeywords("SIGNALING PROTEIN/PEPTIDE");
	$s->setTitle("Crystal structure of ARC4 from human Tankyrase 2 in complex with peptide from human LNPEP (chimeric peptide)");
	$s->setPubDate("2011-12-07");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.000);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-86-
	$s = new Structure();
	$s->setPdbId("3TWX");
	$s->setKeywords("SIGNALING PROTEIN/PEPTIDE");
	$s->setTitle("Crystal structure of ARC4 from human Tankyrase 2 in complex with peptide from human FNBP1 (chimeric peptide)");
	$s->setPubDate("2011-12-07");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.80);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-87-
	$s = new Structure();
	$s->setPdbId("3UI2");
	$s->setKeywords("TRANSPORT PROTEIN");
	$s->setTitle("Crystal structure of the cpSRP54 tail bound to cpSRP43");
	$s->setPubDate("2012-01-11");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(3.178);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-88-
	$s = new Structure();
	$s->setPdbId("3UTM");
	$s->setKeywords("TRANSFERASE/SIGNALING PROTEIN");
	$s->setTitle("Crystal structure of a mouse Tankyrase-Axin complex");
	$s->setPubDate("2012-01-18");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.00);
	$s->setNChains(3);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-89-
	$s = new Structure();
	$s->setPdbId("3UXG");
	$s->setKeywords("TRANSCRIPTION");
	$s->setTitle("Crystal structure of RFXANK");
	$s->setPubDate("2012-06-13");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.8500);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-90-
	$s = new Structure();
	$s->setPdbId("3V2O");
	$s->setKeywords("PROTEIN BINDING");
	$s->setTitle("Crystal Structure of the Peptide Bound Complex of the Ankyrin Repeat Domains of Human ANKRA2");
	$s->setPubDate("2012-04-04");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.8900);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-91-
	$s = new Structure();
	$s->setPdbId("3V2X");
	$s->setKeywords("PROTEIN BINDING");
	$s->setTitle("Crystal Structure of the Peptide Bound Complex of the Ankyrin Repeat Domains of Human ANKRA2");
	$s->setPubDate("2012-04-04");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.8500);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-92-
	$s = new Structure();
	$s->setPdbId("3V30");
	$s->setKeywords("PROTEIN BINDING");
	$s->setTitle("Crystal Structure of the Peptide Bound Complex of the Ankyrin Repeat Domains of Human RFXANK");
	$s->setPubDate("2012-04-04");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.5700);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-93-
	$s = new Structure();
	$s->setPdbId("3V31");
	$s->setKeywords("PROTEIN BINDING");
	$s->setTitle("Crystal Structure of the Peptide Bound Complex of the Ankyrin Repeat Domains of Human ANKRA2");
	$s->setPubDate("2012-04-04");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.57);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-94-
	$s = new Structure();
	$s->setPdbId("3ZU7");
	$s->setKeywords("TRANSFERASE/DE NOVO PROTEIN");
	$s->setTitle("Crystal structure of a designed selected Ankyrin Repeat protein in complex with the MAP kinase ERK2");
	$s->setPubDate("2012-06-27");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.97);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-95-
	$s = new Structure();
	$s->setPdbId("3ZUV");
	$s->setKeywords("DE NOVO PROTEIN/TRANSFERASE");
	$s->setTitle("Crystal structure of a designed selected Ankyrin Repeat protein in complex with the phosphorylated MAP kinase ERK2");
	$s->setPubDate("2012-06-27");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.72);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-96-
	$s = new Structure();
	$s->setPdbId("4A63");
	$s->setKeywords("CELL CYCLE");
	$s->setTitle("Crystal structure of the p73-ASPP2 complex at 2.6A resolution");
	$s->setPubDate("2011-12-21");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.27);
	$s->setNChains(12);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-97-
	$s = new Structure();
	$s->setPdbId("4ATZ");
	$s->setKeywords("VIRAL PROTEIN/DE NOVO PROTEIN");
	$s->setTitle("Ad5 knob in complex with a designed ankyrin repeat protein");
	$s->setPubDate("2013-02-27");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.95);
	$s->setNChains(3);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-98-
	$s = new Structure();
	$s->setPdbId("4B7E");
	$s->setKeywords("OXIDOREDUCTASE/PEPTIDE");
	$s->setTitle("FACTOR INHIBITING HIF-1 ALPHA IN COMPLEX WITH CONSENSUS ANKYRIN REPEAT DOMAIN-LEU PEPTIDE (20-MER)");
	$s->setPubDate("2013-01-23");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.50);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-99-
	$s = new Structure();
	$s->setPdbId("4B7K");
	$s->setKeywords("OXIDOREDUCTASE");
	$s->setTitle("FACTOR INHIBITING HIF-1 ALPHA IN COMPLEX WITH CONSENSUS ANKYRIN REPEAT DOMAIN-SER PEPTIDE (20-MER)");
	$s->setPubDate("2013-01-23");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.39);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-100-
	$s = new Structure();
	$s->setPdbId("4B93");
	$s->setKeywords("EXOCYTOSIS");
	$s->setTitle("Complex of Vamp7 cytoplasmic domain with 2nd ankyrin repeat domain of Varp");
	$s->setPubDate("2012-10-31");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.00);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-101-
	$s = new Structure();
	$s->setPdbId("4DRX");
	$s->setKeywords("CELL CYCLE");
	$s->setTitle("GTP-Tubulin in complex with a DARPIN");
	$s->setPubDate("2012-07-11");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.22);
	$s->setNChains(4);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-102-
	$s = new Structure();
	$s->setPdbId("4DX2");
	$s->setKeywords("TRANSPORT PROTEIN");
	$s->setTitle("Crystal structure of the human TRPV4 ankyrin repeat domain");
	$s->setPubDate("2012-07-18");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.9500);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-103-
	$s = new Structure();
	$s->setPdbId("4DX5");
	$s->setKeywords("MEMBRANE PROTEIN, TRANSPORT PROTEIN");
	$s->setTitle("Transport of drugs by the multidrug transporter AcrB involves an access and a deep binding pocket that are separated by a switch-loop");
	$s->setPubDate("2012-05-02");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.900);
	$s->setNChains(3);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-104-
	$s = new Structure();
	$s->setPdbId("4DX6");
	$s->setKeywords("MEMBRANE PROTEIN, TRANSPORT PROTEIN");
	$s->setTitle("Transport of drugs by the multidrug transporter AcrB involves an access and a deep binding pocket that are separated by a switch-loop");
	$s->setPubDate("2012-05-02");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.900);
	$s->setNChains(3);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-105-
	$s = new Structure();
	$s->setPdbId("4DX7");
	$s->setKeywords("MEMBRANE PROTEIN, TRANSPORT PROTEIN");
	$s->setTitle("Transport of drugs by the multidrug transporter AcrB involves an access and a deep binding pocket that are separated by a switch-loop");
	$s->setPubDate("2012-05-02");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.253);
	$s->setNChains(3);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-106-
	$s = new Structure();
	$s->setPdbId("4F1P");
	$s->setKeywords("PROTEIN TRANSPORT");
	$s->setTitle("Crystal Structure of mutant S554D for ArfGAP and ANK repeat domain of ACAP1");
	$s->setPubDate("2012-07-18");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.30);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-107-
	$s = new Structure();
	$s->setPdbId("4F6R");
	$s->setKeywords("CELL CYCLE");
	$s->setTitle("Tubulin:Stathmin-like domain complex");
	$s->setPubDate("2012-07-18");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.64);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-108-
	$s = new Structure();
	$s->setPdbId("4G8K");
	$s->setKeywords("HYDROLASE");
	$s->setTitle("Intact sensor domain of human RNase L in the inactive signaling state");
	$s->setPubDate("2012-10-31");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.400);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-109-
	$s = new Structure();
	$s->setPdbId("4G8L");
	$s->setKeywords("HYDROLASE");
	$s->setTitle("Active state of intact sensor domain of human RNase L with 2-5A bound");
	$s->setPubDate("2012-10-31");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.800);
	$s->setNChains(4);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-110-
	$s = new Structure();
	$s->setPdbId("2AJA");
	$s->setKeywords("PROTEIN BINDING");
	$s->setTitle("X-Ray structure of an ankyrin repeat family protein Q5ZSV0 from Legionella pneumophila. Northeast Structural Genomics Consortium target LgR21.");
	$s->setPubDate("2005-08-16");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.80);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-111-
	$s = new Structure();
	$s->setPdbId("1WDY");
	$s->setKeywords("Hydrolase");
	$s->setTitle("Crystal structure of ribonuclease");
	$s->setPubDate("2004-10-05");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.80);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-112-
	$s = new Structure();
	$s->setPdbId("2B0O");
	$s->setKeywords("METAL BINDING PROTEIN");
	$s->setTitle("Crystal structure of UPLC1 GAP domain");
	$s->setPubDate("2005-09-20");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.06);
	$s->setNChains(4);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-113-
	$s = new Structure();
	$s->setPdbId("2DZO");
	$s->setKeywords("PROTEIN BINDING");
	$s->setTitle("Crystal structure analysis of yeast Nas6p complexed with the proteasome subunit, rpt3");
	$s->setPubDate("2007-10-16");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(3.00);
	$s->setNChains(4);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-114-
	$s = new Structure();
	$s->setPdbId("2HE0");
	$s->setKeywords("SIGNALING PROTEIN");
	$s->setTitle("Crystal structure of a human Notch1 ankyrin domain mutant");
	$s->setPubDate("2006-07-04");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.90);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-115-
	$s = new Structure();
	$s->setPdbId("2KBX");
	$s->setKeywords("CELL ADHESION");
	$s->setTitle("Solution structure of ILK-PINCH complex");
	$s->setPubDate("2008-12-30");
	$s->setMethod("SOLUTION NMR");
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-116-
	$s = new Structure();
	$s->setPdbId("2V4H");
	$s->setKeywords("TRANSCRIPTION");
	$s->setTitle("NEMO CC2-LZ DOMAIN - 1D5 DARPIN COMPLEX");
	$s->setPubDate("2009-11-03");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.90);
	$s->setNChains(3);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-117-
	$s = new Structure();
	$s->setPdbId("2DWZ");
	$s->setKeywords("ONCOPROTEIN");
	$s->setTitle("Structure of the Oncoprotein Gankyrin in Complex with S6 ATPase of the 26S Proteasome");
	$s->setPubDate("2007-08-28");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.40);
	$s->setNChains(4);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-118-
	$s = new Structure();
	$s->setPdbId("1N0R");
	$s->setKeywords("STRUCTURAL PROTEIN");
	$s->setTitle("4ANK: A designed ankyrin repeat protein with four identical consensus repeats");
	$s->setPubDate("2003-01-28");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.50);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-119-
	$s = new Structure();
	$s->setPdbId("1MJ0");
	$s->setKeywords("DE NOVO PROTEIN");
	$s->setTitle("SANK E3_5: an artificial Ankyrin repeat protein");
	$s->setPubDate("2003-01-21");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.031);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-120-
	$s = new Structure();
	$s->setPdbId("1N0Q");
	$s->setKeywords("STRUCTURAL PROTEIN");
	$s->setTitle("3ANK: A designed ankyrin repeat protein with three identical consensus repeats");
	$s->setPubDate("2003-01-28");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.26);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-121-
	$s = new Structure();
	$s->setPdbId("1SVX");
	$s->setKeywords("de novo protein/sugar binding protein");
	$s->setTitle("Crystal structure of a designed selected Ankyrin Repeat protein in complex with the Maltose Binding Protein");
	$s->setPubDate("2004-05-25");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.24);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-122-
	$s = new Structure();
	$s->setPdbId("2BKG");
	$s->setKeywords("DESIGNED PROTEIN");
	$s->setTitle("CRYSTAL STRUCTURE OF E3_19 AN DESIGNED ANKYRIN REPEAT PROTEIN");
	$s->setPubDate("2006-06-21");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.90);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-123-
	$s = new Structure();
	$s->setPdbId("2BKK");
	$s->setKeywords("TRANSFERASE/PEPTIDE");
	$s->setTitle("CRYSTAL STRUCTURE OF AMINOGLYCOSIDE PHOSPHOTRANSFERASE APH (3')-IIIA IN COMPLEX WITH THE INHIBITOR AR_3A");
	$s->setPubDate("2005-08-09");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.15);
	$s->setNChains(3);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-124-
	$s = new Structure();
	$s->setPdbId("2JAB");
	$s->setKeywords("DE NOVO PROTEIN");
	$s->setTitle("A DESIGNED ANKYRIN REPEAT PROTEIN EVOLVED TO PICOMOLAR AFFINITY TO HER2");
	$s->setPubDate("2007-05-08");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.70);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-125-
	$s = new Structure();
	$s->setPdbId("2P2C");
	$s->setKeywords("HYDROLASE");
	$s->setTitle("Inhibition of caspase-2 by a designed ankyrin repeat protein (DARPin)");
	$s->setPubDate("2007-05-22");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(3.24);
	$s->setNChains(13);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-126-
	$s = new Structure();
	$s->setPdbId("2QYJ");
	$s->setKeywords("DE NOVO PROTEIN");
	$s->setTitle("Crystal structure of a designed full consensus ankyrin");
	$s->setPubDate("2007-11-13");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.050);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-127-
	$s = new Structure();
	$s->setPdbId("2V5Q");
	$s->setKeywords("TRANSFERASE");
	$s->setTitle("CRYSTAL STRUCTURE OF WILD-TYPE PLK-1 KINASE DOMAIN IN COMPLEX WITH A SELECTIVE DARPIN");
	$s->setPubDate("2008-04-01");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.30);
	$s->setNChains(3);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-128-
	$s = new Structure();
	$s->setPdbId("2XEE");
	$s->setKeywords("DE NOVO PROTEIN");
	$s->setTitle("STRUCTURAL DETERMINANTS FOR IMPROVED THERMAL STABILITY OF DESIGNED ANKYRIN REPEAT PROTEINS WITH A REDESIGNED C-CAPPING MODULE.");
	$s->setPubDate("2010-08-18");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.100);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-129-
	$s = new Structure();
	$s->setPdbId("2XEH");
	$s->setKeywords("DE NOVO PROTEIN");
	$s->setTitle("STRUCTURAL DETERMINANTS FOR IMPROVED THERMAL STABILITY OF DESIGNED ANKYRIN REPEAT PROTEINS WITH A REDESIGNED C-CAPPING MODULE.");
	$s->setPubDate("2010-08-18");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.81);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-130-
	$s = new Structure();
	$s->setPdbId("2XEN");
	$s->setKeywords("DE NOVO PROTEIN");
	$s->setTitle("STRUCTURAL DETERMINANTS FOR IMPROVED THERMAL STABILITY OF DESIGNED ANKYRIN REPEAT PROTEINS WITH A REDESIGNED C-CAPPING MODULE.");
	$s->setPubDate("2010-08-18");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.200);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-131-
	$s = new Structure();
	$s->setPdbId("2ZGD");
	$s->setKeywords("DE NOVO PROTEIN");
	$s->setTitle("Asn-hydroxylation stabilises the ankyrin repeat domain fold");
	$s->setPubDate("2008-02-05");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.900);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-132-
	$s = new Structure();
	$s->setPdbId("2ZGG");
	$s->setKeywords("DE NOVO PROTEIN");
	$s->setTitle("Asn-hydroxylation stabilises the ankyrin repeat domain fold");
	$s->setPubDate("2008-02-05");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.000);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-133-
	$s = new Structure();
	$s->setPdbId("3HG0");
	$s->setKeywords("PROTEIN BINDING");
	$s->setTitle("Crystal structure of a DARPin in complex with ORF49 from Lactococcal phage TP901-1");
	$s->setPubDate("2009-09-08");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.10);
	$s->setNChains(4);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-134-
	$s = new Structure();
	$s->setPdbId("1BU9");
	$s->setKeywords("HORMONE/GROWTH FACTOR");
	$s->setTitle("SOLUTION STRUCTURE OF P18-INK4C, 21 STRUCTURES");
	$s->setPubDate("1999-09-13");
	$s->setMethod("SOLUTION NMR");
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-135-
	$s = new Structure();
	$s->setPdbId("1A5E");
	$s->setKeywords("ANTI-ONCOGENE");
	$s->setTitle("SOLUTION NMR STRUCTURE OF TUMOR SUPPRESSOR P16INK4A, 18 STRUCTURES");
	$s->setPubDate("1999-08-13");
	$s->setMethod("SOLUTION NMR");
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-136-
	$s = new Structure();
	$s->setPdbId("1WG0");
	$s->setKeywords("PROTEIN BINDING");
	$s->setTitle("Structural comparison of Nas6p protein structures in two different crystal forms");
	$s->setPubDate("2005-06-07");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.53);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-137-
	$s = new Structure();
	$s->setPdbId("2A5E");
	$s->setKeywords("ANTI-ONCOGENE");
	$s->setTitle("SOLUTION NMR STRUCTURE OF TUMOR SUPPRESSOR P16INK4A, RESTRAINED MINIMIZED MEAN STRUCTURE");
	$s->setPubDate("1999-08-13");
	$s->setMethod("SOLUTION NMR");
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-138-
	$s = new Structure();
	$s->setPdbId("2KXP");
	$s->setKeywords("PROTEIN BINDING");
	$s->setTitle("Solution NMR structure of V-1 bound to capping protein (CP)");
	$s->setPubDate("2010-06-09");
	$s->setMethod("SOLUTION NMR");
	$s->setNChains(3);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-139-
	$s = new Structure();
	$s->setPdbId("2XZT");
	$s->setKeywords("HYDROLASE/PROTEIN BINDING");
	$s->setTitle("CASPASE-3 IN COMPLEX WITH DARPIN-3.4_I78S");
	$s->setPubDate("2011-12-14");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.70);
	$s->setNChains(6);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-140-
	$s = new Structure();
	$s->setPdbId("3D9H");
	$s->setKeywords("STRUCTURAL PROTEIN, PROTEIN BINDING");
	$s->setTitle("Crystal Structure of the Splice Variant of Human ASB9 (hASB9-2), an Ankyrin Repeat Protein");
	$s->setPubDate("2009-06-02");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.200);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-141-
	$s = new Structure();
	$s->setPdbId("3HRA");
	$s->setKeywords("STRUCTURAL PROTEIN");
	$s->setTitle("Crystal Structure of EF0377 an Ankyrin Repeat Protein");
	$s->setPubDate("2010-06-16");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.693);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-142-
	$s = new Structure();
	$s->setPdbId("3LJN");
	$s->setKeywords("UNKNOWN FUNCTION");
	$s->setTitle("Ankyrin repeat protein from Leishmania major");
	$s->setPubDate("2010-02-09");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.900);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-143-
	$s = new Structure();
	$s->setPdbId("3V79");
	$s->setKeywords("transcription/DNA");
	$s->setTitle("Structure of human Notch1 transcription complex including CSL, RAM, ANK, and MAML-1 on HES-1 promoter DNA sequence");
	$s->setPubDate("2012-02-15");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(3.85);
	$s->setNChains(3);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-144-
	$s = new Structure();
	$s->setPdbId("3ZKJ");
	$s->setKeywords("TRANSCRIPTION");
	$s->setTitle("Crystal Structure of Ankyrin Repeat and Socs Box-Containing Protein 9 (Asb9) in Complex with Elonginb and Elonginc");
	$s->setPubDate("2013-01-30");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.58);
	$s->setNChains(6);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-145-
	$s = new Structure();
	$s->setPdbId("4BEP");
	$s->setKeywords("TRANSFERASE");
	$s->setTitle("Crystal structure of the Legionella pneumophila FIC domain-containing effector AnkX protein (apo-form)");
	$s->setPubDate("2013-04-24");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(3.14);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-146-
	$s = new Structure();
	$s->setPdbId("4BER");
	$s->setKeywords("TRANSFERASE");
	$s->setTitle("Crystal structure of the Legionella pneumophila FIC domain-containing effector AnkX protein in complex with cytidine monophosphate");
	$s->setPubDate("2013-04-24");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.60);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-147-
	$s = new Structure();
	$s->setPdbId("4BES");
	$s->setKeywords("TRANSFERASE");
	$s->setTitle("Crystal structure of the Legionella pneumophila FIC domain-containing effector AnkX protein in complex with cytidine monophosphate and phosphocholine");
	$s->setPubDate("2013-04-24");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.54);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-148-
	$s = new Structure();
	$s->setPdbId("4BET");
	$s->setKeywords("TRANSFERASE");
	$s->setTitle("Crystal structure of the Legionella pneumophila FIC domain-containing effector AnkX protein (inactive H229A mutant) in complex with cytidine-diphosphate-choline");
	$s->setPubDate("2013-04-24");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.55);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-149-
	$s = new Structure();
	$s->setPdbId("4GMR");
	$s->setKeywords("DE NOVO PROTEIN");
	$s->setTitle("Crystal Structure of Engineered Protein. Northeast Structural Genomics Consortium Target OR266.");
	$s->setPubDate("2012-08-29");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.377);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-150-
	$s = new Structure();
	$s->setPdbId("4GPM");
	$s->setKeywords("DE NOVO PROTEIN");
	$s->setTitle("Crystal Structure of Engineered Protein. Northeast Structural Genomics Consortium Target OR264.");
	$s->setPubDate("2012-09-05");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.002);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-151-
	$s = new Structure();
	$s->setPdbId("4HNA");
	$s->setKeywords("MOTOR PROTEIN");
	$s->setTitle("Kinesin motor domain in the ADP-MG-ALFX state in complex with tubulin and a DARPIN");
	$s->setPubDate("2013-06-12");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(3.19);
	$s->setNChains(4);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-152-
	$s = new Structure();
	$s->setPdbId("4DUI");
	$s->setKeywords("DE NOVO PROTEIN");
	$s->setTitle("DARPIN D1 binding to tubulin beta chain (not in complex)");
	$s->setPubDate("2013-02-27");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.160);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-153-
	$s = new Structure();
	$s->setPdbId("4JB8");
	$s->setKeywords("Hydrolase/DE NOVO PROTEIN");
	$s->setTitle("Caspase-7 in Complex with DARPin C7_16");
	$s->setPubDate("2013-08-21");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.700);
	$s->setNChains(3);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-154-
	$s = new Structure();
	$s->setPdbId("4HRN");
	$s->setKeywords("TRANSFERASE/DE NOVO PROTEIN");
	$s->setTitle("Structural Basis for Eliciting a Cytotoxic Effect in HER2-Overexpressing Cancer Cells via Binding to the Extracellular Domain of HER2");
	$s->setPubDate("2013-10-16");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.6500);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-155-
	$s = new Structure();
	$s->setPdbId("4HBD");
	$s->setKeywords("PROTEIN BINDING");
	$s->setTitle("Crystal structure of KANK2 ankyrin repeats");
	$s->setPubDate("2012-12-12");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.7200);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-156-
	$s = new Structure();
	$s->setPdbId("4HLL");
	$s->setKeywords("PROTEIN BINDING");
	$s->setTitle("Crystal structure of Artificial ankyrin repeat protein_Ank(GAG)1D4");
	$s->setPubDate("2013-10-23");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.2);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-157-
	$s = new Structure();
	$s->setPdbId("4HRL");
	$s->setKeywords("TRANSFERASE/DE NOVO PROTEIN");
	$s->setTitle("Structural Basis for Eliciting a Cytotoxic Effect in HER2-Overexpressing Cancer Cells via Binding to the Extracellular Domain of HER2");
	$s->setPubDate("2013-10-16");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.5500);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-158-
	$s = new Structure();
	$s->setPdbId("4HRM");
	$s->setKeywords("TRANSFERASE/DE NOVO PROTEIN");
	$s->setTitle("Structural Basis for Eliciting a Cytotoxic Effect in HER2-Overexpressing Cancer Cells via Binding to the Extracellular Domain of HER2");
	$s->setPubDate("2013-10-16");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(3.2000);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-159-
	$s = new Structure();
	$s->setPdbId("4BSZ");
	$s->setKeywords("RNA BINDING PROTEIN");
	$s->setTitle("Crystal Structure of the Yeast Ribosomal Protein Rps3 in Complex with its Chaperone Yar1");
	$s->setPubDate("2013-09-04");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.842);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-160-
	$s = new Structure();
	$s->setPdbId("4BSZMYSQL");
	$s->setKeywords("RNA BINDING PROTEIN");
	$s->setTitle("Crystal Structure of the Yeast Ribosomal Protein Rps3 in Complex with its Chaperone Yar1");
	$s->setPubDate("2013-09-04");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(2.842);
	$s->setNChains(2);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-161-
	$s = new Structure();
	$s->setPdbId("4J7W");
	$s->setKeywords("DE NOVO PROTEIN");
	$s->setTitle("E3_5 DARPin L86A mutant");
	$s->setPubDate("2013-08-14");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.600);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
	//-162-
	$s = new Structure();
	$s->setPdbId("4J8Y");
	$s->setKeywords("DE NOVO PROTEIN");
	$s->setTitle("E3_5 DARPin D77S mutant");
	$s->setPubDate("2013-08-14");
	$s->setMethod("X-RAY DIFFRACTION");
	$s->setResolution(1.700);
	$s->setNChains(1);
	$s->setSubGroup("Ank");
	$manager->persist($s);
	
        $manager->flush();

    }

    public function getOrder() {
        return 1;
    }
}