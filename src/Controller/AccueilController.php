<?php 
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController {
        /**
        * @Route("accueil")
        */
        function accueil(){
           // return new Response("Ceci est l'accueil.");
           $title = "accueil";
           $content = ["phrase 1", "phrase 2", "phrase 3"];
            return $this->render("accueil.html.twig", ['title'=>$title, 'array'=>$content]);
        }
}