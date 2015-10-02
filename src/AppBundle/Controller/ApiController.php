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
        $opt = array();

        $repository = $this->getDoctrine()->getRepository('AppBundle:Posts');

        if($request->query->get('firstPost')){
            $opt['start'] = $request->query->get('firstPost');
        }

        if($request->query->get('quantity')){
            $opt['limit'] = $request->query->get('quantity');
        }

        $allPosts = $repository->getAllPagination($opt);
        $cntPost = $repository->countPosts();
        array_push($allPosts, $cntPost);
        $serializer = $this->container->get('jms_serializer');
        $j = $serializer->serialize($allPosts, 'json');
        return new Response($j);
    }
}