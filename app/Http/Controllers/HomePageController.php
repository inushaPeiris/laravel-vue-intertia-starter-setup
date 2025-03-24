<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Http\Controllers\UserController;

class HomePageController extends Controller
{
    public function index(UserController $userController)
    {
        return Inertia::render('Home', [
            'users' => $userController->index(),
        ]);
    }
}
