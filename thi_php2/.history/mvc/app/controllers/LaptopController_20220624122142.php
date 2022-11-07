<?php 
namespace App\Controllers;
use App\Models\Laptops;

class LaptopsController extends BaseController{
    public function addLaptop(){
        $laptops = Laptops::all();
        return $this->render(laptop.addLaptop)
    }



}



?>