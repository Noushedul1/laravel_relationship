```php

        1: $students = DB::table('students')->get();

        2: $students = DB::table('students')->first();

        3: $students = DB::table('students')->where('city','Beerland')->get();

        4: $students = DB::table('students')->where('city','Beerland')->first();

        5: $students = DB::table('students')->where('city','Beerland')->value('email');

        6: $students = DB::table('students')->find(10);

        7: $students = DB::table('students')->pluck('name');

        8: $students = DB::table('students')->pluck('name','email');

        9: $students = DB::table('students')->count();

        10: $students = DB::table('students')->max('age');

        11: $students = DB::table('students')->min('age');

        12: $students = DB::table('students')->select('name','email')->get();

        13: $students = DB::table('students')->distinct()->get();

        14: $students = DB::table('students')->where('id','=',4)->get();

        15: $students = DB::table('students')->where('id',4)->get(); by default '='

        16: $students = DB::table('students')->where('id','>',4)->get();

        17: $students = DB::table('students')->where('name','LIKE',"s%")->get();

        18: $students = DB::table('students')->where('name','LIKE',"%s")->get();

        19: $students = DB::table('students')->where('id','=',4)->orWhere('name','=','akib')->get();

        20: $students = DB::table('students')->whereBetween('age', [23,25])->get();

        21: $students = DB::table('students')->whereBetween('age', [23,25])->orWhereBetween('id',[2,4])->get();

        22: $students = DB::table('students')->whereNull('created_at')->get();

        23: $students = DB::table('students')->whereNotNull('created_at')->get();

        24: $students = DB::table('students')->whereNotBetween('id', [23,25])->get();

        25: $students = DB::table('students')->whereIn('id', [23,25])->get();

        26: $students = DB::table('students')->whereDate('created_at','2023-01-22')->get();

        27: $students = DB::table('students')->whereMonth('created_at','01')->get();

        28: $students = DB::table('students')->whereDay('created_at','22')->get();

        29: $students = DB::table('students')->whereYear('created_at','2023')->get();

        30: $students = DB::table('students')->orderBy('age')->get();

        31: $students = DB::table('students')->orderBy('age','ASC')->get();

        31: $students = DB::table('students')->orderBy('age','DESC')->get();

        32: $students = DB::table('students')->latest('created_at')->get();

        33: $students = DB::table('students')->latest('created_at')->first();

        34: $students = DB::table('students')->oldest('created_at')->first();

        35: $students = DB::table('students')->inRandomOrder()->get();

        36: $students = DB::table('students')->inRandomOrder()->first();

        37: $students = DB::table('students')->groupBy('name')->having('salary','<','5000')->get(); need config>database.php>strict: 'false' , but 'true' is better 

        38: $students = DB::table('students')->take(5)->get();
        39: $students = DB::table('students')->skip(3)->take(5)->get();
        40: $students = DB::table('students')->offset(3)->limit(5)->get();
         41: DB::table('students')->insert(
            [
                'name' => 'noushed',
                'email' => 'noushed@gmail.com',
                'city' => 'dhaka',
                'salary' => 30000,
                'age' => 26,
                'created_at' =>'2023-01-22',
                'updated_at' =>'2023-01-22',
            ]
        );

         42: DB::table('students')->insertOrIgnore(
            [
                'id' => 1,
                'name' => 'king',
                'email' => 'king@gmail.com',
                'city' => 'dhaka',
                'salary' => 30000,
                'age' => 26,
                'created_at' =>'2023-01-22',
                'updated_at' =>'2023-01-22'
            ]
        );

         43: $students = DB::table('students')->insertGetId(
            [
                'name' => 'king',
                'email' => 'king@gmail.com',
                'city' => 'dhaka',
                'salary' => 30000,
                'age' => 26,
                'created_at' =>'2023-01-22',
                'updated_at' =>'2023-01-22'
            ]
        );

         44: DB::table('students')->where('id',1)->update(
            [
                'name' => 'noushedul islam',
                'email' => 'islam@gmail.com',
                'city' => 'dhaka',
                'salary' => 30000,
                'age' => 26,
                'created_at' =>'2023-01-22',
                'updated_at' =>'2023-01-22'
            ]
        );

        45:  DB::table('students')->updateOrInsert(
            [
                ['name'=>'noushedul islam'],
                ['city'=>'chittagong','salary'=>24000]
            ]
        ); need stric:'false'

        46: DB::table('students')->truncate();
        47: DB::table('students')->where('id',2)->delete();

        *****
        48: $students = DB::select('select * from students');
        49: $students = DB::select('select * from students where id = ?',[1]);
        50: $students = DB::select('select * from students where id = :id',['id'=>1]);
        51: $students = DB::insert('INSERT INTO students(name,email,city,salary,age) VALUES(?,?,?,?,?)',['noushed','noushed@gmail.com','rajshahi','23000','25']);
        52: $students = DB::update('update students set name = ?,age = ? where id = ?', ['John',27,31]);
        53: $students = DB::update('update students set name = :name,age = :age where id = :id', [
            'name' => 'noushedul islam',
            'age' => 25,
            'id'  => 31
        ]);
         54: $students = DB::table('students')->whereNotNull('created_at')->get();
        return $students;
        *****

        return $students;
        return view('manage-students',['students'=>$students]);
```