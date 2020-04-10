<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $Testimonial = Testimonial::all();
         $Testimonial = Testimonial::take(4)->get();
        
        return view('index', compact('Testimonial'));
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
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        $Testimonial =Testimonial::all();
        return view('backoffice.testimonialList',compact('Testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Testimonial = Testimonial::find($id);
        return view('backoffice.testimonialEdit',compact('Testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $Testimonial =Testimonial::find($id);
        $Testimonial->name=request('name');
        $Testimonial->factoryName=request('fName');
        $Testimonial->img=request('image');
        $Testimonial->text=request('text');
        $Testimonial->save();
         return redirect()->route('main');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testimonial::where('id',$id)->delete();
        return redirect()->route('main');
    }
}
