<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\offerfeature;
class offertofeature extends Model
{
    protected $table = 'offer_to_feature';
    public $timestamps = false;
    protected $fillable = [
        'offer_id','offer_feature_id'
    ];
    public function featureEntity() {
        return $this->hasOne('App\offerfeature', 'id', 'offer_feature_id');
//        return $this->hasOne('App\offerfeature',  'offer_feature_id');
    }
}
