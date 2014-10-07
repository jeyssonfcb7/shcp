<?php

namespace Minsal\shcpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ShcpInsCtlEnfermedadType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Id') 
            ->add('enfNombre')
            ->add('enfTipo')
            ->add('enfEstado')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Minsal\shcpBundle\Entity\ShcpInsCtlEnfermedad'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'minsal_shcpbundle_shcpinsctlenfermedad';
    }
}
