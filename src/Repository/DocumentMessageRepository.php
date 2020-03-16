<?php

namespace App\Repository;

use App\Entity\DocumentMessage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DocumentMessage|null find($id, $lockMode = null, $lockVersion = null)
 * @method DocumentMessage|null findOneBy(array $criteria, array $orderBy = null)
 * @method DocumentMessage[]    findAll()
 * @method DocumentMessage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DocumentMessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DocumentMessage::class);
    }

    // /**
    //  * @return DocumentMessage[] Returns an array of DocumentMessage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DocumentMessage
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
