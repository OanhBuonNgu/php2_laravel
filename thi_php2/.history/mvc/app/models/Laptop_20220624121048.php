<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Passengers  extends Model{
    protected $table = "laptops";
    public $timestamps = false;

    protected $fillable = [
        'name','image','brand_id','detail','price','created_at','updated_at'
    ];

    public function laptops(){
        return $this->belongsTo(\App\Models\Trains::class, 'train_id', 'id');
    }
}
?>