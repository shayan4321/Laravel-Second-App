
@extends('layout')

@section('title','Login Page')

@section('main')
<div class="main">
    <h1>User Login</h1>
    <form action="" method="get">
        <input type="text" placeholder="Enter Name">
        <br><br>
        <input type="text" placeholder="Enter Password">
        <br><br>
        <button>Login</button>
    </form>
</div>

@endsection