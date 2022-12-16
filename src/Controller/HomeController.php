<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function homepage()
    {
        return $this->render('home.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactpage()
    {
        return $this->render('contact.html.twig');
    }

    /**
     * @Route("/lidmaatschap", name="lidmaatschap")
     */
    public function lidmaatschap()
    {
        return $this->render('lidmaatschap.html.twig');
    }

    /**
     * @Route("/groepslessen", name="groepslessen")
     */
    public function groepslessenpage()
    {
        return $this->render('groepslessen.html.twig');
    }
}
