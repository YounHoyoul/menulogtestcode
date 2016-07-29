<?php
namespace App\Http\Controllers;

use App\Repositories\EatOutInterface;

class RestaurantController extends Controller{
    
    private $repository = null;
    
    public function __construct(EatOutInterface $repository){
        $this->repository = $repository;
    }

    public function index($postcode=""){
        $data = $this->repository->listData($postcode);
        return view('restaurant',$data);
    }

    public function api($postcode){
        $data = $this->repository->listData($postcode);
        return view('api.restaurant',$data);
    }
}
