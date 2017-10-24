<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AdvertsCategory;
use AppBundle\Entity\AdvertsGroup;
use AppBundle\Entity\AdvertsPhotos;
use AppBundle\Entity\Adverts;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;
use Predis\Client;
use Symfony\Component\HttpFoundation\Session\Session;

class AdvertisementsController extends Controller
{
    protected $path = '/images/';
    /**
     * @Route("/advertisements/create", name="create_adverts")
     */
    public function createAction()
    {
        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');

        $repository = $this->getDoctrine()->getRepository(AdvertsCategory::class);
        $categories = $repository->findAll();

        return $this->render('advertisements/create.html.twig',[
            'categories'=>$categories
        ]);
    }

    /**
     * @param Request $request
     * @Route("/advertisements", name="store_adverts")
     */
    public function storeAction(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');

        $advert = new Adverts();

        $validator = $this->get('validator');
        $errors = $validator->validate($advert);
        $back = $referer = $request->headers->get('referer');

//        if (count($errors) > 0) {
//            flash()->error('Error!', 'And error occured or you have left some empty fields! Please try again!');
//            return $this->redirect($back);
//            $errors = array();
//        }

        $em = $this->getDoctrine()->getManager();

        $category = $this->getDoctrine()->getRepository(AdvertsCategory::class)->find($request->request->get('category_id'));

        $advert->setTitle($request->request->get('title'));
        $advert->setSlug(slugify($request->request->get('title')));
        $advert->setViews(0);
        $advert->setDescription($request->request->get('description'));
        $advert->setUserId($this->getUser());
        $advert->setCategoryId($category);
        $advert->setPrice($request->request->get('price'));
        $advert->setCreatedAt(new \DateTime('now'));
        $advert->setUpdatedAt(new \DateTime('now'));

        $files = $request->files->get('photos');

        $directory = $this->container->getParameter('kernel.root_dir') . '/../web/images';

        $em->persist($advert);

        $redis = new Client(array(
            "scheme" => "tcp",
            "host" => "127.0.0.1",
            "port" => 6379)
        );

        $em->flush();

        foreach ($files as $file)
        {
            $name = uniqid().'_'.$file->getClientOriginalName();
            $path = $directory;
            $file->move($path, $name);

            $advert_photos = new AdvertsPhotos();
            $advert_photos->setAdvertId($advert);
            $advert_photos->setPhotoName($name);
            $advert_photos->setPhotoPath($this->path);
            $advert->getAdvertsPhotos()->add($advert_photos);

            $em->persist($advert_photos);
            $em->flush();
        }
        $msg = array(json_encode($advert->serialize()));
        $redis->publish('advert', json_encode($msg));

        flash()->success('', 'Successfully saved new advertisement!');

        return $this->redirectToRoute('homepage');
    }

    /**
     * @Route("/advertisements/my", name="my_adverts")
     */
    public function myAdvertsAction()
    {
        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');

        $adverts = $this->getUser()->getAdverts();

        return $this->render('advertisements/my.html.twig', array(
            'adverts' => $adverts,
        ));
    }
    /**
     * @Route("/advertisement/{slug}", name="advert_show")
     */
    public function showAction($slug)
    {
        $repository = $this->getDoctrine()->getRepository(Adverts::class);
        $advert = $repository->findOneBySlug($slug);

        return $this->render('advertisements/show.html.twig', array(
            'advert' => $advert,
        ));
    }

    /**
     * @Route("/category/{slug}", name="advert_by_category")
     */
    public function categoryAction($slug)
    {
        $repository = $this->getDoctrine()->getRepository(AdvertsCategory::class);
        $category = $repository->findOneBySlug($slug);

        $adverts = $category->getAdverts();

        return $this->render('advertisements/category_adverts.html.twig', array(
            'adverts' => $adverts,
        ));
    }

    /**
     * @Route("/views/counter", name="views_counter")
     */
    public function viewCounterAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $id = $request->request->get('advert');

            $repository = $this->getDoctrine()->getRepository(Adverts::class);
            $advert = $repository->findOneById($id);
            $views = $advert->getViews() + 1;

            $advert->setViews($views);
            $em->flush();

            return $this->json('Success', 200);
        }
        return $this->json('no results found', Response::HTTP_NOT_FOUND); // constant for 404
    }
}
