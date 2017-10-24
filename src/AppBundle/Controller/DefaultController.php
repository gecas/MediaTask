<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AdvertsGroup;
use AppBundle\Entity\Adverts;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $groups = $this->getDoctrine()->getRepository(AdvertsGroup::class)->findAll();

        $repository = $this->getDoctrine()->getRepository(Adverts::class);
        $query = $repository->createQueryBuilder('ads')
            ->orderBy('ads.created_at', 'DESC')
            ->getQuery();
        $adverts = $query->getResult();

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'groups'=>$groups,
            'adverts'=>$adverts
        ]);
    }
}
