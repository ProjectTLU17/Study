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
      $faker = Faker::create();
      DB::table('users')->insert([
        ['name'=>'Lương Đức Duy','username'=>'duyluong1994','password'=>Hash::make(12345),'role'=>'manager','birthday'=>'1994-1-1','address'=>'địa chỉ nhà số 1','phone'=>'0123456789','email'=>'a@gmail.com'],
        ['name'=>'Vũ Đàm Khánh','username'=>'khanhvudam1995','password'=>Hash::make(12345),'role'=>'employee','birthday'=>'1994-1-1','address'=>'địa chỉ nhà số 1','phone'=>'0123456789','email'=>'b@gmail.com'],
        ['name'=>'Nguyễn Đình Phong','username'=>'phongnguyen1995','password'=>Hash::make(12345),'role'=>'manager','birthday'=>'1994-1-1','address'=>'địa chỉ nhà số 1','phone'=>'0123456789','email'=>'c@gmail.com'],
        ['name'=>'Nguyễn Duy Hoang Anh','username'=>'hoanganh1995','password'=>Hash::make(12345),'role'=>'employee','birthday'=>'1994-1-1','address'=>'địa chỉ nhà số 1','phone'=>'0123456789','email'=>'d@gmail.com'],
        ['name'=>'Đặng Trung Kiên','username'=>'kien1995','password'=>Hash::make(12345),'role'=>'employee','birthday'=>'1994-1-1','address'=>'địa chỉ nhà số 1','phone'=>'0123456789','email'=>'e@gmail.com'],
        ['name'=>'Trần Sơn Tùng','username'=>'tung1995','password'=>Hash::make(12345),'role'=>'employee','birthday'=>'1994-1-1','address'=>'địa chỉ nhà số 1','phone'=>'0123456789','email'=>'f@gmail.com'],
      ]);
      foreach(range(1,6) as $index){
        DB::table('customer')->insert([
          [ 'name'=>$faker->name,
            'phone'=>$faker->phoneNumber,
            'email'=>$faker->unique()->email],
        ]);
      };
      foreach(range(1,6) as $index){
        DB::table('suplier')->insert([
          ['name'=>$faker->name,
          'address'=>$faker->address,
          'phone'=>$faker->unique()->phoneNumber,
          'email'=>$faker->unique()->email],
        ]);
      };
      DB::table('category')->insert([
        ['name'=>'Nhà đất','stock'=>'10'],
        ['name'=>'Biệt thự','stock'=>'9'],
        ['name'=>'Căn hộ chung cư','stock'=>'8'],
        ['name'=>'Mảnh','stock'=>'7'],
        ['name'=>'Villa','stock'=>'11'],
      ]);
      foreach(range(1,6) as $index){
        $date=Carbon::create(2017,5,10,0,0,0);
        DB::table('project')->insert([
          ['name'=>'Dự án số '.$index,
          'startdate'=>$date->format('Y-m-d H:i:s'),
          'expdate'=>$date->addWeeks(rand(1,52))->format('Y-m-d H:i:s')],
        ]);
      };
      $project = Project::fill('id');
      foreach(range(1,6) as $index){
        DB::table('land')->insert([
          ['project_id'=>$faker->randomElement($project),
          'Name'=>'Lô đất số'.rand(1,50),
          'stock'=>rand(1,10)],
        ]);
      };
      $faker = Faker::create();
      $suplier=Suplier::fill('id');
      $category=Category::fill('id');
      $land='land'::fill('id');
      foreach(range(1,6) as $index){
      DB::table('product')->insert([
          ['sup_id'=>$faker->rand(1,6),
           'cate_id'=>$faker->randomElement($category),
           'land_id'=>$faker->randomElement($land),
           'name'=>'Sản phẩm số'.$index,
           'address'=>'địa chỉ sản phẩm số '.$index,
           'details'=>'thông tin sản phẩm '.$index,
           'price'=>rand(1,10)*10000000,
           'status'=>rand(0,1)],
         ]);
      };
      $product = Product::fill('id');
      foreach(range(1,6) as $index){
        DB::table('images')->insert([
          ['name'=>$index.'.jpg',
          'product_id'=>$faker->randomElement($product)],
         ]);
      };
    }
}
