<?php

namespace LFP\StructuralAnks\MainBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Event\DataEvent;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContractType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $factory = $builder->getFormFactory();
        
        $builder
            ->add('contractType',
              'entity',
              array(
                  'class'=>'MeloLabBioGestionEmployeeBundle:ContractType',
                  'label'=>'Tipo de contrato',
                  'label_attr' => array(
                    'id'=>'melolab_employeebundle_contracttype_contractType_label'
                  )
              )
             )
            ->add(
                    'startDate',
                    'date',
                    array(
                        'label'=>'Fecha de inicio',
                        'widget'=>'single_text',
                        'format' => 'dd-MM-yyyy'
                        )
                    )
            ->add('endDate','date',array(
                  'label'=>'Fecha de término',
                  'label_attr' => array('id'=>'melolab_employeebundle_contracttype_endDate_label'),
                  'widget'=>'single_text',
                  'format' => 'dd-MM-yyyy',
                  'required'=>false)
                 )
            ->add('workingHours','integer',array('label'=>'Horas semanales'))
            ->add('categoryType','entity',array(
                'class'=>'MeloLabBioGestionEmployeeBundle:CategoryType',
                'property' => 'type',
                'label'=>'Categoría',
                'empty_value'=>'< Seleccione >',
                'data' => $builder->getData()->getCategoryType(),
                'mapped' => false
                ))
            ->add('category','entity',array(
                'class'=>'MeloLabBioGestionEmployeeBundle:Category',
                'label'=>'Sub Categoría (seleccione categoria para filtrar)',
                'empty_value'=>'< Seleccione >',
                'disabled'=>false))
            ->add('contractDigitalCopy','file',array(
                  'label'=>'Adjuntar Copia digital del Contrato (5MB max)',
                  'required'=>false,
                  'label_attr'=>array('id'=>'melolab_employeebundle_contracttype_contractdigitalcopy_label','style'=>'display:none')
            ))
            ->add('description','textarea',array('label'=>'Comentarios','required'=>false))
            ->add('employee',
                    'entity',
                    array(
                        'class'=>'MeloLabBioGestionEmployeeBundle:Employee',
                        'label'=>'Usuario',
                        'attr'=>array('style' => 'display:none'),
                        'label_attr'=>array('style' => 'display:none')
                        )
                    )
            ->add('anticipatedTerminationDate',
                  'date',
                  array(
                    'label'=>'Fecha de término',
                    'required'=>false,
                    'widget'=>'single_text',
                    'format' => 'dd-MM-yyyy',
                    'attr'=>array(
                        'class'=>'terminate-contract-form-endDate',
                        'tabindex'=>'1', 
                        'style' => 'display:none'),
                    'label_attr' => array(
                        'style' => 'display:none',
                        'id'=>'melolab_employeebundle_contracttype_anticipatedTerminationDate_label')
                    )
                 )
            ->add('terminateDescription',
                  'textarea',
                  array(
                     'label'=>'Razón del término anticipado del contrato',
                     'required'=>false,
                     'attr'=>array(
                        'autofocus'=>'autofocus',
                        'tabindex'=>'0',
                        'style' => 'display:none'),
                     'label_attr'=>array(
                         'style' => 'display:none',
                         'id'=>'melolab_employeebundle_contracttype_terminateDescription_label')
                   )
                 )
        ;
       
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LFP\StructuralAnks\MainBundle\Entity\Contract'
        ));
    }

    public function getName()
    {
        return 'lfp_structuralanks_mainbundle_contracttype';
    }
}
