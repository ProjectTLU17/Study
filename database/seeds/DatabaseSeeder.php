<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call('UsersTableSeeder');
        $this->call('CategoryTableSeeder');
        $this->call('SuplierTableSeeder');
        $this->call('CustomerTableSeeder');
        $this->call('EmployeeTableSeeder');
        //$this->call('ProductTableSeeder');

    }
}
class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
          ['name'=>'Lương Đức Duy','username'=>'duyluong1994','password'=>Hash::make(12345),'role'=>'manager'],
          ['name'=>'Vũ Đàm Khánh','username'=>'khanhvudam1995','password'=>Hash::make(12345),'role'=>'master'],
          ['name'=>'Nguyễn Đình Phong','username'=>'phongnguyen1995','password'=>Hash::make(12345),'role'=>'manager'],
          ['name'=>'Nguyễn Duy Hoang Anh','username'=>'hoanganh1995','password'=>Hash::make(12345),'role'=>'employee'],
          ['name'=>'Đặng Trung Kiên','username'=>'kien1995','password'=>Hash::make(12345),'role'=>'employee'],
          ['name'=>'Trần Sơn Tùng','username'=>'tung1995','password'=>Hash::make(12345),'role'=>'employee']
        ]);
    }
}
class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('category')->insert([
          ['name'=>'Nhà đất',],
          ['name'=>'Biệt thự',],
          ['name'=>'Căn hộ chung cư',],
          ['name'=>'Mảnh',],
        ]);
    }
}
/*class ProductTableSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('product')->insert([
          ['name'=>'Nhà đất 2 tầng nhỏ có sân','details'=>'Nhà 2 tầng 4 phòng có sân địa chỉ số 10 giảng võ','area'=>75,'price'=>5000000000,'status'=>'Chưa bán'],
          ['name'=>'Nhà đất 2 tầng vừa có sân','details'=>'Nhà 2 tầng 4 phòng có sân số 10 ngõ 123 phố Hoàng cầu','area'=>125,'price'=>7000000000,'status'=>'Đã bán'],
        ]);
    }
*/
class SuplierTableSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('suplier')->insert([
          ['name'=>'Nguyễn văn A','address'=>'số 10 Lý Nam đế','phone'=>'01672125305','email'=>'isuka711@gmail.com'],
          ['name'=>'Lương Đức B','address'=>'ngõ 133 Xuân Thủy','phone'=>'015854685468','email'=>'MrFly@gmail.com'],
        ]);
    }
}
class CustomerTableSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('customer')->insert([
          ['name'=>'Nguyễn Duy Hoàng Anh','address'=>'số 12 Giảng Võ','phone'=>'1546182135','email'=>'HoangAnh@gmail.com'],
          ['name'=>'Lương Hòa C','address'=>'Hồ Gươm','phone'=>'015854685468','email'=>'MrFly2@gmail.com'],
        ]);
    }
}