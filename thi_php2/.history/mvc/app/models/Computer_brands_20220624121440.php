<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Passengers  extends Model{
    protected $table = "computer_brands";
    public $timestamps = false;

    protected $fillable = [
        'name','founding_year','logo','address','created_at','updated_at'
    ];

    public function laptops(){
        return $this->hasMany(\App\Models\Laptops::class, 'brand_id', 'id');
    }
}
?>