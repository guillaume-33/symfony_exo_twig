<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController
{
  /**
   * @Route("/accueil" , name="accueil")
   */

  public function accueil(){
      dd('test');
  }
}