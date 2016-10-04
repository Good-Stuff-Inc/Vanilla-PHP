<?php

namespace App\Controllers;

use App\Models\User;

class UsersController extends BaseController
{
    /**
     * @var User
     */
    protected $model;

    /**
     * UsersController constructor.
     *
     * @throws \ReflectionException
     */
    public function __construct()
    {
        parent::__construct();

        $this->model = new User();
    }

    /**
     * Show all users.
     */
    public function index()
    {
        $users = $this->model->selectAll();

        return view('users', compact('users'));
    }

    /**
     * Store a new user in the database.
     */
    public function store()
    {
        $this->model->insert(['name' => $_POST['name']]);

        return redirect('users');
    }
}
