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
        // xử lý ảnh
        $filename = "";
        $avatarFile = $_FILES['image'];
        if($avatarFile['size'] > 0){
            $filename = uniqid() . '-' . $avatarFile['name'];
            move_uploaded_file($avatarFile['tmp_name'], './public/uploads/avatars/' . $filename);
            $filename = "public/uploads/avatars/" . $filename;
        }
        $model->image = $filename;
        $model->save();
        header("location:" . BASE_URL . 'danh-sach-lap-top');die;
    }
    public function removeLaptop($id){
        Laptops::destroy($id);
        header("location:" . BASE_URL . 'danh-sach-lap-top');die;
    }
    public function laptopEditForm($id){
        $laptops = Laptops::find($id);
        // $passengers = Passengers::all();
        return $this->render('train.editTrain', compact('laptops'));
    }
    public function saveEditLaptop($id){
        
        $laptops = Laptops::find($id);
        
        $laptops->fill($_POST);
        $laptops->save();
        header("location:" . BASE_URL . 'danh-sach-lap-top');die;
    }




}



?>