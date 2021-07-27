<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apartments')->truncate();
        DB::table('apartments')->insert([
            [
                'id' => 1,
                'name' => 'Chung cư An Bình',
                'address' => 'Hồ Chí Minh',
                'price' => 3000000,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'https://tuyenmai.com/wp-content/uploads/2020/07/an-binh-city-42.jpg',
                'status' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'name' => 'Chung cư An Sinh',
                'address' => 'Mỹ Đình , Hà Nội',
                'price' => 5000000,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'https://img.dothi.net//resize/640x380/2017/05/16/20170516155928-e994.jpg',
                'status' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'name' => 'Royal City',
                'address' => 'Nguyễn Trãi , Hà Nội',
                'price' => 50000000,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'https://homesland.vn/blog/wp-content/uploads/2017/08/toa-r3-royal-city-1024x680.jpg',
                'status' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'name' => 'Time City',
                'address' => 'Minh Khai ,Hà Nội',
                'price' => 50000000,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'https://lh6.googleusercontent.com/-ucn3NLc7V9Q/VBL2gZJCmmI/AAAAAAAAAsc/DCzUOVQucfc/s640/chung-cu-time-city-buoi-dem.jpg',
                'status' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'name' => 'Ocean Park',
                'address' => 'Gia Lâm ,Hà Nội',
                'price' => 50000000,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'https://vimhomes.vn/wp-content/uploads/2019/05/vinhomes-ocean-park-gia-lam.jpg',
                'status' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'name' => 'Green Park',
                'address' => 'Cầu giấy, Hà Nội',
                'price' => 10000000,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'https://nhadat24h.net/duan/images/6177/161/phoi%20canh%20du%20an.JPG',
                'status' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 7,
                'name' => 'Green Star',
                'address' => 'Phạm Văn Đồng',
                'price' => 300,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'https://chungcugreenstars.info/wp-content/uploads/sites/43/2014/05/chung-cu-green-stars.jpg',
                'status' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 8,
                'name' => 'Ehome 3',
                'address' => 'Bình Tân, Hồ Chí Minh',
                'price' => 5000000,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'https://photo.rever.vn/v2/get/Eq0_moCT2vT7vTP2jGZOgsgJXhhTjslzsdKApvuZEn0=/750x500/image.jpg',
                'status' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 9,
                'name' => 'Sunview Town',
                'address' => 'Thủ Đức, Hồ Chí Minh',
                'price' => 4000000,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'https://image.thanhnien.vn/1024/uploaded/dongns/2021_05_18/chungcusunviewton_nsnf.jpg',
                'status' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 10,
                'name' => 'StarLake',
                'address' => 'Hồ Tây, Hà Nội',
                'price' => 5000000,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'https://hoamuoigio.cdn.vccloud.vn/uploads/Nhat%20-%20Starlake/b40632911778ef26b669.jpg',
                'status' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 11,
                'name' => 'Minato',
                'address' => 'Hải Phòng',
                'price' => 3000000,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'https://duandatcang.com/Data/images/duan/chung-cu-Minato-Residence/chung-cu-minato-hai-phong.jpg',
                'status' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 12,
                'name' => 'Hera',
                'address' => 'Hồng Bàng ,Hải Phòng',
                'price' => 7000000,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'https://duandatcang.com/Data/images/duan/chung-cu-Hera-Hai-Phong/phoi-canh-chung-cu-hera-hai-phong.jpg',
                'status' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 13,
                'name' => 'Hoàng Huy',
                'address' => 'Lạch Tray, Hải Phòng',
                'price' => 10000000,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'https://nhadat86.vn/wp-content/uploads/2020/12/phoi-canh-hoang-huy-commerce-1024x573.jpg',
                'status' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 14,
                'name' => 'Grand Park',
                'address' => 'Quận 9, Hồ Chí Minh',
                'price' => 8000000,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'https://dongtayland.vn/wp-content/uploads/2019/01/VinhomesGrand-Park.jpg',
                'status' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 15,
                'name' => 'Smart City',
                'address' => 'Tây Mỗ , Hà Nội',
                'price' => 56040000,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'https://vinhomesland.vn/wp-content/uploads/2019/05/vinhomes-smart-city-background.jpg',
                'status' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 16,
                'name' => 'Central Park',
                'address' => 'Tân Cảng',
                'price' => 30409090,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'https://vinhomesland.vn/wp-content/uploads/2020/04/vinhomes-central-park.jpg',
                'status' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 17,
                'name' => 'Gardenia',
                'address' => 'Mỹ Đình , Hà Nội',
                'price' => 340000000,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'https://alphahousing.vn/wp-content/uploads/2019/07/vinhomes-gardenia-1.jpg',
                'status' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 18,
                'name' => 'RiverSide',
                'address' => 'Long Biên, Hà Nội',
                'price' => 340343090,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'https://vinhomesland.vn/wp-content/uploads/2019/05/vinhomes-riverside.jpg',
                'status' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 19,
                'name' => 'LandMark 81',
                'address' => 'Hồ Chí Minh',
                'price' => 100000000,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'https://www.vinhomescentralpark.co/wp-content/uploads/2021/04/landmark81-2.jpeg',
                'status' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 20,
                'name' => 'LandMark 72',
                'address' => 'Hà Nội',
                'price' => 3000000,
                'description' => '',
                'detail' => '',
                'thumbnail' => 'https://imgs.vietnamnet.vn/Images/2016/01/06/16/20160106160126-landmark72.jpg',
                'status' => 1,
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
