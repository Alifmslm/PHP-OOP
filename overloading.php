<?php

class PostRepository {

public function getLatestPost() {

        $posts = [
        [
        'id' => 1,
        'title' => 'Judul Pertama',
        'content' => 'Contoh Content Pertama',
        ],
        [
        'id' => 2,
        'title' => 'Judul Kedua',
        'content' => 'Contoh Content Kedua',
        ],
        [
        'id' => 3,
        'title' => 'Judul Ketiga',
        'content' => 'Contoh Content Ketiga',
        ],
        ];
        return $posts;
    }

}

class ShufflePostRepository extends PostRepository {

    public function getLatestPost() {
        $post = parent::getLatestPost();
        shuffle($post);
        
        return $post;
    }

}

$postRepository = new PostRepository();
print_r($postRepository->getLatestPost());
$suffledPostRepository = new ShufflePostRepository();
print_r($suffledPostRepository->getLatestPost());
