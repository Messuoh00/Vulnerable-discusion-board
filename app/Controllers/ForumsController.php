<?php

namespace App\Controllers;
use App\Models\ThreadsModel;
use App\Models\CommentsModel;

class ForumsController extends BaseController
{
    // GET: /blog
    public function index(){
        $threads = new ThreadsModel();
        $threads = $threads->orderBy('created', 'desc')->findAll();

        $context = [
            'session' => $this->session,
            'posts' => $threads
        ];

        return view('forums', $context);
    }

    // GET: /blog/:id
    public function post($id){
        $threads = new ThreadsModel();
        $post = $threads->where('id', $id)->orderBy('threads.created', 'desc')->join('users', 'threads.author=users.username')->first();
        $replies = new CommentsModel();
        $replies = $replies->where('thread', $id)->orderBy('comments.created', 'desc')->join('users', 'comments.author=users.username')->findAll();

        $post['replies'] = $replies;
        
        $context = [
            'session' => $this->session,
            'post' => $post
        ];

        return view('forum_post', $context);
    }

    public function createIndex(){
        $context = [
            'session' => $this->session,
        ];

        return view('create_post', $context);
    }

    public function create(){
        $data = [
            'author' => $this->session['username'],
            'title' => $this->request->getPost('title'),
            'type' => $this->request->getPost('type'),
            'content' => $this->request->getPost('content'),
        ];

        $threadModel = new ThreadsModel();
        $threadModel->insert($data);

        return redirect()->back();
    }

    public function comment($id){
        $data = [
            'thread' => $id,
            'author' => $this->session->get('username'),
            'content' => $this->request->getPost('comment'),
        ];

        $comments = new CommentsModel();
        $comments->insert($data);

        return json_encode(['success'=> 1]);
    }
}
