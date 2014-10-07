<?php

namespace Minsal\shcpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ShcpDocCtlPreguntaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pregDetalle')
            ->add('pregTipo')
            ->add('pregEstado')
            ->add('pregSeccion')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Minsal\shcpBundle\Entity\ShcpDocCtlPregunta'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'minsal_shcpbundle_shcpdocctlpregunta';
    }
}
