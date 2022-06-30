<?php

use App\Author;
use App\Category;
use App\Post;

class Blog
{
    public function getArticle()
    {
        $author = new Author("José Artigas");
        $category = new Category("PHP", "Lenguaje de Programación");
        $post = new Post();

        $post->setTitle("Curso");
        $post->setContent("Lorem fsdf fsd fsd f sdf sdf sdf");
        $post->setAuthor($author);
        $post->setCategory($category);

        return $post->printArticle();
    }
}

$blog = new Blog;
var_dump($blog->getArticle());

?>