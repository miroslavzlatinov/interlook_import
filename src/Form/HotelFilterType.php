<?php

namespace App\Form;

//use App\Entity\HotelFilter;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\InterlookWebUser;

class HotelFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder
            ->add('name',EntityType::class,array(
                'class' => 'App\Entity\InterlookWebUser',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                       // ->leftJoin('App\Entity\LogData','l','WITH','u.interlook_id = l.external_user_id')
                        ->where('u.type=1 or u.type=0 ')
                       ->orderBy('u.name', 'ASC');
                },
                'choice_label' => 'Partner',
                'choice_value' => function (InterlookWebUser $entity = null) {
                    return $entity ? $entity->getInterlookId() : '';},
                'choice_name' => function($partner){
                   return $partner->getName();
                }
            ))

            ->add('date_from',DateType::class,array(
                'data'=> new \DateTime(),
            ))
            ->add('date_to' ,DateType::class,array(
                'data'=>date_modify(new \DateTime(),'+1 day'),
            ))
        ->add('single_hotel',CheckboxType::class,['required' => false]);

//        $builder->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent $event) {
//            $product = $event->getData();
//            $form = $event->getForm();
//
//        });
    }



    public function configureOptions(OptionsResolver $resolver)
    {


        $resolver->setDefaults([
            // uncomment if you want to bind to a class
            //'data_class' => HotelFilter::class,
            'csrf_protection' => false,
        ]);
    }
}
