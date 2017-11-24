<?php
/**
 * Created by PhpStorm.
 * User: novase
 * Date: 21/11/2017
 * Time: 10:28 πμ
 */

namespace App\Controller;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    /**
     *  DashboardController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Main dashboard page
     */
    public function index()
    {

        $js_asssets = [
            ''
        ];
    }

}