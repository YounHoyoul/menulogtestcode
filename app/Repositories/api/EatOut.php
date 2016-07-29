<?php
namespace App\Repositories\Api;

use App\Repositories\EatOutInterface;

class EatOut implements EatOutInterface{
    private $headers;
    private $client;

    const URL_RESTAURANT = 'https://public.je-apis.com/restaurants?q=';
    const URL_MENU       = 'https://public.je-apis.com/restaurants/:restaurant_id/menus'; 
    const URL_CATEGORY   = 'https://public.je-apis.com/menus/:menu_id/productcategories';
    const URL_PRODUCT    = 'https://public.je-apis.com/menus/:menu_id/productcategories/:category_id/products';

    public function __construct(\GuzzleHttp\Client $client){
        $this->client = $client;
        $this->headers = ["Accept-Tenant" =>  "uk",
                          "Accept-Language" =>  "en-GB",
                          "Accept-Charset" =>  "utf-8",
                          "Authorization" =>  "Basic VGVjaFRlc3RBUEk6dXNlcjI=",
                          "Host" =>  "public.je-apis.com"]; 
    }
    public function listData($postcode){
        if(null == $postcode || empty($postcode)){
            return [
               "postcode" => "",
               "data" => [],
               "statusCode" => "200",
               "message" => ""
            ];
        }

        $res = $this->client->request('GET',self::URL_RESTAURANT.$postcode,[ 'headers' => $this->headers ]);
        $statusCode = $res->getStatusCode();
        $data = collect([]);
        if("200" == $statusCode){
            $collection = collect(json_decode($res->getBody(),true)['Restaurants']);
            $data = $collection->sortByDesc('RatingAverage');
        }

        return [
            "postcode"=>$postcode,
            "data" => $data->values()->all(),
            "statusCode" => $statusCode,
            "message" => $statusCode != "200" ? "Woops Something Wrong": "" 
        ];
    }

    public function menuData($restaurant_id){
        if(null == $restaurant_id || empty($restaurant_id)){
            return [];
        }

        $url = str_replace(':restaurant_id',$restaurant_id,self::URL_MENU);
        $res = $this->client->request('GET',$url,[ 'headers' => $this->headers ]);
        $statusCode = $res->getStatusCode();
        $data = [];
        if("200" == $statusCode){
            foreach(json_decode($res->getBody(),true)['Menus'] as $menu){
                $url = str_replace(':menu_id',$menu["Id"],self::URL_CATEGORY);
                $res = $this->client->request('GET',$url,[ 'headers' => $this->headers ]);
                $statusCode = $res->getStatusCode();
                $hasError = false;
                if("200" == $statusCode){
                    $categories = [];
                    foreach(json_decode($res->getBody(),true)['Categories'] as $category){
                        $url = str_replace(':category_id',$category["Id"], str_replace(':menu_id',$menu["Id"],self::URL_PRODUCT));
                        $res = $this->client->request('GET',$url,[ 'headers' => $this->headers ]);
                        $statusCode = $res->getStatusCode();
                        if("200" == $statusCode){
                            $category["Products"] = json_decode($res->getBody(),true)['Products'];
                            $categories[] = $category;
                        }else{
                            $hasError = true;
                            break;
                        }
                    }
                    if($hasError){
                        break;
                    }
                    $menu['Categories'] = $categories;
                    $data[] = $menu;
                }else{
                    break; 
                }
            }
        }

        if("200" != $statusCode){
            $data = [];
        }
        
        return [
            "restaurantid" => $restaurant_id,
            "data" => $data,
            "statusCode" => $statusCode,
            "message" => $statusCode != "200" ? "Woops Something Wrong": "" 
        ]; 
    }
    
}
