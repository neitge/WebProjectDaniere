<?php

namespace CD\PlatformBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class AdvertRepository extends \Doctrine\ORM\EntityRepository
{
    
 public function getAdvertWithCategories(array $categoryNames)
  {
    $qb = $this->createQueryBuilder('a');

    
    $qb
      ->innerJoin('a.categories', 'c')
      ->addSelect('c')
    ;

  
    $qb->where($qb->expr()->in('c.name', $categoryNames));
   

 
    return $qb
      ->getQuery()
      ->getResult()
    ;
  }
  
  public function getAdverts($page, $nbPerPage)
  {
   $query = $this->createQueryBuilder('a')
      // Jointure sur l'attribut image
      ->leftJoin('a.image', 'i')
      ->addSelect('i')
      // Jointure sur l'attribut categories
      ->leftJoin('a.categories', 'c')
      ->addSelect('c')
      ->orderBy('a.date', 'DESC')
      ->getQuery()
    ;
    $query
     ->setFirstResult(($page-1) * $nbPerPage)
     ->setMaxResults($nbPerPage)
    ;

    return $query->getResult();  
    

  }
}