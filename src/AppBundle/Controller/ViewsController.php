<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class ViewsController
 * @package AppBundle\Controller
 * @Route("/views");
 */
class ViewsController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction(Request $request)
    {

        return $this->render('views/index.html.twig');
    }
}