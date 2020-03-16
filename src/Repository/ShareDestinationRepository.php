<?php

namespace App\Repository;

use App\Entity\ShareDestination;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ShareDestination|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShareDestination|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShareDestination[]    findAll()
 * @method ShareDestination[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShareDestinationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShareDestination::class);
    }

    // /**
    //  * @return ShareDestination[] Returns an array of ShareDestination objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ShareDestination
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
