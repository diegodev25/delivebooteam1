<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{

  protected $fillable = [
    'plate_name',
    'ingredients',
    'description',
    'price',
    'discount',
    'category_id',
  ];

  public function user(){
    return $this -> belongsTo(User::class);
  }

  public function category(){
    return $this -> belongsTo(Category::class);
  }

  public function orders(){
    return $this -> belongsToMany(Order::class);
  }
}
