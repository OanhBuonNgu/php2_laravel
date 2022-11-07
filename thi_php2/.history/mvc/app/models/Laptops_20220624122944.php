<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Laptops  extends Model{
    protected $table = "laptops";
    public $timestamps = false;

    protected $fillable = [
        'name','image','brand_id','detail','price','created_at','updated_at'
    ];

    public function computer_brands(){
        return $this->belongsTo(\App\Models\Computer_brands::class, 'brand_id', 'id');
    }
}
?>