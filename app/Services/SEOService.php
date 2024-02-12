<?php
namespace App\Services;

use App\Models\MetaBox;

class SEOService{
    
    public function save($key, $value, $reference){
        
        $metaBox = MetaBox::query()->where('key', $key)->where('reference_id', $reference->id)->where('reference_type', get_class($reference))->first();
        if(!$metaBox){
            $metaBox = MetaBox::create([
                'key'          => $key,
                'value'        => $value,
                'reference_id' => $reference->id,
                'reference_type' => get_class($reference),
            ]);
        }else{
            $metaBox->update([
                'value' => $value,
            ]);
        }
        return $metaBox;
    }
}