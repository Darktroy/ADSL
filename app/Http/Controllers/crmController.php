<?php

namespace App\Http\Controllers;

use Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\article;
use App\providers;
class crmController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*
         * get articles features offers providers
         */
        $user = Auth::user();
        
        $offers = \App\offers::where('active',1)->get();
        $articles = article::get();
        $provider = providers::listOfProviders();
        $features = \App\offerfeature::listOfeatures('all');
        
        return view('crm.index')->with('mainTitle','Dashboard')
                ->with('offers',$offers)
                ->with('articles',$articles)
                ->with('provider',$provider)
                ->with('features',$features);
//        return $request->all();
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
        //
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
    
    public function addArticle() {
        return view('crm.addArticle')->with('mainTitle','Add Article');
    }
    
    public function providerForm() {
        return view('crm.addprovider')->with('mainTitle','Add Provider');
    }

    public function offerForm() {
        $ProviderList = providers::listOfProviders();
        $offerFeaturelist = \App\offerfeature::listOfeatures();
        return view('crm.addoffer')->with('mainTitle','Add Offer')
                ->with('providersList',$ProviderList)
                ->with('featureList', $offerFeaturelist);
    }
    

    public function offerfeatureform() {
        return view('crm.addfeature')->with('mainTitle','Add Freature');
    }
    
    public function createArticle (Request $request) {
        $validator = Validator::make($request->all(), [
                'title' => 'required',
                'article' => 'required',
                'position_id' => 'required|int'

            ], [
                'title.required' => 'Title is required',
                'article.required' => 'Article is required',
                'position_id.required' => 'Position is required'

            ]);
        if ($validator->fails()) {
            return redirect('crm/add-article')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            article::create([
                'title' => $request->title,
                'article' => $request->article,
                'position_id' => $request->position_id,
//    'message' => 'A new comment.',
            ]);
            return redirect('crm');
        }
        
    }
    
    public function createProvider(Request $request) {
        // 'logo' ,'site_url',''
        $user = Auth::user();
        $validator = Validator::make($request->all(), [
                'name' => 'required',
                'site_url' => 'required',
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ], [
                'name.required' => 'Provider name is required',
                'site_url.required' => 'Site URL is required',
                'logo.required' => 'Logo is required'

            ]);
        if ($validator->fails()) {
                return redirect('crm/add-provider')->withErrors($validator)->withInput();
        }else{
                if ($request->hasFile('logo')) { //logo
                    $imageName = 'logo_'.$user->id.'_'.time().'.'.$request->logo->getClientOriginalExtension();
                    $request->logo->move(public_path('/logo'), $imageName);
                }
                providers::create([
                    'user_id' => $user->id,
                    'name' => $request->name,
                    'site_url' => $request->site_url,
                    'logo' => $imageName,
                ]);
                return redirect('crm');
        }
        
    }
    public function createOffer(Request $request) {

//        'active' ,'contract','title','subtitle','price','price_sub_title','offer_url','provider_id','user_id'      
//        dd($request->feature);
        $user = Auth::user();
        $validator = Validator::make($request->all(), [
                'title' => 'required',
                'price' => 'required|int',
                'provider_id' => 'required|int',

            ], [
                'title.required' => 'Offer Title is required',
                'price.required' => 'Offer Price is required',
                'provider_id.required' => 'Please select the provider if not listed add new first'

            ]);
        if ($validator->fails()) {
                return redirect('crm/add-offer')->withErrors($validator)->withInput();
        }else{
            $offer = \App\offers::creation($request->all(), $user->id);
            return redirect('crm');
        }
        
    }
   public function createFeature(Request $request) {
//        'image','description','devision','active'        
        $validator = Validator::make($request->all(), [
                'title' => 'required',
                'active' => 'required',
                'description' => 'required',
                'devision' => 'required|int',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ], [
                'title.required' => 'Please Feature title is required',
                'active.required' => 'Please select if feature active or not required',
                'description.required' => 'Feature description is required',
                'devision.required' => 'Please select the feature devision',
                'image.required' => 'Feature image is required',

            ]);
        if ($validator->fails()) {
                return redirect('crm/add-feature')->withErrors($validator)->withInput();
        }else{
            $offer = \App\offerfeature::creation($request->all(),$request['image']);
            return redirect('crm');
        }
        
    }
   
}
