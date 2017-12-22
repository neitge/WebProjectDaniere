<?php

namespace CD\PlatformBundle\Entity;



use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use CD\PlatformBundle\Validator\NoFlood;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * Advert
 *
 * @ORM\Table(name="advert")
 * @ORM\Entity(repositoryClass="CD\PlatformBundle\Repository\AdvertRepository")
 * @ORM\HasLifecycleCallbacks()
 *
 * @UniqueEntity(fields="title", message="Annonce déjà créée avec ce titre.")
 */
class Advert
{
    
    /**
   * @ORM\Column(name="updated_at", type="datetime", nullable=true)
   */
  private $updatedAt; 
    
   /**
   * @Gedmo\Slug(fields={"title"})
   * @ORM\Column(name="slug", type="string", length=255, unique=true)
   */
  private $slug;
    
    /**
   * @ORM\Column(name="nb_applications", type="integer")
   */
  private $nbApplications = 0;

  
     /**
   * @ORM\OneToMany(targetEntity="CD\PlatformBundle\Entity\Application", mappedBy="advert")
   */
  private $applications;

    /**
    * @ORM\OneToOne(targetEntity="CD\PlatformBundle\Entity\Image", cascade={"persist", "remove"})
    * @Assert\Valid()
    */
  private $image;
    
   /**
   * @ORM\ManyToMany(targetEntity="CD\PlatformBundle\Entity\Category", cascade={"persist"})
   * @ORM\JoinTable(name="advert_category")
   */
  private $categories;
    
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    
      /**
       * @ORM\Column(name="published", type="boolean")
       */
      private $published = true;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetimetz")
     * @Assert\DateTime()

     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, unique=true)
     * @Assert\Length(min=5, minMessage="Le titre est trop court, il doit avoir au moins 5 lettres.")
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=150, unique=true)
     * @Assert\Length(min=3, minMessage="Le nom est trop court, il doit avoir au moins 3 lettres." )
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     * @Assert\NotBlank()
     * @NoFlood()
     */
    private $content;

      public function __construct()
    {
    
    $this->date = new \Datetime();
    $this->applications = new ArrayCollection();
    $this->categories = new ArrayCollection();
    
    }
    
    public function increaseApplication()
  {
    $this->nbApplications++;
  }

  public function decreaseApplication()
  {
    $this->nbApplications--;
  }
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Advert
     */
    public function setDate($date)
    {
        $this->date = $date;

    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Advert
     */
    public function setTitle($title)
    {
        $this->title = $title;

   
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Advert
     */
    public function setAuthor($author)
    {
        $this->author = $author;


    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Advert
     */
    public function setContent($content)
    {
        $this->content = $content;

    
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Advert
     */
    public function setPublished($published)
    {
        $this->published = $published;

   
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }
    
    
    public function setImage(Image $image = null)
      {
        $this->image = $image;
      }

      public function getImage()
      {
        return $this->image;
      }
    
    /**
   * @param Category $category
   */
    public function addCategory(Category $category)
  {
    
    $this->categories[] = $category;
  }

     /**
   * @param Category $category
   */
  public function removeCategory(Category $category)
  {
   
    $this->categories->removeElement($category);
  }

    /**
   * @return ArrayCollection
   */
    
  public function getCategories()
  {
    return $this->categories;
  }

    
 

  public function addApplication(Application $application)
  {
    $this->applications[] = $application;
      // l'annonce sera lié à la candidature
    $application->setAdvert($this);
  
  }
    
    /**
   * @param Application $application
   */
    
  public function removeApplication(Application $application)
  {
    $this->applications->removeElement($application);
  }

     /**
   * @return \Doctrine\Common\Collections\Collection
   */
  public function getApplications()
  {
    return $this->applications;
  }

     /**
     * @ORM\PreUpdate
     */
  /**
   * @param \DateTime $updatedAt
   */
  public function setUpdatedAt(\Datetime $updatedAt = null)
  {
      $this->updatedAt = $updatedAt;
  }

  /**
   * @return \DateTime
   */
  public function getUpdatedAt()
  {
      return $this->updatedAt;
  }

  /**
   * @param integer $nbApplications
   */
  public function setNbApplications($nbApplications)
  {
      $this->nbApplications = $nbApplications;
  }

  /**
   * @return integer
   */
  public function getNbApplications()
  {
      return $this->nbApplications;
  }

  /**
   * @param string $slug
   */
  public function setSlug($slug)
  {
      $this->slug = $slug;
  }

  /**
   * @return string
   */
  public function getSlug()
  {
      return $this->slug;
  }
 
    
  /**
   * @Assert\Callback
   */
  public function isContentValid(ExecutionContextInterface $context)
  {
    $forbiddenWords = array('idiot', 'connard', 'imbécile', 'sex','salop', 'troll');

    // On vérifie que le contenu ne contient pas l'un des mots
    if (preg_match('#'.implode('|', $forbiddenWords).'#', $this->getContent())) {
      // La règle est violée, on définit l'erreur
      $context
        ->buildViolation('Contenu inapproprié.') // message
        ->atPath('content')                                                   // attribut de l'objet qui est violé
        ->addViolation() // ceci déclenche l'erreur, ne l'oubliez pas
      ;
    }
  }

}
