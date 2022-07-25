<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show(){

        // fetching data from table

        // $students = Student::all();


        // building queries

        // $students = Student::where('Name','SDE')->get();


        // chunking results

        // Student::chunk(2,function($students){
        //     echo "chunking";
        //     echo "<br>";
        //     foreach($students as $s){
        //         echo $s->Name;
        //         echo "<br>";
        //     }
        // });


        // Retrieving single model / aggregates

        // find()
        
        // $students = Student::find(1);


        // where()

        // $students = Student::where('age','18')->first();

        // firstwhere() -> shortcut of where() & first()

        // $students = Student::firstWhere('age','18');

        // firstOr() -> if nothing found then execute

        // $students = Student::where('age', '=' , '18')->firstOr(function(){
        //     echo "Record Not Found";
        // });


        // Retrieving or creating models

        // firstOrCreate() -> found if retreeive else create

        // $students = Student::firstOrCreate(
        //     ['Name' => 'MK'],['Age' => 25,'Date' => '2022-07-22']
        // );

        // firstOrNew() -> found if retrieve else just return but not save in db

        // $students = Student::firstOrCreate(
        //     ['Name' => 'MVK'],['Age' => 25,'Date' => '2022-07-22']
        // );
        // $students->save(); // used to save firstOrNew()


        // Aggregate Functions

        // $students = Student::where('Age',18)->count();
        // $students = Student::where('Age',18)->min('age');
        // $students = Student::where('Age',18)->max('age');
        // dd($students); 


        // INSERT 


        // $students = new Student();
        // $students->Name = 'INS';  // can also be use in var format
        // $students->Age = '24';
        // $students->Date = '2022-07-22';
        // $students->save();


        // INSERT USING CREATE METHOD
        
        // $students = Student::create([
        //     'Name' => 'SOM',
        //     'Age' => 20,
        //     'Date' => '2020-07-22'
        // ]);


        // UPDATE

        // $students = Student::find(1);
        // $students->Name = 'Mohammed';
        // $students->save();

        // MASS UPDATE

        // $students = Student::where('Age',18)->update(['Age'=>100]);
       

        // updateOrCreate -> update if found else create

        // Student::updateOrCreate(
        //     ['Age' => 959], // finding
        //     ['Name' => 'UPD', 'Date' => '2022-09-10'] // changing
        // );

        // DELETE

        // $students = Student::find(10);
        // $students->delete();


        // DELETE USING DESTROY

        // $students = Student::destroy(1);

    
        // DELETE USING QUERIES

        // $students = Student::where('age','99')->delete();

      
        // Truncate -> Del Table records

        // Student::trunacate();


        $data = compact('students');
        return view('welcome',$data);

        
    }
}
