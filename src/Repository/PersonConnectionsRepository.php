<?php

namespace App\Repository;

use App\External\Dogovor\PersonConnections;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class PersonConnectionsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PersonConnections::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('p')
            ->where('p.something = :value')->setParameter('value', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function findByIds($array)
    {
       $query = $this->createQueryBuilder('p')
             ->select('p.partner_id , p.id , p.login')
             ->where('p.id in (:values)')
             ->setParameter('values',$array)
           ->getQuery();
       return $query->getResult();
    }

}
