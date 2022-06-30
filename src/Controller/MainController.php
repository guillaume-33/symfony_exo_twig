<?php

namespace App\Controller;

use phpDocumentor\Reflection\Types\AbstractList;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractList
{
  /**
   * @Route("/accueil" , name="accueil")
   */

  public function accueil(){
      dd('test');
  }
}