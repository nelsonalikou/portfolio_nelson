<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/main", name="main")
     */
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'title' => 'Accueil',
        ]);
    }

    /**
     * @Route("/formation", name="formation")
     */
    public function formations(): Response
    {
        return $this->render('main/formation.html.twig', [
            'title' => 'Ma Formation',
        ]);
    }

    /**
     * @Route("/competences", name="competences")
     */
    public function competences(): Response
    {
        return $this->render('main/competences.html.twig', [
            'title' => 'Mes Compétences',
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutUs(): Response
    {
        return $this->render('main/aboutUs.html.twig', [
            'title' => 'A Propos de Moi',
        ]);
    }

    /*
    public function contact(): Response
    {
        return $this->render('main/contact.html.twig', [
            'title' => 'A Propos de Moi',
        ]);
    }
    */

}
