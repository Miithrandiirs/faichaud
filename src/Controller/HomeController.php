<?php
/**
 * Created by PhpStorm.
 * User: mithrandir
 * Date: 25/02/19
 * Time: 08:46
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    public function index()
    {
        return $this->render('home/index.html.twig');
    }

    public function help()
    {
        return $this->render("home/help.html.twig");
    }
}