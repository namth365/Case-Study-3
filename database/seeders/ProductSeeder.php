<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Product;
        $item->id = 1;
        $item->name = "Luyện thi tiếng Anh";
        $item->slug = "luyen-thi-tieng-anh";
        $item->sold = 0;
        $item->price = 206900;
        $item->description = "tiếng Anh";
        $item->status = 0;
        $item->image = "default.jpg";
        $item->category_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = 2;
        $item->name = "Luyện thi tiếng Nhật";
        $item->slug = "luyen-thi-tieng-nhat";
        $item->sold = 0;
        $item->price = 206900;
        $item->description = "tiếng Nhật";
        $item->status = 0;
        $item->image = "default.jpg";
        $item->category_id = 2;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = 3;
        $item->name = "Luyện thi tiếng Trung";
        $item->slug = "luyen-thi-tieng-trung";
        $item->sold = 0;
        $item->price = 206900;
        $item->description = "tiếng Trung";
        $item->status = 0;
        $item->image = "default.jpg";
        $item->category_id = 3;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = 4;
        $item->name = "Luyện thi tiếng Hàn";
        $item->slug = "luyen-thi-tieng-hàn";
        $item->sold = 0;
        $item->price = 206900;
        $item->description = "tiếng Hàn";
        $item->status = 0;
        $item->image = "default.jpg";
        $item->category_id = 4;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = 5;
        $item->name = "Tiếng chim hót trong bụi mận gai";
        $item->slug = "tieng-chim-hot-trong-bui-man-gai";
        $item->sold = 0;
        $item->price = 206900;
        $item->description = "truyện";
        $item->status = 0;
        $item->image = "default.jpg";
        $item->category_id = 5;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = 6;
        $item->name = "Tam Quốc Diễn Nghĩa";
        $item->slug = "tam-quoc-dien-nghia";
        $item->sold = 0;
        $item->price = 206900;
        $item->description = "lịch sử";
        $item->status = 0;
        $item->image = "default.jpg";
        $item->category_id = 6;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = 7;
        $item->name = "Dạy con làm giàu";
        $item->slug = "day-con-lam-giau";
        $item->sold = 0;
        $item->price = 206900;
        $item->description = "tiếng kinh tế";
        $item->status = 0;
        $item->image = "default.jpg";
        $item->category_id = 7;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = 8;
        $item->name = "Kỹ thuật trồng cây";
        $item->slug = "ky-thuat-trong-cay";
        $item->sold = 0;
        $item->price = 206900;
        $item->description = "Nông nghiệp";
        $item->status = 0;
        $item->image = "default.jpg";
        $item->category_id = 8;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Product;
        $item->id = 9;
        $item->name = "Luyện thi tiếng Anh 2";
        $item->slug = "luyen-thi-tieng-anh2";
        $item->sold = 0;
        $item->price = 206900;
        $item->description = "tiếng Anh";
        $item->status = 0;
        $item->image = "default.jpg";
        $item->category_id = 1;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
    }
}
