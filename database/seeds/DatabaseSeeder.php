<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('UsersTableSeeder');
    }
}
class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
          ['name'=>'Lương Đức Duy','username'=>'duyluong1994','password'=>'12345','role'=>'admin'],
          ['name'=>'Vũ Đàm Khánh','username'=>'khanhvudam1995','password'=>'12345','role'=>'manager'],
          ['name'=>'Nguyễn Đình Phong','username'=>'phongnguyen1995','password'=>'12345','role'=>'admin'],
          ['name'=>'Nguyễn Duy Hoang Anh','username'=>'hoanganh1995','password'=>'12345','role'=>'manager'],
          ['name'=>'Đặng Trung Kiên','username'=>'kien1995','password'=>'12345','role'=>'employee'],
          ['name'=>'Trần Sơn Tùng','username'=>'tung1995','password'=>'12345','role'=>'employee']
        ]);
    }
}
