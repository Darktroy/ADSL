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
        
        $articles = \App\article::get();
         /*dd($articles);
       
         * Collection {#255 ▼
  #items: array:3 [▼
    0 => article {#264 ▼
      #table: "article"
      +timestamps: false
      #fillable: array:3 [▶]
      #connection: "mysql"
      #primaryKey: "id"
      #keyType: "int"
      +incrementing: true
      #with: []
      #withCount: []
      #perPage: 15
      +exists: true
      +wasRecentlyCreated: false
      #attributes: array:4 [▼
        "article_id" => 1
        "position_id" => 2
        "article" => "body 1&nbsp;"
        "title" => "title 1"
      ]
         */
        $provider = \App\providers::listOfProviders();
        $features = \App\offerfeature::listOfeatures('all');
        
        return view('front.indexFront')
                ->with('offers',$offers)
                ->with('articles',$articles)
                ->with('provider',$provider)
//                ->with('features',$features)
                ;
        
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
