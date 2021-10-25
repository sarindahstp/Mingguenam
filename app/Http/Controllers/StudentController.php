<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $students = Student::all();
        return view('students.index', ['student'=>$students]);
=======
        $student = Student::all();
        return view('students.index', ['student=>$students']);
>>>>>>> ba7a5c5719bd32033b275f418e057f21aeaf6372
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        return view('students.create');
=======
        //
>>>>>>> ba7a5c5719bd32033b275f418e057f21aeaf6372
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        //add data
        Student::create($request->all());

        // if true, redirect to index
        return redirect()->route('students.index')
                         ->with('success', 'Add data success!');
    }
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
=======
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
>>>>>>> ba7a5c5719bd32033b275f418e057f21aeaf6372
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< HEAD
        $student = Student::find($id);
        return view('students.edit',['student'=>$student]);
=======
        //
>>>>>>> ba7a5c5719bd32033b275f418e057f21aeaf6372
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
<<<<<<< HEAD
        $student = Student::find($id);
        $student->nim = $request->nim;
        $student->name = $request->name;
        $student->class = $request->class;
        $student->department = $request->department;
        $student->phone_number = $request->phone_number;
        $student->save();
        return redirect()->route('students.index');
=======
        //
>>>>>>> ba7a5c5719bd32033b275f418e057f21aeaf6372
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
       //
=======
        //
>>>>>>> ba7a5c5719bd32033b275f418e057f21aeaf6372
    }
}
