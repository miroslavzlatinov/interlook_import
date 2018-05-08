<?php

namespace App\Repository;

use App\External\Dogovor\Partners;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class PartnersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Partners::class);
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
            ->select('p.name , p.id')
            ->where('p.id in (:values)')
            ->setParameter('values',$array)
            ->getQuery();
        return $query->getResult();
    }
}
