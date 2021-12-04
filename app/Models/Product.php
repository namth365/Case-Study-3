<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    protected $fillable=[
        'name','slug','sold','price','description','status','image','category_id',
    ];
    protected $primaryKey='id';
    protected $table = 'products';
    public function category(){
        return $this->belongsTo('App\Models\Category','category_id','id');
  
}}