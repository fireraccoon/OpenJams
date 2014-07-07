<?php

namespace OpenJams\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends Controller
{
   public function loginAction()
   {
      // User authenticated
      if($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEBERED')){
          return $this->redirect($this->generateUrl('brmjams_homepage'));
      } 
      
      $request = $this->getRequest();
      $session = $request->getSession();
      
      
      
       
       
   }
    
    
    
    
    
    
}
