<?php

namespace App\Repository;

use App\Entity\DummyReal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DummyReal|null find($id, $lockMode = null, $lockVersion = null)
 * @method DummyReal|null findOneBy(array $criteria, array $orderBy = null)
 * @method DummyReal[]    findAll()
 * @method DummyReal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DummyRealRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DummyReal::class);
    }

    // /**
    //  * @return DummyReal[] Returns an array of DummyReal objects
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
    public function findOneBySomeField($value): ?DummyReal
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
