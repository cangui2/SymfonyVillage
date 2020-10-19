<?php

namespace App\Repository;

use App\Entity\Utilis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Utilis|null find($id, $lockMode = null, $lockVersion = null)
 * @method Utilis|null findOneBy(array $criteria, array $orderBy = null)
 * @method Utilis[]    findAll()
 * @method Utilis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UtilisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Utilis::class);
    }

    // /**
    //  * @return Utilis[] Returns an array of Utilis objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Utilis
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
