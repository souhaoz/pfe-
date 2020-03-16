<?php

namespace App\Repository;

use App\Entity\ImageBackgroud;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ImageBackgroud|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImageBackgroud|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImageBackgroud[]    findAll()
 * @method ImageBackgroud[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageBackgroudRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImageBackgroud::class);
    }

    // /**
    //  * @return ImageBackgroud[] Returns an array of ImageBackgroud objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ImageBackgroud
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
