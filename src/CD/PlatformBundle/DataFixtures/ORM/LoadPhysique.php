<?php

namespace CD\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use CD\PlatformBundle\Entity\Physique;

class LoadPhysique implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    // Liste des attributs physiques
    $names = array('Petit', 'Grand', 'Neuf', 'Occasion', 'Roux');

    foreach ($names as $name) {
      // On crée la compétence
      $physique = new Physique();
      $physique->setName($name);

      //persistance
        
      $manager->persist($physique);
    }

    // déclenchement de l'enregistrement
      
    $manager->flush();
  }
}