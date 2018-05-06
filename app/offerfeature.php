<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class offerfeature extends Model
{
    protected $table = 'offer_feature';
    public $timestamps = false;
//    id	image	description	devision	active
    protected $fillable = [
        'title','image','description','devision','active'
    ];
    
    public static function creation($param,$file){
        if (isset($file)){ //logo
                    $imageName = 'fi_'.time().'.'.$file->getClientOriginalExtension();
                    $file->move(public_path('/featureimage'), $imageName);
                }
                Self::create([
                    'title' => $param['title'],
                    'active' => $param['active'],
                    'description' => $param['description'],
                    'devision' => $param['devision'],
                    'image' => $imageName,
                ]);
        
    }
    
    public static function listOfeatures($active = 1) {
        $featureList = [];
        
        if($active = 'all'){
            $offerfeaturesall = self::select('title','id','active')->get();
        }else{        
            $offerfeaturesall = self::where('active',1)->select('title','id','active')->get();
        }
        foreach ($offerfeaturesall as $key => $value) {
            $featureList[] = array(
                'id'=>$value['id'],'title'=>$value['title'],
                'active'=>$value['active']);
        }
        return $featureList;
    }
}
