<?php

namespace App\View\Components\Card;

use Illuminate\View\Component;

class Blog extends Component
{
    public $image;
    public $title;
    public $excerpt;
    public $url;
    public $author;
    public $createdAt;

    public function __construct($image, $title, $excerpt, $url, $author, $createdAt)
    {
        $this->image = $image;
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->url = $url;
        $this->author = $author;
        $this->createdAt = $createdAt;
    }

    public function render()
    {
        return view('components.card.blog');
    }
}
