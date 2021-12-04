<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Customer;
use App\Models\Order_Detail;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id','id'); 
    }

    public function order_details(){
        return $this->hasMany(Order_Detail::class,'order_id','id');
    }

}
