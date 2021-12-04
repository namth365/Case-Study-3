<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Order;
        $item->id = 1;
        $item->code = "GIAMGIA1";
        $item->customer_id = 1;
        $item->payment_method = "Cash";
        $item->total_price = 10000;
        $item->status = 0;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Order;
        $item->id = 2;
        $item->code = "GIAMGIA2";
        $item->customer_id = 2;
        $item->payment_method = "Cash";
        $item->total_price = 10000;
        $item->status = 0;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
    }
}
