<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Http\Controllers\UserController;

class LoginPageController extends Controller
{
    public function index(UserController $userController)
    {
        return Inertia::render('Login', [
            'users' => $userController->index(),
        ]);
    }
}
