<?php

	namespace LFP\StructuralAnks\MainBundle\DataFixtures\ORM;

	use Doctrine\Common\DataFixtures\FixtureInterface;
	use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use LFP\StructuralAnks\MainBundle\Entity\Experiment;
	use Symfony\Component\DependencyInjection\ContainerAwareInterface;
	use Symfony\Component\DependencyInjection\ContainerInterface;

	/**
	 * @author Gonza Parra <parra.gonzalo@gmail.com>
	 */
	class LoadExperimentData implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
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
			$tableName = $em->getClassMetadata('LFPStructuralAnksMainBundle:Experiment')->getTableName();
			$em->getConnection()->exec("
				SET foreign_key_checks = 0;
				TRUNCATE $tableName;
				SET foreign_key_checks = 1;
			");

			// Reset ID column
			$em->getConnection()->exec("ALTER TABLE $tableName AUTO_INCREMENT = 1;");
			$doctrine = $this->container->get('doctrine');
	
			//-0-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P55273"));
			$s->setDerivedFrom("P19INK4D");
			$s->setVariant("wildtype");
			$s->setDeltaG(6.52);
			$s->setM(2.12);
			$s->setPh(7.4);
			$s->setTemp(15);
			$s->setBuffer("20mM phosphate");
			$s->setDenaturant("Urea");
			$s->setPmid("17804013");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-1-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P55273"));
			$s->setDerivedFrom("P19INK4D");
			$s->setVariant("wildtype");
			$s->setDeltaG(6.64);
			$s->setM(2.18);
			$s->setPh(7.4);
			$s->setTemp(15);
			$s->setBuffer("20mM phosphate");
			$s->setDenaturant("Urea");
			$s->setPmid("17804013");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-2-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P55273"));
			$s->setDerivedFrom("P19INK4D");
			$s->setVariant("F86W");
			$s->setDeltaG(6.31);
			$s->setM(2.07);
			$s->setPh(7.4);
			$s->setTemp(15);
			$s->setBuffer("20mM phosphate");
			$s->setDenaturant("Urea");
			$s->setPmid("17804013");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-3-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P55273"));
			$s->setDerivedFrom("P19INK4D");
			$s->setVariant("F86W");
			$s->setDeltaG(6.33);
			$s->setM(2.03);
			$s->setPh(7.4);
			$s->setTemp(15);
			$s->setBuffer("20mM phosphate");
			$s->setDenaturant("Urea");
			$s->setPmid("17804013");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-4-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P55273"));
			$s->setDerivedFrom("P19INK4D");
			$s->setVariant("ANK1-4. H96W");
			$s->setDeltaG(2.96);
			$s->setM(1.82);
			$s->setPh(7.4);
			$s->setTemp(15);
			$s->setBuffer("20mM phosphate");
			$s->setDenaturant("Urea");
			$s->setPmid("17804013");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-5-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P55273"));
			$s->setDerivedFrom("P19INK4D");
			$s->setVariant("ANK3-5");
			$s->setDeltaG(2.21);
			$s->setM(1.15);
			$s->setPh(7.4);
			$s->setTemp(15);
			$s->setBuffer("20mM phosphate");
			$s->setDenaturant("Urea");
			$s->setPmid("17804013");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-6-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P55273"));
			$s->setDerivedFrom("P19INK4D");
			$s->setVariant("Ank3-5");
			$s->setDeltaG(2.3);
			$s->setM(1.2);
			$s->setPh(7.4);
			$s->setTemp(15);
			$s->setBuffer("20mM phosphate");
			$s->setDenaturant("Urea");
			$s->setPmid("17804013");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-7-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P62775"));
			$s->setDerivedFrom("Myotrophin");
			$s->setVariant("wildtype");
			$s->setDeltaG(5.41);
			$s->setDeltaGError(0.13);
			$s->setM(1.9);
			$s->setMError(0.05);
			$s->setPh(5);
			$s->setTemp(20);
			$s->setBuffer("10mM succinate; 1mM EDTA; 20uM TCEP");
			$s->setDenaturant("Urea");
			$s->setPmid("12079376");
			$s->setNStates(2);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-8-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P62775"));
			$s->setDerivedFrom("Myotrophin");
			$s->setVariant("wildtype");
			$s->setDeltaG(5.13);
			$s->setDeltaGError(0.23);
			$s->setM(1.58);
			$s->setMError(0.07);
			$s->setPh(7);
			$s->setTemp(20);
			$s->setBuffer("10mM phosphate; 1mM EDTA; 20uM TCEP");
			$s->setDenaturant("Urea");
			$s->setPmid("12079376");
			$s->setNStates(2);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-9-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P62775"));
			$s->setDerivedFrom("Myotrophin");
			$s->setVariant("wildtype");
			$s->setDeltaG(3.73);
			$s->setDeltaGError(0.18);
			$s->setM(1.33);
			$s->setMError(0.06);
			$s->setPh(9);
			$s->setTemp(20);
			$s->setBuffer("10mM Ches; 1mM EDTA; 20uM TCEP");
			$s->setDenaturant("Urea");
			$s->setPmid("12079376");
			$s->setNStates(2);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-10-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P62775"));
			$s->setDerivedFrom("Myotrophin");
			$s->setVariant("wildtype");
			$s->setDeltaG(5.46);
			$s->setDeltaGError(1.03);
			$s->setM(1.95);
			$s->setMError(0.35);
			$s->setPh(5);
			$s->setTemp(20);
			$s->setBuffer("10mM succinate; 1mM EDTA; 20uM TCEP");
			$s->setDenaturant("Urea");
			$s->setPmid("12079376");
			$s->setNStates(2);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-11-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P62775"));
			$s->setDerivedFrom("Myotrophin");
			$s->setVariant("wildtype");
			$s->setDeltaG(5.26);
			$s->setDeltaGError(0.21);
			$s->setM(1.62);
			$s->setMError(0.06);
			$s->setPh(7);
			$s->setTemp(20);
			$s->setBuffer("10mM phosphate;1mM EDTA; 20uM TCEP");
			$s->setDenaturant("Urea");
			$s->setPmid("12079376");
			$s->setNStates(2);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-12-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P62775"));
			$s->setDerivedFrom("Myotrophin");
			$s->setVariant("wildtype");
			$s->setDeltaG(3.87);
			$s->setDeltaGError(0.17);
			$s->setM(1.44);
			$s->setMError(0.06);
			$s->setPh(9);
			$s->setTemp(20);
			$s->setBuffer("10mM Ches; 1mM EDTA; 20uM TCEP");
			$s->setDenaturant("Urea");
			$s->setPmid("12079376");
			$s->setNStates(2);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-13-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-7 - wildtype");
			$s->setDeltaG(7.74);
			$s->setDeltaGError(0.07);
			$s->setM(2.86);
			$s->setMError(0.02);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("17067634");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-14-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-7 - wildtype");
			$s->setDeltaG(7.64);
			$s->setDeltaGError(0.08);
			$s->setM(1.84);
			$s->setMError(0.01);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("17067634");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-15-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5");
			$s->setDeltaG(3.21);
			$s->setDeltaGError(0.09);
			$s->setM(1.78);
			$s->setMError(0.03);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("17067634");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-16-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5");
			$s->setDeltaG(3.29);
			$s->setDeltaGError(0.03);
			$s->setM(1.84);
			$s->setMError(0.01);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("17067634");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-17-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C1");
			$s->setDeltaG(7.31);
			$s->setDeltaGError(0.17);
			$s->setM(1.98);
			$s->setMError(0.1);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("17067634");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-18-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C1");
			$s->setDeltaG(7.5);
			$s->setDeltaGError(0.09);
			$s->setM(2.05);
			$s->setMError(0.03);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("17067634");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-19-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C2");
			$s->setDeltaG(13.02);
			$s->setDeltaGError(0.03);
			$s->setM(2.28);
			$s->setMError(0.07);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("17067634");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-20-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C2");
			$s->setDeltaG(13.25);
			$s->setDeltaGError(0.4);
			$s->setM(2.3);
			$s->setMError(0.07);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("17067634");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-21-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C3");
			$s->setDeltaG(12.6);
			$s->setDeltaGError(0.12);
			$s->setM(1.67);
			$s->setMError(0.03);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("17067634");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-22-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C3");
			$s->setDeltaG(13.66);
			$s->setDeltaGError(0.58);
			$s->setM(1.83);
			$s->setMError(0.08);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("17067634");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-23-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-7 - wildtype");
			$s->setDeltaG(6.65);
			$s->setDeltaGError(0.04);
			$s->setM(2.85);
			$s->setMError(0.02);
			$s->setPh(8);
			$s->setTemp(15);
			$s->setBuffer("25mM Tris-HCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15377792");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-24-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-6");
			$s->setDeltaG(2.85);
			$s->setDeltaGError(0.03);
			$s->setM(1.76);
			$s->setMError(0.01);
			$s->setPh(8);
			$s->setTemp(15);
			$s->setBuffer("25mM Tris-HCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15377792");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-25-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5");
			$s->setDeltaG(2.69);
			$s->setDeltaGError(0.04);
			$s->setM(1.73);
			$s->setMError(0.03);
			$s->setPh(8);
			$s->setTemp(15);
			$s->setBuffer("25mM Tris-HCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15377792");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-26-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-4");
			$s->setDeltaG(-0.37);
			$s->setM(0.85);
			$s->setPh(8);
			$s->setTemp(15);
			$s->setBuffer("25mM Tris-HCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15377792");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-27-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank4-7");
			$s->setDeltaG(-0.089);
			$s->setM(2.12);
			$s->setPh(8);
			$s->setTemp(15);
			$s->setBuffer("25mM Tris-HCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15377792");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-28-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank3-7");
			$s->setDeltaG(1.81);
			$s->setDeltaGError(0.09);
			$s->setM(1.58);
			$s->setMError(0.02);
			$s->setPh(8);
			$s->setTemp(15);
			$s->setBuffer("25mM Tris-HCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15377792");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-29-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank2-7");
			$s->setDeltaG(4.96);
			$s->setDeltaGError(0.04);
			$s->setM(2.36);
			$s->setMError(0.02);
			$s->setPh(8);
			$s->setTemp(15);
			$s->setBuffer("25mM Tris-HCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15377792");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-30-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank2-6");
			$s->setDeltaG(1.96);
			$s->setDeltaGError(0.002);
			$s->setM(1.58);
			$s->setMError(0.02);
			$s->setPh(8);
			$s->setTemp(15);
			$s->setBuffer("25mM Tris-HCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15377792");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-31-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank2-5");
			$s->setDeltaG(1.73);
			$s->setDeltaGError(0.03);
			$s->setM(1.39);
			$s->setMError(0.02);
			$s->setPh(8);
			$s->setTemp(15);
			$s->setBuffer("25mM Tris-HCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15377792");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-32-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-7 - wildtype");
			$s->setDeltaG(6.78);
			$s->setDeltaGError(0.6);
			$s->setM(2.91);
			$s->setMError(0.03);
			$s->setPh(8);
			$s->setTemp(15);
			$s->setBuffer("25mM Tris-HCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15377792");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-33-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-6");
			$s->setDeltaG(3.01);
			$s->setDeltaGError(0.03);
			$s->setM(1.85);
			$s->setMError(0.02);
			$s->setPh(8);
			$s->setTemp(15);
			$s->setBuffer("25mM Tris-HCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15377792");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-34-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5");
			$s->setDeltaG(2.84);
			$s->setDeltaGError(0.16);
			$s->setM(1.67);
			$s->setMError(0.08);
			$s->setPh(8);
			$s->setTemp(15);
			$s->setBuffer("25mM Tris-HCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15377792");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-35-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank3-7");
			$s->setDeltaG(1.7);
			$s->setDeltaGError(0.23);
			$s->setM(1.67);
			$s->setMError(0.08);
			$s->setPh(8);
			$s->setTemp(15);
			$s->setBuffer("25mM Tris-HCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15377792");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-36-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank2-7");
			$s->setDeltaG(5.05);
			$s->setDeltaGError(0.04);
			$s->setM(2.44);
			$s->setMError(0.03);
			$s->setPh(8);
			$s->setTemp(15);
			$s->setBuffer("25mM Tris-HCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15377792");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-37-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank2-6");
			$s->setDeltaG(2.03);
			$s->setDeltaGError(0.02);
			$s->setM(1.67);
			$s->setMError(0.02);
			$s->setPh(8);
			$s->setTemp(15);
			$s->setBuffer("25mM Tris-HCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15377792");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-38-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank2-5");
			$s->setDeltaG(1.54);
			$s->setDeltaGError(0.03);
			$s->setM(1.34);
			$s->setMError(0.01);
			$s->setPh(8);
			$s->setTemp(15);
			$s->setBuffer("25mM Tris-HCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15377792");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-39-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-7 - wildtype");
			$s->setDeltaG(7.49);
			$s->setDeltaGError(0.07);
			$s->setM(2.89);
			$s->setMError(0.07);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25 mM Tris-HCl; 150mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("17360387");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-40-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-6");
			$s->setDeltaG(5.09);
			$s->setDeltaGError(0.02);
			$s->setM(2.46);
			$s->setMError(0.01);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25 mM Tris-HCl; 150mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("17360387");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-41-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5");
			$s->setDeltaG(3.55);
			$s->setDeltaGError(0.07);
			$s->setM(1.99);
			$s->setMError(0.02);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25 mM Tris-HCl; 150mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("17360387");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-42-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-4");
			$s->setDeltaG(6.34);
			$s->setDeltaGError(0.08);
			$s->setM(2.76);
			$s->setMError(0.05);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25 mM Tris-HCl; 150mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("17360387");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-43-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank4-7");
			$s->setDeltaG(5.83);
			$s->setDeltaGError(0.09);
			$s->setM(2.66);
			$s->setMError(0.06);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25 mM Tris-HCl; 150mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("17360387");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-44-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-4");
			$s->setDeltaG(5.86);
			$s->setDeltaGError(0.06);
			$s->setM(2.68);
			$s->setMError(0.03);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25 mM Tris-HCl; 150mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("17360387");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-45-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank4-7");
			$s->setDeltaG(3.77);
			$s->setDeltaGError(0.04);
			$s->setM(2.93);
			$s->setMError(0.04);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25 mM Tris-HCl; 150mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("17360387");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-46-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank51");
			$s->setDeltaG(7.74);
			$s->setDeltaGError(0.07);
			$s->setM(2.89);
			$s->setMError(0.04);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15504409");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-47-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank52");
			$s->setDeltaG(8.57);
			$s->setDeltaGError(0.21);
			$s->setM(2.89);
			$s->setMError(0.05);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15504409");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-48-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank53");
			$s->setDeltaG(6.92);
			$s->setDeltaGError(0.03);
			$s->setM(2.32);
			$s->setMError(0.01);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15504409");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-49-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank54");
			$s->setDeltaG(5.28);
			$s->setDeltaGError(0.04);
			$s->setM(1.77);
			$s->setMError(0.02);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15504409");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-50-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank51");
			$s->setDeltaG(7.64);
			$s->setDeltaGError(0.08);
			$s->setM(2.86);
			$s->setMError(0.02);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15504409");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-51-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank52");
			$s->setDeltaG(8.62);
			$s->setDeltaGError(0.1);
			$s->setM(2.95);
			$s->setMError(0.03);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15504409");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-52-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank53");
			$s->setDeltaG(7.41);
			$s->setDeltaGError(0.08);
			$s->setM(2.5);
			$s->setMError(0.03);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15504409");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-53-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank54");
			$s->setDeltaG(5.9);
			$s->setDeltaGError(0.15);
			$s->setM(1.99);
			$s->setMError(0.06);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("15504409");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-54-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16-Model");
			$s->setVariant("wildtype");
			$s->setDeltaG(3.7);
			$s->setDeltaGError(0.1);
			$s->setM(1.9);
			$s->setMError(0.01);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("5uM in 15mM sodium phosphate; 1mM DDT and 100 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("9917418");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-55-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16-Model");
			$s->setVariant("D74N");
			$s->setDeltaG(1.7);
			$s->setDeltaGError(0.21);
			$s->setM(1.2);
			$s->setMError(0.1);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("5uM in 15mM sodium phosphate; 1mM DDT and 100 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("9917418");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-56-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16-Model");
			$s->setVariant("P81L");
			$s->setDeltaG(3.7);
			$s->setDeltaGError(0.21);
			$s->setM(1.1);
			$s->setMError(0.35);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("5uM in 15mM sodium phosphate; 1mM DDT and 100 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("9917418");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-57-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16-Model");
			$s->setVariant("D84N");
			$s->setDeltaG(3.6);
			$s->setDeltaGError(0.1);
			$s->setM(2);
			$s->setMError(0.2);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("5uM in 15mM sodium phosphate; 1mM DDT and 100 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("9917418");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-58-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O75832"));
			$s->setDerivedFrom("Gankyrin");
			$s->setVariant("Gankyrin-wildtype");
			$s->setDeltaG(3.99);
			$s->setDeltaGError(0.5);
			$s->setM(2.47);
			$s->setMError(0.5);
			$s->setPh(7.4);
			$s->setTemp(25);
			$s->setBuffer("20mM sodium borate buffer + 40uM DTT");
			$s->setDenaturant("Urea");
			$s->setTm(46.8);
			$s->setPmid("20398677");
			$s->setNStates(2);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-59-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O75832"));
			$s->setDerivedFrom("Gankyrin");
			$s->setVariant("GankyrinTPLH1A-T42A");
			$s->setDeltaG(4.3);
			$s->setDeltaGError(0.5);
			$s->setM(2.7);
			$s->setMError(0.5);
			$s->setPh(7.4);
			$s->setTemp(25);
			$s->setBuffer("20mM sodium borate buffer + 40uM DTT");
			$s->setDenaturant("Urea");
			$s->setTm(47.6);
			$s->setPmid("20398677");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-60-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O75832"));
			$s->setDerivedFrom("Gankyrin");
			$s->setVariant("GankyrinTPLH1AB-T42A/H45A");
			$s->setDeltaG(5.93);
			$s->setDeltaGError(0.5);
			$s->setM(4.41);
			$s->setMError(0.5);
			$s->setPh(7.4);
			$s->setTemp(25);
			$s->setBuffer("20mM sodium borate buffer + 40uM DTT");
			$s->setDenaturant("Urea");
			$s->setTm(44.7);
			$s->setPmid("20398677");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-61-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O75832"));
			$s->setDerivedFrom("Gankyrin");
			$s->setVariant("GankyrinTPLH2A-S75A");
			$s->setDeltaG(7.09);
			$s->setDeltaGError(0.5);
			$s->setM(3.99);
			$s->setMError(0.5);
			$s->setPh(7.4);
			$s->setTemp(25);
			$s->setBuffer("20mM sodium borate buffer + 40uM DTT");
			$s->setDenaturant("Urea");
			$s->setTm(50.3);
			$s->setPmid("20398677");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-62-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O75832"));
			$s->setDerivedFrom("Gankyrin");
			$s->setVariant("GankyrinTPLH2AB-S75A/H78A");
			$s->setDeltaG(5.53);
			$s->setDeltaGError(0.5);
			$s->setM(3.54);
			$s->setMError(0.5);
			$s->setPh(7.4);
			$s->setTemp(25);
			$s->setBuffer("20mM sodium borate buffer + 40uM DTT");
			$s->setDenaturant("Urea");
			$s->setTm(47.2);
			$s->setPmid("20398677");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-63-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O75832"));
			$s->setDerivedFrom("Gankyrin");
			$s->setVariant("GankyrinTPLH3A-T108A");
			$s->setDeltaG(1.31);
			$s->setDeltaGError(0.5);
			$s->setM(1.04);
			$s->setMError(0.5);
			$s->setPh(7.4);
			$s->setTemp(25);
			$s->setBuffer("20mM sodium borate buffer + 40uM DTT");
			$s->setDenaturant("Urea");
			$s->setTm(43.4);
			$s->setPmid("20398677");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-64-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O75832"));
			$s->setDerivedFrom("Gankyrin");
			$s->setVariant("GankyrinTPLH5A-T174A");
			$s->setDeltaG(3.23);
			$s->setDeltaGError(0.5);
			$s->setM(2.27);
			$s->setMError(0.5);
			$s->setPh(7.4);
			$s->setTemp(25);
			$s->setBuffer("20mM sodium borate buffer + 40uM DTT");
			$s->setDenaturant("Urea");
			$s->setTm(47.6);
			$s->setPmid("20398677");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-65-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O75832"));
			$s->setDerivedFrom("Gankyrin");
			$s->setVariant("GankyrinTPLH5AB-T174A/H177A");
			$s->setDeltaG(3.24);
			$s->setDeltaGError(0.5);
			$s->setM(2.05);
			$s->setMError(0.5);
			$s->setPh(7.4);
			$s->setTemp(25);
			$s->setBuffer("20mM sodium borate buffer + 40uM DTT");
			$s->setDenaturant("Urea");
			$s->setTm(46.5);
			$s->setPmid("20398677");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-66-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O75832"));
			$s->setDerivedFrom("Gankyrin");
			$s->setVariant("GankyrinTPLH6A-T207A");
			$s->setDeltaG(3.24);
			$s->setDeltaGError(0.5);
			$s->setM(2.16);
			$s->setMError(0.5);
			$s->setPh(7.4);
			$s->setTemp(25);
			$s->setBuffer("20mM sodium borate buffer + 40uM DTT");
			$s->setDenaturant("Urea");
			$s->setTm(47.5);
			$s->setPmid("20398677");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-67-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O75832"));
			$s->setDerivedFrom("Gankyrin");
			$s->setVariant("GankyrinTPLH6AB-T207A/Q210A");
			$s->setDeltaG(2.86);
			$s->setDeltaGError(0.5);
			$s->setM(1.53);
			$s->setMError(0.5);
			$s->setPh(7.4);
			$s->setTemp(25);
			$s->setBuffer("20mM sodium borate buffer + 40uM DTT");
			$s->setDenaturant("Urea");
			$s->setTm(47.1);
			$s->setPmid("20398677");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-68-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O75832"));
			$s->setDerivedFrom("Gankyrin");
			$s->setVariant("Gankyrin S75A-S75T");
			$s->setDeltaG(6.83);
			$s->setDeltaGError(0.5);
			$s->setM(2.01);
			$s->setMError(0.5);
			$s->setPh(7.4);
			$s->setTemp(25);
			$s->setBuffer("20mM sodium borate buffer + 40uM DTT");
			$s->setDenaturant("Urea");
			$s->setTm(55.9);
			$s->setPmid("20398677");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-69-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("O75832"));
			$s->setDerivedFrom("Gankyrin");
			$s->setVariant("GankyrinH11Q-H111Q");
			$s->setDeltaG(2.69);
			$s->setDeltaGError(0.5);
			$s->setM(1.26);
			$s->setMError(0.5);
			$s->setPh(7.4);
			$s->setTemp(25);
			$s->setBuffer("20mM sodium borate buffer + 40uM DTT");
			$s->setDenaturant("Urea");
			$s->setTm(45.8);
			$s->setPmid("20398677");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-70-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16");
			$s->setVariant("P16-wildtype");
			$s->setDeltaG(1.94);
			$s->setDeltaGError(0.5);
			$s->setM(3.23);
			$s->setMError(0.5);
			$s->setPh(7.4);
			$s->setTemp(25);
			$s->setBuffer("20mM sodium borate buffer + 40uM DTT");
			$s->setDenaturant("Urea");
			$s->setTm(46);
			$s->setPmid("20398677");
			$s->setNStates(2);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-71-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16");
			$s->setVariant("P16TPLH2-R80T");
			$s->setDeltaG(4.229);
			$s->setDeltaGError(0.5);
			$s->setM(4.1);
			$s->setMError(0.5);
			$s->setPh(7.4);
			$s->setTemp(25);
			$s->setBuffer("20mM sodium borate buffer + 40uM DTT");
			$s->setDenaturant("Urea");
			$s->setTm(50.9);
			$s->setPmid("20398677");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-72-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16");
			$s->setVariant("P16TPLH3-L113/D116H");
			$s->setDeltaG(1.903);
			$s->setDeltaGError(0.5);
			$s->setM(4.35);
			$s->setMError(0.5);
			$s->setPh(7.4);
			$s->setTemp(25);
			$s->setBuffer("20mM sodium borate buffer + 40uM DTT");
			$s->setDenaturant("Urea");
			$s->setTm(36.3);
			$s->setPmid("20398677");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-73-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16");
			$s->setVariant("P16TPLH2-3-R80T/L113T/D116H");
			$s->setDeltaG(2.487);
			$s->setDeltaGError(0.5);
			$s->setM(4.13);
			$s->setMError(0.5);
			$s->setPh(7.4);
			$s->setTemp(25);
			$s->setBuffer("20mM sodium borate buffer + 40uM DTT");
			$s->setDenaturant("Urea");
			$s->setTm(44.4);
			$s->setPmid("20398677");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-74-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("wildtype");
			$s->setDeltaG(6.3);
			$s->setDeltaGError(0.2);
			$s->setM(2.06);
			$s->setPh(7.5);
			$s->setTemp(5);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-75-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("wildtype");
			$s->setDeltaG(6.1);
			$s->setDeltaGError(0.2);
			$s->setM(2.06);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-76-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("wildtype");
			$s->setDeltaG(5.8);
			$s->setDeltaGError(0.2);
			$s->setM(2.06);
			$s->setPh(7.5);
			$s->setTemp(15);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-77-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("wildtype");
			$s->setDeltaG(5.7);
			$s->setDeltaGError(0.2);
			$s->setM(2.06);
			$s->setPh(7.5);
			$s->setTemp(20);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-78-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("wildtype");
			$s->setDeltaG(5.9);
			$s->setDeltaGError(0.2);
			$s->setM(2.06);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-79-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("wildtype");
			$s->setDeltaG(6.5);
			$s->setDeltaGError(0.1);
			$s->setM(2.12);
			$s->setPh(7.5);
			$s->setTemp(5);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-80-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("wildtype");
			$s->setDeltaG(6.2);
			$s->setDeltaGError(0.1);
			$s->setM(2.12);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-81-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("wildtype");
			$s->setDeltaG(6);
			$s->setDeltaGError(0.1);
			$s->setM(2.12);
			$s->setPh(7.5);
			$s->setTemp(15);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-82-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("wildtype");
			$s->setDeltaG(5.9);
			$s->setDeltaGError(0.1);
			$s->setM(2.12);
			$s->setPh(7.5);
			$s->setTemp(20);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-83-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("wildtype");
			$s->setDeltaG(6.3);
			$s->setDeltaGError(0.1);
			$s->setM(2.12);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-84-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W – wildtype");
			$s->setDeltaG(6.5);
			$s->setDeltaGError(0.2);
			$s->setM(2.19);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-85-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W – S76T/F77P");
			$s->setDeltaG(6.9);
			$s->setDeltaGError(0.2);
			$s->setM(2.19);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-86-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W – v93L");
			$s->setDeltaG(8.6);
			$s->setDeltaGError(0.2);
			$s->setM(2.19);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-87-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W – Q111G");
			$s->setDeltaG(8.4);
			$s->setDeltaGError(0.2);
			$s->setM(2.19);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-88-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W – T113S");
			$s->setDeltaG(5.6);
			$s->setDeltaGError(0.2);
			$s->setM(2.19);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-89-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W – L117V");
			$s->setDeltaG(5.5);
			$s->setDeltaGError(0.2);
			$s->setM(2.19);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-90-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W – N122G");
			$s->setDeltaG(7.5);
			$s->setDeltaGError(0.2);
			$s->setM(2.19);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-91-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W – A127V");
			$s->setDeltaG(6.8);
			$s->setDeltaGError(0.2);
			$s->setM(2.19);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-92-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W – L131V");
			$s->setDeltaG(4.7);
			$s->setDeltaGError(0.2);
			$s->setM(2.19);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-93-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W – T146S");
			$s->setDeltaG(4.9);
			$s->setDeltaGError(0.2);
			$s->setM(2.19);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-94-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W – V160A");
			$s->setDeltaG(6.7);
			$s->setDeltaGError(0.2);
			$s->setM(2.19);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-95-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W – lL163V");
			$s->setDeltaG(5.2);
			$s->setDeltaGError(0.2);
			$s->setM(2.19);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-96-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W – T164L");
			$s->setDeltaG(7.3);
			$s->setDeltaGError(0.2);
			$s->setM(2.19);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-97-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W – T185S");
			$s->setDeltaG(5.7);
			$s->setDeltaGError(0.2);
			$s->setM(2.19);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-98-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W – C186P");
			$s->setDeltaG(7.2);
			$s->setDeltaGError(0.2);
			$s->setM(2.19);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-99-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W  - G194A");
			$s->setDeltaG(5.4);
			$s->setDeltaGError(0.2);
			$s->setM(2.19);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-100-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W  - V203L");
			$s->setDeltaG(7.3);
			$s->setDeltaGError(0.2);
			$s->setM(2.19);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-101-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W – wildtype");
			$s->setDeltaG(6.9);
			$s->setDeltaGError(0.1);
			$s->setM(2.35);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-102-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W  - S76T/F77P");
			$s->setDeltaG(7.5);
			$s->setDeltaGError(0.1);
			$s->setM(2.35);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-103-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W  - v93L");
			$s->setDeltaG(9.1);
			$s->setDeltaGError(0.1);
			$s->setM(2.35);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-104-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W  - Q111G");
			$s->setDeltaG(9.2);
			$s->setDeltaGError(0.1);
			$s->setM(2.35);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-105-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W  - T113S");
			$s->setDeltaG(6.1);
			$s->setDeltaGError(0.1);
			$s->setM(2.35);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-106-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W  - L117V");
			$s->setDeltaG(5.8);
			$s->setDeltaGError(0.1);
			$s->setM(2.35);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-107-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W  - N122G");
			$s->setDeltaG(8.2);
			$s->setDeltaGError(0.1);
			$s->setM(2.35);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-108-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W  - A127V");
			$s->setDeltaG(7.3);
			$s->setDeltaGError(0.1);
			$s->setM(2.35);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-109-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W  - L131V");
			$s->setDeltaG(5);
			$s->setDeltaGError(0.1);
			$s->setM(2.35);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-110-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W  - T146S");
			$s->setDeltaG(5.3);
			$s->setDeltaGError(0.1);
			$s->setM(2.35);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-111-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W  - V160A");
			$s->setDeltaG(7.2);
			$s->setDeltaGError(0.1);
			$s->setM(2.35);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-112-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W  - lL163V");
			$s->setDeltaG(5.6);
			$s->setDeltaGError(0.1);
			$s->setM(2.35);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-113-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W  - T164L");
			$s->setDeltaG(7.8);
			$s->setDeltaGError(0.1);
			$s->setM(2.35);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-114-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W  - T185S");
			$s->setDeltaG(6.1);
			$s->setDeltaGError(0.1);
			$s->setM(2.35);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-115-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W  - C186P");
			$s->setDeltaG(7.7);
			$s->setDeltaGError(0.1);
			$s->setM(2.35);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-116-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W  - G194A");
			$s->setDeltaG(5.8);
			$s->setDeltaGError(0.1);
			$s->setM(2.35);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-117-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-206 W  - V203L");
			$s->setDeltaG(7.8);
			$s->setDeltaGError(0.1);
			$s->setM(2.13);
			$s->setPh(7.5);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-118-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-287 W – wildtype");
			$s->setDeltaG(7.1);
			$s->setDeltaGError(0.2);
			$s->setM(2.13);
			$s->setPh(7.6);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-119-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-287 W – W258F");
			$s->setDeltaG(7.2);
			$s->setDeltaGError(0.3);
			$s->setM(2.13);
			$s->setPh(7.7);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-120-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-287 W – Q111G");
			$s->setDeltaG(8.7);
			$s->setDeltaGError(0.3);
			$s->setM(2.13);
			$s->setPh(7.8);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-121-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-287 W – T164L");
			$s->setDeltaG(7.5);
			$s->setDeltaGError(0.3);
			$s->setM(2.13);
			$s->setPh(7.9);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-122-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-287 W -  V203L");
			$s->setDeltaG(7.41);
			$s->setDeltaGError(0.3);
			$s->setM(2.13);
			$s->setPh(7.1);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-123-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-287 W – wildtype");
			$s->setDeltaG(7.41);
			$s->setDeltaGError(0.3);
			$s->setM(2.2);
			$s->setPh(7.11);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-124-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-287 W – W258F");
			$s->setDeltaG(7.41);
			$s->setDeltaGError(0.3);
			$s->setM(2.2);
			$s->setPh(7.12);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-125-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-287 W – Q111G");
			$s->setDeltaG(9.2);
			$s->setDeltaGError(0.3);
			$s->setM(2.2);
			$s->setPh(7.13);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-126-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-287 W – T164L");
			$s->setDeltaG(7.5);
			$s->setDeltaGError(0.3);
			$s->setM(2.2);
			$s->setPh(7.14);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-127-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Ikba 67-287 W -  V203L");
			$s->setDeltaG(7.41);
			$s->setDeltaGError(0.3);
			$s->setM(2.2);
			$s->setPh(7.15);
			$s->setTemp(10);
			$s->setBuffer("10mM NaHPO4; 50 mM NcaCl; 1mM DDT; 0.5mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("21329696");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-128-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16");
			$s->setVariant("A30G");
			$s->setDeltaG(2.51);
			$s->setDeltaGError(0.19);
			$s->setM(1.86);
			$s->setMError(0.12);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("5uM in 15mM sodium phosphate; 1mM DDT and 100 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("12517341");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-129-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16");
			$s->setVariant("A36G");
			$s->setDeltaG(3.5);
			$s->setDeltaGError(0.15);
			$s->setM(1.39);
			$s->setMError(0.09);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("5uM in 15mM sodium phosphate; 1mM DDT and 100 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("12517341");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-130-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16");
			$s->setVariant("S43A");
			$s->setDeltaG(2.62);
			$s->setDeltaGError(0.24);
			$s->setM(1.52);
			$s->setMError(0.13);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("5uM in 15mM sodium phosphate; 1mM DDT and 100 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("12517341");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-131-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16");
			$s->setVariant("V51A");
			$s->setDeltaG(2.98);
			$s->setDeltaGError(0.12);
			$s->setM(1.53);
			$s->setMError(0.04);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("5uM in 15mM sodium phosphate; 1mM DDT and 100 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("12517341");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-132-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16");
			$s->setVariant("M54L");
			$s->setDeltaG(3.27);
			$s->setDeltaGError(0.26);
			$s->setM(1.32);
			$s->setMError(0.17);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("5uM in 15mM sodium phosphate; 1mM DDT and 100 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("12517341");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-133-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16");
			$s->setVariant("A60G");
			$s->setDeltaG(4);
			$s->setDeltaGError(0.2);
			$s->setM(1.52);
			$s->setMError(0.18);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("5uM in 15mM sodium phosphate; 1mM DDT and 100 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("12517341");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-134-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16");
			$s->setVariant("A73G");
			$s->setDeltaG(3.059);
			$s->setDeltaGError(0.14);
			$s->setM(1.53);
			$s->setMError(0.07);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("5uM in 15mM sodium phosphate; 1mM DDT and 100 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("12517341");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-135-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16");
			$s->setVariant("A76G");
			$s->setDeltaG(2.42);
			$s->setDeltaGError(0.46);
			$s->setM(1.65);
			$s->setMError(0.28);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("5uM in 15mM sodium phosphate; 1mM DDT and 100 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("12517341");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-136-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16");
			$s->setVariant("A86G");
			$s->setDeltaG(3.94);
			$s->setDeltaGError(0.18);
			$s->setM(1.76);
			$s->setMError(0.17);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("5uM in 15mM sodium phosphate; 1mM DDT and 100 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("12517341");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-137-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16");
			$s->setVariant("V95A");
			$s->setDeltaG(3.18);
			$s->setDeltaGError(0.17);
			$s->setM(1.51);
			$s->setMError(0.1);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("5uM in 15mM sodium phosphate; 1mM DDT and 100 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("12517341");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-138-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16");
			$s->setVariant("A102G");
			$s->setDeltaG(3.55);
			$s->setDeltaGError(0.15);
			$s->setM(1.53);
			$s->setMError(0.09);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("5uM in 15mM sodium phosphate; 1mM DDT and 100 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("12517341");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-139-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16");
			$s->setVariant("V106A");
			$s->setDeltaG(3.14);
			$s->setDeltaGError(0.22);
			$s->setM(1.59);
			$s->setMError(0.15);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("5uM in 15mM sodium phosphate; 1mM DDT and 100 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("12517341");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-140-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16");
			$s->setVariant("A109G");
			$s->setDeltaG(2.55);
			$s->setDeltaGError(0.2);
			$s->setM(1.73);
			$s->setMError(0.11);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("5uM in 15mM sodium phosphate; 1mM DDT and 100 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("12517341");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-141-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16");
			$s->setVariant("V115A");
			$s->setDeltaG(2.97);
			$s->setDeltaGError(0.21);
			$s->setM(1.45);
			$s->setMError(0.12);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("5uM in 15mM sodium phosphate; 1mM DDT and 100 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("12517341");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-142-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16");
			$s->setVariant("V126A");
			$s->setDeltaG(2.89);
			$s->setDeltaGError(0.15);
			$s->setM(1.76);
			$s->setMError(0.08);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("5uM in 15mM sodium phosphate; 1mM DDT and 100 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("12517341");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-143-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16");
			$s->setVariant("A127G");
			$s->setDeltaG(3.16);
			$s->setDeltaGError(0.19);
			$s->setM(1.88);
			$s->setMError(0.15);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("5uM in 15mM sodium phosphate; 1mM DDT and 100 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("12517341");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-144-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16");
			$s->setVariant("A133G");
			$s->setDeltaG(2.99);
			$s->setDeltaGError(0.23);
			$s->setM(1.72);
			$s->setMError(0.17);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("5uM in 15mM sodium phosphate; 1mM DDT and 100 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("12517341");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-145-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P42771"));
			$s->setDerivedFrom("P16");
			$s->setVariant("A134G");
			$s->setDeltaG(2.43);
			$s->setDeltaGError(0.19);
			$s->setM(1.53);
			$s->setMError(0.09);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("5uM in 15mM sodium phosphate; 1mM DDT and 100 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("12517341");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-146-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5");
			$s->setDeltaG(3.21);
			$s->setDeltaGError(0.09);
			$s->setM(1.78);
			$s->setMError(0.03);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-147-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5(AG1)");
			$s->setDeltaG(3.06);
			$s->setDeltaGError(0.06);
			$s->setM(1.83);
			$s->setMError(0.02);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-148-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C1");
			$s->setDeltaG(7.31);
			$s->setDeltaGError(0.17);
			$s->setM(1.98);
			$s->setMError(0.1);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-149-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C1(AG1)");
			$s->setDeltaG(8.21);
			$s->setDeltaGError(0.06);
			$s->setM(2.25);
			$s->setMError(0.01);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-150-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C1(AG2)");
			$s->setDeltaG(3.72);
			$s->setDeltaGError(0.09);
			$s->setM(1.77);
			$s->setMError(0.04);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-151-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C1(AG3)");
			$s->setDeltaG(3.61);
			$s->setDeltaGError(0.13);
			$s->setM(1.84);
			$s->setMError(0.03);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-152-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C1(AG4)");
			$s->setDeltaG(5.52);
			$s->setDeltaGError(0.04);
			$s->setM(2.32);
			$s->setMError(0.01);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-153-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C1(AG5)");
			$s->setDeltaG(5.71);
			$s->setDeltaGError(0.09);
			$s->setM(2.22);
			$s->setMError(0.03);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-154-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C1(AGC1)");
			$s->setDeltaG(5.68);
			$s->setDeltaGError(0.06);
			$s->setM(2.18);
			$s->setMError(0.01);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-155-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C2");
			$s->setDeltaG(13.02);
			$s->setDeltaGError(0.03);
			$s->setM(2.28);
			$s->setMError(0.01);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-156-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C2(AG1)");
			$s->setDeltaG(12.8);
			$s->setDeltaGError(0.12);
			$s->setM(2.21);
			$s->setMError(0.02);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-157-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C2(AG4)");
			$s->setDeltaG(10.1);
			$s->setDeltaGError(0.05);
			$s->setM(2.14);
			$s->setMError(0.01);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-158-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C2(AG5)");
			$s->setDeltaG(11.9);
			$s->setDeltaGError(0.07);
			$s->setM(2.44);
			$s->setMError(0.02);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-159-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C2(AGC1)");
			$s->setDeltaG(11.8);
			$s->setDeltaGError(0.08);
			$s->setM(2.45);
			$s->setMError(0.02);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-160-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C2(AGC2)");
			$s->setDeltaG(11.7);
			$s->setDeltaGError(0.04);
			$s->setM(2.5);
			$s->setMError(0.01);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-161-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5");
			$s->setDeltaG(3.29);
			$s->setDeltaGError(0.03);
			$s->setM(1.84);
			$s->setMError(0.01);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-162-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5(AG1)");
			$s->setDeltaG(3.17);
			$s->setDeltaGError(0.13);
			$s->setM(1.89);
			$s->setMError(0.05);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-163-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C1");
			$s->setDeltaG(7.5);
			$s->setDeltaGError(0.09);
			$s->setM(2.05);
			$s->setMError(0.03);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-164-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C1(AG1)");
			$s->setDeltaG(8.16);
			$s->setDeltaGError(0.24);
			$s->setM(2.22);
			$s->setMError(0.07);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-165-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C1(AG2)");
			$s->setDeltaG(3.88);
			$s->setDeltaGError(0.09);
			$s->setM(1.85);
			$s->setMError(0.05);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-166-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C1(AG3)");
			$s->setDeltaG(4);
			$s->setDeltaGError(0.16);
			$s->setM(2.01);
			$s->setMError(0.07);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-167-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C1(AG4)");
			$s->setDeltaG(5.69);
			$s->setDeltaGError(0.11);
			$s->setM(2.41);
			$s->setMError(0.4);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-168-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C1(AG5)");
			$s->setDeltaG(5.77);
			$s->setDeltaGError(0.07);
			$s->setM(2.26);
			$s->setMError(0.02);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-169-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C1(AGC1)");
			$s->setDeltaG(5.66);
			$s->setDeltaGError(0.08);
			$s->setM(2.17);
			$s->setMError(0.02);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-170-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C2");
			$s->setDeltaG(13.25);
			$s->setDeltaGError(0.4);
			$s->setM(2.3);
			$s->setMError(0.07);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-171-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C2(AG1)");
			$s->setDeltaG(12.62);
			$s->setDeltaGError(0.09);
			$s->setM(2.17);
			$s->setMError(0.01);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-172-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C2(AG2)");
			$s->setDeltaG(8.98);
			$s->setM(1.78);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-173-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C2(AG3)");
			$s->setDeltaG(8.12);
			$s->setDeltaGError(0.22);
			$s->setM(1.64);
			$s->setMError(0.04);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-174-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C2(AG4)");
			$s->setDeltaG(9.59);
			$s->setDeltaGError(0.1);
			$s->setM(2.06);
			$s->setMError(0.03);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-175-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C2(AG5)");
			$s->setDeltaG(11.46);
			$s->setDeltaGError(0.28);
			$s->setM(2.35);
			$s->setMError(0.05);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-176-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C2(AGC1)");
			$s->setDeltaG(11.65);
			$s->setDeltaGError(0.13);
			$s->setM(2.41);
			$s->setMError(0.03);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-177-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-5C2(AGC2)");
			$s->setDeltaG(11.61);
			$s->setDeltaGError(0.14);
			$s->setM(2.48);
			$s->setMError(0.03);
			$s->setPh(8);
			$s->setTemp(20);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("18396879");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-178-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA1");
			$s->setDeltaG(8.17);
			$s->setDeltaGError(0.09);
			$s->setPh(8);
			$s->setTemp(14.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-179-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA3");
			$s->setDeltaG(7.76);
			$s->setDeltaGError(0.06);
			$s->setPh(8);
			$s->setTemp(14.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-180-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA4");
			$s->setDeltaG(7.75);
			$s->setDeltaGError(0.06);
			$s->setPh(8);
			$s->setTemp(14.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-181-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA6");
			$s->setDeltaG(7.04);
			$s->setDeltaGError(0.03);
			$s->setPh(8);
			$s->setTemp(14.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-182-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA7");
			$s->setDeltaG(6.52);
			$s->setDeltaGError(0.05);
			$s->setPh(8);
			$s->setTemp(14.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-183-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("SP2");
			$s->setDeltaG(4.78);
			$s->setDeltaGError(0.04);
			$s->setPh(8);
			$s->setTemp(14.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-184-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("SP2AP5");
			$s->setDeltaG(8.38);
			$s->setDeltaGError(0.03);
			$s->setPh(8);
			$s->setTemp(14.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-185-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA134");
			$s->setDeltaG(6.95);
			$s->setDeltaGError(0.06);
			$s->setPh(8);
			$s->setTemp(14.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-186-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA1346");
			$s->setDeltaG(6.22);
			$s->setDeltaGError(0.01);
			$s->setPh(8);
			$s->setTemp(14.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-187-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA13467");
			$s->setDeltaG(4.15);
			$s->setDeltaGError(0.09);
			$s->setPh(8);
			$s->setTemp(14.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-188-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-7 - wildtype");
			$s->setDeltaG(8.24);
			$s->setDeltaGError(0.05);
			$s->setPh(8);
			$s->setTemp(14.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-189-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA1");
			$s->setDeltaG(8.11);
			$s->setDeltaGError(0.09);
			$s->setPh(8);
			$s->setTemp(16.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-190-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA3");
			$s->setDeltaG(7.62);
			$s->setDeltaGError(0.03);
			$s->setPh(8);
			$s->setTemp(16.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-191-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA4");
			$s->setDeltaG(7.49);
			$s->setDeltaGError(0.09);
			$s->setPh(8);
			$s->setTemp(16.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-192-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA6");
			$s->setDeltaG(6.8);
			$s->setDeltaGError(0.05);
			$s->setPh(8);
			$s->setTemp(16.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-193-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA7");
			$s->setDeltaG(6.3);
			$s->setDeltaGError(0.04);
			$s->setPh(8);
			$s->setTemp(16.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-194-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("SP2");
			$s->setDeltaG(4.66);
			$s->setDeltaGError(0.01);
			$s->setPh(8);
			$s->setTemp(16.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-195-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("SP2AP5");
			$s->setDeltaG(8.18);
			$s->setDeltaGError(0.04);
			$s->setPh(8);
			$s->setTemp(16.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-196-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA134");
			$s->setDeltaG(6.76);
			$s->setDeltaGError(0.03);
			$s->setPh(8);
			$s->setTemp(16.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-197-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA1346");
			$s->setDeltaG(5.94);
			$s->setDeltaGError(0.02);
			$s->setPh(8);
			$s->setTemp(16.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-198-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA13467");
			$s->setDeltaG(3.93);
			$s->setDeltaGError(0.09);
			$s->setPh(8);
			$s->setTemp(16.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-199-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-7 - wildtype");
			$s->setDeltaG(8.09);
			$s->setDeltaGError(0.07);
			$s->setPh(8);
			$s->setTemp(16.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-200-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA1");
			$s->setDeltaG(7.82);
			$s->setDeltaGError(0.06);
			$s->setPh(8);
			$s->setTemp(18.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-201-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA3");
			$s->setDeltaG(7.32);
			$s->setDeltaGError(0.01);
			$s->setPh(8);
			$s->setTemp(18.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-202-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA4");
			$s->setDeltaG(7.25);
			$s->setDeltaGError(0.06);
			$s->setPh(8);
			$s->setTemp(18.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-203-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA6");
			$s->setDeltaG(6.56);
			$s->setDeltaGError(0.01);
			$s->setPh(8);
			$s->setTemp(18.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-204-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA7");
			$s->setDeltaG(6.06);
			$s->setDeltaGError(0.05);
			$s->setPh(8);
			$s->setTemp(18.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-205-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("SP2");
			$s->setDeltaG(4.42);
			$s->setDeltaGError(0.03);
			$s->setPh(8);
			$s->setTemp(18.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-206-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("SP2AP5");
			$s->setDeltaG(7.91);
			$s->setDeltaGError(0.02);
			$s->setPh(8);
			$s->setTemp(18.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-207-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA134");
			$s->setDeltaG(6.46);
			$s->setDeltaGError(0.07);
			$s->setPh(8);
			$s->setTemp(18.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-208-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA1346");
			$s->setDeltaG(5.6);
			$s->setDeltaGError(0.03);
			$s->setPh(8);
			$s->setTemp(18.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-209-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA13467");
			$s->setDeltaG(3.61);
			$s->setDeltaGError(0.05);
			$s->setPh(8);
			$s->setTemp(18.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-210-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-7 - wildtype");
			$s->setDeltaG(7.82);
			$s->setDeltaGError(0.05);
			$s->setPh(8);
			$s->setTemp(18.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-211-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA1");
			$s->setDeltaG(7.82);
			$s->setDeltaGError(0.06);
			$s->setPh(8);
			$s->setTemp(20.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-212-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA3");
			$s->setDeltaG(6.92);
			$s->setDeltaGError(0.03);
			$s->setPh(8);
			$s->setTemp(20.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-213-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA4");
			$s->setDeltaG(6.9);
			$s->setDeltaGError(0.04);
			$s->setPh(8);
			$s->setTemp(20.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-214-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA6");
			$s->setDeltaG(6.34);
			$s->setDeltaGError(0.03);
			$s->setPh(8);
			$s->setTemp(20.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-215-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA7");
			$s->setDeltaG(5.83);
			$s->setDeltaGError(0.04);
			$s->setPh(8);
			$s->setTemp(20.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-216-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("SP2");
			$s->setDeltaG(4.08);
			$s->setDeltaGError(0.03);
			$s->setPh(8);
			$s->setTemp(20.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-217-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("SP2AP5");
			$s->setDeltaG(7.62);
			$s->setDeltaGError(0.03);
			$s->setPh(8);
			$s->setTemp(20.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-218-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA134");
			$s->setDeltaG(6.12);
			$s->setDeltaGError(0.03);
			$s->setPh(8);
			$s->setTemp(20.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-219-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA1346");
			$s->setDeltaG(5.18);
			$s->setDeltaGError(0.03);
			$s->setPh(8);
			$s->setTemp(20.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-220-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA13467");
			$s->setDeltaG(3.15);
			$s->setDeltaGError(0.1);
			$s->setPh(8);
			$s->setTemp(20.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-221-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-7 - wildtype");
			$s->setDeltaG(7.52);
			$s->setDeltaGError(0.04);
			$s->setPh(8);
			$s->setTemp(20.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-222-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA1");
			$s->setDeltaG(7.34);
			$s->setDeltaGError(0.03);
			$s->setPh(8);
			$s->setTemp(22.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-223-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA3");
			$s->setDeltaG(6.6);
			$s->setDeltaGError(0.02);
			$s->setPh(8);
			$s->setTemp(22.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-224-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA4");
			$s->setDeltaG(6.6);
			$s->setDeltaGError(0.09);
			$s->setPh(8);
			$s->setTemp(22.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-225-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA6");
			$s->setDeltaG(5.96);
			$s->setDeltaGError(0.03);
			$s->setPh(8);
			$s->setTemp(22.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-226-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA7");
			$s->setDeltaG(5.43);
			$s->setDeltaGError(0.02);
			$s->setPh(8);
			$s->setTemp(22.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-227-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("SP2");
			$s->setDeltaG(3.82);
			$s->setDeltaGError(0.02);
			$s->setPh(8);
			$s->setTemp(22.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-228-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("SP2AP5");
			$s->setDeltaG(7.25);
			$s->setDeltaGError(0.02);
			$s->setPh(8);
			$s->setTemp(22.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-229-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA134");
			$s->setDeltaG(7.73);
			$s->setDeltaGError(0.06);
			$s->setPh(8);
			$s->setTemp(22.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-230-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA1346");
			$s->setDeltaG(4.72);
			$s->setDeltaGError(0.03);
			$s->setPh(8);
			$s->setTemp(22.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-231-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("PA13467");
			$s->setDeltaG(2.74);
			$s->setDeltaGError(0.1);
			$s->setPh(8);
			$s->setTemp(22.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-232-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P07207"));
			$s->setDerivedFrom("Notch");
			$s->setVariant("Nank1-7 - wildtype");
			$s->setDeltaG(7.16);
			$s->setDeltaGError(0.02);
			$s->setPh(8);
			$s->setTemp(22.15);
			$s->setBuffer("25mM Tris-HCl; 150 mM NaCl");
			$s->setDenaturant("Urea");
			$s->setPmid("16131666");
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-233-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("Q978J0"));
			$s->setDerivedFrom("TV1425");
			$s->setVariant("wildtype");
			$s->setDeltaG(12.57);
			$s->setDeltaGError(0.43);
			$s->setM(5.78);
			$s->setMError(0.31);
			$s->setPh(8);
			$s->setTemp(15);
			$s->setBuffer("0.1 mM TCEP");
			$s->setDenaturant("GdmCl");
			$s->setTm(79);
			$s->setPmid("18305166");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-234-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_E3_5"));
			$s->setDerivedFrom("E2_5");
			$s->setVariant("wildtype");
			$s->setDeltaG(11.4);
			$s->setDeltaGError(0.7);
			$s->setM(3.29);
			$s->setMError(0.19);
			$s->setPh(7.4);
			$s->setTemp(23);
			$s->setBuffer("50mN Tris-HCL; 150 mM NaCl");
			$s->setDenaturant("GdmCl");
			$s->setTm(70);
			$s->setPmid("12566564");
			$s->setNStates(2);
			$s->setTypeArq("Darpin");
			$manager->persist($s);
	
			//-235-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_E3_5"));
			$s->setDerivedFrom("E3_5");
			$s->setVariant("wildtype");
			$s->setDeltaG(14.84);
			$s->setDeltaGError(1.98);
			$s->setM(3);
			$s->setMError(0.37);
			$s->setPh(7.4);
			$s->setTemp(23);
			$s->setBuffer("50mN Tris-HCL; 150 mM NaCl");
			$s->setDenaturant("GdmCl");
			$s->setTm(66);
			$s->setPmid("12566564");
			$s->setNStates(2);
			$s->setTypeArq("Darpin");
			$manager->persist($s);
	
			//-236-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_E3_19"));
			$s->setDerivedFrom("E3_19");
			$s->setVariant("wildtype");
			$s->setDeltaG(9.59);
			$s->setDeltaGError(0.51);
			$s->setM(3.33);
			$s->setMError(0.17);
			$s->setPh(7.4);
			$s->setTemp(23);
			$s->setBuffer("50mN Tris-HCL; 150 mM NaCl");
			$s->setDenaturant("GdmCl");
			$s->setPmid("12566564");
			$s->setNStates(2);
			$s->setTypeArq("Darpin");
			$manager->persist($s);
	
			//-237-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_4ANK"));
			$s->setDerivedFrom("4ANK");
			$s->setVariant("wildtype");
			$s->setDeltaG(10.1);
			$s->setDeltaGError(0.4);
			$s->setM(2.7);
			$s->setMError(0.1);
			$s->setPh(4.25);
			$s->setTemp(20);
			$s->setBuffer("50 mM NaCl; 1mM EDTA; 10mM succinate");
			$s->setDenaturant("GdmCl");
			$s->setPmid("14600203");
			$s->setNStates(2);
			$s->setTypeArq("Darpin");
			$manager->persist($s);
	
			//-238-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_4ANK"));
			$s->setDerivedFrom("4ANK");
			$s->setVariant("4ANK-TALR");
			$s->setDeltaG(4.47);
			$s->setDeltaGError(0.31);
			$s->setM(2.23);
			$s->setMError(0.15);
			$s->setPh(4);
			$s->setTemp(20);
			$s->setBuffer("500 mM NaCl; 1mM EDTA; 10mM succinate");
			$s->setDenaturant("GdmCl");
			$s->setPmid("14600203");
			$s->setNStates(2);
			$s->setTypeArq("Darpin");
			$manager->persist($s);
	
			//-239-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_4ANK"));
			$s->setDerivedFrom("4ANK");
			$s->setVariant("4ANK-TALR");
			$s->setDeltaG(7.62);
			$s->setDeltaGError(0.63);
			$s->setM(1.94);
			$s->setMError(0.16);
			$s->setPh(5);
			$s->setTemp(20);
			$s->setBuffer("500 mM NaCl; 1mM EDTA; 10mM succinate");
			$s->setDenaturant("GdmCl");
			$s->setPmid("14600203");
			$s->setNStates(2);
			$s->setTypeArq("Darpin");
			$manager->persist($s);
	
			//-240-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_4ANK"));
			$s->setDerivedFrom("4ANK");
			$s->setVariant("4ANK-TALR");
			$s->setDeltaG(8.57);
			$s->setDeltaGError(0.8);
			$s->setM(1.69);
			$s->setMError(0.16);
			$s->setPh(6);
			$s->setTemp(20);
			$s->setBuffer("500 mM NaCl; 1mM EDTA; 10mM phosphate");
			$s->setDenaturant("GdmCl");
			$s->setPmid("14600203");
			$s->setNStates(2);
			$s->setTypeArq("Darpin");
			$manager->persist($s);
	
			//-241-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_4ANK"));
			$s->setDerivedFrom("4ANK");
			$s->setVariant("4ANK-TALR");
			$s->setDeltaG(12.26);
			$s->setDeltaGError(0.82);
			$s->setM(1.77);
			$s->setMError(0.12);
			$s->setPh(7);
			$s->setTemp(20);
			$s->setBuffer("500 mM NaCl; 1mM EDTA; 10mM phosphate");
			$s->setDenaturant("GdmCl");
			$s->setPmid("14600203");
			$s->setNStates(2);
			$s->setTypeArq("Darpin");
			$manager->persist($s);
	
			//-242-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("DARPIN_4ANK"));
			$s->setDerivedFrom("4ANK");
			$s->setVariant("4ANK-TALR");
			$s->setDeltaG(0.81);
			$s->setDeltaGError(0.51);
			$s->setM(1.25);
			$s->setMError(0.17);
			$s->setPh(7);
			$s->setTemp(20);
			$s->setBuffer("500 mM Na2SO4; 1mM EDTA; 10mM phosphate");
			$s->setDenaturant("GdmCl");
			$s->setPmid("14600203");
			$s->setNStates(2);
			$s->setTypeArq("Darpin");
			$manager->persist($s);
	
			//-243-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("wildtype (67-287)");
			$s->setDeltaG(6.8);
			$s->setDeltaGError(0.5);
			$s->setM(1.9);
			$s->setMError(0.2);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("25mM Tris-HCl; 50 mM NaCl; 1 mM DTT; 0.5 mM EDTA");
			$s->setDenaturant("Urea");
			$s->setTm(45.3);
			$s->setPmid("17174335");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-244-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Q111G");
			$s->setDeltaG(9.1);
			$s->setDeltaGError(0.8);
			$s->setM(2);
			$s->setMError(0.2);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("25mM Tris-HCl; 50 mM NaCl; 1 mM DTT; 0.5 mM EDTA");
			$s->setDenaturant("Urea");
			$s->setTm(50.1);
			$s->setPmid("17174335");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-245-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("A133W");
			$s->setDeltaG(3.7);
			$s->setDeltaGError(0.4);
			$s->setM(1.3);
			$s->setMError(0.1);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("25mM Tris-HCl; 50 mM NaCl; 1 mM DTT; 0.5 mM EDTA");
			$s->setDenaturant("Urea");
			$s->setTm(36.9);
			$s->setPmid("17174335");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-246-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("A133W");
			$s->setDeltaG(3.5);
			$s->setDeltaGError(0.2);
			$s->setM(1.2);
			$s->setMError(0.07);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("25mM Tris-HCl; 50 mM NaCl; 1 mM DTT; 0.5 mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("17174335");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-247-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("C186P");
			$s->setDeltaG(8.9);
			$s->setDeltaGError(1.1);
			$s->setM(2.4);
			$s->setMError(0.3);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("25mM Tris-HCl; 50 mM NaCl; 1 mM DTT; 0.5 mM EDTA");
			$s->setDenaturant("Urea");
			$s->setTm(49.8);
			$s->setPmid("17174335");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-248-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("L205W");
			$s->setDeltaG(3.1);
			$s->setDeltaGError(1.03);
			$s->setM(1.5);
			$s->setMError(0.6);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("25mM Tris-HCl; 50 mM NaCl; 1 mM DTT; 0.5 mM EDTA");
			$s->setDenaturant("Urea");
			$s->setTm(38.8);
			$s->setPmid("17174335");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-249-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("A220P");
			$s->setDeltaG(7);
			$s->setDeltaGError(0.6);
			$s->setM(2);
			$s->setMError(0.2);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("25mM Tris-HCl; 50 mM NaCl; 1 mM DTT; 0.5 mM EDTA");
			$s->setDenaturant("Urea");
			$s->setTm(46.8);
			$s->setPmid("17174335");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-250-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("C239W");
			$s->setDeltaG(5.6);
			$s->setDeltaGError(0.8);
			$s->setM(1.8);
			$s->setMError(0.3);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("25mM Tris-HCl; 50 mM NaCl; 1 mM DTT; 0.5 mM EDTA");
			$s->setDenaturant("Urea");
			$s->setTm(42.8);
			$s->setPmid("17174335");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-251-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("C186P-A220P");
			$s->setDeltaG(8.3);
			$s->setDeltaGError(0.8);
			$s->setM(2.2);
			$s->setMError(0.2);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("25mM Tris-HCl; 50 mM NaCl; 1 mM DTT; 0.5 mM EDTA");
			$s->setDenaturant("Urea");
			$s->setTm(51.9);
			$s->setPmid("17174335");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-252-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("C186P-A220P-A133W");
			$s->setDeltaG(5.7);
			$s->setDeltaGError(0.7);
			$s->setM(1.7);
			$s->setMError(0.2);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("25mM Tris-HCl; 50 mM NaCl; 1 mM DTT; 0.5 mM EDTA");
			$s->setDenaturant("Urea");
			$s->setTm(43.2);
			$s->setPmid("17174335");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-253-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("C186P-A220P-A133W");
			$s->setDeltaG(5.7);
			$s->setDeltaGError(0.1);
			$s->setM(1.71);
			$s->setMError(0.03);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("25mM Tris-HCl; 50 mM NaCl; 1 mM DTT; 0.5 mM EDTA");
			$s->setDenaturant("Urea");
			$s->setPmid("17174335");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-254-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("C186P-A220P-Q111G");
			$s->setDeltaG(11.3);
			$s->setDeltaGError(1.4);
			$s->setM(2.3);
			$s->setMError(0.3);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("25mM Tris-HCl; 50 mM NaCl; 1 mM DTT; 0.5 mM EDTA");
			$s->setDenaturant("Urea");
			$s->setTm(56.8);
			$s->setPmid("17174335");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-255-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("wildtype (67-206)");
			$s->setDeltaG(6.7);
			$s->setDeltaGError(0.6);
			$s->setM(2.1);
			$s->setMError(0.2);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("25mM Tris-HCl; 50 mM NaCl; 1 mM DTT; 0.5 mM EDTA");
			$s->setDenaturant("Urea");
			$s->setTm(45.1);
			$s->setPmid("17174335");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-256-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("wildtype (67-287)");
			$s->setDeltaG(8.1);
			$s->setDeltaGError(0.5);
			$s->setM(3.7);
			$s->setMError(0.3);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("25mM Tris-HCl; 50 mM NaCl; 1 mM DTT; 0.5 mM EDTA");
			$s->setDenaturant("GdmCl");
			$s->setTm(45.3);
			$s->setPmid("17174335");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-257-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("Q111G");
			$s->setDeltaG(12.2);
			$s->setDeltaGError(0.9);
			$s->setM(4.6);
			$s->setMError(0.3);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("25mM Tris-HCl; 50 mM NaCl; 1 mM DTT; 0.5 mM EDTA");
			$s->setDenaturant("GdmCl");
			$s->setTm(50.1);
			$s->setPmid("17174335");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-258-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("C186P");
			$s->setDeltaG(9.7);
			$s->setDeltaGError(0.8);
			$s->setM(4.2);
			$s->setMError(0.3);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("25mM Tris-HCl; 50 mM NaCl; 1 mM DTT; 0.5 mM EDTA");
			$s->setDenaturant("GdmCl");
			$s->setTm(49.8);
			$s->setPmid("17174335");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-259-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("A220P");
			$s->setDeltaG(8.6);
			$s->setDeltaGError(0.5);
			$s->setM(4);
			$s->setMError(0.2);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("25mM Tris-HCl; 50 mM NaCl; 1 mM DTT; 0.5 mM EDTA");
			$s->setDenaturant("GdmCl");
			$s->setTm(46.8);
			$s->setPmid("17174335");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-260-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("C186P-A220P");
			$s->setDeltaG(10.9);
			$s->setDeltaGError(0.7);
			$s->setM(4.8);
			$s->setMError(0.3);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("25mM Tris-HCl; 50 mM NaCl; 1 mM DTT; 0.5 mM EDTA");
			$s->setDenaturant("GdmCl");
			$s->setTm(51.9);
			$s->setPmid("17174335");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-261-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("C186P-A220P-A133W");
			$s->setDeltaG(7.41);
			$s->setDeltaGError(0.7);
			$s->setM(3.6);
			$s->setMError(0.3);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("25mM Tris-HCl; 50 mM NaCl; 1 mM DTT; 0.5 mM EDTA");
			$s->setDenaturant("GdmCl");
			$s->setTm(43.2);
			$s->setPmid("17174335");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-262-
			$s = new Experiment();
			$s->setTechnique("Fluor");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("C186P-A220P-A133W");
			$s->setDeltaG(7.1);
			$s->setDeltaGError(0.5);
			$s->setM(3.4);
			$s->setMError(0.2);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("25mM Tris-HCl; 50 mM NaCl; 1 mM DTT; 0.5 mM EDTA");
			$s->setDenaturant("GdmCl");
			$s->setPmid("17174335");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-263-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("C186P-A220P-Q111G");
			$s->setDeltaG(11.1);
			$s->setDeltaGError(0.4);
			$s->setM(4.2);
			$s->setMError(0.2);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("25mM Tris-HCl; 50 mM NaCl; 1 mM DTT; 0.5 mM EDTA");
			$s->setDenaturant("GdmCl");
			$s->setTm(56.8);
			$s->setPmid("17174335");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			//-264-
			$s = new Experiment();
			$s->setTechnique("CD");
			$s->setCualCuant("Quant");
			$s->setEquilCinet("Equilibrium");
			$s->setProtein($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("P25963"));
			$s->setDerivedFrom("IkBalpha");
			$s->setVariant("wildtype (67-206)");
			$s->setDeltaG(7.7);
			$s->setDeltaGError(0.3);
			$s->setM(4);
			$s->setMError(0.1);
			$s->setPh(7.5);
			$s->setTemp(25);
			$s->setBuffer("25mM Tris-HCl; 50 mM NaCl; 1 mM DTT; 0.5 mM EDTA");
			$s->setDenaturant("GdmCl");
			$s->setTm(45.1);
			$s->setPmid("17174335");
			$s->setNStates(3);
			$s->setTypeArq("Ank");
			$manager->persist($s);
	
			$manager->flush();

		}

		public function getOrder() {
			return 2;
		}
	}