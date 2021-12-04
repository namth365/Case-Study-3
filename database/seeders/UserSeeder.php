<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new User;
        $item->id = 1;
        $item->name = "Annette";
        $item->email = "annet@gmail.com";
        $item->password = "1";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new User;
        $item->id = 2;
        $item->name = "Capheny";
        $item->email = "caphe@gmail.com";
        $item->password = "1";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new User;
        $item->id = 3;
        $item->name = "Violet";
        $item->email = "vio@gmail.com";
        $item->password = "1";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new User;
        $item->id = 4;
        $item->name = "Liliana";
        $item->email = "lili@gmail.com";
        $item->password = "1";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new User;
        $item->id = 5;
        $item->name = "Sephera";
        $item->email = "sep@gmail.com";
        $item->password = "1";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new User;
        $item->id = 6;
        $item->name = "Xeniel";
        $item->email = "xeniel@gmail.com";
        $item->password = "1";
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
      
    }
}
