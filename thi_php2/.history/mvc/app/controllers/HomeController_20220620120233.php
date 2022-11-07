<?php
namespace App\Controllers;
use App\Models\User;
use App\Models\Product;
use App\Models\Role;

class HomeController extends BaseController{

    public function demoLayout(){
        $this->render('layouts.main');
    }
    
}

?>