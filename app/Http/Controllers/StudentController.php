<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function index(){
        $student = Student::paginate(5);
        return view('index', compact('student'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        Student::create($request->all());
        return redirect()->route('student.index')->with('thongbao', 'Thêm sinh viên thành công!');
    }
    public function edit(Student $student){
        return view('edit', compact('student'));
    }
    public function show($id){}

    public function update(Request $request, Student $student){
        $student->update($request->all());
        return redirect()->route('student.index')->with('thongbao', 'Cập nhập thành công!');
    }
    public function destroy(Student $student){
        $student->delete();
        return redirect()->route('student.index')->with('thongbao', 'Xóa thành công!');
    }

}
