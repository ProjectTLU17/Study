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
      //Seed table city-----------------------------------------------------
      // DB::table('province')->insert([
      //   ['name'=>'Cần Thơ'],['name'=>'Đà Nẵng'],['name'=>'Hải Phòng'],['name'=>'Hà Nội'],['name'=>'TP Hồ Chí Minh'],
      //   ['name'=>'An Giang'],['name'=>'Bà Rịa - Vũng Tàu'],['name'=>'Bắc Giang'],['name'=>'Bắc Kạn'],['name'=>'Bạc Liêu'],['name'=>'Bắc Ninh'],
      //   ['name'=>'Bến Tre'],['name'=>'Bình Định'],['name'=>'Bình Dương'],['name'=>'Bình Phước'],['name'=>'Bình Thuận'],['name'=>'Cà Mau'],
      //   ['name'=>'Cao Bằng'],['name'=>'Đắk Lắk'],['name'=>'Đắk Nông'],['name'=>'Điện Biên'],['name'=>'Đồng Nai'],
      //   ['name'=>'Đồng Tháp'],['name'=>'Gia Lai'],['name'=>'Hà Giang'],['name'=>'Hà Nam'],['name'=>'Hà Tĩnh'],['name'=>'Hải Dương'],['name'=>'Hậu Giang'],
      //   ['name'=>'Hòa Bình'],['name'=>'Hưng Yên'],['name'=>'Khánh Hòa'],['name'=>'Kiên Giang'],['name'=>'Kon Tum'],['name'=>'Lai Châu'],['name'=>'Lâm Đồng'],
      //   ['name'=>'Lạng Sơn'],['name'=>'Lào Cai'],['name'=>'Long An'],['name'=>'Nam Định'],['name'=>'Nghệ An'],['name'=>'Ninh Bình'],['name'=>'Ninh Thuận'],
      //   ['name'=>'Phú Thọ'],['name'=>'Quảng Bình'],['name'=>'Quảng Nam'],['name'=>'Quảng Ngãi'],['name'=>'Quảng Ninh'],['name'=>'Quảng Trị'],['name'=>'Sóc Trăng'],
      //   ['name'=>'Sơn La'],['name'=>'Tây Ninh'],['name'=>'Thái Bình'],['name'=>'Thái Nguyên'],['name'=>'Thanh Hóa'],['name'=>'Thừa Thiên Huế'],['name'=>'Tiền Giang'],
      //   ['name'=>'Trà Vinh'],['name'=>'Tuyên Quang'],['name'=>'Vĩnh Long'],['name'=>'Vĩnh Phúc'],['name'=>'Yên Bái'],['name'=>'Phú Yên'],
      // ]);

      //Seed table customer-----------------------------------------------------
      foreach(range(1,15) as $index){
        DB::table('customer')->insert([
          [ 'name'=>$faker->name,
            'phone'=>$faker->phoneNumber,
            'email'=>$faker->unique()->email],
        ]);
      }
      //Seed table Suplier------------------------------------------------------
      foreach(range(1,15) as $index){
        DB::table('suplier')->insert([
          ['name'=>$faker->name,
          'address'=>$faker->address,
          'phone'=>$faker->unique()->phoneNumber,
          'email'=>$faker->unique()->email],
        ]);
      }
      //Seed table Category-----------------------------------------------------
      DB::table('category')->insert([
        ['name'=>'Nhà đất'],
        ['name'=>'Biệt thự'],
        ['name'=>'Căn hộ chung cư'],
        ['name'=>'Mảnh Đất'],
        ['name'=>'Villa'],
      ]);
      //Seed table Project------------------------------------------------------
        DB::table('project')->insert([
          ['name'=>'Biệt thự cao cấp  VinCity','decription'=>'Dự án cung cấp các biệt thự cao cấp đến khách hàng bao gồm nhiều loại hình như mua hoặc thuê.'],
        ]);

      //Seed table Land---------------------------------------------------------
        DB::table('land')->insert([
          ['name'=>'Lô C27X1 Nam Trung Yên ','project_id'=>'1','decription'=>'Đặt tại trung tâm đô thị Nam Trung Yên với tầm nhìn quang cảnh thành phố'],
          ['name'=>'Lô Hải Đăng 1 ','project_id'=>'1','decription'=>'Lô đặt tại ngoại ô Hà Nội với khung cảnh đồng quê thiên nhiên nên thơ và đẹp đẽ'],
          ['name'=>'Lô Hoàng Hải ','project_id'=>'1','decription'=>'Tầm nhìn trải dài ra biển thuộc tiêu chí Vip 1'],
        ]);
      //Product seed multi-option-----------------------------------------------
       DB::table('product')->insert([
          ['suplier_id'=>'1','category_id'=>'5','land_id'=>'1','name'=>'Skepter House','address'=>'','decription'=>'This is a villa near callifornia state, with a large space of land and out far luxury furniture, this villa is perfect for those who want an extremly comfort and convenient but still nice and flawless. Feature 1 great living room for whole family can stay together and enjoy moment, 2 bed room with most comfort and relax funiture offer you a nice sleeping experience, 3 bath room with high quality build and 24/7 automatic warn up system, no more waiting for warm water. Extremly flexible and morden kitchen with everythings you need. This also offer front side pool and back yard pool for more convinent and party all day long','price'=>'5500000000','status'=>'available'],
          ['suplier_id'=>'2','category_id'=>'5','land_id'=>'1','name'=>'Hall Center','address'=>'','decription'=>'•	Decription: located in middle callifornia state, feature you the best experience of homeland. Including 1 living room with built-in quality, 3 bed room with extremly comfortable, 2 bath room with luxury style offer you a good moment when bathing, automatic heating avaliable. Feature 1 front yard pools and 1 roof top with beautifull views and pool for sun bathing.','price'=>'6000000000','status'=>'available'],
          ['suplier_id'=>'3','category_id'=>'5','land_id'=>'1','name'=>'The king home villa','address'=>'','decription'=>'right in the midle of a luxury street this is a real place for someone who wish to live like a king. With 240m2 areas you already can call your home is a palace, feature 1 great hall as living room for meeting and family moment, a good constuct made it real royal form. Up to 5 bed room for a royal family with the most quality furniture. A large pool for maximun of 20 people beyond party, royal class kitchen, made this really a palace for the king.','price'=>'2200000000','status'=>'available'],
          ['suplier_id'=>'4','category_id'=>'5','land_id'=>'1','name'=>'The two towers villa','address'=>'','decription'=>'this villa is perfect for family who want to live in comfort but close. Feature 2 seperatation areas with mostly same as other. With 2 living room, 6 bed room, 4 bath room, 2 kitchen divided into 2 areas this is a real good home for mother farther and children family','price'=>'5000000000','status'=>'available'],
          ['suplier_id'=>'5','category_id'=>'5','land_id'=>'1','name'=>'Concepted House','address'=>'','decription'=>': this villa is perfect for family who want to live in comfort but close. Feature 2 seperatation areas with mostly same as other. With 2 living room, 6 bed room, 4 bath room, 2 kitchen divided into 2 areas this is a real good home for mother farther and children family.','price'=>'2300000000','status'=>'available'],
          ['suplier_id'=>'6','category_id'=>'2','land_id'=>'2','name'=>'Charming House of Lore','address'=>'','decription'=>'Charming 3\2 home located in the heart of Checotah Large living room, separate den w\wood burning stove. Kitchen has wonderful window to view the beautiful back yard. Large master bedroom w\ 2 closets. Covered porch. Covered Patio.Carport & storage bldg','price'=>'5500000000','status'=>'available'],
          ['suplier_id'=>'7','category_id'=>'2','land_id'=>'2','name'=>'Old Trees','address'=>'','decription'=>'2-STALL BOAT DOCK WITH THIS ONE! Boat dock has a 12ft slip & 10ft slip. The detail in this home is to much to mention w/ hand crafted wood work. Metal roof in process of being completed, large patio & walk to Lake Eufaula. Subject to a 5% buyers premium.','price'=>'7800000000','status'=>'available'],
          ['suplier_id'=>'8','category_id'=>'2','land_id'=>'2','name'=>'Morden One','address'=>'','decription'=>'Fabulous & spacious 2 story home awaits you! Features include downstairs master suite with bath, open floor plan, large utility room. 3 bedrooms with full bath upstairs. 4th bedroom has versatile uses/ bonus room/ office. 2 car garage plus detached shop','price'=>'4500000000','status'=>'available'],
          ['suplier_id'=>'9','category_id'=>'2','land_id'=>'2','name'=>'Hatch in Shell','address'=>'','decription'=>' This adorable 2 bed 1 bath home sits on a large corner lot. Detached 2 car garage. Chain link fenced back yard. Close to the school, shopping, worship, I 40 & Hwy 69.','price'=>'6500000000','status'=>'available'],
          ['suplier_id'=>'10','category_id'=>'2','land_id'=>'2','name'=>'Peaceful home','address'=>'','decription'=>'This is a 1950 square foot, 4 bedroom, single family home. It is located at 717 W Creek Ave Checotah, Oklahoma.','price'=>'2500000000','status'=>'available'],
          ['suplier_id'=>'11','category_id'=>'5','land_id'=>'3','name'=>'FoxtroX1','address'=>'','decription'=>'','price'=>'5000000000','status'=>'available'],
          ['suplier_id'=>'12','category_id'=>'5','land_id'=>'3','name'=>'Alpha One','address'=>'','decription'=>'','price'=>'9000000000','status'=>'available'],
          ['suplier_id'=>'13','category_id'=>'5','land_id'=>'3','name'=>'Zero Zapata','address'=>'','decription'=>'','price'=>'3000000000','status'=>'available'],
          ['suplier_id'=>'14','category_id'=>'5','land_id'=>'3','name'=>'Nazi Home','address'=>'','decription'=>'','price'=>'8500000000','status'=>'available'],
          ['suplier_id'=>'15','category_id'=>'5','land_id'=>'3','name'=>'SS Club','address'=>'','decription'=>'','price'=>'5300000000','status'=>'available'],
         ]);
      //Seed table images-------------------------------------------------------
        DB::table('images')->insert([
          ['name'=>'sp1_1.jpg','product_id'=>'1'],['name'=>'sp1_2.jpg','product_id'=>'1'],['name'=>'sp1_3.jpg','product_id'=>'1'],['name'=>'sp1_4.jpg','product_id'=>'1'],
          ['name'=>'sp2_1.jpg','product_id'=>'2'],['name'=>'sp2_2.jpg','product_id'=>'2'],['name'=>'sp2_3.jpg','product_id'=>'2'],['name'=>'sp2_4.jpg','product_id'=>'2'],
          ['name'=>'sp3_1.jpg','product_id'=>'3'],['name'=>'sp3_2.jpg','product_id'=>'3'],['name'=>'sp3_3.jpg','product_id'=>'3'],['name'=>'sp3_4.jpg','product_id'=>'3'],
          ['name'=>'sp4_1.jpg','product_id'=>'4'],['name'=>'sp4_2.jpg','product_id'=>'4'],['name'=>'sp4_3.jpg','product_id'=>'4'],['name'=>'sp4_4.jpg','product_id'=>'4'],
          ['name'=>'sp5_1.jpg','product_id'=>'5'],['name'=>'sp5_2.jpg','product_id'=>'5'],['name'=>'sp5_3.jpg','product_id'=>'5'],['name'=>'sp5_4.jpg','product_id'=>'5'],
          ['name'=>'sp6_1.jpg','product_id'=>'6'],['name'=>'sp6_2.jpg','product_id'=>'6'],['name'=>'sp6_3.jpg','product_id'=>'6'],['name'=>'sp6_4.jpg','product_id'=>'6'],
          ['name'=>'sp7_1.jpg','product_id'=>'7'],['name'=>'sp7_2.jpg','product_id'=>'7'],['name'=>'sp7_3.jpg','product_id'=>'7'],['name'=>'sp7_4.jpg','product_id'=>'7'],
          ['name'=>'sp8_1.jpg','product_id'=>'8'],['name'=>'sp8_2.jpg','product_id'=>'8'],['name'=>'sp8_3.jpg','product_id'=>'8'],['name'=>'sp8_4.jpg','product_id'=>'8'],
          ['name'=>'sp9_1.jpg','product_id'=>'9'],['name'=>'sp9_2.jpg','product_id'=>'9'],['name'=>'sp9_3.jpg','product_id'=>'9'],['name'=>'sp9_4.jpg','product_id'=>'9'],
          ['name'=>'sp10_1.jpg','product_id'=>'10'],['name'=>'sp10_2.jpg','product_id'=>'10'],['name'=>'sp10_3.jpg','product_id'=>'10'],['name'=>'sp10_4.jpg','product_id'=>'10'],['name'=>'sp10_5.jpg','product_id'=>'10'],
          ['name'=>'sp11_1.jpg','product_id'=>'11'],['name'=>'sp11_2.jpg','product_id'=>'11'],['name'=>'sp11_3.jpg','product_id'=>'11'],['name'=>'sp11_4.jpg','product_id'=>'11'],['name'=>'sp11_5.jpg','product_id'=>'11'],
          ['name'=>'sp12_1.jpg','product_id'=>'12'],['name'=>'sp12_2.jpg','product_id'=>'12'],['name'=>'sp12_3.jpg','product_id'=>'12'],['name'=>'sp12_4.jpg','product_id'=>'12'],['name'=>'sp12_5.jpg','product_id'=>'12'],
          ['name'=>'sp13_1.jpg','product_id'=>'13'],['name'=>'sp13_2.jpg','product_id'=>'13'],['name'=>'sp13_3.jpg','product_id'=>'13'],['name'=>'sp13_4.jpg','product_id'=>'13'],['name'=>'sp13_5.jpg','product_id'=>'13'],
          ['name'=>'sp14_1.jpg','product_id'=>'14'],['name'=>'sp14_2.jpg','product_id'=>'14'],['name'=>'sp14_3.jpg','product_id'=>'14'],['name'=>'sp14_4.jpg','product_id'=>'14'],['name'=>'sp14_5.jpg','product_id'=>'14'],
          ['name'=>'sp15_1.jpg','product_id'=>'15'],['name'=>'sp15_2.jpg','product_id'=>'15'],['name'=>'sp15_3.jpg','product_id'=>'15'],['name'=>'sp15_4.jpg','product_id'=>'15'],['name'=>'sp15_5.jpg','product_id'=>'15'],
         ]);
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
