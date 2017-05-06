<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use App\Suplier;
use App\Product;
use App\Customer;
use App\Category;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
      $faker = Faker::create();
      DB::table('users')->insert([
        ['name'=>'Lương Đức Duy','username'=>'duyluong1994','password'=>Hash::make(12345),'role'=>'manager','birthday'=>'1994-1-1','address'=>'địa chỉ nhà số 1','phone'=>'0123456789','email'=>'a@gmail.com'],
        ['name'=>'Vũ Đàm Khánh','username'=>'khanhvudam1995','password'=>Hash::make(12345),'role'=>'employee','birthday'=>'1994-1-1','address'=>'địa chỉ nhà số 1','phone'=>'0123456789','email'=>'b@gmail.com'],
        ['name'=>'Nguyễn Đình Phong','username'=>'phongnguyen1995','password'=>Hash::make(12345),'role'=>'manager','birthday'=>'1994-1-1','address'=>'địa chỉ nhà số 1','phone'=>'0123456789','email'=>'c@gmail.com'],
        ['name'=>'Nguyễn Duy Hoang Anh','username'=>'hoanganh1995','password'=>Hash::make(12345),'role'=>'employee','birthday'=>'1994-1-1','address'=>'địa chỉ nhà số 1','phone'=>'0123456789','email'=>'d@gmail.com'],
        ['name'=>'Đặng Trung Kiên','username'=>'kien1995','password'=>Hash::make(12345),'role'=>'employee','birthday'=>'1994-1-1','address'=>'địa chỉ nhà số 1','phone'=>'0123456789','email'=>'e@gmail.com'],
        ['name'=>'Trần Sơn Tùng','username'=>'tung1995','password'=>Hash::make(12345),'role'=>'employee','birthday'=>'1994-1-1','address'=>'địa chỉ nhà số 1','phone'=>'0123456789','email'=>'f@gmail.com']
      ]);
      foreach(range(1,50) as $index){
        DB::table('customer')->insert([
          ['name'=>$faker->name,'phone'=>$faker->phoneNumber,'email'=>$faker->unique()->email],
        ]);
      }
      foreach(range(1,50) as $index){
        DB::table('suplier')->insert([
          ['name'=>$faker->name,'address'=>$faker->address,'phone'=>$faker->unique()->phoneNumber,'email'=>$faker->unique()->email],
        ]);
      }
      DB::table('category')->insert([
        ['name'=>'Nhà đất','stock'=>'10'],
        ['name'=>'Biệt thự','stock'=>'9'],
        ['name'=>'Căn hộ chung cư','stock'=>'8'],
        ['name'=>'Mảnh','stock'=>'7'],
        ['name'=>'Villa','stock'=>'11'],
      ]);
      foreach(range(1,10) as $index){
        DB::table('product')->insert([
          ['suplier_id'=>Suplier::all()->random()->id,'category_id'=>Category::all()->random()->id,'name'=>$faker->name,'address'=>$faker->address,'details'=>$faker->text(190),'images'=>'phong.jpg','price'=>'10000001','status'=>'available'],
          ['suplier_id'=>Suplier::all()->random()->id,'category_id'=>Category::all()->random()->id,'name'=>$faker->name,'address'=>$faker->address,'details'=>$faker->text(190),'images'=>'phong.jpg','price'=>'100000002','status'=>'rented'],
          ['suplier_id'=>Suplier::all()->random()->id,'category_id'=>Category::all()->random()->id,'name'=>$faker->name,'address'=>$faker->address,'details'=>$faker->text(190),'images'=>'phong.jpg','price'=>'10000003','status'=>'rented'],
          ['suplier_id'=>Suplier::all()->random()->id,'category_id'=>Category::all()->random()->id,'name'=>$faker->name,'address'=>$faker->address,'details'=>$faker->text(190),'images'=>'phong.jpg','price'=>'10000004','status'=>'sold'],
          ['suplier_id'=>Suplier::all()->random()->id,'category_id'=>Category::all()->random()->id,'name'=>$faker->name,'address'=>$faker->address,'details'=>$faker->text(190),'images'=>'phong.jpg','price'=>'1000000005','status'=>'sold'],
          ['suplier_id'=>Suplier::all()->random()->id,'category_id'=>Category::all()->random()->id,'name'=>$faker->name,'address'=>$faker->address,'details'=>$faker->text(190),'images'=>'phong.jpg','price'=>'10000006','status'=>'available'],
        ]);
      }
      foreach(range(1,15) as $index){
        DB::table('contract')->insert([
          ['customer_id'=>Customer::all()->random()->id,'users_id'=>User::all()->random()->id,'product_id'=>Product::where('status','=','sold')->get()->random()->id,'details'=>$faker->text(190),'startdate'=>'2017-1-1','expdate'=>NULL,'status'=>'closed'],
          ['customer_id'=>Customer::all()->random()->id,'users_id'=>User::all()->random()->id,'product_id'=>Product::where('status','=','rented')->get()->random()->id,'details'=>$faker->text(190),'startdate'=>'2017-1-2','expdate'=>'2017-2-1','status'=>'opened'],
          ['customer_id'=>Customer::all()->random()->id,'users_id'=>User::all()->random()->id,'product_id'=>Product::where('status','=','rented')->get()->random()->id,'details'=>$faker->text(190),'startdate'=>'2017-1-3','expdate'=>'2017-7-1','status'=>'opened'],
          ['customer_id'=>Customer::all()->random()->id,'users_id'=>User::all()->random()->id,'product_id'=>Product::where('status','=','available')->get()->random()->id,'details'=>$faker->text(190),'startdate'=>'2017-1-1','expdate'=>NULL,'status'=>'closed'],
        ]);
      }
    }
}
