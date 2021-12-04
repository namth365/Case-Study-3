<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
   public $items;
   public $totalPrice;
   public $totalQty;

   public function __construct($oldCart)
   {
       if ($oldCart) {
           $this->items = $oldCart->items;
           $this->totalPrice = $oldCart->totalPrice;
           $this->totalQty = $oldCart->totalQty;
       }
   }

   public function add($product)
   {
       $productStore = [
           "item" => $product,
           "totalQty" => 0,
           "totalPrice" => 0
       ];

       //kiem tra san pham mua co ton tai trong gio hang hay khong?

       if ($this->items) {
           if (array_key_exists($product->id, $this->items)) {
               $productStore = $this->items[$product->id];
           }
       }
       $productStore['totalQty']++;
       $productStore['totalPrice']+= $product->price;
       $this->items[$product->id] = $productStore;
       $this->totalQty++;
       $this->totalPrice += $product->price;
   }
   public function deleteProduct($product) {
    $totalQty = $this->items[$product->id]['totalQty'];
    $totalPrice = $this->items[$product->id]['totalPrice'];
    unset($this->items[$product->id]);
    $this->totalPrice -= $totalPrice;
    $this->totalQty-= $totalQty ;
}
}