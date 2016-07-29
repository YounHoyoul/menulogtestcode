<?php
namespace App\Http\Controllers;

use App\Repositories\EatOutInterface;

class MenuController extends Controller{
    
    private $repository = null;
    
    public function __construct(EatOutInterface $repository){
        $this->repository = $repository;
    }

    public function index($restaurant_id){
        $data = $this->repository->menuData($restaurant_id);
        return view('menu',$data);
    }

    public function api($restaurant_id){
        $data = $this->repository->menuData($restaurant_id);
        return view('api.menu',$data);
    }
}
