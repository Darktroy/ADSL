<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\offertofeature;
use App\providers;

class offers extends Model
{
    protected $table = 'offers';
    public $timestamps = false;
//    `active` ,`contract`,`title`,`subtitle`,`price`,`price_sub_title`,`offer_url`,`provider_id`,`user_id`
    
    protected $fillable = [
        'active' ,'contract','title','subtitle','price','price_sub_title','offer_url','provider_id','user_id'
    ];
    
    public function features() {
        return $this->hasMany('App\offertofeature', 'offer_id', 'offer_id');
    }
    
    public function provider() {
        return $this->hasOne('App\providers', 'id', 'provider_id');
    }
    
    static public function creation($param,$user_id) {
        
        $offer = self::create(array(
            'active'=> isset($param['active'])? 1:0,
            'contract'=> isset($param['contract'])? 1:0,
            'title'=> isset($param['title'])? $param['title']:'',
            'subtitle'=> isset($param['subtitle'])? $param['subtitle']:'',
            'provider_id'=> $param['provider_id'],
            'price'=>  $param['price'],
            'price_sub_title'=> isset($param['price_sub_title'])? $param['price_sub_title']:'',
            'offer_url'=> isset($param['offer_url'])? $param['offer_url']:'',
            'user_id'=>$user_id,
        ));
        foreach ($param['feature'] as $key => $value) {
//        'offer_id','offer_feature_id'
            offertofeature::create(array('offer_id'=>$offer->id,'offer_feature_id'=>$value));
        }
    }
    
    public static function getAlll() {
//        $offers_data = self::where('active',1)->with('features')->with('features.featureEntity')->get();
        $offers_data = self::where('active',1)->with('features.featureEntity')->with('provider')->get();
        $offers = [];
        foreach ($offers_data as $key => $value) {
            $features = array();
            foreach ($value->features as $key_feature => $value_feature) {
                /*
                var_dump($value_feature);
                original: array:6 [▼
                    "id" => 2
                    "title" => "yt2"
                    "image" => "fi_1523788618.jpg"
                    "description" => "iuiore"
                    "devision" => 1
                    "active" => 1
                  ]
                    */
                $features[]=array("id" => $value_feature->featureEntity['id'],
                                    "title" => $value_feature->featureEntity['title'],
                                    "image" => url('/featureimage/'.$value_feature->featureEntity['image']),
                                    "active" => $value_feature->featureEntity['active']);
            }
//            $offers = new \stdClass();
            $offers[] = array(
                    "offer_id" => $value["offer_id"],
                    "provider_id" => $value["provider_id"],
                    "provider_logo" => url('/logo/'.$value->provider->logo),
                    "active" => $value["active"],
                    "contract" => $value["contract"],
                    "title" => $value["title"],
                    "subtitle" => $value["subtitle"],
                    "price" => $value["price"],
                    "price_sub_title" => $value["price_sub_title"],
                    "offer_url" => $value["offer_url"],
                    "feature" => $features,
            );
        }
        return $offers;
    }
}
