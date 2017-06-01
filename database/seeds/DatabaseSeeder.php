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
        $this->call('UserTableSeeder');
    }
}
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('category')->insert([
          array('name'=>'Quần Nam'),
          array('name'=>'Quần Nữ')
        ]);
    }
}
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('product')->insert([
          array('name'=>'Quần Đá Banh','price'=>50000,'cate_id'=>1),
          array('name'=>'Quần Tất','price'=>55000,'cate_id'=>2),
          array('name'=>'Quần Sịp đỏ','price'=>50000,'cate_id'=>1),
          array('name'=>'Quần Sịp xanh','price'=>20000,'cate_id'=>2)
        ]);
    }
}
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
          array('name'=>'TV1','email'=>"mail1",'password'=>Hash::make(12345)),
          array('name'=>'TV2','email'=>"mail2",'password'=>Hash::make(12345)),
          array('name'=>'TV3','email'=>"mail3",'password'=>Hash::make(12345)),
          array('name'=>'TV4','email'=>"mail4",'password'=>Hash::make(12345)),
          array('name'=>'TV5','email'=>"mail5",'password'=>Hash::make(12345))
        ]);
    }
}
