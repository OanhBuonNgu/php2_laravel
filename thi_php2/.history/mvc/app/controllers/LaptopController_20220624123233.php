<?php 
namespace App\Controllers;
use App\Models\Laptops;

class LaptopController extends BaseController{
    public function listLaptops(){
        $laptops = Laptops::all();
        $keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : "";
        if(empty($keyword)){
            $laptops = Laptops::all();
        }else{
            $laptops = Laptops::where('name', 'like', "%$keyword%")->get();
        }
        return $this->render('laptop.listLaptop', compact('laptops','keyword'));
    }
    public function addLaptop(){
        $laptops = Laptops::all();
        return $this->render('laptop.addLaptop', compact('laptops'));
        
    }
    public function addNewLaptop(){
        
        $model = new Laptops();
        $model->fill($_POST);

        $model->save();
        header("location:" . BASE_URL . 'danh-sach-chuyen-tau');die;
    }



}



?>