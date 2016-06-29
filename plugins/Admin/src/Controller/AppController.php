<?php

namespace Admin\Controller;

use App\Controller\AppController as BaseController;

class AppController extends BaseController
{
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        /*$this->loadComponent('Auth', [
            'loginAction' => [
                'plugin' => 'Admin',
                'controller' => 'Users',
                'action' => 'login'
            ],
            'loginRedirect' => [
                'plugin' => 'Admin',
                'controller' => 'Users',
                'action' => 'index',
            ],
            'logoutRedirect' => [
                'plugin' => 'Admin',
                'controller' => 'Users',
                'action' => 'login'
            ],
            'authenticate' => [
                'Form' => [
                    'userModel' => 'Users',
                    'fields' => [
                        'username' => 'user',
                        'password' => 'password'
                    ],
                    'scope' => [
                        'Users.enabled' => 1
                    ]
                ],
            ],
        ]);*/
    }

}
