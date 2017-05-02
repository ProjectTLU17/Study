<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
      $faker = Faker::create();
      DB::table('users')->insert([
        ['name'=>'Lương Đức Duy','username'=>'duyluong1994','password'=>Hash::make(12345),'role'=>'manager','birthday'=>'1994-1-1','address'=>'địa chỉ nhà số 1','phone'=>'0123456789','email'=>'a@gmail.com'],
        ['name'=>'Vũ Đàm Khánh','username'=>'khanhvudam1995','password'=>Hash::make(12345),'role'=>'master','birthday'=>'1994-1-1','address'=>'địa chỉ nhà số 1','phone'=>'0123456789','email'=>'b@gmail.com'],
        ['name'=>'Nguyễn Đình Phong','username'=>'phongnguyen1995','password'=>Hash::make(12345),'role'=>'manager','birthday'=>'1994-1-1','address'=>'địa chỉ nhà số 1','phone'=>'0123456789','email'=>'c@gmail.com'],
        ['name'=>'Nguyễn Duy Hoang Anh','username'=>'hoanganh1995','password'=>Hash::make(12345),'role'=>'employee','birthday'=>'1994-1-1','address'=>'địa chỉ nhà số 1','phone'=>'0123456789','email'=>'d@gmail.com'],
        ['name'=>'Đặng Trung Kiên','username'=>'kien1995','password'=>Hash::make(12345),'role'=>'employee','birthday'=>'1994-1-1','address'=>'địa chỉ nhà số 1','phone'=>'0123456789','email'=>'e@gmail.com'],
        ['name'=>'Trần Sơn Tùng','username'=>'tung1995','password'=>Hash::make(12345),'role'=>'employee','birthday'=>'1994-1-1','address'=>'địa chỉ nhà số 1','phone'=>'0123456789','email'=>'f@gmail.com']
      ]);
      foreach(range(1,6) as $index){
        DB::table('customer')->insert([
          ['name'=>$faker->name,'phone'=>$faker->phoneNumber,'email'=>$faker->unique()->email],
        ]);
      }
      foreach(range(1,6) as $index){
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
      // $faker = Faker::create();
      // $suplier=suplier::fill('id');
      // $category=category::fill('id');
      // foreach(range(1,1) as $index){
      //   DB::table('product')->insert([
      //     ['sup_id'=>$faker->randomElement($suplier),'cate_id'=>$faker->randomElement($category),,'name'=>'Sản phẩm 1','address'=>'địa chỉ sản phẩm số 1','details'=>'thông tin sản phẩm 1','price'=>'10000001','status'=>'available'],
      //     ['sup_id'=>$faker->randomElement($suplier),'cate_id'=>$faker->randomElement($category),'name'=>'Sản phẩm 2','address'=>'địa chỉ sản phẩm số 2','details'=>'thông tin sản phẩm 2','price'=>'10000002','status'=>'rented'],
      //     ['sup_id'=>$faker->randomElement($suplier),'cate_id'=>$faker->randomElement($category),'name'=>'Sản phẩm 3','address'=>'địa chỉ sản phẩm số 3','details'=>'thông tin sản phẩm 3','price'=>'10000003','status'=>'rented'],
      //     ['sup_id'=>$faker->randomElement($suplier),'cate_id'=>$faker->randomElement($category),'name'=>'Sản phẩm 4','address'=>'địa chỉ sản phẩm số 4','details'=>'thông tin sản phẩm 4','price'=>'10000004','status'=>'sold'],
      //     ['sup_id'=>$faker->randomElement($suplier),'cate_id'=>$faker->randomElement($category),'name'=>'Sản phẩm 5','address'=>'địa chỉ sản phẩm số 5','details'=>'thông tin sản phẩm 5','price'=>'10000005','status'=>'sold'],
      //     ['sup_id'=>$faker->randomElement($suplier),'cate_id'=>$faker->randomElement($category),'name'=>'Sản phẩm 6','address'=>'địa chỉ sản phẩm số 6','details'=>'thông tin sản phẩm 6','price'=>'10000006','status'=>'available'],
      //   ]);
      // }
      // $customer=customer::fill('id');
      // $employee = employee::fill('id');
      // $product=product::fill('id');
      // foreach(range(1,1) as $index){
      //   DB::table('contract')->insert([
      //     ['cus_id'=>$faker->randomElement($customer),'emp_id'=>$faker->randomElement($employee),'prodt_id'=>$faker->randomElement($product),'details'=>'Thông tin đơn hàng 1','startdate'=>'2017-1-1','status'=>'closed'],
      //     ['cus_id'=>$faker->randomElement($customer),'emp_id'=>$faker->randomElement($employee),'prodt_id'=>$faker->randomElement($product),'details'=>'Thông tin đơn hàng 2','startdate'=>'2017-1-2','expdate'=>'2017-2-1','status'=>'opened'],
      //     ['cus_id'=>$faker->randomElement($customer),'emp_id'=>$faker->randomElement($employee),'prodt_id'=>$faker->randomElement($product),'details'=>'Thông tin đơn hàng 3','startdate'=>'2017-1-3','expdate'=>'2017-7-1','status'=>'opened'],
      //     ['cus_id'=>$faker->randomElement($customer),'emp_id'=>$faker->randomElement($employee),'prodt_id'=>$faker->randomElement($product),'details'=>'Thông tin đơn hàng 4','startdate'=>'2017-1-1','status'=>'closed'],
      //   ]);
      // }
    }
}
