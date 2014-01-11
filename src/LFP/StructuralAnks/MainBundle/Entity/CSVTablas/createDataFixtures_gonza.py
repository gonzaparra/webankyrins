"""Programa para crear los LoadFixtures de webankyrins"""

def newStructure(numero,linea):
	'''Toma una linea del CSV y genera una linea del fixture con los datos
	de la linea'''
	
	texto = """
			//-%s-
			$s = new Structure();"""%numero
	
	if(linea[1].strip() and linea[1].strip() != "NULL"):
		texto += """
			$s->setPdbId("%s");"""%linea[1].strip()
	if(linea[2].strip() and linea[2].strip() != "NULL"):
		texto += """
			$s->setKeywords("%s");"""%linea[2].strip()
	if(linea[3].strip() and linea[3].strip() != "NULL"):
		texto += """
			$s->setTitle("%s");"""%linea[3].strip()
	if(linea[4].strip() and linea[4].strip() != "NULL"):
		texto += """
			$s->setPubDate(new \DateTime("%s"));"""%linea[4].strip()
	if(linea[5].strip() and linea[5].strip() != "NULL"):
		texto += """
			$s->setMethod("%s");"""%linea[5].strip()
	if(linea[6].strip() and linea[6].strip() != "NULL"):
		texto += """
			$s->setResolution(%s);"""%linea[6].strip()
	if(linea[7].strip() and linea[7].strip() != "NULL"):
		texto += """
			$s->setPublication($doctrine->getRepository('LFPStructuralAnksMainBundle:Publication')->findOneByPubmedId("%s"));"""%linea[7].strip()
	if(linea[8].strip() and linea[8].strip() != "NULL"):
		texto += """
			$s->setNChains(%s);"""%linea[8].strip()
	#~ if(linea[9] != "NULL"):
		#~ texto += """
		#~ 		$s->setOverallFrustration("%s");"""%linea[9]
	if(linea[10].strip() and linea[10].strip() != "NULL"):
		texto += """
			$s->setSubGroup("%s");"""%linea[10].strip()
	if(linea[11].strip() and linea[11].strip() != "NULL"):
		texto += """
			$s->setMainRepeat("%s");"""%linea[11].strip()
	if(linea[12].strip() and linea[12].strip() != "NULL"):
		texto += """
			$s->setBu(%s);"""%linea[12].strip()
	if(linea[13].strip() and linea[13].strip() != "NULL"):
		texto += """
			$s->setBuComp("%s");"""%linea[13].strip()

	texto +="""
			$manager->persist($s);
	"""
	return texto

def createStructureFixtureFile():
	lineas = [i.strip().split(";") for i in open("Structure.csv")]
	lineas=lineas[1:]
	l = [i for i in lineas]		#ahora tenemos una lista donde cada campo es un string! 

	#Almaceno una lista (Idautoincremental, chainID) 
	l2 = [(i+1,j[0]) for i,j in enumerate(l)]

	texto = """<?php

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
			$tableName = $em->getClassMetadata('LFPStructuralAnksMainBundle:Structure')->getTableName();
			$em->getConnection()->exec("
				SET foreign_key_checks = 0;
				TRUNCATE $tableName;
				SET foreign_key_checks = 1;
			");

			// Reset ID column
			$em->getConnection()->exec("ALTER TABLE $tableName AUTO_INCREMENT = 1;");
			$doctrine = $this->container->get('doctrine');
	"""

	for i,j in enumerate(l):
		texto += newStructure(i,j)

	#Agregar las ultimas lineas
	texto += """
			$manager->flush();

		}

		public function getOrder() {
			return 2;
		}
	}"""

	f = open("LoadStructureData.php","w")
	f.write(texto)

def newPublication(numero,linea):
	'''Toma una linea del CSV y genera una linea del fixture con los datos
	de la linea'''
	
	texto = """
			//-%s-
			$s = new Publication();"""%numero
	
	if(linea[0].strip() and linea[0].strip() != "NULL"):
		texto += """
			$s->setPubmedId("%s");"""%linea[0].strip()
	if(linea[1].strip() and linea[1].strip() != "NULL"):
		texto += """
			$s->setAuthors("%s");"""%linea[1].strip()
	if(linea[2].strip() and linea[2].strip() != "NULL"):
		texto += """
			$s->setTitle("%s");"""%linea[2].strip()
	if(linea[3].strip() and linea[3].strip() != "NULL"):
		texto += """
			$s->setJournal("(%s");"""%linea[3].strip()
	if(linea[4].strip() and linea[4].strip() != "NULL"):
		texto += """
			$s->setUrl("%s");"""%linea[4].strip()
	
	texto +="""
			$manager->persist($s);
	"""
	return texto

def createPublicationFixtureFile():
	lineas = [i.strip().split("\t") for i in open("Publication.csv")]
	lineas=lineas[1:]
	l = [i for i in lineas]		#ahora tenemos una lista donde cada campo es un string! 

	texto = """<?php

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

	"""

	for i,j in enumerate(l):
		texto += newPublication(i,j)

	#Agregar las ultimas lineas
	texto += """
		$manager->flush();

		}

		public function getOrder() {
			return 1;
		}
	}"""

	f = open("LoadPublicationData.php","w")
	f.write(texto)


