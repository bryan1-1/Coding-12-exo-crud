<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Intro;
use App\Portfolio;
use App\Testimonial;
use App\Team;

class AllController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Service = Service::all();
        $Intro = Intro::all();
        $Portfolio = Portfolio::all();
        $Testimonial = Testimonial::take(4)->get();
        $Team = Team::all();
        return view('index',compact('Team','Service','Intro','Portfolio','Testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Service = Service::all();
        $Intro = Intro::all();
        $Portfolio = Portfolio::all();
        $Testimonial = Testimonial::all();
        $Team = Team::all();
        return view('index',compact('Team','Service','Intro','Portfolio','Testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
