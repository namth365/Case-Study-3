<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Category;
        $item->id = 1;
        $item->name = "Ngoại Ngữ Tiếng Anh";
        $item->slug = "ngoai-ngu-tieng-anh";
        $item->description = "Sách tiếng Anh";
        $item->status = 0;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Category;
        $item->id = 2;
        $item->name = "Ngoại Ngữ Tiếng Nhật";
        $item->slug = "ngoai-ngu-tieng-nhat";
        $item->description = "Sách tiếng Nhật";
        $item->status = 0;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Category;
        $item->id = 3;
        $item->name = "Ngoại Ngữ Tiếng Trung";
        $item->slug = "ngoai-ngu-tieng-trung";
        $item->description = "Sách tiếng Trung";
        $item->status = 0;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Category;
        $item->id = 4;
        $item->name = "Ngoại Ngữ Tiếng Hàn";
        $item->slug = "ngoai-ngu-tieng-han";
        $item->description = "Sách tiếng Hàn";
        $item->status = 0;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Category;
        $item->id = 5;
        $item->name = "Văn Học";
        $item->slug = "van-hoc";
        $item->description = "Sách Văn Học";
        $item->status = 0;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Category;
        $item->id = 6;
        $item->name = "Lịch Sử";
        $item->slug = "lich-su";
        $item->description = "Sách Lịch Sử";
        $item->status = 0;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Category;
        $item->id = 7;
        $item->name = "Kinh Tế Tài Chính";
        $item->slug = "kinh-te-tai-chinh";
        $item->description = "Sách Kinh tế Tài chính";
        $item->status = 0;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();

        $item = new Category;
        $item->id = 8;
        $item->name = "Nông Lâm Ngư";
        $item->slug = "nong-lam-ngu";
        $item->description = "Sách Nông Lâm Ngư nghiệp";
        $item->status = 0;
        $item->created_at = date('Y-m-d H:i:s');
        $item->updated_at  = date('Y-m-d H:i:s');
        $item->save();
    }
}
