<?php

namespace App\Repository;

use App\Entity\VehicleDealer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VehicleDealer>
 *
 * @method VehicleDealer|null find($id, $lockMode = null, $lockVersion = null)
 * @method VehicleDealer|null findOneBy(array $criteria, array $orderBy = null)
 * @method VehicleDealer[]    findAll()
 * @method VehicleDealer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VehicleDealerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VehicleDealer::class);
    }

//    /**
//     * @return VehicleDealer[] Returns an array of VehicleDealer objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?VehicleDealer
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
