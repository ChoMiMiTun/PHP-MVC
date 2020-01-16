<?php

namespace App\controller;

use App\model\post;

class PostController
{

    private $post;

    public function __construct()
    {

        $this->post = new Post();
    }

    public function index()
    {

        $title = 'All posts';
        // All Posts
        // $post = $this->post->all();
        // return view('posts/index', compact('title', 'posts'));

        // All posts by pagination
        $start = $_GET['start'] ?? 0;
        $count = 5;
        $posts = $this->post->paginate($start, $count);
        $total = $this->post->count();

        return view('post/index', compact('title', 'posts', 'start', 'total', 'count'));
    }

    public function show($id)
    {
        $post = $this->post->find($id);
        $title = $post['title'];
        return view('post/show', compact('post', 'title'));
    }

    public function create()
    {
        $title = 'Create Post';
        return view('post/create', compact('title'));
    }

    public function store()
    {
        $title = $_POST['title'] ?? '';
        $content = $_POST['content'] ?? '';

        if ($title && $content) {
            $result = $this->post->create($title, $content);
            if ($result) {
                session_set('success', 'Post created.');
                return redirect('post');
            }
        }
        session_set('fail', 'The title and content field is required.');
        return redirect('post/create');
    }

    public function edit($id)
    {
        $title = "Edit Post";
        $post = $this->post->find($id);

        return view('post/edit', compact('title', 'post'));
    }

    public function update()
    {
        $id = $_POST['id'] ?? '';
        $title = $_POST['title'] ?? '';
        $content = $_POST['content'] ?? '';

        if ($title && $content) {
            $result = $this->post->update($title, $content, $id);
            if ($result) {
                session_set('success', 'Post updated.');
                return redirect('post');
            }
        }

        session_set('fail', 'The title and content field is required.');
        return redirect('post/edit');
    }

    public function delete($id)
    {
        $result = $this->post->delete($id);
        if ($result) {
            session_set('success', 'Post deleted.');
            return redirect('post');
        }
        session_set('fail', 'The title and content field is required.');
        return redirect('post');
    }

    public function generate()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 34; $i++) {
            // $this->post-create($faker->name, $faker->text(600));
            $this->post->create($faker->text(10), $faker->text(500));
        }

        session_set('success', 'post created.');
        return redirect('post');
    }
}
