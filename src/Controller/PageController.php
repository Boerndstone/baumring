<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_page')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/about', name: 'app_page_about')]
    public function about(): Response
    {
        return $this->render('page/about.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/house', name: 'app_page_house')]
    public function house(): Response
    {
        return $this->render('page/house.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/property-management', name: 'app_page_property_management')]
    public function property_management(): Response
    {
        return $this->render('page/property-management.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/community', name: 'app_page_community')]
    public function community(): Response
    {
        return $this->render('page/community.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/baumpflege', name: 'app_page_baumpflege')]
    public function tree_care(): Response
    {
        return $this->render('page/baumpflege.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/lumber', name: 'app_page_lumber')]
    public function lumber(): Response
    {
        return $this->render('page/lumber.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/planting', name: 'app_page_planting')]
    public function planting(): Response
    {
        return $this->render('page/planting.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/rootstock', name: 'app_page_rootstock')]
    public function rootstock(): Response
    {
        return $this->render('page/rootstock.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/control', name: 'app_page_control')]
    public function control(): Response
    {
        return $this->render('page/control.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/special-action', name: 'app_page_special_action')]
    public function special_action(): Response
    {
        return $this->render('page/special-action.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/reference', name: 'app_page_reference')]
    public function reference(): Response
    {
        return $this->render('page/reference.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
