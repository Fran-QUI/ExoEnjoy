<?php

namespace ExoEnjoy\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ArticlesController extends Controller
{
    # function : show index.html.twig
    # no parameter
    # -> listArticles : for use with twig, store all articles

    public function indexAction()
    {

        # repository is used with the 'findAll' method to store all articles in an Array,
        # the array is used to build the index in the index.html.twig

        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('ExoEnjoyArticleBundle:Article');

        $listArticles = $repository->findAll();

        # if $listArticles is null : there is any article in the database
        # then advert the user

        if (null === $listArticles) {
            throw new NotFoundHttpException("Il n'y a pas d'articles dans la base de données.");
        }

        # else execute the controller

        return $this->render('ExoEnjoyArticleBundle:Articles:index.html.twig',
            array('listArticles' => $listArticles));



    }

    # function : show article.html.twig
    # $id is the id of the article must be shown
    # -> article : for use with twig, store information of the article must be shown

    public function viewAction($id)
    {
        # repository is used with the 'find' method to store the elements of the article with the id $id in an Array,
        # the array is used to show the article's elements in the show.html.twig

        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('ExoEnjoyArticleBundle:Article');

        $infosArticle = $repository->find($id);

        # if $infoArticles is null : there is any article with this id in the database
        # then advert the user

        if (null === $infosArticle) {
            throw new NotFoundHttpException("Il n'y a pas d'articles avec l'id ".$id." dans la base de données.");
        }

        # else execute the controller

        return $this->render('ExoEnjoyArticleBundle:Articles:view.html.twig',
            array('article' => $infosArticle));

    }
}
