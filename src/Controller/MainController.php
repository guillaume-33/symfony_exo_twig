<?php

namespace App\Controller;

use phpDocumentor\Reflection\Types\AbstractList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController
{
  /**
   * @Route("/accueil" , name="accueil")
   */

  public function accueil(){

      $name= 'Guillaume';
      //créé la variable 'name'
      //return $this-> render("accueil.html.twig",['name'=>$name], );
      // permet de renvoyer la ou les variables vers la page "acceuil.html.twig

      $category = [
          'title' => 'Politique',
          'color' => 'green',
          'published' => true,
          'description' => 'Decrypter l\'actualité politique avec le prisme de David Robert'
        ];

        return $this-> render("accueil.html.twig",[
            'category'=> $category,
            'name'=>$name,
        ]);
      //ouvrir le crochet au debut du return,puis mettre avec indentation logique toute les variable que l'on veux utiliser.


  }

}