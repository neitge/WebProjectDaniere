<?php

namespace CD\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="Categories")
 * @ORM\Entity(repositoryClass="CD\PlatformBundle\Repository\CategoryRepository")
 */
class Category
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="name", type="string", length=200)
   */
  private $name;

    
  /**
   * @return int
   */
  public function getId()
  {
    return $this->id;
  }
 
  /**
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }

    
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
}
