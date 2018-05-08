<?php

namespace App\Repository;

use App\Entity\LogData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\Criteria;
use Symfony\Bridge\Doctrine\RegistryInterface;

class LogDataRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LogData::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('l')
            ->where('l.something = :value')->setParameter('value', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function findMaxID()
    {
        $query = $this->createQueryBuilder('m')
             ->select('MAX(m.interlook_id)');

             return $query->getQuery()->getResult();
    }

    public function findAllLog()
    {
        $query = $this->createQueryBuilder('l')
            ->select('l.log')
            ->getQuery()->setCacheable(true);
        return $query->getResult();

    }
    public function findLogByDate($date)
    {
        $query = $this->createQueryBuilder('l')
            ->where('l.date > :datevalue')
            ->select('l.log')
            ->setParameter('datevalue',$date)
            ->getQuery();
        return $query->getResult();

    }
    public function findAllLogOneH()
    {
        $query = $this->createQueryBuilder('l')
            ->andWhere('l.hotel_count = :hotelvalue')
            ->select('l.log')
            ->setParameter('hotelvalue',1)
            ->getQuery()->setCacheable(true);
        return $query->getResult();

    }
    public function findLogByDateOneH($date)
    {
        $query = $this->createQueryBuilder('l')
            ->where('l.date > :datevalue')
            ->andWhere('l.hotel_count = :hotelvalue')
            ->select('l.log')
            ->setParameter('datevalue',$date)
            ->setParameter('hotelvalue',1)
            ->getQuery();
        return $query->getResult();

    }

    public function findLogEachDate(){
        $query = $this->createQueryBuilder('l')

            ->select('l.log ,l.date')
            ->orderBy('l.date')
            ->getQuery();
//            ->useQueryCache(true)
//            ->useResultCache(true) ;
        return $query->getResult();
    }
    public function findLogEachDateOneH(){
        $query = $this->createQueryBuilder('l')

            ->select('l.log ,l.date')
            ->andWhere('l.hotel_count = :hotelvalue')
            ->setParameter('hotelvalue',1)
            ->getQuery();
        return $query->getResult();
    }

    public function findDistincUsers()
    {
        $query = $this->createQueryBuilder('l')
             ->select('l.external_user_id')
             ->distinct()

             ->getQuery();
        return $query->getResult();

    }

    public function findLogEachDateByUser($user ,$from ,$to , $single ){


         $query = $this->createQueryBuilder('l')

            ->select('l.log ,l.date');
         if($user == -1) {
             $query->where('l.date between :from and :to');
         }else{
        $query->where('l.external_user_id = :user and l.date between :from and :to')
            ->setParameter('user',$user);

        }
        if($single)
        {
            $query->andWhere('l.hotel_count = 1');
        }
        $query->setParameter('from',$from)
            ->setParameter('to',$to)->orderBy('l.date');

        return $query->getQuery()->getResult();
    }

    public function getLowDate(){
        $query = $this->createQueryBuilder('d')
        ->select('MIN(d.date)')
         ->getQuery();

        return $query->getResult();
    }

    public function countSeacrchesTime($from,$to)
    {

        $sql2 = 'SELECT COALESCE(count,0) as count , date_a as date
FROM
(SELECT  DATE_FORMAT(p.crete_date, \'%m-%d-%Y\') as date_a  from log_data as p GROUP BY date_a )  t2
 LEFT JOIN
    (SELECT  COUNT(d.id) as count , DATE_FORMAT(d.crete_date, \'%m-%d-%Y\') as date_i
from log_data as d
where CONVERT(d.execute_time,INTEGER) between :from and :to  GROUP BY date_i)  t1
on
t1.date_i = t2.date_a
ORDER BY date';

        $conn = $this->getEntityManager()->getConnection();
        $query = $conn->prepare($sql2);
       $query->execute(['from'=>$from,'to'=>$to]);

   return $query->fetchAll();


    }


}
