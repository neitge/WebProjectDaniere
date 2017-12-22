<?php

namespace CD\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cd_advert_physique")
 */
class AdvertPhysique
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="level", type="string", length=255)
   */
  private $level;

  /**
   * @ORM\ManyToOne(targetEntity="CD\PlatformBundle\Entity\Advert")
   * @ORM\JoinColumn(nullable=false)
   */
  private $advert;

  /**
   * @ORM\ManyToOne(targetEntity="CD\PlatformBundle\Entity\Physique")
   * @ORM\JoinColumn(nullable=false)
   */
  private $physique;
  
  public function getId()
  {
    return $this->id;
  }

  public function setLevel($level)
  {
    $this->level = $level;
  }

  public function getLevel()
  {
    return $this->level;
  }

  public function setAdvert(Advert $advert)
  {
    $this->advert = $advert;
  }

  public function getAdvert()
  {
    return $this->advert;
  }

  public function setPhysique(Physique $physique)
  {
    $this->physique = $physique;
  }

  public function getPhysique()
  {
    return $this->physique;
  }
}