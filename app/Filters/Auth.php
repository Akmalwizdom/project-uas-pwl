<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to(base_url('/'));
        }

        if (!empty($arguments)) {
            $role = session()->get('role');
            
            // If user's role is not in the allowed roles list
            if (!in_array($role, $arguments)) {
                return redirect()->to(base_url('access-denied'));
            }
        }
        
        return;
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}