<?php

namespace App\Repository;

use App\Entity\InterlookWebSearchParners;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class InterlookWebSearchParnersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, InterlookWebSearchParners::class);
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

    public function findMaxID()
    {
        $query = $this->createQueryBuilder('g')
            ->select('MAX(g.interlook_id)')->getQuery();



        return $query->getResult();
    }
    public function findDistincUsers()
    {
        $query = $this->createQueryBuilder('l')
            ->select('l.interlook_user')
            ->distinct()

            ->getQuery();
        return $query->getResult();

    }
    public function findCountByP($date_from , $date_to)
    {

       $roba = 'select DATE_FORMAT(p.crete_date, \'%m-%d-%Y\') as date_a  , u.name as user_a , count(p.id) as count from interlook_web_search_parners p  left join interlook_web_user u on p.interlook_user = u.interlook_id GROUP BY date_a ,user_a
order by date_a , user_a';


        $sub_query = $this->createQueryBuilder('s')
            ->select('DATE_FORMAT(s.date, \'%m-%d-%Y\') as date_a')

            ->getQuery()->getSQL();

                $query = $this->createQueryBuilder('q')
                    ->select('COALESCE(count(q.id),0) as cnt,DATE_FORMAT(q.date, \'%m-%d-%Y\') as date_a,user_name.name'
                        ,'q.interlook_user')

                    ->leftJoin('App\Entity\InterlookWebUser',
                'user_name',\Doctrine\ORM\Query\Expr\Join::WITH,
                'q.interlook_user =user_name.interlook_id')
                    ->where('q.date  between :date_from and :date_to ')
                    ->setParameter('date_from',$date_from)
                    ->setParameter('date_to',$date_to)
                     ->groupBy('date_a','q.interlook_user')
                    ->getQuery();

        return $query->getResult();



    }

}
