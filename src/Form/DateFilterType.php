<?php

namespace App\Form;

use App\Entity\DateFilter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DateFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date_from',DateType::class,array(
                'data'=> new \DateTime(),
            ))
            ->add('date_to' ,DateType::class,array(
                'data'=>date_modify(new \DateTime(),'+1 day'),
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // uncomment if you want to bind to a class
            //'data_class' => DateFilter::class,
            'csrf_protection' => false,
        ]);
    }
}
