<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    function __construct()
    {
        helper(['form']);
    }

    public function login()
    {
        if ($this->request->getPost()) {

            
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $users = [
                'Admin' => ['password' => password_hash('123', PASSWORD_DEFAULT), 'role' => 'admin'],
                'Akmal' => ['password' => password_hash('121', PASSWORD_DEFAULT), 'role' => 'user']
            ];

            if (isset($users[$username])) {
                $dataUser = $users[$username];
                
                if (password_verify($password, $dataUser['password'])) {
                    session()->set([
                        'username' => $username,
                        'role' => $dataUser['role'],
                        'isLoggedIn' => TRUE
                    ]);

                    if ($dataUser['role'] == 'admin') {
                        return redirect()->to(base_url('/admin'));
                    } else {
                        return redirect()->to(base_url('/user'));
                    }
                } else {
                    session()->setFlashdata('failed', 'Password salah');
                    return redirect()->to(base_url('/'));
                }
            } else {
                session()->setFlashdata('failed', 'Username tidak ditemukan');
                return redirect()->to(base_url('/'));
            }
        } else {
            return view('auth/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}