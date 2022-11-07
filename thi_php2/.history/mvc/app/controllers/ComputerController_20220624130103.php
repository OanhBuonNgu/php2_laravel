<?php 
namespace App\Controllers;

use App\Models\Computer_brands;



class ComputerController extends BaseController{
    public function listComputer(){
        $computer_brands = Computer_brands::all();
        $keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : "";
        if(empty($keyword)){
            $computer_brands = Computer_brands::all();
        }else{
            $computer_brands = Computer_brands::where('name', 'like', "%$keyword%")->get();
        }
        return $this->render('computer.listComputer', compact('computer_brands','keyword'));
    }
    public function addComputer(){
        $computer_brands = Computer_brands::all();
        return $this->render('computer_brands.addComputer', compact('computer+brand'));
    }
    public function addNewTrain(){
        
        $model = new Trains();
        $model->fill($_POST);

        $model->save();
        header("location:" . BASE_URL . 'danh-sach-chuyen-tau');die;
    }
    public function removeTrain($id){
        Trains::destroy($id);
        header("location:" . BASE_URL . 'danh-sach-chuyen-tau');die;
    }
    public function trainEditForm($id){
        $trains = Trains::find($id);
        $passengers = Passengers::all();
        return $this->render('train.editTrain', compact('passengers','trains'));
    }
    public function saveEditTrain($id){
        
        $trains = Trains::find($id);
        
        $trains->fill($_POST);
        $trains->save();
        header("location:" . BASE_URL . 'danh-sach-chuyen-tau');die;
    }
    


}



?>