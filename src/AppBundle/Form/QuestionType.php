<?php
/**
 * Created by PhpStorm.
 * User: Isambard.Wheeler
 * Date: 04/08/2015
 * Time: 13:01
 */

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuestionType extends AbstractType
{
        public function buildForm(FormBuilderInterface $builder, array $options)
        {
            $builder ->add('email', 'email')
                     ->add('fullname','text')
                     ->add('Enquiry','text')
                     ->add('submit','submit')
                     ->setMethod('POST');
        }


        public function getName()
        {
            return "sadasd";
        }

        public function configureOptions(OptionsResolver $resolver)
        {
//            $resolver->setDefault( array(
//                'data_class' => '@IWABundle\Entity\enquiry',
//            ));
        }

}