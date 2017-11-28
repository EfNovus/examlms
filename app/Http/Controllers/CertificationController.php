<?php

namespace App\Http\Controllers;

use App\Certification;
use App\Repositories\Topic\TopicRepositoryContract;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables
    ;

class CertificationController extends Controller
{
    const RESOURCE_PATH = 'certification';

    protected  $topics_repo;

    /**
     * @param TopicRepositoryContract $topics
     */
    public function __construct(TopicRepositoryContract $topics)
    {
        $this->topics_repo = $topics;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $js_assets [] = 'build/js/custom.min.js';
        $js_assets [] = 'vendors/jquery.tagsinput/src/jquery.tagsinput.js';

        $topics_array = $this->topics_repo->istAllTopics();
        return view(self::RESOURCE_PATH.'.'.__FUNCTION__,
            compact('js_assets','topics'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topics = $this->topics_repo->listAllTopics();
        return view(self::RESOURCE_PATH.'.'.__FUNCTION__,
            compact('topics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function show(Certification $certification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function edit(Certification $certification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certification $certification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certification $certification)
    {
        //
    }


}
