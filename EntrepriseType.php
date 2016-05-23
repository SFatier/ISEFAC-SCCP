<?php

namespace Isefac\Bundle\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EntrepriseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomEntreprise')
            ->add('adresse')
            ->add('codePostal')
            ->add('ville')
            ->add('url')
            ->add('contactEntreprise')
            ->add('adresseEmail')
            ->add('offre', new OffreType()); //formulaire imbriqué
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Isefac\Bundle\MainBundle\Entity\Entreprise'
        ));
    }
}
