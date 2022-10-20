<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MichelinController extends AbstractController
{
    ##  public function accueil()
    ##  {
    ##    return new Response("<html><body>
    ##    <h1><b>Bonjour: </b><p> Guide Michelin ... trouvez un
    ##     restaurant</p></h1></body></html>");
    ## }


    public function accueil()
    {
        return $this->render(
            'accueil/afficher.html.twig',
        );
    }

    public function menu()
    {
        return $this->render(
            'accueil/menu.html.twig',
        );
    }
}
