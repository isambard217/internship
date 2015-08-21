<?php
/**
 * Created by PhpStorm.
 * User: Isambard.Wheeler
 * Date: 04/08/2015
 * Time: 13:01
 */

namespace IWABundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class QuestionType extends AbstractType
{
        public function buildForm(FormBuilderInterface $builder, array $options)
        {
            $builder ->add('email', 'email')
                     ->add('firstname','text')
                     ->add('Enquiry','textarea')
                     ->add('submit','submit');
        }


        public function getName()
        {
            return 'person';
        }
}