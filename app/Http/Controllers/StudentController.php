<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{

    public function addstudent()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $student = new Student;
        $student->ten = $request->input('ten');
        $student->email = $request->input('email');
        $student->gioitinh = $request->input('gioitinh');
        $student->diachi = $request->input('diachi');
        if ($request->hasFile('anhdaidien')) {
            $file = $request->file('anhdaidien');
            $extension = $file->getClientOriginalExtension(); 
            $filename = time() . '.' . $extension;
            $file->move('uploads/students/', $filename);  
            $student->anhdaidien = $filename;
        }
        $student->save();
        return redirect()->back()->with('status', 'Them sinh vien thanh cong');
    }
    
    public function index()
    {
        $students = Student::all();  
        return view('student.index', compact('students')); 
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        
        $student = Student::find($id);
        $student->ten = $request->input('ten');
        $student->email = $request->input('email');
        $student->gioitinh = $request->input('gioitinh');
        $student->diachi = $request->input('diachi');
        if ($request->hasFile('anhdaidien')) {
            
            $anhcu = 'uploads/students/' . $student->anhdaidien;
            if (File::exists($anhcu)) {
                File::delete($anhcu);
            }
            $file = $request->file('anhdaidien');
            $extension = $file->getClientOriginalExtension(); 
            $filename = time() . '.' . $extension;
            $file->move('uploads/students/', $filename); 
            $student->anhdaidien = $filename;
        }
        $student->update();
        return redirect()->back()->with('status', 'Cap nhat thanh cong');
    }
    //xoa - Delete - D
    public function delete($id)
    {
        $student = Student::find($id);
        $anhdaidien = 'uploads/students/' . $student->anhdaidien;
        if (File::exists($anhdaidien)) {
            File::delete($anhdaidien);
        }
        $student->delete();
        return redirect()->back()->with('status', 'Xóa sinh viên và ảnh đại diện thành công');
    }
}
