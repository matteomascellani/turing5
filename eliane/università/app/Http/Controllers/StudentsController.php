<?php

namespace App\Http\Controllers;
use App\Http\Requests\StudentRequest;
use App\Models\Student;
use App\Models\Professor;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items=Student::get();
        return view('student.index',compact('items'));
    }
    public function listProfessorStudents($professorId)
    {
        $allstudents=Student::all();//recupere tous les etudiants
        $professor=Professor::find($professorId);//recupere le prof avec vcet id
        $items=Professor::find($professorId)->students()->get();// tous les eleves du prof qu a cet id

       //$items=Professor::find($professorId)->students();//tous les etudiants dun professor
       //$items=Student::get();

        return view('student.professor_student',compact('items','professor','allstudents'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(StudentRequest $request)
    {
        $student=new Student();
        $student->create($request->input('student'));
        return redirect('/students');
    }
    public function addProfessorStudents(Request $request, $professorId)
    {
        $professor=Professor::find($professorId);//recupere le professor
        $professor->students()->attach($request->input('studentId'));//lie l'etudiant au prof
        return redirect()->route('professors.student.index',['professorId'=> $professorId]);

    }
    public function deleteProfessorStudents($professorId,Student $student)
    {
        $professor=Professor::find($professorId);//recupere le professor
       // $professor->students()->detach($request->input('studentId'));//delie l'etudiant au prof
       $professor->students()->detach($student);
        return redirect()->route('professors.student.index',['professorId'=> $professorId]);

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Student $student)
    {
        $student->update($request->input('student'));
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=new Student();
        $student->find($id)->delete();
        return redirect('students');
    }
}
