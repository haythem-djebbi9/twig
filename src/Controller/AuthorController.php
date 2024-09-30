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

    #[Route('/author/{id}', name: 'list_authors')]
    public function authorDetails(int $id): Response
{
    $authors = [
        1 => ['id' => 1, 'picture' => '/images/victor hugo.jpeg', 'username' => 'Victor Hugo', 'email' => 'victor.hugo@gmail.com', 'nb_books' => 100],
        2 => ['id' => 2, 'picture' => '/images/williamshekspear.jpeg', 'username' => 'William Shakespeare', 'email' => 'william.shakespeare@gmail.com', 'nb_books' => 200],
        3 => ['id' => 3, 'picture' => '/images/taha hussein.jpge', 'username' => 'Taha Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300],
    ];

    if (!isset($authors[$id])) {
        throw $this->createNotFoundException('Author not found');
    }

    $author = $authors[$id];

    return $this->render('author/list.html.twig', [
        'author' => $author,
    ]);
}
}