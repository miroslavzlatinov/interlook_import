<?php
/**
 * Created by PhpStorm.
 * User: miroslav
 * Date: 3/28/18
 * Time: 12:31 PM
 */

namespace App\Twig\Extension;


class PresenterExtension extends \Twig_Extension
{

    public function getName()
    {
        return 'Presenter';
    }


    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('html_entity_decode', array($this, 'htmlEntityDecode')));
    }


    public function htmlEntityDecode($string)
    {
       return html_entity_decode($string);
    }


}