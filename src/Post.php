<?php

namespace App;

class Post
{
    private $title;
    private $content;
    private $author;
    private $category;

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function setAuthor(Author $author)
    {
        $this->author = $author;
    }

    public function setCategory(Category $category)
    {
        $this->category = $category;
    }

    public function printArticle()
    {
        return [
            "title" => $this->title,
            "content" => $this->content,
            "author" => $this->author,
            "category" => $this->category,
        ];
    }


}