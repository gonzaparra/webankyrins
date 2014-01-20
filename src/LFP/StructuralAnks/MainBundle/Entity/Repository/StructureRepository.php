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
    /**
     * Funcion ql
     * @param nada
     * @return lista de pdbs ordenados
     */
    public function getStructuresByFilter($options){
        
        $qb = $this->getEntityManager()->getRepository('LFPStructuralAnksMainBundle:Structure')->createQueryBuilder('s');
        if($options['pdbCode']){
            $qb->andWhere('s.pdbId LIKE :pdbCode');
            $qb->setParameter('pdbCode','%'.$options['pdbCode'].'%');
        }
        //ToDo: Recheck these options!!
//        if($options['type']){
//            if($options['type'] == 0){
//                $qb->leftJoin('s.chains', 'c');
//                $qb->andWhere('c.observations LIKE :wa');
//                $qb->setParameter('wa','%Darpin%');
//            }
//            if($options['type'] == 1){
//                $qb->leftJoin('s.chains', 'c');
//                $qb->andWhere('c.subGroup LIKE :wa');
//                $qb->setParameter('wa','%Ank%');
//            }
//        }
        if($options['operator']){
            if($options['nchains']){
                $qb->andWhere('s.nChains '.$options['operator'].' '.$options['nchains']);
//                $qb->having('(SELECT count(c.id)
//                                FROM LFPStructuralAnks:MainBundle:Chain c
//                                WHERE c.structure = s.id) :operator :nchains');
//                $qb->leftjoin('s.chains','c');
//                $qb->having('COUNT(c.id) = 4');
//                $qb->setParameter(1, $options['operator']);
//                $qb->setParameter('nchains', $options['nchains']);      
            }
        }
        $qb->orderBy('s.pdbId', 'ASC');   
        return $qb->getQuery()->getResult();
        
        
//        return $this->findBy(array(),array('pdbId'=>'ASC'));
        
    }
    
   
    
    
}
