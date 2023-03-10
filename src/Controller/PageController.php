<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Content;
use Doctrine\ORM\EntityManagerInterface;

class PageController extends AbstractController
{
    #[Route('/', name: 'startseite')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {

        $routeName = $request->attributes->get('_route');

        $contentRepository = $entityManager->getRepository(Content::class);
        $getContent = $contentRepository->findOneBySomeField($routeName);

        return $this->render('page/index.html.twig', [
            'getContent' => $getContent,
        ]);
    }

    #[Route('/ueberuns', name: 'ueberuns')]
    public function ueberuns(Request $request, EntityManagerInterface $entityManager): Response
    {

        $routeName = $request->attributes->get('_route');

        $contentRepository = $entityManager->getRepository(Content::class);
        $getContent = $contentRepository->findOneBySomeField($routeName);

        return $this->render('page/ueberuns.html.twig', [
            'getContent' => $getContent,
        ]);
    }

    #[Route('/hausbaumgarten', name: 'hausbaumgarten')]
    public function hausbaumgarten(Request $request, EntityManagerInterface $entityManager): Response
    {
        $routeName = $request->attributes->get('_route');

        $contentRepository = $entityManager->getRepository(Content::class);
        $getContent = $contentRepository->findOneBySomeField($routeName);

        return $this->render('page/hausbaumgarten.html.twig', [
            'getContent' => $getContent,
        ]);
    }

    #[Route('/hausverwaltungen', name: 'hausverwaltungen')]
    public function hausverwaltungen(Request $request, EntityManagerInterface $entityManager): Response
    {
        $routeName = $request->attributes->get('_route');

        $contentRepository = $entityManager->getRepository(Content::class);
        $getContent = $contentRepository->findOneBySomeField($routeName);

        return $this->render('page/hausverwaltungen.html.twig', [
            'getContent' => $getContent,
        ]);
    }

    #[Route('/gemeinden', name: 'gemeinden')]
    public function gemeinden(Request $request, EntityManagerInterface $entityManager): Response
    {
        $routeName = $request->attributes->get('_route');

        $contentRepository = $entityManager->getRepository(Content::class);
        $getContent = $contentRepository->findOneBySomeField($routeName);

        return $this->render('page/gemeinden.html.twig', [
            'getContent' => $getContent,
        ]);
    }

    #[Route('/firmengelaende', name: 'firmengelaende')]
    public function firmengelaende(Request $request, EntityManagerInterface $entityManager): Response
    {
        $routeName = $request->attributes->get('_route');

        $contentRepository = $entityManager->getRepository(Content::class);
        $getContent = $contentRepository->findOneBySomeField($routeName);

        return $this->render('page/firmengelaende.html.twig', [
            'getContent' => $getContent,
        ]);
    }

    #[Route('/baumpflege', name: 'baumpflege')]
    public function baumpflege(Request $request, EntityManagerInterface $entityManager): Response
    {
        $routeName = $request->attributes->get('_route');

        $contentRepository = $entityManager->getRepository(Content::class);
        $getContent = $contentRepository->findOneBySomeField($routeName);

        return $this->render('page/baumpflege.html.twig', [
            'getContent' => $getContent,
        ]);
    }

    #[Route('/faellungen', name: 'faellungen')]
    public function faellungen(Request $request, EntityManagerInterface $entityManager): Response
    {
        $routeName = $request->attributes->get('_route');

        $contentRepository = $entityManager->getRepository(Content::class);
        $getContent = $contentRepository->findOneBySomeField($routeName);

        return $this->render('page/faellungen.html.twig', [
            'getContent' => $getContent,
        ]);
    }

    #[Route('/pflanzungen', name: 'pflanzungen')]
    public function pflanzungen(Request $request, EntityManagerInterface $entityManager): Response
    {
         $routeName = $request->attributes->get('_route');

        $contentRepository = $entityManager->getRepository(Content::class);
        $getContent = $contentRepository->findOneBySomeField($routeName);

        return $this->render('page/pflanzungen.html.twig', [
            'getContent' => $getContent,
        ]);
    }

    #[Route('/wurzelstockentfernung', name: 'wurzelstockentfernung')]
    public function wurzelstockentfernung(Request $request, EntityManagerInterface $entityManager): Response
    {
         $routeName = $request->attributes->get('_route');

        $contentRepository = $entityManager->getRepository(Content::class);
        $getContent = $contentRepository->findOneBySomeField($routeName);

        return $this->render('page/wurzelstockentfernung.html.twig', [
            'getContent' => $getContent,
        ]);
    }

    #[Route('/baumkontrolle', name: 'baumkontrolle')]
    public function baumkontrolle(Request $request, EntityManagerInterface $entityManager): Response
    {
         $routeName = $request->attributes->get('_route');

        $contentRepository = $entityManager->getRepository(Content::class);
        $getContent = $contentRepository->findOneBySomeField($routeName);

        return $this->render('page/baumkontrolle.html.twig', [
            'getContent' => $getContent,
        ]);
    }

    #[Route('/sondermassnahmen', name: 'sondermassnahmen')]
    public function sondermassnahmen(Request $request, EntityManagerInterface $entityManager): Response
    {
         $routeName = $request->attributes->get('_route');

        $contentRepository = $entityManager->getRepository(Content::class);
        $getContent = $contentRepository->findOneBySomeField($routeName);

        return $this->render('page/sondermassnahmen.html.twig', [
            'getContent' => $getContent,
        ]);
    }

    #[Route('/referenzen', name: 'referenzen')]
    public function referenzen(Request $request, EntityManagerInterface $entityManager): Response
    {
         $routeName = $request->attributes->get('_route');

        $contentRepository = $entityManager->getRepository(Content::class);
        $getContent = $contentRepository->findOneBySomeField($routeName);

        return $this->render('page/referenzen.html.twig', [
            'getContent' => $getContent,
        ]);
    }

    #[Route('/impressum', name: 'impressum')]
    public function impressum(Request $request, EntityManagerInterface $entityManager): Response
    {
         $routeName = $request->attributes->get('_route');

        $contentRepository = $entityManager->getRepository(Content::class);
        $getContent = $contentRepository->findOneBySomeField($routeName);

        return $this->render('page/impressum.html.twig', [
            'getContent' => $getContent,
        ]);
    }

    #[Route('/datenschutz', name: 'datenschutz')]
    public function datenschutz(Request $request, EntityManagerInterface $entityManager): Response
    {
         $routeName = $request->attributes->get('_route');

        $contentRepository = $entityManager->getRepository(Content::class);
        $getContent = $contentRepository->findOneBySomeField($routeName);

        return $this->render('page/datenschutz.html.twig', [
            'getContent' => $getContent,
        ]);
    }
}
