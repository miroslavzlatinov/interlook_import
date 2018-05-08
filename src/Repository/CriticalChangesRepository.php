<?php

namespace App\Repository;

use App\External\Dogovor\CriticalChanges;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class CriticalChangesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CriticalChanges::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('c')
            ->where('c.something = :value')->setParameter('value', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
      public function getByDate($date,$text,$computer)
      {

          $query = $this->createQueryBuilder('l')
              ->where('l.date > :datevalue')
              ->andWhere('l.text = :textvalue')
              ->andWhere('l.computer = :computervalue')
              ->setParameter('datevalue',$date)
              ->setParameter('textvalue',$text)
              ->setParameter('computervalue',$computer)
              ->getQuery();
          return $query->execute();

      }
    public function getByDateId($date,$text,$computer,$id)
    {

        $query = $this->createQueryBuilder('l')
            ->where('l.date > :datevalue')
            ->andWhere('l.text = :textvalue')
            ->andWhere('l.computer = :computervalue')
            ->andWhere('l.id >:idvalue')
            ->setParameter('datevalue',$date)
            ->setParameter('textvalue',$text)
            ->setParameter('computervalue',$computer)
            ->setParameter('idvalue',$id)
            ->getQuery();
        return $query->execute();

    }



}
