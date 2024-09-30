<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AuthorController extends AbstractController
{
    // #[Route('/author/{name}', name: 'app_author')]
    // public function showAuthor(string $name): Response
    // {
    //     return $this->render('author/show.html.twig', [
    //         'name' => $name,
    //     ]);
    // }

    #[Route('/authorss', name: 'list_authors')]
    public function listAuthors(): Response
    {
        $authors = array(
            array('id' => 1, 'picture' => '/images/victor hugo.jpeg', 'username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com', 'nb_books' => 100,'age'=> 12),
            array('id' => 2, 'picture' => '/images/william shekspear.jpeg', 'username' => 'William Shakespeare', 'email' => 'william.shakespeare@gmail.com', 'nb_books' => 200,'age'=> 12),
            array('id' => 3, 'picture' => '/images/taha hussein.jpeg', 'username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300,'age'=> 12),
        );

        return $this->render('author/index.html.twig', [
            'authors' => $authors,
        ]);
    }
}
