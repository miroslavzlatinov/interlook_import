<?php

namespace App\Repository;

use App\Entity\InterlookWebUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class InterlookWebUserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, InterlookWebUser::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('i')
            ->where('i.something = :value')->setParameter('value', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function countP()
    {
        $query = $this->createQueryBuilder('i')
            ->select('count(i.id)')
            ->where('i.id > :value')
            ->setParameter('value',1)
            ->getQuery();
        return $query->getResult();

    }
    public function getNotExsist($array,$type)
    {
        $query = $this->createQueryBuilder('n')
            ->select('n.interlook_id')
            ->where('n.type = :type and n.interlook_id  in (:values)')
        ->setParameter('values',$array)
          ->setParameter('type',$type)
            ->getQuery();

        return $query->getResult();

    }
}
