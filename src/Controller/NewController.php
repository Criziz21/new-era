<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class NewController extends AbstractController {
    #[Route(path:"/", name:"home")]
    public function index() {
        return $this->render("index.html.twig");
    }
}