<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public $timestamps = FALSE;
    protected $fillable=[
        'name','slug','description','status',
    ];
    protected $primaryKey='id';
    public function product_detail(){
        return $this->Hasmany('App\Models\Product');
    }
}
