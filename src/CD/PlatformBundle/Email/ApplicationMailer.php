<?php
namespace CD\PlatformBundle\Email;
use CD\PlatformBundle\Entity\Application;
class ApplicationMailer
{
  /**
   * @var \Swift_Mailer
   */
  private $mailer;
  public function __construct(\Swift_Mailer $mailer)
  {
    $this->mailer = $mailer;
  }
  public function sendNewNotification(Application $application)
  {
    $message = new \Swift_Message(
      'Nouvel achat',
      'Vous avez reçu un nouvel achat.'
    );
    $message
      ->addTo($application->getAdvert()->getAuthor()) 
      ->addFrom('admin@votresite.com')
    ;
    $this->mailer->send($message);
  }
}