<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GithubController extends Controller
{
    /**
     * @Route("/", name="github")
     */

    public function githubAction(Request $request)
    {
        return $this->render('github/index.html.twig');
    }
}