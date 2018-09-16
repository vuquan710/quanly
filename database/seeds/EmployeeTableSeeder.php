<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayName = ['Big','Nobita','Doremon','Xuka'];
        $arraySchool = ['Hanu','NEU', 'HUST', 'FTU'];
        $arrayCountry = ['Ha Noi', 'Ninh Binh', 'Ha Dong', 'Ha Tay'];
        for ($i = 1; $i < 10; $i++){
            DB::table('employees')->insert([
                'Stt' => '00'.$i,
                'Name' => $arrayName[random_int(0,3)].$i,
                'Country' => $arrayCountry[random_int(0,3)],
                'School' => $arraySchool[random_int(0,3)],
                'Rank' => random_int(0,1),
                'Bod' => date("Y-m-d H:i:s",mt_rand(strtotime('1995-12-10'),strtotime('2016-12-10')))
            ]);
        }
    }
}
