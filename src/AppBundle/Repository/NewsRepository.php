<?php

namespace AppBundle\Repository;

/**
 * NewsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NewsRepository extends \Doctrine\ORM\EntityRepository
{
    public function getNewestNewsDesc()
    {
        return $this->createQueryBuilder('n')
            ->orderBy('n.id', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }

    public function getAllNewsDesc()
    {
        return $this->createQueryBuilder('n')
            ->orderBy('n.id', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
