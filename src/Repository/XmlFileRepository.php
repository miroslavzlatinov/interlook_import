<?php

namespace App\Repository;

use App\Entity\XmlFile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class XmlFileRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, XmlFile::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('x')
            ->where('x.something = :value')->setParameter('value', $value)
            ->orderBy('x.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
