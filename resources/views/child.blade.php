<!-- resources/views/child.blade.php -->
 
@extends('layouts.app'){{--這個child.blade.php是從 views/layouts/app.blade.php繼承而來的 --}}
 
@section('title', 'Page Title1234')
 
@section('sidebar')
    @parent  {{-- This is the master sidebar. --}}
 
    <p style="color:blueviolet">This is appended to the master(app.blade.php) sidebar.</p>
@endsection
 
@section('content')
    <p>This is my body(child.blade.php) content.</p>
@endsection