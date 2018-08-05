<?php

use Illuminate\Database\Seeder;

class StudentsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayName = ['Big','Nobita','Doremon','Xuka'];
        $arrayParent = ['Mr.Right','Mr.Left','BigDaddy','Mr.T'];
        $arrayClassName = ['IELTS','ENGLISH B', 'TOEIC', 'English Basic'];
        for ($i = 50; $i < 60; $i++){
            DB::table('students')->insert([
                'Stt' => '00'.$i,
                'Name' => $arrayName[random_int(0,3)].$i,
                'Parent' => $arrayParent[random_int(0,3)],
                'Course' => 'English_'.random_int(0,3),
//                'CourseNew' => 'English_New_'.random_int(0,3),
                'ClassName' => $arrayClassName[random_int(0,3)],
                'Phone' => '090'.rand(1111111,9999999),
                'Facebook' => $arrayName[random_int(0,3)].random_int(0,100),
                'Lecture' => random_int(1,3),
                'Status' => random_int(0,1),
                'Type' => 1,
                'Bod' => date("Y-m-d H:i:s",mt_rand(strtotime('1995-12-10'),strtotime('2016-12-10'))),
                'RegDate' => date("Y-m-d H:i:s",mt_rand(strtotime('2018-7-1'),strtotime('2018-7-29'))),
//                'RegDateNew' => date("Y-m-d H:i:s",mt_rand(strtotime('2018-7-1'),strtotime('2018-7-29'))),
            ]);
        }
    }
}
