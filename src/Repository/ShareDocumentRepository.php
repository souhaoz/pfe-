<?php

namespace App\Repository;

use App\Entity\ShareDocument;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ShareDocument|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShareDocument|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShareDocument[]    findAll()
 * @method ShareDocument[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShareDocumentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShareDocument::class);
    }

    // /**
    //  * @return ShareDocument[] Returns an array of ShareDocument objects
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
    public function findOneBySomeField($value): ?ShareDocument
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
