<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // function yang menampilkan smuah data
    public function index()
    {
        $data = Student::all();
        return view('student.index', ['student' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //function creat untuk menampilkan form yang nantinyah datanyah akan disimpan di function store()
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //function stor berfungsi untuk menerima data dri function create yang nantinyah akan di kelola olah function store()
    public function store(Request $request)
    {
        // validasi data
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'email' => 'required',
            'jurusan' => 'required',
        ]);
        // simpan data ke database
        // Student::create([
        //     'nama' => $request->nama,
        //     'nim' => $request->nim,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ]);
        // atau bisa juga menggunakan
        Student::create($request->all());
        return redirect('/students')->with('message', 'Data Berhasil Ditambahakan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    //function yang menampilkan detail spesifik data
    public function show(Student $student)
    {
        return view('student/show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    // function yang bertugas untuk menampilkan view edit
    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    // function untuk simpan update data ke database
    public function update(Request $request, Student $student)
    {
        Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'email' => $request->email,
                'jurusan' => $request->jurusan,
            ]);
        return redirect('/students')->with('message', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    //  function untuk menghapus data
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('message', 'Data Berhasil Dihapus');
    }
}
