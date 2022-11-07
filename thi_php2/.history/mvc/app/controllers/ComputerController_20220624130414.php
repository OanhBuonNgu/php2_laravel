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
        return $this->render('computer.addComputer', compact('computer_brands'));
    }
    public function addComputer(){
        
        $model = new Computer_brands();
        $model->fill($_POST);

        $model->save();
        header("location:" . BASE_URL . 'danh-sach-cpt');die;
    }
    public function removeComputer($id){
        Computer_brands::destroy($id);
        header("location:" . BASE_URL . 'danh-sach-cpt');die;
    }
    public function computerEditForm($id){
        $computer_brands = Computer_brands::find($id);
        return $this->render('computer.editComputer', compact('computer_brands'));
    }
    public function saveEditComputer($id){
        
        $computer_brands = Computer_brands::find($id);
        
        $computer_brands->fill($_POST);
        $computer_brands->save();
        header("location:" . BASE_URL . 'danh-sach-cpt');die;
    }
    


}



?>