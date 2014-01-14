<?php

namespace LFP\StructuralAnks\MainBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;


class ResidueRepository extends EntityRepository {
    /**
     * Find Residues by pdbId, chain and repNum
     * @param string $pdb pdbId
     * @param string $chain chain letter of a structure
     * @param string $uniprotPos repNum of StructuralRepeat
     */
    public function findByPdbChainUniprotpos($pdb, $chain, $uniprotPos) {
        $qb = $this->getEntityManager()->getRepository('LFPStructuralAnksMainBundle:Residue')->createQueryBuilder('r')
            ->leftjoin('r.chain','c')
            ->leftjoin('c.structure','s')
            ->andWhere('c.chain = :chain')
            ->setParameter('chain', $chain)
            ->andWhere('s.pdbId = :pdbId')
            ->setParameter('pdbId', $pdb)
            ->andWhere('r.uniprotPos = :uniprotPos')
            ->setParameter('uniprotPos', $unipritPos)
            ;
        return $qb->getQuery()->getSingleResult();
    }
}
