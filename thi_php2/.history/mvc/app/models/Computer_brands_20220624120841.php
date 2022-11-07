<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Passengers  extends Model{
    protected $table = "passengers";
    public $timestamps = false;

    protected $fillable = [
        'name','train_id','avatar','birth_date','gender','phone','created_at','updated_at'
    ];

    public function trains(){
        return $this->hasMany(\App\Models\Trains::class, 'train_id', 'id');
    }
}
?>