<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class providers extends Model
{
    protected $table = 'providers';
    public $timestamps = false;
     protected $fillable = [
        'name','logo' ,'site_url','user_id'
    ];
     
     public static function listOfProviders(){
        $providers_object = self::whereNull('deleted_at')->get();
        $provider = [];
        foreach ($providers_object as $key => $value) {
            $provider[] = array(
                    "id" => $value['id'],
                    "logo" => url("/logo/".$value['logo']),
                    "site_url" => $value['site_url'],
                    "name" => $value['name']);
                }
        return $provider;
    }
}
