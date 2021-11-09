<?php
<<<<<<< HEAD
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Kelas;
=======

namespace App\Http\Controllers;

use Illuminate\Http\Request;

>>>>>>> ba7a5c5719bd32033b275f418e057f21aeaf6372
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
<<<<<<< HEAD
{
$student = Student::with('kelas')->get();
return view('students.index', ['student'=>$student]);
}
=======
    {
        $student = Student::all();
        return view('students.index', ['student=>$students']);
    }

>>>>>>> ba7a5c5719bd32033b275f418e057f21aeaf6372
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        $kelas = Kelas::all();
        return view('students.create',['kelas'=>$kelas]);
    }
=======
        //
    }

>>>>>>> ba7a5c5719bd32033b275f418e057f21aeaf6372
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $student = new Student;
$student->nim = $request->nim;
$student->name = $request->name;
$student->department = $request->department;
$student->phone_number = $request->phone_number;
$kelas = new Kelas;
$kelas->id = $request->Kelas;
$student->kelas()->associate($kelas);
$student->save();
// if true, redirect to index
return redirect()->route('students.index')
->with('success', 'Add data success!');
    }
=======
        //
    }

>>>>>>> ba7a5c5719bd32033b275f418e057f21aeaf6372
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
<<<<<<< HEAD
        $student = Student::find($id);
return view('students.show',['student'=>$student]);
    }
=======
        //
    }

>>>>>>> ba7a5c5719bd32033b275f418e057f21aeaf6372
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
$kelas = Kelas::all();
return view('students.edit',['student'=>$student,
'kelas'=>$kelas]);
    }
=======
        //
    }

>>>>>>> ba7a5c5719bd32033b275f418e057f21aeaf6372
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
$student->department = $request->department;
$student->phone_number = $request->phone_number;
$kelas = new Kelas;
$kelas->id = $request->Kelas;
$student->kelas()->associate($kelas);
$student->save();
return redirect()->route('students.index');
    }
=======
        //
    }

>>>>>>> ba7a5c5719bd32033b275f418e057f21aeaf6372
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
<<<<<<< HEAD
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('students.index');

    }
}
=======
    }
}
>>>>>>> ba7a5c5719bd32033b275f418e057f21aeaf6372
