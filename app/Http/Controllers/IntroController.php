<?php

namespace App\Http\Controllers;

use App\Intro;
use Illuminate\Http\Request;

class IntroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $Intro = Intro::all();
          return view('index', compact('Intro'));
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Intro  $intro
     * @return \Illuminate\Http\Response
     */
    public function show(Intro $intro)
    {
      $Intro = Intro::all();
      return view('backoffice.introList',compact('Intro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Intro  $intro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Intro = Intro::find($id);
        return view('backoffice/introEdit', compact('Intro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Intro  $intro
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
         $Intro = Intro::find($id);
         $Intro->imageName=request('imageName');
         $Intro->img_path=request('image');
         $Intro->save();
         return redirect()->route('main');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Intro  $intro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Intro::where('id',$id)->delete();
        return redirect()->back();
    }
}
