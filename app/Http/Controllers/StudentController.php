<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function manage()
    {
        // $students = DB::table('students')->get();
        // $students = DB::table('students')->first();
        // $students = DB::table('students')->where('city','Beerland')->get();
        // $students = DB::table('students')->where('city','Beerland')->first();
        // $students = DB::table('students')->where('city','Beerland')->value('email');
        // $students = DB::table('students')->find(10);
        // $students = DB::table('students')->pluck('name');
        // $students = DB::table('students')->pluck('name','email');
        // $students = DB::table('students')->count();
        // $students = DB::table('students')->max('age');
        // $students = DB::table('students')->min('age');
        // $students = DB::table('students')->select('name','email')->get();
        // $students = DB::table('students')->distinct()->get();
        // $students = DB::table('students')->where('id','=',4)->get();
        // $students = DB::table('students')->where('id',4)->get(); by default '='
        // $students = DB::table('students')->where('id','>',4)->get();
        // $students = DB::table('students')->where('name','LIKE',"s%")->get();
        // $students = DB::table('students')->where('name','LIKE',"%s")->get();
        // $students = DB::table('students')->where('id','=',4)->orWhere('name','=','akib')->get();
        // $students = DB::table('students')->whereBetween('age', [23,25])->get();
        // $students = DB::table('students')->whereBetween('age', [23,25])->orWhereBetween('id',[2,4])->get();
        // $students = DB::table('students')->whereNull('created_at')->get();
        // $students = DB::table('students')->whereNotNull('created_at')->get();
        // $students = DB::table('students')->whereNotBetween('id', [23,25])->get();
        // $students = DB::table('students')->whereIn('id', [23,25])->get();
        // $students = DB::table('students')->whereDate('created_at','2023-01-22')->get();
        // $students = DB::table('students')->whereMonth('created_at','01')->get();
        // $students = DB::table('students')->whereDay('created_at','22')->get();
        // $students = DB::table('students')->whereYear('created_at','2023')->get();
        // $students = DB::table('students')->orderBy('age')->get();
        // $students = DB::table('students')->orderBy('age','ASC')->get();
        // $students = DB::table('students')->orderBy('age','DESC')->get();
        // $students = DB::table('students')->latest('created_at')->get();
        // $students = DB::table('students')->latest('created_at')->first();
        // $students = DB::table('students')->oldest('created_at')->first();
        // $students = DB::table('students')->inRandomOrder()->get();
        // $students = DB::table('students')->inRandomOrder()->first();
        // $students = DB::table('students')->groupBy('name')->having('salary','<','5000')->get(); need config>database.php>strict: 'false' , but 'true' is better 
        // $students = DB::table('students')->take(5)->get();
        // $students = DB::table('students')->skip(3)->take(5)->get();
        // $students = DB::table('students')->offset(3)->limit(5)->get();
        //  DB::table('students')->insert(
        //     [
        //         'name' => 'noushed',
        //         'email' => 'noushed@gmail.com',
        //         'city' => 'dhaka',
        //         'salary' => 30000,
        //         'age' => 26,
        //         'created_at' =>'2023-01-22',
        //         'updated_at' =>'2023-01-22',
        //     ]
        // );

        //  DB::table('students')->insertOrIgnore(
        //     [
        //         'id' => 1,
        //         'name' => 'king',
        //         'email' => 'king@gmail.com',
        //         'city' => 'dhaka',
        //         'salary' => 30000,
        //         'age' => 26,
        //         'created_at' =>'2023-01-22',
        //         'updated_at' =>'2023-01-22'
        //     ]
        // );

        //  $students = DB::table('students')->insertGetId(
        //     [
        //         'name' => 'king',
        //         'email' => 'king@gmail.com',
        //         'city' => 'dhaka',
        //         'salary' => 30000,
        //         'age' => 26,
        //         'created_at' =>'2023-01-22',
        //         'updated_at' =>'2023-01-22'
        //     ]
        // );

        //  DB::table('students')->where('id',1)->update(
        //     [
        //         'name' => 'noushedul islam',
        //         'email' => 'islam@gmail.com',
        //         'city' => 'dhaka',
        //         'salary' => 30000,
        //         'age' => 26,
        //         'created_at' =>'2023-01-22',
        //         'updated_at' =>'2023-01-22'
        //     ]
        // );

        //  DB::table('students')->updateOrInsert(
        //     [
        //         ['name'=>'noushedul islam'],
        //         ['city'=>'chittagong','salary'=>24000]
        //     ]
        // ); need stric:'false'

        // $students = DB::table('students')->truncate();
        // DB::table('students')->where('id',2)->delete();

        // *****
        $students = DB::select('select * from students');
        // $students = DB::select('select * from students where id = ?',[1]);
        // $students = DB::select('select * from students where id = :id',['id'=>1]);
        // $students = DB::insert('INSERT INTO students(name,email,city,salary,age) VALUES(?,?,?,?,?)',['noushed','noushed@gmail.com','rajshahi','23000','25']);
        // $students = DB::update('update students set name = ?,age = ? where id = ?', ['John',27,31]);
        // $students = DB::update('update students set name = :name,age = :age where id = :id', [
        //     'name' => 'noushedul islam',
        //     'age' => 25,
        //     'id'  => 31
        // ]);
        //  $students = DB::table('students')->whereNotNull('created_at')->get();
        // return $students;
        // *****

        // return $students;
        return view('manage-students',['students'=>$students]);
    }
}
