<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StoresController extends Controller
{
    public function viewAction($name)
    {
        return $this->render(
            'stores/view.html.twig',
            ['name' => $name]
        );
    }
}