<?php

namespace LFP\StructuralAnks\MainBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class ChainRepository extends EntityRepository {
    
    /**
     * Funcion ql
     * @param nada
     * @return lista de pdbs ordenados
     */
    public function getChainByCode($pdbId,$chainId){
        
        $qb = $this->getEntityManager()->getRepository('LFPStructuralAnksMainBundle:Chain')->createQueryBuilder('c')
              ->join('c.structure','s')  
              ->where('c.chain = :chainId')
              ->andWhere('s.pdbId = :pdbId')
              ->setParameter('pdbId', $pdbId)
              ->setParameter('chainId', $chainId)
                ;
        
        return $qb->getQuery()->getResult();
        
    }
    
   
    
    
}
