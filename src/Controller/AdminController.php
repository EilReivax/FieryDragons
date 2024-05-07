<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;

class AdminController extends Controller
{
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Flash');
        $this->loadComponent('Authentication.Authentication');
        $this->viewBuilder()->setLayout('admin');
    }

    public function index() {

    }
}
