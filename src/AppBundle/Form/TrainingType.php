<?php
namespace AppBundle\Form;

use AppBundle\Entity\Training;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class TrainingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('trainer_name', TextType::class)
            ->add('training_date', DateTimeType::class)
            ->add('training_street', TextType::class)
            ->add('training_district', TextType::class)
            ->add('training_city', TextType::class)
            ->add('training_price', TextType::class)
            ->add('training_distance', TextType::class)
            ->add('training_time', TextType::class)
            ->add('training_type', ChoiceType::class, array(
                'choices' => array(
                    'crossfit' => 'crossfit',
                    'boxing' => 'boxing',
                    'salsa' => 'salsa',
                    'basketball' => 'basketball',
                    'soccer' => 'soccer',
                    'bodybuilding' => 'bodybuilding',
                    'brasilian jiu jitsu' => 'brasilian jiu jitsu',
                    'muay thai' => 'muay thai',
                    'kettle ball' => 'kettle ball',
                    'fitness woman' => 'fitness woman',
                    'power lifting' => 'power lifting',
                    'mma' => 'mma',
                    'lation dance' => 'latino dance',
                    'step woman' => 'step woman'
                )))
            ->add('save', SubmitType::class, array('label' => 'Add training opportunity'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Training::class,
        ));
    }
}