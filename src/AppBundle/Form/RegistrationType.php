<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 12/06/18
 * Time: 16:59
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('phoneNumber')
            ->add('birthDate')
            ->add('creationDate')
            ->add('note')
            ->add('isACertifiedPilot');
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}