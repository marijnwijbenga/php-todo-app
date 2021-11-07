<?php

class post
{
    public $title;
    public $published;

    public function __construct($title, $published) {
        $this->title = $title;
        $this->published = $published;
    }

}

$posts = [
    new Post('My First post', true),
    new Post('My Second post', true),
    new Post('My Third post', true),
    new Post('My Fourth post', false),
];

//var_dump($posts);

$unpublishedPosts = array_filter($posts, function ($post) {
    return ! $post->published;
});

//var_dump($unpublishedPosts);
$modified = array_map(function ($post) {
    $post->published = true;
    return $post;
}, $posts);

//var_dump($modified);

$titles = array_column($posts, 'title');

var_dump($titles);