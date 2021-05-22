<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfessorsRequest;
use App\Models\Professor;
use App\Models\Student;

class ProfessorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $items=Professor::all();

        return view('professor.index',compact('items'));
    }
    public function listprofessors($studentId)
    {

        $student=Student::find($studentId);
        $professor=Professor::all();
        $items=Student::find($studentId)->professors()->get();
        return view('professor.student_prof',compact('student','professor','items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student=Student::all();
        return view('professor.create',compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfessorsRequest $request)
    {
        $professor=new Professor();
        $professor->create($request->input('professor'));
        return redirect('/professors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function edit(Professor $professor)
    {
        return view('professor.edit',compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professor $professor)
    {
        $professor->update($request->input('professor'));
        return redirect('/professors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professor $professor)
    {
        $professor->delete($professor);
        return redirect('/professors');
    }
}
