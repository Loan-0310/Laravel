<?php 
namespace App\Models; 

class category extends BaseModel
{
   protected $table = 'category'; 

   protected $fillable = ['name'];

   public function product(){
      return $this->hasMany(product::class, 'category_id', 'id'); 
   }
}
