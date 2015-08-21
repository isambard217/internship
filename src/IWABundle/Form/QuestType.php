<?php
/**
 * Created by PhpStorm.
 * User: Isambard.Wheeler
 * Date: 04/08/2015
 * Time: 13:01
 */

namespace IWABundle\Form;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class QuestType extends AbstractType
{
        public function buildForm(FormBuilderInterface $builder, array $options)
        {
             $builder->add('firstname','text')
                     ->add('email','email')
                     ->add('enqiry','textarea')
                     ->add('submit','submit', array('label' => 'Submit Enquiry'));

        }

        public function configureOptions(OptionsResolver $resolver)
        {
            $resolver->setDefaults(array(
                'data_class' => 'IWABundle\Entity\quest',
            ));
        }

        public function getName()
        {
            return 'questionEnquire';
        }
}