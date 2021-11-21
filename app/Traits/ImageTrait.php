<?php

namespace App\Traits;

trait ImageTrait
{
    public function image($params, $request, $yoli, $product = null)
    {
        // dd($request->image);
        if ($request->hasFile('image')) {
            if ($product) {
                if (isset($product->image)){
                        // dd($request);
                        unlink('storage/'.$yoli .'/'. $product->image);
                    }
                }
                $imageName = time() . '.' . $request->image->extension();
                $request->image->storeAs('public/'.$yoli, $imageName);
                $params['image'] ='storage/'.$yoli.$imageName;

        }


        if ($request->hasFile('images')) {
            if ($product) {
                if ($product->images) {
                    $i = explode(',', $product->images);
                    foreach ($i as $item) {
                        unlink('storage/'.$yoli .'/'. $item);
                    }
                }
            }
            $imageNames = [];
            foreach ($request->images as $key => $item) {
                $imageName = time() . '_' . $key . '.' . $item->extension();
                $item->storeAs('public/'.$yoli, $imageName);
                $imageNames[] = 'storage/'.$yoli.$imageName;
            }

            $imageString = implode(',', $imageNames);
            $params['images'] = $imageString;
            // dd($params);
        }

        return $params;
    }
}
