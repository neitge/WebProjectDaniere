<?php


namespace CD\PlatformBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class NoFlood extends Constraint
{
  public $message = "Merci de ne pas flood le site merci.";
    
    
    public function validatedBy(){
        return 'cd_platform_flood';
    }
}
