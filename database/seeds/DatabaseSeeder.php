<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{    
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('ProductTableSeeder');
        $this->call('CategoryTableSeeder');
        $this->call('SuplierTableSeeder');
        $this->call('CustomerTableSeeder');
        $this->call('EmployeeTableSeeder');
    }
}
class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('category')->insert([
          ['productname'=>'Nhà đất','stock'=>1,],
          ['productname'=>'Biệt thự','stock'=>1,],
          ['productname'=>'Căn hộ chung cư','stock'=>1,],
          ['productname'=>'Mảnh','stock'=>1,],         
        ]);
    }
}
class ProductTableSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('product')->insert([
          ['name'=>'Nhà đất 2 tầng nhỏ có sân','details'=>'Nhà 2 tầng 4 phòng có sân địa chỉ số 10 giảng võ','area'=>75,'price'=>5000000000,'status'=>'Chưa bán'],
          ['name'=>'Nhà đất 2 tầng vừa có sân','details'=>'Nhà 2 tầng 4 phòng có sân số 10 ngõ 123 phố Hoàng cầu','area'=>125,'price'=>7000000000,'status'=>'Đã bán'],
          ['name'=>'Nhà đất 2 tầng lớn có sân','details'=>'Nhà 2 tầng 5 phòng có sân','area'=>300,'price'=>10000000000,'status'=>'Chưa bán'],          
        ]);
    }
}
class SuplierTableSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('suplier')->insert([
          ['supliername'=>'Nguyễn văn A','address'=>'số 10 Lý Nam đế','phone'=>'01672125305','email'=>'isuka711@gmail.com'],
          ['supliername'=>'Lương Đức B','address'=>'ngõ 133 Xuân Thủy','phone'=>'015854685468','email'=>'MrFly@gmail.com'],
        ]);
    }
}
class CustomerTableSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('customer')->insert([
          ['customername'=>'Nguyễn Duy Hoàng Anh','address'=>'số 12 Giảng Võ','phone'=>'1546182135','email'=>'HoangAnh@gmail.com'],
          ['supliername'=>'Lương Hòa C','address'=>'Hồ Gươm','phone'=>'015854685468','email'=>'MrFly2@gmail.com'],
        ]);
    }
}
class EmployeeTableSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('Employee')->insert([
          ['employeename'=>'Nguyễn Đình Phong','address'=>'Hà Đông','phone'=>'15154182135','email'=>'Pogkyo@gmail.com'],
        ]);
    }
}
