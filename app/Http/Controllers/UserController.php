<?php

namespace App\Http\Controllers;

use App\User;
use Yajra\Datatables\Datatables;
class UserController extends Controller
{
    //
    public function  index()
    {
        return view('users');
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
