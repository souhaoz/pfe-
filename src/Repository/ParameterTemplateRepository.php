<?php

namespace App\Repository;

use App\Entity\ParameterTemplate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ParameterTemplate|null find($id, $lockMode = null, $lockVersion = null)
 * @method ParameterTemplate|null findOneBy(array $criteria, array $orderBy = null)
 * @method ParameterTemplate[]    findAll()
 * @method ParameterTemplate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParameterTemplateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ParameterTemplate::class);
    }

    // /**
    //  * @return ParameterTemplate[] Returns an array of ParameterTemplate objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ParameterTemplate
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
