<?php

namespace Minsal\shcpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ShcpConCtlSignoAlarmaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sigNombre')
            ->add('sigTipo')
            ->add('sigEstado')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Minsal\shcpBundle\Entity\ShcpConCtlSignoAlarma'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'minsal_shcpbundle_shcpconctlsignoalarma';
    }
}
