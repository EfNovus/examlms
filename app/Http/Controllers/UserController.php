<?php

namespace App\Http\Controllers;

use App\User;
use Kris\LaravelFormBuilder\Form;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('users');
    }

    public function store()
    {
        $title = "Create user";
        return view('user.create',  ['title' => $title]);
    }

    //

    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('user.index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(User::query())->make(true);
    }

}
