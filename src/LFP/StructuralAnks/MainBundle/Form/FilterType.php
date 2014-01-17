<?php

namespace LFP\StructuralAnks\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

 /**
  * Filter form
  * @author Jorge Cares
  */
class FilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $factory = $builder->getFormFactory();
        $builder
            ->add('pdbCode','text',array('label'=>'PDB Code:','required'=>false, 'trim'=>true))
            ->add('type','choice', array('label'=>'Type:', 'required'=>false,'choices'=>array('Synthetic Ankyrin Repeat Protein',
                                                                                              'Natural Ankyrin Repeat Protein',
                                                                                              'Non-Ankyrin Repeat Protein'),
                                        )
                 )
            ->add('operator','choice', array('label'=>'Operator:', 'required'=>false,'choices'=>array('='=>'=','<='=>'<=','>='=>'>='),))
            ->add('nchains','integer',array('label'=>'Number of chains:','required'=>false))
                
         ;
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        
        $resolver->setDefaults(array(
            'options' => array(),
        ));
//        $resolver->setOptional(array(
//            'allowedDepartments',
//        ));
//        
//        $resolver->setAllowedTypes(array(
//            'allowedDepartments' => 'array',
//        ));
    }
    
    public function getName()
    {
        return 'filter_form';
    }
}
