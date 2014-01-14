<?php

namespace LFP\StructuralAnks\MainBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class StructureRepository extends EntityRepository {
    
    /**
     * Funcion ql
     * @param nada
     * @return lista de pdbs ordenados
     */
    public function getSortedStructures(){
        
        return $this->findBy(array(),array('pdbId'=>'ASC'));
        
    }
    
   
    
    
}
