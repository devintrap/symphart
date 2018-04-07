<?php
  namespace App\Controller;

  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\Routing\Annotation\Route;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
  use Symfony\Bundle\FrameworkBundle\Controller\Controller;

  class ArticleController extends Controller
  {
      /**
       * @Route("/")
       * @Method({"GET"})
       * @return Response
       */
      public function index()
      {
          $articles = ['Articel 1', 'Articel 2'];
          return $this->render('articles/index.html.twig',
              ['articles' => $articles]
          );
      }
  }