<?php

namespace Minsal\shcpBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ShcpParCtlPatologiaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Id') 
            ->add('cpatNombrePatologia')
            ->add('cpatTipoPatologia')
            ->add('cpatEstado')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Minsal\shcpBundle\Entity\ShcpParCtlPatologia'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'minsal_shcpbundle_shcpparctlpatologia';
    }
}
