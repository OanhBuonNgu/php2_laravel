<?php 
namespace App\Controllers;

use App\Models\Computer_brands;



class ComputerController extends BaseController{
    public function listComputer(){
        $computer_brands = Computer_brands::all();
        $keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : "";
        if(empty($keyword)){
            $computer_brands = Trains::all();
        }else{
            $trains = Trains::where('name', 'like', "%$keyword%")->get();
        }
        return $this->render('train.listTrain', compact('trains','keyword'));
    }
    public function addTrain(){
        $trains = Trains::all();
        return $this->render('train.addTrain', compact('trains'));
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