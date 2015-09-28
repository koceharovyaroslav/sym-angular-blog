<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


/**
 * Class AngularController
 * @package AppBundle\Controller
 * @Route("/api");
 */
class ApiController extends Controller
{
    /**
     * @Route("/get-all-posts")
     */
    public function indexAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Posts');
        $allPosts = $repository->findAll();

        $serializer = $this->container->get('jms_serializer');
        $j = $serializer->serialize($allPosts, 'json');

        return new Response($j);
    }
}