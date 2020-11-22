<?php

namespace App\Controller;

use App\Repository\ActivityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage(ActivityRepository $activityRepository): Response
    {
        return $this->render('main/homepage.html.twig', [
            'activity' => $activityRepository->findAll(),
        ]);
    }
}
