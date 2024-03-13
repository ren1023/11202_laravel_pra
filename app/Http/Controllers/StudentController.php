<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\Mobile;

use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = Student::get();
        $data = Student::with('mobileRelation')->get();//學生資料表關聯mobile資料表
        return view('student.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // dd($request);
                $input = $request->except('_token');

                // 學生
                $data = new Student;
                $data->name = $input['name'];
                $data->save();
        
                // 手機
                $id = $data->id;
                $item = new Mobile;
                $item->student_id = $id;
                $item->mobile = $input['mobile'];
                $item->save();
        
                 return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        //
        $id=$student->id;
        $data=Student::where('id',$id)->with('mobileRelation')->first();
        // dd($data); //可以確認關聯資料撈出時結果
        return view('student.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        //
        $input=$request->except('_token','_method');
        // dd($input);
        //update students
        $id=$student->id;//將學生的id存起來
        $data=Student::where('id',$id)->first();//使用id撈一筆資料
        $data->name=$input['name'];//將名字欄位的值取出來
        $data->save();//將名字欄位的值

        //方法二：update mobiles
        // Mobile::where('student_id',$id)->delete();
        // //儲存
        // $id = $data->id;
        // $item = new Mobile;
        // $item->student_id = $id;
        // $item->mobile = $input['mobile'];
        // $item->save();





        //方法一：update mobiles
        $data=Mobile::where('student_id',$id)->first();//使用id撈一筆資料
        $data->name=$input['mobile'];//將電話欄位的值取出來
        $data->save();//將電話欄位的值

        return redirect()->route('students.index');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        // delete students
        Student::where('id', $student->id)->delete();
        
        // delete mobiles
        Mobile::where('student_id', $student->id)->delete();

        return redirect()->route('students.index');
    }
}
