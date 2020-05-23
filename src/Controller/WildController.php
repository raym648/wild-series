<?php
// src/Controller/WildController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\RouterInterface;
use Twig\Environment;


/**
* @Route("/wild", name="wild_")
*/

Class WildController extends AbstractController
{
    /**
     * @Route("/", name="index")
    */
    public function index() : Response
    {
        return $this->render('/index.html.twig', [
                'website' => 'Wild Séries',
        ]);
    }

    /**
     * @Route("/show/{slug}", name="show")
    */
    public function show($slug) : Response
    {
        $slug = array(
            array('id' => 1, 'title' => 'ma-superbe-serie'),
            array('id' => 2, 'title' => 'house-of-cards'),
            array('id' => 3, 'title' => '')
        );

        return $this->render('/show.html.twig', array(
            // Tout l'intérêt est ici : le contrôleur passe
            // les variables nécessaires au template !
            'listSlugs' => $slug
        ));
        
    }

}

