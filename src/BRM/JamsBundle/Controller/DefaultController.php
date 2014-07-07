<?php

namespace BRM\JamsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BRMJamsBundle:Default:index.html.twig', array('name' => $name));
    }



    public function createJam(){
    	
    }


    public function editJam($jam){

    }


    public function cancelJam($jam){

    }


    public function viewJam($jam){
    	//TODO
    }




















}
