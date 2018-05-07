<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\offers;

class frontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = offers::getAlll();
        
        $articles_row = \App\article::get();
        $articles = [];
        foreach ($articles_row as $key_art => $value_article) {
            if($value_article['position_id']==1){
               $articles[1]= array('title'=>$value_article['title'],'article'=>$value_article['article']);
            }elseif ($value_article['position_id']==2) {
               $articles[2]= array('title'=>$value_article['title'],'article'=>$value_article['article']);
            }elseif ($value_article['position_id']==3) {
               $articles[3]= array('title'=>$value_article['title'],'article'=>$value_article['article']);
            }
            
        }
        $provider = \App\providers::listOfProviders();
        $features = \App\offerfeature::listOfeatures('all');
        return view('front.indexFront')
                ->with('offers',$offers)
                ->with('articles',$articles)
                ->with('provider',$provider)
//                ->with('features',$features)
                ;
        
    }
    public function allProviders() {
        
        $offers = offers::getAlll();
        $provider = \App\providers::listOfProviders($offers);
//        dd($provider);
        return view('front.AllProviders')
                ->with('provider',$provider) ;
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
        dd($id);
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
