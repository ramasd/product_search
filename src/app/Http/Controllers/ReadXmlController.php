<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReadXmlController extends Controller
{
    public function index(Request $request)
    {
        if($request->isMethod("POST")){
            $url = "https://www.bite.lt/bite-commerce/product-adform.xml";
            $xmlDataString = file_get_contents($url);
            $xmlObject = simplexml_load_string($xmlDataString);

            $json = json_encode($xmlObject);
            $phpDataArray = json_decode($json, true);

            if(count($phpDataArray['product']) > 0){

                $dataArray = array();

                foreach($phpDataArray['product'] as $data) {

                    $dataArray[] = [
                        'product_id' => empty($data['product_id']) ? null : $data['product_id'],
                        "name" => empty($data['product_name']) ? null : $data['product_name'],
                        "category_id" => empty($data['product_category_id']) ? null : $data['product_category_id'],
                        "deeplink" => empty($data['product_deeplink']) ? null : $data['product_deeplink'],
                        "image" => empty($data['product_image']) ? null : $data['product_image'],
                        "price" => empty($data['product_price']) ? null : $data['product_price'],
                        "sale_price" => empty($data['sale_price']) ? null : $data['sale_price'],
                        "on_sale" => !($data['on_sale'] == "no"),
                        "monthly_price" => empty($data['monthly_price']) ? null : $data['monthly_price'],
                        "monthly_special_price" => empty($data['monthly_special_price']) ? null : $data['monthly_special_price']
                    ];
                }

//                DB::transaction(function () use ($dataArray) {
                    Product::truncate();
                    Product::insert($dataArray);
//                });

                return back()->with('success','Data saved successfully!');
            }
        }

        return view("xml-data");
    }

}
