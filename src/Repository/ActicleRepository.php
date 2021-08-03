<?php

namespace App\Repository;

use App\Entity\Acticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Acticle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Acticle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Acticle[]    findAll()
 * @method Acticle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActicleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Acticle::class);
    }

    // /**
    //  * @return Acticle[] Returns an array of Acticle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Acticle
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
