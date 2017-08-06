<?php

namespace ExoEnjoy\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ExoEnjoyArticleBundle:Default:index.html.twig');
    }
}
