<?php

namespace Blog\BlogAplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BlogBlogAplicationBundle:Default:index.html.twig');
    }
}
