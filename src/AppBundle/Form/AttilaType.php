<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AttilaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('suly')
            ->add('bicepszBal')
            ->add('bicepszJobb')
            ->add('dagadtHattyuBal')
            ->add('dagadtHattyuJobb')
            ->add('mell')
            ->add('derek')
            ->add('csipo')
            ->add('combBal')
            ->add('combJobb')
            ->add('vadliBal')
            ->add('vadliJobb')
            ->add('datum')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Attila'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_attila';
    }
}
