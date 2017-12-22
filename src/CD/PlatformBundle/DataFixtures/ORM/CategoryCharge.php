<?php

namespace CD\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use CD\PlatformBundle\Entity\Category;

class CategoryCharge implements FixtureInterface
{
 
  public function load(ObjectManager $manager)
  {
    // Liste des catégories
      
    $names = array(
      'Vêtement',
      'Mobilier',
      'High-Tech',
      'Consommable',
      'Livres'
    );

    foreach ($names as $name) {
        
      // Création de la catégorie
        
      $category = new Category();
      $category->setName($name);

      // persistance de la création
        
      $manager->persist($category);
    }

    // Déclenchement de l'enregistrement
      
    $manager->flush();
  }
}