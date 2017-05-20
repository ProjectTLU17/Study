<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon as Carbon;
use App\User;
use App\Suplier;
use App\Product;
use App\Customer;
use App\Category;
use App\Project;
use App\Land;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
      //Seed table User---------------------------------------------------------
      $faker = Faker::create();
      DB::table('users')->insert([
        ['name'=>'Lương Đức Duy','username'=>'duyluong1994','password'=>Hash::make(12345),'role'=>'manager','birthday'=>'1994-1-1','phone'=>'0123456789','email'=>'a@gmail.com'],
        ['name'=>'Vũ Đàm Khánh','username'=>'khanhvudam1995','password'=>Hash::make(12345),'role'=>'employee','birthday'=>'1994-1-1','phone'=>'0123456789','email'=>'b@gmail.com'],
        ['name'=>'Nguyễn Đình Phong','username'=>'phongnguyen1995','password'=>Hash::make(12345),'role'=>'manager','birthday'=>'1994-1-1','phone'=>'0123456789','email'=>'c@gmail.com'],
        ['name'=>'Nguyễn Duy Hoang Anh','username'=>'hoanganh1995','password'=>Hash::make(12345),'role'=>'employee','birthday'=>'1994-1-1','phone'=>'0123456789','email'=>'d@gmail.com'],
        ['name'=>'Đặng Trung Kiên','username'=>'kien1995','password'=>Hash::make(12345),'role'=>'employee','birthday'=>'1994-1-1','phone'=>'0123456789','email'=>'e@gmail.com'],
        ['name'=>'Trần Sơn Tùng','username'=>'tung1995','password'=>Hash::make(12345),'role'=>'employee','birthday'=>'1994-1-1','phone'=>'0123456789','email'=>'f@gmail.com']
      ]);
      //Seed table customer-----------------------------------------------------
      foreach(range(1,10) as $index){
        DB::table('customer')->insert([
          [ 'name'=>$faker->name,
            'phone'=>$faker->phoneNumber,
            'email'=>$faker->unique()->email],
        ]);
      }
      //Seed table Suplier------------------------------------------------------
      foreach(range(1,10) as $index){
        DB::table('suplier')->insert([
          ['name'=>$faker->name,
          'address'=>$faker->address,
          'phone'=>$faker->unique()->phoneNumber,
          'email'=>$faker->unique()->email],
        ]);
      }
      //Seed table Category-----------------------------------------------------
      DB::table('category')->insert([
        ['name'=>'Nhà đất','stock'=>$faker->numberBetween(1,10)],
        ['name'=>'Biệt thự','stock'=>$faker->numberBetween(1,5)],
        ['name'=>'Căn hộ chung cư','stock'=>$faker->numberBetween(1,20)],
        ['name'=>'Mảnh Đất','stock'=>$faker->numberBetween(1,5)],
        ['name'=>'Villa','stock'=>$faker->numberBetween(1,5)],
      ]);
      //Seed table Project------------------------------------------------------
      foreach(range(1,10) as $index){
        $date=Carbon::create(2017,5,10,0,0,0); //Đặt ngày khởi đầu còn cái 0,0,0 là giờ phút giây thì méo cần đâu nhỉ =)))
        DB::table('project')->insert([
          ['name'=>'Dự án số '.$index,
          'startdate'=>$date->format('Y-m-d H:i:s'),
          'expdate'=>$date->addWeeks($faker->numberBetween(1,100))->format('Y-m-d H:i:s')], //Trả lài ngày kết thúc = ngày bắt đầu addWeeks (thêm tuần) ngẫu nhiên 1~100 -format để mặc định
        ]);
      }
      //Seed table Land---------------------------------------------------------
      foreach(range(1,10) as $index){
        $faker = Faker::create();
        DB::table('land')->insert([
          ['name'=>'Lô đất số '.$index,
          'stock'=>$faker->numberBetween(1,10),
          'project_id'=>$faker->numberBetween(1,10)],
        ]);
      }
      //Product seed multi-option-----------------------------------------------
      foreach(range(1,10) as $index){
      //$startindex=array_rand($string);
      $strings = array(
        'Đã bán',
        'Chưa bán',
        'Đang cho thuê',);
       $indexs = array_rand($strings);
       DB::table('product')->insert([
          ['suplier_id'=>$faker->numberBetween(1,10),
           'category_id'=>$faker->numberBetween(1,5),
           'land_id'=>$faker->numberBetween(1,10),
           'name'=>'Sản phẩm số'.$index,
           'address_id'=>$index,
           'decription'=>'thông tin sản phẩm '.$index,
           'price'=>$faker->numberBetween(1,1000000000),
           'status'=>$strings[$indexs]],
         ]);
      }
      //Seed table images-------------------------------------------------------
      foreach(range(1,12) as $index){
        DB::table('images')->insert([
          ['name'=>$index.'.jpg',
          'product_id'=>$faker->numberBetween(1,10)],
         ]);
      }
      //Seed table contract-----------------------------------------------------
      foreach(range(1,10) as $index){
        $strings = array(
          'Đang thực hiện',
          'Đang chờ phê duyệt',
          'Đã Hoàn Thành',);
         $indexs = array_rand($strings);
        $date=Carbon::create(2017,5,10,0,0,0);
        DB::table('contract')->insert([
          ['customer_id'=>$faker->unique()->numberBetween(1,10),
          'users_id'=>$faker->numberBetween(1,6),
          'product_id'=>$faker->numberBetween(1,10),
          'decription'=>'Thông tin hợp đồng sô '.$index,
          'startdate'=>$date->format('Y-m-d H:i:s'),
          'expdate'=>$date->addWeeks($faker->numberBetween(1,100))->format('Y-m-d H:i:s'),
          'status'=>$strings[$indexs]]
         ]);
      }
    }
}
