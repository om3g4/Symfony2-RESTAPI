<?php

namespace MP\RestApiBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrganizationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('type')
            ->add('email')
            ->add('telephoneNumber')
            ->add('website')
            ->add('taxNumber')
            ->add('vatNumber')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MP\RestApiBundle\Entity\Organization',
            'csrf_protection' => false
        ));
    }

    public function getName()
    {
        return 'organization';
    }
}