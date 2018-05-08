<?php

namespace App\Form;

use App\Entity\VoucherServices;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class VoucherServicesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('checkInDate')
            ->add('checkOutDate')
            ->add('serviceType',TextType::class )
            ->add('serviceName',TextType::class )
            ->add('serviceId',TextType::class )
            ->add('serviceCount')
            ->add('serviceMaxPax')
            ->add('serviceCode',TextType::class )
            ->add('serviceCode1',TextType::class )
            ->add('serviceCode2',TextType::class )
            ->add('tourists', CollectionType::class, array(
                'entry_type' => TouristType::class,
                'entry_options' => array('label' => false ),
                'allow_delete' => true,
                'allow_add' => true,
                'by_reference' => false
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // uncomment if you want to bind to a class
            'data_class' => VoucherServices::class,
        ]);
    }
}
