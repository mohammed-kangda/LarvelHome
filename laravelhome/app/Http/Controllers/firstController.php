<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class firstController extends Controller
{

    public function show(){

        // take() show data as per given arg
        // $students = DB::table('laravelfirst')->take(1)->get();
        // dd($students);

        // skip() take() means skip 1 & show next 3 data
        // $students = DB::table('laravelfirst')->skip(1)->take(3)->get();
        // dd($students);

        // limit
        // $students = DB::table('laravelfirst')->limit(2)->get();
        // dd($students);

        // offset() and limit(): means live 1st & show next 2 data
        // $students = DB::table('laravelfirst')->offset(1)->limit(2)->get();
        // dd($students);



        // insert() -- single data

        // DB::table('laravelfirst')->insert([
        //    'name' => 'NEW',
        //    'marks' => 30
        // ]);

        
        // insert() -- mult data

        // DB::table('laravelfirst')->insert([
        //     ['name'=>'PHP','marks'=>90],
        //     ['name'=>'PDO','marks'=>10]
        //  ]) ;

        // insertorignore() -- single data

        // DB::table('laravelfirst')->insertOrIgnore([
        //    'id' => 1,
        //    'name' => 'NEW',
        //    'marks' => 30
        // ]);


        // insertgetid() - provide id of inserted data

        // $id = DB::table('laravelfirst')->insertGetId([
        //     'name' => 'WER',
        //     'marks' => 30
        // ]);
        // dd($id);



        // upadte method()

        // $affected = DB::table('laravelfirst')->where('id',13)->update([
        //     'name'=>'CHANGE'
        // ]);

        // dd($affected);


        // upadte or insert method() -> rec found update else insert data

        // DB::table('laravelfirst')->updateOrInsert(
        //     ['name'=>'CHANGE'],
        //     ['marks'=>99]
        // );


        // Delete Method

        DB::table('laravelfirst')->where('id',10)->delete();


        // Truncate Method -> delete all records

        // DB::table('laravelfirst')->truncate();
    }
    

}  
