<?php
namespace App\Repositories;

interface EatOutInterface{
   public function listData($postcode);
   public function menuData($restaurant_id);
}
