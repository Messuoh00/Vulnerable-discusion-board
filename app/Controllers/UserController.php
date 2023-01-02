<?php

namespace App\Controllers;

use App\Models\ThreadsModel;
use App\Models\UsersModel;

class UserController extends BaseController
{

    // GET: /login
    public function loginIndex(){
        $context = [
            'session' => $this->session,
        ];
        return view('login', $context);
    }
    // GET: /register
    public function registerIndex(){
        $context = [
            'session' => $this->session,
        ];
        return view('register', $context);
    }
    // GET: /profile/:id
    public function profile($username){
        $user = new UsersModel();
        $user = $user->where('username', $username)->first();

        $posts = new ThreadsModel();
        $posts = $posts->where('author', $username)->findAll();
        
        $context = [
            'info' => $user,
            'posts' => $posts,
            'session' => $this->session,
        ];
        return view('profile', $context);
    }
    // POST: /logout
    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('');
    }


    // POST: /logout
    public function updateinfo()
    {
        $usermodel = new UsersModel();

        $data = [
           
           
            'bio' =>  $this->request->getPost('bio'),
        ];

        $usermodel= $usermodel->update( $this->request->getPost('username'),$data);


        
       
        return redirect()->back();
    }





    // POST: /login
    public function login()
    {
        $usermodel = new UsersModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $result = $usermodel->where('username', $username)->first();
        
        if ($result == null || !password_verify($password, $result['password'])) {
            return redirect()->to('/login');
        }

        $this->session->set(['username' => $result['username']]);

        return redirect()->to('/');
    }
    // POST: /register
    public function register()
    {
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        $usermodel = new UsersModel();
        $usermodel->insert($data);
        return  redirect()->to('/');
    }
}
