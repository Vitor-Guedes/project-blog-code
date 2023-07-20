<?php

namespace BlogCodar\Controllers;

class BlogController
{
    public function index()
    {
        require_once(BASE_DIR . '/data/posts.php');

        return view('index', [
            'posts' => $posts ?? []
        ]);
    }

    public function get(int $id)
    {
        require_once(BASE_DIR . '/data/posts.php');
        require_once(BASE_DIR . '/data/categories.php');

        foreach ($posts as $post) {
            if ($post['id'] == $id) {
                return view('post', [
                    'post' => $post,
                    'categories' => $categories
                ]);
            }
        }
        return view('post', ['post' => [], 'categories' => []]);
    }

    public function categoryList()
    {
        require_once(BASE_DIR . '/data/categories.php');
        return view('categories', ['categories' => $categories]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}