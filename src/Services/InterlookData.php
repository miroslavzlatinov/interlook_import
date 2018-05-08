<?php
/**
 * Created by PhpStorm.
 * User: miroslav
 * Date: 2/19/18
 * Time: 4:34 PM
 */

namespace App\Services;
use Doctrine\ORM\EntityManagerInterface;


class InterlookData
{

   protected $em;
   protected $countainer;
    /**
     * InterlookData constructor.
     */
    public function __construct(EntityManagerInterface $em , \Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        $this->em = $em;
        $this->countainer = $container;
    }

    public function getDogvor()
    {
        $db = $this->countainer->get('doctrine.orm.dogovor_entity_manager');
        $db->beginTransaction();
      return   $ca = $db->createQuery('SELECT u FROM App\Entity\Dogovor\Dogovor u WHERE u.id = 344181')->execute();

    }

    public function getLogData()
    {
        $db = $this->countainer->get('doctrine.orm.dogovor_entity_manager');

        $responce = $db->getRepository('Dogovor:CriticalChanges')
            ->getByDate('03-24-2018','ws_logpaging','iservice');

        return $responce;

    }

    public function getLogDataId($id)
    {
        $db = $this->countainer->get('doctrine.orm.dogovor_entity_manager');


        $responce = $db->getRepository('Dogovor:CriticalChanges')
            ->getByDateId('03-24-2018','ws_logpaging','iservice',$id);

        return $responce;

    }
    public function getPartners($array)
    {
        $db = $this->countainer->get('doctrine.orm.dogovor_entity_manager');
        $result_user = $db->getRepository('Dogovor:PersonConnections')
            ->findByIds($array);

        $result_partner = $db->getRepository('Dogovor:Partners')
            ->findByIds(array_column($result_user, 'partner_id'));
        $final = array();
        array_walk($result_user, function ($u) use ($result_partner, &$final) {

            array_walk($result_partner, function ($p) use ($u, &$final) {
                if ($u['partner_id'] == $p['id']) {

                    $final[] = array_merge($p, $u);
                }
            });
        });

        return $final;
    }

    public function getWebSearches()
    {
        $db = $this->countainer->get('doctrine.orm.dogovor_entity_manager');

        $responce = $db->getRepository('Dogovor:CriticalChanges')
            ->getByDate('04-13-2018','GetPagingData','THIRDAUXWEB');

        return $responce;

    }
    public function getWebSearchesById($id)
    {
       //$id =$id?$id:-1;
        $db = $this->countainer->get('doctrine.orm.dogovor_entity_manager');

        $responce = $db->getRepository('Dogovor:CriticalChanges')
            ->getByDateId('04-13-2018','GetPagingData','THIRDAUXWEB',$id);

        return $responce;

    }
}