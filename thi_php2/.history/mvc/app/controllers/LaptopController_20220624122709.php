<?php 
namespace App\Controllers;
use App\Models\Laptops;

class LaptopController extends BaseController{
    public function listLaptops(){
        $trains = Trains::all();
        $keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : "";
        if(empty($keyword)){
            $trains = Trains::all();
        }else{
            $trains = Trains::where('name', 'like', "%$keyword%")->get();
        }
        return $this->render('train.listTrain', compact('trains','keyword'));
    }



}



?>