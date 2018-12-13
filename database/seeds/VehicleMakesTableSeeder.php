<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class VehicleMakesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_vehicle_makes')->delete();
        $makes = array(
          array('id' =>1 , 'name' => 'Acura' ,'code' => 'ACURA'),
          array('id' =>2 , 'name' => 'Alfa Romeo' ,'code' => 'ALFA'),
          array('id' =>3 , 'name' => 'AMC' ,'code' => 'AMC'),
          array('id' =>4 , 'name' => 'Aston Martin' ,'code' => 'ASTON'),
          array('id' =>5 , 'name' => 'Audi' ,'code' => 'AUDI'),
          array('id' =>6 , 'name' => 'Avanti' ,'code' => 'AVANTI'),
          array('id' =>7 , 'name' => 'Bentley' ,'code' => 'BENTL'),
          array('id' =>8 , 'name' => 'BMW' ,'code' => 'BMW'),
          array('id' =>9 , 'name' => 'Buick' ,'code' => 'BUICK'),
          array('id' =>10 , 'name' => 'Cadillac' ,'code' => 'CAD'),
          array('id' =>11 , 'name' => 'Chevrolet' ,'code' => 'CHEV'),
          array('id' =>12 , 'name' => 'Chrysler' ,'code' => 'CHRY'),
          array('id' =>13 , 'name' => 'Daewoo' ,'code' => 'DAEW'),
          array('id' =>14 , 'name' => 'Daihatsu' ,'code' => 'DAIHAT'),
          array('id' =>15 , 'name' => 'Datsun' ,'code' => 'DATSUN'),
          array('id' =>16 , 'name' => 'DeLorean' ,'code' => 'DELOREAN'),
          array('id' =>17 , 'name' => 'Dodge' ,'code' => 'DODGE'),
          array('id' =>18 , 'name' => 'Eagle' ,'code' => 'EAGLE'),
          array('id' =>19 , 'name' => 'Ferrari' ,'code' => 'FER'),
          array('id' =>20 , 'name' => 'FIAT' ,'code' => 'FIAT'),
          array('id' =>21 , 'name' => 'Fisker' ,'code' => 'FISK'),
          array('id' =>22 , 'name' => 'Ford' ,'code' => 'FORD'),
          array('id' =>23 , 'name' => 'Freightliner' ,'code' => 'FREIGHT'),
          array('id' =>24 , 'name' => 'Geo' ,'code' => 'GEO'),
          array('id' =>25 , 'name' => 'GMC' ,'code' => 'GMC'),
          array('id' =>26 , 'name' => 'Honda' ,'code' => 'HONDA'),
          array('id' =>27 , 'name' => 'HUMMER' ,'code' => 'AMGEN'),
          array('id' =>28 , 'name' => 'Hyundai' ,'code' => 'HYUND'),
          array('id' =>29 , 'name' => 'Infiniti' ,'code' => 'INFIN'),
          array('id' =>30 , 'name' => 'Isuzu' ,'code' => 'ISU'),
          array('id' =>31 , 'name' => 'Jaguar' ,'code' => 'JAG'),
          array('id' =>32 , 'name' => 'Jeep' ,'code' => 'JEEP'),
          array('id' =>33 , 'name' => 'Kia' ,'code' => 'KIA'),
          array('id' =>34 , 'name' => 'Lamborghini' ,'code' => 'LAM'),
          array('id' =>35 , 'name' => 'Lancia' ,'code' => 'LAN'),
          array('id' =>36 , 'name' => 'Land Rover' ,'code' => 'ROV'),
          array('id' =>37 , 'name' => 'Lexus' ,'code' => 'LEXUS'),
          array('id' =>38 , 'name' => 'Lincoln' ,'code' => 'LINC'),
          array('id' =>39 , 'name' => 'Lotus' ,'code' => 'LOTUS'),
          array('id' =>40 , 'name' => 'Maserati' ,'code' => 'MAS'),
          array('id' =>41 , 'name' => 'Maybach' ,'code' => 'MAYBACH'),
          array('id' =>42 , 'name' => 'Mazda' ,'code' => 'MAZDA'),
          array('id' =>43 , 'name' => 'McLaren' ,'code' => 'MCLAREN'),
          array('id' =>44 , 'name' => 'Mercedes-Benz' ,'code' => 'MB'),
          array('id' =>45 , 'name' => 'Mercury' ,'code' => 'MERC'),
          array('id' =>46 , 'name' => 'Merkur' ,'code' => 'MERKUR'),
          array('id' =>47 , 'name' => 'MINI' ,'code' => 'MINI'),
          array('id' =>48 , 'name' => 'Mitsubishi' ,'code' => 'MIT'),
          array('id' =>49 , 'name' => 'Nissan' ,'code' => 'NISSAN'),
          array('id' =>50 , 'name' => 'Oldsmobile' ,'code' => 'OLDS'),
          array('id' =>51 , 'name' => 'Peugeot' ,'code' => 'PEUG'),
          array('id' =>52 , 'name' => 'Plymouth' ,'code' => 'PLYM'),
          array('id' =>53 , 'name' => 'Pontiac' ,'code' => 'PONT'),
          array('id' =>54 , 'name' => 'Porsche' ,'code' => 'POR'),
          array('id' =>55 , 'name' => 'RAM' ,'code' => 'RAM'),
          array('id' =>56 , 'name' => 'Renault' ,'code' => 'REN'),
          array('id' =>57 , 'name' => 'Rolls-Royce' ,'code' => 'RR'),
          array('id' =>58 , 'name' => 'Saab' ,'code' => 'SAAB'),
          array('id' =>59 , 'name' => 'Saturn' ,'code' => 'SATURN'),
          array('id' =>60 , 'name' => 'Scion' ,'code' => 'SCION'),
          array('id' =>61 , 'name' => 'smart' ,'code' => 'SMART'),
          array('id' =>62 , 'name' => 'SRT' ,'code' => 'SRT'),
          array('id' =>63 , 'name' => 'Sterling' ,'code' => 'STERL'),
          array('id' =>64 , 'name' => 'Subaru' ,'code' => 'SUB'),
          array('id' =>65 , 'name' => 'Suzuki' ,'code' => 'SUZUKI'),
          array('id' =>66 , 'name' => 'Tesla' ,'code' => 'TESLA'),
          array('id' =>67 , 'name' => 'Toyota' ,'code' => 'TOYOTA'),
          array('id' =>68 , 'name' => 'Triumph' ,'code' => 'TRI'),
          array('id' =>69 , 'name' => 'Volkswagen' ,'code' => 'VOLKS'),
          array('id' =>70 , 'name' => 'Volvo' ,'code' => 'VOLVO'),
          array('id' =>71 , 'name' => 'Yugo' ,'code' => 'YUGO'),
        );
        DB::table('tbl_vehicle_makes')->insert($makes);
    }
}
