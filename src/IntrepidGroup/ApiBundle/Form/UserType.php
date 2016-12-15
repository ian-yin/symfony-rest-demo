<?php

namespace IntrepidGroup\ApiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('username', 'text')
          ->add('firstName', 'text')
          ->add('lastName', 'text')
          ->add('email', 'email');
    }
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
          'data_class' => 'IntrepidGroup\ApiBundle\Entity\User',
          'csrf_protection' => false
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return '';
    }
}