def newProtein(numero,linea):
	'''Toma una linea del CSV y genera una linea del fixture con los datos
	de la linea'''
	
	texto = """
			//-%s-
			$s = new Protein();"""%numero
	
	if(linea[1].strip() and linea[1].strip() != "NULL"):
		texto += """
			$s->setUniprot("%s");"""%linea[1].strip()
	if(linea[2].strip() and linea[2].strip() != "NULL"):
		texto += """
			$s->setEntryName("%s");"""%linea[2].strip()
	if(linea[3].strip() and linea[3].strip() != "NULL"):
		texto += """
			$s->setProteinNames("%s");"""%linea[3].strip()
	if(linea[4].strip() and linea[4].strip() != "NULL"):
		texto += """
			$s->setOrganism("%s");"""%linea[4].strip()
	if(linea[5].strip() and linea[5].strip() != "NULL"):
		texto += """
			$s->setOrganismId(%s);"""%linea[5].strip()
	if(linea[6].strip() and linea[6].strip() != "NULL"):
		texto += """
			$s->setLength(%s);"""%linea[6].strip()
	if(linea[8].strip() and linea[8].strip() != "NULL"):
		texto += """
			$s->setRepType("%s");"""%linea[8].strip()
	if(linea[9].strip() and linea[9].strip() != "NULL"):
		texto += """
			$s->setSubGroup("%s");"""%linea[9].strip()
	
	texto +="""
			$manager->persist($s);
	"""
	return texto

def createProteinFixtureFile():
	lineas = [i.strip().split("\t") for i in open("Protein.csv")]
	lineas=lineas[1:]
	l = [i for i in lineas]		#ahora tenemos una lista donde cada campo es un string! 

	texto = """<?php

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

	"""

	for i,j in enumerate(l):
		texto += newProtein(i,j)

	#Agregar las ultimas lineas
	texto += """
		$manager->flush();

		}

		public function getOrder() {
			return 3;
		}
	}"""

	f = open("LoadProteinData.php","w")
	f.write(texto)

def newExperiment(numero,linea):
	'''Toma una linea del CSV y genera una linea del fixture con los datos
	de la linea'''
	/**
	 * @author Gonza Parra <parra.gonzalo@gmail.com>
	 */

	texto = """
			//-%s-
			$s = new Experiment();"""%numero
	
	if(linea[2].strip() and linea[2].strip() != "NULL"):
		texto += """
			$s->setTechnique("%s");"""%linea[1].strip()
	if(linea[3].strip() and linea[3].strip() != "NULL"):
		texto += """
			$s->setCualCuant("%s");"""%linea[3].strip()
	if(linea[4].strip() and linea[4].strip() != "NULL"):
		texto += """
			$s->setEquilCinet("%s");"""%linea[4].strip()
	if(linea[5].strip() and linea[5].strip() != "NULL"):
		texto += """
			$s->setUniprotRef($doctrine->getRepository('LFPStructuralAnksMainBundle:Protein')->findOneByUniprot("%s"));"""%linea[5].strip()
	if(linea[6].strip() and linea[6].strip() != "NULL"):
		texto += """
			$s->setDerivedFrom("%s");"""%linea[6].strip()
	if(linea[7].strip() and linea[7].strip() != "NULL"):
		texto += """
			$s->setVariant(%s);"""%linea[7].strip()
	if(linea[8].strip() and linea[8].strip() != "NULL"):
		texto += """
			$s->setDeltaG(%f);"""%linea[8].strip()
	if(linea[9].strip() and linea[9].strip() != "NULL"):
		texto += """
			$s->setDeltaGError(%f);"""%linea[9].strip()
	if(linea[10].strip() and linea[10].strip() != "NULL"):
		texto += """
			$s->setM("%f");"""%linea[10].strip()
	if(linea[11].strip() and linea[11].strip() != "NULL"):
		texto += """
			$s->setMError("%f");"""%linea[11].strip()
	if(linea[12].strip() and linea[12].strip() != "NULL"):
		texto += """
			$s->setPh(%f);"""%linea[12].strip()
	if(linea[13].strip() and linea[13].strip() != "NULL"):
		texto += """
			$s->setTemp("%f");"""%linea[13].strip()
        if(linea[14].strip() and linea[14].strip() != "NULL"):
		texto += """
			$s->setBuffer("%s");"""%linea[14].strip()
        if(linea[15].strip() and linea[15].strip() != "NULL"):
		texto += """
			$s->setDenaturant("%s");"""%linea[15].strip()
        if(linea[16].strip() and linea[16].strip() != "NULL"):
		texto += """
			$s->setTm("%f");"""%linea[16].strip()
        if(linea[17].strip() and linea[17].strip() != "NULL"):
		texto += """
			$s->setPmid("%s");"""%linea[17].strip()
        if(linea[18].strip() and linea[18].strip() != "NULL"):
		texto += """
			$s->setNStates("%d");"""%linea[18].strip()
        if(linea[20].strip() and linea[20].strip() != "NULL"):
		texto += """
			$s->setTypeArq("%s");"""%linea[20].strip()

	texto +="""
			$manager->persist($s);
	"""
	return texto

def createExperimentFixtureFile():
	lineas = [i.strip().split(";") for i in open("Experiment.csv")]
	lineas=lineas[1:]
	l = [i for i in lineas]		#ahora tenemos una lista donde cada campo es un string! 

	#Almaceno una lista (Idautoincremental, chainID) 
	l2 = [(i+1,j[0]) for i,j in enumerate(l)]

	texto = """<?php

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
	"""

	for i,j in enumerate(l):
		texto += newExperiment(i,j)

	#Agregar las ultimas lineas
	texto += """
			$manager->flush();

		}

		public function getOrder() {
			return 2;
		}
	}"""

	f = open("LoadExperimentData.php","w")
	f.write(texto)

createPublicationFixtureFile()
createStructureFixtureFile()
createProteinFixtureFile()
createExperimentFixtureFile()
