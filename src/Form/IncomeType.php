<?php

namespace App\Form;

use App\Entity\Income;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IncomeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('billnumber')
            ->add('amount')
            ->add('tps')
            ->add('tvq')
            ->add('tvh')
            ->add('total')
            ->add('receivedAt')
            ->add('createdAt')
            ->add('customer')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Income::class,
        ]);
    }
}
