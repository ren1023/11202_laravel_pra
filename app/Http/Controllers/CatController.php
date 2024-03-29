<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\cat;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Cat::where('id', '>', 5)->orderByDesc('id')->get();
        return view('cat.index', ['data' => $data]);



        // dd('hello cat index');
        // $data=view('cat.index');
        // dd($data);
        // $url=route('cats', ['cat' => 1]);
        // $url = route('cats.edit', ['cat' => 1]);
        // dd($url);

        /**測試新增資料*/
        // $data=DB::table('cats')->insert([
        //     'name'=>'gg',
        //     'mobile' => '0999'
        // ]);
        // dd($data);

        /** 測試撈取資料 
         */
        // $data['cats'] = DB::select('SELECT * FROM cats');
        // $data['dogs'] = DB::select('SELECT * FROM dogs');
        // $data['test'] = '123';
        //dd會帶有中斷的指令
        // dd($cats);

        /**連線至首頁 */

        // return view('cat.index',['data'=>$data]);
        // return view('cat.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $url=
        // route('cats.store');
        return view('cat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);//印出$request的參數
        $input=$request->except('_token');
        $now=now();
        // dd($input);//實際印出輸入的資料
        // dd('hello cat store');//確認當form表單送出post時，是否有收到

        // DB::table('cats')->insert([
        //     'name' => $input['name'],
        //     'mobile' => $input['mobile'],
        //     'created_at' => $now,
        //     'updated_at' => $now
        // ]);
        return redirect()->route('cats.index');//回首頁
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd("hello $id");//使用模擬的網址http://localhost/cats/556888/edit

        // dd("Hello $id");
        // $data['cats'] = DB::select('SELECT * FROM cats');
        // dd($data);

        return view('cat.edit');


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function excel(){
        dd('hello cats excel');
    }
}
