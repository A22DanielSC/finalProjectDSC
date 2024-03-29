<?php

namespace App\Repository;

use App\Entity\Employees;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Employees>
 *
 * @method Employees|null find($id, $lockMode = null, $lockVersion = null)
 * @method Employees|null findOneBy(array $criteria, array $orderBy = null)
 * @method Employees[]    findAll()
 * @method Employees[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmployeesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Employees::class);
    }
    public function persistEmployee(Employees $employee){
        $this->getEntityManager()->persist($employee);
    }
    public function flushToDatabase(){
        $this->getEntityManager()->flush();
    }
    public function add(Employees $employee){
        $this->persistEmployee($employee);
        $this->flushToDatabase();
    }
    public function findOneByDni($dni): ?Employees
       {
           return $this->createQueryBuilder('e')
               ->andWhere('e.dni = :val')
               ->setParameter('val', $dni)
               ->getQuery()
               ->getOneOrNullResult()
           ;
       }

    //    /**
    //     * @return Employees[] Returns an array of Employees objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('e.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Employees
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
