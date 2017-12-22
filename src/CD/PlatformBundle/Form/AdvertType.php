<?php

namespace CD\PlatformBundle\Form;

use CD\PlatformBundle\Repository\CategoryRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;


class AdvertType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    $patt = 'D%';
    $builder
      ->add('date',      DateTimeType::class)
      ->add('title',     TextType::class)
      ->add('author',    TextType::class)
      ->add('content',   TextareaType::class)
      ->add('image',     ImageType::class)
      ->add('categories', EntityType::class, array(
        'class'        => 'CDPlatformBundle:Category',
        'choice_label' => 'name',
        'expanded'     => true,
        'multiple'     => true,
        'query_builder' => function(CategoryRepository $repository) use($patt) {
          return $repository->getLikeQueryBuilder($patt);
        }
        
        ))
        ->add('save',      SubmitType::class);
            
        $builder->addEventListener(
          FormEvents::PRE_SET_DATA,    // 1er argument : L'évènement qui nous intéresse : ici, PRE_SET_DATA
          function(FormEvent $event) { // 2e argument : La fonction à exécuter lorsque l'évènement est déclenché
            // On récupère notre objet Advert sous-jacent
            $advert = $event->getData();

            // Cette condition est importante, on en reparle plus loin
            if (null === $advert) {
              return; // On sort de la fonction sans rien faire lorsque $advert vaut null
            }

            // Si l'annonce n'est pas publiée, ou si elle n'existe pas encore en base (id est null)
            if (!$advert->getPublished() || null === $advert->getId()) {
             
              $event->getForm()->add('published', CheckboxType::class, array('required' => true));
            } else {
             
              $event->getForm()->remove('published');
            }
          }
        );
    
    
    }
    
    
    
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CD\PlatformBundle\Entity\Advert'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cd_platformbundle_advert';
    }


}
