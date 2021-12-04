<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Customer;
        $item->id = 1;
        $item->name = "Annette";
        $item->phone = "0123456789";
        $item->address = "133 Ly Thuong Kiet";
        $item->email = "annette@gmail.com";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Customer;
        $item->id = 2;
        $item->name = "Capheny";
        $item->phone = "0123456789";
        $item->address = "133 Ly Thuong Kiet";
        $item->email = "capheny@gmail.com";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Customer;
        $item->id = 3;
        $item->name = "Violet";
        $item->phone = "0123456789";
        $item->address = "133 Ly Thuong Kiet";
        $item->email = "violet@gmail.com";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Customer;
        $item->id = 4;
        $item->name = "Liliana";
        $item->phone = "0123456789";
        $item->address = "133 Ly Thuong Kiet";
        $item->email = "liliana@gmail.com";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Customer;
        $item->id = 5;
        $item->name = "Sephera";
        $item->phone = "0123456789";
        $item->address = "133 Ly Thuong Kiet";
        $item->email = "sephera@gmail.com";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Customer;
        $item->id = 6;
        $item->name = "Xeniel";
        $item->phone = "0123456789";
        $item->address = "133 Ly Thuong Kiet";
        $item->email = "xeniel@gmail.com";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
    }
}
