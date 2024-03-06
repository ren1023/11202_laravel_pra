<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('hello cat index');
        // $data=view('cat.index');
        // dd($data);
        // $url=route('cats', ['cat' => 1]);
        // $url = route('cats.edit', ['cat' => 1]);
        // dd($url);
        return view('cat.index');

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
        // $input=$request->except('_token');
        // dd($input);//實際印出輸入的資料
        // dd('hello cat store');//確認當form表單送出post時，是否有收到
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

        dd("Hello $id");
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
