<?php

namespace Minsal\shcpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ShcpAboCtlCie10Type extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Id')  
            ->add('cie10Nombre')
            ->add('cie10Tipo')
            ->add('cie10Estado')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Minsal\shcpBundle\Entity\ShcpAboCtlCie10'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'minsal_shcpbundle_shcpaboctlcie10';
    }
}
