<?php

namespace LFP\StructuralAnks\MainBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;


class StructuralRepeatRepository extends EntityRepository {
    /**
     * Find Residues by pdbId, chain and repNum
     * @param string $pdb pdbId
     * @param string $chain chain letter of a structure
     * @param string $repnum repNum of StructuralRepeat
     */
    public function findByPdbChainRepnum($pdb, $chain, $repnum) {
        $qb = $this->getEntityManager()->getRepository('LFPStructuralAnksMainBundle:StructuralRepeat')->createQueryBuilder('sr')
            ->leftjoin('sr.chain','c')
            ->leftjoin('c.structure','s')
            ->andWhere('c.chain = :chain')
            ->setParameter('chain', $chain)
            ->andWhere('s.pdbId = :pdbId')
            ->setParameter('pdbId', $pdb)
            ->andWhere('sr.repNum = :repnum')
            ->setParameter('repnum', $repnum)
            ;
        return $qb->getQuery()->getSingleResult();
    }
}
