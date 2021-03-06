<?php

declare(strict_types=1);

namespace Rector\Website\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ContactController extends AbstractController
{
    /**
     * @Route(path="contact", name="contact")
     */
    public function __invoke(): Response
    {
        return $this->render('homepage/contact.twig');
    }
}
