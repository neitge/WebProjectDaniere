<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace CD\PlatformBundle\Controller;

use CD\PlatformBundle\Entity\Advert;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use CD\PlatformBundle\Form\AdvertType;
use CD\PlatformBundle\Form\AdvertEditType;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class AdvertController extends Controller
{
  public function indexAction($page)
  {
    if ($page < 1) {
      throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
    }
    // Ici je fixe le nombre d'annonces par page à 3
    // Mais bien sûr il faudrait utiliser un paramètre, et y accéder via $this->container->getParameter('nb_per_page')
    $nbPerPage = 3;
    // On récupère notre objet Paginator
    $listAdverts = $this->getDoctrine()
      ->getManager()
      ->getRepository('CDPlatformBundle:Advert')
      ->getAdverts($page, $nbPerPage)
    ;
    // On calcule le nombre total de pages grâce au count($listAdverts) qui retourne le nombre total d'annonces
    $nbPages = ceil(count($listAdverts) / $nbPerPage);
    // Si la page n'existe pas, on retourne une 404
    if ($page > $nbPages) {
      throw $this->createNotFoundException("La page ".$page." n'existe pas.");
    }
    // On donne toutes les informations nécessaires à la vue
    return $this->render('CDPlatformBundle:Advert:index.html.twig', array(
      'listAdverts' => $listAdverts,
      'nbPages'     => $nbPages,
      'page'        => $page,
    ));
  }

  public function viewAction($id)
  {
    
    // On récupère le repository

    $em = $this->getDoctrine()->getManager();
    // Pour récupérer une seule annonce, on utilise la méthode find($id)
    $advert = $em->getRepository('CDPlatformBundle:Advert')->find($id);
    // $advert est donc une instance de OC\PlatformBundle\Entity\Advert
    // ou null si l'id $id n'existe pas, d'où ce if :
    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }
    // Récupération de la liste des candidatures de l'annonce
    $listApplications = $em
      ->getRepository('CDPlatformBundle:Application')
      ->findBy(array('advert' => $advert))
    ;
    // Récupération des AdvertSkill de l'annonce
    $listAdvertSkills = $em
      ->getRepository('CDPlatformBundle:AdvertSkill')
      ->findBy(array('advert' => $advert))
    ;
    return $this->render('CDPlatformBundle:Advert:view.html.twig', array(
      'advert'           => $advert,
      'listApplications' => $listApplications,
      'listAdvertSkills' => $listAdvertSkills,
    ));
  }

   public function addAction(Request $request)
  {
     $advert = new Advert();
    $form   = $this->get('form.factory')->create(AdvertType::class, $advert);
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($advert);
      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
      return $this->redirectToRoute('cd_platform_view', array('id' => $advert->getId()));
    }
    return $this->render('CDPlatformBundle:Advert:add.html.twig', array(
      'form' => $form->createView(),
    ));
    }
      
   

      
      
  

 public function editAction($id, Request $request)
  {
     $em = $this->getDoctrine()->getManager();
    $advert = $em->getRepository('CDPlatformBundle:Advert')->find($id);
    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }
    $form = $this->get('form.factory')->create(AdvertEditType::class, $advert);
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      // Inutile de persister ici, Doctrine connait déjà notre annonce
      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');
      return $this->redirectToRoute('cd_platform_view', array('id' => $advert->getId()));
    }
    return $this->render('CDPlatformBundle:Advert:edit.html.twig', array(
      'advert' => $advert,
      'form'   => $form->createView(),
    ));
  }

  public function deleteAction(Request $request, $id)
  {
   $em = $this->getDoctrine()->getManager();
    $advert = $em->getRepository('CDPlatformBundle:Advert')->find($id);
    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }
    // On crée un formulaire vide, qui ne contiendra que le champ CSRF
    // Cela permet de protéger la suppression d'annonce contre cette faille
    $form = $this->get('form.factory')->create();
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em->remove($advert);
      $em->flush();
      $request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");
      return $this->redirectToRoute('cd_platform_home');
    }
    
    return $this->render('CDPlatformBundle:Advert:delete.html.twig', array(
      'advert' => $advert,
      'form'   => $form->createView(),
    ));
  }
    
  public function menuAction($limit)
  {
    $em = $this->getDoctrine()->getManager();
    $listAdverts = $em->getRepository('CDPlatformBundle:Advert')->findBy(
      array(),                 // Pas de critère
      array('date' => 'desc'), // On trie par date décroissante
      $limit,                  // On sélectionne $limit annonces
      0                        // À partir du premier
    );
    return $this->render('CDPlatformBundle:Advert:menu.html.twig', array(
      'listAdverts' => $listAdverts
    ));
  }
}