<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Passengers  extends Model{
    protected $table = "computer_brands";
    public $timestamps = false;

    protected $fillable = [
        'name','image','brand_id','detail','price','created_at','updated_at'
    ];

    public function trains(){
        return $this->hasMany(\App\Models\Trains::class, 'train_id', 'id');
    }
}
?>