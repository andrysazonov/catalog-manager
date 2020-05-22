<?php

namespace App\Repository;

use App\Entity\PassportRecord;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PassportRecord|null searchBySeriesAndNumber($series, $lockMode = null, $lockVersion = null)
 * @method PassportRecord|null find($id, $lockMode = null, $lockVersion = null)
 * @method PassportRecord|null findOneBy(array $criteria, array $orderBy = null)
 * @method PassportRecord[]    findAll()
 * @method PassportRecord[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PassportRecordRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PassportRecord::class);
    }

    // /**
    //  * @return PassportRecord[] Returns an array of PassportRecord objects
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
    public function findOneBySomeField($value): ?PassportRecord
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function searchBySeriesAndNumber($series): ?PassportRecord
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.series = :val')
            ->setParameter('val', $series)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
}