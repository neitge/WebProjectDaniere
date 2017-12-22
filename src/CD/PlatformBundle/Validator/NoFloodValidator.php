<?php

namespace CD\PlatformBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class NoFloodValidator extends ConstraintValidator
{
    
  /**
   * @var RequestStack
   */  
 private $requestStack;
    
   /**
   * @var EntityManagerInterface
   */ 
  private $var;


  public function __construct(RequestStack $requestStack, EntityManagerInterface $var)
  {
   
    $this->requestStack = $requestStack;
      
    
    $this->var          = $var;
  }

  public function validate($value, Constraint $constraint)
  {
 
    $request = $this->requestStack->getCurrentRequest();

   
    $ip = $request->getClientIp();


    $isFlood = $this->var
      ->getRepository('CDPlatformBundle:Application')
      ->isFlood($ip, 20)
    ;

    if ($isFlood) {
     
      $this->context->addViolation($constraint->message);
    }
  }
}